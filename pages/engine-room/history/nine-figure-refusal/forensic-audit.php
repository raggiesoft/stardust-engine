<?php
// pages/engine-room/history/nine-figure-refusal/forensic-audit.php
// EVIDENCE ITEM #00-B: Holly's "Homework"
// Context: Annotated SEC filings showing Omni-Global's insolvency.
// UPDATED: Added Narrative Navigation (Chapter 2 Start)

$pageTitle = "Forensic Audit: Omni-Global Corp - Evidence Item #00-B";
?>

<style>
    /* DOCUMENT THEME: The "Red Pen" Audit */
    .audit-paper {
        background-color: #fdfbf7; 
        font-family: 'Times New Roman', serif;
        color: #000;
        position: relative;
        overflow: hidden; 
    }

    .sec-header {
        text-align: center;
        text-transform: uppercase;
        border-bottom: 2px solid #000;
        margin-bottom: 2rem;
        padding-bottom: 1rem;
    }

    .line-item {
        border-bottom: 1px dotted #ccc;
        padding: 4px 0;
        display: flex;
        justify-content: space-between;
        align-items: end;
        position: relative; 
    }
    
    .line-item-label { font-size: 0.9rem; }
    .line-item-value { font-family: 'Courier New', monospace; font-weight: bold; }

    .red-pen {
        font-family: 'Kalam', cursive; 
        color: #dc3545;
        font-weight: bold;
        font-size: 1.1rem;
        position: absolute;
        z-index: 10;
        text-shadow: 1px 1px 0px rgba(255,255,255,0.8);
        white-space: normal;
        line-height: 1.1;
        pointer-events: none;
    }

    .circle-highlight {
        border: 3px solid #dc3545;
        border-radius: 50% 60% 40% 70% / 50% 50% 60% 50%;
        position: absolute;
        pointer-events: none;
        opacity: 0.9;
    }

    .sticky-note {
        background-color: #ffeb3b;
        color: #000;
        padding: 15px;
        font-family: 'Kalam', cursive;
        transform: rotate(-1deg);
        box-shadow: 3px 3px 8px rgba(0,0,0,0.2);
        position: relative;
        z-index: 20;
    }

    [data-bs-theme="dark"] .audit-paper {
        filter: invert(1) hue-rotate(180deg);
    }
    [data-bs-theme="dark"] .audit-container-wrapper {
        background-color: #222;
        padding: 20px;
        border-radius: 10px;
    }
</style>

