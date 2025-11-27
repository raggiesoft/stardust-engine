<?php
// --- Component: _tracklist-downloader.php ---
// Reads album JSON from CDN, builds a unified tracklist, and fetches lyrics on demand.

// 1. Load JSON Data
$base_web_path = 'https://assets.raggiesoft.com' . $album_path_web;
$tracks_json_url = $base_web_path . '/tracks.json';
$album_json_url = $base_web_path . '/album.json';

$tracks_json_content = @file_get_contents($tracks_json_url);
$album_json_content = @file_get_contents($album_json_url);

if ($tracks_json_content === false || $album_json_content === false) {
    echo '<div class="alert alert-danger">Tracklist data not found on CDN.</div>';
    return;
}

$tracks_data = json_decode($tracks_json_content, true);
$album_data = json_decode($album_json_content, true);
$tracks = $tracks_data['tracks'];

// 2. Helper Functions
if (!function_exists('get_web_safe_title')) {
    function get_web_safe_title($title) {
        $title = strtolower($title);
        $title = preg_replace('/[^\w\s-]/', '', $title);
        $title = preg_replace('/[\s_]+/', '-', $title);
        return preg_replace('/-+/', '-', $title);
    }
}

if (!function_exists('get_archive_name')) {
    function get_archive_name($album_name, $year) {
        $safe_name = get_web_safe_title($album_name);
        return $year . '-' . $safe_name;
    }
}

// 3. Archive URLs
$archive_base_name = get_archive_name($album_data['albumName'], $album_data['narrativeReleaseDate']);
$url_zip_mp3 = $base_web_path . '/archives/' . $archive_base_name . '-mp3.zip';
$url_zip_ogg = $base_web_path . '/archives/' . $archive_base_name . '-ogg.zip';
$url_7z_wav = $base_web_path . '/archives/' . $archive_base_name . '-wav.7z';
?>

<div class="card border-secondary mb-5 bg-transparent">
    <div class="card-header bg-body-tertiary border-secondary d-flex justify-content-between align-items-center">
        <h5 class="mb-0 text-uppercase"><i class="fa-duotone fa-compact-disc me-2"></i>Full Album Archives</h5>
        <span class="badge bg-secondary">CC BY-SA 4.0</span>
    </div>
    <div class="card-body">
        <div class="d-flex gap-2 flex-wrap">
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

<h3 class="h4 fw-bold text-uppercase text-muted mb-4 border-bottom pb-2">
    <i class="fa-duotone fa-list-music me-2"></i>Tracklist & Lyrics
</h3>

