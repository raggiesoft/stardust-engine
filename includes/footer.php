<footer class="bg-body-tertiary mt-auto py-5 border-top border-primary">
      <div class="container text-center">
        <h2 class="h4 fw-bold text-uppercase text-glow-primary">The Stardust Engine</h2>
        <p class="mt-2 text-body-secondary">
          A musical universe by Michael Ragsdale, created with Gemini, Suno, and DALL-E.
        </p>
        <p class="mt-4 small text-body-secondary">
            Narrative Content licensed under
            <a href="https://creativecommons.org/licenses/by-sa/4.0/" target="_blank" rel="noopener noreferrer" class="link-body-emphasis text-decoration-none">CC BY-SA 4.0</a>.
            <br class="d-sm-none">
            <span class="d-none d-sm-inline"> | </span>
            Source Code licensed under
            <a href="https://opensource.org/licenses/MIT" target="_blank" rel="noopener noreferrer" class="link-body-emphasis text-decoration-none">MIT</a>.
        </p>
        <div class="mt-4 d-flex justify-content-center gap-4">
          <a href="https://github.com/raggiesoft" aria-label="GitHub" target="_blank" rel="noopener noreferrer" class="link-secondary fs-4">
            <i class="fa-brands fa-github"></i>
          </a>
          <a href="https://michaelpragsdale.com" aria-label="Michael Ragsdale's Portfolio" target="_blank" rel="noopener noreferrer" class="link-secondary fs-4">
            <i class="fa-duotone fa-briefcase"></i>
          </a>
        </div>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  <div class="modal fade" id="konamiModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-dark text-light border-warning shadow-lg">
      <div class="modal-header border-secondary">
        <h5 class="modal-title text-warning">
            <i class="fa-duotone fa-user-secret me-2"></i>System Override: Access Granted
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <div class="mb-3">
            <i class="fa-duotone fa-fingerprint fa-3x text-success"></i>
        </div>
        <p class="lead">Developer authentication recognized.</p>
        <p class="small text-muted mb-4">Decrypting secure archives for <strong>Project: KNOX</strong>...</p>
        
        <div class="d-grid gap-3">
            <a href="/discography/knox-soundtrack" class="btn btn-outline-warning">
                <i class="fa-duotone fa-compact-disc me-2"></i>Unlock "Knox" Soundtrack
            </a>
            
            <a href="https://lore.raggiesoftknox.com" target="_blank" class="btn btn-outline-info">
                <i class="fa-duotone fa-database me-2"></i>Access Lore Bible (Classified)
            </a>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    // The Konami Code Sequence
    const konamiCode = [
        'ArrowUp', 'ArrowUp', 
        'ArrowDown', 'ArrowDown', 
        'ArrowLeft', 'ArrowRight', 
        'ArrowLeft', 'ArrowRight', 
        'b', 'a'
    ];
    
    let currentPosition = 0;

    document.addEventListener('keydown', (e) => {
        // Check if the key pressed matches the next key in the sequence
        // (Using toLowerCase() for letters to ensure caps lock doesn't break it)
        const key = e.key.length === 1 ? e.key.toLowerCase() : e.key;
        const requiredKey = konamiCode[currentPosition].length === 1 ? konamiCode[currentPosition].toLowerCase() : konamiCode[currentPosition];

        if (key === requiredKey) {
            currentPosition++;
            
            // If the full sequence is entered
            if (currentPosition === konamiCode.length) {
                // Trigger the Bootstrap Modal
                const secretModal = new bootstrap.Modal(document.getElementById('konamiModal'));
                secretModal.show();
                
                // Reset sequence
                currentPosition = 0;
            }
        } else {
            // Mistake made, reset sequence
            currentPosition = 0;
        }
    });
});
</script>
</body>
</html>