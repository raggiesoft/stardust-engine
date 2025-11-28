<?php
// pages/player.php
// "The Stardust Radio" - Official Audio Stream Console
// v2.1 - Added "Frequency Tuner" Sidebar

$pageTitle = "Stardust Radio - The Console";

// 1. CONFIGURATION
$cdn_base = "https://assets.raggiesoft.com/stardust-engine/music";
include ROOT_PATH . '/includes/components/arrays/_discography.php';

// 2. DATA INGESTION
$master_playlist = []; 
$global_track_index = 0;

// Helper to clean titles
function clean_title_for_url($title) {
    $title = strtolower($title);
    $title = preg_replace('/[^\w\s-]/', '', $title);
    $title = preg_replace('/[\s_]+/', '-', $title);
    return preg_replace('/-+/', '-', $title);
}

// Helper to fetch album data
function fetch_album_data($album_url, $cdn_base) {
    $slug = basename($album_url);
    $tracks_url = "{$cdn_base}/{$slug}/tracks.json";
    $album_json_url = "{$cdn_base}/{$slug}/album.json";
    
    // Use @ to suppress errors if a specific album isn't uploaded yet
    $tracks_content = @file_get_contents($tracks_url);
    $album_content = @file_get_contents($album_json_url);
    
    if ($tracks_content && $album_content) {
        return [
            'meta' => json_decode($album_content, true),
            'tracks' => json_decode($tracks_content, true)['tracks'],
            'slug' => $slug
        ];
    }
    return null;
}
?>

