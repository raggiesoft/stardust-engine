<?php
// Page data
$pageTitle = "The Warehouse Tapes (1995) - The Stardust Engine";
$album_path_web = '/stardust-engine/music/1995-the-warehouse-tapes';
?>

<div class="container py-5">
    
    <div class="row align-items-center mb-5">
        <?php $props = [
            'path' => $album_path_web, 
            'alt' => 'The Warehouse Tapes Album Art',
            'variant' => 'warning' // or 'axiom'
        ]; include ROOT_PATH . '/includes/components/_album-art-header.php'; ?>
        <div class="col-md-7">
            <h1 class="display-3 fw-bold text-uppercase text-primary mb-0" style="font-family: 'Impact', sans-serif;">
                The Warehouse Tapes
            </h1>
            <p class="h4 text-warning fw-bold mb-3">
                The 1995 "Bat Signal"
            </p>
            <p class="lead text-secondary">
                The band's first independent release. Recorded in their Blacksburg warehouse ("The Fortress") and funded entirely by the "Forger Nation War Chest," this EP was the band's rebirth.
            </p>
            <p class="text-muted">
                Released in 1995, right in the middle of the Grunge era, this album was a defiant "Sonic Orphan." While the rest of the world went lo-fi and flannel, The Stardust Engine unleashed the polished, authentic 80s arena rock sound they had been suppressed from making for a decade.
            </p>
            <p class="small text-muted fst-italic">
                *Originally sold as a mail-order cassette and CD via TheStardustEngine.com.
            </p>
        </div>
    </div>

    <hr class="border-secondary opacity-25 mb-5">

    <!-- Tracklist & Downloads -->
    <!-- 
      This component reads the album's JSON from the CDN and
      automatically builds the download table and buttons.
    -->
    <?php include ROOT_PATH . '/includes/components/tracklist-downloader.php'; ?>

    <h2 class="display-6 fw-bold text-uppercase mb-4">Tracklist & Liner Notes</h2>

    <div class="list-group list-group-flush bg-transparent">
        
        <div class="list-group-item bg-transparent border-secondary text-muted py-3">
            <div class="d-flex w-100 justify-content-between align-items-center">
                <h5 class="mb-1 text-primary fw-bold">1. Static</h5>
                <span class="badge bg-secondary">The Opener</span>
            </div>
            <p class="mb-1 small">
                "I am the static! I am the noise!" The opening statement of the Freedom Era. A direct rejection of the "hollow sound" Apex forced them to make.
            </p>
        </div>

        <div class="list-group-item bg-transparent border-secondary text-muted py-3">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">2. Garbage</h5>
            </div>
            <p class="mb-1 small">
                Ryan's raw, unfiltered rage track. It retells the infamous "dirty mirror" incident from the 1992 <em>Friction</em> photo shoot ("It was just dust! It was just a lie!").
            </p>
        </div>

        <div class="list-group-item bg-transparent border-secondary text-muted py-3">
            <div class="d-flex w-100 justify-content-between align-items-center">
                <h5 class="mb-1 text-warning fw-bold">3. Not Your Saint</h5>
                <span class="badge bg-warning text-dark">Cassidy's Rage</span>
            </div>
            <p class="mb-1 small">
                Cassidy rejecting the "Victim-Saint" narrative the media painted of her during the 1994 trial. A fierce, female-led hard rock anthem where she declares, "I am not your victim / I am not your saint."
            </p>
        </div>

        <div class="list-group-item bg-transparent border-secondary text-muted py-3">
            <div class="d-flex w-100 justify-content-between align-items-center">
                <h5 class="mb-1">4. Atmosphere (Warehouse Demo)</h5>
                <span class="badge bg-secondary text-light">The Lost Gem</span>
            </div>
            <p class="mb-1 small">
                The only surviving track from the canceled <em>Friction</em> sessions (1992). The band wrote it about a literal space shuttle re-entry ("Here comes the friction / Feel the fire"), but the label executive misinterpreted it as a sexual metaphor.
            </p>
        </div>

        <div class="list-group-item bg-transparent border-secondary text-muted py-3">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">5. The Fortress</h5>
            </div>
            <p class="mb-1 small">
                An arena-rock tribute to the "Ironheads" and CPI alumni who funded their freedom. "You built a place to hide from the storm / You are the shield!"
            </p>
        </div>

        <div class="list-group-item bg-transparent border-secondary py-4" style="background: rgba(5, 217, 232, 0.05);">
            <div class="d-flex w-100 justify-content-between align-items-center">
                <h5 class="mb-1 text-glow-warning display-6 fw-bold">6. Escape Velocity (Ad Astra)</h5>
                <span class="badge bg-warning text-dark">The Epic</span>
            </div>
            <p class="mb-1 fs-5 text-body">
                The 4-part prog-rock masterpiece that took up the entire Side B.
            </p>
            <p class="small text-muted">
                This 12-minute epic details Cassidy's psychological journey from the "Cage" of the trial to the "Cosmos" of freedom. It features the band's most complex instrumentation, channeling their love for Rush and Genesis.
            </p>
        </div>

    </div>

</div>