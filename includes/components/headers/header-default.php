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
$isContact = ($request_uri === '/contact');
?>

<ul class="navbar-nav ms-auto mb-2 mb-md-0">
  
  <li class="nav-item">
    <a class="nav-link <?php echo $isHome ? 'active' : ''; ?>" href="/">Home</a>
  </li>

  <!-- Discography Dropdown -->
  <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle <?php echo $isDiscography ? 'active' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Discography
      </a>
      <ul class="dropdown-menu dropdown-menu-end scrollable-menu" style="max-height: 500px; overflow-y: auto;">
          <li>
              <a class="dropdown-item fw-bold" href="/discography">
                  <i class="fa-duotone fa-list-music me-2"></i>Full Overview
              </a>
          </li>
          <?php foreach ($discographyMenu as $eraName => $albums): ?>
              <li><hr class="dropdown-divider"></li>
              <li><h6 class="dropdown-header text-uppercase text-muted fw-bold ps-3"><?php echo $eraName; ?></h6></li>
              <?php foreach ($albums as $album): ?>
                  <li>
                      <a class="dropdown-item d-flex align-items-center justify-content-between" href="<?php echo $album['url']; ?>">
                          <span><?php echo $album['title']; ?> <small class="text-muted ms-1">(<?php echo $album['year']; ?>)</small></span>
                          <?php if (isset($album['extra'])) echo $album['extra']; ?>
                      </a>
                  </li>
              <?php endforeach; ?>
          <?php endforeach; ?>
      </ul>
  </li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle <?php echo $isBand ? 'active' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      The Band
    </a>
    <ul class="dropdown-menu dropdown-menu-end">
      <li><a class="dropdown-item" href="/band">Overview</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="/band/ryan-oconnell">Ryan O'Connell</a></li>
      <li><a class="dropdown-item" href="/band/cassidy-oconnell">Cassidy O'Connell</a></li>
      <li><a class="dropdown-item" href="/band/holly-oconnell">Holly O'Connell</a></li>
      <li><a class="dropdown-item" href="/band/evan-wright">Evan Wright</a></li>
      <li><a class="dropdown-item" href="/band/tyler-wright">Tyler Wright</a></li>
    </ul>
  </li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle <?php echo $isLore ? 'active' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      The Lore
    </a>
    <ul class="dropdown-menu dropdown-menu-end">
      <li><a class="dropdown-item" href="/story/overview">Full History</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="/story/friction">The Friction Catastrophe</a></li>
      <li><a class="dropdown-item" href="/story/cpi">CPI & The Forgers</a></li>
    </ul>
  </li>

  <li class="nav-item">
    <a class="nav-link <?php echo $isContact ? 'active' : ''; ?>" href="/contact">Contact</a>
  </li>

  <!-- RaggieSoft Network Dropdown -->
  <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle text-secondary" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        RaggieSoft
      </a>
      <ul class="dropdown-menu dropdown-menu-end">
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