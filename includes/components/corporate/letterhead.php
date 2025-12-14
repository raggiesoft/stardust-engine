<?php
/**
 * COMPONENT: Engine Room Records Corporate Letterhead
 * PURPOSE: Standardized legal formatting for in-universe documents.
 * * REQUIRED VARIABLES:
 * $letter_date  (string)  - e.g., "September 14, 2018"
 * $letter_to    (string)  - e.g., "The Board of Directors, Omni-Global"
 * $letter_body  (string)  - The HTML content of the letter.
 * * OPTIONAL VARIABLES:
 * $letter_stamp (string)  - Text for the rubber stamp (e.g., "CASE CLOSED"). Null to disable.
 * $stamp_color  (string)  - Bootstrap color class (success, danger, etc). Default: 'success'.
 */

// Default Stamp Settings
$stamp_text = $letter_stamp ?? null;
$stamp_class = $stamp_color ?? 'success'; // Default to green
?>

<link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Mrs+Saint+Delafield&display=swap" rel="stylesheet">

<div class="card border-0 bg-white text-dark shadow-lg mx-auto" style="max-width: 850px;">
    <div class="card-body p-5 position-relative overflow-hidden">
        
        <div class="d-flex justify-content-between align-items-center border-bottom border-dark pb-4 mb-4">
            <div>
                <h4 class="fw-bold text-uppercase mb-0" style="font-family: 'Impact', sans-serif; letter-spacing: 1px;">
                    ENGINE ROOM RECORDS, LLC
                </h4>
                <small class="text-muted text-uppercase letter-spacing-1 fw-bold" style="font-size: 0.8rem;">
                    Blacksburg, Virginia <span class="mx-2">&bull;</span> Est. 1992
                </small>
            </div>
            <div class="text-end">
                <img src="https://assets.raggiesoft.com/engine-room-records/images/engine-room-records-logo.jpg" 
                     alt="Seal" 
                     style="width: 100px; mix-blend-mode: multiply; filter: contrast(120%);">
            </div>
        </div>

        <div style="font-family: 'Times New Roman', serif; font-size: 1.15rem; line-height: 1.6;">
            
            <div class="mb-4">
                <p class="mb-1"><strong>Date:</strong> <?php echo $letter_date; ?></p>
                <p class="mb-0"><strong>To:</strong> <?php echo $letter_to; ?></p>
            </div>
            
            <div class="letter-content mb-5">
                <?php echo $letter_body; ?>
            </div>

            <div class="mt-5 position-relative d-inline-block">
                <div class="position-absolute" 
                     style="top: -45px; left: -10px; font-family: 'Mrs Saint Delafield', cursive; font-size: 3.5rem; color: #1a237e; transform: rotate(-5deg); opacity: 0.9; pointer-events: none; white-space: nowrap;">
                    Holly O'Connell
                </div>
                
                <div class="pt-2 position-relative" style="z-index: 1;">
                    <p class="mb-0 fw-bold text-uppercase letter-spacing-1">Holly O'Connell, Esq.</p>
                    <p class="mb-0 small text-secondary">CEO & General Counsel</p>
                    <p class="mb-0 small fst-italic text-muted border-top border-secondary d-inline-block mt-2 pt-1" 
                       style="border-top-style: dotted !important; border-width: 1px;">
                        J.D., CPI School of Law (Class of '94)
                    </p>
                </div>
            </div>

        </div>

        <?php if ($stamp_text): ?>
        <div class="position-absolute bottom-0 end-0 p-5 opacity-75" 
             style="transform: rotate(-10deg); mix-blend-mode: multiply; pointer-events: none;">
            <div class="border border-4 border-<?php echo $stamp_class; ?> text-<?php echo $stamp_class; ?> p-2 fw-bold text-uppercase fs-1 text-center" 
                 style="font-family: 'Black Ops One', cursive; line-height: 1; mask-image: url('https://assets.raggiesoft.com/common/images/grunge-texture.png'); -webkit-mask-image: url('https://assets.raggiesoft.com/common/images/grunge-texture.png');">
                <?php echo $stamp_text; ?>
            </div>
        </div>
        <?php endif; ?>

    </div>
</div>