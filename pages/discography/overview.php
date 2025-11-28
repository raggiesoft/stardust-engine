<?php
// Page data
$pageTitle = "Discography Overview - The Stardust Engine";
?>

<div class="container">
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold text-uppercase text-glow-primary" style="font-family: 'Impact', sans-serif;">
            Discography
        </h1>
        <p class="lead text-secondary mx-auto" style="max-width: 800px;">
            The complete official history, from the studio-mandated pop of the 80s 
            to the independent rock anthems of their rebirth.
        </p>
    </div>

    <h2 class="display-5 fw-bold text-secondary text-uppercase border-bottom border-secondary pb-3 mb-4">
        1987-1992: The Apex "Cold War" Era
    </h2>
    <p class="fs-5 text-muted mb-5">
        The band's first releases were defined by a "cold war" with their label, Apex Records, 
        who suppressed their rock sound to push a marketable synth-pop image.
    </p>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-5">
        
        <div class="col">
            <?php $props = [
                'title' => 'Electric Color (1987)',
                'imgSrc' => 'https://assets.raggiesoft.com/stardust-engine/music/1987-electric-color/album-art.jpg?v=' . time(),
                'description' => "The debut album. Famously stalled at #2 on the charts. Defined by the studio's 'malicious compliance' tracks.",
                'buttonProps' => ['text' => 'View Tracklist', 'href' => '/discography/1987-electric-color', 'variant' => 'pact']
            ]; include ROOT_PATH . '/includes/components/card.php'; ?>
        </div>

        <div class="col">
            <?php $props = [
                'title' => 'Neon Hearts (1989)',
                'imgSrc' => 'https://assets.raggiesoft.com/stardust-engine/music/1989-neon-hearts/album-art.jpg?v=' . time(),
                'description' => "The 'panic' album. Apex, terrified by the 'Sermon' controversy, demanded a safe, polished sound.",
                'buttonProps' => ['text' => 'View Tracklist', 'href' => '/discography/1989-neon-hearts', 'variant' => 'pact']
            ]; include ROOT_PATH . '/includes/components/card.php'; ?>
        </div>

        <div class="col">
            <?php $props = [
                'title' => 'Live in Chicago (1990)',
                'imgSrc' => 'https://assets.raggiesoft.com/stardust-engine/music/1990-live-in-chicago/album-art.jpg?v=' . time(),
                'description' => "The 26-minute 'stop-gap' EP. A studio-mandated setlist that excluded all fan-favorite rock anthems.",
                'buttonProps' => ['text' => 'View Tracklist', 'href' => '/discography/1990-live-in-chicago', 'variant' => 'pact']
            ]; include ROOT_PATH . '/includes/components/card.php'; ?>
        </div>

        <div class="col">
            <?php $props = [
                'title' => 'Friction (Canceled, 1992)',
                'imgSrc' => 'https://assets.raggiesoft.com/stardust-engine/music/1992-friction/album-art.jpg?v=' . time(),
                'fallbackText' => 'Friction [CANCELED]', 
                'variant' => 'pact', 
                'description' => "The infamous third album, canceled during pre-production after a catastrophic dispute with the label.",
                'buttonProps' => [
                    'text' => 'Read The Story', 
                    'href' => '/discography/1992-friction', 
                    'variant' => 'pact'
                ]
            ]; include ROOT_PATH . '/includes/components/card.php'; ?>
        </div>

    </div> 

    <h2 class="display-5 fw-bold text-primary text-uppercase border-bottom border-primary pb-3 mb-4">
        1995-2016: The "Freedom" Era
    </h2>
    <p class="fs-5 text-muted mb-5">
        Freed from their contract, the band seized control. Releasing on their own label, 
        <strong>Engine Room Records, LLC</strong>, this is the music they always intended to make.
    </p>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-5">

        <div class="col">
            <?php $props = [
                'title' => 'The Warehouse Tapes (1995)',
                'imgSrc' => 'https://assets.raggiesoft.com/stardust-engine/music/1995-the-warehouse-tapes/album-art.jpg?v=' . time(),
                'description' => "The 'bat signal' EP. Recorded in their Blacksburg warehouse, this was a raw, unpolished, mail-order-only release.",
                'buttonProps' => ['text' => 'View Tracklist', 'href' => '/discography/1995-the-warehouse-tapes', 'variant' => 'axiom']
            ]; include ROOT_PATH . '/includes/components/card.php'; ?>
        </div>

        <div class="col">
            <?php $props = [
                'title' => 'Hard Reset (1997)',
                'imgSrc' => 'https://assets.raggiesoft.com/stardust-engine/music/1997-hard-reset/album-art.jpg?v=' . time(),
                'fallbackText' => 'Hard Reset', 'variant' => 'axiom',
                'description' => "Their official comeback. A high-stakes financial gamble, this was their first professional CD release on their own label.",
                'buttonProps' => ['text' => 'View Tracklist', 'href' => '/discography/1997-hard-reset', 'variant' => 'axiom']
            ]; include ROOT_PATH . '/includes/components/card.php'; ?>
        </div>

        <div class="col">
            <?php $props = [
                'title' => 'Lost Sounds (2007)',
                'imgSrc' => 'https://assets.raggiesoft.com/stardust-engine/music/2007-lost-sounds/album-art.jpg?v=' . time(),
                'fallbackText' => 'Lost Sounds', 'variant' => 'neutral',
                'description' => "A 'gift' to the fans during the hiatus. A compilation of polished demos like 'The Promise' and 'Atmosphere'.",
                'buttonProps' => ['text' => 'View Tracklist', 'href' => '/discography/2007-lost-sounds', 'variant' => 'neutral']
            ]; include ROOT_PATH . '/includes/components/card.php'; ?>
        </div>

        <div class="col">
            <div class="card h-100 shadow-lg border-5 border-warning" style="--bs-border-opacity: .75; box-shadow: 0 0 30px rgba(5, 217, 232, 0.4) !important;">
                <?php $props = [
                    'title' => 'Live at The Crucible (2016)',
                    'imgSrc' => 'https://assets.raggiesoft.com/stardust-engine/music/2016-live-at-the-crucible/album-art.jpg?v=' . time(),
                    'description' => "<strong>The band's magnum opus.</strong> This was their first show on home turf since they were college kids, marking an emotional homecoming.",
                    'buttonProps' => [
                        'text' => 'Enter The Crucible', 
                        'href' => '/discography/2016-live-at-the-crucible', 
                        'variant' => 'warning' 
                    ]
                ]; include ROOT_PATH . '/includes/components/card.php'; ?>
            </div>
        </div>

    </div> 

    <h2 class="display-5 fw-bold text-info text-uppercase border-bottom border-info pb-3 mb-4">
        2017-Present: Modern Era & Soundtracks
    </h2>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-5">
        
        <div class="col">
            <?php $props = [
                'title' => 'Knox (Original Soundtrack) (2017)',
                'imgSrc' => 'https://assets.raggiesoft.com/stardust-engine/music/2017-knox-ost/album-art.jpg?v=' . time(),
                'fallbackText' => 'Knox OST', 'variant' => 'neutral',
                'description' => "The band's first foray into film scoring. An atmospheric, industrial-rock soundtrack for the sci-fi epic <em>Knox</em>.",
                'buttonProps' => ['text' => 'View Soundtrack', 'href' => '/discography/2017-knox-ost', 'variant' => 'neutral']
            ]; include ROOT_PATH . '/includes/components/card.php'; ?>
        </div>

    </div>

</div>