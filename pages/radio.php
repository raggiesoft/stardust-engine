<?php
// pages/radio.php
// "The Stardust Radio" - Official Audio Stream Console
// v6.0 - "The Library Update" (Supports new _discography.php structure)

$pageTitle = "Stardust Radio - The Console";

// 1. SAFETY CHECKS
if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', dirname(__DIR__)); 
}

// 2. CONFIGURATION
$cdn_base = "https://assets.raggiesoft.com/stardust-engine/music";
$discography_file = ROOT_PATH . '/includes/components/arrays/_discography.php';

if (file_exists($discography_file)) {
    include $discography_file;
}

// Fallback: Ensure the variable exists even if include fails
if (!isset($discographyLibrary)) {
    $discographyLibrary = []; 
}

// 3. DATA INGESTION
$master_playlist = []; 
$global_track_index = 0;

// Helper to fetch album data
function fetch_album_data($album_entry, $cdn_base) {
    
    // A. Determine the Folder Slug
    if (isset($album_entry['folder']) && !empty($album_entry['folder'])) {
        $slug = $album_entry['folder'];
    } else {
        $slug = basename($album_entry['url']);
    }

    $tracks_url = "{$cdn_base}/{$slug}/tracks.json";
    $album_json_url = "{$cdn_base}/{$slug}/album.json";
    
    // B. Fetch Data
    $tracks_content = @file_get_contents($tracks_url);
    $album_content = @file_get_contents($album_json_url);

    if ($tracks_content && $album_content) {
        $tracks_data = json_decode($tracks_content, true);
        $meta_data = json_decode($album_content, true);

        if (json_last_error() !== JSON_ERROR_NONE) return null;

        // Handle "tracks" wrapper if present
        $tracks = isset($tracks_data['tracks']) ? $tracks_data['tracks'] : $tracks_data;

        // Handle Album Title
        $album_title = $meta_data['title'] ?? ($meta_data['albumName'] ?? 'Unknown Album');

        return [
            'tracks' => $tracks,
            'album_title' => $album_title,
            'art' => "{$cdn_base}/{$slug}/album-art.jpg",
            'slug' => $slug
        ];
    }
    return null;
}

// 4. BUILD THE MASTER PLAYLIST (Updated Loop Logic)
if (!empty($discographyLibrary)) {
    foreach ($discographyLibrary as $eraKey => $eraData) {
        
        // Drill down to the albums array in the new structure
        $albums = $eraData['albums'] ?? []; 

        foreach ($albums as $album) {
            
            // SKIP RULE: Cancelled Albums
            if (isset($album['extra']) && strpos($album['extra'], 'CANCELED') !== false) {
                continue;
            }

            // Fetch Data
            $album_data = fetch_album_data($album, $cdn_base);

            if ($album_data && !empty($album_data['tracks'])) {
                foreach ($album_data['tracks'] as $track) {
                    
                    // Key Normalization
                    $filename_stem = $track['fileName'] ?? ($track['filename'] ?? ($track['file'] ?? null));
                    $title = $track['title'] ?? ($track['name'] ?? 'Unknown Track');

                    if (empty($filename_stem)) {
                        continue; 
                    }

                    // Path Construction
                    $src_url = "{$cdn_base}/{$album_data['slug']}/ogg/{$filename_stem}.ogg";
                    $lore_url = "{$cdn_base}/{$album_data['slug']}/lyrics/{$filename_stem}.md";

                    $master_playlist[] = [
                        'title' => $title,
                        'artist' => 'The Stardust Engine',
                        'album' => $album_data['album_title'],
                        'artwork' => $album_data['art'],
                        'src' => $src_url,
                        'lyrics' => $lore_url,
                        'global_index' => $global_track_index
                    ];
                    $global_track_index++;
                }
            }
        }
    }
}
?>

