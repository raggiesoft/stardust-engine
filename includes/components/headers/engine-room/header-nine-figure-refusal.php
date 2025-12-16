<?php
// includes/components/headers/header-nine-figure-refusal.php
// Dedicated Navigation for the "Accidental Empire" Case File

// 1. Determine Active States for this section
$uri = $_SERVER['REQUEST_URI'] ?? '';
$isOverview = str_contains($uri, '/overview');
$isEvidence = (str_contains($uri, '/the-trigger') || str_contains($uri, '/the-bus-memo'));
$isAssets   = (str_contains($uri, '/the-jessica-miller-center') || str_contains($uri, '/the-non-profit-model'));
?>

<ul class="navbar-nav ms-auto mb-2 mb-md-0">

    <li class="nav-item">
        <a class="nav-link" href="/"><i class="fa-duotone fa-house me-2"></i>Home</a>
    </li>

    <li class="nav-item">
        <a class="nav-link <?php echo $isOverview ? 'active fw-bold text-white' : ''; ?>" 
           href="/engine-room/history/nine-figure-refusal/overview">
            <i class="fa-duotone fa-chart-network me-2"></i>Overview
        </a>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle <?php echo $isEvidence ? 'active fw-bold text-white' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-duotone fa-file-magnifying-glass me-2"></i>Evidence
        </a>
        <ul class="dropdown-menu dropdown-menu-end shadow-lg border-danger">
            <li><h6 class="dropdown-header text-uppercase text-danger fw-bold"><i class="fa-solid fa-siren-on me-2"></i>The Incitement</h6></li>
            <li>
                <a class="dropdown-item" href="/engine-room/history/nine-figure-refusal/target-profile">
                    <i class="fa-duotone fa-money-bill-trend-up me-2 text-danger"></i>Target Profile
                </a>
            </li>
            <li>
                <a class="dropdown-item" href="/engine-room/history/nine-figure-refusal/zenith-report/omni-global-chapter-11">
                    <i class="fa-duotone fa-newspaper me-2 text-danger"></i>Omni Global Chapter 11
                </a>
            </li>
            <li>
                <a class="dropdown-item" href="/engine-room/history/nine-figure-refusal/zenith-report/stardust-bus-ride">
                    <i class="fa-duotone fa-newspaper me-2 text-danger"></i>Stardust Bus Ride
                </a>
            </li>
            <li>
                <a class="dropdown-item" href="/engine-room/history/nine-figure-refusal/the-trigger">
                    <i class="fa-duotone fa-bolt me-2 text-danger"></i>The Trigger (Slide 14)
                </a>
            </li>
            <li>
                <a class="dropdown-item" href="/engine-room/history/nine-figure-refusal/the-offer-letter">
                    <i class="fa-duotone fa-file-contract me-2 text-danger"></i>The Offer Letter
                </a>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li><h6 class="dropdown-header text-uppercase text-warning fw-bold"><i class="fa-solid fa-gavel me-2"></i>The Discovery</h6></li>
            <li>
                <a class="dropdown-item" href="/engine-room/history/nine-figure-refusal/the-bus-memo">
                    <i class="fa-duotone fa-file-contract me-2 text-warning"></i>The Bus Memo (44-B)
                </a>
            </li>
        </ul>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle <?php echo $isAssets ? 'active fw-bold text-white' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-duotone fa-building me-2"></i>Acquired Assets
        </a>
        <ul class="dropdown-menu dropdown-menu-end shadow-lg border-success">
            <li><h6 class="dropdown-header text-uppercase text-success fw-bold">Real Estate</h6></li>
            <li>
                <a class="dropdown-item" href="/engine-room/history/nine-figure-refusal/the-jessica-miller-center">
                    <i class="fa-duotone fa-building-columns me-2 text-success"></i>The Jessica Miller Center
                </a>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li><h6 class="dropdown-header text-uppercase text-primary fw-bold">Operations</h6></li>
            <li>
                <a class="dropdown-item" href="/engine-room/history/nine-figure-refusal/the-non-profit-model">
                    <i class="fa-duotone fa-hand-holding-box me-2 text-primary"></i>The Non-Profit Model
                </a>
            </li>
        </ul>
    </li>

    <li class="nav-item border-start border-secondary ms-2 ps-3 d-none d-lg-block">
        <a class="nav-link text-muted" href="/engine-room/history">
            <i class="fa-duotone fa-arrow-turn-up me-2"></i>Exit Archive
        </a>
    </li>
    <li class="nav-item d-lg-none">
        <a class="nav-link text-muted" href="/engine-room/history">
            <i class="fa-duotone fa-arrow-turn-up me-2"></i>Exit Archive
        </a>
    </li>

</ul>