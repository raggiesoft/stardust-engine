<?php
// pages/story/ad-astra-voyage.php
// Lore Entry: The in-universe narrative of the "Ad Astra" concert experience.
// Context: A digital excerpt from the book released by Engine Room Records.

$pageTitle = "The Maiden Voyage - The Stardust Engine Lore";

// Using the Nebula Hero for the immersive background
$customPageAssets = [
    'Nebula' => 'https://assets.raggiesoft.com/stardust-engine/images/stardust-engine-hero.jpg'
];
?>

<div class="starfield-container"><div class="starfield-twinkling"></div></div>

<!-- Full Screen Hero with Monolith Window Effect -->
<div class="position-relative min-vh-50 d-flex align-items-center justify-content-center overflow-hidden border-bottom border-info">
    
    <!-- The "Monolith Window" Background -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="z-index: 0;">
        <img src="https://assets.raggiesoft.com/stardust-engine/images/stardust-engine-hero.jpg" 
             alt="The Nebula view from the Aethelgard" 
             class="w-100 h-100 object-fit-cover"
             style="opacity: 0.6; filter: brightness(0.8) contrast(1.2);">
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark" 
             style="opacity: 0.4; background: radial-gradient(circle, transparent 20%, #050508 90%);"></div>
    </div>

    <div class="container position-relative text-center z-1 fade-in-up">
        <span class="badge bg-black border border-info text-info rounded-pill px-3 py-2 shadow-glow mb-4">
            <i class="fa-duotone fa-book-sparkles me-2"></i>Official Archive
        </span>
        <h1 class="display-1 fw-bold text-uppercase text-light mb-2" style="font-family: 'Audiowide', sans-serif; letter-spacing: 4px; text-shadow: 0 0 30px rgba(0, 255, 255, 0.5);">
            The Maiden Voyage
        </h1>
        <p class="lead text-info font-monospace text-uppercase letter-spacing-2">
            Mission Log: The Aethelgard // Deep Dive Tour
        </p>
    </div>
</div>

