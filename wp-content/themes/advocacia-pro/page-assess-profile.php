<?php get_header(); ?>

<main id="primary" class="site-main" style="background: var(--off-white); min-height: 100vh; padding-top: 100px;">
    
    <div style="max-width: var(--container-max-width, 1200px); margin: 60px auto; background: var(--white); border-radius: 12px; box-shadow: 0 30px 60px rgba(0,0,0,0.08); overflow: hidden; display: flex; flex-direction: column;">
        
        <!-- Header Strip -->
        <div style="background: var(--brand-dark-navy); color: var(--white); padding: 40px 60px; text-align: center;">
            <span class="tp-section-eyebrow" style="color: var(--brand-teal);">Secure & Confidential</span>
            <h1 style="color: var(--white); font-size: 2.5rem; margin-top: 10px; margin-bottom: 0;">Comprehensive Profile Assessment</h1>
            <p style="opacity: 0.8; font-size: 1.1rem; margin-top: 15px; max-width: 600px; margin-left: auto; margin-right: auto;">Provide us with the details of your international goals, and our legal team will evaluate the viability of your immigration or corporate setup.</p>
        </div>

        <div class="tp-contact-container" style="box-shadow: none; border-radius: 0; margin-top: 0;">
            
            <div class="tp-contact-main" style="padding: 60px; border-right: 1px solid var(--gray-border);">
                
                <div class="tp-form-progress" style="margin-bottom: 40px; display: flex; align-items: center; justify-content: space-between; border-bottom: 2px solid var(--gray-light); padding-bottom: 20px;">
                    <div style="font-weight: bold; color: var(--brand-navy);"><span style="color: var(--danger-a10);">Step 1:</span> Intent</div>
                    <div style="color: var(--gray-text); opacity: 0.5;">Step 2: Profile</div>
                    <div style="color: var(--gray-text); opacity: 0.5;">Step 3: Details</div>
                </div>

                <form action="#" method="POST" class="tp-form" id="wizard-form">
                    
                    <!-- STEP 1: Intent -->
                    <div id="step-1" class="tp-form-step">
                        <h3 style="font-size: 1.6rem; color: var(--brand-navy); margin-bottom: 20px;">What is your primary objective?</h3>
                        
                        <div class="tp-form-group">
                            <label style="display: flex; align-items: center; padding: 20px; border: 2px solid var(--gray-border); border-radius: 8px; margin-bottom: 15px; cursor: pointer; transition: all 0.3s;" class="wizard-option">
                                <input type="radio" name="objective" value="investor" style="margin-right: 15px; width: 20px; height: 20px;">
                                <div>
                                    <strong style="display: block; font-size: 1.1rem; color: var(--brand-navy);">Investor Visa (EB-5 / Golden Visa)</strong>
                                    <span style="font-size: 0.9rem; color: var(--gray-text);">I plan to invest significant capital abroad.</span>
                                </div>
                            </label>

                            <label style="display: flex; align-items: center; padding: 20px; border: 2px solid var(--gray-border); border-radius: 8px; margin-bottom: 15px; cursor: pointer; transition: all 0.3s;" class="wizard-option">
                                <input type="radio" name="objective" value="talent" style="margin-right: 15px; width: 20px; height: 20px;">
                                <div>
                                    <strong style="display: block; font-size: 1.1rem; color: var(--brand-navy);">Talent / Professional Visa (NIW, EB-1, O-1)</strong>
                                    <span style="font-size: 0.9rem; color: var(--gray-text);">I have an advanced degree or exceptional ability.</span>
                                </div>
                            </label>

                            <label style="display: flex; align-items: center; padding: 20px; border: 2px solid var(--gray-border); border-radius: 8px; margin-bottom: 15px; cursor: pointer; transition: all 0.3s;" class="wizard-option">
                                <input type="radio" name="objective" value="business" style="margin-right: 15px; width: 20px; height: 20px;">
                                <div>
                                    <strong style="display: block; font-size: 1.1rem; color: var(--brand-navy);">Corporate Structuring / Expansion</strong>
                                    <span style="font-size: 0.9rem; color: var(--gray-text);">I am expanding my current business operations.</span>
                                </div>
                            </label>
                        </div>
                        
                        <button type="button" class="tp-btn tp-btn--primary" id="btn-next-1" style="width: 100%; font-size: 1.1rem; margin-top: 10px;">Proceed to Step 2 -></button>
                    </div>

                    <!-- STEP 2: Target Location -->
                    <div id="step-2" class="tp-form-step" style="display: none; opacity: 0; transition: opacity 0.5s;">
                        <h3 style="font-size: 1.6rem; color: var(--brand-navy); margin-bottom: 20px;">Which jurisdiction are you targeting?</h3>
                        
                        <div class="tp-form-group">
                            <select id="jurisdiction" class="tp-select tp-input" style="padding: 15px; border-width: 2px; width: 100%; font-size: 1.1rem; margin-bottom: 30px;">
                                <option value="">Select a destination...</option>
                                <option value="usa">United States of America</option>
                                <option value="pt">Portugal / EU</option>
                                <option value="es">Spain / EU</option>
                                <option value="uk">United Kingdom</option>
                                <option value="other">Other / Not Decided Yet</option>
                            </select>
                        </div>

                        <div class="tp-form-group">
                            <label class="tp-label">Estimated Timeline for Move</label>
                            <select class="tp-select tp-input" style="padding: 15px; border-width: 2px; width: 100%; font-size: 1rem; margin-bottom: 20px;">
                                <option>Within 6 Months</option>
                                <option>6 - 12 Months</option>
                                <option>1 - 2+ Years</option>
                            </select>
                        </div>
                        
                        <div style="display: flex; gap: 15px; margin-top: 10px;">
                            <button type="button" class="tp-btn" id="btn-back-1" style="background: var(--gray-light); color: var(--brand-navy); flex: 1;"><- Back</button>
                            <button type="button" class="tp-btn tp-btn--primary" id="btn-next-2" style="flex: 2; font-size: 1.1rem;">Proceed to Step 3 -></button>
                        </div>
                    </div>

                    <!-- STEP 3: Contact Details -->
                    <div id="step-3" class="tp-form-step" style="display: none; opacity: 0; transition: opacity 0.5s;">
                        <h3 style="font-size: 1.6rem; color: var(--brand-navy); margin-bottom: 20px;">Finalize Analysis Request</h3>
                        <p style="color: var(--gray-text); margin-bottom: 30px;">Our lead counsel will review the previous answers alongside this information.</p>
                        
                        <div class="tp-form-row" style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                            <div class="tp-form-group">
                                <label class="tp-label">First Name</label>
                                <input type="text" class="tp-input" placeholder="Enter first name" style="width:100%;" required>
                            </div>
                            <div class="tp-form-group">
                                <label class="tp-label">Last Name</label>
                                <input type="text" class="tp-input" placeholder="Enter last name" style="width:100%;" required>
                            </div>
                        </div>

                        <div class="tp-form-group" style="margin-bottom: 20px;">
                            <label class="tp-label">Email Address</label>
                            <input type="email" class="tp-input" placeholder="professional@email.com" style="width:100%;" required>
                        </div>

                        <div class="tp-form-group" style="margin-bottom: 30px;">
                            <label class="tp-label">LinkedIn Profile (Highly Recommended for Talent Visas)</label>
                            <input type="url" class="tp-input" placeholder="https://linkedin.com/in/..." style="width:100%;">
                        </div>
                        
                        <div style="display: flex; gap: 15px; margin-top: 10px;">
                            <button type="button" class="tp-btn" id="btn-back-2" style="background: var(--gray-light); color: var(--brand-navy); flex: 1;"><- Back</button>
                            <button type="submit" class="tp-btn tp-btn--primary" id="btn-submit" style="flex: 2; background: var(--brand-dark-navy); border-color: var(--brand-dark-navy); font-size: 1.1rem;">Submit Profile for Review</button>
                        </div>
                    </div>

                </form>
            </div>

            <!-- Side Panel Details -->
            <aside class="tp-contact-sidebar" style="background: #f8f9fa; padding: 60px;">
                <div style="margin-bottom: 40px;">
                    <h4 style="color: var(--brand-navy); font-size: 1.3rem; border-bottom: 2px solid var(--danger-a10); display: inline-block; padding-bottom: 5px; margin-bottom: 20px;">Why Assess Your Profile?</h4>
                    <p style="color: var(--gray-dark-text); line-height: 1.6; margin-bottom: 15px;">Global immigration law is nuanced. Finding the right pathway limits your tax exposure, avoids visa denials, and maximizes the privileges of international mobility.</p>
                </div>
                
                <ul style="list-style: none; padding: 0;">
                    <li style="margin-bottom: 20px; display: flex; align-items: flex-start;">
                        <span style="color: var(--brand-teal); font-size: 1.5rem; margin-right: 15px; line-height: 1;">✓</span>
                        <div>
                            <strong style="display: block; color: var(--brand-navy); margin-bottom: 5px;">Strict Confidentiality</strong>
                            <p style="color: var(--gray-text); font-size: 0.9rem; margin: 0;">All information submitted is protected under attorney-client privilege boundaries.</p>
                        </div>
                    </li>
                    <li style="margin-bottom: 20px; display: flex; align-items: flex-start;">
                        <span style="color: var(--brand-teal); font-size: 1.5rem; margin-right: 15px; line-height: 1;">✓</span>
                        <div>
                            <strong style="display: block; color: var(--brand-navy); margin-bottom: 5px;">48-Hour Guarantee</strong>
                            <p style="color: var(--gray-text); font-size: 0.9rem; margin: 0;">A partner or senior specialist will review your file and respond quickly.</p>
                        </div>
                    </li>
                </ul>
            </aside>
            
        </div>
    </div>
