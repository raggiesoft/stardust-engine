<?php
// Page data
$pageTitle = "The Lore - The Stardust Engine";
?>

<div class="container py-5">
    
    <div class="text-center mb-5">
        <h1 class="display-3 fw-bold text-uppercase text-glow-primary" style="font-family: 'Impact', sans-serif;">
            The Story
        </h1>
        <p class="lead text-secondary mx-auto" style="max-width: 800px;">
            The Stardust Engine is more than a band; it's a survival story.
            Explore the history, the scandal, and the origins of the "Ironheads."
        </p>
    </div>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        
        <div class="col">
            <div class="card h-100 border-primary shadow-sm">
                <img src="https://assets.raggiesoft.com/stardust-engine/music/1992-friction/album-art.jpg" 
                     class="card-img-top" 
                     alt="Abstract art representing the Friction scandal">
                <div class="card-body d-flex flex-column">
                    <h3 class="h5 fw-bold text-primary">The Friction Catastrophe</h3>
                    <p class="card-text text-muted small">
                        The defining moment in the band's history. How a "fatal assumption" by a record executive and a disastrous photo shoot in 1992 led to the band's explosive departure from Apex Records.
                    </p>
                    <div class="mt-auto pt-3">
                        <?php $props = [
                            'text' => 'Read The Full Story', 
                            'href' => '/story/friction', // Links to /story/friction/overview.php via router
                            'variant' => 'primary',
                            'icon' => 'fa-duotone fa-book-open-cover',
                            'fullWidth' => true
                        ]; include ROOT_PATH . '/includes/components/button.php'; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 border-warning shadow-sm">
                <img src="https://assets.raggiesoft.com/stardust-engine/music/2016-live-at-the-crucible/album-art.jpg" 
                     class="card-img-top" 
                     alt="The Crucible Stadium at night">
                <div class="card-body d-flex flex-column">
                    <h3 class="h5 fw-bold text-warning">CPI & The Forgers</h3>
                    <p class="card-text text-muted small">
                        Before they were rock stars, they were "Ironheads." Discover the band's origins at Commonwealth Polytechnic Institute and the story behind their sacred anthem, "Ignition."
                    </p>
                    <div class="mt-auto pt-3">
                        <?php $props = [
                            'text' => 'Enter The Crucible', 
                            'href' => '/story/cpi', 
                            'variant' => 'axiom', // Orange/Warning theme
                            'icon' => 'fa-duotone fa-school',
                            'fullWidth' => true
                        ]; include ROOT_PATH . '/includes/components/button.php'; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 border-secondary shadow-sm">
                <img src="https://placehold.co/600x600/1C0F38/E0E0FF?text=Timeline" 
                     class="card-img-top" 
                     alt="Timeline graphic placeholder">
                <div class="card-body d-flex flex-column">
                    <h3 class="h5 fw-bold text-secondary">Complete Timeline</h3>
                    <p class="card-text text-muted small">
                        From the dorm rooms of 1985 to the reunion tour of 2015. A chronological look at every album, tour, and major event in the band's 30-year history.
                    </p>
                    <div class="mt-auto pt-3">
                        <?php $props = [
                            'text' => 'View Timeline', 
                            'href' => '/band/band-history', 
                            'variant' => 'neutral',
                            'icon' => 'fa-duotone fa-timeline',
                            'fullWidth' => true
                        ]; include ROOT_PATH . '/includes/components/button.php'; ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>