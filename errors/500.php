<div class="container py-5 text-center min-vh-50 d-flex flex-column justify-content-center">
    
    <div class="mb-4">
        <i class="fa-duotone fa-car-battery display-1 text-danger opacity-50"></i>
    </div>

    <h1 class="display-1 fw-bold text-glow-primary mb-0" style="font-family: 'Impact', sans-serif;">500</h1>
    <h2 class="h2 fw-bold text-body mb-3">Critical Engine Stall</h2>
    
    <p class="lead text-muted mb-5 mx-auto" style="max-width: 600px;">
        <strong>System Failure.</strong><br>
        We are experiencing a catastrophic feedback loop in the main server reactor.
    </p>
    
    <div class="row justify-content-center mb-5">
        <div class="col-md-8 col-lg-6">
            <div class="alert alert-danger border-danger bg-opacity-10 text-start">
                <div class="d-flex">
                    <div class="me-3">
                         <i class="fa-duotone fa-wrench text-danger fs-2"></i>
                    </div>
                    <div>
                        <h5 class="alert-heading h6 fw-bold text-danger text-uppercase mb-1">Tech Crew Dispatched</h5>
                        <p class="mb-0 small text-muted">
                            Our engineers have been alerted to the crash. Please try refreshing the page in a few moments. We may have just blown a fuse during the guitar solo.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
      <?php $props = [
          'text' => 'Restart System', 
          'href' => '/', 
          'variant' => 'pact', // Red/Primary
          'icon' => 'fa-duotone fa-power-off'
      ]; include ROOT_PATH . '/includes/components/button.php'; ?>
    </div>

</div>