</main>

<style>
/* Scoped styles for wizard UI */
.wizard-option:hover {
    border-color: var(--brand-teal) !important;
    background-color: rgba(64,193,172,0.05);
}
.wizard-option.selected {
    border-color: var(--brand-teal) !important;
    background-color: rgba(64,193,172,0.05);
    box-shadow: 0 4px 10px rgba(0,0,0,0.05);
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const s1 = document.getElementById('step-1');
    const s2 = document.getElementById('step-2');
    const s3 = document.getElementById('step-3');
    
    const progress = document.querySelectorAll('.tp-form-progress div');
    
    // Step 1 logic
    const radios = document.querySelectorAll('input[name="objective"]');
    radios.forEach(radio => {
        radio.addEventListener('change', function() {
            document.querySelectorAll('.wizard-option').forEach(el => el.classList.remove('selected'));
            if(this.checked) {
                this.closest('.wizard-option').classList.add('selected');
            }
        });
    });

    document.getElementById('btn-next-1').addEventListener('click', function() {
        let selected = false;
        radios.forEach(r => { if(r.checked) selected = true; });
        if(!selected) {
            alert('Please select an objective to continue.');
            return;
        }
        
        s1.style.display = 'none';
        s2.style.display = 'block';
        setTimeout(() => s2.style.opacity = '1', 50);
        
        progress[0].innerHTML = "Step 1: Intent ✓";
        progress[0].style.opacity = "0.5";
        progress[0].style.color = "var(--gray-text)";
        
        progress[1].innerHTML = "<span style='color: var(--danger-a10);'>Step 2:</span> Target";
        progress[1].style.opacity = "1";
        progress[1].style.color = "var(--brand-navy)";
        progress[1].style.fontWeight = "bold";
    });

    // Step 2 logic
    document.getElementById('btn-back-1').addEventListener('click', function() {
        s2.style.display = 'none';
        s2.style.opacity = '0';
        s1.style.display = 'block';
        
        progress[0].innerHTML = "<span style='color: var(--danger-a10);'>Step 1:</span> Intent";
        progress[0].style.opacity = "1";
        progress[0].style.color = "var(--brand-navy)";
        
        progress[1].innerHTML = "Step 2: Target";
        progress[1].style.opacity = "0.5";
        progress[1].style.color = "var(--gray-text)";
        progress[1].style.fontWeight = "normal";
    });

    document.getElementById('btn-next-2').addEventListener('click', function() {
        const jur = document.getElementById('jurisdiction');
        if(jur.value === '') {
            jur.style.borderColor = 'var(--danger-a10)';
            return;
        }
        
        s2.style.display = 'none';
        s3.style.display = 'block';
        setTimeout(() => s3.style.opacity = '1', 50);
        
        progress[1].innerHTML = "Step 2: Target ✓";
        progress[1].style.opacity = "0.5";
        progress[1].style.color = "var(--gray-text)";
        
        progress[2].innerHTML = "<span style='color: var(--danger-a10);'>Step 3:</span> Details";
        progress[2].style.opacity = "1";
        progress[2].style.color = "var(--brand-navy)";
        progress[2].style.fontWeight = "bold";
    });

    // Step 3 logic
    document.getElementById('btn-back-2').addEventListener('click', function() {
        s3.style.display = 'none';
        s3.style.opacity = '0';
        s2.style.display = 'block';
        
        progress[1].innerHTML = "<span style='color: var(--danger-a10);'>Step 2:</span> Target";
        progress[1].style.opacity = "1";
        progress[1].style.color = "var(--brand-navy)";
        
        progress[2].innerHTML = "Step 3: Details";
        progress[2].style.opacity = "0.5";
        progress[2].style.color = "var(--gray-text)";
        progress[2].style.fontWeight = "normal";
    });
});
</script>

<?php get_footer(); ?>
