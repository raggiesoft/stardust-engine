<?php
// Page data
$pageTitle = "Tyler Wright - The Stardust Engine";
?>

<div class="container py-5">
    <div class="row g-5">
        
        <!-- Main Bio Content -->
        <div class="col-lg-8">
            <h1 class="display-4 fw-bold text-uppercase text-glow-primary" style="font-family: 'Impact', sans-serif;">Tyler Wright</h1>
            <p class="h4 text-warning fw-bold mb-4">Drums, Percussion</p>

            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/band">The Band</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tyler Wright</li>
                </ol>
            </nav>

            <p class="fs-5 text-muted">
                The "Power." Tyler (Age 20 in 1987) is a percussion legend, renowned in the industry as "The Human Metronome" for his superhuman, clock-like timing.
            </p>
            <p class="text-muted">
                His custom-built drum kit is a famous piece of rock lore, a massive 360-degree setup that dwarfs even the most extravagant kits of the prog-rock era. He is the source of the band's iconic, explosive, massive 80s gated reverb snare sound that defined their anthems.
            </p>
            <p class="text-muted">
                As Evan's identical twin, he shares a near-psychic connection with his brother, forming the tightest rhythm section in 80s rock. He is the thundering heartbeat of the band, the "Forger" providing the industrial power that gives the "Engine" its name.
            </p>
            
            <h3 class="fw-bold mt-5 mb-3">The "Ironhead" Connection</h3>
            <p class="text-muted">
                Tyler is arguably the most passionate "Ironhead" in the group. His ability to replicate the sound of a full marching band drumline was the key to the success of the "Forgers' Fight Song" on the *Live at The Crucible* album.
            </p>
            <p class="text-muted fs-5">
                <strong>Wardrobe:</strong> This rejection of their old label defines his modern stage presence. After the 'Friction' scandal, Tyler shed the polished 'Apex look' for good. On stage, he now proudly wears what he always has: jeans, sneakers, and a CPI Alumni t-shirt or hoodie, looking less like a rock star and more like the proud 'Ironhead' he is.
            </p>
        </div>

        <!-- Stats Card -->
        <div class="col-lg-4">
            <div class="sticky-top" style="top: 8rem;">
                <?php $props = [
                    'title' => 'Tyler Wright',
                    'imgSrc' => 'https://assets.raggiesoft.com/stardust-engine/images/band-members/tyler.jpg',
                    'imgAlt' => 'Headshot of Tyler Wright',
                    'variant' => 'neutral',
                    'description' => "<strong>Role:</strong> Drums, Percussion<br>
                                      <strong>Age (in 1987):</strong> 20<br>
                                      <strong>CPI Status:</strong> Alumnus, Class of '89<br>
                                      <strong>Key Fact:</strong> 'The Human Metronome'",
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