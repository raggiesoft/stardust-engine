<?php
// Page data
$pageTitle = "Holly O'Connell - The Stardust Engine";
?>

<div class="container py-5">
    <div class="row g-5">
        
        <div class="col-lg-8">
            <h1 class="display-4 fw-bold text-uppercase text-glow-primary" style="font-family: 'Impact', sans-serif;">Holly O'Connell</h1>
            <p class="h4 text-warning fw-bold mb-4">Manager (CEO, Engine Room Records, LLC)</p>

            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/band">The Band</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Holly O'Connell</li>
                </ol>
            </nav>

            <p class="fs-5 text-muted">
                The "Anchor". Holly (Age 18 in 1987) is the most formidable member of The Stardust Engine, and she has never played a note on stage. A child prodigy, she accelerated her education to start college at 16, allowing her to join her older siblings and cousins at CPI.
            </p>
            <p class="text-muted">
                While still a student, she took on the role of the band's manager. [cite_start]Her official role was to act as the emotional peacemaker—famously pulling Ryan and Cassidy into a "three-way hug" when they argued over music, reminding them "You're both right. And you're both idiots" [cite: 36, 1319-1320].
            </p>

            <h3 class="fw-bold mt-5 mb-3">The Crash of '90: "The Gatekeeper"</h3>
            <p class="text-muted">
                When Ryan was paralyzed in December 1990, Holly's role expanded from Business Manager to Medical Director. While Cassidy became Ryan's day-to-day "Safe Person," Holly built the infrastructure that kept him alive and working.
            </p>
            <p class="text-muted">
                She holds **Durable Power of Attorney** for Ryan, giving her the legal authority to make medical decisions in an emergency. She carries signed, notarized HIPAA release forms in her briefcase at all times, allowing her to speak directly to his doctors and surgeons.
            </p>
            <p class="text-muted">
                On tour, she is the "Gatekeeper." She coordinates the complex delivery of catheter supplies, schedules the tour routing around accessible hotels (a rarity in the 90s), and enforces the "Iron Dome" around Ryan's morning medical routine. If a promoter tries to rush a soundcheck during Ryan's care window, they don't deal with a musician; they deal with Holly.
            </p>
            
            <h3 class="fw-bold mt-5 mb-3">The "Friction" Nuke</h3>
            <p class="text-muted">
                Holly's true power was revealed during the 1992 "Friction" scandal. By this time, she was a 2L law student. When Julian Vance made his criminal demand, Holly transformed into "Holly the Shark".
            </p>
            <p class="text-muted">
                She secured the two key pieces of evidence:
            </p>
            <ul class="list-group list-group-flush bg-transparent mb-4">
                <li class="list-group-item bg-transparent text-muted border-secondary px-0">
                    <strong>Exhibit A:</strong> The altered clipboard where Vance had physically crossed out the word "simulated."
                </li>
                <li class="list-group-item bg-transparent text-muted border-secondary px-0">
                    <strong>Exhibit B:</strong> The 1990 *Live in Chicago* tape, proving Apex was negligent in not knowing Ryan and Cassidy were siblings.
                </li>
            </ul>
            <p class="text-muted">
                [cite_start]Caught between Holly's civil "nuke" and a separate criminal investigation (started by the photographer, Kevin), Apex Records immediately voided the band's $2M contract and signed over the masters to their first two albums to avoid liability [cite: 870-874]. Holly immediately used this freedom to found <strong>Engine Room Records, LLC</strong>, the band's independent label.
            </p>

        </div>

        <div class="col-lg-4">
            <div style="top: 8rem;">
                <?php $props = [
                    'title' => 'Holly O\'Connell',
                    'imgSrc' => 'https://assets.raggiesoft.com/stardust-engine/images/band-members/holly.jpg',
                    'imgAlt' => 'Headshot of Holly O\'Connell',
                    'variant' => 'neutral',
                    'description' => "<strong>Role:</strong> Manager, CEO, Legal Counsel<br>
                                      <strong>Age (in 1987):</strong> 18<br>
                                      <strong>Status:</strong> The Gatekeeper (Unbroken)<br>
                                      <strong>Key Moment:</strong> The 'Friction' Nuke (1992)",
                    'buttonProps' => [
                        'text' => 'Back to The Band', 
                        'href' => '/band', 
                        'variant' => 'neutral', 
                        'icon' => 'fa-duotone fa-users'
                    ]
                ]; include ROOT_PATH . '/includes/components/card.php'; ?>
            </div>
        </div>

    </div>
</div>