<div class="container py-5 glass-container" style="margin-top: -50px; position: relative; z-index: 2;">
    
    <div class="row justify-content-center">
        <div class="col-lg-9">
            
            <!-- Context Card -->
            <div class="card glass-card border-secondary mb-5">
                <div class="card-body p-4 d-flex align-items-start">
                    <i class="fa-duotone fa-circle-info text-secondary fs-3 me-3 mt-1"></i>
                    <div>
                        <h5 class="card-title text-light fw-bold">Archivist's Note</h5>
                        <p class="card-text text-white-50 small">
                            The following is an excerpt from <em>"Echoes of the Ironworks,"</em> the official history book published by Engine Room Records. It details the legendary "Concert at the Edge of the World" aboard the star-cruiser <em>Aethelgard</em>, where the band's performance of "Ad Astra" served as the literal soundtrack for the ship's atmospheric exit.
                        </p>
                    </div>
                </div>
            </div>

            <!-- The Narrative -->
            <div class="book-content px-md-5">
                
                <!-- Phase 1 -->
                <div class="mb-5 fade-in">
                    <h2 class="h4 text-info fw-bold text-uppercase border-bottom border-info border-opacity-25 pb-2 mb-4">
                        Phase 1: The Observation Deck
                    </h2>
                    <p class="text-light fs-5 lh-lg">
                        The <em>Aethelgard</em> was the pride of the fleet, a massive cruiser designed with a single purpose: to take civilians to the edge of the Nebula and bring them back changed.
                    </p>
                    <p class="text-white-50">
                        The main performance hall, known as <strong>"The Monolith Room,"</strong> was dominated by a massive, rectangular hyper-glass window. It stood like a sentinel, currently shuttered by blast shields, framing the anticipation of the void. The room was packed—dignitaries, workers who had won the lottery, and "Ironheads" who had smuggled themselves aboard in cargo crates.
                    </p>
                    <p class="text-white-50">
                        <strong>Holly O’Connell</strong> stood at the mixing board, tapping her headset. "T-minus two minutes to main engine ignition. Ryan, check your gain. If you blow the speakers before we hit G-force, I’m docking your pay."
                    </p>
                    <p class="text-white-50">
                        On stage, <strong>Ryan O’Connell</strong> grinned. He was seated in his modified rig, strapped down for high-G maneuvers. His guitar, "The Red Giant," hummed with feedback. "Copy that, Flight Control. Engines are hot."
                    </p>
                </div>

                <!-- Phase 2 -->
                <div class="mb-5 fade-in">
                    <h2 class="h4 text-warning fw-bold text-uppercase border-bottom border-warning border-opacity-25 pb-2 mb-4">
                        Phase 2: Ignition (The Ascent)
                    </h2>
                    <p class="text-light fs-5 lh-lg">
                        The ship’s captain’s voice boomed over the PA: <span class="fst-italic text-warning">"Ladies and gentlemen, prepare for acceleration."</span>
                    </p>
                    <p class="text-white-50">
                        As the ship’s thrusters roared to life, vibrating the floorplates, <strong>Tyler Wright</strong> didn’t fight the rumble—he matched it. He kicked the bass drum, a thunderous, heart-stopping rhythm that synced perfectly with the ship’s ascent.
                    </p>
                    <p class="text-white-50">
                        <strong>Cassidy O’Connell</strong> stepped up to her synthesizer bank. She wasn't just playing music; she was scoring the launch.
                    </p>
                    <blockquote class="blockquote border-start border-3 border-warning ps-4 my-4">
                        <p class="mb-0 text-light fst-italic">"I see a signal in the endless black..."</p>
                    </blockquote>
                    <p class="text-white-50">
                        Her voice cut through the G-force. As the ship climbed, pressing the audience into their seats, the band kicked into the driving, frantic rhythm of <strong>"Ignition."</strong> The music became the propellant. The steeper the ship climbed, the harder they played. Ryan’s guitar screamed, climbing octaves, mimicking the tearing of the atmosphere.
                    </p>
                </div>

                <!-- Phase 3 -->
                <div class="mb-5 fade-in">
                    <h2 class="h4 text-danger fw-bold text-uppercase border-bottom border-danger border-opacity-25 pb-2 mb-4">
                        Phase 3: MECO (Main Engine Cut-Off)
                    </h2>
                    <p class="text-light fs-5 lh-lg">
                        This is the moment the legend was born. The ship reached <strong>Escape Velocity</strong>.
                    </p>
                    <p class="text-white-50">
                        Ryan watched the telemetry monitor on his pedalboard. <em>3... 2... 1...</em>
                    </p>
                    <p class="text-white-50">
                        At the exact second the ship’s engines died, Ryan didn’t stop playing. He reached down and physically <strong>yanked the cable</strong> out of his amplifier.
                    </p>
                    <div class="text-center my-5">
                        <h3 class="display-2 fw-bold text-danger text-uppercase" style="font-family: 'Impact', sans-serif; letter-spacing: 5px;">KA-CHUNK.</h3>
                    </div>
                    <p class="text-white-50">
                        The sound was violent, physical, and absolute. The music cut instantly. The engine roar vanished. For three seconds, there was absolute, vacuum silence in the room. Then, the artificial gravity eased off. Drinks floated out of glasses. People gasped as they felt the lift.
                    </p>
                </div>

                <!-- Phase 4 -->
                <div class="mb-5 fade-in">
                    <h2 class="h4 text-primary fw-bold text-uppercase border-bottom border-primary border-opacity-25 pb-2 mb-4">
                        Phase 4: Ad Astra (The Drift)
                    </h2>
                    <p class="text-light fs-5 lh-lg">
                        Slowly, delicately, <strong>Evan Wright</strong> tapped a single, shimmering note on his bass pedals.
                    </p>
                    <p class="text-white-50">
                        Cassidy’s hands floated over the keys, bringing in the "Dark Synth Pad." It wasn't a song anymore; it was an atmosphere. The blast shields on the Monolith window slowly retracted.
                    </p>
                    <p class="text-white-50">
                        The blackness of space was gone. In its place was the <strong>Nebula</strong>—a swirling cathedral of violet, gold, and crimson dust.
                    </p>
                    <div class="card border-0 mb-4 overflow-hidden shadow-lg rounded-3">
                        <img src="https://assets.raggiesoft.com/stardust-engine/images/story/ad-astra.jpg" 
                             class="img-fluid w-100" 
                             alt="The Stardust Engine performing live on the Aethelgard observation deck"
                             onerror="this.src='https://placehold.co/1200x675/050508/00FFFF?text=Ad+Astra+Live';">
                        <div class="card-footer bg-dark text-center border-top border-secondary small text-muted">
                            <i class="fa-duotone fa-camera me-2"></i>Mission Archive Photo: The Moment of Re-entry
                        </div>
                    </div>
                    <p class="text-white-50">
                        Cassidy began to sing, her voice whispered and ethereal: <span class="text-info fst-italic">"The walls are gone... The air is clear..."</span>
                    </p>
                    <p class="text-white-50">
                        The audience didn't dance. They floated. Suspended in zero-G, watching the galaxy unfold through the Monolith, held aloft by the music. For 15 minutes, they weren't passengers; they were stardust.
                    </p>
                </div>

            </div>

            <!-- Footer Action -->
            <div class="text-center mt-5">
                <hr class="border-secondary opacity-25 mb-5">
                <p class="text-muted mb-4">Experience the soundtrack to the voyage.</p>
                <a href="/discography/1995-the-warehouse-tapes/ad-astra" class="btn btn-outline-info rounded-pill px-5 py-3 shadow-glow">
                    <i class="fa-duotone fa-rocket-launch me-2"></i>Listen to "Ad Astra"
                </a>
            </div>

        </div>
    </div>
</div>