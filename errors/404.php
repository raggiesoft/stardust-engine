<div class="container py-5 text-center min-vh-50 d-flex flex-column justify-content-center">
    
    <!-- Icon -->
    <div class="mb-4">
        <i class="fa-duotone fa-duotone fa-planet-ringed display-1 text-secondary opacity-25"></i>
    </div>

    <!-- Main Error -->
    <h1 class="display-1 fw-bold text-glow-primary mb-0" style="font-family: 'Impact', sans-serif;">404</h1>
    <h2 class="h2 fw-bold text-body mb-3">Signal Lost</h2>
    
    <p class="lead text-muted mb-5 mx-auto" style="max-width: 600px;">
        You have reached the edge of the known universe. The coordinates you entered do not map to any known sector.
    </p>
    
    <!-- Under Construction Context -->
    <div class="row justify-content-center mb-5">
        <div class="col-md-8 col-lg-6">
            <div class="alert alert-dark border-warning bg-opacity-10 text-start">
                <div class="d-flex">
                    <div class="me-3">
                         <i class="fa-duotone fa-helmet-safety text-warning fs-2"></i>
                    </div>
                    <div>
                        <h5 class="alert-heading h6 fw-bold text-warning text-uppercase mb-1">Archive Under Construction</h5>
                        <p class="mb-0 small text-muted">
                            The Stardust Engine project is actively being built. If you clicked a valid link and ended up here, it likely means <strong>this page is currently being written</strong>. Please check back soon as we restore more of the history.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Home Button -->
    <div>
      <?php
        $props = [
          'href' => '/',
          'text' => 'Return to Base',
          'variant' => 'pact', // Matches the primary theme
          'icon' => 'fa-duotone fa-shuttle-space',
          'iconPosition' => 'before',
          'size' => 'large'
        ];
        include ROOT_PATH . '/includes/components/button.php';
      ?>
    </div>

</div>