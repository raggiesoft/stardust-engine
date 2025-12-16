<?php
// pages/story/nine-figure-refusal/target-profile.php
// The Enemy's Playbook.
// This is the document Jameson Ford was holding when he walked into the meeting.

$pageTitle = "Confidential Brief: Project GOLDEN GOOSE - Omni-Global";
?>

<style>
    /* OMNI-GLOBAL THEME: Sterile, Corporate */
    .omni-doc {
        font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
        background-color: #f8f9fa; /* Light mode bg */
        color: #333;
        border-top: 5px solid #0d6efd; /* Omni Blue */
        transition: background-color 0.3s ease, color 0.3s ease;
    }
    
    .omni-header {
        border-bottom: 2px solid #ccc;
        padding-bottom: 1rem;
        margin-bottom: 2rem;
    }

    .watermark {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) rotate(-45deg);
        font-size: clamp(4rem, 10vw, 8rem); /* Responsive size */
        color: rgba(0,0,0,0.05);
        font-weight: bold;
        text-transform: uppercase;
        z-index: 0;
        pointer-events: none;
        white-space: nowrap;
    }

    .stat-box {
        background: #fff;
        border: 1px solid #e0e0e0;
        padding: 1.5rem;
        height: 100%;
    }

    .stat-label {
        font-size: 0.75rem;
        text-transform: uppercase;
        color: #6c757d;
        letter-spacing: 1px;
        font-weight: 700;
    }

    .stat-value {
        font-size: 1.5rem;
        font-weight: 300;
        color: #0d6efd;
    }

    /* --- DARK MODE OVERRIDES --- */
    [data-bs-theme="dark"] .omni-doc {
        background-color: #0b0c10; /* Deep dark blue/black */
        color: #e0e0e0;
        border-top-color: #0d6efd;
    }

    [data-bs-theme="dark"] .omni-header {
        border-bottom-color: #333;
    }

    [data-bs-theme="dark"] .watermark {
        color: rgba(255, 255, 255, 0.03); /* Faint white watermark */
    }

    [data-bs-theme="dark"] .stat-box {
        background-color: #15171e; /* Slightly lighter than body */
        border-color: #2c3038;
    }

    [data-bs-theme="dark"] .stat-label {
        color: #adb5bd;
    }

    /* Force Table Transparency in Dark Mode */
    [data-bs-theme="dark"] .table {
        --bs-table-bg: transparent;
        --bs-table-color: #e0e0e0;
        border-color: #333;
    }
    
    /* Ensure specifically light backgrounds used in the design turn dark */
    [data-bs-theme="dark"] .bg-white {
        background-color: #15171e !important;
    }
    [data-bs-theme="dark"] .bg-light {
        background-color: #1c2029 !important;
    }
</style>

