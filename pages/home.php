<?php
// /pages/home.php
// This view is loaded with p-0 on main, so we use container-fluid for a full-width hero
?>

<!-- Hero Section -->
<div class="container-fluid text-center bg-body-tertiary border-bottom border-primary py-5">
    <div class="container py-5">
        <h1 class="display-2 fw-bold text-uppercase text-glow-primary">
            The Stardust Engine
        </h1>
        <p class="lead fs-3" style="font-family: var(--bs-body-font-family);">
            A musical universe forged in the fires of CPI.
        </p>
    </div>
</div>

<!-- === NEW: Welcome & Project Disclaimer === -->
<div class="container-fluid bg-dark py-5 border-bottom border-secondary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="alert alert-warning bg-warning-subtle border-warning-subtle" role="alert">
                    <h4 class="alert-heading fw-bold"><i class="fa-solid fa-circle-info me-2"></i>Welcome to the Project! (Start Here)</h4>
                    <p>
                        <strong>This is a real AI art project AND a fictional narrative, presented as one experience.</strong> 
                        By continuing, you understand that this is a "dual-world" website.
                    </p>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <strong>The "Real World" (Meta):</strong>
                            <p class="mb-0 small">
                                This is a portfolio piece by Michael Ragsdale. All music, art, and lore are co-created in collaboration with generative AI tools (Gemini, Suno, and DALL-E 3).
                            </p>
                        </div>
                        <div class="col-md-6 border-start-md border-warning">
                            <strong>The "In-Universe" (Narrative):</strong>
                            <p class="mb-0 small">
                                This is the official archive of the fictional band "The Stardust Engine"—a family of CPI alumni who fought their label and won their freedom.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- === End New Section === -->


<!-- === Featured Discography Carousel === -->
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <h2 class="display-5 fw-bold border-bottom pb-2 mb-4">Featured Discography</h2>
            <div class="shadow-lg border-glow">
                <?php
                // This component is defined in /includes/components/carousel.php
                // It uses the DO Spaces URLs for images
                // NOTE: This carousel component will need to be created
                if (file_exists(ROOT_PATH . '/includes/components/carousel.php')) {
                    include ROOT_PATH . '/includes/components/carousel.php';
                } else {
                    echo '<div class="alert alert-danger">Error: Carousel component not found.</div>';
                }
                ?>
            </div>
        </div>
    </div>
</div>
<!-- === End New Section === -->


<!-- Featured Links -->
<div class="container pb-5">
    <div class="row g-4">
        <!-- The Band -->
        <div class="col-lg-4">
            <div class="card h-100">
                <div class="card-body d-flex flex-column">
                    <h3 class="fw-bold text-glow-primary"><i class="fa-solid fa-users me-2"></i>The Band</h3>
                    <p class="fs-5">
                        Meet the five family members who started it all: Cassidy, Ryan, Holly, Evan, and Tyler.
                    </p>
                    <a href="/band" class="btn btn-primary mt-auto">View Bios</a>
                </div>
            </div>
        </div>
        <!-- The History (Updated Link) -->
        <div class="col-lg-4">
            <div class="card h-100">
                <div class="card-body d-flex flex-column">
                    <h3 class="fw-bold text-glow-primary"><i class="fa-solid fa-book-atlas me-2"></i>The Lore</h3>
                    <p class="fs-5">
                        Learn about the "Friction" scandal, the "Cold War" with Apex Records, and the birth of Engine Room Records.
                    </p>
                    <a href="/story/the-friction-catastrophe" class="btn btn-primary mt-auto">Read the History</a>
                </div>
            </div>
        </div>
        <!-- The Store (Updated Link) -->
        <div class="col-lg-4">
            <div class="card h-100">
                <div class="card-body d-flex flex-column">
                    <h3 class="fw-bold text-glow-primary"><i class="fa-solid fa-record-vinyl me-2"></i>The Music</h3>
                    <p class="fs-5">
                        Explore the full discography, from the polished 80s pop to the raw, independent rock of their rebirth.
                    </p>
                    <a href="/discography" class="btn btn-primary mt-auto">View Discography</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- AI Disclaimer (This is now removed from the bottom) -->