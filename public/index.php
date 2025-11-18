<?php
// RaggieSoft Elara - Quick & Dirty Router
define('ROOT_PATH', dirname(__DIR__));
$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Sanitize the request URI:
// Remove trailing slash if it exists and it's not the root path "/"
if (strlen($request_uri) > 1) {
    $request_uri = rtrim($request_uri, '/');
}

// --- SET DEFAULTS ---
$siteName = 'The Stardust Engine'; // Define base site name
$pageTitle = $siteName; // Default title is just the site name
$currentPageTheme = 'stardust-engine'; // <<< THIS IS THE DEFAULT
$currentHeaderMenu = ROOT_PATH . '/includes/components/headers/header-default.php';
$currentSidebar = ROOT_PATH . '/includes/components/sidebars/sidebar-default.php';
$showSidebar = true; // Default to showing sidebar
// --------------------

$view_to_load = null;
$params = [];

// Routing logic...
switch ($request_uri) {
    // --- CORE PAGES ---
    case '/':
        $view_to_load = 'pages/home';
        $showSidebar = false; // Homepage is full-width
        break;

    case '/band':
        $view_to_load = 'pages/band/overview'; // <<< FIX: Point to overview
        $pageTitle = 'The Band - ' . $siteName;
        $showSidebar = false; // Use full width for bios
        break;

    // --- ADDED: Individual Band Routes ---
    case '/band/ryan-oconnell':
        $view_to_load = 'pages/band/ryan-oconnell';
        $pageTitle = 'Ryan O\'Connell - ' . $siteName;
        $showSidebar = false;
        break;
    case '/band/cassidy-oconnell':
        $view_to_load = 'pages/band/cassidy-oconnell';
        $pageTitle = 'Cassidy O\'Connell - ' . $siteName;
        $showSidebar = false;
        break;
    case '/band/holly-oconnell':
        $view_to_load = 'pages/band/holly-oconnell';
        $pageTitle = 'Holly O\'Connell - ' . $siteName;
        $showSidebar = false;
        break;
    case '/band/evan-wright':
        $view_to_load = 'pages/band/evan-wright';
        $pageTitle = 'Evan Wright - ' . $siteName;
        $showSidebar = false;
        break;
    case '/band/tyler-wright':
        $view_to_load = 'pages/band/tyler-wright';
        $pageTitle = 'Tyler Wright - ' . $siteName;
        $showSidebar = false;
        break;
    // --- End Band Routes ---

    case '/history':
        $view_to_load = 'pages/history';
        $pageTitle = 'Band History - ' . $siteName;
        $showSidebar = true; // Show sidebar for sub-nav
        $currentSidebar = ROOT_PATH . '/includes/components/sidebars/sidebar-history.php'; // Specific sidebar
        break;

    case '/contact':
        $view_to_load = 'pages/contact';
        $pageTitle = 'Contact Us - ' . $siteName;
        $showSidebar = false; // Full width
        break;
    
    // --- DISCOGRAPHY ---
    case '/discography':
        $view_to_load = 'pages/discography/overview';
        $pageTitle = 'Discography - ' . $siteName;
        $showSidebar = false; // Full width for grid
        break;

    case '/discography/1987-electric-color':
        $view_to_load = 'pages/discography/1987-electric-color';
        $pageTitle = 'Electric Color (1987) - ' . $siteName;
        $showSidebar = true; 
        $currentSidebar = ROOT_PATH . '/includes/components/sidebars/sidebar-discography.php';
        break;
    
    // --- THE CRUCIBLE FIX IS HERE ---
    case '/discography/2016-live-at-the-crucible':
        $view_to_load = 'pages/discography/2016-live-crucible';
        $pageTitle = 'Live at The Crucible (2016) - ' . $siteName;
        $showSidebar = true; 
        $currentSidebar = ROOT_PATH . '/includes/components/sidebars/sidebar-discography.php';
        $currentPageTheme = 'crucible'; // <<< FIX: Override the theme HERE
        break;
    
    // (Add other album routes here...)


    // --- STORIES ---
    case '/story/the-friction-catastrophe':
        $view_to_load = 'pages/story/the-friction-catastrophe';
        $pageTitle = 'The Friction Catastrophe - ' . $siteName;
        $showSidebar = true; 
        $currentSidebar = ROOT_PATH . '/includes/components/sidebars/sidebar-stories.php';
        break;
    
    case '/story/cpi':
        $view_to_load = 'pages/story/cpi';
        $pageTitle = 'About CPI & The Forgers - ' . $siteName;
        $showSidebar = true; 
        $currentSidebar = ROOT_PATH . '/includes/components/sidebars/sidebar-stories.php';
        $currentPageTheme = 'crucible';
        break;
}


if (!empty($params)) {
    extract($params);
}

// --- RENDER THE PAGE ---
// $currentPageTheme is now correctly set to 'crucible' BEFORE header.php runs

// 1. Include Header (which will use the variables)
require_once ROOT_PATH . '/includes/header.php';

// 2. Conditionally include Sidebar and wrap main content
echo '<div class="container-fluid flex-grow-1 d-flex">';
echo '  <div class="row flex-grow-1">';

if ($showSidebar && file_exists($currentSidebar)) {
    // Sidebar column
    echo '    <aside class="col-md-3 col-lg-2 d-none d-md-block bg-body-tertiary border-end p-3">';
    require_once $currentSidebar;
    echo '    </aside>';
    // Main content column (takes remaining width)
    echo '    <main id="main-content" class="col-md-9 col-lg-10 p-4">';
} else {
    // Main content column (takes full width if no sidebar)
    echo '    <main id="main-content" class="col-12 p-0">'; 
}

// 3. Include the specific page content view
if ($view_to_load && file_exists(ROOT_PATH . '/' . $view_to_load . '.php')) {
    require_once ROOT_PATH . '/' . $view_to_load . '.php';
} else {
    http_response_code(404);
    require_once ROOT_PATH . '/errors/404.php'; // Corrected path
}

// Close content divs
echo '    </main>'; 
echo '  </div>'; 
echo '</div>'; 

// 4. Include Footer
require_once ROOT_PATH . '/includes/footer.php';