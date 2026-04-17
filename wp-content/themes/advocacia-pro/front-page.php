<?php get_header(); ?>

<main id="primary" class="site-main tp-home-main">

    <!-- ============================================ -->
    <!-- SECTION 1: HERO                              -->
    <!-- ============================================ -->
    <div class="tp-hero">
        <div class="tp-hero__bg-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/hero_miami_bg.png');"></div>
        <div class="tp-hero__overlay"></div>
        <div class="tp-hero__container">
            <div class="tp-hero-content">
                <h1 class="tp-hero__headline">Borderless Legal Care, <span>Tailored to You</span></h1>
                <p class="tp-hero__subheadline">
                    Navigating global mobility through a single platform with independent, expert legal advisors.
                </p>
                <div class="tp-hero-actions">
                    <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="tp-btn tp-btn--pill">Discover Our Services</a>
                    <a href="#solutions" class="tp-btn tp-btn--link">Assess Your Profile</a>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================ -->
    <!-- SECTION 1B: SERVICES CARDS                   -->
    <!-- ============================================ -->
    <section class="tp-services-cards-section">
        <div class="tp-section-header--center">
            <span class="tp-section-eyebrow">Our Global Practice Areas</span>
            <h2 class="tp-section-title">Comprehensive Legal & Mobility Solutions</h2>
        </div>
        <div class="tp-hero-cards">
            <div class="tp-hero-card">
                <div class="tp-hero-card__tag">Immigration</div>
                <div class="tp-hero-card__image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/industry_immigration.png');"></div>
                <div class="tp-hero-card__content">
                    <h4 class="tp-hero-card__title">Visas, Golden Visa, Digital Nomad & Citizenship</h4>
                </div>
                <div class="tp-hero-card__footer">
                    <span style="color:rgba(255,255,255,0.5);font-size:0.7rem;letter-spacing:1px;text-transform:uppercase;">Global Mobility</span>
                </div>
            </div>
            <div class="tp-hero-card">
                <div class="tp-hero-card__tag">Business</div>
                <div class="tp-hero-card__image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/services_tech.png');"></div>
                <div class="tp-hero-card__content">
                    <h4 class="tp-hero-card__title">Company Formation, Corporate Law & Taxes</h4>
                </div>
                <div class="tp-hero-card__footer">
                    <span style="color:white;font-weight:900;letter-spacing:-1px;font-size:1rem;">CORPORATE</span>
                </div>
            </div>
            <div class="tp-hero-card">
                <div class="tp-hero-card__tag">Real Estate</div>
                <div class="tp-hero-card__image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/hero_card_skyscraper.png');"></div>
                <div class="tp-hero-card__content">
                    <h4 class="tp-hero-card__title">Property Purchase, Due Diligence & Legal Representation</h4>
                </div>
                <div class="tp-hero-card__footer">
                    <span style="color:white;font-weight:700;font-size:0.9rem;letter-spacing:1px;">REAL ESTATE</span>
                </div>
            </div>
            <div class="tp-hero-card">
                <div class="tp-hero-card__tag">Tax Solutions</div>
                <div class="tp-hero-card__image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/research_skyscraper.png');"></div>
                <div class="tp-hero-card__content">
                    <h4 class="tp-hero-card__title">International Tax Planning, Wealth Management & Compliance</h4>
                </div>
                <div class="tp-hero-card__footer">
                    <span style="color:white;font-weight:900;font-size:0.9rem;letter-spacing:2px;">TAX</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================ -->
    <!-- SECTION 2: AI-POWERED PROGRAMS (SPLIT)       -->
    <!-- ============================================ -->
    <section class="tp-split-section" id="solutions">
        <div class="tp-split__image-col">
            <div class="tp-split__img-main" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/presenter_woman.png');"></div>
            <div class="tp-split__img-secondary" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/night_market.png');"></div>
        </div>
        <div class="tp-split__content-col">
            <span class="tp-section-eyebrow">How It Works</span>
            <h2 class="tp-split__title">Guiding You Every Step of the Way</h2>
            <p class="tp-split__body">
                <b>1. Assess Your Eligibility:</b> Tell us about your goals and our attorneys will evaluate your eligibility.<br><br>
                <b>2. Preparation and Processing:</b> We handle the paperwork, translations, and applications.<br><br>
                <b>3. Begin Your Journey:</b> Start your new life with confidence and ongoing legal support.
            </p>
            <div class="tp-split__actions">
                <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="tp-btn tp-btn--primary">Get Started Now</a>
            </div>
        </div>
    </section>

    <!-- ============================================ -->
    <!-- SECTION 3: LEADING ORGANIZATIONS MARQUEE    -->
    <!-- ============================================ -->
    <section class="tp-marquee-section">
        <p class="tp-marquee__label">Our Global Offices</p>
        <div class="tp-marquee__track">
            <div class="tp-marquee__inner">
                <span class="tp-marquee__logo">BARCELONA</span>
                <span class="tp-marquee__logo">MADRID</span>
                <span class="tp-marquee__logo">LISBON</span>
                <span class="tp-marquee__logo">ATHENS</span>
                <span class="tp-marquee__logo">MILAN</span>
                <span class="tp-marquee__logo">PARIS</span>
                <span class="tp-marquee__logo">LONDON</span>
                <span class="tp-marquee__logo">MIAMI</span>
                <span class="tp-marquee__logo">BARCELONA</span>
                <span class="tp-marquee__logo">MADRID</span>
                <span class="tp-marquee__logo">LISBON</span>
                <span class="tp-marquee__logo">ATHENS</span>
                <span class="tp-marquee__logo">MILAN</span>
                <span class="tp-marquee__logo">PARIS</span>
                <span class="tp-marquee__logo">LONDON</span>
                <span class="tp-marquee__logo">MIAMI</span>
            </div>
        </div>
    </section>

    <!-- ============================================ -->
    <!-- SECTION 4: EXPERT INDUSTRY KNOWLEDGE         -->
    <!-- ============================================ -->
    <section class="tp-industry-section">
        <div class="tp-industry__header">
            <h2 class="tp-industry__title">Expert Industry Knowledge</h2>
        </div>
        <div class="tp-industry__grid">
            <!-- Left sidebar: nav -->
            <div class="tp-industry__nav">
                <button class="tp-industry__tab active" data-index="0">Immigration</button>
                <button class="tp-industry__tab" data-index="1">Corporate</button>
                <button class="tp-industry__tab" data-index="2">Real Estate</button>
            </div>
            <!-- Right: panels -->
            <div class="tp-industry__panels">
                <div class="tp-industry__panel active" data-panel="0">
                    <div class="tp-industry__panel-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/industry_immigration.png');"></div>
                    <div class="tp-industry__panel-cta">
                        <span class="tp-section-eyebrow">Global Immigration</span>
                        <h3>Secure Your Visa or Citizenship</h3>
                        <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="tp-btn tp-btn--primary tp-btn--sm">Explore</a>
                    </div>
                </div>
                <div class="tp-industry__panel" data-panel="1">
                    <div class="tp-industry__panel-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/presenter_woman.png');"></div>
                    <div class="tp-industry__panel-cta">
                        <span class="tp-section-eyebrow">Corporate Services</span>
                        <h3>Company Formation & Structuring</h3>
                        <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="tp-btn tp-btn--primary tp-btn--sm">Explore</a>
                    </div>
                </div>
                <div class="tp-industry__panel" data-panel="2">
                    <div class="tp-industry__panel-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/italy_property_guide.png');"></div>
                    <div class="tp-industry__panel-cta">
                        <span class="tp-section-eyebrow">Real Estate Law</span>
                        <h3>Safe Overseas Property Investments</h3>
                        <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="tp-btn tp-btn--primary tp-btn--sm">Explore</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================ -->
    <!-- SECTION 5: POWERING GLOBAL PERFORMANCE       -->
    <!-- ============================================ -->
    <section class="tp-performance-section">
        <div class="tp-performance__header">
            <span class="tp-section-eyebrow" style="color:var(--brand-teal);">Voices of Satisfaction</span>
            <h2 class="tp-performance__title">Over 10,000 Cases Resolved</h2>
            <p class="tp-performance__sub">Trusted by expats, investors, and digital nomads worldwide to handle their most complex global mobility challenges.</p>
        </div>
        <div class="tp-performance__logos">
            <div class="tp-performance__logo-card" style="flex-direction:column; gap: 10px;">
                <span style="font-size:1.8rem;font-weight:900;color:#00b67a;letter-spacing:-1px;">★ Trustpilot</span>
                <span style="font-size:1rem;color:var(--gray-text);">Excellent 4.8 out of 5</span>
            </div>
            <div class="tp-performance__logo-card" style="flex-direction:column; gap: 10px;">
                <span style="font-size:1.8rem;font-weight:900;color:#4285F4;letter-spacing:-1px;">Google</span>
                <span style="font-size:1rem;color:var(--gray-text);">4.9/5 Rating</span>
            </div>
        </div>
    </section>

    <!-- ============================================ -->
    <!-- SECTION 6: GLOBAL PLATFORM (ADVISOR + STATS) -->
    <!-- ============================================ -->
    <section class="tp-platform-section">
        <div class="tp-platform__content-col">
            <div class="tp-platform__logo-row">
                <span class="tp-platform__g" style="color:var(--brand-teal);font-size:3rem;font-weight:bold;">&#10003;</span>
                <div>
                    <strong class="tp-platform__brand">Unlock Global Opportunities</strong>
                    <p class="tp-platform__brand-sub">With our dedicated platform and local expertise</p>
                </div>
            </div>
            <ul class="tp-platform__features">
                <li>✓ Fixed prices and transparent fees</li>
                <li>✓ One-on-one expert lawyer support</li>
                <li>✓ Local offices and international reach</li>
                <li>✓ Multilingual legal team</li>
            </ul>
            <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="tp-btn tp-btn--primary" style="margin-top:30px;">Get Started Now</a>
        </div>
        <div class="tp-platform__image-col">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/senior_advisor.png" alt="Senior Advisor" class="tp-platform__advisor-img" />
            <div class="tp-platform__stats-bar">
                <div class="tp-platform__stat">
                    <strong>10K+</strong>
                    <span>Cases resolved successfully</span>
                </div>
                <div class="tp-platform__stat">
                    <strong>30+</strong>
                    <span>Spoken languages</span>
                </div>
                <div class="tp-platform__stat">
                    <strong>15+</strong>
                    <span>Years of experience</span>
                </div>
                <div class="tp-platform__stat">
                    <strong>50+</strong>
                    <span>Expert lawyers</span>
                </div>
                <div class="tp-platform__stat">
                    <strong>98%</strong>
                    <span>Satisfaction rate</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================ -->
    <!-- SECTION 7: KNOWLEDGE HUB                     -->
    <!-- ============================================ -->
    <section class="tp-knowledge-hub">
        <div class="tp-knowledge-header">
            <div class="tp-knowledge-header__content">
                <h2 class="tp-knowledge-header__title">Knowledge Hub</h2>
                <p class="tp-knowledge-header__subtitle">Explore a wealth of knowledge, experiences, and insights to enhance your global journey.</p>
            </div>
            <a href="#" class="tp-btn tp-btn--primary" style="background:var(--brand-dark-navy);white-space:nowrap;">Discover Success Stories</a>
        </div>
        <div class="tp-knowledge-grid">
            <div class="tp-knowledge-card">
                <div class="tp-knowledge-card__thumb" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/italy_property_guide.png');"></div>
                <div class="tp-knowledge-card__content">
                    <h3 class="tp-knowledge-card__title">How to Buy Property in Italy in 2026: Complete Guide for Americans &amp; Foreigners</h3>
                    <p class="tp-knowledge-card__text">Step-by-step process, taxes, costs, residency rules, and legal tips from property lawyers.</p>
                    <a href="#" class="tp-knowledge-card__link">Read Guide →</a>
                </div>
            </div>
            <div class="tp-knowledge-card">
                <div class="tp-knowledge-card__thumb" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/mexican_citizenship_guide.png');"></div>
                <div class="tp-knowledge-card__content">
                    <h3 class="tp-knowledge-card__title">Mexican Citizenship by Descent: Complete 2026 Guide to Claiming Your Heritage</h3>
                    <p class="tp-knowledge-card__text">Driven by cultural reconnection, expanded travel rights, and property ownership opportunities.</p>
                    <a href="#" class="tp-knowledge-card__link">Read Guide →</a>
                </div>
            </div>
            <div class="tp-knowledge-card">
                <div class="tp-knowledge-card__thumb" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/portugal_residence_guide.png');"></div>
                <div class="tp-knowledge-card__content">
                    <h3 class="tp-knowledge-card__title">Portugal Permanent Residence vs EU Long-Term Resident Status in 2026</h3>
                    <p class="tp-knowledge-card__text">Compare the national route vs EU long-term resident status: eligibility, rights, and mobility.</p>
                    <a href="#" class="tp-knowledge-card__link">Read Guide →</a>
                </div>
            </div>
            <div class="tp-knowledge-card">
                <div class="tp-knowledge-card__thumb" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/greece_immigration_guide.png');"></div>
                <div class="tp-knowledge-card__content">
                    <h3 class="tp-knowledge-card__title">How To Move To Greece From the UK in 2026: Complete Post-Brexit Guide</h3>
                    <p class="tp-knowledge-card__text">Golden Visa, Digital Nomad, FIP retirement — costs, and step-by-step process from immigration lawyers.</p>
                    <a href="#" class="tp-knowledge-card__link">Read Guide →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================ -->
    <!-- SECTION 8: CONTACT CTA                       -->
    <!-- ============================================ -->
    <section class="tp-contact-cta">
        <div class="tp-contact-cta__inner">
            <div class="tp-contact-cta__text-col">
                <h2 class="tp-contact-cta__title">How Can We<br><span>Help You?</span></h2>
                <p class="tp-contact-cta__sub">Our global mobility advisors are ready to assess your profile and map out a precise path to your international goals.</p>
            </div>
            <div class="tp-contact-cta__form-col">
                <form class="tp-cta-form" action="<?php echo esc_url( home_url( '/contact/' ) ); ?>" method="GET">
                    <div class="tp-cta-form__row">
                        <input type="text" placeholder="First Name" class="tp-cta-form__input">
                        <input type="text" placeholder="Last Name" class="tp-cta-form__input">
                    </div>
                    <input type="email" placeholder="Work Email" class="tp-cta-form__input tp-cta-form__input--full">
                    <div class="tp-cta-form__footer">
                        <label class="tp-cta-form__consent">
                            <input type="checkbox"> I agree to receive communications from Global Mobility Boutique.
                        </label>
                        <button type="submit" class="tp-btn tp-btn--primary">Submit →</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

</main>

<script>
// Industry panel tabs
document.querySelectorAll('.tp-industry__tab').forEach(function(btn) {
    btn.addEventListener('click', function() {
        var idx = this.dataset.index;
        document.querySelectorAll('.tp-industry__tab').forEach(function(b){ b.classList.remove('active'); });
        document.querySelectorAll('.tp-industry__panel').forEach(function(p){ p.classList.remove('active'); });
        this.classList.add('active');
        document.querySelector('.tp-industry__panel[data-panel="' + idx + '"]').classList.add('active');
    });
});
</script>

<?php get_footer(); ?>
