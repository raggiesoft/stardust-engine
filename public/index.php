<?php
ob_start(); // Buffer output so we can handle Redirects (like 1992-friction.php)
// RaggieSoft Elara Router v2.9 (Sidebar Map & Overrides)
// A lightweight, file-based router for narrative websites.

define('ROOT_PATH', dirname(__DIR__));
$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Sanitize: Remove trailing slash if not root
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
    'showSidebar' => false, // Default to full width
    'sidebar' => 'sidebar-default',
    'ogTitle' => $siteName,
    'ogDescription' => "A RaggieSoft Narrative Project.",
    'ogImage' => $cdnBaseUrl . "/images/default-og.jpg",
    'ogUrl' => "https://your-domain.com" . $request_uri
];

// --- 2. ROUTE CONFIGURATION ---
// Use this for specific overrides (Theme, Meta, or Forcing Sidebars on Index pages)
$routes = [
    
    // Theme Override: Crucible
    '/discography/2016-live-at-the-crucible' => [
        'theme' => 'crucible',
        'ogTitle' => 'Live at The Crucible - The Stardust Engine',
        'ogDescription' => 'The 2016 Homecoming Reunion.',
        'ogImage' => 'https://assets.raggiesoft.com/stardust-engine/music/album-art-live-crucible.jpg'
    ],
    
    // Custom OG Tags
    '/discography/1987-electric-color' => [
        'ogTitle' => 'Electric Color (1987) - The Stardust Engine',
        'ogImage' => "https://assets.raggiesoft.com/stardust-engine/music/1987-electric-color/album-art.jpg"
    ],
    
    '/discography/1989-neon-hearts' => [
        'ogTitle' => 'Neon Hearts (1989) - The Stardust Engine',
        'ogImage' => "https://assets.raggiesoft.com/stardust-engine/music/1989-neon-hearts/album-art.jpg"
    ],
    
    '/discography/1995-the-warehouse-tapes' => [
        'ogTitle' => 'The Warehouse Tapes (1995) - The Stardust Engine',
        'ogImage' => "https://assets.raggiesoft.com/stardust-engine/music/1995-the-warehouse-tapes/album-art.jpg"
    ],

    // FORCE SIDEBAR ON OVERVIEW PAGES
    // Since '/story/friction' loads an overview.php, the router tries to hide
    // the sidebar by default. We use this override to force it back on.
    '/story/friction' => [
        'showSidebar' => true,
        'sidebar' => 'sidebar-discography'
    ],
];

// --- 3. SMART ROUTER LOGIC ---

// A. Check for Explicit Configuration
$pageConfig = $routes[$request_uri] ?? [];

// B. Auto-Discovery Logic
if (!isset($pageConfig['view'])) {
    $potentialPath = 'pages' . $request_uri;
    
    // 1. Direct File Match
    if (file_exists(ROOT_PATH . '/' . $potentialPath . '.php')) {
        $pageConfig['view'] = $potentialPath;
    } 
    // 2. Directory Index Logic
    elseif (is_dir(ROOT_PATH . '/' . $potentialPath)) {
        if (file_exists(ROOT_PATH . '/' . $potentialPath . '/overview.php')) {
            $pageConfig['view'] = $potentialPath . '/overview';
            $isIndexPage = true;
        } elseif (file_exists(ROOT_PATH . '/' . $potentialPath . '/home.php')) {
            $pageConfig['view'] = $potentialPath . '/home';
            $isIndexPage = true;
        }
    }
}

// C. Apply Section Intelligence
if (isset($pageConfig['view'])) {
    
    // 1. Sidebar Mapping Configuration
    // ORDER MATTERS: Deepest/Longest paths must come FIRST.
    $sidebarMap = [
        '/story/friction' => 'sidebar-discography', // Specific Deep Link
        '/discography'    => 'sidebar-discography', // Generic Roots...
        '/albums'         => 'sidebar-discography',
        '/story'          => 'sidebar-stories',
        '/history'        => 'sidebar-stories',
        '/band'           => 'sidebar-band'
    ];

    // 2. Auto-Sidebar SELECTION
    if (!isset($pageConfig['sidebar'])) {
        foreach ($sidebarMap as $urlStart => $sidebarFile) {
            // str_starts_with handles the sub-pages automatically
            if (str_starts_with($request_uri, $urlStart)) {
                $pageConfig['sidebar'] = $sidebarFile;
                break; 
            }
        }
    }

    // 3. Auto-Sidebar VISIBILITY
    if (!isset($pageConfig['showSidebar'])) {
        // Rule 1: If a sidebar was selected...
        if (isset($pageConfig['sidebar']) && $pageConfig['sidebar'] !== 'sidebar-default') {
             $pageConfig['showSidebar'] = true;
             
             // Rule 2: HIDE on Section Roots (The default behavior)
             // If the URL matches the map key exactly (e.g. '/band'), hide it.
             // Note: '/story/friction' bypasses this because of the Manual Override in $routes above!
             if (array_key_exists($request_uri, $sidebarMap)) {
                 $pageConfig['showSidebar'] = false;
             }
        } 
        // Rule 3: Hide on generic index pages
        elseif (isset($isIndexPage) && $isIndexPage) {
            $pageConfig['showSidebar'] = false;
        }
    }

    // 4. Auto-Title Logic (H1 Detection)
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
            if ($slug === '' || $slug === 'index.php') {
                $prettySlug = 'Home';
            } else {
                $prettySlug = ucwords(str_replace('-', ' ', $slug));
            }
            $pageConfig['title'] = $prettySlug . ' - ' . $siteName;
        }
    }
}

// --- 4. MERGE & RENDER ---
$config = array_merge($defaults, $pageConfig);

// Extract variables
$pageTitle = $config['title'];
$currentPageTheme = $config['theme'];
$showSidebar = $config['showSidebar'];
$ogTitle = $config['ogTitle'];
$ogDescription = $config['ogDescription'];
$ogImage = $config['ogImage'];
$ogUrl = $config['ogUrl'];

// Resolve Paths
$currentHeaderMenu = ROOT_PATH . '/includes/components/headers/header-default.php';
$currentSidebar = ROOT_PATH . '/includes/components/sidebars/' . $config['sidebar'] . '.php';

require_once ROOT_PATH . '/includes/header.php';

echo '<div class="container-fluid flex-grow-1 d-flex">';
echo '  <div class="row flex-grow-1">';

// Only render sidebar if showSidebar is true AND the file exists
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
    require_once ROOT_PATH . '/errors/404.php';
}

echo '    </main>'; 
echo '  </div>'; 
echo '</div>'; 

require_once ROOT_PATH . '/includes/footer.php';
ob_end_flush(); // Flush buffer
?>