<div class="container py-5">
    <h1 class="display-5 fw-bold border-bottom pb-2 mb-4">Contact the Creator</h1>

    <div class="row g-5">
        
        <!-- Left Column: The "Reality" Text -->
        <div class="col-lg-7">
            <div class="fs-5">
                <p class="lead mb-4 text-muted">
                    This website is both a narrative art project and a technical experiment in AI collaboration. 
                    Have a question? I'd love to hear from you.
                </p>

                <h3 class="fw-bold mt-5 mb-3 text-primary">About This Project</h3>
                <p class="text-muted">
                    <strong>The Stardust Engine</strong> is a fictional band created as a collaboration between me (Michael Ragsdale) and a team of AI tools.
                </p>
                <ul class="list-group list-group-flush bg-transparent mb-4">
                    <li class="list-group-item bg-transparent text-muted border-secondary px-0">
                        <i class="fa-duotone fa-user-astronaut text-primary me-3"></i>
                        <strong>The Director:</strong> Michael Ragsdale
                    </li>
                    <li class="list-group-item bg-transparent text-muted border-secondary px-0">
                        <i class="fa-duotone fa-brain-circuit text-primary me-3"></i>
                        <strong>Lyrics & Lore:</strong> Google Gemini
                    </li>
                    <li class="list-group-item bg-transparent text-muted border-secondary px-0">
                        <i class="fa-duotone fa-record-vinyl text-primary me-3"></i>
                        <strong>Music & Vocals:</strong> Suno AI
                    </li>
                    <li class="list-group-item bg-transparent text-muted border-secondary px-0">
                        <i class="fa-duotone fa-palette text-primary me-3"></i>
                        <strong>Album Art:</strong> DALL-E
                    </li>
                </ul>
                <p class="text-muted">
                    For more about my professional work, please visit 
                    <a href="https://michaelpragsdale.com" target="_blank" class="text-warning">michaelpragsdale.com</a>.
                </p>
            </div>
        </div>

        <!-- Right Column: The Contact Form -->
        <div class="col-lg-5">
            <h3 class="fw-bold mb-3 text-warning">Send a Message</h3>
            
            <!-- 
                This form uses Formspree, a free service for static site forms.
                1. Create a free account at https://formspree.io/
                2. Create a new form and get your unique endpoint URL.
                3. Replace the "YOUR_UNIQUE_ID" in the `action` URL below.
            -->
            <form id="contact-form" action="https://formspree.io/f/YOUR_UNIQUE_ID" method="POST" class="needs-validation" novalidate>
                
                <!-- Your Name -->
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                    <div class="invalid-feedback">
                        Please enter your name.
                    </div>
                </div>

                <!-- Your Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Your Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                    <div class="invalid-feedback">
                        Please enter a valid email address.
                    </div>
                </div>

                <!-- Inquiry Type -->
                <div class="mb-3">
                    <label for="inquiryType" class="form-label">Inquiry Type</label>
                    <select class="form-select" id="inquiryType" name="inquiryType" required>
                        <option value="" selected disabled>Please select one...</option>
                        <option value="ai_process">Question about the AI Creation Process</option>
                        <option value="lore_question">In-Universe Lore Question</option>
                        <option value="general">General Feedback or Question</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select the topic of your inquiry.
                    </div>
                </div>

                <!-- Message -->
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    <div class="invalid-feedback">
                        Please enter your message.
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary w-100 btn-lg shadow-lg">
                    <i class="fa-duotone fa-paper-plane me-2"></i>
                    Send Message
                </button>
            </form>
            
            <!-- Form validation script (Bootstrap 5) -->
            <script>
                (function () {
                  'use strict'
                  var forms = document.querySelectorAll('.needs-validation')
                  Array.prototype.slice.call(forms)
                    .forEach(function (form) {
                      form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                          event.preventDefault()
                          event.stopPropagation()
                        }
                        form.classList.add('was-validated')
                      }, false)
                    })
                })()
            </script>
        </div>
    </div>
</div>