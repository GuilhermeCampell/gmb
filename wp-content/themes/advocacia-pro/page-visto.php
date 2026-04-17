<?php
/**
 * Template Name: Visa Landing Page
 */
get_header(); ?>

<main id="primary" class="site-main">
    
    <!-- Hero Específico -->
    <section class="tp-visa-hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg_highway.png');">
        <div class="tp-visa-hero__overlay"></div>
        <div class="tp-page-hero__inner">
            <span class="tp-breadcrumb">Visas / Business & Investment</span>
            <h1 class="tp-page-title">EB-2 NIW Visa</h1>
            <p style="color: rgba(255,255,255,0.8); font-size: 1.1rem; line-height: 1.6; margin-bottom: 30px;">The most efficient path to a Green Card for exceptional professionals, without the need for a US sponsor.</p>
            <div class="tp-visa-hero__badge">
                <strong>⏱️ Average processing time:</strong> <span>8 to 14 months</span>
            </div>
        </div>
    </section>

    <!-- Navegação Interna Sticky -->
    <nav class="tp-anchor-nav">
        <ul class="tp-anchor-nav__list">
            <li><a href="#o-que-e" class="tp-anchor-nav__link">What is it?</a></li>
            <li><a href="#requisitos" class="tp-anchor-nav__link">Requirements</a></li>
            <li><a href="#processo" class="tp-anchor-nav__link">Process (Timeline)</a></li>
            <li><a href="#faq" class="tp-anchor-nav__link">FAQ</a></li>
        </ul>
    </nav>

    <!-- Conteúdo Principal -->
    <section class="tp-section tp-section--white">
        <div class="tp-visa-grid">
            
            <!-- Lado Maior: Texto Explicativo -->
            <div class="tp-visa-main-col">
                
                <div id="o-que-e" style="margin-bottom: 60px; scroll-margin-top: 100px;">
                    <h2 style="color: #003B5C; font-size: 2rem; margin-bottom: 20px;">What is the EB-2 NIW Visa?</h2>
                    <p style="color: #555; line-height: 1.8; margin-bottom: 20px; font-size: 1.05rem;">The EB-2 National Interest Waiver (NIW) visa is an employment-based category that allows professionals with exceptional abilities or advanced degrees to obtain a Green Card with ease.</p>
                    <p style="color: #555; line-height: 1.8; font-size: 1.05rem;">Unlike the traditional EB-2, the NIW waives the strict requirement for a formal job offer and a labor certification (PERM), as long as the candidate can prove that their work is of "National Interest" to the United States.</p>
                </div>

                <div id="requisitos" style="margin-bottom: 60px; scroll-margin-top: 100px;">
                    <h2 style="color: #003B5C; font-size: 2rem; margin-bottom: 20px;">EB-2 NIW Requirements</h2>
                    <ul class="tp-req-list">
                        <li class="tp-req-item">
                            <strong class="tp-req-item__title">Master's or Higher (Advanced Degree)</strong>
                            <span>Or the equivalent: Bachelor's degree plus 5 years of progressive experience in the field of study.</span>
                        </li>
                        <li class="tp-req-item">
                            <strong class="tp-req-item__title">Substantial Effort Plan</strong>
                            <span>The proposed work project/focus must have substantial merit and national importance for the US.</span>
                        </li>
                        <li class="tp-req-item">
                            <strong class="tp-req-item__title">Proven Capability</strong>
                            <span>The candidate must be well-positioned to advance the proposed plan (history, publications, awards).</span>
                        </li>
                    </ul>
                </div>

                <div id="processo" style="margin-bottom: 60px; scroll-margin-top: 100px;">
                    <h2 style="color: #003B5C; font-size: 2rem; margin-bottom: 40px;">How does the Process work? (Timeline)</h2>
                    
                    <div class="tp-timeline">
                        
                        <div class="tp-timeline-item">
                            <h4 class="tp-timeline-item__title">1. Audit and Planning Meeting</h4>
                            <p style="color: #666; font-size: 0.95rem;">Thorough analysis of your CV and alignment of the "Proposed Endeavor".</p>
                        </div>
                        
                        <div class="tp-timeline-item">
                            <h4 class="tp-timeline-item__title">2. Collection of Recommendation Letters</h4>
                            <p style="color: #666; font-size: 0.95rem;">Our team will guide and review up to 6 letters signed by experts in your sector.</p>
                        </div>
                        
                        <div class="tp-timeline-item">
                            <h4 class="tp-timeline-item__title">3. I-140 Filing</h4>
                            <p style="color: #666; font-size: 0.95rem;">Initial petition submitted to immigration with the entire evidentiary dossier of more than 500 pages.</p>
                        </div>
                        
                        <div class="tp-timeline-item tp-timeline-item--active">
                            <h4 class="tp-timeline-item__title">4. Approval and Consular/Adjustment (I-485)</h4>
                            <p style="color: #666; font-size: 0.95rem;">Once the I-140 is approved, we move on to the physical issuance of the Green Card.</p>
                        </div>

                    </div>
                </div>

                <div id="faq" style="scroll-margin-top: 100px;">
                    <h2 style="color: #003B5C; font-size: 2rem; margin-bottom: 30px;">Frequently Asked Questions (FAQ)</h2>
                    
                    <div class="tp-accordion">
                        
                        <div class="tp-accordion-item">
                            <button class="tp-accordion-header">
                                Do I need to have a company in the USA?
                                <span class="icon">+</span>
                            </button>
                            <div class="tp-accordion-body">
                                No. The NIW does not require you to open a company, although entrepreneurship can be an excellent plan (Endeavor).
                            </div>
                        </div>

                        <div class="tp-accordion-item">
                            <button class="tp-accordion-header">
                                Does my family also receive the Green Card?
                                <span class="icon">+</span>
                            </button>
                            <div class="tp-accordion-body">
                                Yes. Your spouse and unmarried children under 21 will be included in the petition at the time of the final residency issuance.
                            </div>
                        </div>

                        <div class="tp-accordion-item">
                            <button class="tp-accordion-header">
                                Can I apply using "Premium Processing"?
                                <span class="icon">+</span>
                            </button>
                            <div class="tp-accordion-body">
                                Yes, USCIS has implemented premium processing for the I-140 NIW, reducing the analysis to just 45 business days (upon extra fee).
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <!-- Lado Menor: Sticky Sidebar -->
            <aside class="tp-visa-sidebar">
                <div class="tp-widget" style="text-align: center;">
                    <h3 class="tp-widget__title">Take the first step.</h3>
                    <p style="color: #666; font-size: 0.95rem; margin-bottom: 25px;">Schedule a profile audit to assess your real chances of eligibility for the EB-2 NIW.</p>
                    
                    <a href="<?php echo esc_url( home_url( '/assess-profile/' ) ); ?>" class="tp-btn tp-btn--primary" style="display: block; width: 100%; margin-bottom: 15px;">Assess Eligibility -></a>
                    
                    <a href="https://wa.me/something" class="tp-btn tp-btn--whatsapp" style="display: block; width: 100%;">WhatsApp Chat</a>
                </div>
            </aside>

        </div>
    </section>

</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const accordions = document.querySelectorAll('.tp-accordion-header');
    accordions.forEach(acc => {
        acc.addEventListener('click', function() {
            const body = this.nextElementSibling;
            const icon = this.querySelector('.icon');
            if (body.style.display === 'block') {
                body.style.display = 'none';
                icon.textContent = '+';
            } else {
                body.style.display = 'block';
                icon.textContent = '-';
            }
        });
    });

    const links = document.querySelectorAll('.tp-anchor-nav__link');
    links.forEach(link => {
        link.addEventListener('click', function() {
            links.forEach(l => l.classList.remove('active'));
            this.classList.add('active');
        });
    });
});
</script>

<?php get_footer(); ?>
