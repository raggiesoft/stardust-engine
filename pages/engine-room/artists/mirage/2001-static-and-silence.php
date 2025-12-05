<?php
$pageTitle = "Static & Silence (2001) - Mirage";
$album_path_web = '/engine-room-records/artists/mirage/2001-static-and-silence';
?>

<div class="container py-5">
    
    <div class="row align-items-center mb-5">
        <div class="col-md-4">
             <div class="position-relative shadow-lg rounded overflow-hidden">
                <img src="<?php echo $cdn_root; ?>/artists/mirage/2001-static-and-silence/album-art.jpg" 
                     class="img-fluid w-100" 
                     alt="Album Art: A lonely figure at a curbstone in the rain">
                <div class="position-absolute top-0 start-0 p-2">
                    <span class="badge bg-danger text-uppercase">Double Album</span>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <h1 class="display-3 fw-bold text-dark mb-0" style="font-family: 'Impact', sans-serif;">
                Static & Silence
            </h1>
            <p class="h4 text-secondary fw-light mb-3">
                The Rock Opera (2001)
            </p>
            <p class="lead text-muted">
                The defining masterpiece of the post-grunge era. A harrowing, autobiographical concept album detailing frontman Julian Croft's survival of abuse, his cross-country escape, and his return to the "Safe Harbor."
            </p>
            <div class="d-flex gap-2 mt-4">
                <button class="btn btn-primary rounded-pill px-4" onclick="loadTrack(0)">
                    <i class="fa-duotone fa-play me-2"></i>Play Act I
                </button>
                <button class="btn btn-outline-secondary rounded-pill px-4" onclick="loadTrack(16)">
                    <i class="fa-duotone fa-forward-step me-2"></i>Skip to Act II (The Rescue)
                </button>
            </div>
        </div>
    </div>

    <hr class="border-secondary-subtle mb-5">

    <div class="row g-5">
        <div class="col-lg-8">
            
            <div class="mb-5">
                <h3 class="h5 text-dark fw-bold border-bottom pb-2 mb-3">
                    <i class="fa-duotone fa-compact-disc me-2"></i>Disc 1: The Long Road West
                </h3>
                <p class="small text-secondary mb-3">
                    <em>The Descent. Industrial, Grunge, and the sound of entrapment.</em>
                </p>
                <div id="disc-1-container" class="list-group list-group-flush border rounded">
                    </div>
            </div>

            <div class="mb-5">
                <h3 class="h5 text-primary fw-bold border-bottom pb-2 mb-3">
                    <i class="fa-duotone fa-compact-disc me-2"></i>Disc 2: The Journey Home
                </h3>
                <p class="small text-primary mb-3">
                    <em>The Rescue. 80s Power Pop, Synth-Rock, and the sound of safety.</em>
                </p>
                <div id="disc-2-container" class="list-group list-group-flush border rounded">
                    </div>
            </div>

        </div>

        <div class="col-lg-4">
            <div class="card bg-body-tertiary border-0 mb-4">
                <div class="card-body">
                    <h5 class="fw-bold text-dark">The Cast</h5>
                    <ul class="list-unstyled small text-secondary">
                        <li class="mb-2"><strong>Leo (Julian):</strong> The Protagonist. Voiceless, trapped, surviving.</li>
                        <li class="mb-2"><strong>Olivia (Maya):</strong> The Anchor. The rescuer who breaks the silence.</li>
                        <li class="mb-2"><strong>Delores (Vanessa):</strong> The Villain. The siren song that turns into a cage.</li>
                        <li><strong>Luna & Stella (The Sisters):</strong> The Fortress. The home that never stopped waiting.</li>
                    </ul>
                </div>
            </div>
            
            <div class="alert alert-light border-start border-danger border-4">
                <strong class="text-danger">Production Note:</strong>
                <p class="small text-muted mb-0">
                    The "Shattered Voice" sound effect at the end of Disc 1 is the actual recording of a 1999 Quantum Communicator being dropped from a two-story height in the studio.
                </p>
            </div>
        </div>
    </div>
</div>

<?php include ROOT_PATH . '/includes/components/_tracklist-downloader.php'; ?>