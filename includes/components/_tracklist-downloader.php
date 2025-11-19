<?php
// --- Component: _tracklist-downloader.php ---
// Reads album JSON from CDN and builds a tracklist with license-gated download links.

// --- 1. Load JSON Data from CDN ---
$base_web_path = 'https://assets.raggiesoft.com' . $album_path_web;
$tracks_json_url = $base_web_path . '/tracks.json';
$album_json_url = $base_web_path . '/album.json';

// Fetch JSON content
$tracks_json_content = @file_get_contents($tracks_json_url);
$album_json_content = @file_get_contents($album_json_url);

if ($tracks_json_content === false || $album_json_content === false) {
    echo '<div class="alert alert-danger">Tracklist data not found on CDN.</div>';
    return;
}

$tracks_data = json_decode($tracks_json_content, true);
$album_data = json_decode($album_json_content, true);
$tracks = $tracks_data['tracks'];

// --- 2. Helper Functions ---
if (!function_exists('get_web_safe_title')) {
    function get_web_safe_title($title) {
        $title = strtolower($title);
        $title = preg_replace('/[^\w\s-]/', '', $title);
        $title = preg_replace('/[\s_]+/', '-', $title);
        $title = preg_replace('/-+/', '-', $title);
        return $title;
    }
}

if (!function_exists('get_archive_name')) {
    function get_archive_name($album_name, $year) {
        $safe_name = get_web_safe_title($album_name);
        return $year . '-' . $safe_name;
    }
}

// --- 3. Build Archive URLs ---
$archive_base_name = get_archive_name($album_data['albumName'], $album_data['narrativeReleaseDate']);
$url_zip_mp3 = $base_web_path . '/archives/' . $archive_base_name . '-mp3.zip';
$url_zip_ogg = $base_web_path . '/archives/' . $archive_base_name . '-ogg.zip';
$url_7z_wav = $base_web_path . '/archives/' . $archive_base_name . '-wav.7z';
?>

<!-- === Full Album Download Section === -->
<div class="card border-secondary mb-4 bg-transparent">
    <div class="card-header bg-body-tertiary border-secondary d-flex justify-content-between align-items-center">
        <h5 class="mb-0 text-uppercase"><i class="fa-solid fa-download me-2"></i>Download Full Album</h5>
        <span class="badge bg-secondary">License: CC BY-SA 4.0</span>
    </div>
    <div class="card-body">
        <p class="card-text small text-muted mb-3">
            Includes high-quality audio, album art, and liner notes. 
            <strong>WAV</strong> archives use 7-Zip (.7z) for maximum compression.
        </p>
        <div class="d-flex gap-2 flex-wrap">
            <!-- Added 'license-gate' class to all download buttons -->
            <a href="<?php echo $url_zip_mp3; ?>" class="btn btn-outline-primary license-gate">
                <i class="fa-solid fa-file-zipper me-2"></i>MP3 (ZIP)
            </a>
            <a href="<?php echo $url_zip_ogg; ?>" class="btn btn-outline-success license-gate">
                <i class="fa-solid fa-file-zipper me-2"></i>OGG (ZIP)
            </a>
            <a href="<?php echo $url_7z_wav; ?>" class="btn btn-outline-warning license-gate">
                <i class="fa-solid fa-file-zipper me-2"></i>WAV (7z)
            </a>
        </div>
    </div>
</div>

<!-- === Streaming Coming Soon Notice === -->
<div class="alert alert-info border-info mb-5 d-flex align-items-center" role="alert">
    <i class="fa-solid fa-circle-info fs-4 me-3"></i>
    <div>
        <strong>Streaming Player Coming Soon!</strong><br>
        We are currently building a custom audio player for the site. In the meantime, please download the files above to listen.
    </div>
</div>

