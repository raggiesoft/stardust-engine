<?php
// --- Component: tracklist-downloader.php (Download Only Version) ---
//
// This component reads the album's JSON files from the CDN to build a
// tracklist with direct download links.
//
// It requires one variable to be set before being included:
// $album_path_web:   (e.g., "/stardust-engine/music/1987-electric-color")

// --- 1. Load JSON Data from CDN ---
$base_web_path = 'https://assets.raggiesoft.com' . $album_path_web;
$tracks_json_url = $base_web_path . '/tracks.json';
$album_json_url = $base_web_path . '/album.json';

// Fetch JSON content (suppress errors with @ to handle missing files gracefully)
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
        // Matches logic in transcode-all.sh: ${NARRATIVE_YEAR}-${SAFE_ALBUM_NAME}
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
            <a href="<?php echo $url_zip_mp3; ?>" class="btn btn-outline-primary">
                <i class="fa-solid fa-file-zipper me-2"></i>MP3 (ZIP)
            </a>
            <a href="<?php echo $url_zip_ogg; ?>" class="btn btn-outline-success">
                <i class="fa-solid fa-file-zipper me-2"></i>OGG (ZIP)
            </a>
            <a href="<?php echo $url_7z_wav; ?>" class="btn btn-outline-warning">
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
                    // Build File Paths
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
                        <div class="btn-group" role="group" aria-label="Download options for <?php echo htmlspecialchars($track['title']); ?>">
                            <a href="<?php echo $mp3_url; ?>" class="btn btn-outline-secondary btn-sm" download>MP3</a>
                            <a href="<?php echo $ogg_url; ?>" class="btn btn-outline-secondary btn-sm" download>OGG</a>
                            <a href="<?php echo $wav_url; ?>" class="btn btn-outline-secondary btn-sm" download>WAV</a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</div>