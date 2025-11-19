<?php
// RaggieSoft Elara v2 - Smart Router
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
    'sidebar' => 'sidebar-default', // Component name (without path)
    'showSidebar' => true,
    // OG Defaults
    'ogTitle' => $siteName,
    'ogDescription' => "Explore the musical universe of The Stardust Engine, a family of CPI alumni who fought their label and won their freedom.",
    'ogImage' => "https://assets.raggiesoft.com/stardust-engine/images/stardust-engine-logo.jpg",
    'ogUrl' => "https://thestardustengine.com" . $request_uri
];

// --- 2. ROUTE CONFIGURATION (Overrides) ---
// Define ONLY pages that need special handling (Custom OG tags, Themes, or Titles)
// If a page is standard, the Auto-Discovery (Step 3) will handle it!
$routes = [
    '/' => [
        'view' => 'pages/home',
        'showSidebar' => false
    ],
    '/band' => [
        'view' => 'pages/band/overview',
        'title' => 'The Band - ' . $siteName,
        'showSidebar' => false
    ],
    '/contact' => [
        'view' => 'pages/contact',
        'title' => 'Contact Us - ' . $siteName,
        'showSidebar' => false
    ],
    
    // --- Special Theme Page ---
    '/discography/2016-live-at-the-crucible' => [
        'view' => 'pages/discography/live-crucible',
        'title' => 'Live at The Crucible (2016) - ' . $siteName,
        'theme' => 'crucible', // <--- Custom Theme Override
        'ogTitle' => 'Live at The Crucible - The Stardust Engine',
        'ogDescription' => 'The 2016 Homecoming Reunion. The only official release of "Ignition".',
        'ogImage' => 'https://assets.raggiesoft.com/stardust-engine/music/album-art-live-crucible.jpg'
    ],

    // --- Album with Custom OG Tags ---
    '/discography/1987-electric-color' => [
        'view' => 'pages/discography/1987-electric-color', // Standardized filename
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

// B. Auto-Discovery (If no explicit view set)
if (!isset($pageConfig['view'])) {
    // Try to map URI directly to a file in /pages/
    // e.g., /about -> pages/about.php
    // e.g., /band/ryan-oconnell -> pages/band/ryan-oconnell.php
    
    $potentialPath = 'pages' . $request_uri;
    
    // Check if file exists (append .php)
    if (file_exists(ROOT_PATH . '/' . $potentialPath . '.php')) {
        $pageConfig['view'] = $potentialPath;
    }
}

// C. Apply Section Intelligence (Auto-Sidebars & Titles)
if (isset($pageConfig['view'])) {
    
    // Auto-Sidebar Logic based on URL start
    if (!isset($pageConfig['sidebar']) && !isset($pageConfig['showSidebar'])) {
        if (str_starts_with($request_uri, '/discography') || str_starts_with($request_uri, '/albums')) {
            $pageConfig['sidebar'] = 'sidebar-discography';
        } elseif (str_starts_with($request_uri, '/story') || str_starts_with($request_uri, '/history')) {
            $pageConfig['sidebar'] = 'sidebar-stories'; // Or sidebar-history if you renamed it
        } elseif (str_starts_with($request_uri, '/band')) {
            $pageConfig['showSidebar'] = false; // Band bios are usually full width
        }
    }

    // Auto-Title Logic (e.g., "ryan-oconnell" -> "Ryan Oconnell")
    if (!isset($pageConfig['title'])) {
        $slug = basename($request_uri);
        $prettySlug = ucwords(str_replace('-', ' ', $slug));
        $pageConfig['title'] = $prettySlug . ' - ' . $siteName;
    }
}

// --- 4. MERGE & RENDER ---

// Merge calculated config with defaults
$config = array_merge($defaults, $pageConfig);

// Extract variables for use in templates ($pageTitle, $ogImage, etc.)
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
    // Fallback 404 if the view file is missing (even if route was defined)
    http_response_code(404);
    require_once ROOT_PATH . '/errors/404.php';
}

echo '    </main>'; 
echo '  </div>'; 
echo '</div>'; 

// Render Footer
require_once ROOT_PATH . '/includes/footer.php';
?>