<div class="container-fluid mb-0 pb-0" data-bs-theme="dark" style="
    position: relative;
    background-image: linear-gradient(rgba(13, 6, 26, 0.7), rgba(13, 6, 26, 0.7)), 
                      url('https://assets.raggiesoft.com/stardust-engine/images/stardust-engine-hero.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    width: 100%;
">
    
    <!-- HEADER (Full Width) -->
    <div class="text-center pt-5 mb-0 border-bottom border-secondary">
        <h1 class="display-3 fw-bold text-uppercase text-glow-primary" style="font-family: 'Audiowide', sans-serif;">
            <i class="fa-duotone fa-radio me-3 text-warning" aria-hidden="true"></i>Stardust Radio
        </h1>
        <p class="lead text-white">
            Broadcasting from The Fortress. Accessing full audio archives...
        </p>
    </div>

    <div class="row">
        
        <!-- SIDEBAR: Frequency Tuner (Desktop Only) -->
        <div class="col-lg-3 d-none d-lg-block border-end border-secondary bg-body-tertiary pt-0 mt-0 pb-4">
            <div class="sticky-top" style="top: 100px;">
                <h5 class="text-uppercase text-warning fw-bold my-4" style="font-family: 'Exo 2'; letter-spacing: 1px;">
                    <i class="fa-duotone fa-sliders-up me-2" aria-hidden="true"></i>Frequency Tuner
                </h5>
                
                <div class="nav flex-column nav-pills">
                    <?php foreach ($discographyMenu as $era => $albums): 
                        // Create a safe ID for the Era link
                        $era_id = 'era-' . clean_title_for_url($era);
                    ?>
                        <a class="nav-link link-secondary mb-2" href="#<?php echo $era_id; ?>">
                            <i class="fa-duotone fa-signal-stream me-2"></i><?php echo $era; ?>
                        </a>
                    <?php endforeach; ?>
                </div>

                <hr class="border-secondary my-4">

                <div class="card bg-dark border-primary text-light">
                    <div class="card-body">
                        <h6 class="card-title text-primary"><i class="fa-duotone fa-circle-info me-2"></i>Console Status</h6>
                        <p class="card-text small text-muted">
                            System Online.<br>
                            Archives Decrypted.<br>
                            Signal Strength: 100%
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- MAIN INTERFACE: The Jukebox -->
        <div class="col-lg-9 p-4">
            <div class="accordion" id="radioAccordion">
                
                <?php 
                $is_first_era = true;
                
                foreach ($discographyMenu as $era => $albums): 
                    $era_id = 'era-' . clean_title_for_url($era);
                ?>
                    <!-- Era Anchor -->
                    <div id="<?php echo $era_id; ?>" class="pt-2"></div>
                    
                    <h5 class="text-warning text-uppercase border-bottom border-warning pb-2 mt-4 mb-3" style="font-family: 'Exo 2'; letter-spacing: 2px;">
                        <?php echo $era; ?>
                    </h5>

                    <?php 
                    foreach ($albums as $album): 
                        $data = fetch_album_data($album['url'], $cdn_base);
                        if (!$data) continue; 
                        
                        $album_art = "{$cdn_base}/{$data['slug']}/album-art.jpg";
                        $album_name = $data['meta']['albumName'];
                    ?>
                        <!-- ALBUM CARD -->
                        <div class="card bg-hud-orange mb-3 shadow-sm">
                            <!-- Card Header: Click to Expand -->
                            <div class="card-header bg-body-tertiary border-secondary d-flex align-items-center p-3" 
                                 role="button" 
                                 data-bs-toggle="collapse" 
                                 data-bs-target="#collapse-<?php echo $data['slug']; ?>">
                                
                                <img src="<?php echo $album_art; ?>" alt="Art" class="rounded me-3 border border-secondary" style="width: 60px; height: 60px; object-fit: cover;">
                                
                                <div class="flex-grow-1">
                                    <h2 class="h5 mb-0 fw-bold text-white" style="font-family: 'Audiowide'"><?php echo $album_name; ?></h2>
                                    <small class="text-white"><?php echo $data['meta']['narrativeReleaseDate']; ?> &bull; <?php echo count($data['tracks']); ?> Tracks</small>
                                </div>
                                
                                <i class="fa-duotone fa-chevron-down text-primary"></i>
                            </div>

                            <!-- Card Body: Tracklist -->
                            <div id="collapse-<?php echo $data['slug']; ?>" class="accordion-collapse collapse <?php echo $is_first_era ? 'show' : ''; ?>">
                                <div class="card-body p-0">
                                    <div class="list-group list-group-flush">
                                        <?php foreach ($data['tracks'] as $track): 
                                            // Construct Paths
                                            $track_pad = str_pad($track['track'], 2, '0', STR_PAD_LEFT);
                                            $safe_title = clean_title_for_url($track['title']);
                                            $filename_base = "{$track['disc']}-{$track_pad}-{$safe_title}";
                                            
                                            $ogg_url = "{$cdn_base}/{$data['slug']}/ogg/{$filename_base}.ogg";
                                            $lyrics_url = "{$cdn_base}/{$data['slug']}/lyrics/{$filename_base}.md";
                                            
                                            // Add to Master Playlist
                                            $master_playlist[] = [
                                                'title' => $track['title'],
                                                'artist' => "The Stardust Engine",
                                                'album' => $album_name, // Used for "Repeat Album" logic
                                                'src' => $ogg_url,
                                                'artwork' => $album_art,
                                                'lyrics' => $lyrics_url
                                            ];
                                            
                                            $current_index = $global_track_index;
                                            $global_track_index++;
                                        ?>
                                            <button type="button" 
                                                    class="list-group-item list-group-item-action bg-transparent text-white border-secondary py-3 track-row d-flex align-items-center"
                                                    id="track-row-<?php echo $current_index; ?>"
                                                    data-index="<?php echo $current_index; ?>"> <!-- Use data attribute for listener -->
                                                
                                                <span class="text-white fw-bold me-3 text-end" style="width: 25px;"><?php echo $track['track']; ?></span>
                                                <div class="flex-grow-1">
                                                    <strong class="text-white"><?php echo $track['title']; ?></strong>
                                                </div>
                                                <i class="fa-duotone fa-play text-white opacity-50 play-indicator" aria-label="Play <?php echo $track['title']; ?>" title="Play <?php echo $track['title']; ?>"></i>
                                            </button>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php 
                    endforeach; 
                    $is_first_era = false; // Only expand the first era by default
                    ?>
                <?php endforeach; ?>
                
            </div>
        </div>
    </div>
</div>

<!-- ============================================================================== -->
<!--  SECTION 4: PLAYER INTEGRATION                                                 -->
<!-- ============================================================================== -->

<!-- 1. Include the Shared UI (Player Bar & Modal) -->
<?php include ROOT_PATH . '/includes/components/audio-player/sticky-player.php'; ?>

<!-- 2. Initialize Data & Load Engine -->
<script>
    // Pass the PHP playlist to the Global Window scope
    window.STARDUST_PLAYLIST = <?php echo json_encode($master_playlist); ?>;
</script>

<!-- 3. Load the Logic -->
<script src="https://assets.raggiesoft.com/stardust-engine/js/stardust-player.js?v=<?php echo time(); ?>"></script>

<!-- 4. Radio Specific Logic -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    // We need to attach listeners to the radio rows manually since they don't use the standard .btn-play-index class
    // Instead they are the rows themselves.
    
    document.querySelectorAll('.track-row').forEach(row => {
        row.addEventListener('click', (e) => {
            const index = parseInt(row.getAttribute('data-index'));
            // Call the global loadTrack function exposed by stardust-player.js
            if (typeof window.loadTrack === 'function') {
                window.loadTrack(index);
            }
        });
    });
});
</script>