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
    <?php include ROOT_PATH . '/includes/components/tracklist-downloader.php'; ?>

    <!-- Liner Notes (Lore) -->
    <div class="mt-5">
        <h3 class="h4 fw-bold text-uppercase text-muted mb-4 border-bottom pb-2">Liner Notes & Lore</h3>
        
        <div class="list-group list-group-flush bg-transparent">
             <div class="list-group-item bg-transparent border-secondary text-muted py-3">
                <strong class="text-primary">1. Electric Color:</strong> The solid <strong>#2 hit</strong>. It sat at the runner-up spot for six weeks, famously blocked from #1 by a certain "novelty song" that swept the summer of '87.
            </div>
             <div class="list-group-item bg-transparent border-secondary text-muted py-3">
                <strong>2. Plastic Sky:</strong> Ryan's first act of "malicious compliance." He hid angsty, anti-corporate lyrics inside a polished pop-rock wrapper.
            </div>
            <div class="list-group-item bg-transparent border-secondary text-muted py-3">
                <strong class="text-warning">7. Light Up the Night:</strong> The song Apex Records poured <em>all</em> of their money into. They were convinced this would be "The Big One." It wasn't.
            </div>
            <div class="list-group-item bg-transparent border-secondary py-3" style="background: rgba(255, 42, 109, 0.05);">
                <strong class="text-glow-primary">13. The Stardust Engine:</strong> Buried at the end of the album, this is the band's true anthem. Critics agree: had this been released as a single, it would have spent <strong>11 straight weeks at #1</strong>, dethroning the existing record holder for the decade.
            </div>
        </div>
    </div>

</div>