<?php
// includes/components/carousel.php
// v3.1 - Added Seized Asset Logic (Friction Display)

// 1. Load the Library
include_once ROOT_PATH . '/includes/components/arrays/_discography.php';

// 2. Flatten the Library into a single list for the Carousel
$carousel_albums = [];

if (isset($discographyLibrary)) {
    foreach ($discographyLibrary as $era) {
        if (!empty($era['albums'])) {
            foreach ($era['albums'] as $album) {
                
                // CHECK: Is this a seized asset?
                $isSeized = (isset($album['extra']) && str_contains($album['extra'], 'CANCELED'));

                // Build the standardized object
                $carousel_albums[] = [
                    'title'       => $album['title'],
                    'year'        => $album['year'],
                    'link'        => $album['url'],
                    'img_src'     => $album['img'] ?? 'https://assets.raggiesoft.com/common/images/defaults/vinyl-placeholder.jpg', 
                    'description' => $album['description'] ?? "Released in {$album['year']}.",
                    
                    // Logic for Seized vs Normal
                    'is_seized'   => $isSeized,
                    'btn_class'   => $isSeized ? 'btn-danger' : 'btn-primary',
                    'btn_text'    => $isSeized ? 'View Case File' : 'View Album',
                    'btn_icon'    => $isSeized ? 'fa-duotone fa-file-contract' : 'fa-duotone fa-circle-info'
                ];
            }
        }
    }
}

// Only render if we have albums
if (!empty($carousel_albums)):
?>

<div id="discographyCarousel" class="carousel slide carousel-fade shadow-lg rounded-3 overflow-hidden mb-5" data-bs-ride="carousel">
    
    <div class="carousel-indicators">
        <?php foreach ($carousel_albums as $index => $album): ?>
            <button type="button" 
                    data-bs-target="#discographyCarousel" 
                    data-bs-slide-to="<?php echo $index; ?>" 
                    class="<?php echo $index === 0 ? 'active' : ''; ?>" 
                    aria-current="<?php echo $index === 0 ? 'true' : 'false'; ?>" 
                    aria-label="Slide <?php echo $index + 1; ?>">
            </button>
        <?php endforeach; ?>
    </div>

    <div class="carousel-inner">
        <?php foreach ($carousel_albums as $index => $album): ?>
            <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>" data-bs-interval="5000">
                
                <a href="<?php echo htmlspecialchars($album['link']); ?>" class="position-relative d-block">
                    
                    <?php if ($album['is_seized']): ?>
                        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" 
                             style="z-index: 2; background: rgba(0,0,0,0.4); pointer-events: none;">
                            <div class="bg-danger text-dark fw-bold display-1 text-uppercase px-5 py-2" 
                                 style="transform: rotate(-15deg); border: 5px dashed #000; opacity: 0.9; font-family: 'Impact', sans-serif; box-shadow: 0 0 30px #000;">
                                Evidence
                            </div>
                        </div>
                    <?php endif; ?>

                    <img src="<?php echo htmlspecialchars($album['img_src']); ?>" 
                         class="d-block w-100" 
                         alt="<?php echo htmlspecialchars($album['title']); ?> Album Art"
                         style="height: 500px; object-fit: cover; object-position: center; <?php echo $album['is_seized'] ? 'filter: blur(8px) grayscale(100%);' : ''; ?>"
                         onerror="this.onerror=null; this.src='https://placehold.co/1200x800/050508/FF2A6D?text=Image+Missing';">
                </a>
                
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75 p-4 rounded border border-secondary border-opacity-25 glass-card" style="z-index: 3;">
                    <h5 class="display-6 fw-bold text-glow-primary mb-1">
                        <?php echo htmlspecialchars($album['title']); ?> 
                        <small class="text-muted fw-light h6">(<?php echo $album['year']; ?>)</small>
                    </h5>
                    
                    <div class="mt-3">
                        <a href="<?php echo htmlspecialchars($album['link']); ?>" class="btn <?php echo $album['btn_class']; ?> rounded-pill px-4">
                            <i class="<?php echo $album['btn_icon']; ?> me-2" aria-hidden="true"></i> <?php echo $album['btn_text']; ?>
                        </a>
                    </div>
                </div>

            </div>
        <?php endforeach; ?>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#discographyCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#discographyCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>

</div>

<?php else: ?>
    <div class="alert alert-warning text-center">
        <i class="fa-duotone fa-triangle-exclamation me-2"></i> No featured albums available.
    </div>
<?php endif; ?>