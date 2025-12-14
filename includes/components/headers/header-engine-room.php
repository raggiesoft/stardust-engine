<?php
// includes/components/headers/header-engine-room.php
// The Corporate Navigation. Stark. Functional.
// Used for: /engine-room/* pages

// 1. Determine Active States
$isRoster = (str_starts_with($request_uri, '/engine-room/artists'));
$isMission = ($request_uri === '/engine-room/about');
?>

<ul class="navbar-nav ms-auto mb-2 mb-md-0">
  
  <li class="nav-item">
    <a class="nav-link" href="/">
        <i class="fa-duotone fa-arrow-left me-2"></i>Return to The Stardust Engine
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link <?php echo $isRoster ? 'active' : ''; ?>" href="/engine-room/artists/overview">
        <i class="fa-duotone fa-users-viewfinder me-2"></i>The Roster
    </a>
  </li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      <i class="fa-duotone fa-file-contract me-2"></i>Corporate
    </a>
    <ul class="dropdown-menu dropdown-menu-end rounded-0 border-secondary">
      <li><a class="dropdown-item" href="/engine-room"><i class="fa-solid fa-building me-2"></i>Headquarters</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="/story/nine-figure-refusal"><i class="fa-solid fa-gavel me-2"></i>Legal History</a></li>
    </ul>
  </li>

</ul>