<?php
// --- AUTO-OPEN LOGIC ---
// Check the current URL to determine which accordion item should be open.

// 1. Apex Era (1987-1992)
$isApex = str_contains($request_uri, '1987') || 
          str_contains($request_uri, '1989') || 
          str_contains($request_uri, '1990') || 
          str_contains($request_uri, '1992');

// 2. Freedom Era (1995-2007)
$isFreedom = str_contains($request_uri, '1995') || 
             str_contains($request_uri, '1997') || 
             str_contains($request_uri, '2005') || 
             str_contains($request_uri, '2007');

// 3. Homecoming Era (2015-2016)
$isHomecoming = str_contains($request_uri, '2015') || 
                str_contains($request_uri, '2016');

// 4. Modern Era (Future 2017+)
$isModern = false; // Add conditions here later

// 5. Soundtracks (Knox)
$isOST = str_contains($request_uri, 'knox');

// Default: If nothing matches (like the main overview page), open Apex by default?
// Or keep all closed? Let's open Apex as the "start" if we are on the root.
if ($request_uri === '/discography') {
    $isApex = true;
}
?>

<h5 class="pt-3 pb-2 mb-3 border-bottom">
    <i class="fa-duotone fa-record-vinyl me-2"></i>Discography
</h5>

<div class="nav flex-column mb-3">
    <a class="nav-link link-secondary <?php echo ($request_uri === '/discography') ? 'active' : ''; ?>" href="/discography">
      <i class="fa-duotone fa-list-music me-2"></i>Full Overview
    </a>
</div>