<div class="omni-doc min-vh-100 position-relative">
    
    <div class="watermark">CONFIDENTIAL</div>

    <div class="container py-5 position-relative" style="z-index: 1;">
        
        <div class="row align-items-end omni-header">
            <div class="col-md-8">
                <h1 class="h3 fw-bold text-uppercase mb-0" style="color: #0d6efd; letter-spacing: -0.5px;">Omni-Global Media</h1>
                <small class="text-muted">Mergers & Acquisitions Division // North America</small>
            </div>
            <div class="col-md-4 text-md-end">
                <div class="badge bg-danger text-uppercase px-3 py-2">Internal Use Only</div>
                <div class="small font-monospace mt-2 text-muted">ID: M&A-2018-ERR-001</div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-lg-12">
                <h2 class="h5 text-uppercase border-bottom border-primary pb-2 mb-4 fw-bold">Executive Summary</h2>
                <div class="bg-white p-4 border shadow-sm rounded-0">
                    <div class="row">
                        <div class="col-md-2 fw-bold text-secondary">TARGET:</div>
                        <div class="col-md-10 fw-bold">ENGINE ROOM RECORDS, LLC</div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-2 fw-bold text-secondary">ASSET CLASS:</div>
                        <div class="col-md-10">Intellectual Property / Master Recordings / Publishing Rights</div>
                    </div>
                    <div class="row opacity-50 text-muted" style="text-decoration: line-through;">
                        <div class="col-md-2 small">INITIAL MODEL:</div>
                        <div class="col-md-10 small">
                            $500,000,000 <span class="badge bg-secondary ms-2" style="text-decoration: none;">ERROR: MODEL V1 (REVOKED)</span>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-2 fw-bold text-secondary">VALUATION:</div>
                        <div class="col-md-10 text-success fw-bold">
                            $38,000,000 (Est. Market Value)
                            <i class="fa-solid fa-circle-info ms-2 text-muted" data-bs-toggle="tooltip" title="Adjusted for 'Visual Audit' Risk Factors"></i>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-2 fw-bold text-secondary">OFFER:</div>
                        <div class="col-md-10 text-primary fw-bold">$150,000,000 (All-Cash "Shock & Awe" Strategy)</div>
                    </div>
                    <div class="mt-3 p-3 bg-light border-start border-4 border-primary">
                        <p class="mb-0 small">
                            <strong>The Opportunity:</strong> Target is a "Sleeping Giant." A fiercely independent catalog with zero debt and high fan retention. Currently undermonetized due to "Artist Integrity" restrictions (no sync licensing, no streaming edits).
                            <br><br>
                            <strong>The Plan:</strong> Acquire 100% of IP. Implement "Project Slice" to cut the 15-minute track <em>"Ad Astra"</em> into four playlist-friendly singles. Projected revenue increase: <strong>600% in Year 1.</strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-md-3">
                <div class="stat-box">
                    <div class="stat-label">Debt Load</div>
                    <div class="stat-value text-success">$0.00</div>
                    <small class="text-muted">Self-Funded via "War Chest"</small>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <div class="stat-label">Global Streams</div>
                    <div class="stat-value">850M+</div>
                    <small class="text-muted">Organic / Zero Ad Spend</small>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <div class="stat-label">Master Rights</div>
                    <div class="stat-value">100%</div>
                    <small class="text-muted">Owned by LLC</small>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <div class="stat-label">Risk Level</div>
                    <div class="stat-value text-danger">EXTREME</div>
                    <small class="text-muted">Governance Structure</small>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h2 class="h5 text-uppercase border-bottom border-danger pb-2 mb-4 fw-bold text-danger">
                    <i class="fa-solid fa-triangle-exclamation me-2"></i>Risk Assessment: The Board
                </h2>
                <p class="text-muted mb-4">
                    The Target is not a traditional corporation. It is an insular "Family Unit" operating under a 1992 Charter designed to prevent acquisition.
                </p>

                <div class="table-responsive">
                    <table class="table table-bordered align-middle">
                        <thead class="bg-light">
                            <tr class="text-uppercase small font-monospace">
                                <th width="20%">Stakeholder</th>
                                <th width="20%">Role</th>
                                <th>Psychological Profile / Leverage Strategy</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fw-bold">Holly O'Connell</td>
                                <td>CEO / Legal</td>
                                <td>
                                    <span class="badge bg-danger mb-1">THE OBSTACLE</span><br>
                                    Highly litigious. "Protective Matriarch" complex.
                                    <br><strong>Note:</strong> DO NOT ATTEMPT TO INTIMIDATE. She has beaten Apex Records (1992) and Ticket-Trust (2004) in court.
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Ryan O'Connell</td>
                                <td>Founder / Lead</td>
                                <td>
                                    <span class="badge bg-warning text-dark mb-1">THE WILDCARD</span><br>
                                    Motivated by security, not luxury. Paraplegic (T10). 
                                    <br><strong>Strategy:</strong> Emphasize the "Financial Safety Net" for his long-term care costs. Frame the sale as "responsible future-proofing."
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Cassidy O'Connell</td>
                                <td>Songwriter</td>
                                <td>
                                    <span class="badge bg-secondary mb-1">VOLATILE</span><br>
                                    Autistic. Extremely attached to "artistic purity."
                                    <br><strong>Warning:</strong> Do not discuss editing/remixing <em>Ad Astra</em> in her presence. It triggers an adverse response.
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Tyler & Evan Wright</td>
                                <td>Rhythm Section</td>
                                <td>
                                    <span class="badge bg-success mb-1">THE WEAK LINK</span><br>
                                    Cousins. Perceived as "The Muscle."
                                    <br><strong>Strategy:</strong> <em>Active.</em> VP Ford has initiated contact with Tyler Wright directly, bypassing Holly. We believe an appeal to their male ego ("Take charge of the band") will fracture the voting block.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="alert alert-warning border-warning mt-3 bg-opacity-10">
                    <strong><i class="fa-solid fa-flag me-2"></i>VP Ford Note:</strong> 
                    "The sisters are emotional. The brother is tired. The cousins are followers. If we put $150M on the table in cold cash, the 'Family Unit' will dissolve within 10 minutes. This is a guaranteed close."
                </div>

            </div>
        </div>

    </div>
    
    <div class="bg-light border-top py-3 text-center small text-muted font-monospace">
        Generated: August 30, 2018 // Omni-Global Secure Server
    </div>

</div>