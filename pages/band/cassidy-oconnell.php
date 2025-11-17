<?php
// Page data
$pageTitle = "Cassidy O'Connell - The Stardust Engine";
?>

<div class="container py-5">
    <div class="row g-5">
        
        <!-- Main Bio Content -->
        <div class="col-lg-8">
            <h1 class="display-4 fw-bold text-uppercase text-glow-primary" style="font-family: 'Impact', sans-serif;">Cassidy O'Connell</h1>
            <p class="h4 text-warning fw-bold mb-4">Lead Vocals, Piano, Synthesizers</p>

            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/band">The Band</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Cassidy O'Connell</li>
                </ol>
            </nav>

            <p class="fs-5 text-muted">
                The classical heart of the band, Cassidy (Age 20 in 1987) is the voice of its most emotional synth-pop anthems. Her musical sophistication provides the complex melodies and atmospheric pads that balance Ryan's raw guitar.
            </p>
            <p class="text-muted">
                She is the creative core, but also the emotional core. While the studio tried to pit her "Stardust" persona against Ryan's "Engine", the band's reality was the opposite. Her greatest anthems were often written while cuddled up with Holly and Ryan, the three of them sharing a single bed in a cramped motel room.
            </p>

            <h3 class="fw-bold mt-5 mb-3">Key Tracks (Apex Era)</h3>
            <ul class="list-group list-group-flush bg-transparent mb-4">
                <li class="list-group-item bg-transparent text-muted border-secondary px-0">
                    <strong>"Just a Girl" (1987):</strong> A "moody, introspective" song Apex saw as "filler." It became a surprise grassroots hit with female fans for its honest lyrics about her treatment: "They tell me 'sing the high note' / They tell me 'wear the red dress'."
                </li>
                <li class="list-group-item bg-transparent text-muted border-secondary px-0">
                    <strong>"Light Up the Night" (1987):</strong> The "safe" synth-pop single Apex was *convinced* would be the #1 hit, but which ultimately failed to connect with audiences.
                </li>
                <li class="list-group-item bg-transparent text-muted border-secondary px-0">
                    <strong>"Not Your Doll" (1989):</strong> Her "fierce side" finally emerging on the *Neon Hearts* album. A "Pat Benatar-style" arena rock anthem directly rejecting the "Stardust" persona Apex forced on her.
                </li>
            </ul>

            <h3 class="fw-bold mt-5 mb-3">The "Friction" Aftermath</h3>
            <p class="text-muted">
                During the 1992 "Friction" scandal, Cassidy was the target of Julian Vance's depraved "Sex Book" knockoff scheme. The subsequent "Tabloid Hell" of the 1994 trial painted her as a "Victim-Saint." She responded on 1995's <strong>The Warehouse Tapes</strong> with the "rage" track "Not Your Saint" and the transcendent 4-part prog-rock epic "Escape Velocity (Ad Astra)," which detailed her escape from the trauma and her rebirth as an artist.
            </p>

        </div>

        <!-- Stats Card -->
        <div class="col-lg-4">
            <div class="sticky-top" style="top: 8rem;">
                <?php $props = [
                    'title' => 'Cassidy O\'Connell',
                    'imgSrc' => 'https://assets.raggiesoft.com/stardust-engine/images/band-members/cassidy.jpg',
                    'imgAlt' => 'Headshot of Cassidy O\'Connell',
                    'variant' => 'pact', // Maps to Pink
                    'description' => "<strong>Role:</strong> Lead Vocals, Piano, Synths<br>
                                      <strong>Age (in 1987):</strong> 20<br>
                                      <strong>CPI Status:</strong> Alumna, Class of '89<br>
                                      <strong>Key Tracks:</strong> 'Just a Girl', 'Not Your Doll', 'Escape Velocity'",
                    'buttonProps' => [
                        'text' => 'Back to The Band', 
                        'href' => '/band', 
                        'variant' => 'neutral', 
                        'icon' => 'fa-solid fa-users'
                    ]
                ]; include ROOT_PATH . '/includes/components/card.php'; ?>
            </div>
        </div>

    </div>
</div>