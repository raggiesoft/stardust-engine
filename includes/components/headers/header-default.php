<?php
// 1. Load Data Sources
// Make sure these paths are correct relative to where this file is included
include ROOT_PATH . '/includes/components/arrays/_discography.php';
include ROOT_PATH . '/includes/components/arrays/_raggiesoft-websites.php';


// 2. Determine Active States
$isHome = ($request_uri === '/');
$isDiscography = (str_starts_with($request_uri, '/discography') || $request_uri === '/discography');
$isBand = (str_starts_with($request_uri, '/band'));
$isLore = (str_starts_with($request_uri, '/story'));
$isAbout = (str_starts_with($request_uri, '/about'));
$isContact = ($request_uri === '/contact');
$isRadio = ($request_uri === '/radio');
?>

<ul class="navbar-nav ms-auto mb-2 mb-md-0">
  
  <li class="nav-item">
    <a class="nav-link <?php echo $isHome ? 'active' : ''; ?>" href="/"><i class="fa-duotone fa-house me-2" aria-hidden="true"></i>Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php echo $isRadio ? 'active' : ''; ?>" href="/radio"><i class="fa-duotone fa-radio me-2" aria-hidden="true"></i>Radio</a>
  </li>

 <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle <?php echo ($isDiscography ?? false) ? 'active' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fa-duotone fa-list-music me-2" aria-hidden="true"></i>Discography
    </a>
    <ul class="dropdown-menu dropdown-menu-end scrollable-menu" style="max-height: 500px; overflow-y: auto;">
        
        <li>
            <a class="dropdown-item fw-bold" href="/discography">
                <i class="fa-duotone fa-list-music me-2"></i>Full Overview
            </a>
        </li>

        <?php 
        // Ensure library exists (safe include)
        include_once ROOT_PATH . '/includes/components/arrays/_discography.php';

        if (isset($discographyLibrary)):
            foreach ($discographyLibrary as $eraKey => $eraData): 
                
                // Skip empty eras automatically
                if (empty($eraData['albums'])) continue;
        ?>
            <li><hr class="dropdown-divider"></li>
            <li>
                <h6 class="dropdown-header text-uppercase fw-bold ps-3 text-secondary">
                    <?php echo $eraData['label']; ?>
                </h6>
            </li>
            
            <?php foreach ($eraData['albums'] as $album): ?>
                <li>
                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="<?php echo $album['url']; ?>">
                        <span>
                            <?php echo $album['title']; ?> 
                            <small class="ms-1 opacity-50">(<?php echo $album['year']; ?>)</small>
                        </span>
                        <?php if (isset($album['extra'])) echo $album['extra']; ?>
                    </a>
                </li>
            <?php endforeach; ?>

        <?php 
            endforeach; 
        endif;
        ?>
    </ul>
</li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle <?php echo $isBand ? 'active' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      <i class="fa-duotone fa-music-magnifying-glass me-2" aria-hidden="true"></i>The Band
    </a>
    <ul class="dropdown-menu dropdown-menu-end">
      <li><a class="dropdown-item" href="/band"><i class="fa-duotone fa-users me-2" aria-hidden="true"></i>Overview</a></li>
      <li><a class="dropdown-item" href="/band/history"><i class="fa-duotone fa-clock-rotate-left me-2" aria-hidden="true"></i>Band History</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="/band/ryan-oconnell"><i class="fa-duotone fa-person me-2" aria-hidden="true"></i>Ryan O'Connell</a></li>
      <li><a class="dropdown-item" href="/band/cassidy-oconnell"><i class="fa-duotone fa-person-dress me-2" aria-hidden="true"></i>Cassidy O'Connell</a></li>
      <li><a class="dropdown-item" href="/band/holly-oconnell"><i class="fa-duotone fa-person-dress me-2" aria-hidden="true"></i>Holly O'Connell</a></li>
      <li><a class="dropdown-item" href="/band/evan-wright"><i class="fa-duotone fa-person me-2" aria-hidden="true"></i>Evan Wright</a></li>
      <li><a class="dropdown-item" href="/band/tyler-wright"><i class="fa-duotone fa-person me-2" aria-hidden="true"></i>Tyler Wright</a></li>
    </ul>
  </li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle <?php echo $isLore ? 'active' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      <i class="fa-duotone fa-book-atlas me-2" aria-hidden="true"></i>The Lore
    </a>
    <ul class="dropdown-menu dropdown-menu-end">
      <li><a class="dropdown-item" href="/story"><i class="fa-duotone fa-book-open me-2" aria-hidden="true"></i>Full History</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="/story/ad-astra"><i class="fa-duotone fa-rocket-launch me-2" aria-hidden="true"></i>Ad Astra: The Mission</a></li>
      <li><a class="dropdown-item" href="/story/crash-of-90"><i class="fa-duotone fa-car-crash me-2" aria-hidden="true"></i>The Crash of '90</a></li>
      <li><a class="dropdown-item" href="/story/friction"><i class="fa-duotone fa-fire me-2" aria-hidden="true"></i>The Friction Catastrophe</a></li>
      <li><a class="dropdown-item" href="/story/cpi"><i class="fa-duotone fa-users-gear me-2" aria-hidden="true"></i>CPI & The Forgers</a></li>
      <li><a class="dropdown-item" href="/story/nine-figure-refusal"><i class="fa-duotone fa-handshake-simple-slash me-2" aria-hidden="true"></i>Nine-Figure Refusal</a></li>
    </ul>
  </li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle <?php echo $isAbout ? 'active' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      <i class="fa-duotone fa-info-circle me-2" aria-hidden="true"></i>About
    </a>
    <ul class="dropdown-menu dropdown-menu-end">
      <li><a class="dropdown-item" href="/about"><i class="fa-duotone fa-info-circle me-2 text-muted"></i>About This Project</a></li>
      <li><a class="dropdown-item" href="/contact"><i class="fa-duotone fa-envelope me-2" aria-hidden="true"></i>Contact</a>
      <li><a class="dropdown-item" href="/license"><i class="fa-duotone fa-file-contract me-2" aria-hidden="true"></i>License</a></li>
    </ul>
  </li>

  <!-- RaggieSoft Network Dropdown -->
  <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle text-secondary" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fa-duotone fa-network-wired me-2" aria-hidden="true"></i>RaggieSoft
      </a>
      <ul class="dropdown-menu dropdown-menu-end">
        
        <li><hr class="dropdown-divider"></li>  
        <?php foreach ($raggiesoftSites as $key => $site): ?>
              <li>
                  <a class="dropdown-item d-flex align-items-center justify-content-between" href="<?php echo $site['url']; ?>" target="_blank">
                      <span>
                          <?php if(isset($site['icon'])): ?><i class="<?php echo $site['icon']; ?> me-2 text-muted"></i><?php endif; ?>
                          <?php echo $site['title']; ?>
                      </span>
                      <i class="fa-duotone fa-arrow-up-right-from-square ms-2 small text-secondary"></i>
                  </a>
              </li>
          <?php endforeach; ?>
      </ul>
  </li>

</ul>