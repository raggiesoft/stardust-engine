<?php
// pages/story/ad-astra/overview.php
// The Hub for the Ad Astra Narrative Arc

$pageTitle = "Ad Astra: The Mission - The Stardust Engine Lore";

// Using the Nebula Hero for consistency
$customPageAssets = [
    'Nebula' => 'https://assets.raggiesoft.com/stardust-engine/images/stardust-engine-hero.jpg'
];
?>

<div class="starfield-container"><div class="starfield-twinkling"></div></div>

<!-- Hero Section -->
<div class="position-relative d-flex align-items-center justify-content-center overflow-hidden border-bottom border-info" style="height: 60vh;">
    
    <!-- Background -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="z-index: 0;">
        <img src="https://assets.raggiesoft.com/stardust-engine/images/story/ad-astra.jpg" 
             alt="A wide-angle shot captures Cassidy O'Connell singing into a microphone on stage, wearing a red t-shirt and jeans. To her right, her older brother Ryan O'Connell plays an electric guitar, seated in a wheelchair. In the background, their twin cousins, Evan (on bass guitar) and Tyler (on drums), perform. They are on a stage inside a spaceship, with a massive window behind them displaying a vibrant nebula in space. A banner with a rocket logo hangs on the right." 
             class="w-100 h-100 object-fit-cover"
             style="opacity: 0.7; filter: brightness(0.9);">
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark" 
             style="opacity: 0.3; background: linear-gradient(to bottom, transparent 0%, #050508 100%);"></div>
    </div>

    <div class="container position-relative text-center z-1 fade-in-up">
        <h1 class="display-1 fw-bold text-uppercase text-light mb-2" style="font-family: 'Audiowide', sans-serif; letter-spacing: 4px; text-shadow: 0 0 30px rgba(0, 255, 255, 0.5);">
            Ad Astra
        </h1>
        <p class="lead text-info font-monospace text-uppercase letter-spacing-2 mb-4">
            The Magnum Opus // The Escape Velocity
        </p>
        <p class="text-white-50 mx-auto" style="max-width: 700px;">
            More than a song. More than an album. It is the defining mythology of the band's freedom.
            Explore the story of the *Aethelgard*, the launch, and the journey to the edge of the world.
        </p>
    </div>
</div>

<div class="container py-5 glass-container" style="margin-top: -50px; position: relative; z-index: 2;">
    
    <div class="row justify-content-center g-4">
        
        <!-- The Maiden Voyage (Story Link) -->
        <div class="col-lg-6">
            <div class="card h-100 bg-transparent border-info shadow-lg overflow-hidden position-relative group-hover-scale">
                <!-- Background Image Layer -->
                <div class="position-absolute top-0 start-0 w-100 h-100">
                     <img src="https://assets.raggiesoft.com/stardust-engine/images/stardust-engine-logo-source.jpg" 
                          class="w-100 h-100 object-fit-cover" 
                          style="opacity: 0.3; transition: transform 0.5s ease;">
                </div>
                
                <div class="card-body p-5 position-relative z-1 d-flex flex-column justify-content-center text-center">
                    <i class="fa-duotone fa-book-sparkles text-info display-4 mb-3"></i>
                    <h2 class="h3 text-light fw-bold text-uppercase" style="font-family: 'Audiowide';">The Maiden Voyage</h2>
                    <p class="text-white-50 mb-4">
                        Read the official narrative of the "Concert at the Edge of the World." 
                        The story of the star-cruiser *Aethelgard* and the performance that opened the Monolith.
                    </p>
                    <a href="/story/ad-astra/voyage" class="btn btn-outline-info rounded-pill px-4 stretched-link">
                        <i class="fa-duotone fa-book-open me-2"></i>Open Archive
                    </a>
                </div>
            </div>
        </div>

        <!-- The Music (Listening Link) -->
        <div class="col-lg-6">
            <div class="card h-100 bg-transparent border-warning shadow-lg overflow-hidden position-relative">
                
                <div class="card-body p-5 position-relative z-1 d-flex flex-column justify-content-center text-center">
                    <i class="fa-duotone fa-rocket-launch text-warning display-4 mb-3"></i>
                    <h2 class="h3 text-light fw-bold text-uppercase" style="font-family: 'Audiowide';">The Transmission</h2>
                    <p class="text-white-50 mb-4">
                        Listen to the 15-minute progressive rock suite.
                        Four movements. One journey.
                        <br><span class="small text-muted fst-italic">"The Cage" • "Ignition" • "The Cosmos" • "Re-entry"</span>
                    </p>
                    <a href="/discography/1995-the-warehouse-tapes/ad-astra" class="btn btn-outline-warning rounded-pill px-4 stretched-link">
                        <i class="fa-duotone fa-play me-2"></i>Listen Now
                    </a>
                </div>
            </div>
        </div>

    </div>

    <!-- Lore Footer -->
    <div class="row mt-5">
        <div class="col-12">
            <div class="card glass-card border-secondary p-4">
                <div class="d-flex align-items-start">
                    <i class="fa-duotone fa-microchip text-secondary fs-2 me-3 mt-1"></i>
                    <div>
                        <h4 class="h5 text-light fw-bold text-uppercase">Technical Note: The "MECO" Sound</h4>
                        <p class="text-muted small mb-0">
                            The violent silence between Part II and Part III is known as "MECO" (Main Engine Cut-Off). In the lore, this is when the *Aethelgard's* thrusters die. In reality, Ryan O'Connell achieved this sound by physically yanking the cable out of his guitar amplifier mid-recording, risking thousands of dollars of equipment to capture the perfect sound of "stopping."
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>