<?php
// Page data
$pageTitle = "Live in Chicago (1990) - The Stardust Engine";
$album_path_web = '/stardust-engine/music/1990-live-in-chicago';
?>

<div class="container py-5">
    <?php
        // Include the reusable live album disclaimer
        include ROOT_PATH . '/includes/components/_disclaimer-live-album.php';
    ?>
    
    <div class="row align-items-center mb-5">
        
        <?php $props = [
            'path' => $album_path_web, 
            'alt' => 'Live in Chicago Album Art',
            'variant' => 'pact' // Pink border for Apex era
        ]; include ROOT_PATH . '/includes/components/_album-art-header.php'; ?>

        <div class="col-md-7">
            <h1 class="display-3 fw-bold text-uppercase text-primary mb-0" style="font-family: 'Impact', sans-serif;">
                Live in Chicago
            </h1>
            <p class="h4 text-warning fw-bold mb-3">
                The 1990 "Stop-Gap" EP
            </p>
            <p class="lead text-secondary">
                Released in 1990 to capitalize on the <em>Neon Hearts</em> tour, this live EP is a snapshot of the band at the height of their "cold war" with Apex Records.
            </p>
            <p class="text-muted">
                The 26-minute runtime features a strictly studio-mandated setlist of "safe" synth-pop tracks. The label famously vetoed the performance of the band's rock anthems, refusing to let the "Engine" roar.
            </p>
            <p class="small text-muted fst-italic">
                *Note for Audiophiles: This recording is infamous for its "terrible" mix. Apex engineers intentionally buried Cassidy's signature leitmotif deep in the background, attempting to suppress the "Stardust" sound that defined the band's identity.
            </p>
        </div>
    </div>

    <hr class="border-secondary opacity-25 mb-5">

    <?php include ROOT_PATH . '/includes/components/_tracklist-downloader.php'; ?>

    <div class="alert alert-dark border-secondary mt-5">
        <div class="d-flex">
            <div class="me-3">
                 <i class="fa-duotone fa-scissors text-secondary fs-3"></i>
            </div>
            <div>
                <h5 class="alert-heading h6 fw-bold text-secondary text-uppercase mb-1">The Vetoed Setlist</h5>
                <p class="mb-0 small text-muted">
                    Noticeably absent are the band's true fan-favorites: "Chain Reaction," "Not Your Doll," and the sacred CPI anthem "Ignition." Apex Records explicitly banned these songs from the setlist, refusing to promote the band's heavier rock sound to a pop audience.
                </p>
            </div>
        </div>
    </div>

</div>