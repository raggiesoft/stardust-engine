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
    
    <!-- Album Header -->
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
                The 26-minute runtime features a strictly studio-mandated setlist of "safe" synth-pop tracks. The label famously vetoed the performance of the band's rock anthems "Chain Reaction" and "Not Your Doll," and refused to include their sacred CPI anthem "Ignition."
            </p>
            <p class="small text-muted fst-italic">
                *Note for Audiophiles: This recording is infamous for its "terrible" mix. Apex engineers intentionally buried Cassidy's signature leitmotif deep in the background, attempting to suppress the "Stardust" sound that defined the band's identity.
            </p>
        </div>
    </div>

    <hr class="border-secondary opacity-25 mb-5">

    <!-- Tracklist & Downloads -->
    <!-- 
      This component reads the album's JSON from the CDN and
      automatically builds the download table and buttons.
    -->
    <?php include ROOT_PATH . '/includes/components/_tracklist-downloader.php'; ?>

    <!-- Tracklist & Lore Section -->
    <h2 class="display-6 fw-bold text-uppercase mb-4">Tracklist & Liner Notes</h2>

    <div class="list-group list-group-flush bg-transparent">
        
        <!-- Track 1: The Stardust Engine -->
        <div class="list-group-item bg-transparent border-secondary text-muted py-3">
            <div class="d-flex w-100 justify-content-between align-items-center">
                <h5 class="mb-1 text-primary fw-bold">1. The Stardust Engine (Live)</h5>
                <span class="badge bg-secondary">The Intro</span>
            </div>
            <p class="mb-1 small">
                The band's anthem, used as the show opener. This track contains the "Smoking Gun" evidence for the 1992 <em>Friction</em> scandal: Ryan clearly introduces Cassidy as "my sister," proving the label executive was negligent in assuming they were a couple.
            </p>
        </div>

        <!-- Track 2: Neon Hearts -->
        <div class="list-group-item bg-transparent border-secondary text-muted py-3">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">2. Neon Hearts (Live)</h5>
            </div>
            <p class="mb-1 small">
                The title track from their sophomore album. A polished, high-energy performance of the studio-approved hit.
            </p>
        </div>

        <!-- Track 3: Dancing in the Neon -->
        <div class="list-group-item bg-transparent border-secondary text-muted py-3">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">3. Dancing in the Neon (Live)</h5>
            </div>
            <p class="mb-1 small">
                "I wanna see you dancing to this one, Chicago!" A crowd-pleaser that fit the label's "pop" image perfectly.
            </p>
        </div>

        <!-- Track 4: If You Walked Away -->
        <div class="list-group-item bg-transparent border-secondary text-muted py-3">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">4. If You Walked Away (Live)</h5>
            </div>
            <p class="mb-1 small">
                The "lighters in the air" moment. A safe, studio-approved ballad.
            </p>
        </div>

        <!-- Track 5: Light Up the Night -->
        <div class="list-group-item bg-transparent border-secondary text-muted py-3">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">5. Light Up the Night (Live)</h5>
            </div>
            <p class="mb-1 small">
                The song the studio <em>thought</em> would be a #1 hit. The crowd reaction is polite, but notably less enthusiastic than for the band's rock tracks (which were cut from the setlist).
            </p>
        </div>

        <!-- Track 6: My Anchor Holds -->
        <div class="list-group-item bg-transparent border-secondary text-muted py-3">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">6. My Anchor Holds (Live)</h5>
            </div>
            <p class="mb-1 small">
                The emotional peak of the short set. "This is a song for that one person who keeps you sane."
            </p>
        </div>

        <!-- Track 7: Electric Color -->
        <div class="list-group-item bg-transparent border-secondary text-muted py-3">
            <div class="d-flex w-100 justify-content-between align-items-center">
                <h5 class="mb-1 text-primary fw-bold">7. Electric Color (Live)</h5>
                <span class="badge bg-secondary">Finale</span>
            </div>
            <p class="mb-1 small">
                The grand finale. As the song ends, the Chicago crowd screams for an encore, but the "nameless tour manager" enforces the strict curfew, ordering the band back to the bus.
            </p>
        </div>

    </div>

    <div class="alert alert-dark border-secondary mt-5">
        <h4 class="alert-heading h6 text-uppercase text-muted mb-2">The Missing Tracks</h4>
        <p class="mb-0 small text-muted">
            Noticeably absent are the band's fan-favorites: "Chain Reaction," "Not Your Doll," and the sacred CPI anthem "Ignition." Apex Records vetoed their inclusion, refusing to promote the band's heavier rock sound.
        </p>
    </div>

</div>