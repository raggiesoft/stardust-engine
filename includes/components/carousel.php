<?php
// /includes/components/carousel.php

// --- Carousel Data ---
// To add a new album, just add a new entry to this array.
// The carousel will build itself, in order.
$albums = [
    [
        'title' => 'Electric Color',
        'year' => 1987,
        'img_src' => 'https://assets.raggiesoft.com/stardust-engine/music/1987-electric-color/album-art.jpg',
        'description' => 'The synth-rock debut that peaked at #2 on the Billboard Hot 100.',
        'link' => '/discography/electric-color',
        'btn_class' => 'btn-primary'
    ],
    [
        'title' => 'Neon Hearts',
        'year' => 1989,
        'img_src' => 'https://assets.raggiesoft.com/stardust-engine/music/1989-neon-hearts/album-art.jpg',
        'description' => 'The band\'s sophomore effort.',
        'link' => '#', // Link to be updated when page exists
        'btn_class' => 'btn-warning text-dark'
    ],
    [
        'title' => 'Live at The Crucible',
        'year' => 2016,
        'img_src' => 'https://assets.raggiesoft.com/stardust-engine/music/2016-live-crucible/album-art.jpg',
        'description' => 'The "Anvil Edition" homecoming. The only official release of "Ignition."',
        'link' => '/discography/live-at-the-crucible',
        'btn_class' => 'btn-primary'
    ],
   /*// --- Un-commented and added ---
    [
        'title' => 'The Eleventh Child',
        'year' => 2023,
        'img_src' => 'https://assets.raggiesoft.com/stardust-engine/images/albums/album-art-eleventh-child.jpg',
        'description' => 'The 36-year follow-up: a dark, industrial rock opera.',
        'link' => '/discography/the-eleventh-child',
        'btn_class' => 'btn-warning text-dark'
    ],*/
];
?>

<div id="discographyCarousel" class="carousel slide" data-bs-ride="carousel">
    
    <!-- Indicators (Dots) -->
    <div class="carousel-indicators">
        <?php foreach ($albums as $index => $album): ?>
            <button type="button" 
                    data-bs-target="#discographyCarousel" 
                    data-bs-slide-to="<?php echo $index; ?>" 
                    class="<?php echo ($index === 0) ? 'active' : ''; ?>" 
                    aria-current="<?php echo ($index === 0) ? 'true' : 'false'; ?>" 
                    aria-label="Slide <?php echo $index + 1; ?>">
            </button>
        <?php endforeach; ?>
    </div>

    <!-- Slides (Wrapper) -->
    <div class="carousel-inner">
        <?php foreach ($albums as $index => $album): ?>
            <div class="carousel-item <?php echo ($index === 0) ? 'active' : ''; ?>">
                <img src="<?php echo htmlspecialchars($album['img_src']); ?>" 
                     class="d-block w-100" 
                     alt="<?php echo htmlspecialchars($album['title']); ?> album art"
                     onerror="this.onerror=null; this.src='https.placehold.co/1200x800/050508/FF2A6D?text=Image+Not+Found';">
                
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75 p-3 rounded">
                    <h5 class="display-6 fw-bold text-glow-primary">
                        <?php echo htmlspecialchars($album['title']); ?> (<?php echo $album['year']; ?>)
                    </h5>
                    <p class="fs-5"><?php echo htmlspecialchars($album['description']); ?></p>
                    <a href="<?php echo htmlspecialchars($album['link']); ?>" class="btn <?php echo $album['btn_class']; ?>">
                        <i class="fa-solid fa-circle-info me-2"></i> View Details
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Controls (Next/Prev) -->
    <button class="carousel-control-prev" type="button" data-bs-target="#discographyCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#discographyCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>