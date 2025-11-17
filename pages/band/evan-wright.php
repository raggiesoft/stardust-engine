<?php
// Page data
$pageTitle = "Evan Wright - The Stardust Engine";
?>

<div class="container py-5">
    <div class="row g-5">
        
        <!-- Main Bio Content -->
        <div class="col-lg-8">
            <h1 class="display-4 fw-bold text-uppercase text-glow-primary" style="font-family: 'Impact', sans-serif;">Evan Wright</h1>
            <p class="h4 text-warning fw-bold mb-4">Bass Guitar, Rhythm Guitar, Backing Vocals</p>

            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/band">The Band</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Evan Wright</li>
                </ol>
            </nav>

            <p class="fs-5 text-muted">
                The "Texture" of the band, Evan (Age 20 in 1987) is the secret weapon that makes their sound so full. As the cousin of the O'Connells and the identical twin brother of Tyler, his role is to provide the rich, melodic basslines and atmospheric rhythm guitar that form the foundation for Ryan's solos.
            </p>
            <p class="text-muted">
                He is the quiet, steady presence in the "engine room," and his bond with his twin brother is legendary. On tour during the Apex era, Evan and Tyler were inseparable, famously taking one of the two cramped motel beds while the three O'Connell siblings piled into the other.
            </p>

            <h3 class="fw-bold mt-5 mb-3">Post-Apex Freedom</h3>
            <p class="text-muted">
                During the "Freedom Era," Evan's contributions became even more pronounced. His driving basslines on tracks like "Garbage" (from *The Warehouse Tapes*) and his ability to lock in with his brother's "Human Metronome" timing allowed the band to finally explore the raw, unpolished 80s rock sound that Apex Records had suppressed.
            </p>
            <p class="text-muted fs-5">
                <strong>Wardrobe:</strong> This rejection of their old label defines his modern stage presence. After the 'Friction' scandal, Evan shed the polished 'Apex look' for good. On stage, he now proudly wears what he always has: jeans, sneakers, and a CPI Alumni t-shirt or hoodie, looking less like a rock star and more like the proud 'Forger' he is.
            </p>

        </div>

        <!-- Stats Card -->
        <div class="col-lg-4">
            <div class="sticky-top" style="top: 8rem;">
                <?php $props = [
                    'title' => 'Evan Wright',
                    'imgSrc' => 'https://assets.raggiesoft.com/stardust-engine/images/band-members/evan.jpg',
                    'imgAlt' => 'Headshot of Evan Wright with his bass',
                    'variant' => 'neutral',
                    'description' => "<strong>Role:</strong> Bass, Rhythm Guitar, Vocals<br>
                                      <strong>Age (in 1987):</strong> 20<br>
                                      <strong>CPI Status:</strong> Alumnus, Class of '89<br>
                                      <strong>Key Fact:</strong> Identical twin to Tyler Wright",
                    'buttonProps' => [
                        'text' => 'Back to The Band', 
                        'href' => '/band', 
                        'variant' => 'neutral', 
                        'icon' => 'fa-solid fa-users'
                    ]
                ]; include ROOT_PATH . '/includes/components/card.php'; ?>
            </div>
        </div>

    </div>
</div>