<?php
// includes/header.php
// v4.4 - Fix: Theme Inheritance Logic for Multi-Site Support

// 1. Resolve Context
$site  = $currentSite ?? 'stardust-engine';
$theme = $currentPageTheme ?? $site;
$cdn_root = "https://assets.raggiesoft.com";

// --- CRITICAL FIX: SMART THEME RESET ---
// If we are on a custom site (e.g., 'portfolio') but the router passed the 
// global default theme ('stardust-engine'), we force the theme to match the site.
// This ensures we look in /portfolio/css/bootstrap/ instead of /portfolio/css/bootstrap/stardust-engine/
if ($site !== 'stardust-engine' && $theme === 'stardust-engine') {
    $theme = $site;
}

// LOGIC: Force Dark Mode for 'ad-astra' theme
$force_dark_mode = ($theme === 'ad-astra');

// 2. PATH DEFINITIONS
// A. GLOBAL BASE: Pure Bootstrap 5.3.8
$path_bootstrap = $cdn_root . "/common/css/bootstrap.css";

// B. THEME DIRECTORY
if ($theme === 'corporate' || $theme === $site) {
    // ROOT THEME: assets.raggiesoft.com/portfolio/css/bootstrap
    $path_theme_base = $cdn_root . "/{$site}/css/bootstrap";
} else {
    // NAMED THEME: assets.raggiesoft.com/stardust-engine/css/bootstrap/ad-astra
    $path_theme_base = $cdn_root . "/{$site}/css/bootstrap/{$theme}";
}

// 3. BUILD CSS QUEUE
$css_load_queue = [
    $path_bootstrap,                    
    $path_theme_base . '/root.css',     
    $path_theme_base . '/extras.css',   
    $path_theme_base . '/header.css',   
    $path_theme_base . '/footer.css',   
    $path_theme_base . '/safety-net.css'
];

// 4. CRITICAL IMAGES
$critical_images = [
    // Preload whatever logo is currently active
    $navbarBrandLogo ?? 'https://assets.raggiesoft.com/stardust-engine/images/stardust-engine-logo.png'
];
if (isset($customPageAssets) && is_array($customPageAssets)) {
    $critical_images = array_merge($critical_images, $customPageAssets);
}
?>
<!doctype html>
<html lang="en" class="h-100" <?php echo $force_dark_mode ? 'data-bs-theme="dark"' : ''; ?>>
  <head>
    <?php 
    if (
        isset($settings['analytics']['enabled']) && 
        $settings['analytics']['enabled'] === true &&
        !empty($settings['analytics']['trackingId'])
    ): 
    ?>
        <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo htmlspecialchars($settings['analytics']['trackingId']); ?>"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', '<?php echo htmlspecialchars($settings['analytics']['trackingId']); ?>');
        </script>
    <?php endif; ?>
    <?php if (! $force_dark_mode): ?>
    <script>
      (function() {
        const getStoredTheme = () => localStorage.getItem('theme');
        const getPreferredTheme = () => {
          const storedTheme = getStoredTheme();
          if (storedTheme) { return storedTheme; }
          return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
        };
        const setTheme = theme => {
          if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            document.documentElement.setAttribute('data-bs-theme', 'dark');
          } else {
            document.documentElement.setAttribute('data-bs-theme', theme);
          }
        };
        setTheme(getPreferredTheme());
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
            const storedTheme = getStoredTheme();
            if (!storedTheme || storedTheme === 'auto') { setTheme(getPreferredTheme()); }
        });
      })();
    </script>
    <?php endif; ?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title><?php echo htmlspecialchars($pageTitle ?? 'The Stardust Engine'); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($ogDescription ?? 'The official archive of The Stardust Engine.'); ?>">
    <meta property="og:title" content="<?php echo htmlspecialchars($ogTitle ?? $pageTitle); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($ogDescription ?? ''); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($ogImage ?? ''); ?>">
    <meta property="og:url" content="<?php echo htmlspecialchars($ogUrl ?? "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"); ?>">

    <?php foreach ($css_load_queue as $cssUrl): ?>
