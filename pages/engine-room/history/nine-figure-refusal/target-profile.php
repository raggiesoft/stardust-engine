<?php
// pages/story/nine-figure-refusal/target-profile.php
// The Enemy's Playbook.
// UPDATED: Offer adjusted to $500M (The "Error") to set up the slash in the next chapter.

$pageTitle = "Confidential Brief: Project GOLDEN GOOSE - Omni-Global";
?>

<style>
    /* OMNI-GLOBAL THEME: Sterile, Corporate */
    .omni-doc {
        font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
        background-color: #f8f9fa; 
        color: #333;
        border-top: 5px solid #0d6efd; 
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
        font-size: clamp(4rem, 10vw, 8rem);
        color: rgba(0,0,0,0.05);
        font-weight: bold;
        text-transform: uppercase;
        z-index: 0;
        pointer-events: none;
        white-space: nowrap;
    }

    /* DARK MODE OVERRIDES */
    [data-bs-theme="dark"] .omni-doc {
        background-color: #0b0c10;
        color: #e0e0e0;
        border-top-color: #0d6efd;
    }
    [data-bs-theme="dark"] .omni-header { border-bottom-color: #333; }
    [data-bs-theme="dark"] .watermark { color: rgba(255, 255, 255, 0.03); }
    [data-bs-theme="dark"] .bg-white { background-color: #15171e !important; }
    [data-bs-theme="dark"] .bg-light { background-color: #1c2029 !important; }
    [data-bs-theme="dark"] .table { --bs-table-bg: transparent; --bs-table-color: #e0e0e0; border-color: #333; }
</style>

<div class="omni-doc min-vh-100 position-relative">
    
    <div class="watermark">CONFIDENTIAL</div>

    <div class="container py-5 position-relative" style="z-index: 1;">
        
        <div class="row align-items-end omni-header">
            <div class="col-md-8">
                <h1 class="h3 fw-bold text-uppercase mb-0" style="color: #0d6efd; letter-spacing: -0.5px;">Omni-Global Media Corp.</h1>
                <small class="text-muted">Mergers & Acquisitions Division // North America</small>
            </div>
            <div class="col-md-4 text-md-end">
                <div class="badge bg-danger text-uppercase px-3 py-2">Internal Use Only</div>
                <div class="small font-monospace mt-2 text-muted">ID: M&A-2018-ERR-001</div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-lg-8">
                <h2 class="h5 text-uppercase border-bottom border-primary pb-2 mb-4 fw-bold">Executive Summary</h2>
                <div class="bg-white p-4 border shadow-sm rounded-0">
                    <div class="row">
                        <div class="col-md-3 fw-bold text-secondary">TARGET:</div>
                        <div class="col-md-9 fw-bold">ENGINE ROOM RECORDS, LLC</div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3 fw-bold text-secondary">VALUATION:</div>
                        <div class="col-md-9 text-success fw-bold">
                            $38,000,000 (Adj. Market Value)
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3 fw-bold text-secondary">OFFER:</div>
                        <div class="col-md-9 text-primary fw-bold">
                            $500,000,000 (Algorithmic Output - Auto-Generated)
                        </div>
                    </div>
                    <div class="mt-3 p-3 bg-light border-start border-4 border-primary">
                        <p class="mb-0 small">
                            <strong>The Plan:</strong> Acquire 100% of IP. Implement "Project Slice" to cut the 15-minute track <em>"Ad Astra"</em> into four playlist-friendly singles. Projected revenue increase: <strong>600% in Year 1.</strong>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="bg-warning bg-opacity-10 border border-warning p-3 h-100">
                    <h6 class="text-uppercase fw-bold text-warning-emphasis mb-3"><i class="fa-duotone fa-eye me-2"></i>Visual Audit (09:00 AM)</h6>
                    <ul class="list-unstyled small font-monospace text-muted mb-0">
                        <li class="mb-2"><strong>Transport:</strong> Public Transit (Civic-Rapid Bus). No private driver.</li>
                        <li class="mb-2"><strong>Security:</strong> None observable.</li>
                        <li class="mb-2"><strong>Attire (Wright/Wright):</strong> Subjects observed in faded <strong>Maroon & Orange</strong> university athletic tees ("Commonwealth Polytechnic").</li>
                        <li class="mt-3 text-dark fw-bold">
                            <i class="fa-solid fa-arrow-right me-2"></i>ANALYSIS:
                        </li>
                        <li class="fst-italic">
                            "Subjects display 'Student/Hobbyist' aesthetic. University gear suggests amateur mindset. Lack of suits indicates they cannot afford high-end legal counsel. They will be intimidated by the boardroom setting."
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h2 class="h5 text-uppercase border-bottom border-danger pb-2 mb-4 fw-bold text-danger">
                    <i class="fa-solid fa-triangle-exclamation me-2"></i>Risk Assessment: The Board
                </h2>
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
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Tyler & Evan Wright</td>
                                <td>Rhythm Section</td>
                                <td>
                                    <span class="badge bg-success mb-1">THE WEAK LINK</span><br>
                                    <strong>Profile:</strong> Dressed in athletic wear (CPI Tees). Likely unsophisticated regarding finance.<br>
                                    <strong>Strategy:</strong> Bypass Holly. Appeal to their male ego ("Take charge of the band"). They will likely vote for the cash payout to upgrade their lifestyle.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row mt-5 pt-4 border-top border-secondary border-opacity-25 align-items-center">
            <div class="col-4">
                <button class="btn btn-outline-secondary rounded-pill disabled" aria-disabled="true">
                    <i class="fa-solid fa-arrow-left me-2"></i>Previous
                </button>
            </div>
            <div class="col-4 text-center">
                <a href="/engine-room/history/nine-figure-refusal/overview" class="btn btn-outline-primary rounded-pill">
                    <i class="fa-duotone fa-list-tree me-2"></i>Overview
                </a>
            </div>
            <div class="col-4 text-end">
                <a href="/engine-room/history/nine-figure-refusal/the-bus-memo" class="btn btn-primary rounded-pill shadow-sm">
                    Next: The Bus Memo <i class="fa-solid fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>

    </div>
    
    <div class="bg-light border-top py-3 text-center small text-muted font-monospace mt-5">
        Generated: August 30, 2018 // Omni-Global Secure Server
    </div>

</div>