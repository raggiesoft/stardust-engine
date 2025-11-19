<?php
// Page data
$pageTitle = "Neon Hearts (1989) - The Stardust Engine";
$album_path_web = '/stardust-engine/music/1989-neon-hearts';
?>

<div class="container py-5">
    
    <div class="row align-items-center mb-5">
        
        <?php $props = [
            'path' => $album_path_web, 
            'alt' => 'Neon Hearts Album Art',
            'variant' => 'pact' // Pink border for Apex era
        ]; include ROOT_PATH . '/includes/components/_album-art-header.php'; ?>

        <div class="col-md-7">
            <h1 class="display-3 fw-bold text-uppercase text-primary mb-0" style="font-family: 'Impact', sans-serif;">
                Neon Hearts
            </h1>
            <p class="h4 text-warning fw-bold mb-3">
                The 1989 "Panic" Album
            </p>
            <p class="lead text-secondary">
                The band's sophomore album, released in 1989. Its creation was defined by Apex Records' sheer panic following the Madonna "Like a Prayer" controversy.
            </p>
            <p class="text-muted">
                Terrified of controversy, the studio demanded the "safest," most polished synth-pop album possible. The result is a fascinating document of "Studio Overcorrection" vs. "Artist Rebellion," featuring some of the band's safest pop hits alongside their angriest rock protests.
            </p>
        </div>
    </div>

    <hr class="border-secondary opacity-25 mb-5">

    <?php include ROOT_PATH . '/includes/components/_tracklist-downloader.php'; ?>

    <div class="mt-5">
        <h3 class="h4 fw-bold text-uppercase text-muted mb-4 border-bottom pb-2">Liner Notes & Lore</h3>
        
        <div class="list-group list-group-flush bg-transparent">
            
            <div class="list-group-item bg-transparent border-secondary text-muted py-3">
                <div class="d-flex w-100 justify-content-between align-items-center mb-1">
                    <strong class="text-primary fs-5">1. Neon Hearts</strong>
                    <span class="badge bg-secondary">Studio Mandate</span>
                </div>
                <p class="mb-0">
                    The "safe" title track. Apex forced the band to include a callback lyric to their first hit ("It's an electric-colored feeling") to ensure brand consistency.
                </p>
            </div>

            <div class="list-group-item bg-transparent border-secondary text-muted py-3">
                <div class="mb-1"><strong class="fs-5">2. Hollow Sound</strong></div>
                <p class="mb-0">
                    Ryan's act of "malicious compliance." He delivered the requested synth-pop sound but made the track <strong>5:31 long</strong>—knowing it was too long for radio—and included the protest line, "They're all afraid of the burning cross".
                </p>
            </div>

            <div class="list-group-item bg-transparent border-secondary text-muted py-3">
                <div class="mb-1"><strong class="fs-5">3. Side by Side</strong></div>
                <p class="mb-0">
                    The studio's furious overcorrection to "Hollow Sound." [cite_start]They demanded an absurdly short, safe pop track, resulting in this 1:54 "bubblegum" song[cite: 354].
                </p>
            </div>

            <div class="list-group-item bg-transparent border-secondary text-muted py-3">
                <div class="d-flex w-100 justify-content-between align-items-center mb-1">
                    <strong class="text-warning fs-5">6. Chain Reaction</strong>
                    <span class="badge bg-warning text-dark">The Rebellion</span>
                </div>
                <p class="mb-0">
                    The start of the "Side B Rebellion." Apex allowed this "one-two punch" of pure rock as a concession. It became an immediate fan favorite.
                </p>
            </div>

            <div class="list-group-item bg-transparent border-secondary text-muted py-3">
                <div class="d-flex w-100 justify-content-between align-items-center mb-1">
                    <strong class="text-warning fs-5">7. Not Your Doll</strong>
                    <span class="badge bg-warning text-dark">Fan Favorite</span>
                </div>
                <p class="mb-0">
                    Cassidy's "fierce side" finally breaking through. An arena rock anthem where she directly rejects the "Stardust" persona ("I'm not your Stardust / I'm not your grace").
                </p>
            </div>

            <div class="list-group-item bg-transparent border-secondary text-muted py-3">
                <div class="mb-1"><strong class="fs-5">10. After the Show</strong></div>
                <p class="mb-0">
                    Ryan's final laugh. Ordered to record a quiet ballad with "no pounding drums" to close the album, he recorded this track by slapping the body of his acoustic guitar to simulate percussion anyway.
                </p>
            </div>

        </div>
    </div>

    <div class="alert alert-dark border-primary mt-5">
        <div class="d-flex">
            <div class="me-3">
                 <i class="fa-duotone fa-ban text-primary fs-3"></i>
            </div>
            <div>
                <h5 class="alert-heading h6 fw-bold text-primary text-uppercase mb-1">The Canceled Track: "The Promise"</h5>
                <p class="mb-0 small text-muted">
                    Apex originally demanded a "religious pop" song to compete with Cydele. When the <em>Sermon</em> video controversy broke, they panicked and buried the demo. It wouldn't be heard until the 2007 <em>Lost Sounds</em> compilation.
                </p>
            </div>
        </div>
    </div>

</div>