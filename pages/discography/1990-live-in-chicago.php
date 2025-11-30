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
                The 26-minute runtime features a strictly studio-mandated setlist of "safe" synth-pop tracks. However, the mix is infamous: Apex engineers intentionally buried Cassidy's signature "Stardust" synth leitmotifs deep in the background, attempting to suppress her contribution to the sound.
            </p>
        </div>
    </div>

    <hr class="border-secondary opacity-25 mb-5">

    <?php include ROOT_PATH . '/includes/components/_tracklist-downloader.php'; ?>

    <div class="row g-4 mt-4">
        
        <div class="col-lg-6">
            <div class="card border-danger bg-transparent h-100">
                <div class="card-body">
                    <h5 class="card-title text-danger fw-bold text-uppercase mb-3">
                        <i class="fa-duotone fa-gavel me-2"></i>Exhibit A: The "Smoking Gun"
                    </h5>
                    <p class="card-text text-muted small">
                        Track 1 ("The Stardust Engine") became the central piece of evidence in the 1994 <em>Friction</em> trial. In the intro, Ryan explicitly introduces Cassidy as <strong>"my sister, Cassidy!"</strong>
                    </p>
                    <p class="card-text text-muted small mb-0">
                        This 10-second clip proved definitively that executive Julian Vance's defense—that he "didn't know" they were siblings when he demanded the <em>Friction</em> concept—was a lie. He had never bothered to listen to his own label's release.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card border-secondary bg-transparent h-100">
                <div class="card-body">
                    <h5 class="card-title text-secondary fw-bold text-uppercase mb-3">
                        <i class="fa-duotone fa-scissors me-2"></i>The Vetoed Setlist
                    </h5>
                    <p class="card-text text-muted small">
                        Noticeably absent are the band's true fan-favorites: "Chain Reaction," "Not Your Doll," and the sacred CPI anthem "Ignition." 
                    </p>
                    <p class="card-text text-muted small mb-0">
                        As the opening act with a strict 30-minute slot, Apex Records explicitly banned these heavier rock songs, refusing to let the "Engine" roar for a pop audience.
                    </p>
                </div>
            </div>
        </div>

    </div>

</div>