<div class="container-fluid p-0">
    <div class="p-5 text-center bg-dark border-bottom border-secondary" 
         style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.9)), url('https://assets.raggiesoft.com/stardust-engine/images/studio-rack.jpg'); background-size: cover; background-position: center;">
        
        <h1 class="display-2 fw-bold text-uppercase text-glow-primary mb-2" style="font-family: 'Audiowide', sans-serif;">
            <i class="fa-duotone fa-tower-broadcast me-3 text-danger"></i>Stardust Radio
        </h1>
        <p class="lead text-light font-monospace">Frequency: 104.2 FM // Port Telsus // The Weave</p>
        
        <div class="mt-4">
            <button id="btn-start-radio" class="btn btn-lg btn-danger rounded-pill px-5 shadow-glow" onclick="loadTrack(0)">
                <i class="fa-solid fa-power-off me-2"></i>POWER ON
            </button>
        </div>
    </div>

    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8">
                <div class="card glass-card border-0 shadow-lg">
                    <div class="card-header bg-transparent border-bottom border-secondary p-3">
                        <h5 class="text-light mb-0 text-uppercase"><i class="fa-duotone fa-list-music me-2"></i>Transmission Log</h5>
                    </div>
                    <div class="card-body p-0" style="max-height: 600px; overflow-y: auto;">
                        <div class="list-group list-group-flush" id="radio-tracklist">
                            <?php if (empty($master_playlist)): ?>
                                <div class="p-5 text-center text-secondary">
                                    <i class="fa-duotone fa-satellite-dish fs-1 mb-3 text-danger"></i>
                                    <h3 class="h5 text-light">Console Offline</h3>
                                    <p class="mb-0">No active frequencies found. Check the archive connection.</p>
                                    <small class="d-block mt-2 text-muted font-monospace">ERROR: 404_MANIFEST_NOT_FOUND</small>
                                </div>
                            <?php else: ?>
                                <?php foreach ($master_playlist as $index => $track): ?>
                                    <button type="button" 
                                            class="list-group-item list-group-item-action bg-transparent border-secondary track-row d-flex align-items-center p-3"
                                            id="track-row-<?php echo $index; ?>"
                                            data-index="<?php echo $index; ?>">
                                        
                                        <div class="me-3 text-secondary font-monospace" style="width: 30px;">
                                            <?php echo str_pad($index + 1, 2, '0', STR_PAD_LEFT); ?>
                                        </div>
                                        
                                        <img src="<?php echo $track['artwork']; ?>" class="rounded shadow-sm me-3" style="width: 40px; height: 40px; object-fit: cover;">
                                        
                                        <div class="flex-grow-1 text-start">
                                            <div class="text-light fw-bold"><?php echo $track['title']; ?></div>
                                            <div class="small text-secondary text-uppercase"><?php echo $track['album']; ?></div>
                                        </div>

                                        <div class="ms-3">
                                            <i class="play-indicator fa-duotone fa-play-circle fs-4 text-primary opacity-50"></i>
                                        </div>
                                    </button>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card bg-dark border-success mb-4 shadow-glow">
                    <div class="card-body text-center p-4">
                        <h4 class="text-success font-monospace mb-3">SIGNAL STRENGTH</h4>
                        <div class="progress bg-secondary bg-opacity-25" style="height: 20px;">
                            <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 92%"></div>
                        </div>
                        <p class="small text-muted mt-2 mb-0">Connected to Relay Station Alpha</p>
                    </div>
                </div>

                <div class="card glass-card border-warning p-4">
                    <h5 class="text-warning fw-bold mb-3"><i class="fa-duotone fa-triangle-exclamation me-2"></i>Axiom Alert</h5>
                    <p class="small text-light">
                        Unauthorized broadcasts are a violation of Port Telsus Compliance Code 77-B. 
                        Listeners found tuning into this frequency will be subject to immediate audit.
                    </p>
                    <div class="alert alert-dark border-secondary mb-0 small">
                        <strong>Current Status:</strong> <span class="text-danger blink">BROADCASTING</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include ROOT_PATH . '/includes/components/audio-player/sticky-player.php'; ?>

<script>
    // Pass the PHP playlist to the Global Window scope
    window.STARDUST_PLAYLIST = <?php echo json_encode($master_playlist); ?>;
</script>

<script src="https://assets.raggiesoft.com/stardust-engine/js/stardust-player.js?v=<?php echo time(); ?>"></script>

<script>
document.addEventListener('DOMContentLoaded', () => {
    // Bind clicks on the radio rows
    document.querySelectorAll('.track-row').forEach(row => {
        row.addEventListener('click', (e) => {
            const index = parseInt(row.getAttribute('data-index'));
            if (typeof window.loadTrack === 'function') {
                window.loadTrack(index);
            }
        });
    });
});
</script>