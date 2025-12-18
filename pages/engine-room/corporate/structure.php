<?php
// pages/engine-room/corporate/structure.php
// The Corporate Hierarchy (The "Iceberg" Model)
// Context: Visualizing how a "small indie label" controls a massive asset portfolio.

$pageTitle = "Corporate Structure - Engine Room Records";
?>

<style>
    /* WATERLINE (Page Specific) */
    .waterline {
        border-top: 2px dashed #0dcaf0;
        position: relative;
        margin: 40px 0;
        text-align: center;
    }
    .waterline span {
        background-color: #000;
        color: #0dcaf0;
        padding: 0 15px;
        position: relative;
        top: -12px;
        font-family: monospace;
        text-transform: uppercase;
    }
</style>

<div class="container py-5">

    <div class="row justify-content-center mb-5">
        <div class="col-lg-8 text-center">
            <h1 class="display-4 fw-bold text-white text-uppercase" style="font-family: 'Impact', sans-serif;">
                The Governance Structure
            </h1>
            <p class="lead text-muted font-monospace">
                "To the public, we are a band. To the bank, we are a conglomerate."
            </p>
        </div>
    </div>

    <?php
    // 1. DEFINE PATH TO JSON DATA
    $jsonFile = ROOT_PATH . '/data/corporate-structure.json';

    // 2. FETCH AND DECODE
    if (file_exists($jsonFile)) {
        $jsonData = file_get_contents($jsonFile);
        $rootNode = json_decode($jsonData, true);

        // Check for JSON errors
        if (json_last_error() !== JSON_ERROR_NONE) {
            echo '<div class="alert alert-danger">JSON Decode Error: ' . json_last_error_msg() . '</div>';
            $rootNode = []; // Empty array to prevent component crash
        }
    } else {
        echo '<div class="alert alert-warning">Data file not found: corporate-structure.json</div>';
        $rootNode = [];
    }

    // 3. RENDER THE COMPONENT
    include ROOT_PATH . '/includes/components/corporate/org-chart.php';
    ?>

    <div class="row justify-content-center mt-5">
        <div class="col-lg-10">
            
            <div class="waterline">
                <span>The Public Perception Barrier</span>
            </div>

            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card bg-dark border-secondary h-100">
                        <div class="card-body">
                            <h5 class="text-info text-uppercase fw-bold mb-3"><i class="fa-solid fa-eye me-2"></i>Public View</h5>
                            <p class="text-white-50">
                                To a casual observer (or a lazy journalist), <strong>Engine Room Records</strong> appears to be a small, boutique independent label run by the band members themselves. It has one office in Blacksburg, VA, and represents a handful of niche artists. It seems "quaint."
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card bg-dark border-secondary h-100">
                        <div class="card-body">
                            <h5 class="text-danger text-uppercase fw-bold mb-3"><i class="fa-solid fa-eye-slash me-2"></i>Private Reality</h5>
                            <p class="text-white-50">
                                Engine Room Records is effectively a <strong>Family Office</strong>. The LLC acts as the centralized management node for the <strong>O'Connell Family Trust</strong>, which holds significant equity in commercial real estate (Pacific Rim) and corporate liquidation assets (Aethelgard). The "Band" is simply the public face of a diversified investment empire.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="alert alert-dark border-start border-4 border-danger bg-black text-white p-4 mt-4 shadow-lg">
                <div class="d-flex align-items-center">
                    <div class="me-4 d-none d-md-block">
                        <i class="fa-solid fa-vulture fa-3x text-secondary"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold text-uppercase text-white mb-1">Entity Highlight: Aethelgard Holdings</h5>
                        <p class="mb-0 small text-muted font-monospace">Status: Active // Purpose: Omni-Global Liquidation</p>
                        <p class="mb-0 mt-2 text-white-50">
                            Created in late 2018 following the Omni-Global bankruptcy. Aethelgard Holdings was established to purchase the "bones" of the failed media giant (trademarks, catalogs, patents) from the bankruptcy court. It is currently stripping Omni-Global for parts and selling them off to recoup the family's "emotional damages."
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
    <div class="row justify-content-center mt-5 pt-4 border-top border-secondary border-opacity-25 align-items-center">
        <div class="col-4">
            <a href="/engine-room/about" class="btn btn-outline-secondary rounded-pill">
                <i class="fa-solid fa-arrow-left me-2"></i>About Us
            </a>
        </div>
        <div class="col-4 text-center">
            <a href="/engine-room" class="btn btn-outline-primary rounded-pill">
                <i class="fa-duotone fa-home me-2"></i>Home
            </a>
        </div>
        <div class="col-4 text-end">
            <a href="/engine-room/history/nine-figure-refusal" class="btn btn-primary rounded-pill shadow-sm">
                History <i class="fa-solid fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>

</div>