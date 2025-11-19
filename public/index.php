<?php
// RaggieSoft Elara v2.1 - Smart Router with Directory Indexing
define('ROOT_PATH', dirname(__DIR__));
$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Sanitize: Remove trailing slash if not root
if (strlen($request_uri) > 1) {
    $request_uri = rtrim($request_uri, '/');
}

// --- 1. GLOBAL DEFAULTS ---
$siteName = 'The Stardust Engine';
$defaults = [
    'view' => 'errors/404',
    'title' => $siteName,
    'theme' => 'stardust-engine',
    'sidebar' => 'sidebar-default',
    'showSidebar' => true,
    'ogTitle' => $siteName,
    'ogDescription' => "Explore the musical universe of The Stardust Engine, a family of CPI alumni who fought their label and won their freedom.",
    'ogImage' => "https://assets.raggiesoft.com/stardust-engine/images/stardust-engine-logo.jpg",
    'ogUrl' => "https://thestardustengine.com" . $request_uri
];

// --- 2. ROUTE CONFIGURATION (Overrides) ---
$routes = [
    '/' => [
        'view' => 'pages/home',
        'showSidebar' => false
    ],
    
    // --- Special Theme Page ---
    '/discography/2016-live-at-the-crucible' => [
        'view' => 'pages/discography/2016-live-crucible',
        'title' => 'Live at The Crucible (2016) - ' . $siteName,
        'theme' => 'crucible',
        'ogTitle' => 'Live at The Crucible - The Stardust Engine',
        'ogDescription' => 'The 2016 Homecoming Reunion. The only official release of "Ignition".',
        'ogImage' => 'https://assets.raggiesoft.com/stardust-engine/music/album-art-live-crucible.jpg'
    ],

    // --- Album with Custom OG Tags ---
    '/discography/1987-electric-color' => [
        'view' => 'pages/discography/1987-electric-color',
        'title' => 'Electric Color (1987) - ' . $siteName,
        'ogTitle' => 'Electric Color (1987) - The Stardust Engine',
        'ogDescription' => "The debut album. Featuring 'Electric Color' and 'Break the Walls'. Listen and download now.",
        'ogImage' => "https://assets.raggiesoft.com/stardust-engine/music/1987-electric-color/album-art.jpg"
    ],
    
    '/discography/1989-neon-hearts' => [
        'view' => 'pages/discography/1989-neon-hearts',
        'title' => 'Neon Hearts (1989) - ' . $siteName,
        'ogTitle' => 'Neon Hearts (1989) - The Stardust Engine',
        'ogDescription' => "The 'panic' album. Featuring 'Neon Hearts' and the fan-favorite 'Not Your Doll'.",
        'ogImage' => "https://assets.raggiesoft.com/stardust-engine/music/1989-neon-hearts/album-art.jpg"
    ],
    
    '/discography/1995-the-warehouse-tapes' => [
        'view' => 'pages/discography/1995-the-warehouse-tapes',
        'title' => 'The Warehouse Tapes (1995) - ' . $siteName,
        'ogTitle' => 'The Warehouse Tapes (1995) - The Stardust Engine',
        'ogDescription' => "The 1995 'Bat Signal' EP. Recorded in The Fortress, this album marks the band's rebirth.",
        'ogImage' => "https://assets.raggiesoft.com/stardust-engine/music/1995-the-warehouse-tapes/album-art.jpg"
    ]
];

// --- 3. THE SMART ROUTER LOGIC ---

// A. Check for Explicit Configuration
$pageConfig = $routes[$request_uri] ?? [];

// B. Auto-Discovery Logic
if (!isset($pageConfig['view'])) {
    $potentialPath = 'pages' . $request_uri;
    
    // 1. Check for Direct File Match (e.g., /about -> pages/about.php)
    if (file_exists(ROOT_PATH . '/' . $potentialPath . '.php')) {
        $pageConfig['view'] = $potentialPath;
    } 
    // 2. Check for Directory Index (e.g., /discography -> pages/discography/overview.php)
    elseif (is_dir(ROOT_PATH . '/' . $potentialPath) && file_exists(ROOT_PATH . '/' . $potentialPath . '/overview.php')) {
        $pageConfig['view'] = $potentialPath . '/overview';
        
        // Special Case: Disable sidebar for these overview pages unless overridden
        // (Matches your old logic where /discography and /band were full width)
        if (!isset($pageConfig['showSidebar'])) {
            $pageConfig['showSidebar'] = false; 
        }
    }
}

// C. Apply Section Intelligence (Auto-Sidebars & Titles)
if (isset($pageConfig['view'])) {
    
    // Auto-Sidebar Logic based on URL start
    if (!isset($pageConfig['sidebar']) && !isset($pageConfig['showSidebar'])) {
        if (str_starts_with($request_uri, '/discography') || str_starts_with($request_uri, '/albums')) {
            $pageConfig['sidebar'] = 'sidebar-discography';
        } elseif (str_starts_with($request_uri, '/story') || str_starts_with($request_uri, '/history')) {
            $pageConfig['sidebar'] = 'sidebar-stories';
        } elseif (str_starts_with($request_uri, '/band')) {
             // The /band root is caught by the Directory Index logic above, 
             // so this only applies to sub-pages like /band/ryan-oconnell
            $pageConfig['showSidebar'] = false; 
        }
    }

    // Auto-Title Logic
    if (!isset($pageConfig['title'])) {
        $slug = basename($request_uri);
        // Handle index pages better (don't title it "Discography Overview")
        if ($slug === 'discography' || $slug === 'band') {
             $prettySlug = ucwords($slug);
        } else {
             $prettySlug = ucwords(str_replace('-', ' ', $slug));
        }
        $pageConfig['title'] = $prettySlug . ' - ' . $siteName;
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

// Render Header
require_once ROOT_PATH . '/includes/header.php';

// Render Layout
echo '<div class="container-fluid flex-grow-1 d-flex">';
echo '  <div class="row flex-grow-1">';

if ($showSidebar && file_exists($currentSidebar)) {
    echo '    <aside class="col-md-3 col-lg-2 d-none d-md-block bg-body-tertiary border-end p-3">';
    require_once $currentSidebar;
    echo '    </aside>';
    echo '    <main id="main-content" class="col-md-9 col-lg-10 p-4">';
} else {
    echo '    <main id="main-content" class="col-12 p-0">'; 
}

// Render View
if (file_exists(ROOT_PATH . '/' . $config['view'] . '.php')) {
    require_once ROOT_PATH . '/' . $config['view'] . '.php';
} else {
    http_response_code(404);
    require_once ROOT_PATH . '/errors/404.php';
}

echo '    </main>'; 
echo '  </div>'; 
echo '</div>'; 

// Render Footer
require_once ROOT_PATH . '/includes/footer.php';
?>