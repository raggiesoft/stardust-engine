<?php
ob_start(); 
// RaggieSoft Elara Router v4.5
// Updated: Deep Forensic Collision Detection

define('ROOT_PATH', dirname(__DIR__));
$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Normalize trailing slashes
if (strlen($request_uri) > 1) {
    $request_uri = rtrim($request_uri, '/');
}

// --- 1. GLOBAL DEFAULTS ---
$siteName = 'The Stardust Engine'; 
$projectSlug = 'stardust-engine'; 
$cdnBaseUrl = 'https://assets.raggiesoft.com';
$defaultTheme = 'stardust-engine'; 

$defaults = [
    'view' => 'errors/404',
    'title' => $siteName, 
    'theme' => $defaultTheme,
    'showSidebar' => false, 
    'sidebar' => 'sidebar-default',
    'site' => $projectSlug,
    'ogTitle' => 'The Stardust Engine - Official Band Archive',
    'ogDescription' => "The official archive of the fictional 80s band 'The Stardust Engine.'",
    'ogImage' => $cdnBaseUrl . "/stardust-engine/images/social-media/stardust-engine-logo-social.jpg",
    'ogUrl' => "https://thestardustengine.com" . $request_uri,
    'navbarBrandLogo' => $cdnBaseUrl . "/stardust-engine/images/logos/stardust-engine-logo.png",
    'navbarBrandText' => '<span class="d-none d-md-inline">The </span>Stardust Engine',
    'navbarBrandLink' => '/',
    'navbarBrandAlt'  => 'Stardust Logo',
    'navbarBrandClass' => 'rounded-circle shadow-glow'
];

// --- 2. ROUTE DISCOVERY (FORENSIC MODE) ---
$routes = [];
$routeOrigins = []; // Tracks which files claimed which route

$routeDirectory = ROOT_PATH . '/routes';

if (is_dir($routeDirectory)) {
    $directoryIterator = new RecursiveDirectoryIterator($routeDirectory, RecursiveDirectoryIterator::SKIP_DOTS);
    $iterator = new RecursiveIteratorIterator($directoryIterator);
    
    foreach ($iterator as $file) {
        if ($file->isFile() && strtolower($file->getExtension()) === 'json') {
            
            $jsonContent = file_get_contents($file->getPathname());
            $routeData = json_decode($jsonContent, true);

            if (json_last_error() === JSON_ERROR_NONE && is_array($routeData)) {
                
                // DATA GATHERING PHASE
                foreach ($routeData as $path => $config) {
                    // 1. Store the config (Last loaded wins temporarily)
                    $routes[$path] = $config;
                    
                    // 2. Record the source file
                    // We store the filename in an array for this specific path
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
// Now we check the records. If any route has > 1 origin, it is a collision.

foreach ($routeOrigins as $path => $files) {
    if (count($files) > 1) {
        // COLLISION DETECTED
        $fileList = implode(', ', $files);
        
        // Log to server
        error_log("Elara Router Conflict: Route '$path' is defined in multiple files: [$fileList]");
        
        // Nuke the route config and replace with Error 500
        $routes[$path] = [
            'view' => 'errors/500', 
            'title' => 'Configuration Error: Duplicate Route',
            'site' => 'portfolio',
            'error_type' => 'collision',
            // Pass the FULL list of files to the error page
            'error_details' => "Route Collision: The path <strong>'$path'</strong> is defined in " . count($files) . " separate files:<br><br><code>" . $fileList . "</code>"
        ];
    }
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
    $sidebarMap = [
        '/story/friction' => 'sidebar-stories',
        '/story'          => 'sidebar-stories',
        '/discography'    => 'sidebar-discography',
        '/albums'         => 'sidebar-discography',
        '/history'        => 'sidebar-stories',
        '/band'           => 'sidebar-band',
        '/about'          => 'sidebar-default',
    ];

    if (!isset($pageConfig['sidebar'])) {
        foreach ($sidebarMap as $urlStart => $sidebarFile) {
            if (str_starts_with($request_uri, $urlStart)) {
                $pageConfig['sidebar'] = $sidebarFile;
                break; 
            }
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
        $pageConfig['ogImage'] = "https://assets.raggiesoft.com/stardust-engine/music/" . $albumSlug . "/social-preview.jpg";
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
        $pageConfig['navbarBrandLogo']  = 'https://assets.raggiesoft.com/engine-room-records/images/logos/engine-room-records-logo.jpg';
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

if (isset($pageConfig['headerMenu'])) {
    $currentHeaderMenu = ROOT_PATH . '/includes/components/headers/' . $pageConfig['headerMenu'] . '.php';
} elseif (str_starts_with($request_uri, '/engine-room')) {
    $currentHeaderMenu = ROOT_PATH . '/includes/components/headers/engine-room/header-engine-room.php';
} else {
    $currentHeaderMenu = ROOT_PATH . '/includes/components/headers/header-default.php';
}

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