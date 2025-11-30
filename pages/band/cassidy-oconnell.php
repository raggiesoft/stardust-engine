<?php
// Page data
$pageTitle = "Cassidy O'Connell - The Stardust Engine";
?>

<div class="container py-5">
    <div class="row g-5">
        
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
            
            <div class="alert alert-dark border-primary bg-opacity-10 d-flex align-items-center" role="alert">
                <i class="fa-duotone fa-stars text-primary fs-2 me-3"></i>
                <div class="small text-muted">
                    <strong>Archivist Note:</strong> While the industry tried to drag them into the dirt, Cassidy refused to look down. Her eyes were always cast <strong class="text-info text-uppercase">Up</strong>. Always <strong class="text-info text-uppercase">Up</strong>.
                </div>
            </div>

            <h3 class="fw-bold mt-5 mb-3">The Crash of '90: "The Anchor"</h3>
            <p class="text-muted">
                Following Ryan's catastrophic injury in December 1990, Cassidy's role in the band—and the family—transformed. Already close as siblings, they became inseparable.
            </p>
            <p class="text-muted">
                Both Ryan and Cassidy are <strong>autistic</strong>. They share a hidden language of sensory processing and non-verbal cues that no one else fully understands. After the crash, Cassidy became Ryan's "Safe Person" and primary aide. She is his "Spotter" on stage, watching for signs of overstimulation or physical distress (like dysreflexia) that others might miss.
            </p>
            <p class="text-muted">
                In the daily logistical war of touring, she is his preferred aide for the most vulnerable moments of his care. Their bond is one of absolute, unspoken trust—which made the 1992 "Friction" accusation that they were "lovers" not just factually wrong, but a violation of the sacred safety they had built together.
            </p>

            <h3 class="fw-bold mt-5 mb-3">Key Tracks (Apex Era)</h3>
            <ul class="list-group list-group-flush bg-transparent mb-4">
                <li class="list-group-item bg-transparent text-muted border-secondary px-0">
                    <strong>"Just a Girl" (1987):</strong> A "moody, introspective" song Apex saw as "filler." It became a surprise grassroots hit with female fans for its honest lyrics about her treatment: "They tell me 'sing the high note' / They tell me 'wear the red dress'."
                </li>
                <li class="list-group-item bg-transparent text-muted border-secondary px-0">
                    <strong>"Not Your Doll" (1989):</strong> Her "fierce side" finally emerging on the *Neon Hearts* album. A "Pat Benatar-style" arena rock anthem directly rejecting the "Stardust" persona Apex forced on her.
                </li>
            </ul>

            <h3 class="fw-bold mt-5 mb-3">The "Friction" Aftermath</h3>
            <p class="text-muted">
                During the 1992 "Friction" scandal, Cassidy was the target of Julian Vance's depraved "Worship" book knockoff scheme. The subsequent "Tabloid Hell" of the 1994 trial painted her as a "Victim-Saint." She responded on 1995's <strong>The Warehouse Tapes</strong> with the "rage" track "Not Your Saint" and the transcendent 4-part prog-rock epic "Escape Velocity (Ad Astra)," which detailed her escape from the trauma and her rebirth as an artist.
            </p>

        </div>

        <div class="col-lg-4">
            <div style="top: 8rem;">
                <?php $props = [
                    'title' => 'Cassidy O\'Connell',
                    'imgSrc' => 'https://assets.raggiesoft.com/stardust-engine/images/band-members/cassidy.jpg',
                    'imgAlt' => 'Headshot of Cassidy O\'Connell',
                    'variant' => 'pact', // Maps to Pink
                    'description' => "<strong>Role:</strong> Lead Vocals, Piano, Synths<br>
                                      <strong>Age (in 1987):</strong> 20<br>
                                      <strong>Status:</strong> The Stardust (Unbroken)<br>
                                      <strong>Key Fact:</strong> Ryan's 'Safe Person'",
                    'buttonProps' => [
                        'text' => 'Back to The Band', 
                        'href' => '/band', 
                        'variant' => 'neutral', 
                        'icon' => 'fa-duotone fa-users'
                    ]
                ]; include ROOT_PATH . '/includes/components/card.php'; ?>
            </div>
        </div>

    </div>
</div>