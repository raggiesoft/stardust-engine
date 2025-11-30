<?php
// Page data
$pageTitle = "Ad Astra - The Stardust Engine";
$pageTheme = "ad-astra"; 

// Pointing to the Single folder
$album_path_web = '/stardust-engine/music/1995-ad-astra-single';
?>



<div class="starfield-container"><div class="starfield-twinkling"></div></div>

<div class="container py-5 glass-container">
    
    <div class="text-center mb-5 fade-in-up">
        <span class="badge rounded-pill border border-warning text-warning mb-3 px-3 py-2 shadow-glow">
            <i class="fa-duotone fa-stars me-2"></i>The Magnum Opus
        </span>
        <h1 class="display-1 fw-bold text-uppercase text-glow-primary mb-0" style="font-family: 'Audiowide', sans-serif; letter-spacing: 4px;">
            Ad Astra
        </h1>
        <p class="h5 text-info fw-light text-uppercase mt-2" style="font-family: 'Exo 2', sans-serif; letter-spacing: 2px;">
            (Officially: "Escape Velocity (Ad Astra)")
        </p>
    </div>

    <div class="row justify-content-center align-items-center mb-5">
        
        <div class="col-md-5 mb-4 mb-md-0">
            <?php $props = [
                'path' => $album_path_web, 
                'alt' => 'Ad Astra Single Art',
                'variant' => 'pact' // Violet border
            ]; include ROOT_PATH . '/includes/components/_album-art-header.php'; ?>
        </div>

        <div class="col-md-7">
            <div class="card border-primary shadow-lg h-100" style="background: rgba(10, 5, 20, 0.7); backdrop-filter: blur(20px);">
                <div class="card-body p-5 text-center d-flex flex-column justify-content-center">
                    
                    <p class="lead text-white mb-4">
                        The 15-minute progressive rock suite that defined the band's freedom.
                        <br><span class="text-info small fst-italic">"The moment the 'Engine' ignited and the 'Stardust' took over."</span>
                    </p>

                    <button class="btn btn-primary btn-lg rounded-pill px-5 py-3 shadow-glow mb-3" 
                            id="btn-launch-mission"
                            style="font-family: 'Audiowide'; letter-spacing: 1px;">
                        <i class="fa-duotone fa-rocket-launch me-2"></i> Launch Mission (15:33)
                    </button>
                    
                    <div class="small text-white">
                        <i class="fa-duotone fa-compact-disc me-2"></i>Full Single &bull; 4 Tracks
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-lg-12">
            <div class="card glass-card shadow-lg p-4">
                <div class="card-body">
                    <?php include ROOT_PATH . '/includes/components/_tracklist-downloader.php'; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
            <div class="card terminal-card p-4">
                <div class="terminal-header">
                    <i class="fa-duotone fa-satellite-dish me-2"></i>
                    Secure Transmission Log // Port Telsus // The Ironworks
                </div>
                <div class="small opacity-75 mb-3">
                    > SOURCE: H. O'Connell (Designation: "The Fixer")<br>
                    > LOCATION: Lower Decks / Sector 7 (Decommissioned Engine Chamber)<br>
                    > STATUS: BROADCASTING<br>
                    > ENCRYPTION: Glimmer-Key Alpha
                </div>
                <div class="terminal-text">
                    <p>
                        <strong>LOG ENTRY:</strong> The Ticks are swarming the upper promenade again. Compliance checks. They don't like coming down here to the rust and the rot. The magnetic interference from the old engines messes with their comms. Good.
                    </p>
                    <p>
                        Ryan finished calibrating the amps. He built them out of scrap hull plating we salvaged from that wrecked freighter in Bay 4. The sound is raw—like the station itself screaming. Cassidy is ready. She says she's singing for the ones stuck in the filtration plants, the ones breathing the ozone and the synth-fuel every day.
                    </p>
                    <p>
                        We're playing "Ad Astra" tonight. It's not just a song. It's a map. Embedded in the sequencer track of Part II are the navigational coordinates for the safe hyperspace tributary through the Telsan Gap. If there are any free ships listening out there... this is your way home.
                    </p>
                </div>
                <p class="mb-0 text-end fw-bold blink-text">
                    // END TRANSMISSION //
                </p>
            </div>
        </div>
    </div>

    <hr class="border-secondary opacity-25 mb-5">

    <div class="row g-5">
        
        <div class="col-lg-4">
            <div>
                <h3 class="h4 text-primary fw-bold text-uppercase border-bottom border-primary pb-2 mb-4">
                    Mission Log
                </h3>
                <p class="text-white">
                    Written in the aftermath of the 1994 <em>Friction</em> trial, this suite is Cassidy O'Connell's autobiographical journey from trauma to transcendence.
                </p>
                
                <div class="alert alert-dark border-warning mt-4 bg-opacity-50">
                    <i class="fa-duotone fa-microchip text-warning me-2"></i>
                    <strong class="text-warning">Production Note:</strong>
                    <p class="small text-white mb-0 mt-1">
                        The "mechanical cutoff" sound between Part II and Part III is Ryan O'Connell physically pulling the plug on his guitar amplifier to simulate a rocket's Main Engine Cutoff (MECO).
                    </p>
                </div>

                <div class="mt-5">
                    <?php $props = [
                        'text' => 'Back to The Warehouse Tapes', 
                        'href' => '/discography/1995-the-warehouse-tapes', 
                        'variant' => 'neutral', 
                        'icon' => 'fa-duotone fa-arrow-left', 
                        'iconPosition' => 'before'
                    ]; include ROOT_PATH . '/includes/components/button.php'; ?>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            
            <div class="card border-secondary bg-transparent mb-4" style="border-left-width: 4px !important;">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2" onclick="seekTo(0)" role="button">
                        <span class="badge bg-secondary me-3"><i class="fa-duotone fa-play me-1"></i>00:00</span>
                        <h4 class="text-secondary text-uppercase fw-bold mb-0 timestamp-link">Part I: The Cage</h4>
                    </div>
                    <div class="ps-5"><p class="font-monospace text-white opacity-75 mb-0 small">The walls are cold, the air is thin...</p></div>
                </div>
            </div>

            <div class="card border-warning bg-transparent mb-4" style="border-left-width: 4px !important;">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2" onclick="seekTo(180)" role="button">
                        <span class="badge bg-warning text-dark me-3"><i class="fa-duotone fa-play me-1"></i>03:00</span>
                        <h4 class="text-warning text-uppercase fw-bold mb-0 timestamp-link">Part II: Ignition</h4>
                    </div>
                    <div class="ps-5"><p class="font-monospace text-white opacity-75 mb-0 small">The sequencer starts. The Engine roars.</p></div>
                </div>
            </div>

            <div class="card border-primary bg-transparent mb-4" style="border-left-width: 4px !important;">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2" onclick="seekTo(440)" role="button">
                        <span class="badge bg-primary me-3"><i class="fa-duotone fa-play me-1"></i>07:20</span>
                        <h4 class="text-primary text-uppercase fw-bold mb-0 timestamp-link">Part III: The Cosmos</h4>
                    </div>
                    <div class="ps-5"><p class="font-monospace text-white opacity-75 mb-0 small">I'm floating now, the engine's off...</p></div>
                </div>
            </div>

            <div class="card border-success bg-transparent mb-4" style="border-left-width: 4px !important;">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2" onclick="seekTo(715)" role="button">
                        <span class="badge bg-success me-3"><i class="fa-duotone fa-play me-1"></i>11:55</span>
                        <h4 class="text-success text-uppercase fw-bold mb-0 timestamp-link">Part IV: Re-entry</h4>
                    </div>
                    <div class="ps-5"><p class="font-monospace text-white opacity-75 mb-0 small">The walls are gone, the air is clear...</p></div>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    // Wait for DOM
    document.addEventListener('DOMContentLoaded', () => {
        
        // 1. Find the index of "Full Suite" in the playlist
        let suiteIndex = 0;
        if(typeof window.STARDUST_PLAYLIST !== 'undefined') {
            window.STARDUST_PLAYLIST.forEach((track, index) => {
                if(track.title.toLowerCase().includes('full suite')) {
                    suiteIndex = index;
                }
            });
        }

        // 2. Bind the big Launch button
        const launchBtn = document.getElementById('btn-launch-mission');
        if(launchBtn) {
            launchBtn.onclick = () => {
                if(window.loadTrack) window.loadTrack(suiteIndex);
            };
        }

        // 3. Global Seek Helper for timestamps
        window.seekTo = function(seconds) {
            if (typeof window.STARDUST_PLAYLIST === 'undefined') return;
            const audio = document.getElementById('main-audio-element');
            
            // Check if we are currently playing the suite
            const suiteSrc = window.STARDUST_PLAYLIST[suiteIndex].src;
            const currentSrc = audio.getAttribute('src');

            if (!currentSrc || !currentSrc.includes(suiteSrc)) {
                window.loadTrack(suiteIndex, true);
                audio.addEventListener('loadedmetadata', function onLoaded() {
                    audio.currentTime = seconds;
                    audio.removeEventListener('loadedmetadata', onLoaded);
                }, { once: true });
            } else {
                audio.currentTime = seconds;
                audio.play();
            }
        };
    });
</script>