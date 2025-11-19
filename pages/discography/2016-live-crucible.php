<?php
// Page data
$pageTitle = "Live at The Crucible (2016) - The Stardust Engine";
$album_path_web = '/stardust-engine/music/2016-live-at-the-crucible';
?>

<div class="container py-5">
    <?php
        // Include the reusable live album disclaimer
        include ROOT_PATH . '/includes/components/_disclaimer-live-album.php';
    ?>
    
    <!-- Album Header -->
    <div class="row align-items-center mb-5">
        <<?php $props = [
            'path' => $album_path_web, 
            'alt' => 'Live at The Crucible Album Art',
            'variant' => 'warning' // or 'axiom'
        ]; include ROOT_PATH . '/includes/components/_album-art-header.php'; ?>
        <div class="col-md-7">
            <h1 class="display-3 fw-bold text-uppercase text-primary mb-0" style="font-family: 'Impact', sans-serif;">
                Live at The Crucible
            </h1>
            <p class="h4 text-warning fw-bold mb-3">
                The 2016 Homecoming Reunion
            </p>
            <p class="lead text-secondary">
                This is the band's magnum opus. Recorded live at their alma mater, this album is the definitive "Freedom Era" recording, 
                capturing the emotional finale of their reunion tour in front of 60,000 "Ironheads".
            </p>
            <p class="text-muted">
                It is their best-selling album, and its 2023 Dolby Atmos remaster 
                became the new standard for audiophile immersion.
            </p>
        </div>
    </div>

    <hr class="border-secondary opacity-25 mb-5">

    <!-- Setlist -->
    <h2 class="display-5 fw-bold text-uppercase border-bottom pb-2 mb-4">Setlist</h2>
    
    <table class="table table-borderless table-hover fs-5 align-middle">
        <thead>
            <tr class="text-secondary text-uppercase small">
                <th style="width: 50px;">#</th>
                <th>Title</th>
                <th class="text-end">Length</th>
            </tr>
        </thead>
        <tbody class="border-top border-secondary">

            <!-- SET 1 -->
            <tr class="table-group-divider">
                <td colspan="3" class="text-warning fw-bold small text-uppercase pt-4 pb-2">Set 1: The Homecoming</td>
            </tr>

            <tr>
                <td class="text-muted fw-bold">1.</td>
                <td>
                    <strong class="text-primary">Ignition (The Forger's Call)</strong>
                    <small class="d-block text-muted">The sacred CPI entrance anthem. The "Enter Sandman" moment.</small>
                </td>
                <td class="text-end text-muted">7:05</td>
            </tr>
            
            <tr>
                <td class="text-muted fw-bold">2.</td>
                <td>
                    <strong class="text-primary">The Stardust Engine</strong>
                    <small class="d-block text-muted">The song that should have been a #1 hit.</small>
                </td>
                <td class="text-end text-muted">5:12</td>
            </tr>

            <!-- SET 2 / GAP SONGS -->
            <tr class="table-group-divider">
                <td colspan="3" class="text-warning fw-bold small text-uppercase pt-4 pb-2">Set 2: The Freedom Era</td>
            </tr>

            <tr>
                <td class="text-muted fw-bold">3.</td>
                <td>
                    <strong class="text-primary">Hard Reset</strong>
                    <small class="d-block text-muted">From the 1997 comeback album.</small>
                </td>
                <td class="text-end text-muted">4:55</td>
            </tr>
            
            <tr>
                <td class="text-muted fw-bold">4.</td>
                <td>
                    <strong class="text-primary">Garbage</strong>
                    <small class="d-block text-muted">Ryan's "malicious compliance" track from The Warehouse Tapes.</small>
                </td>
                <td class="text-end text-muted">3:15</td>
            </tr>

            <tr>
                <td class="text-muted fw-bold">5.</td>
                <td>
                    <strong class="text-primary">Not Your Saint</strong>
                    <small class="d-block text-muted">Cassidy's "rage" track from The Warehouse Tapes.</small>
                </td>
                <td class="text-end text-muted">4:20</td>
            </tr>
            
            <tr class="table-group-divider">
                <td colspan="3" class="text-center text-muted fst-italic py-4">
                    ...
                    <br>
                    <small>(Full setlist in development)</small>
                </td>
            </tr>
            
            <!-- ENCORE -->
            <tr class="table-group-divider">
                <td colspan="3" class="text-warning fw-bold small text-uppercase pt-4 pb-2">Encore</td>
            </tr>

            <tr>
                <td class="text-muted fw-bold">X.</td>
                <td>
                    <strong class="text-primary">Electric Color (The Crucible Suite)</strong>
                    <small class="d-block text-muted">The 5:24 rock anthem finale, played as they always intended.</small>
                </td>
                <td class="text-end text-muted">5:24</td>
            </tr>

        </tbody>
    </table>
</div>