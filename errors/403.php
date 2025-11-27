<div class="container py-5 text-center min-vh-50 d-flex flex-column justify-content-center">
    
    <div class="mb-4">
        <i class="fa-duotone fa-shield-xmark display-1 text-warning opacity-75"></i>
    </div>

    <h1 class="display-1 fw-bold text-glow-warning mb-0" style="font-family: 'Impact', sans-serif;">403</h1>
    <h2 class="h2 fw-bold text-body mb-3">Axiom Security Protocol</h2>
    
    <p class="lead text-muted mb-5 mx-auto" style="max-width: 600px;">
        <strong>Access Restricted.</strong><br>
        You have attempted to breach a secured archive within the Port Telsus data grid.
    </p>
    
    <div class="row justify-content-center mb-5">
        <div class="col-md-8 col-lg-6">
            <div class="alert alert-dark border-warning text-start shadow-sm">
                <div class="d-flex">
                    <div class="me-3">
                         <i class="fa-duotone fa-fingerprint text-warning fs-2"></i>
                    </div>
                    <div>
                        <h5 class="alert-heading h6 fw-bold text-warning text-uppercase mb-1">Violation Logged</h5>
                        <p class="mb-0 small text-muted">
                            Your IP address has been flagged by the <strong>Port Telsus Compliance Division</strong>. This incident has been added to your permanent record. If you are authorized, present your identification token at the nearest checkpoint immediately.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
      <?php $props = [
          'text' => 'Return to Safety', 
          'href' => '/', 
          'variant' => 'neutral', 
          'icon' => 'fa-duotone fa-house'
      ]; include ROOT_PATH . '/includes/components/button.php'; ?>
    </div>

</div>