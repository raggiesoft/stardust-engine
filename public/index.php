<?php
ob_start(); 
// RaggieSoft Elara Router v3.4 (Ad Astra Patch)

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
    'ogTitle' => 'The Stardust Engine - Official Band Archive',
    'ogDescription' => "The official archive of the fictional 80s band 'The Stardust Engine.' A narrative universe and AI art project forged in the fires of CPI.",
    'ogImage' => $cdnBaseUrl . "/stardust-engine/images/stardust-engine-logo-social.jpg",
    'ogUrl' => "https://thestardustengine.com" . $request_uri
];

// --- 2. ROUTE CONFIGURATION ---
$routes = [
    
    // Apex Records Era Albums
    '/discography/1987-electric-color' => [
        'ogTitle' => 'Electric Color (1987) - The Stardust Engine',
        'ogDescription' => 'The 1987 debut defined by a studio \'cold war.\' Features the synth-pop hits the label demanded and the \'malicious compliance\' rock tracks the band fought for.',
    ],
    '/discography/1989-neon-hearts' => [
        'ogTitle' => 'Neon Hearts (1989) - The Stardust Engine',
        'ogDescription' => 'The \'panic\' album. Terrified by the 1989 \'Sermon\' controversy, Apex Records demanded a safe sound, but the band fought back with \'Chain Reaction.\'',
    ],
    '/discography/1990-live-in-chicago' => [
        'ogTitle' => 'Live in Chicago (1990) - The Stardust Engine',
        'ogDescription' => 'A snapshot of the conflict live. This 26-minute \'stop-gap\' EP features a studio-mandated setlist that famously banned their heavy rock anthems.',
    ],

    // Freedom Era Albums
    '/discography/1995-the-warehouse-tapes' => [
        'ogTitle' => 'The Warehouse Tapes (1995) - The Stardust Engine',
        'ogDescription' => 'The \'bat signal\' to the fans. Recorded in \'The Fortress\' and funded by the Forger Nation, this raw EP marks the band\'s independent rebirth.',
    ],
    
    // --- SPECIAL ROUTE: AD ASTRA (Manual Override for Assets) ---
    '/discography/1995-the-warehouse-tapes/ad-astra' => [
        'title' => 'Escape Velocity (Ad Astra) - The Stardust Engine',
        'theme' => 'ad-astra',
        'ogTitle' => 'Escape Velocity (Ad Astra) - The Stardust Engine',
        'ogDescription' => 'The 15-minute progressive rock suite that defined the band\'s freedom. The magnum opus of the Freedom Era.',
        // MANUAL FIX: Point to the specific Single folder, not the URL slug
        'ogImage' => 'https://assets.raggiesoft.com/stardust-engine/music/1995-ad-astra-single/social-preview.jpg'
    ],

    '/discography/1997-hard-reset' => [
        'ogTitle' => 'Hard Reset (1997) - The Stardust Engine',
        'ogDescription' => 'The high-stakes commercial comeback. Their first professional release on Engine Room Records, proving they could survive—and thrive—without a label.',
    ],
    '/discography/2007-lost-sounds' => [
        'ogTitle' => 'Lost Sounds (2007) - The Stardust Engine',
        'ogDescription' => 'A gift to the fans during the hiatus. This archival compilation finally releases the \'Lost Gems\' and banned demos of the Apex era, including \'The Promise.\'',
    ],

    // Homecoming Era Albums
    '/discography/2015-reignition' => [
        'ogTitle' => 'Re-Ignition (2015) - The Stardust Engine',
        'ogDescription' => 'The triumphant reunion album. After a long hiatus, the band returns with the \'Engine\' power and \'Stardust\' melodies that defined their legacy.',
    ],
    '/discography/2016-live-at-the-crucible' => [
        'theme' => 'crucible',
        'ogTitle' => 'Live at The Crucible (2016) - The Stardust Engine',
        'ogDescription' => 'The magnum opus. Recorded live before 60,000 \'Ironheads\' at their CPI homecoming, featuring the sacred entrance anthem \'Ignition\' performed live for the first time.',
    ],

    // Modern Era Albums
    '/discography/2017-knox-ost' => [
        'ogTitle' => 'Knox (O.S.T.) (2017) - The Stardust Engine',
        'ogDescription' => 'The atmospheric industrial-rock score for the sci-fi epic \'Knox.\' Exploring the sonic dualities of the neon-lit Axiom and the bioluminescent Weave.',
    ],

    // Force Sidebar on Overview Pages
    '/story/friction' => [
        'showSidebar' => true,
        'sidebar' => 'sidebar-discography',
        'ogDescription' => 'The album that destroyed a contract. Discover the story of the \'fatal assumption,\' the photo shoot disaster, and the scandal that freed the band.',
    ],

    // About Page
    '/about' => [
        'ogTitle' => 'About The Stardust Engine - AI Art Project & Fictional Band',
        'ogDescription' => 'Discover the dual-world experience of The Stardust Engine: a real-world AI art project and the in-universe archive of a fictional 1980s family band.',
        'showSidebar' => true,
        'sidebar' => 'sidebar-default',
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
        '/story/friction' => 'sidebar-discography',
        '/discography'    => 'sidebar-discography',
        '/albums'         => 'sidebar-discography',
        '/story'          => 'sidebar-stories',
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

    // Auto-Title Logic (H1 Detection)
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
    
    // Only apply auto-logic if NOT explicitly set in routes above
    if (!isset($pageConfig['ogImage'])) {
        $pageConfig['ogImage'] = "https://assets.raggiesoft.com/stardust-engine/music/" . $albumSlug . "/social-preview.jpg";
    }
    
    if (!isset($pageConfig['ogTitle']) && isset($pageConfig['title'])) {
        $pageConfig['ogTitle'] = $pageConfig['title'];
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
    require_once ROOT_PATH . '/errors/404.php';
}

echo '    </main>'; 
echo '  </div>'; 
echo '</div>'; 

require_once ROOT_PATH . '/includes/footer.php';
ob_end_flush();
?>