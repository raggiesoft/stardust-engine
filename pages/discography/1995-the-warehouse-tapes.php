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
            'variant' => 'axiom' // Orange for Freedom/Warehouse era
        ]; include ROOT_PATH . '/includes/components/_album-art-header.php'; ?>
        
        <div class="col-md-7">
            <h1 class="display-3 fw-bold text-uppercase text-primary mb-0" style="font-family: 'Impact', sans-serif;">
                The Warehouse Tapes
            </h1>
            <p class="h4 text-warning fw-bold mb-3">
                The 1995 "Bat Signal"
            </p>
            <p class="lead text-secondary">
                Released in 1995 during the band's "Wilderness Era," this EP was the official rebirth of The Stardust Engine.
            </p>
            <p class="text-muted">
                Recorded in their Blacksburg warehouse ("The Fortress") and funded entirely by the "Forger Nation War Chest," this album was a complete rejection of their polished Apex past. Fueled by the "ocean of rage" from the 1994 <em>Friction</em> trial, the band finally unleashed their true identity.
            </p>
            <p class="small text-muted fst-italic">
                *Originally sold as a mail-order only Cassette and CD via TheStardustEngine.com.
            </p>
        </div>
    </div>

    <hr class="border-secondary opacity-25 mb-5">

    <?php //include ROOT_PATH . '/includes/components/_tracklist-downloader.php'; ?>

    <div class="mt-5">
        <h3 class="h4 fw-bold text-uppercase text-muted mb-4 border-bottom pb-2">Liner Notes & Lore</h3>

        <div class="d-flex align-items-center mb-3">
            <i class="fa-duotone fa-cassette-tape fs-3 text-secondary me-3"></i>
            <h4 class="h5 fw-bold text-secondary mb-0 text-uppercase">Side A: The Engine (Rage & Redemption)</h4>
        </div>

        <div class="list-group list-group-flush bg-transparent mb-5">
            
            <div class="list-group-item bg-transparent border-secondary text-muted py-3">
                <div class="d-flex w-100 justify-content-between align-items-center mb-1">
                    <strong class="text-primary fs-5">1. Static</strong>
                    <span class="badge bg-secondary">The Statement</span>
                </div>
                <p class="mb-0">
                    "I am the static! I am the noise!" The declaration of the Freedom Era. A direct rejection of the "hollow sound" Apex forced them to make.
                </p>
            </div>

            <div class="list-group-item bg-transparent border-secondary text-muted py-3">
                <div class="mb-1"><strong class="fs-5">2. Garbage</strong></div>
                <p class="mb-0">
                    Ryan's raw, "jangle rock" rage track. It retells the infamous "dirty mirror" incident from the 1992 <em>Friction</em> photo shoot ("It was just dust! It was just a lie!"), channeling his anger at the executive who humiliated him.
                </p>
            </div>

            <div class="list-group-item bg-transparent border-secondary text-muted py-3">
                <div class="d-flex w-100 justify-content-between align-items-center mb-1">
                    <strong class="text-warning fs-5">3. Not Your Saint</strong>
                    <span class="badge bg-warning text-dark">Cassidy's Rage</span>
                </div>
                <p class="mb-0">
                    After the "Tabloid Hell" of the trial, the media tried to paint Cassidy as a "Victim-Saint." This fierce, "Pat Benatar-style" arena anthem is her rejection of that narrative: "I am not your victim / I am not your saint."
                </p>
            </div>

            <div class="list-group-item bg-transparent border-secondary text-muted py-3">
                <div class="d-flex w-100 justify-content-between align-items-center mb-1">
                    <strong class="text-primary fs-5">4. Atmosphere (Warehouse Demo)</strong>
                    <span class="badge bg-secondary">The Lost Gem</span>
                </div>
                <p class="mb-0">
                    The only surviving track from the canceled 1992 <em>Friction</em> sessions. The band wrote it about a literal space shuttle re-entry ("Here comes the friction / Feel the fire"), but the "rogue" label executive misinterpreted it as a sexual metaphor.
                </p>
            </div>

            <div class="list-group-item bg-transparent border-secondary text-muted py-3">
                <div class="d-flex w-100 justify-content-between align-items-center mb-1">
                    <strong class="text-warning fs-5">5. The Fortress</strong>
                    <span class="badge bg-warning text-dark">Side A Finale</span>
                </div>
                <p class="mb-0">
                    The epic closer of Side A. An arena-rock tribute to the "Ironheads" and CPI alumni who funded their freedom. "You built a place to hide from the storm / You are the shield!"
                </p>
            </div>

        </div>

        <div class="d-flex align-items-center mb-3">
            <i class="fa-duotone fa-cassette-tape fs-3 text-warning me-3"></i>
            <h4 class="h5 fw-bold text-warning mb-0 text-uppercase">Side B: The Stardust (Ad Astra)</h4>
        </div>

        <div class="list-group list-group-flush bg-transparent">

            <div class="list-group-item bg-transparent border-secondary py-5" style="background: rgba(5, 217, 232, 0.05);">
                <div class="d-flex w-100 justify-content-between align-items-center mb-3">
                    <strong class="text-glow-warning display-5 fw-bold">6. Escape Velocity (Ad Astra)</strong>
                    <span class="badge bg-info text-dark">The Masterpiece</span>
                </div>
                <p class="lead text-body mb-3">
                    The 4-part prog-rock epic that consumes the entirety of Side B.
                </p>
                <p class="text-muted mb-0">
                    Channeling the band's love for <strong>Prism</strong> and <strong>Origin</strong> (specifically their epic <em>The Feast</em>), this 12-minute suite details Cassidy's psychological journey from the "Cage" of the trial to the "Cosmos" of freedom. It is the band's most complex instrumentation to date, featuring the movements: <strong>I. The Cage</strong>, <strong>II. Ignition</strong>, <strong>III. The Cosmos</strong>, and <strong>IV. Re-entry</strong>.
                </p>
            </div>

        </div>
    </div>

</div>