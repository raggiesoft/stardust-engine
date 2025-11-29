<?php
// includes/header.php
// Universal RaggieSoft Header v4.0 (Dynamic Bootstrap Injection)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle ?? 'The Stardust Engine'); ?></title>

    <meta name="description" content="<?php echo htmlspecialchars($ogDescription ?? 'Explore Telsus Minor, a sci-fi universe where the reality of a phantom saboteur named Knox is a family fighting a corrupt corporation.'); ?>">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Exo+2:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="icon" href="https://assets.raggiesoft.com/stardust-engine/images/stardust-engine-logo.png" type="image/png">
    <link rel="apple-touch-icon" href="https://assets.raggiesoft.com/stardust-engine/images/stardust-engine-logo.png">
    <script src="https://kit.fontawesome.com/ec060982d4.js" crossorigin="anonymous"></script>

    <!-- Metadata (OG/Twitter) -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo htmlspecialchars($ogUrl ?? 'https://thestardustengine.com'); ?>">
    <meta property="og:title" content="<?php echo htmlspecialchars($ogTitle ?? $pageTitle); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($ogDescription ?? 'A musical universe forged in the fires of CPI.'); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($ogImage ?? 'https://assets.raggiesoft.com/stardust-engine/images/stardust-engine-logo-social.jpg'); ?>">
    <meta name="twitter:card" content="summary_large_image">

    
    <?php
        // ===================================================================
        // DYNAMIC BOOTSTRAP LOADER                                           
        // ===================================================================
        
        // 1. Identify the Site (Fallback to projectSlug if not manually set)
        $bootstrapSite = $currentSite ?? ($projectSlug ?? null);

        // 2. Identify the Theme
        $bootstrapTheme = $currentPageTheme ?? null;

        // --- FIX: NORMALIZE DEFAULT THEME ---
        // If the theme name is identical to the site name (e.g., 'stardust-engine'),
        // we treat this as the "Default" state to trigger Case B.
        if ($bootstrapTheme === $bootstrapSite) {
            $bootstrapTheme = null;
        }

        // 3. Construct the URL based on Context
        if (empty($bootstrapSite)) {
            // CASE A: No Site Defined -> Global/Common Bootstrap
            $bootstrapUrl = "https://assets.raggiesoft.com/common/css/bootstrap.css";
        
        } elseif (empty($bootstrapTheme)) {
            // CASE B: Site Defined, Default Theme -> Use "-default.css"
            // Result: bootstrap-stardust-engine-default.css
            $bootstrapUrl = "https://assets.raggiesoft.com/{$bootstrapSite}/css/bootstrap-{$bootstrapSite}-default.css";
        
        } else {
            // CASE C: Site & Specific Theme Defined -> Use "-{theme}.css"
            // Result: bootstrap-stardust-engine-ad-astra.css
            $bootstrapUrl = "https://assets.raggiesoft.com/{$bootstrapSite}/css/bootstrap-{$bootstrapSite}-{$bootstrapTheme}.css";
        }
    ?>
    <!-- Load Bootstrap -->
    <link href="<?php echo $bootstrapUrl; ?>?v=<?php echo time(); ?>" rel="stylesheet">

   

</head>
<body class="d-flex flex-column min-vh-100">

    <a href="#main-content" class="visually-hidden-focusable">Skip to Main Content</a>

    <header class="sticky-top shadow-sm">
      <nav class="navbar navbar-expand-md border-bottom">
        <div class="container-lg">

          <a class="navbar-brand text-uppercase" href="/" aria-label="Stardust Engine Home" 
             style="font-family: 'Audiowide', sans-serif; letter-spacing: 1px; font-size: 1.25rem;">
              <img src="https://assets.raggiesoft.com/stardust-engine/images/stardust-engine-logo.png" 
                   class="me-2" 
                   alt="The Stardust Engine Logo" 
                   style="height: 40px; margin-top: -4px;"><span class="d-none d-md-inline">The </span>Stardust Engine
          </a>

          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="hamburger-bar"></span>
            <span class="hamburger-bar"></span>
            <span class="hamburger-bar"></span>
            </button>

          <div class="collapse navbar-collapse" id="mainNavbar">
            <?php
              if (isset($currentHeaderMenu) && file_exists($currentHeaderMenu)) {
                  include $currentHeaderMenu; 
              } else {
                  echo '<ul class="navbar-nav ms-auto mb-2 mb-md-0"><li class="nav-item"><span class="nav-link text-danger">Error: Menu definition not found.</span></li></ul>';
              }
            ?>
          </div>

        </div>
      </nav>
    </header>