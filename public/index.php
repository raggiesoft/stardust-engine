<?php
ob_start(); 
// RaggieSoft Elara Router v3.9 (Auto-Discovery Restore)

define('ROOT_PATH', dirname(__DIR__));
$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

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
    'ogDescription' => "The official archive of the fictional 80s band 'The Stardust Engine.' A narrative universe and AI art project forged in the fires of CPI.",
    'ogImage' => $cdnBaseUrl . "/stardust-engine/images/stardust-engine-logo-social.jpg",
    'ogUrl' => "https://thestardustengine.com" . $request_uri
];

// --- 2. ROUTE CONFIGURATION ---
$routes = [

    // Band Member Pages
    '/band' => [
        'title' => 'The Band - The Stardust Engine',
        'ogTitle' => 'The Band - The Stardust Engine',
        'ogDescription' => 'Meet the members of The Stardust Engine: Ryan O\'Connell, Cassidy O\'Connell, and Marcus Lee.',
        'showSidebar' => true,
        'sidebar' => 'sidebar-band',
        'theme' => 'ad-astra',
    ],
    '/band/ryan-oconnell' => [
        'title' => 'Ryan O\'Connell - The Stardust Engine Band Bio',
        'ogTitle' => 'Ryan O\'Connell - The Stardust Engine Band Bio',
        'ogDescription' => 'Lead vocalist and rhythm guitarist of The Stardust Engine.',
        'showSidebar' => true,
        'sidebar' => 'sidebar-band',
    ],
    '/band/cassidy-oconnell' => [
        'title' => 'Cassidy O\'Connell - The Stardust Engine Band Bio',
        'showSidebar' => true,
        'sidebar' => 'sidebar-band',
    ],
    '/band/holly-oconnell' => [
        'title' => 'Holly O\'Connell - The Stardust Engine Band Bio',
        'showSidebar' => true,
        'sidebar' => 'sidebar-band',
    ],
    '/band/evan-wright' => [
        'title' => 'Evan Wright - The Stardust Engine Band Bio',
        'showSidebar' => true,
        'sidebar' => 'sidebar-band',
    ],
    '/band/tyler-wright' => [
        'title' => 'Tyler Wright - The Stardust Engine Band Bio',
        'showSidebar' => true,
        'sidebar' => 'sidebar-band',
    ],
    '/band/history' => [
        'title' => 'Our History - The Stardust Engine',
        'showSidebar' => true,
        'sidebar' => 'sidebar-band-history',
    ],


    // Apex Records Era Albums
    '/discography/1987-electric-color' => [
        'ogTitle' => 'Electric Color (1987) - The Stardust Engine',
        'ogDescription' => 'The 1987 debut defined by a studio \'cold war.\'',
        'showSidebar' => true,
        'sidebar' => 'sidebar-discography',
    ],
    '/discography/1989-neon-hearts' => [
        'ogTitle' => 'Neon Hearts (1989) - The Stardust Engine',
        'ogDescription' => 'The \'panic\' album.',
        'showSidebar' => true,
        'sidebar' => 'sidebar-discography',
    ],
    '/discography/1990-live-in-chicago' => [
        'ogTitle' => 'Live in Chicago (1990) - The Stardust Engine',
        'ogDescription' => 'A snapshot of the conflict live.',
        'showSidebar' => true,
        'sidebar' => 'sidebar-discography',
    ],
    '/discography/1992-friction' => [
        'ogTitle' => 'Friction (CANCELED) - The Stardust Engine',
        'ogDescription' => 'The album that never was.',
        'showSidebar' => true,
        'sidebar' => 'sidebar-discography',
    ],

    // Freedom Era Albums
    '/discography/1995-the-warehouse-tapes' => [
        'ogTitle' => 'The Warehouse Tapes (1995) - The Stardust Engine',
        'ogDescription' => 'The \'bat signal\' to the fans.',
        'theme' => 'ad-astra',
        'showSidebar' => true,
        'sidebar' => 'sidebar-discography',
    ],
    
    // Special Ad Astra Route
    '/discography/1995-the-warehouse-tapes/ad-astra' => [
        'title' => 'Escape Velocity (Ad Astra) - The Stardust Engine',
        'theme' => 'ad-astra',
        'ogTitle' => 'Escape Velocity (Ad Astra) - The Stardust Engine',
        'ogDescription' => 'The 15-minute progressive rock suite.',
        'ogImage' => 'https://assets.raggiesoft.com/stardust-engine/music/1995-ad-astra-single/social-preview.jpg',
        'showSidebar' => true,
        'sidebar' => 'sidebar-discography',
    ],

    '/discography/1997-hard-reset' => [
        'ogTitle' => 'Hard Reset (1997) - The Stardust Engine',
        'ogDescription' => 'The high-stakes commercial comeback.',
        'showSidebar' => true,
        'sidebar' => 'sidebar-discography',
    ],
    '/discography/2007-lost-sounds' => [
        'ogTitle' => 'Lost Sounds (2007) - The Stardust Engine',
        'ogDescription' => 'A gift to the fans during the hiatus.',
        'theme' => 'ad-astra',
        'showSidebar' => true,
        'sidebar' => 'sidebar-discography',
    ],

    // Homecoming Era Albums
    '/discography/2015-re-ignition' => [
        'ogTitle' => 'Re-Ignition (2015) - The Stardust Engine',
        'ogDescription' => 'The triumphant reunion album.',
        'showSidebar' => true,
        'sidebar' => 'sidebar-discography',
    ],
    '/discography/2016-live-at-the-crucible' => [
        'theme' => 'crucible',
        'ogTitle' => 'Live at The Crucible (2016) - The Stardust Engine',
        'ogDescription' => 'The homecoming finale.',
        'showSidebar' => true,
        'sidebar' => 'sidebar-discography',
    ],

    // Modern Era Albums
    '/discography/2017-knox-ost' => [
        'ogTitle' => 'Knox (O.S.T.) (2017) - The Stardust Engine',
        'ogDescription' => 'The atmospheric industrial-rock score.',
        'showSidebar' => true,
        'sidebar' => 'sidebar-discography',
    ],
    
    // LORE & STORIES
    '/story' => [
        'title' => 'The Lore - The Stardust Engine',
        'showSidebar' => true,
        'sidebar' => 'sidebar-stories',
    ],
    '/story/friction' => [
        'showSidebar' => true,
        'site' => 'portfolio', 
        'theme' => null,
        'sidebar' => 'sidebar-stories',
        'ogDescription' => 'The album that destroyed a contract.',
    ],
    '/story/friction/the-lost-title-track' => [
        'title' => 'Friction (The Lost Title Track)',
        'site' => 'portfolio', 
        'theme' => null,
        'showSidebar' => true,
        'sidebar' => 'sidebar-stories',
    ],
    '/story/cpi' => [
        'title' => 'CPI & The Forgers - The Stardust Engine Lore',
        'theme' => 'crucible', 
        'showSidebar' => true,
        'sidebar' => 'sidebar-stories',
        'ogDescription' => 'Enter The Forge.',
    ],
    
    // *** THE REFUSAL - portfolio THEME OVERRIDE ***
    '/story/nine-figure-refusal' => [
        'showSidebar' => true,
        'sidebar' => 'sidebar-stories',
        'title' => 'The Nine-Figure Refusal - The Stardust Engine Lore',
        'site' => 'portfolio', 
        'theme' => null,
        'ogDescription' => 'The day they said no to $150 million.',
    ],
    
    '/story/crash-of-90' => [
        'title' => 'The Crash of \'90 - The Stardust Engine Lore',
        'showSidebar' => true,
        'site' => 'portfolio', 
        'theme' => null,
        'sidebar' => 'sidebar-stories',
        'ogDescription' => 'December 14, 1990.',
    ],

    // AD ASTRA ARC
    '/story/ad-astra' => [
        'title' => 'Ad Astra: The Mission - The Stardust Engine Lore',
        'theme' => 'ad-astra',
        'showSidebar' => true,
        'sidebar' => 'sidebar-ad-astra',
        'ogTitle' => 'Ad Astra: The Mission',
        'ogImage' => 'https://assets.raggiesoft.com/stardust-engine/images/stardust-engine-hero.jpg'
    ],
    '/story/ad-astra/voyage' => [
        'title' => 'The Maiden Voyage - The Stardust Engine Lore',
        'theme' => 'ad-astra',
        'showSidebar' => true,
        'sidebar' => 'sidebar-ad-astra',
        'ogTitle' => 'The Maiden Voyage',
        'ogImage' => 'https://assets.raggiesoft.com/stardust-engine/images/stardust-engine-logo-source.jpg'
    ],
    '/concepts/port' => [
        'title' => 'Port Telsus - The Ironworks',
        'theme' => 'ad-astra',
    ],
    '/concepts/pact' => [
        'title' => 'The Pact - Knox Lore',
        'theme' => 'ad-astra',
    ],

    // General
    '/about' => [
        'title' => 'Mission Profile - The Stardust Engine', 
        'theme' => 'ad-astra',
        'ogTitle' => 'Mission Profile - The Stardust Engine',
        'showSidebar' => true,
        'sidebar' => 'sidebar-default',
    ],
    '/contact' => [
        'title' => 'Contact Flight Control - The Stardust Engine',
        'theme' => 'ad-astra',
        'showSidebar' => false,
        'ogTitle' => 'Contact Flight Control',
    ],
    '/license' => [
        'title' => 'License Information',
        'showSidebar' => true,
        'site' => 'portfolio', 
        'theme' => null,
    ],
    
    // FIXED: Removed manual view mapping to allow Auto-Discovery to work
    '/discography' => [
        'title' => 'Discography Overview',
        'showSidebar' => true,
        'sidebar' => 'sidebar-discography',
    ],
    '/radio' => [
        'title' => 'Stardust Radio',
        'theme' => 'ad-astra',
        'showSidebar' => false,
    ],

    // Engine Room Records, LLC
    // --- ENGINE ROOM RECORDS (portfolio Site) ---
    '/engine-room' => [
        'title' => 'Engine Room Records, LLC',
        'site' => 'portfolio',
        'showSidebar' => false,
        'view' => 'engine-room/overview',
    ],
    '/engine-room/artists/origin' => [
        'title' => 'Origin - Engine Room Records',
        'site' => 'portfolio',
        'showSidebar' => false,
        'view' => 'engine-room/artists/origin',
    ],
];

