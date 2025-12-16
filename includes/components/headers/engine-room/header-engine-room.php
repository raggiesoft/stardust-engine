<?php
// includes/components/headers/header-engine-room.php
// The Corporate Navigation. Stark. Functional.
// Used for: /engine-room/* pages

// 1. Determine Active States
$isRoster = (str_starts_with($request_uri, '/engine-room/artists'));
$isHistory = (str_starts_with($request_uri, '/engine-room/history'));
?>

<ul class="navbar-nav ms-auto mb-2 mb-md-0">
  
  <li class="nav-item">
    <a class="nav-link" href="/">
        <i class="fa-duotone fa-arrow-left me-2"></i>Return to The Stardust Engine
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link <?php echo $isRoster ? 'active' : ''; ?>" href="/engine-room/artists">
        <i class="fa-duotone fa-users-viewfinder me-2"></i>The Roster
    </a>
  </li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle <?php echo $isHistory ? 'active' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      <i class="fa-duotone fa-file-contract me-2"></i>Corporate
    </a>
    <ul class="dropdown-menu dropdown-menu-end rounded-0 border-secondary">
      <li>
          <a class="dropdown-item" href="/engine-room">
            <i class="fa-solid fa-building me-2"></i>Headquarters
          </a>
      </li>
      <li><hr class="dropdown-divider"></li>
      <li><h6 class="dropdown-header text-uppercase">Legal Archives</h6></li>
      
      <li>
          <a class="dropdown-item" href="/engine-room/history">
            <i class="fa-solid fa-clock-rotate-left me-2"></i>Full Timeline
          </a>
      </li>
      
      <li>
          <a class="dropdown-item" href="/engine-room/history/friction">
            <i class="fa-duotone fa-fire me-2 text-danger"></i>1992: Friction
          </a>
      </li>
      <li>
          <a class="dropdown-item" href="/engine-room/history/nine-figure-refusal">
            <i class="fa-duotone fa-handshake-slash me-2 text-success"></i>2018: The Refusal
          </a>
      </li>
    </ul>
  </li>

</ul>