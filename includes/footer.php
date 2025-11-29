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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

<div class="modal fade" id="konamiModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-dark text-light shadow-lg" style="border: 2px solid #7000FF;">
      <div class="modal-header border-secondary">
        <h5 class="modal-title" style="color: #FFD700;">
            <i class="fa-duotone fa-stars me-2"></i>Hidden Signal Detected
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center p-4">
        
        <img src="https://assets.raggiesoft.com/stardust-engine/music/1995-ad-astra-single/album-art.jpg" 
             class="img-fluid rounded shadow-lg mb-4 border border-secondary" 
             alt="Ad Astra Single Art"
             style="max-height: 300px;">
        
        <h4 class="fw-bold text-white text-uppercase" style="font-family: 'Audiowide';">Ad Astra (The Single)</h4>
        <p class="text-muted mb-4">
            You have unlocked the 1995 Promo CD.<br>
            <span class="small text-info">"A map for the lost."</span>
        </p>
        
        <div class="d-grid">
            <a href="/discography/1995-the-warehouse-tapes/ad-astra" class="btn btn-primary btn-lg" style="background-color: #7000FF; border-color: #7000FF;">
                <i class="fa-duotone fa-rocket-launch me-2"></i>Launch Mission
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

    // Page Loader Logic (Existing)
    const loader = document.getElementById('page-loader');
    if(loader) {
        document.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                const target = this.getAttribute('target');
                if (href && target !== '_blank' && !href.startsWith('#') && !href.startsWith('javascript:') && !href.startsWith('mailto:') && !href.startsWith('tel:') && !this.hasAttribute('download')) {
                    const currentUrl = window.location.pathname;
                    if (href.startsWith('#') || (href.includes(currentUrl) && href.includes('#'))) return;
                    loader.classList.add('active');
                }
            });
        });
        window.addEventListener('pageshow', function(event) {
            if (event.persisted) loader.classList.remove('active');
        });
    }
});
</script>
</body>
</html>