// --- 3. SMART ROUTER LOGIC ---

// A. Check for Explicit Configuration FIRST
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

// --- NEW: AUTOMATED ASSET LOGIC ---
if (str_starts_with($request_uri, '/discography/') && $request_uri !== '/discography') {
    $albumSlug = basename($request_uri); 
    if (!isset($pageConfig['ogImage'])) {
        $pageConfig['ogImage'] = "https://assets.raggiesoft.com/stardust-engine/music/" . $albumSlug . "/social-preview.jpg";
    }
    if (!isset($pageConfig['ogTitle']) && isset($pageConfig['title'])) {
        $pageConfig['ogTitle'] = $pageConfig['title'];
    }
}

// --- 4. MERGE & RENDER ---
$config = array_merge($defaults, $pageConfig);

if ($config['view'] === 'errors/404') {
    http_response_code(404);
    if (!isset($pageConfig['theme'])) { $config['theme'] = 'ad-astra'; }
}

// Extract variables
$pageTitle = $config['title'];
$currentPageTheme = $config['theme'];
$showSidebar = $config['showSidebar'];
$currentSite = $config['site'];
$ogTitle = $config['ogTitle'];
$ogDescription = $config['ogDescription'];
$ogImage = $config['ogImage'];
$ogUrl = $config['ogUrl'];

$currentHeaderMenu = ROOT_PATH . '/includes/components/headers/header-default.php';
$currentSidebar = ROOT_PATH . '/includes/components/sidebars/' . $config['sidebar'] . '.php';

require_once ROOT_PATH . '/includes/header.php';

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