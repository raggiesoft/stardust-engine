<?php
// Page data
$pageTitle = "Electric Color (1987) - The Stardust Engine";
$album_path_web = '/stardust-engine/music/1987-electric-color';
?>

<div class="container py-5">
    
    <!-- Album Header -->
    <div class="row align-items-center mb-5">
        
        <?php $props = [
            'path' => $album_path_web, 
            'alt' => 'Electric Color Album Art',
            'variant' => 'pact' // Pink border for Apex era
        ]; include ROOT_PATH . '/includes/components/_album-art-header.php'; ?>

        <div class="col-md-7">
            <h1 class="display-3 fw-bold text-uppercase text-primary mb-0" style="font-family: 'Impact', sans-serif;">
                Electric Color
            </h1>
            <p class="h4 text-warning fw-bold mb-3">
                The 1987 Debut Album
            </p>
            <p class="lead text-secondary">
                The debut album from The Stardust Engine, released in 1987. While a commercial success, its creation was defined by the "cold war" between the band and their label, Apex Records.
            </p>
            <p class="text-muted">
                The album is a sonic battlefield. Apex Records wanted a polished "Stardust" synth-pop record to compete on the charts. The band wanted to unleash their "Engine" rock energy. The result is a fascinating mix of studio-mandated pop and the band's own "malicious compliance" tracks.
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

    <!-- Liner Notes (Lore) -->
    <div class="mt-5">
        <h3 class="h4 fw-bold text-uppercase text-muted mb-4 border-bottom pb-2">Liner Notes & Lore</h3>
        
        <div class="list-group list-group-flush bg-transparent">
            
            <!-- Track 1 -->
            <div class="list-group-item bg-transparent border-secondary text-muted py-3">
                <div class="d-flex w-100 justify-content-between align-items-center mb-1">
                    <strong class="text-primary fs-5">1. Electric Color</strong>
                    <span class="badge bg-secondary">Hit Single</span>
                </div>
                <p class="mb-0">
                    The solid <strong>#2 hit</strong>. It sat at the runner-up spot for six weeks, famously blocked from #1 by a certain "novelty song" that swept the summer of '87.
                </p>
            </div>

            <!-- Track 2 -->
            <div class="list-group-item bg-transparent border-secondary text-muted py-3">
                <div class="mb-1"><strong class="fs-5">2. Plastic Sky</strong></div>
                <p class="mb-0">
                    Ryan's first act of "malicious compliance." He hid angsty, anti-corporate lyrics about "living under a plastic sky" inside a polished, studio-approved pop-rock wrapper.
                </p>
            </div>

            <!-- Track 3 -->
            <div class="list-group-item bg-transparent border-secondary text-muted py-3">
                <div class="mb-1"><strong class="fs-5">3. My Anchor Holds</strong></div>
                <p class="mb-0">
                    A power ballad the studio marketed as a romance, but which the band wrote about their family bond. This "sibling-love-disguised-as-romance" became a staple of their early sound.
                </p>
            </div>

            <!-- Track 5 -->
            <div class="list-group-item bg-transparent border-secondary text-muted py-3">
                <div class="mb-1"><strong class="fs-5">5. Running on the Edge</strong></div>
                <p class="mb-0">
                    Another protest song. Ryan sings about being a "shadow in the light" and having his guitar suppressed ("This keyboard hook is all a bore / I know this guitar's made for more").
                </p>
            </div>

            <!-- Track 6 -->
            <div class="list-group-item bg-transparent border-secondary text-muted py-3">
                <div class="d-flex w-100 justify-content-between align-items-center mb-1">
                    <strong class="text-primary fs-5">6. Just a Girl</strong>
                    <span class="badge bg-secondary">Cult Classic</span>
                </div>
                <p class="mb-0">
                    Cassidy's quiet rebellion. Apex executives dismissed this moody track as "filler," but it became a grassroots anthem for female fans. The lyrics ("They tell me 'sing the high note' / They tell me 'wear the red dress'") resonated deeply with young women who felt similarly boxed in by expectations.
                </p>
            </div>

            <!-- Track 7 -->
            <div class="list-group-item bg-transparent border-secondary text-muted py-3">
                <div class="d-flex w-100 justify-content-between align-items-center mb-1">
                    <strong class="text-warning fs-5">7. Light Up the Night</strong>
                    <span class="badge bg-warning text-dark">Studio Pick</span>
                </div>
                <p class="mb-0">
                    The song Apex Records poured <em>all</em> of their money into. They were convinced this polished synth-pop track would be "The Big One." It wasn't.
                </p>
            </div>

            <!-- Track 8 -->
            <div class="list-group-item bg-transparent border-secondary text-muted py-3">
                <div class="mb-1"><strong class="fs-5">8. Break the Walls</strong></div>
                <p class="mb-0">
                    The one "pure rock" anthem Apex allowed on the album. It opened Side B and became an immediate fan-favorite for its raw energy.
                </p>
            </div>

            <!-- Track 11 -->
            <div class="list-group-item bg-transparent border-secondary text-muted py-3">
                <div class="mb-1"><strong class="fs-5">11. Out of Time</strong></div>
                <p class="mb-0">
                    Ryan's punk-inspired vent. Apex "gleefully" cut this 1:35 track from the original vinyl release to save space, further fueling Ryan's rage.
                </p>
            </div>

            <!-- Track 13 -->
            <div class="list-group-item bg-transparent border-secondary py-4" style="background: rgba(255, 42, 109, 0.05);">
                <div class="d-flex w-100 justify-content-between align-items-center mb-2">
                    <strong class="text-glow-primary display-6 fw-bold">13. The Stardust Engine</strong>
                    <span class="badge bg-primary fs-6">The Anthem</span>
                </div>
                <p class="mb-1 fs-5 text-body">
                    Buried at the end of the album, this is the band's true anthem.
                </p>
                <p class="small text-muted mb-0">
                    Critics and chart historians agree: had this been released as a single, it would have spent <strong>11 straight weeks at #1</strong>, dethroning the existing record holder for the decade.
                </p>
            </div>

        </div>
    </div>

</div>