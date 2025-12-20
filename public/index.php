<?php
ob_start(); 
// RaggieSoft Elara Router v5.3
// Updated: Added Path-Based Inheritance (resolveAsset) for Headers/Sidebars

define('ROOT_PATH', dirname(__DIR__));
$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Normalize trailing slashes
if (strlen($request_uri) > 1) {
    $request_uri = rtrim($request_uri, '/');
}

// --- 1. LOAD GLOBAL SETTINGS ---
$settingsFile = ROOT_PATH . '/data/settings.json';

if (!file_exists($settingsFile)) {
    die('Critical Error: Configuration file (data/settings.json) missing.');
}

$settings = json_decode(file_get_contents($settingsFile), true);

if (json_last_error() !== JSON_ERROR_NONE) {
    die('Critical Error: Invalid JSON in settings.json');
}

// Extract Core Globals
$siteName = $settings['siteName']; 
$projectSlug = $settings['projectSlug']; 
$cdnBaseUrl = $settings['cdnBaseUrl'];
$defaultTheme = $settings['defaultTheme']; 

// Build Defaults Array
$defaults = array_merge($settings['defaults'], [
    'title' => $siteName, 
    'theme' => $defaultTheme,
    'site' => $projectSlug,
    // Construct Full URLs
    'ogImage' => $cdnBaseUrl . $settings['defaults']['ogImage'],
    'ogUrl' => "https://" . $_SERVER['HTTP_HOST'] . $request_uri,
    'navbarBrandLogo' => $cdnBaseUrl . $settings['defaults']['navbarBrandLogo']
]);

// --- 2. ROUTE DISCOVERY (FORENSIC MODE) ---
$routes = [];
$routeOrigins = []; 

$routeDirectory = ROOT_PATH . '/data/routes';

if (is_dir($routeDirectory)) {
    $directoryIterator = new RecursiveDirectoryIterator($routeDirectory, RecursiveDirectoryIterator::SKIP_DOTS);
    $iterator = new RecursiveIteratorIterator($directoryIterator);
    
    foreach ($iterator as $file) {
        if ($file->isFile() && strtolower($file->getExtension()) === 'json') {
            
            $jsonContent = file_get_contents($file->getPathname());
            $routeData = json_decode($jsonContent, true);

            if (json_last_error() === JSON_ERROR_NONE && is_array($routeData)) {
                
                foreach ($routeData as $path => $config) {
                    $routes[$path] = $config;
                    if (!isset($routeOrigins[$path])) {
                        $routeOrigins[$path] = [];
                    }
                    $routeOrigins[$path][] = $file->getFilename();
                }

            } else {
                error_log("Elara Router Error: Invalid JSON in " . $file->getFilename());
            }
        }
    }
}

// --- 3. COLLISION ANALYSIS ---
foreach ($routeOrigins as $path => $files) {
    if (count($files) > 1) {
        $fileList = implode(', ', $files);
        error_log("Elara Router Conflict: Route '$path' is defined in multiple files: [$fileList]");
        
        $routes[$path] = [
            'view' => 'errors/500', 
            'title' => 'Configuration Error: Duplicate Route',
            'site' => 'portfolio',
            'error_type' => 'collision',
            'error_details' => "Route Collision: The path <strong>'$path'</strong> is defined in " . count($files) . " separate files:<br><br><code>" . $fileList . "</code>"
        ];
    }
}

// --- HELPER: RESOLVE ASSET INHERITANCE ---
function resolveAsset($map, $currentUri) {
    // 1. Clean the path
    $path = rtrim(parse_url($currentUri, PHP_URL_PATH), '/');
    
    // 2. Walk up the directory tree
    // Loop continues until we hit the root or an empty path
    while ($path !== '' && $path !== '.' && $path !== '/') {
        // Check exact match
        if (isset($map[$path])) {
            return $map[$path];
        }
        
        // Move up one level
        $path = dirname($path);
        
        // Windows fix: dirname can return backslashes
        $path = str_replace('\\', '/', $path);
    }
    
    // 3. Check Root ('/') if defined in map
    if (isset($map['/'])) {
        return $map['/'];
    }

    return null; // Fallback to default
}

// --- 4. SMART ROUTER LOGIC ---

// A. Check for Explicit Configuration
$pageConfig = $routes[$request_uri] ?? [];

// B. Auto-Discovery Logic
if (!isset($pageConfig['view'])) {
    $potentialPath = 'pages' . $request_uri;
    
    if (file_exists(ROOT_PATH . '/' . $potentialPath . '.php')) {
        $pageConfig['view'] = $potentialPath;
    } elseif (is_dir(ROOT_PATH . '/' . $potentialPath)) {
        if (file_exists(ROOT_PATH . '/' . $potentialPath . '/overview.php')) {
            $pageConfig['view'] = $potentialPath . '/overview';
            $isIndexPage = true;
        } elseif (file_exists(ROOT_PATH . '/' . $potentialPath . '/home.php')) {
            $pageConfig['view'] = $potentialPath . '/home';
            $isIndexPage = true;
        }
    }
}

