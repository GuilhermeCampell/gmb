<?php get_header(); ?>

<main id="primary" class="site-main">
    
    <!-- ============================================ -->
    <!-- SECTION 1: HERO                              -->
    <!-- ============================================ -->
    <div class="tp-hero tp-hero--internal" style="min-height: 50vh; border-bottom-left-radius: 40vw; padding-bottom: 40px; margin-bottom: 60px;">
        <div class="tp-hero__bg-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/contact_pro.png'); background-position: center 30%;"></div>
        <div class="tp-hero__overlay" style="background: linear-gradient(90deg, rgba(0,26,59,0.9) 10%, rgba(0,26,59,0.5) 100%);"></div>
        <div class="tp-hero__container">
            <div class="tp-hero-content" style="max-width: 800px; padding-top: 100px;">
                <span class="tp-breadcrumb" style="color: var(--brand-teal); font-weight: 800; text-transform: uppercase; letter-spacing: 2px; font-size: 0.8rem; margin-bottom: 20px; display: inline-block;">Contact</span>
                <h1 class="tp-hero__headline">Assess <span>Profile</span></h1>
                <p class="tp-hero__subheadline" style="max-width: 600px;">
                    Our lawyers will conduct a free preliminary audit of your profile to identify the best migration strategies.
                </p>
            </div>
        </div>
    </div>

    <!-- ============================================ -->
    <!-- SECTION 2: CONTACT CONTAINER                 -->
    <!-- ============================================ -->
    <section class="tp-contact-container">
        
        <div class="tp-contact-main">
            <div class="tp-contact-header">
                <h2>Request your Audit</h2>
                <p>The process takes less than 2 minutes.</p>
            </div>

            <form action="#" method="POST" class="tp-form" id="progressive-form">
                
                <!-- Step 1: Progressive Disclosure (Low Friction) -->
                <div id="form-step-1" class="tp-form-step">
                    <div class="tp-form-group">
                        <label class="tp-label" style="font-size: 1.2rem; color: var(--brand-navy);">Where do you want to go?</label>
                        <select id="user-destination" class="tp-select" style="padding: 15px; border-width: 2px;">
                            <option value="">Select a destination...</option>
                            <option value="eua">United States (USA)</option>
                            <option value="europa">Europe (Spain, Portugal)</option>
                            <option value="uk">United Kingdom</option>
                            <option value="indeciso">I haven't decided yet</option>
                        </select>
                    </div>
                    <button type="button" id="btn-next-step" class="tp-btn tp-btn--primary" style="width: 100%; font-size: 1.1rem;">Continue -></button>
                </div>

                <!-- Step 2: Hidden initially -->
                <div id="form-step-2" class="tp-form-step" style="display: none; opacity: 0;">
                    <div class="tp-form-row">
                        <div class="tp-form-group">
                            <label class="tp-label" style="color: var(--gray-text); font-weight: normal;">First Name</label>
                            <input type="text" class="tp-input" placeholder="e.g., John" required>
                        </div>
                        <div class="tp-form-group">
                            <label class="tp-label" style="color: var(--gray-text); font-weight: normal;">Last Name</label>
                            <input type="text" class="tp-input" placeholder="e.g., Smith" required>
                        </div>
                    </div>
                    <div class="tp-form-group">
                        <label class="tp-label" style="color: var(--gray-text); font-weight: normal;">Professional Email</label>
                        <input type="email" class="tp-input" placeholder="john@company.com" required>
                    </div>
                    <div class="tp-form-group">
                        <label class="tp-label" style="color: var(--gray-text); font-weight: normal;">Phone (WhatsApp)</label>
                        <input type="tel" class="tp-input" placeholder="+1 (305) 555-0199" required>
                    </div>
                    <div class="tp-form-group">
                        <label class="tp-label" style="color: var(--gray-text); font-weight: normal;">What is your area of expertise or business?</label>
                        <textarea class="tp-textarea" rows="4" placeholder="Tell us briefly about your career or project..."></textarea>
                    </div>
                    <button type="submit" class="tp-btn tp-btn--primary" style="width: 100%; background: var(--brand-navy); font-size: 1.1rem;">Send for Legal Analysis</button>
                </div>

            </form>
        </div>

        <aside class="tp-contact-sidebar">
            <div class="tp-sidebar-block tp-sidebar-block--teal">
                <h4>Miami Headquarters</h4>
                <p><strong>Global Mobility Boutique</strong><br>
                100 SE 2nd St, Suite 2000<br>
                Miami, FL 33131, USA</p>
                <p style="color: var(--brand-navy); font-weight: bold; margin-top: 15px;">📞 +1 (305) 555-0199</p>
            </div>

            <div class="tp-sidebar-block tp-sidebar-block--danger">
                <h4>Direct Service</h4>
                <p style="margin-bottom: 10px;"><a href="mailto:contact@globalmobility.law" style="color: var(--brand-navy); text-decoration: none;">contact@globalmobility.law</a></p>
                <p><a href="https://wa.me/13055550199" class="tp-link-whatsapp">Official WhatsApp -></a></p>
            </div>
        </aside>

    </section>

</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const btnNext = document.getElementById('btn-next-step');
    const step1 = document.getElementById('form-step-1');
    const step2 = document.getElementById('form-step-2');
    const selDestino = document.getElementById('user-destination');

    btnNext.addEventListener('click', function() {
        if(selDestino.value === '') {
            selDestino.style.borderColor = 'var(--danger-a10)';
            return;
        }
        
        step1.style.display = 'none';
        step2.style.display = 'block';
        setTimeout(() => {
            step2.style.opacity = '1';
        }, 50);
    });
    
    selDestino.addEventListener('change', function() {
        if(this.value !== '') this.style.borderColor = 'var(--gray-border)';
    });
});
</script>

<?php get_footer(); ?>
