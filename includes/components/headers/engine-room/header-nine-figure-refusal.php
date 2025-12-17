<?php
// includes/components/headers/header-nine-figure-refusal.php
// Dedicated Navigation for the "Accidental Empire" Case File
// UPDATED: Fixed "Invisible Text" bug in Light Mode by removing hardcoded 'text-white'

// 1. Determine Active States
$uri = $_SERVER['REQUEST_URI'] ?? '';
$isOverview = str_contains($uri, '/overview');

// Updated Evidence List
$evidenceFiles = [
    'target-profile', 'ucc-search-report', 'the-bus-memo', 
    'forensic-audit', 'the-offer-letter', 
    'the-trigger', 'the-autopsy', 'the-extraction',
    'omni-global-chapter-11', 'stardust-bus-ride'
];
$isEvidence = false;
foreach ($evidenceFiles as $file) {
    if (str_contains($uri, $file)) {
        $isEvidence = true;
        break;
    }
}

$isAssets = (str_contains($uri, '/the-jessica-miller-center') || str_contains($uri, '/the-non-profit-model'));
$isEpilogue = str_contains($uri, '/frost-interview');
?>

<ul class="navbar-nav ms-auto mb-2 mb-md-0">

    <li class="nav-item">
        <a class="nav-link" href="/"><i class="fa-duotone fa-house me-2"></i>Home</a>
    </li>

    <li class="nav-item">
        <a class="nav-link <?php echo $isOverview ? 'active fw-bold' : ''; ?>" 
           href="/engine-room/history/nine-figure-refusal/overview">
            <i class="fa-duotone fa-chart-network me-2"></i>Overview
        </a>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle <?php echo $isEvidence ? 'active fw-bold' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-duotone fa-file-magnifying-glass me-2"></i>The Case File
        </a>
        <ul class="dropdown-menu dropdown-menu-end shadow-lg border-danger" style="min-width: 280px;">
            
            <li><h6 class="dropdown-header text-uppercase text-muted fw-bold small">Ch 1: The Setup</h6></li>
            <li>
                <a class="dropdown-item" href="/engine-room/history/nine-figure-refusal/target-profile">
                    <i class="fa-duotone fa-crosshairs me-2 text-danger"></i>Target Profile
                </a>
            </li>
            <li>
                <a class="dropdown-item" href="/engine-room/history/nine-figure-refusal/ucc-search-report">
                    <i class="fa-duotone fa-file-certificate me-2 text-secondary"></i>UCC Search Report
                </a>
            </li>
            <li>
                <a class="dropdown-item" href="/engine-room/history/nine-figure-refusal/the-bus-memo">
                    <i class="fa-duotone fa-envelope-open-text me-2 text-warning"></i>The Bus Memo
                </a>
            </li>

            <li><hr class="dropdown-divider"></li>
            <li><h6 class="dropdown-header text-uppercase text-muted fw-bold small">Ch 2: The Trap</h6></li>
            <li>
                <a class="dropdown-item" href="/engine-room/history/nine-figure-refusal/forensic-audit">
                    <i class="fa-duotone fa-magnifying-glass-dollar me-2 text-primary"></i>Holly's Homework
                </a>
            </li>
            <li>
                <a class="dropdown-item" href="/engine-room/history/nine-figure-refusal/the-offer-letter">
                    <i class="fa-duotone fa-file-contract me-2 text-dark"></i>The Offer Letter
                </a>
            </li>

            <li><hr class="dropdown-divider"></li>
            <li><h6 class="dropdown-header text-uppercase text-muted fw-bold small">Ch 3: The Event</h6></li>
            <li>
                <a class="dropdown-item" href="/engine-room/history/nine-figure-refusal/the-trigger">
                    <i class="fa-duotone fa-bolt me-2 text-danger"></i>The Trigger (Slide 14)
                </a>
            </li>
            <li>
                <a class="dropdown-item" href="/engine-room/history/nine-figure-refusal/the-autopsy">
                    <i class="fa-duotone fa-laptop-code me-2 text-success"></i>The Autopsy
                </a>
            </li>
            <li>
                <a class="dropdown-item" href="/engine-room/history/nine-figure-refusal/the-extraction">
                    <i class="fa-duotone fa-person-to-door me-2 text-info"></i>The Extraction
                </a>
            </li>

            <li><hr class="dropdown-divider"></li>
            <li><h6 class="dropdown-header text-uppercase text-muted fw-bold small">Ch 4: The Fallout</h6></li>
            <li>
                <a class="dropdown-item" href="/engine-room/history/nine-figure-refusal/zenith-report/omni-global-chapter-11">
                    <i class="fa-duotone fa-newspaper me-2"></i>Market Alert: Ch. 11
                </a>
            </li>
            <li>
                <a class="dropdown-item" href="/engine-room/history/nine-figure-refusal/zenith-report/stardust-bus-ride">
                    <i class="fa-duotone fa-bus me-2"></i>The Bus Ride Article
                </a>
            </li>

        </ul>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle <?php echo $isAssets ? 'active fw-bold' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-duotone fa-building me-2"></i>Legacy
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

     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle <?php echo $isEpilogue ? 'active fw-bold' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-duotone fa-building me-2"></i>Epilogue
        </a>
        <ul class="dropdown-menu dropdown-menu-end shadow-lg border-success">
            <li><h6 class="dropdown-header text-uppercase text-success fw-bold">Epilogue</h6></li>
            <li>
                <a class="dropdown-item" href="/engine-room/history/nine-figure-refusal/frost-interview">
                    <i class="fa-duotone fa-clipboard-question me-2 text-success"></i>Frost Interview
                </a>
            </li>
        </ul>
    </li>

    <li class="nav-item border-start border-secondary ms-2 ps-3 d-none d-lg-block">
        <a class="nav-link text-muted" href="/engine-room/history">
            <i class="fa-duotone fa-arrow-turn-up me-2"></i>Exit
        </a>
    </li>

</ul>