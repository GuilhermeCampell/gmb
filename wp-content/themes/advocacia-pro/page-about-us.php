<?php get_header(); ?>

<main id="primary" class="site-main">
    
    <!-- ============================================ -->
    <!-- SECTION 1: HERO                              -->
    <!-- ============================================ -->
    <div class="tp-hero tp-hero--internal" style="min-height: 50vh; border-bottom-left-radius: 40vw; padding-bottom: 40px; margin-bottom: 60px;">
        <div class="tp-hero__bg-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/about_hq.png'); background-position: center 30%;"></div>
        <div class="tp-hero__overlay" style="background: linear-gradient(90deg, rgba(0,26,59,0.9) 10%, rgba(0,26,59,0.5) 100%);"></div>
        <div class="tp-hero__container">
            <div class="tp-hero-content" style="max-width: 800px; padding-top: 100px;">
                <span class="tp-breadcrumb" style="color: var(--brand-teal); font-weight: 800; text-transform: uppercase; letter-spacing: 2px; font-size: 0.8rem; margin-bottom: 20px; display: inline-block;">Our History</span>
                <h1 class="tp-hero__headline">About <span>Us</span></h1>
                <p class="tp-hero__subheadline" style="max-width: 600px;">
                    Legal excellence and global vision from day one.
                </p>
            </div>
        </div>
    </div>

    <!-- ============================================ -->
    <!-- SECTION 2: MANIFESTO                         -->
    <!-- ============================================ -->
    <section class="tp-manifesto">
        <div class="tp-manifesto__inner">
            <span class="tp-manifesto__label">Our Manifesto</span>
            <h2 class="tp-manifesto__title">Law-as-a-Service (LaaS)</h2>
            <p class="tp-manifesto__text">
                Traditional immigration law is often opaque and stressful. We designed our firm to be different. We operate with the 'Law-as-a-Service' model, combining the most advanced legal management technology with strictly humanized service.
            </p>
            <p class="tp-manifesto__text">
                No false promises. We provide a sincere audit of your chances under federal laws, building strategies based on precedents and solid factual argumentation. When we take on your case, it's because we believe in it.
            </p>
        </div>
    </section>

    <!-- ============================================ -->
    <!-- SECTION 3: TEAM GRID                         -->
    <!-- ============================================ -->
    <section class="tp-section tp-section--off-white">
        <div class="tp-section-header--center">
            <span class="tp-section-eyebrow">Our Experts</span>
            <h2 class="tp-section-title">Partners & Specialists</h2>
        </div>
        
        <div class="tp-team-grid">
            
            <div class="tp-team-card">
                <div class="tp-team-card__avatar" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/webinar_woman.png');"></div>
                <h3 class="tp-team-card__name">Dra. Elena Alencar</h3>
                <span class="tp-team-card__role">Senior Managing Partner</span>
                <p class="tp-team-card__bio">Specialist in Federal Litigation and EB-5 Visas. AILA member for 15 years.</p>
                <a href="#" class="tp-link-linkedin">in LinkedIn -></a>
            </div>

            <div class="tp-team-card">
                <div class="tp-team-card__avatar" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/senior_advisor.png');"></div>
                <h3 class="tp-team-card__name">Dr. Marcos Tavares</h3>
                <span class="tp-team-card__role">Head of Business Immigration</span>
                <p class="tp-team-card__bio">Leader of the talent visa practice (NIW, EB-1) and branch openings (L-1).</p>
                <a href="#" class="tp-link-linkedin">in LinkedIn -></a>
            </div>

            <div class="tp-team-card">
                <div class="tp-team-card__avatar" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/presenter_woman.png');"></div>
                <h3 class="tp-team-card__name">Dra. Sofia Lima</h3>
                <span class="tp-team-card__role">Family & Compliance</span>
                <p class="tp-team-card__bio">Focuses on family reunification, European Citizenship and Court Defenses.</p>
                <a href="#" class="tp-link-linkedin">in LinkedIn -></a>
            </div>

        </div>
    </section>

    <!-- ============================================ -->
    <!-- SECTION 4: OFFICES & MAP                     -->
    <!-- ============================================ -->
    <section class="tp-section tp-section--white" style="padding-bottom: 100px;">
        <div class="tp-section-header--center">
            <span class="tp-section-eyebrow">Our Locations</span>
            <h2 class="tp-section-title">Global Presence</h2>
        </div>
        
        <div class="tp-office-container">
            
            <div class="tp-office-map">
                <div style="position: absolute; inset: 0; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/footer_map.png'); background-size: cover; opacity: 0.5;"></div>
                <div class="tp-office-map__marker">
                    📍 Miami HQ
                </div>
            </div>

            <div class="tp-office-details">
                <h3>Administrative Headquarters</h3>
                <p class="tp-office-details__text" style="margin-bottom: 30px;">Our main office in the heart of Miami's financial district. All consultations are strictly by prior appointment.</p>
                
                <div style="margin-bottom: 20px;">
                    <strong class="tp-office-details__label">Business Address</strong>
                    <span class="tp-office-details__text">100 SE 2nd St, Suite 2000<br>Miami, FL 33131, United States</span>
                </div>
                
                <div style="margin-bottom: 30px;">
                    <strong class="tp-office-details__label">Direct Contact</strong>
                    <span class="tp-office-details__text">+1 (305) 555-0199</span><br>
                    <span class="tp-office-details__text" style="opacity: 0.6;">contact@globalmobility.law</span>
                </div>
                
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="tp-btn tp-btn--primary" style="background: transparent; border: 1px solid white; align-self: flex-start;">Schedule Visit</a>
            </div>

        </div>
    </section>

    <!-- Backoffice Content -->
    <section class="tp-section" style="padding-top: 0;">
        <div class="entry-content">
            <?php
            while ( have_posts() ) :
                the_post();
                the_content();
            endwhile;
            ?>
        </div>
    </section>

</main>

<?php get_footer(); ?>