<div class="accordion accordion-flush" id="discographyAccordion">

    <div class="accordion-item bg-transparent border-0">
        <h2 class="accordion-header" id="headingApex">
            <button class="accordion-button bg-transparent shadow-none p-2 text-secondary fw-bold <?php echo $isApex ? '' : 'collapsed'; ?>" 
                    type="button" 
                    data-bs-toggle="collapse" 
                    data-bs-target="#collapseApex"
                    aria-expanded="<?php echo $isApex ? 'true' : 'false'; ?>">
                <i class="fa-duotone fa-snowflake me-2"></i>Apex "Cold War"
            </button>
        </h2>
        <div id="collapseApex" class="accordion-collapse collapse <?php echo $isApex ? 'show' : ''; ?>" data-bs-parent="#discographyAccordion">
            <div class="accordion-body p-0 ps-3">
                <ul class="nav flex-column border-start border-secondary ms-2 ps-2">
                   <li class="nav-item">
                    <a class="nav-link link-secondary py-1 <?php if(str_contains($request_uri, '1987')) echo 'active fw-bold'; ?>" href="/discography/1987-electric-color">
                        <small>Electric Color (1987)</small>
                    </a>
                   </li>
                   <li class="nav-item">
                    <a class="nav-link link-secondary py-1 <?php if(str_contains($request_uri, '1989')) echo 'active fw-bold'; ?>" href="/discography/1989-neon-hearts">
                        <small>Neon Hearts (1989)</small>
                    </a>
                   </li>
                   <li class="nav-item">
                    <a class="nav-link link-secondary py-1 <?php if(str_contains($request_uri, '1990')) echo 'active fw-bold'; ?>" href="/discography/1990-live-in-chicago">
                        <small>Live in Chicago (1990)</small>
                    </a>
                   </li>
                   <li class="nav-item">
                      <a class="nav-link link-cancelled py-1 <?php if(str_contains($request_uri, '1992')) echo 'active fw-bold'; ?>" href="/discography/1992-friction" title="Canceled Album">
                         <small><i class="fa-duotone fa-ban me-1"></i>Friction (1992)</small>
                      </a>
                   </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="accordion-item bg-transparent border-0">
        <h2 class="accordion-header" id="headingFreedom">
            <button class="accordion-button bg-transparent shadow-none p-2 text-secondary fw-bold <?php echo $isFreedom ? '' : 'collapsed'; ?>" 
                    type="button" 
                    data-bs-toggle="collapse" 
                    data-bs-target="#collapseFreedom"
                    aria-expanded="<?php echo $isFreedom ? 'true' : 'false'; ?>">
                <i class="fa-duotone fa-flag me-2"></i>The Freedom Era
            </button>
        </h2>
        <div id="collapseFreedom" class="accordion-collapse collapse <?php echo $isFreedom ? 'show' : ''; ?>" data-bs-parent="#discographyAccordion">
            <div class="accordion-body p-0 ps-3">
                <ul class="nav flex-column border-start border-secondary ms-2 ps-2">
                   <li class="nav-item">
                    <a class="nav-link link-secondary py-1 <?php if(str_contains($request_uri, '1995')) echo 'active fw-bold'; ?>" href="/discography/1995-the-warehouse-tapes">
                        <small>The Warehouse Tapes (1995)</small>
                    </a>
                   </li>
                   <li class="nav-item">
                    <a class="nav-link link-secondary py-1 <?php if(str_contains($request_uri, '1997')) echo 'active fw-bold'; ?>" href="/discography/1997-hard-reset">
                        <small>Hard Reset (1997)</small>
                    </a>
                   </li>
                   <li class="nav-item">
                    <a class="nav-link link-secondary py-1 <?php if(str_contains($request_uri, '2005')) echo 'active fw-bold'; ?>" href="/discography/2005-live-in-norfolk">
                        <small>Live in Norfolk (2005)</small>
                    </a>
                   </li>
                    <li class="nav-item">
                    <a class="nav-link link-secondary py-1 <?php if(str_contains($request_uri, '2007')) echo 'active fw-bold'; ?>" href="/discography/2007-lost-sounds">
                        <small>Lost Sounds (2007)</small>
                    </a>
                   </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="accordion-item bg-transparent border-0">
        <h2 class="accordion-header" id="headingHomecoming">
            <button class="accordion-button bg-transparent shadow-none p-2 text-secondary fw-bold <?php echo $isHomecoming ? '' : 'collapsed'; ?>" 
                    type="button" 
                    data-bs-toggle="collapse" 
                    data-bs-target="#collapseHomecoming"
                    aria-expanded="<?php echo $isHomecoming ? 'true' : 'false'; ?>">
                <i class="fa-duotone fa-house-heart me-2"></i>The Homecoming
            </button>
        </h2>
        <div id="collapseHomecoming" class="accordion-collapse collapse <?php echo $isHomecoming ? 'show' : ''; ?>" data-bs-parent="#discographyAccordion">
            <div class="accordion-body p-0 ps-3">
                <ul class="nav flex-column border-start border-secondary ms-2 ps-2">
                   <li class="nav-item">
                    <a class="nav-link link-secondary py-1 <?php if(str_contains($request_uri, '2015')) echo 'active fw-bold'; ?>" href="/discography/2015-re-ignition">
                        <small>Re-Ignition (2015)</small>
                    </a>
                   </li>
                   <li class="nav-item">
                    <a class="nav-link link-warning py-1 <?php if(str_contains($request_uri, '2016')) echo 'active fw-bold'; ?>" href="/discography/2016-live-at-the-crucible">
                        <small>Live at The Crucible (2016)</small>
                    </a>
                   </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="accordion-item bg-transparent border-0">
        <h2 class="accordion-header" id="headingModern">
            <button class="accordion-button bg-transparent shadow-none p-2 text-secondary fw-bold <?php echo $isModern ? '' : 'collapsed'; ?>" 
                    type="button" 
                    data-bs-toggle="collapse" 
                    data-bs-target="#collapseModern"
                    aria-expanded="<?php echo $isModern ? 'true' : 'false'; ?>">
                <i class="fa-duotone fa-rocket-launch me-2"></i>Modern Era
            </button>
        </h2>
        <div id="collapseModern" class="accordion-collapse collapse <?php echo $isModern ? 'show' : ''; ?>" data-bs-parent="#discographyAccordion">
            <div class="accordion-body p-0 ps-3">
                <ul class="nav flex-column border-start border-secondary ms-2 ps-2">
                   <li class="nav-item">
                    <a class="nav-link link-secondary py-1 text-muted fst-italic" href="#">
                        <small>Coming Soon...</small>
                    </a>
                   </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="accordion-item bg-transparent border-0">
        <h2 class="accordion-header" id="headingOST">
            <button class="accordion-button bg-transparent shadow-none p-2 text-secondary fw-bold <?php echo $isOST ? '' : 'collapsed'; ?>" 
                    type="button" 
                    data-bs-toggle="collapse" 
                    data-bs-target="#collapseOST"
                    aria-expanded="<?php echo $isOST ? 'true' : 'false'; ?>">
                <i class="fa-duotone fa-film me-2"></i>Soundtracks
            </button>
        </h2>
        <div id="collapseOST" class="accordion-collapse collapse <?php echo $isOST ? 'show' : ''; ?>" data-bs-parent="#discographyAccordion">
            <div class="accordion-body p-0 ps-3">
                <ul class="nav flex-column border-start border-secondary ms-2 ps-2">
                   <li class="nav-item">
                    <a class="nav-link link-secondary py-1 <?php if(str_contains($request_uri, 'knox')) echo 'active fw-bold'; ?>" href="/discography/2017-knox-ost">
                        <small>Knox (O.S.T.) (2017)</small>
                    </a>
                   </li>
                </ul>
            </div>
        </div>
    </div>

</div>