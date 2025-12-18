<?php
// pages/engine-room/history/nine-figure-refusal/the-smoking-gun.php
// EVIDENCE ITEM #00-C: The Fraudulent Prospectus (The "Smoking Gun")
// Context: The physical mailer sent to the family's unlisted home address.
// Addressed to Tyler Wright (because Frost assumed the man was the decision maker).

$pageTitle = "Evidence #00-C: The Smoking Gun - Engine Room History";
?>

<style>
    /* Prospectus Styling */
    .prospectus-paper {
        background-color: #fcfcfc;
        background-image: linear-gradient(to bottom right, #ffffff, #f0f0f0);
        color: #333;
        font-family: 'Times New Roman', serif;
        position: relative;
        /* CRITICAL FIX: Overflow visible allows notes to hang off the edge */
        overflow: visible; 
        box-shadow: 0 1rem 3rem rgba(0,0,0,0.175)!important;
    }

    /* Responsive Annotation System */
    .target-text {
        position: relative;
        display: inline-block;
        white-space: normal;
        cursor: help;
    }

    .circle-sketch {
        border: 2px solid #d63384; /* Hot Pink Marker */
        border-radius: 50% 40% 60% 30% / 40% 50% 60% 50%; /* Organic Shape */
        position: absolute;
        top: -5px;
        bottom: -5px;
        left: -10px;
        right: -10px;
        pointer-events: none;
    }

    .holly-note {
        font-family: 'Kalam', cursive;
        color: #d63384;
        font-weight: bold;
        font-size: 0.95rem;
        line-height: 1.2;
        position: absolute;
        width: 260px; /* Width of the handwritten note */
        z-index: 10;
        text-shadow: 1px 1px 0px #fff;
        
        /* Default Desktop Position: Hanging in the right margin */
        left: 105%; 
        top: -15px;
        transform: rotate(-3deg);
    }

    /* Mobile Breakpoint: Stack notes below text */
    @media (max-width: 1200px) {
        .holly-note {
            position: relative;
            display: block;
            left: 0 !important;
            top: 10px !important;
            margin-bottom: 30px; /* Space between notes */
            width: 100%;
            transform: rotate(0deg);
            background: rgba(214, 51, 132, 0.05);
            padding: 10px;
            border-left: 4px solid #d63384;
            border-radius: 4px;
        }
    }

    /* USPS Indicia */
    .usps-indicia {
        border: 1px solid #333;
        padding: 5px;
        font-family: 'Arial Narrow', sans-serif;
        font-size: 0.6rem;
        text-align: center;
        width: 100px;
        line-height: 1.1;
    }

    /* Exhibit B Styling */
    .title-search-paper {
        background-color: #eef2f5;
        border: 1px solid #cbd5e0;
        font-family: 'Courier New', monospace;
    }
</style>

<div class="container py-5">
    
    <div class="row justify-content-center mb-5">
        <div class="col-lg-8 text-center">
            <span class="badge bg-danger text-white rounded-pill px-3 py-2 mb-3 text-uppercase letter-spacing-1 shadow-glow border border-danger">
                <i class="fa-duotone fa-envelope-open-text me-2"></i>Evidence Item #00-C
            </span>
            <h1 class="display-4 fw-bold text-white mb-2 text-uppercase" style="font-family: 'Impact', sans-serif;">
                THE SMOKING GUN
            </h1>
            <p class="lead text-muted font-monospace">
                "He tried to mail a scam to my cousin because he didn't respect me. He forgot we live in the same house."
            </p>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10">
            
            <div class="alert alert-dark border-start border-4 border-warning bg-black text-white p-4 mb-5 shadow-lg">
                <div class="d-flex">
                    <div class="me-3">
                        <i class="fa-solid fa-user-secret fa-2x text-warning"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold text-uppercase text-warning mb-1">Why this document is terrifying</h5>
                        <p class="mb-0 small text-white-50">
                            <strong>1. The Target:</strong> The letter is addressed to <strong>Tyler Wright</strong> (The Drummer), confirming Frost's bias that "the men" must be the decision makers. Frost bypassed the CEO (Holly) entirely.
                            <br>
                            <strong>2. The Mistake:</strong> Frost didn't know the family lives together in a communal "Fortress." Holly screens all incoming mail. Frost literally mailed his felony confession directly to the Forensic Accountant he was trying to circumvent.
                        </p>
                    </div>
                </div>
            </div>

            <div class="prospectus-paper shadow-lg p-5 mx-auto position-relative" style="max-width: 850px; min-height: 1100px;">
                
                <div class="position-absolute top-0 end-0 m-4 opacity-75">
                    <div class="usps-indicia">
                        PRESORTED<br>
                        FIRST CLASS MAIL<br>
                        <strong>U.S. POSTAGE PAID</strong><br>
                        LOS ANGELES, CA<br>
                        PERMIT NO. 4021
                    </div>
                </div>

                <div class="position-absolute" style="top: 120px; left: 80px; font-family: 'Courier New', monospace; font-size: 0.9rem; opacity: 0.8;">
                    <span class="target-text">
                        Mr. Tyler Wright
                        <span class="circle-sketch"></span>
                        <span class="holly-note" style="top: -5px; width: 220px;">
                            <i class="fa-solid fa-arrow-left me-1"></i> <strong>NOTE:</strong> Addressed to Tyler? Typical. He assumes the male drummer runs the finances. Joke's on him—I open the mail.
                        </span>
                    </span><br>
                    [REDACTED RESIDENTIAL ADDRESS]<br>
                    Blacksburg, VA 24060
                </div>

                <div class="text-center mt-5 mb-5 pt-5">
                    <div class="mb-2">
                        <i class="fa-solid fa-globe fa-3x" style="color: #1a237e;"></i>
                    </div>
                    <h2 class="fw-bold text-uppercase mb-0" style="color: #1a237e; letter-spacing: 2px;">OGM Capital</h2>
                    <p class="small text-uppercase text-muted letter-spacing-1 fw-bold">Private Wealth Division</p>
                    <hr class="w-25 mx-auto border-secondary opacity-25 my-4">
                    <h1 class="display-5 fw-bold fst-italic my-4" style="font-family: 'Playfair Display', serif;">
                        "An Invitation to the Inner Circle"
                    </h1>
                </div>

                <div class="px-4" style="font-size: 1.1rem; line-height: 1.8;">
                    
                    <p>Dear Mr. Wright,</p>
                    
                    <p>
                        Because of your distinguished status as a key partner in our upcoming acquisition, the Board of Directors has authorized a rare exception. We are inviting you to participate in our exclusive, pre-IPO investment vehicle: <strong>OGM Capital Partners IV.</strong>
                    </p>

                    <p>
                        Unlike traditional market funds, OGM Capital Partners IV offers:
                    </p>

                    <div class="ps-4 my-4 border-start border-2 border-dark">
                        
                        <div class="mb-5">
                            <h5 class="fw-bold text-dark mb-1">1. Asset-Backed Security</h5>
                            <p class="mb-0 text-secondary">
                                Your investment is 100% secured by our 
                                <span class="target-text">
                                    Wholly Owned Global Headquarters
                                    <span class="circle-sketch"></span>
                                    <span class="holly-note" style="width: 300px; z-index: 20;">
                                        <i class="fa-solid fa-arrow-left me-1"></i> <strong>LIE #1:</strong> They lease this! I know because <strong>I am the landlord.</strong> "Pacific Rim Properties" is a shell for the O'Connell Trust. They pay rent to <em>me</em>. (See Exhibit B)
                                    </span>
                                </span>
                                in Century City, valued at $120M.
                            </p>
                        </div>

                        <div class="mb-5">
                            <h5 class="fw-bold text-dark mb-1">2. Guaranteed Yield</h5>
                            <p class="mb-0 text-secondary">
                                We leverage our syndication library to provide a 
                                <span class="target-text">
                                    Risk-Free 12% Annual Return
                                    <span class="circle-sketch"></span>
                                    <span class="holly-note">
                                        <i class="fa-solid fa-arrow-left me-1"></i> <strong>FELONY:</strong> You cannot use the words "Risk-Free" in a prospectus. SEC Rule 156 violation.
                                    </span>
                                </span>
                                , paid quarterly.
                            </p>
                        </div>

                        <div class="mb-5">
                            <h5 class="fw-bold text-dark mb-1">3. Clean Balance Sheet</h5>
                            <p class="mb-0 text-secondary">
                                This fund operates 
                                <span class="target-text">
                                    independently of all corporate liabilities
                                    <span class="circle-sketch"></span>
                                    <span class="holly-note">
                                        <i class="fa-solid fa-arrow-left me-1"></i> <strong>PONZI SCHEME:</strong> This fund EXISTS to buy their toxic debt. It is the opposite of independent!
                                    </span>
                                </span>
                                , ensuring your principal is shielded from market volatility.
                            </p>
                        </div>

                        <div class="mb-5">
                            <h5 class="fw-bold text-dark mb-1">4. Strategic Embedded Presence</h5>
                            <p class="mb-0 text-secondary">
                                To ensure priority deal flow, OGM maintains active 
                                <span class="target-text">
                                    executive offices within the headquarters
                                    <span class="circle-sketch"></span>
                                    <span class="holly-note" style="width: 280px; top: 10px;">
                                        <i class="fa-solid fa-arrow-left me-1"></i> <strong>DELUSIONAL:</strong> I verified your credentials with Building Security at the major studios. OGM is listed as a "Visitor." They don't have offices; they have guest badges.
                                    </span>
                                </span>
                                of global media conglomerates.
                            </p>
                        </div>

                    </div>

                    <p>
                        This opportunity is strictly confidential. To secure your position, please wire funds to our 
                        <span class="target-text">
                            Cayman Islands Settlement Trust
                            <span class="circle-sketch"></span>
                            <span class="holly-note" style="width: 280px; top: 10px;">
                                <i class="fa-solid fa-arrow-left me-1"></i> <strong>MONEY LAUNDERING:</strong> I have an LL.M. in Tax. This is an illegal offshore shelter. Wiring funds here is a federal crime (18 USC § 1956).
                            </span>
                        </span>
                        by Friday.
                    </p>

                    <p class="mt-5">Sincerely,</p>

                    <div class="mt-4">
                        <div style="font-family: 'Great Vibes', cursive; font-size: 3rem; color: #1a237e; transform: rotate(-5deg); line-height: 1;">
                            Jameson Frost
                        </div>
                        <p class="fw-bold mb-0 mt-3 text-dark">Jameson Frost</p>
                        <p class="small text-muted text-uppercase">
                            <span class="target-text">
                                Vice President, Acquisitions & Private Wealth
                                <span class="circle-sketch"></span>
                                <span class="holly-note" style="width: 280px; top: 10px;">
                                    <i class="fa-solid fa-arrow-left me-1"></i> <strong>RESUME FRAUD:</strong> I pulled the 10-K. He is just "VP of Acquisitions." There is no "Private Wealth" division. He made it up to sound like a banker.
                                </span>
                            </span>
                        </p>
                    </div>

                </div>

                <div class="mt-5 pt-4 border-top text-center text-muted" style="font-size: 0.6rem;">
                    <p class="mb-1">OMNI-GLOBAL MEDIA CORP | 2000 AVENUE OF THE STARS | LOS ANGELES, CA 90067</p>
                    <p>PAST PERFORMANCE IS NOT INDICATIVE OF FUTURE RESULTS. (BUT WE'RE PRETTY SURE IT IS.)</p>
                </div>

                <div class="position-absolute bottom-0 end-0 p-5" style="pointer-events: none; opacity: 0.85;">
                    <div class="border border-4 border-danger text-danger p-2 fw-bold text-uppercase text-center" 
                         style="font-family: 'Courier New', monospace; font-size: 1.5rem; transform: rotate(-15deg); mix-blend-mode: multiply;">
                        EVIDENCE #00-C<br>
                        USPIS CASE #19-402<br>
                        <span style="font-size: 1rem;">SEIZED: SEPT 14, 2018</span>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-lg-10">
            <h3 class="h4 fw-bold text-white border-bottom border-secondary pb-2 mb-4">
                Exhibit B: The Landlord Disclosure
            </h3>
            
            <div class="card bg-black border-secondary shadow-lg">
                <div class="row g-0">
                    <div class="col-md-5 bg-dark p-4 border-end border-secondary">
                        <h5 class="fw-bold text-white text-uppercase mb-3"><i class="fa-solid fa-sitemap me-2 text-info"></i>The Shell Game</h5>
                        <p class="small text-white-50">Holly O'Connell didn't just guess that Omni-Global was insolvent. She knew it because she receives their rent checks—or rather, the notices that their rent checks bounced.</p>
                        
                        <div class="p-3 bg-black rounded border border-secondary mb-3">
                            <ul class="list-unstyled mb-0 font-monospace small text-white">
                                <li class="mb-2">
                                    <span class="text-secondary">01. HOLDING TRUST:</span><br>
                                    <strong class="text-white">The O'Connell Family Revocable Trust</strong><br>
                                    <span class="text-success ms-3">($1.2B AUM)</span>
                                </li>
                                <li class="text-center text-secondary my-1"><i class="fa-solid fa-arrow-down"></i></li>
                                <li class="mb-2">
                                    <span class="text-secondary">02. REAL ESTATE ARM:</span><br>
                                    <strong class="text-white">Pacific Rim Properties, LLC</strong><br>
                                    <span class="text-muted ms-3">Reg: Delaware (2012)</span>
                                </li>
                                <li class="text-center text-secondary my-1"><i class="fa-solid fa-arrow-down"></i></li>
                                <li>
                                    <span class="text-secondary">03. ASSET:</span><br>
                                    <strong class="text-white">2000 Avenue of the Stars</strong><br>
                                    <span class="text-info ms-3">Ownership: 100% Fee Simple</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-md-7 p-4">
                        <h5 class="fw-bold text-white text-uppercase mb-3"><i class="fa-solid fa-file-invoice-dollar me-2 text-danger"></i>Tenant Ledger: Omni-Global</h5>
                        
                        <div class="title-search-paper p-3 rounded shadow-inner text-dark" style="font-size: 0.85rem;">
                            <div class="d-flex justify-content-between border-bottom border-dark pb-2 mb-2 fw-bold">
                                <span>TENANT: OGM CORP</span>
                                <span>UNIT: SUITE 400</span>
                            </div>
                            <table class="table table-sm table-borderless table-striped mb-0 small">
                                <thead>
                                    <tr class="text-uppercase border-bottom border-dark">
                                        <th>Date</th>
                                        <th>Description</th>
                                        <th class="text-end">Amount</th>
                                        <th class="text-end">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>07/01/18</td>
                                        <td>Base Rent - July</td>
                                        <td class="text-end">$150,000.00</td>
                                        <td class="text-end text-danger fw-bold">NSF / RET</td>
                                    </tr>
                                    <tr>
                                        <td>08/01/18</td>
                                        <td>Base Rent - Aug</td>
                                        <td class="text-end">$150,000.00</td>
                                        <td class="text-end text-danger fw-bold">UNPAID</td>
                                    </tr>
                                    <tr>
                                        <td>09/01/18</td>
                                        <td>Base Rent - Sept</td>
                                        <td class="text-end">$150,000.00</td>
                                        <td class="text-end text-danger fw-bold">UNPAID</td>
                                    </tr>
                                    <tr class="border-top border-dark fw-bold">
                                        <td colspan="2">TOTAL ARREARS</td>
                                        <td class="text-end text-danger">$450,000.00</td>
                                        <td class="text-end text-danger">DEFAULT</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="mt-3 text-center">
                                <span class="badge bg-danger text-uppercase border border-dark rounded-0 px-3">Notice to Quit Issued: Sept 10, 2018</span>
                            </div>
                        </div>

                        <div class="mt-3">
                            <p class="small text-white-50 fst-italic mb-0">
                                <i class="fa-solid fa-triangle-exclamation text-warning me-2"></i>
                                <strong>The Irony:</strong> Jameson Frost needed to acquire Engine Room Records to access their cash reserves... to pay the rent he owed to Engine Room Records.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row mt-5 pt-4 border-top border-secondary border-opacity-25 align-items-center">
        <div class="col-4">
            <a href="/engine-room/history/nine-figure-refusal/forensic-audit" class="btn btn-outline-secondary rounded-pill">
                <i class="fa-solid fa-arrow-left me-2"></i>Previous
            </a>
        </div>
        <div class="col-4 text-center">
            <a href="/engine-room/history/nine-figure-refusal" class="btn btn-outline-primary rounded-pill">
                <i class="fa-duotone fa-list-tree me-2"></i>Overview
            </a>
        </div>
        <div class="col-4 text-end">
            <a href="/engine-room/history/nine-figure-refusal/frost-interview" class="btn btn-primary rounded-pill shadow-sm">
                Next: The Interview <i class="fa-solid fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>

</div>