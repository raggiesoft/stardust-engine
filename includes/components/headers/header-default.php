<!-- /includes/components/headers/header-default.php -->
<!-- This is the main navigation menu for TheStardustEngine.com -->
<!-- NOW WITH DYNAMIC 'active' CLASSES -->

<?php
// Check the $request_uri (from index.php) to see which section is active
// This helps us highlight the main dropdown toggles
$isHome = ($request_uri === '/');
$isDiscography = (str_starts_with($request_uri, '/discography') || $request_uri === '/discography');
$isBand = (str_starts_with($request_uri, '/band') || $request_uri === '/band');
$isLore = (str_starts_with($request_uri, '/story') || $request_uri === '/history');
$isContact = ($request_uri === '/contact');
?>

<ul class="navbar-nav ms-auto mb-2 mb-md-0">
  
  <li class="nav-item">
    <a class="nav-link <?php echo $isHome ? 'active' : ''; ?>" href="/">Home</a>
  </li>

  <li class="nav-item">
    <a class="nav-link <?php echo $isDiscography ? 'active' : ''; ?>" href="/discography">Discography</a>
  </li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle <?php echo $isBand ? 'active' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      The Band
    </a>
    <ul class="dropdown-menu dropdown-menu-end">
      <li><a class="dropdown-item <?php echo ($request_uri === '/band') ? 'active' : ''; ?>" href="/band">Band Overview</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item <?php echo ($request_uri === '/band/ryan-oconnell') ? 'active' : ''; ?>" href="/band/ryan-oconnell">Ryan O'Connell</a></li>
      <li><a class="dropdown-item <?php echo ($request_uri === '/band/cassidy-oconnell') ? 'active' : ''; ?>" href="/band/cassidy-oconnell">Cassidy O'Connell</a></li>
      <li><a class="dropdown-item <?php echo ($request_uri === '/band/holly-oconnell') ? 'active' : ''; ?>" href="/band/holly-oconnell">Holly O'Connell</a></li>
      <li><a class="dropdown-item <?php echo ($request_uri === '/band/evan-wright') ? 'active' : ''; ?>" href="/band/evan-wright">Evan Wright</a></li>
      <li><a class="dropdown-item <?php echo ($request_uri === '/band/tyler-wright') ? 'active' : ''; ?>" href="/band/tyler-wright">Tyler Wright</a></li>
    </ul>
  </li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle <?php echo $isLore ? 'active' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      The Lore
    </a>
    <ul class="dropdown-menu dropdown-menu-end">
      <li><a class="dropdown-item <?php echo ($request_uri === '/story/friction') ? 'active' : ''; ?>" href="/story/the-friction-catastrophe">The Friction Catastrophe</a></li>
      <li><a class="dropdown-item <?php echo ($request_uri === '/story/cpi/') ? 'active' : ''; ?>" href="/story/cpi">About CPI & The Forgers</a></li>
    </ul>
  </li>

  <li class="nav-item">
    <a class="nav-link <?php echo $isContact ? 'active' : ''; ?>" href="/contact">Contact</a>
  </li>

  <!-- RaggieSoft Universe Links -->
  <li class="nav-item-dropdown">
    <a class="nav-link dropdown-toggle text-secondary" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      RaggieSoft
    </a>
    <ul class="dropdown-menu dropdown-menu-end">
      <li><a class="dropdown-item" href="https://raggiesoft.com/">RaggieSoft.com <i class="fa-duotone fa-arrow-up-right-from-square ms-2"></i></a></li>
      <li><a class="dropdown-item" href="https://raggiesoftknox.com/">RaggieSoft Knox <i class="fa-duotone fa-arrow-up-right-from-square ms-2"></i></a></li>
      <li><a class="dropdown-item" href="https://michaelpragsdale.com/">MichaelPRagsdale.com <i class="fa-duotone fa-arrow-up-right-from-square ms-2"></i></a></li>
    </ul>
  </li>

</ul>