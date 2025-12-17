
<?php
// pages/engine-room/corporate/structure.php
// Corporate Governance & Entity Structure

$pageTitle = "Corporate Structure - Engine Room Records, LLC";

// DYNAMIC AUDIT LOGIC
// We assume the "Last Audit" is the most recently COMPLETED quarter.
$currentMonth = (int)date('n');
$currentYear = (int)date('Y');

// Calculate current quarter (1-4)
$currentQuarter = ceil($currentMonth / 3);

// Calculate previous quarter
if ($currentQuarter == 1) {
    $auditQ = 4;
    $auditYear = $currentYear - 1;
} else {
    $auditQ = $currentQuarter - 1;
    $auditYear = $currentYear;
}

$auditString = "Q{$auditQ} {$auditYear}";
?>

<div class="container py-5">
    
    <div class="row mb-5 align-items-end">
        <div class="col-lg-8">
            <h6 class="text-uppercase text-danger letter-spacing-2 fw-bold mb-2">Governance</h6>
            <h1 class="display-4 fw-bold text-uppercase" style="font-family: 'Impact', sans-serif;">
                Entity Structure
            </h1>
            <p class="lead text-muted font-monospace border-start border-4 border-danger ps-3">
                Current organization following the 2019 Asset Acquisition of Aethelgard Holdings (f/k/a Omni-Global Media Corp).
            </p>
        </div>
        <div class="col-lg-4 text-lg-end">
            <div class="badge bg-black text-white p-3 rounded-0 font-monospace border border-secondary shadow-sm">
                <div class="d-flex align-items-center gap-3">
                    <div class="text-end">
                        <div class="text-success small fw-bold text-uppercase" style="font-size: 0.7rem;">Status: CLEAR</div>
                        <div class="fs-6">Last Audit: <?php echo $auditString; ?></div>
                    </div>
                    <i class="fa-solid fa-file-circle-check fa-2x text-success"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="card bg-dark text-white border-0 shadow-lg mb-5">
        <div class="card-header bg-black py-3 border-bottom border-secondary">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h4 class="mb-0 text-uppercase fw-bold"><i class="fa-solid fa-crown me-2 text-warning"></i>The Parent</h4>
                </div>
                <div class="col-md-6 text-md-end font-monospace text-white-50 small">
                    Engine Room Records, LLC (Delaware)
                </div>
            </div>
        </div>
        <div class="card-body p-4">
            <p class="card-text">
                The primary holding company. Maintains sole ownership of all intellectual property, physical assets, and subsidiary equity. 
                Functions as the central treasury and legal shield for the ecosystem.
            </p>
            
            <div class="accordion accordion-flush mb-3" id="entityHistory">
                <div class="accordion-item bg-transparent">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed bg-transparent text-white-50 shadow-none p-0 fst-italic small" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            <i class="fa-solid fa-history me-2"></i>Entity History: VA (1992) &rarr; DE (2015)
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#entityHistory">
                        <div class="accordion-body text-white-50 small ps-0">
                            <p class="mb-2">
                                Originally organized as a Virginia LLC in Blacksburg, VA (1992). Holly O'Connell famously resisted moving the entity for two decades, citing "sentimental value" and "unnecessary fees."
                            </p>
                            <p class="mb-0">
                                <strong>The Shift (2015):</strong> Ahead of the "Re-Ignition" World Tour, General Counsel Marcus Thorne argued that Virginia law could not sufficiently protect the family's personal assets (specifically the 2012 Lottery Trust) from international liability lawsuits. Holly agreed to the redomestication on one condition: she would take the Delaware Bar Exam herself to ensure she could personally audit the new registered agents. She passed on her first attempt in July 2015.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-3 mt-2">
                <div class="col-md-3">
                    <div class="p-3 bg-white text-dark rounded-1 text-center">
                        <div class="h2 fw-bold mb-0">100%</div>
                        <div class="small text-uppercase fw-bold">Solvent</div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="p-3 border border-secondary rounded-1 h-100 d-flex align-items-center">
                        <i class="fa-duotone fa-gavel me-3 fs-4 text-secondary"></i>
                        <span class="small font-monospace">Authorized by: Holly O'Connell (CEO)<br>Registered Agent: Thorne Legal Group, Wilmington DE</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4 mb-5">
        
        <div class="col-lg-4">
            <div class="card h-100 border-top border-5 border-success shadow-sm">
                <div class="card-body">
                    <h5 class="fw-bold text-uppercase text-success mb-3">
                        <i class="fa-solid fa-building me-2"></i>JMC Management, LLC
                    </h5>
                    <p class="small text-muted mb-3">
                        <strong>Doing Business As:</strong> The Jessica Miller Center
                    </p>
                    <ul class="list-group list-group-flush small">
                        <li class="list-group-item px-0 d-flex justify-content-between">
                            <span>Role:</span>
                            <strong>Facilities & Operations</strong>
                        </li>
                        <li class="list-group-item px-0 d-flex justify-content-between">
                            <span>Asset Type:</span>
                            <strong>Commercial Leasehold</strong>
                        </li>
                        <li class="list-group-item px-0">
                            <strong>Note:</strong> Holds the 20-year lease and exclusive signage rights for 1000 Wilshire Blvd (formerly "Omni Tower"). 
                            <br><em class="text-danger">We do not own the building; we just put our name on it.</em>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card h-100 border-top border-5 border-primary shadow-sm">
                <div class="card-body">
                    <h5 class="fw-bold text-uppercase text-primary mb-3">
                        <i class="fa-solid fa-truck-fast me-2"></i>Engine Room Logistics
                    </h5>
                    <p class="small text-muted mb-3">
                        <strong>The Fleet</strong>
                    </p>
                    <ul class="list-group list-group-flush small">
                        <li class="list-group-item px-0 d-flex justify-content-between">
                            <span>Role:</span>
                            <strong>Transport & Security</strong>
                        </li>
                        <li class="list-group-item px-0 d-flex justify-content-between">
                            <span>Assets:</span>
                            <strong>12 Specialized Vehicles</strong>
                        </li>
                        <li class="list-group-item px-0">
                            <strong>Note:</strong> Acquired from Omni-Global liquidation. Retrofitted for neurodivergent sensory needs.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card h-100 border-top border-5 border-secondary bg-light opacity-75">
                <div class="card-body">
                    <h5 class="fw-bold text-uppercase text-secondary mb-3">
                        <i class="fa-solid fa-tombstone me-2"></i>Aethelgard Holdings
                    </h5>
                    <p class="small text-muted mb-3">
                        <strong>f/k/a Omni-Global Media Corp.</strong>
                    </p>
                    <div class="alert alert-danger py-2 small fw-bold text-center">
                        <i class="fa-solid fa-ban me-2"></i>NON-OPERATING ENTITY
                    </div>
                    <p class="small text-muted mb-0">
                        The "Bad Bank." This entity exists solely to house the toxic debt and unresolved lawsuits of the former Omni-Global brand. It has no assets, no employees, and no future.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10">
            <h3 class="h5 fw-bold text-uppercase border-bottom pb-2 mb-4">
                <i class="fa-duotone fa-scale-unbalanced me-2 text-info"></i>The "Paper Tiger" Comparison (2018)
            </h3>
            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle">
                    <thead class="table-dark text-center text-uppercase small">
                        <tr>
                            <th width="40%">Metric</th>
                            <th width="30%" class="bg-danger text-white">Omni-Global Media</th>
                            <th width="30%" class="bg-success text-white">Engine Room Records</th>
                        </tr>
                    </thead>
                    <tbody class="font-monospace small">
                        <tr>
                            <td class="fw-bold">Global Offices</td>
                            <td class="text-center text-danger">1 (Leased)</td>
                            <td class="text-center text-success">3 (Owned/Leased)</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Full-Time Employees</td>
                            <td class="text-center text-danger">12</td>
                            <td class="text-center text-success">45</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Debt-to-Equity Ratio</td>
                            <td class="text-center text-danger">450% (Insolvent)</td>
                            <td class="text-center text-success">0% (Debt Free)</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Building Ownership</td>
                            <td class="text-center text-danger">Signage Rights Only</td>
                            <td class="text-center text-muted">N/A</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="text-muted fst-italic small text-center mt-2">
                *Data retrieved from 2018 Bankruptcy Discovery Documents.
            </p>
        </div>
    </div>

</div>