<?php
/**
 * COMPONENT: Engine Room Records Corporate Letterhead
 * PATH: /includes/components/corporate/letterhead.php
 * * REQUIRED VARIABLES:
 * $letter_date     (string)  - e.g., "September 14, 2018"
 * $letter_to       (string)  - e.g., "The Board of Directors"
 * $letter_body     (string)  - The HTML content of the letter.
 * * OPTIONAL VARIABLES:
 * $letter_stamp    (string)  - Text for rubber stamp (e.g., "CASE CLOSED").
 * $stamp_color     (string)  - Bootstrap color (success, danger). Default: 'success'.
 * $letter_rotation (float)   - Degrees to rotate the card (e.g., -1, 1.5). Default: 0.
 */

// Default Settings
$stamp_text = $letter_stamp ?? null;
$stamp_class = $stamp_color ?? 'success'; 
$rotation = $letter_rotation ?? 0;

// Build the rotation style string if needed
$rotation_style = $rotation ? "transform: rotate({$rotation}deg);" : "";
?>

<div class="card border-0 bg-white text-dark shadow-lg mx-auto" 
     style="max-width: 850px; <?php echo $rotation_style; ?> transition: transform 0.3s ease;">
    
    <div class="card-body p-5 position-relative overflow-hidden">
        
        <div class="d-flex justify-content-between align-items-center border-bottom border-dark pb-4 mb-4">
            <div>
                <h4 class="fw-bold text-uppercase mb-0" style="font-family: 'Impact', sans-serif; letter-spacing: 1px;">
                    Engine Room Records, LLC
                </h4>
                
                <div class="text-muted text-uppercase letter-spacing-1 fw-bold d-flex align-items-center gap-2" style="font-size: 0.75rem;">
                    <span>Blacksburg, Virginia</span>
                    <i class="fa-solid fa-circle" style="font-size: 4px;"></i>
                    <span>Est. 1992</span>
                    <i class="fa-solid fa-circle" style="font-size: 4px;"></i>
                    <span>Privately Held</span>
                </div>

                <div class="text-secondary letter-spacing-1 fw-bold mt-1" style="font-size: 0.75rem;">
                    <i class="fa-solid fa-globe me-1 opacity-50"></i>
                    <span style="font-family: 'Courier New', monospace; text-transform: lowercase;">thestardustengine.com/engine-room</span>
                </div>
            </div>

            <div class="text-end">
                <img src="https://assets.raggiesoft.com/engine-room-records/images/logos/engine-room-records-logo.jpg" 
                     alt="Official Seal" 
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
                    <p class="mb-0 fw-bold text-uppercase letter-spacing-1 text-dark">Holly O'Connell, Esq.</p>
                    <p class="mb-2 small text-secondary fw-bold text-uppercase">Chief Executive Officer & General Counsel</p>
                    
                    <div class="text-muted border-top border-secondary pt-1" style="font-size: 0.7rem; line-height: 1.4; font-family: 'Arial', sans-serif;">
                        <p class="mb-0"><strong>J.D.</strong>, CPI School of Law (Class of 1994)</p>
                        <p class="mb-0"><strong>Bar Admissions:</strong> Virginia ('94), New York ('98), California ('01)</p>
                        <p class="mb-0 fst-italic">Enrolled Agent (IRS) &bull; CFA Charterholder &bull; Certified Forensic Accountant</p>
                    </div>
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