<link href="<?php echo $cssUrl . '?v=' . time(); ?>" rel="stylesheet">
    <?php endforeach; ?>

    <script src="https://kit.fontawesome.com/ec060982d4.js" crossorigin="anonymous"></script>

    <?php foreach ($critical_images as $imgUrl): ?>
<link rel="preload" as="image" href="<?php echo $imgUrl; ?>">
    <?php endforeach; ?>
    
    <link rel="icon" type="image/png" href="https://assets.raggiesoft.com/common/images/favicons/favicon-32x32.png">
    
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mrs+Saint+Delafield&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Mrs+Saint+Delafield&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@700&display=swap" rel="stylesheet">
    
    <style>
        .navbar-brand-corporate-img {
            mix-blend-mode: multiply; /* Light Mode: White disappears */
        }
        [data-bs-theme="dark"] .navbar-brand-corporate-img {
            filter: invert(1) grayscale(100%); /* Invert colors */
            mix-blend-mode: screen; /* Dark Mode: Black disappears */
        }
    </style>

  </head>
  
  <body class="d-flex flex-column h-100">
    <style>
      /* 1. The Curtain */
    #page-loader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #050508;
        z-index: 99999;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        
        /* THE FIX:
           When showing (removing class), Opacity fades in, Visibility is INSTANT. */
        opacity: 1;
        visibility: visible;
        transition: opacity 0.5s ease-in-out, visibility 0s 0s;
    }

    /* 2. Hidden State */
    #page-loader.loader-hidden {
        opacity: 0;
        visibility: hidden;
        
        /* THE TRICK:
           When hiding (adding class), wait 0.5s for Opacity to finish 
           before setting Visibility to hidden. */
        transition: opacity 0.5s ease-in-out, visibility 0s 0.5s;
    }

      /* 3. The Progress Bar Container */
      .loader-progress-container {
          width: 300px;
          height: 4px;
          background-color: #333;
          margin-top: 20px;
          position: relative;
          overflow: hidden;
      }

      /* 4. The Bar Itself */
      .loader-progress-bar {
          height: 100%;
          background-color: #0dcaf0; /* Cyan / Info */
          width: 0%;
          transition: width 0.2s ease;
          box-shadow: 0 0 10px #0dcaf0;
      }
  </style>

  <div id="page-loader">
      <div class="spinner-border text-info mb-3" role="status" style="width: 3rem; height: 3rem;">
          <span class="visually-hidden">Loading...</span>
      </div>
      
      <h4 class="text-white text-uppercase" style="font-family: 'Audiowide', sans-serif; letter-spacing: 2px;">
          Stardust Engine
      </h4>

      <div class="loader-progress-container">
          <div class="loader-progress-bar" id="loader-bar"></div>
      </div>

      <div class="text-info font-monospace small mt-2" id="loader-text">
          > CONNECTING...
      </div>
  </div>

  <script>
