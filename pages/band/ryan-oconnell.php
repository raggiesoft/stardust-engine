<?php
// Page data
$pageTitle = "Ryan O'Connell - The Stardust Engine";
?>

<div class="container py-5">
    <div class="row g-5">
        
        <!-- Main Bio Content -->
        <div class="col-lg-8">
            <h1 class="display-4 fw-bold text-uppercase text-glow-primary" style="font-family: 'Impact', sans-serif;">Ryan O'Connell</h1>
            <p class="h4 text-warning fw-bold mb-4">Lead Vocals, Lead Guitar</p>

            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/band">The Band</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Ryan O'Connell</li>
                </ol>
            </nav>

            <p class="fs-5 text-muted">
                As the oldest sibling (Age 23 in 1987), Ryan is the band's protective "Engine" and the voice of its raw rock energy. He famously delayed his own college entry so the entire "family" (his siblings and cousins) could enter CPI's Class of '89 together.
            </p>
            <p class="text-muted">
                His entire tenure at Apex Records was defined by conflict. The label, wanting a clean pop sound, branded him "The Engine"—a nickname he hated. The label actively suppressed his heavier, industrial-inspired guitar work. This led to his famous "malicious compliance" tracks, where he would hide angsty, anti-corporate lyrics inside "safe" pop-rock wrappers.
            </p>

            <h3 class="fw-bold mt-5 mb-3">Key Tracks (Apex Era)</h3>
            <ul class="list-group list-group-flush bg-transparent mb-4">
                <li class="list-group-item bg-transparent text-muted border-secondary px-0">
                    <strong>"Plastic Sky" (1987):</strong> A protest against the "thin, polished" sound the studio demanded, with lyrics like "My guitar is clean, the drums are thin / They polished away all the grit and sin."
                </li>
                <li class="list-group-item bg-transparent text-muted border-secondary px-0">
                    <strong>"Running on the Edge" (1987):</strong> A direct complaint about being a "shadow in the light," with the lyric "This keyboard hook is all a bore / I know this guitar's made for more."
                </li>
                <li class="list-group-item bg-transparent text-muted border-secondary px-0">
                    <strong>"Break the Walls" (1987):</strong> The one "pure rock" anthem Apex allowed on the debut, which opened Side B and became an immediate fan-favorite.
                </li>
            </ul>

            <h3 class="fw-bold mt-5 mb-3">The "Friction" Catastrophe</h3>
            <p class="text-muted">
                Ryan was the central figure in the 1992 "Friction" scandal. During the infamous photo shoot, he innocently wiped cocaine (which he mistook for dust) off a mirror, humiliating the executive, Julian Vance. When Vance retaliated by ordering Ryan and Cassidy to perform a sexual act on camera, it was Ryan's roar of <strong>"SHE'S! MY! SISTER!"</strong> that detonated the situation, revealed Vance's criminal act, and ultimately freed the band from their contract.
            </p>

        </div>

        <!-- Stats Card -->
        <div class="col-lg-4">
            <div style="top: 8rem;">
                <?php $props = [
                    'title' => 'Ryan O\'Connell',
                    'imgSrc' => 'https://assets.raggiesoft.com/stardust-engine/images/band-members/ryan.jpg',
                    'imgAlt' => 'Headshot of Ryan O\'Connell in his wheelchair',
                    'variant' => 'axiom', // Maps to Cyan
                    'description' => "<strong>Role:</strong> Lead Vocals, Lead Guitar<br>
                                      <strong>Age (in 1987):</strong> 23<br>
                                      <strong>CPI Status:</strong> Alumnus, Class of '89<br>
                                      <strong>Key Tracks:</strong> 'Plastic Sky', 'Break the Walls', 'Garbage'",
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