// C. Sidebar Intelligence
if (isset($pageConfig['view'])) {
    
    // Load Map from JSON Settings
    $sidebarMap = $settings['sidebarMap'] ?? [];

    // Use Inheritance Helper if sidebar not explicitly set
    if (!isset($pageConfig['sidebar'])) {
        $resolvedSidebar = resolveAsset($sidebarMap, $request_uri);
        if ($resolvedSidebar) {
            $pageConfig['sidebar'] = $resolvedSidebar;
        }
    }

    if (!isset($pageConfig['showSidebar'])) {
        if (isset($pageConfig['sidebar']) && $pageConfig['sidebar'] !== 'sidebar-default') {
             $pageConfig['showSidebar'] = true;
             if (array_key_exists($request_uri, $sidebarMap)) {
                 $pageConfig['showSidebar'] = false;
             }
        } elseif (isset($isIndexPage) && $isIndexPage) {
            $pageConfig['showSidebar'] = false;
        }
    }

    // Auto-Title
    if (!isset($pageConfig['title'])) {
        $titleFound = false;
        $viewPath = ROOT_PATH . '/' . $pageConfig['view'] . '.php';
        if (file_exists($viewPath)) {
            $content = file_get_contents($viewPath);
            if (preg_match('/<h1[^>]*>(.*?)<\/h1>/si', $content, $matches)) {
                $h1Text = trim(strip_tags($matches[1])); 
                if (!str_contains($h1Text, '<?')) {
                    $pageConfig['title'] = $h1Text . ' - ' . $siteName;
                    $titleFound = true;
                }
            }
        }
        if (!$titleFound) {
            $slug = basename($request_uri);
            $pageConfig['title'] = ($slug === '' || $slug === 'index.php') ? 'Home - ' . $siteName : ucwords(str_replace('-', ' ', $slug)) . ' - ' . $siteName;
        }
    }
}

// --- AUTOMATED ASSET LOGIC ---
if (str_starts_with($request_uri, '/discography/') && $request_uri !== '/discography') {
    $albumSlug = basename($request_uri); 
    if (!isset($pageConfig['ogImage'])) {
        $pageConfig['ogImage'] = $cdnBaseUrl . "/stardust-engine/music/" . $albumSlug . "/social-preview.jpg";
    }
    if (!isset($pageConfig['ogTitle']) && isset($pageConfig['title'])) {
        $pageConfig['ogTitle'] = $pageConfig['title'];
    }
}

// --- CONTEXT INHERITANCE ---
if (str_starts_with($request_uri, '/engine-room')) {
    if (!isset($pageConfig['site'])) { $pageConfig['site'] = 'portfolio'; }
    if (!isset($pageConfig['showSidebar'])) { $pageConfig['showSidebar'] = false; }
    if (!isset($pageConfig['navbarBrandLogo'])) {
        $pageConfig['navbarBrandLogo']  = $cdnBaseUrl . '/engine-room-records/images/logos/engine-room-records-logo.jpg';
        $pageConfig['navbarBrandText']  = 'Engine Room<span class="d-none d-md-inline"> Records</span>';
        $pageConfig['navbarBrandLink']  = '/engine-room';
        $pageConfig['navbarBrandAlt']   = 'Engine Room Records Official Seal';
        $pageConfig['navbarBrandClass'] = 'rounded-0 navbar-brand-corporate-img';
    }
}

// --- 5. RENDER ---
$config = array_merge($defaults, $pageConfig);

if ($config['view'] === 'errors/500') {
    http_response_code(500);
} elseif ($config['view'] === 'errors/404') {
    http_response_code(404);
    if (!isset($pageConfig['theme'])) { $config['theme'] = 'ad-astra'; }
}

// Extract variables for the View
$pageTitle = $config['title'];
$currentPageTheme = $config['theme'];
$showSidebar = $config['showSidebar'];
$currentSite = $config['site'];
$ogTitle = $config['ogTitle'];
$ogDescription = $config['ogDescription'];
$ogImage = $config['ogImage'];
$ogUrl = $config['ogUrl'];

$navbarBrandLogo  = $config['navbarBrandLogo'];
$navbarBrandText  = $config['navbarBrandText'];
$navbarBrandLink  = $config['navbarBrandLink'];
$navbarBrandAlt   = $config['navbarBrandAlt'];
$navbarBrandClass = $config['navbarBrandClass'];

// --- HEADER LOGIC (UPDATED) ---
// 1. Check Route Config Override First
if (isset($pageConfig['headerMenu'])) {
    $headerFile = $pageConfig['headerMenu'];
} else {
    // 2. Check Global Header Map using Inheritance Helper
    $headerMap = $settings['headerMap'] ?? [];
    $headerFile = resolveAsset($headerMap, $request_uri) ?? 'header-default';
}
$currentHeaderMenu = ROOT_PATH . '/includes/components/headers/' . $headerFile . '.php';

// Sidebar Logic
$currentSidebar = ROOT_PATH . '/includes/components/sidebars/' . $config['sidebar'] . '.php';

require_once ROOT_PATH . '/includes/header.php';

echo '<div class="container-fluid flex-grow-1 d-flex p-0">';
echo '  <div class="row flex-grow-1 m-0 w-100">';

if ($showSidebar && file_exists($currentSidebar)) {
    echo '    <aside class="col-md-3 col-lg-2 d-none d-md-block bg-body-tertiary border-end p-3">';
    require_once $currentSidebar;
    echo '    </aside>';
    echo '    <main id="main-content" class="col-md-9 col-lg-10 p-4">';
} else {
    echo '    <main id="main-content" class="col-12 p-0">'; 
}

if (file_exists(ROOT_PATH . '/' . $config['view'] . '.php')) {
    require_once ROOT_PATH . '/' . $config['view'] . '.php';
} else {
    http_response_code(404);
    require_once ROOT_PATH . '/public/errors/404.php';
}

echo '    </main>'; 
echo '  </div>'; 
echo '</div>'; 

require_once ROOT_PATH . '/includes/footer.php';
ob_end_flush();
?>