<div class="list-group list-group-flush bg-transparent">
    <?php foreach ($tracks as $index => $track): ?>
        <?php
            // Calculate Paths
            $track_num_padded = str_pad($track['track'], 2, '0', STR_PAD_LEFT);
            $web_safe_title = get_web_safe_title($track['title']);
            
            // Standard Naming: 01-01-song-title
            $base_name = $track['disc'] . '-' . $track_num_padded . '-' . $web_safe_title;
            
            $wav_url = $base_web_path . '/wav/' . $track['fileName']; 
            $mp3_url = $base_web_path . '/mp3/' . $base_name . '.mp3';
            $lyrics_url = $base_web_path . '/lyrics/' . $base_name . '.md';
        ?>
        
        <div class="list-group-item bg-transparent border-secondary text-muted py-3">
            <div class="row align-items-center">
                <div class="col-md-6 mb-2 mb-md-0">
                    <div class="d-flex align-items-center">
                        <span class="text-secondary fw-bold me-3" style="width: 25px;"><?php echo $track['track']; ?>.</span>
                        <div>
                            <strong class="text-body d-block fs-5"><?php echo htmlspecialchars($track['title']); ?></strong>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 text-end">
                    <div class="btn-group" role="group">
                        <button type="button" 
                                class="btn btn-sm btn-outline-info btn-view-lyrics"
                                data-title="<?php echo htmlspecialchars($track['title']); ?>"
                                data-url="<?php echo $lyrics_url; ?>">
                            <i class="fa-duotone fa-book-open me-2"></i>Lyrics & Lore
                        </button>

                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="fa-duotone fa-download me-1"></i> Download
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end bg-dark border-secondary">
                                <li>
                                    <a class="dropdown-item text-light license-gate" href="<?php echo $mp3_url; ?>">
                                        <i class="fa-duotone fa-file-audio me-2 text-primary"></i>MP3 (High Quality)
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item text-light license-gate" href="<?php echo $base_web_path . '/ogg/' . $base_name . '.ogg'; ?>">
                                        <i class="fa-duotone fa-file-audio me-2 text-success"></i>OGG (Open Source)
                                    </a>
                                </li>
                                <li><hr class="dropdown-divider border-secondary"></li>
                                <li>
                                    <a class="dropdown-item text-light license-gate" href="<?php echo $wav_url; ?>">
                                        <i class="fa-duotone fa-file-waveform me-2 text-warning"></i>WAV (Master)
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<div class="modal fade" id="lyricsModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
    <div class="modal-content shadow-lg">
      <div class="modal-header">
        <h5 class="modal-title">
            <i class="fa-duotone fa-music me-2 text-primary"></i>
            <span id="lyricsModalTitle" class="text-glow-primary">Track Title</span>
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="lyricsContent" class="font-monospace small text-body opacity-75">
            <div class="text-center py-5">
                <div class="spinner-border text-primary" role="status"></div>
                <p class="mt-2">Accessing Archives...</p>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close Archive</button>
      </div>
    </div>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const lyricsModal = new bootstrap.Modal(document.getElementById('lyricsModal'));
    const titleEl = document.getElementById('lyricsModalTitle');
    const contentEl = document.getElementById('lyricsContent');

    document.querySelectorAll('.btn-view-lyrics').forEach(btn => {
        btn.addEventListener('click', () => {
            const title = btn.getAttribute('data-title');
            const url = btn.getAttribute('data-url');

            // 1. Reset
            titleEl.textContent = title;
            contentEl.innerHTML = `
                <div class="text-center py-5">
                    <div class="spinner-border text-primary" role="status"></div>
                    <p class="mt-2 font-monospace">Retrieving data from the Vault...</p>
                </div>`;
            
            lyricsModal.show();

            // 2. Fetch with Cache Busting
            fetch(url + "?v=" + Date.now())
                .then(response => {
                    if (!response.ok) throw new Error("Lore file not found.");
                    return response.text();
                })
                .then(text => {
                    // 3. The Semantic Block Parser
                    // Sanitize basic HTML first
                    let safeText = text.replace(/</g, '&lt;').replace(/>/g, '&gt;');

                    // Split into blocks by double newlines
                    let blocks = safeText.split(/\n\s*\n/);

                    let htmlOutput = blocks.map(block => {
                        let lines = block.trim().split(/\n/);
                        if (lines.length === 0) return '';

                        let headerHtml = '';
                        let contentLines = lines;
                        let firstLine = lines[0].trim();

                        // -- CHECK 1: MAJOR HEADERS (**LORE NOTE:** / **LYRICS:**) --
                        if (firstLine.match(/^\*\*[A-Z ]+:\*\*$/)) {
                            let cleanHeader = firstLine.replace(/\*\*/g, '');
                            // <h4> for Main Sections
                            headerHtml = `<h4 class="text-warning fw-bold border-bottom border-secondary pb-2 mb-3 mt-2">${cleanHeader}</h4>`;
                            contentLines = lines.slice(1);
                        }
                        // -- CHECK 2: SECTION HEADERS ([Chorus], (Verse 1)) --
                        else if (firstLine.match(/^[\(\[].*?[\)\]]$/)) {
                            // <h5> for Song Sections
                            headerHtml = `<h5 class="text-info fw-bold text-uppercase mb-2 mt-2">${firstLine}</h5>`;
                            contentLines = lines.slice(1);
                        }

                        // Process body lines (Bold **text** processing happens here)
                        let processedBody = contentLines.map(line => {
                            // Use 'text-body' on bold items to respect theme
                            return line.replace(/\*\*(.*?)\*\*/g, '<strong class="text-body fw-bold">$1</strong>');
                        });

                        if (contentLines.length === 0) {
                            return `<div class="mb-4">${headerHtml}</div>`;
                        }

                        let bodyHtml = processedBody.join('<br>');

                        return `
                            <div class="lyrics-block mb-4">
                                ${headerHtml}
                                <div style="line-height: 1.6;">
                                    ${bodyHtml}
                                </div>
                            </div>`;
                    }).join('');

                    contentEl.innerHTML = `<div class="p-3">${htmlOutput}</div>`;
                })
                .catch(err => {
                    contentEl.innerHTML = `
                        <div class="alert alert-warning border-warning m-3">
                            <div class="d-flex">
                                <div class="me-3"><i class="fa-duotone fa-triangle-exclamation fs-1"></i></div>
                                <div>
                                    <strong>Data Corrupted.</strong><br>
                                    Unable to retrieve lyrics for this track. The file may be missing from the archive.
                                </div>
                            </div>
                        </div>`;
                });
        });
    });
});
</script>