(function() {
    // --- CONFIGURATION ---
    const loader = document.getElementById('page-loader');
    const bar = document.getElementById('loader-bar');
    const text = document.getElementById('loader-text');
    
    // Fake "Loading Steps" to simulate component assembly
    const loadingMessages = [
        "> ASSEMBLING COMPONENTS...",
        "> FETCHING ASSETS...",
        "> PARSING DOM...",
        "> RENDERING IMAGES...",
        "> FINALIZING..."
    ];

    let progress = 0;
    let progressInterval;

    // --- FUNCTION: Start the Fake Progress Bar ---
    function startProgress() {
        if (progressInterval) clearInterval(progressInterval);
        progress = 0;
        if(bar) bar.style.width = '0%';
        
        progressInterval = setInterval(() => {
            progress += Math.random() * 5;
            if (progress > 90) progress = 90;
            
            if(bar) bar.style.width = progress + '%';
            
            const step = Math.floor((progress / 100) * loadingMessages.length);
            if (loadingMessages[step] && text) {
                text.innerText = loadingMessages[step];
            }
        }, 100);
    }

    // --- FUNCTION: Finish and Hide ---
    function finishLoad() {
        if (progressInterval) clearInterval(progressInterval);
        if(bar) bar.style.width = '100%';
        if(text) text.innerText = "> READY.";
        
        setTimeout(() => {
            if(loader) loader.classList.add('loader-hidden');
        }, 500);
    }

    // ==========================================
    // 1. INCOMING: Waiting for the Page to Load
    // ==========================================
    startProgress();
    window.addEventListener('load', finishLoad);
    setTimeout(finishLoad, 10000); // Safety net

    // ==========================================
    // 2. OUTGOING: Clicking a Link
    // ==========================================
    document.addEventListener('click', (e) => {
        const link = e.target.closest('a');
        
        // If not a link, ignore
        if (!link) return;

        const href = link.getAttribute('href');
        const target = link.getAttribute('target');

        // --- THE FIX: SAFETY CHECKS ---
        // 1. Ignore Dropdowns (Bootstrap toggles)
        if (link.classList.contains('dropdown-toggle') || 
            link.getAttribute('data-bs-toggle') === 'dropdown' ||
            link.getAttribute('role') === 'button') {
            return;
        }

        // 2. Ignore Placeholder links (just "#")
        if (href === '#' || !href) {
            return;
        }

        // 3. Ignore Hash Anchors (jumping to #section on same page)
        if (href.startsWith('#')) {
            return;
        }

        // 4. Ignore New Tabs or External Links
        if (target === '_blank') return;
        
        // Check absolute URLs to ensure we stay on the same domain
        if (link.href && link.href.indexOf(window.location.hostname) === -1) {
            return;
        }

        // --- EXECUTE LOADER ---
        // If we passed all checks, this is a real internal navigation.
        if(loader) loader.classList.remove('loader-hidden');
        if(text) text.innerText = "> NAVIGATING...";
        startProgress();
    });

    // ==========================================
    // 3. BROWSER BACK BUTTON FIX
    // ==========================================
    window.addEventListener('pageshow', (event) => {
        if (event.persisted && loader) {
            loader.classList.add('loader-hidden');
        }
    });

})();
</script>
    
    <header>
      <nav class="navbar navbar-expand-md sticky-top border-bottom border-primary border-opacity-50 bg-body">
        <div class="container-fluid">
          
          <a class="navbar-brand d-flex align-items-center" href="<?php echo htmlspecialchars($navbarBrandLink ?? '/'); ?>">
            
            <img src="<?php echo htmlspecialchars($navbarBrandLogo ?? 'https://assets.raggiesoft.com/stardust-engine/images/stardust-engine-logo.png'); ?>" 
                 alt="<?php echo htmlspecialchars($navbarBrandAlt ?? 'Logo'); ?>" 
                 height="30" 
                 class="me-2 d-inline-block align-text-top <?php echo htmlspecialchars($navbarBrandClass ?? 'rounded-circle shadow-glow'); ?>">
            
            <span class="fw-bold text-uppercase" style="font-family: 'Audiowide', sans-serif;">
              <?php 
                  // Allow ONLY <span> tags (for your responsive classes), strip everything else for security
                  echo strip_tags($navbarBrandText ?? '<span class="d-none d-md-inline">The </span>Stardust Engine', '<span>'); 
              ?>
          </span>
          </a>
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" 
                  aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <?php 
                if (isset($currentHeaderMenu) && file_exists($currentHeaderMenu)) {
                    include $currentHeaderMenu;
                } else {
                    include ROOT_PATH . '/includes/components/headers/header-default.php';
                }
            ?>
          </div>
        </div>
      </nav>
    </header>