<div class="container py-5 audit-container-wrapper">
    
    <div class="row justify-content-center mb-5">
        <div class="col-lg-8 text-center">
            <span class="badge bg-warning text-dark rounded-pill px-3 py-2 mb-3 text-uppercase letter-spacing-1 border border-warning">
                <i class="fa-duotone fa-magnifying-glass-dollar me-2"></i>Defense Exhibit A
            </span>
            <h1 class="display-4 fw-bold text-white mb-2" style="font-family: 'Impact', sans-serif;">
                HOLLY'S HOMEWORK
            </h1>
            <p class="lead text-muted font-monospace">
                The night before the meeting, Holly O'Connell (CFA, Forensic Accountant) downloaded the public 10-Q of <strong>Omni-Global Media Corp.</strong> This is what she saw.
            </p>
        </div>
    </div>

    <div class="row justify-content-center mb-4">
        <div class="col-lg-10">
            <div class="card bg-dark border-secondary mb-3">
                <div class="card-body d-flex align-items-start p-3">
                    <i class="fa-duotone fa-user-tie text-danger fs-1 me-3"></i>
                    <div>
                        <h5 class="text-danger fw-bold text-uppercase mb-1">Frost's Fatal Error</h5>
                        <p class="text-secondary small mb-0">
                            <strong>The Profiling:</strong> Holly O'Connell is 49, but easily passes for 35. Frost looked at her—blonde, polished, quiet—and assumed she was a "Trophy Manager" or Ryan's girlfriend. He handed her the tablet assuming she would just swipe through the pretty graphics. He didn't know she wrote the textbook on forensic auditing.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
            
            <div class="card border-0 shadow-lg audit-paper p-5 mb-5">
                
                <div class="position-absolute top-0 end-0 p-4">
                    <div class="border border-4 border-danger text-danger p-2 fw-bold text-uppercase fs-5 opacity-50" 
                         style="font-family: 'Courier New', monospace; transform: rotate(15deg);">
                        SEC EDGAR<br>FILING: 10-Q<br>AUG 2018
                    </div>
                </div>

                <div class="sec-header">
                    <h4>UNITED STATES SECURITIES AND EXCHANGE COMMISSION</h4>
                    <h5 class="fw-bold mt-3">FORM 10-Q</h5>
                    <hr class="my-3">
                    <h2 class="fw-bold display-6">OMNI-GLOBAL MEDIA CORP.</h2>
                </div>

                <div class="row mt-4">
                    <div class="col-12">
                        <h5 class="fw-bold border-bottom border-dark pb-1 mb-3">CONSOLIDATED BALANCE SHEETS (In Thousands)</h5>
                        
                        <h6 class="fw-bold mt-3">ASSETS</h6>
                        
                        <div class="line-item">
                            <span class="line-item-label">Cash and Cash Equivalents</span>
                            <span class="line-item-value">$22,400</span>
                            <div class="red-pen" style="top: -20px; left: 40%; transform: rotate(-5deg); max-width: 250px;">
                                <i class="fa-solid fa-arrow-left me-1"></i> Payroll is $18M/mo. Running on fumes.
                            </div>
                        </div>

                        <div class="line-item mt-2">
                            <span class="line-item-label">Goodwill & Intangible Assets</span>
                            <span class="line-item-value">$900,000</span>
                            <div class="circle-highlight" style="top: -5px; right: -10px; width: 110px; height: 140%;"></div>
                            <div class="red-pen text-end" style="top: 30px; right: 0; color: #dc3545; transform: rotate(0deg); max-width: 150px;">
                                <i class="fa-solid fa-arrow-up me-1"></i> FAKE VALUE.<br>Legacy IP.
                            </div>
                        </div>

                        <h6 class="fw-bold mt-5">LIABILITIES</h6>

                        <div class="line-item">
                            <span class="line-item-label">Revolving Credit Facility (Variable Rate)</span>
                            <span class="line-item-value">$348,500</span>
                            <div class="red-pen" style="top: -5px; left: 60%; color: #dc3545; max-width: 150px;">
                                <i class="fa-solid fa-arrow-left me-1"></i> SEE NOTE 8.
                            </div>
                        </div>

                        <div class="line-item border-top border-dark border-2 mt-1 py-2">
                            <span class="line-item-label fw-bold">TOTAL LONG-TERM DEBT</span>
                            <span class="line-item-value text-danger">$840,000</span>
                        </div>

                    </div>
                </div>
            </div>

            <div class="card border-0 shadow-lg audit-paper p-5">
                
                <div class="position-absolute top-0 start-0 p-4">
                    <div class="border border-2 border-dark p-1 px-2 fw-bold text-uppercase small font-monospace">
                        Page 42
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-12">
                        <h5 class="fw-bold border-bottom border-dark pb-1 mb-3">NOTES TO CONSOLIDATED FINANCIAL STATEMENTS</h5>
                        
                        <p class="fw-bold text-uppercase mb-2">Note 8. Long-Term Debt</p>
                        <p class="small text-muted mb-3">The following table summarizes the Company’s outstanding debt obligations (in thousands):</p>

                        <table class="table table-sm table-borderless small font-monospace" style="border: 1px solid #000;">
                            <thead style="border-bottom: 2px solid #000;">
                                <tr>
                                    <th width="40%">Instrument</th>
                                    <th width="20%" class="text-end">Capacity</th>
                                    <th width="20%" class="text-end">Outstanding</th>
                                    <th width="20%" class="text-end">Maturity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Senior Secured Notes</td>
                                    <td class="text-end">N/A</td>
                                    <td class="text-end">$400,000</td>
                                    <td class="text-end">2020</td>
                                </tr>
                                <tr class="bg-warning bg-opacity-25">
                                    <td class="fw-bold">Revolving Credit Facility</td>
                                    <td class="text-end fw-bold">$350,000</td>
                                    <td class="text-end fw-bold text-danger">$348,500</td>
                                    <td class="text-end">2019</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="red-pen" style="top: 155px; right: 80px; transform: rotate(-2deg);">
                            <i class="fa-solid fa-arrow-up me-1"></i> MAXED OUT.
                        </div>

                        <p class="small text-muted mt-3 fst-italic">
                            *As of June 30, 2018, the Company had $1.5 million in remaining borrowing capacity under the Revolving Credit Facility.
                        </p>

                        <div class="sticky-note mt-4 w-75 mx-auto">
                            <h5 class="fw-bold text-uppercase mb-2 text-danger">The Reality:</h5>
                            <ul class="list-unstyled fw-bold mb-0">
                                <li>1. Capacity: $350M</li>
                                <li>2. Used: $348.5M</li>
                                <li>3. <strong>Remaining: $1.5M</strong> (Less than 3 days of operating cash).</li>
                                <li class="mt-2 text-danger text-uppercase">>> HE IS BROKE.</li>
                            </ul>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="row mt-5 pt-4 border-top border-secondary border-opacity-25 align-items-center">
        <div class="col-4">
            <a href="/engine-room/history/nine-figure-refusal/the-bus-memo" class="btn btn-outline-secondary rounded-pill">
                <i class="fa-solid fa-arrow-left me-2"></i>Previous
            </a>
        </div>
        <div class="col-4 text-center">
            <a href="/engine-room/history/nine-figure-refusal" class="btn btn-outline-primary rounded-pill">
                <i class="fa-duotone fa-list-tree me-2"></i>Overview
            </a>
        </div>
        <div class="col-4 text-end">
            <a href="/engine-room/history/nine-figure-refusal/the-offer-letter" class="btn btn-primary rounded-pill shadow-sm">
                Next: The Offer Letter <i class="fa-solid fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>

</div>