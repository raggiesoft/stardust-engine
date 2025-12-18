<?php
// pages/engine-room/corporate/aethelgard.php
// Entity Profile: Aethelgard Holdings
// Function: The "Catch and Release" Liquidation Firm.
// Context: How Holly cleans up the mess and saves the artists.

$pageTitle = "Aethelgard Holdings - Strategic Liquidation";
?>

<style>
    /* AETHELGARD BRANDING: Cold, Industrial, Precise */
    .aethel-header {
        background: linear-gradient(135deg, #000000 0%, #1a1a1a 100%);
        border-bottom: 4px solid #dc3545;
        padding: 60px 0;
        position: relative;
        overflow: hidden;
    }
    
    .aethel-logo {
        font-family: 'Cinzel', serif; /* Or standard serif if unavailable */
        font-weight: 700;
        letter-spacing: 3px;
        text-transform: uppercase;
        color: #fff;
    }

    /* THE PROTOCOL CARD */
    .protocol-card {
        background-color: #f8f9fa;
        border: 1px solid #dee2e6;
        border-left: 5px solid #dc3545; /* Red for "Emergency/Important" */
        position: relative;
    }
    
    [data-bs-theme="dark"] .protocol-card {
        background-color: #1c1c1c;
        border-color: #444;
    }

    /* THE DOLLAR BILL VISUAL */
    .dollar-frame {
        border: 4px double #198754;
        padding: 10px;
        display: inline-block;
        background: #fff;
        color: #198754;
        font-family: 'Courier New', monospace;
        font-weight: bold;
        transform: rotate(-3deg);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
</style>

<div class="aethel-header text-center">
    <div class="container">
        <div class="mb-3">
            <i class="fa-duotone fa-gavel fa-4x text-danger opacity-75"></i>
        </div>
        <h1 class="display-4 aethel-logo mb-2">Aethelgard Holdings</h1>
        <p class="lead text-secondary text-uppercase font-monospace letter-spacing-1">
            Distressed Asset Acquisition & Strategic Liquidation
        </p>
        <span class="badge bg-danger text-uppercase px-3 py-2 mt-3">
            Wholly Owned Subsidiary of The O'Connell Family Trust
        </span>
    </div>
</div>

<div class="container py-5">

    <div class="row justify-content-center mb-5">
        <div class="col-lg-8">
            <p class="fs-5 text-center text-muted">
                "We do not acquire companies to run them. We acquire them to liberate the assets trapped inside."
            </p>
            <hr class="w-25 mx-auto border-danger opacity-100 my-4">
        </div>
    </div>

    <div class="row g-4 mb-5">
        
        <div class="col-md-6">
            <div class="card h-100 bg-dark border-secondary shadow-lg">
                <div class="card-header bg-black border-bottom border-secondary text-uppercase fw-bold text-white-50">
                    <i class="fa-solid fa-industry me-2"></i>The Revenue Engine
                </div>
                <div class="card-body">
                    <p class="text-white-50 small mb-4">
                        Aethelgard funds its operations by ruthlessly liquidating the "hard assets" of bankrupt media conglomerates. We strip the corporation for parts to subsidize our philanthropic goals.
                    </p>
                    
                    <ul class="list-group list-group-flush bg-transparent">
                        <li class="list-group-item bg-transparent text-white border-secondary d-flex justify-content-between align-items-center">
                            <span><i class="fa-duotone fa-building text-secondary me-2"></i>Real Estate</span>
                            <span class="badge bg-success rounded-pill">SOLD</span>
                        </li>
                        <li class="list-group-item bg-transparent text-white border-secondary d-flex justify-content-between align-items-center">
                            <span><i class="fa-duotone fa-server text-secondary me-2"></i>Data Centers / Hardware</span>
                            <span class="badge bg-success rounded-pill">SOLD</span>
                        </li>
                        <li class="list-group-item bg-transparent text-white border-secondary d-flex justify-content-between align-items-center">
                            <span><i class="fa-duotone fa-briefcase text-secondary me-2"></i>Corporate Trademarks</span>
                            <span class="badge bg-success rounded-pill">SOLD</span>
                        </li>
                        <li class="list-group-item bg-transparent text-white border-secondary d-flex justify-content-between align-items-center">
                            <span><i class="fa-duotone fa-file-contract text-secondary me-2"></i>Executive Life Insurance</span>
                            <span class="badge bg-success rounded-pill">CASHED OUT</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card h-100 protocol-card shadow-lg">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-danger text-white rounded-circle p-3 me-3">
                            <i class="fa-solid fa-hand-holding-heart fa-2x"></i>
                        </div>
                        <div>
                            <h4 class="fw-bold mb-0 text-danger text-uppercase">Protocol 92</h4>
                            <small class="text-muted font-monospace">The "Apex" Prevention Initiative</small>
                        </div>
                    </div>
                    
                    <p class="card-text text-light">
                        <strong>Policy:</strong> Any intellectual property (Masters, Copyrights, Trademarks) acquired by Aethelgard that belongs to a living artist or active band is immediately flagged for <strong>Repatriation</strong>.
                    </p>
                    <p class="card-text text-light">
                        We contact the original creators and offer to sell their complete catalog back to them for a symbolic fee. We do not retain royalties. We do not ask for a "percentage." We return the work to its architect.
                    </p>

                    <div class="mt-4 text-center">
                        <div class="dollar-frame">
                            PRICE: $1.00 (USD)
                        </div>
                        <p class="small text-muted mt-2 mb-0">Includes full legal transfer of ownership.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="alert alert-light border-start border-4 border-dark bg-opacity-50 p-4 shadow-sm">
                <div class="row align-items-center">
                    <div class="col-md-2 text-center">
                        <i class="fa-duotone fa-fire-burner fa-3x text-warning mb-3 mb-md-0"></i>
                    </div>
                    <div class="col-md-10">
                        <h5 class="fw-bold text-uppercase mb-2">The Origin Story</h5>
                        <p class="mb-0 fst-italic text-light">
                            "In 1992, an executive at Apex Records tried to force us into a contract built on sexual exploitation and 'simulated incest.' He called it marketing. I called it a felony. I swore then that if I ever had the power to break a lock, I wouldn't just use a key. I'd use a bolt cutter."
                        </p>
                        <p class="mb-0 mt-2 fw-bold text-muted">
                            — Holly O'Connell, Managing Director
                        </p>
                        <hr>
                        <p class="small mb-0 text-light">
                            When Omni-Global collapsed in 2018, Aethelgard Holdings acquired the catalogs of 47 mid-tier bands who had been "rolled up" by Jameson Frost. Within 90 days, 45 of those catalogs were returned to the artists for $1 each. (The remaining 2 were disputed by estates and placed in a blind trust).
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-5 pt-4 border-top border-secondary border-opacity-25 align-items-center">
        <div class="col-4">
            <a href="/engine-room/corporate/structure" class="btn btn-outline-secondary rounded-pill">
                <i class="fa-solid fa-arrow-left me-2"></i>Org Chart
            </a>
        </div>
        <div class="col-4 text-center">
            <a href="/engine-room" class="btn btn-outline-primary rounded-pill">
                <i class="fa-duotone fa-home me-2"></i>Home
            </a>
        </div>
        <div class="col-4 text-end">
            </div>
    </div>

</div>