<!-- Tracklist Table (Download Only) -->
<div class="table-responsive">
    <table class="table table-borderless table-hover fs-5 align-middle">
        <thead>
            <tr class="text-secondary text-uppercase small">
                <th style="width: 50px;">#</th>
                <th>Title</th>
                <th class="text-end">Single Track Download</th>
            </tr>
        </thead>
        <tbody class="border-top border-secondary">

            <?php foreach ($tracks as $index => $track): ?>
                <?php
                    $track_num_padded = str_pad($track['track'], 2, '0', STR_PAD_LEFT);
                    $web_safe_title = get_web_safe_title($track['title']);
                    $output_base_name = $track['disc'] . '-' . $track_num_padded . '-' . $web_safe_title;

                    $wav_url = $base_web_path . '/wav/' . $track['fileName'];
                    $mp3_url = $base_web_path . '/mp3/' . $output_base_name . '.mp3';
                    $ogg_url = $base_web_path . '/ogg/' . $output_base_name . '.ogg';
                ?>
                <tr>
                    <td class="text-muted fw-bold"><?php echo $track['track']; ?>.</td>
                    <td>
                        <strong class="text-primary"><?php echo htmlspecialchars($track['title']); ?></strong>
                    </td>
                    <td class="text-end">
                        <div class="btn-group" role="group" aria-label="Download options">
                            <!-- Added 'license-gate' class here too -->
                            <a href="<?php echo $mp3_url; ?>" class="btn btn-outline-secondary btn-sm license-gate" download>MP3</a>
                            <a href="<?php echo $ogg_url; ?>" class="btn btn-outline-secondary btn-sm license-gate" download>OGG</a>
                            <a href="<?php echo $wav_url; ?>" class="btn btn-outline-secondary btn-sm license-gate" download>WAV</a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</div>


<!-- === LICENSE AGREEMENT MODAL === -->
<div class="modal fade" id="licenseModal" tabindex="-1" aria-labelledby="licenseModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-secondary bg-body-tertiary">
      <div class="modal-header border-secondary">
        <h5 class="modal-title text-warning" id="licenseModalLabel">
            <i class="fa-brands fa-creative-commons me-2"></i>License Agreement
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-body">
        <p>You are about to download material protected by the <strong>Creative Commons Attribution-ShareAlike 4.0 International (CC BY-SA 4.0)</strong> license.</p>
        
        <p class="small text-muted">By downloading, you agree to the following terms:</p>
        <ul class="small text-muted">
            <li class="mb-2"><strong>Attribution:</strong> You must give appropriate credit to <em>The Stardust Engine</em> and <em>Michael Ragsdale</em>, provide a link to the license, and indicate if changes were made.</li>
            <li class="mb-2"><strong>ShareAlike:</strong> If you remix, transform, or build upon the material, you must distribute your contributions under the same license as the original.</li>
        </ul>
        
        <div class="alert alert-dark border-secondary py-2 px-3 d-flex align-items-center">
            <i class="fa-solid fa-shield-halved text-primary me-3"></i>
            <small class="mb-0">We share this music freely because we believe in art, not gates. Please respect the creators.</small>
        </div>
      </div>
      <div class="modal-footer border-secondary">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" id="btn-agree-license">
            <i class="fa-solid fa-check me-2"></i>I Agree & Download
        </button>
      </div>
    </div>
  </div>
</div>

<!-- === LICENSE LOGIC SCRIPT === -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    const licenseModal = new bootstrap.Modal(document.getElementById('licenseModal'));
    const agreeBtn = document.getElementById('btn-agree-license');
    let pendingLink = null; // To remember which button was clicked

    // 1. Intercept all download clicks
    document.querySelectorAll('.license-gate').forEach(btn => {
        btn.addEventListener('click', (e) => {
            // Check if user has already agreed in this browser
            const hasAccepted = localStorage.getItem('rs_license_accepted_cc_bysa_4');
            
            if (!hasAccepted) {
                e.preventDefault(); // STOP the download
                pendingLink = btn.href; // Remember where they wanted to go
                licenseModal.show(); // Show the rules
            }
            // If accepted, do nothing (let the link work normally)
        });
    });

    // 2. Handle "I Agree" Click
    agreeBtn.addEventListener('click', () => {
        // Save consent forever (or until cache clear)
        localStorage.setItem('rs_license_accepted_cc_bysa_4', 'true');
        licenseModal.hide();
        
        // Proceed to the download
        if (pendingLink) {
            window.location.href = pendingLink;
        }
    });
});
</script>