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
                'imgSrc' => 'https://assets.raggiesoft.com/stardust-engine/music/1987-electric-color/album-art.jpg',
                'description' => "The debut album. Famously stalled at #2 on the charts. Defined by the studio's 'malicious compliance' tracks.",
                'buttonProps' => ['text' => 'View Tracklist', 'href' => '/albums/electric-color', 'variant' => 'pact']
            ]; include ROOT_PATH . '/includes/components/card.php'; ?>
        </div>

        <div class="col">
            <?php $props = [
                'title' => 'Neon Hearts (1989)',
                'imgSrc' => 'https://assets.raggiesoft.com/stardust-engine/music/1989-neon-hearts/album-art.jpg',
                'description' => "The 'panic' album. Apex, terrified by the 'Like a Prayer' controversy, demanded a safe, polished sound.",
                'buttonProps' => ['text' => 'View Tracklist', 'href' => '/albums/neon-hearts', 'variant' => 'pact']
            ]; include ROOT_PATH . '/includes/components/card.php'; ?>
        </div>

        <div class="col">
            <?php $props = [
                'title' => 'Live in Chicago (1990)',
                'imgSrc' => 'https://assets.raggiesoft.com/stardust-engine/music/1990-live-in-chicago/album-art.jpg',
                'description' => "The 26-minute 'stop-gap' EP. A studio-mandated setlist that excluded all fan-favorite rock anthems.",
                'buttonProps' => ['text' => 'View Tracklist', 'href' => '/albums/live-in-chicago', 'variant' => 'pact']
            ]; include ROOT_PATH . '/includes/components/card.php'; ?>
        </div>

        <div class="col">
            <?php $props = [
                'title' => 'Friction (Canceled, 1992)',
                'imgSrc' => 'https://assets.raggiesoft.com/stardust-engine/music/1992-friction/album-art.jpg',
                'fallbackText' => 'Friction [CANCELED]', // Uses fallback, no 'imgSrc'
                'variant' => 'pact', // Matches the Apex Era theme
                'description' => "The infamous third album, canceled during pre-production after a catastrophic dispute with the label. This event ended the 'cold war' and ultimately freed the band from their contract.",
                'buttonProps' => [
                    'text' => 'Read The Story', 
                    'href' => '/story/the-friction-catastrophe', // Links to the lore page
                    'variant' => 'pact'
                ]
            ]; include ROOT_PATH . '/includes/components/card.php'; ?>
        </div>

    </div> <h2 class="display-5 fw-bold text-primary text-uppercase border-bottom border-primary pb-3 mb-4">
        1995-2016: The Engine Room "Freedom" Era
    </h2>
    <p class="fs-5 text-muted mb-5">
        Freed from their contract after the 'Friction' scandal, the band seized control. 
        Releasing on their own label, <strong>Engine Room Records, LLC</strong>, this is the music 
        they always intended to make.
    </p>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-5">

        <div class="col">
            <?php $props = [
                'title' => 'The Warehouse Tapes (1995)',
                'imgSrc' => 'https://assets.raggiesoft.com/stardust-engine/music/1995-the-warehouse-tapes/album-art.jpg',
                'description' => "The 'bat signal' EP. Recorded in their Blacksburg warehouse, this was a raw, unpolished, mail-order-only release.",
                'buttonProps' => ['text' => 'View Tracklist', 'href' => '/albums/warehouse-tapes', 'variant' => 'axiom']
            ]; include ROOT_PATH . '/includes/components/card.php'; ?>
        </div>

        <div class="col">
            <?php $props = [
                'title' => 'Hard Reset (1997)',
                'imgSrc' => 'https://assets.raggiesoft.com/stardust-engine/music/1997-hard-reset/album-art.jpg',
                'fallbackText' => 'Hard Reset', 'variant' => 'axiom',
                'description' => "Their official comeback. A high-stakes financial gamble, this was their first professional CD release on their own label.",
                'buttonProps' => ['text' => 'View Tracklist', 'href' => '/albums/hard-reset', 'variant' => 'axiom']
            ]; include ROOT_PATH . '/includes/components/card.php'; ?>
        </div>

        <div class="col">
            <?php $props = [
                'title' => 'Signal & Noise (2000)',
                'imgSrc' => 'https://assets.raggiesoft.com/stardust-engine/music/2000-signal-noise/album-art.jpg',
                'fallbackText' => 'Signal & Noise', 'variant' => 'axiom',
                'description' => "The confident, polished follow-up to their comeback. Their third independent studio album.",
                'buttonProps' => ['text' => 'View Tracklist', 'href' => '/albums/signal-noise', 'variant' => 'axiom']
            ]; include ROOT_PATH . '/includes/components/card.php'; ?>
        </div>

        <div class="col">
            <?php $props = [
                'title' => 'The Long Way Home (2004)',
                'imgSrc' => 'https://assets.raggiesoft.com/stardust-engine/music/2004-long-way-home/album-art.jpg',
                'fallbackText' => 'The Long Way Home', 'variant' => 'axiom',
                'description' => "The band's third independent studio album, marking the end of their 'Freedom' era before the hiatus.",
                'buttonProps' => ['text' => 'View Tracklist', 'href' => '/albums/long-way-home', 'variant' => 'axiom']
            ]; include ROOT_PATH . '/includes/components/card.php'; ?>
        </div>

        <div class="col">
            <?php $props = [
                'title' => 'Live in Norfolk (2005)',
                'imgSrc' => 'https://assets.raggiesoft.com/stardust-engine/music/2005-live-in-norfolk/album-art.jpg',
                'description' => "The live album from 'The Long Way Home Tour.' A professional recording from The Scope, released just before the band's burnout.",
                'buttonProps' => ['text' => 'View Tracklist', 'href' => '/albums/live-in-norfolk', 'variant' => 'axiom']
            ]; include ROOT_PATH . '/includes/components/card.php'; ?>
        </div>

        <div class="col">
            <?php $props = [
                'title' => 'Lost Sounds (2007)',
                'imgSrc' => 'https://assets.raggiesoft.com/stardust-engine/music/2007-lost-sounds/album-art.jpg',
                'fallbackText' => 'Lost Sounds', 'variant' => 'neutral',
                'description' => "A 'gift' to the fans during the hiatus. A compilation of polished demos like 'The Promise' and 'Atmosphere'.",
                'buttonProps' => ['text' => 'View Tracklist', 'href' => '/albums/lost-sounds', 'variant' => 'neutral']
            ]; include ROOT_PATH . '/includes/components/card.php'; ?>
        </div>

        <div class="col">
            <?php $props = [
                'title' => 'Electric Color (20th Anniv.)',
                'imgSrc' => 'https://assets.raggiesoft.com/stardust-engine/music/1987-electric-color/album-art.jpg',
                'description' => "A deluxe reissue of their debut, now featuring the band's own liner notes about the 'cold war' with Apex.",
                'buttonProps' => ['text' => 'View Tracklist', 'href' => '/albums/electric-color-20th', 'variant' => 'neutral']
            ]; include ROOT_PATH . '/includes/components/card.php'; ?>
        </div>
        
        <div class="col">
            <?php $props = [
                'title' => 'Re-Ignition (2015)',
                'imgSrc' => 'https://assets.raggiesoft.com/stardust-engine/music/2015-re-ignition/album-art.jpg',
                'fallbackText' => 'Re-Ignition', 'variant' => 'axiom',
                'description' => "The triumphant reunion album. Recorded after the 'Burnout Hiatus,' this re-energized the band and kicked off the Homecoming era.",
                'buttonProps' => ['text' => 'View Tracklist', 'href' => '/albums/re-ignition', 'variant' => 'axiom']
            ]; include ROOT_PATH . '/includes/components/card.php'; ?>
        </div>
        
        <div class="col">
            <div class="card h-100 shadow-lg border-5 border-warning" style="--bs-border-opacity: .75; box-shadow: 0 0 30px rgba(5, 217, 232, 0.4) !important;">
                <?php $props = [
                    'title' => 'Live at The Crucible (2016)',
                    'imgSrc' => 'https://assets.raggiesoft.com/stardust-engine/music/2016-live-at-the-crucible/album-art.jpg',
                    'description' => "<strong>The band's magnum opus.</strong> This was their first show on home turf since they were college kids, marking an emotional homecoming and the finale of their reunion tour. It is their best-selling album to date.",
                    'buttonProps' => [
                        'text' => 'Enter The Crucible', 
                        'href' => '/discography/2016-live-at-the-crucible', 
                        'variant' => 'warning' // This maps to our theme's Cyan
                    ]
                ]; include ROOT_PATH . '/includes/components/card.php'; ?>
            </div>
        </div>

    </div> </div>