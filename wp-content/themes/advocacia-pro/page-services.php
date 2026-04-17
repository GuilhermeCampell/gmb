<?php get_header(); ?>

<main id="primary" class="site-main">
    
    <!-- ============================================ -->
    <!-- SECTION 1: HERO                              -->
    <!-- ============================================ -->
    <div class="tp-hero tp-hero--internal" style="min-height: 50vh; border-bottom-left-radius: 40vw; padding-bottom: 40px; margin-bottom: 60px;">
        <div class="tp-hero__bg-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/services_tech.png'); background-position: center 30%;"></div>
        <div class="tp-hero__overlay" style="background: linear-gradient(90deg, rgba(0,26,59,0.9) 10%, rgba(0,26,59,0.5) 100%);"></div>
        <div class="tp-hero__container">
            <div class="tp-hero-content" style="max-width: 800px; padding-top: 100px;">
                <span class="tp-breadcrumb" style="color: var(--brand-teal); font-weight: 800; text-transform: uppercase; letter-spacing: 2px; font-size: 0.8rem; margin-bottom: 20px; display: inline-block;">Our Solutions</span>
                <h1 class="tp-hero__headline">Immigration & <span>Mobility</span></h1>
                <p class="tp-hero__subheadline" style="max-width: 600px;">
                    Personalized legal strategies for each stage of your international journey.
                </p>
            </div>
        </div>
    </div>

    <!-- ============================================ -->
    <!-- SECTION 2: SERVICES & FILTERS                -->
    <!-- ============================================ -->
    <section class="tp-section tp-section--off-white" style="padding: 80px 5vw;">
        
        <div class="tp-section-header--center" style="margin-bottom: 40px;">
            <span class="tp-section-eyebrow" style="color: var(--danger-a10);">Our Specialties</span>
            <h2 class="tp-section-title">Visa & Corporate Practice Areas</h2>
        </div>

        <!-- Filters -->
        <div class="tp-filters">
            <button class="tp-filter-pill active" data-filter="all">All</button>
            <button class="tp-filter-pill" data-filter="business">Business & Investment</button>
            <button class="tp-filter-pill" data-filter="nomad">Nomad & Talent</button>
            <button class="tp-filter-pill" data-filter="family">Family</button>
        </div>

        <!-- Cards Loop -->
        <div class="tp-vistos-grid">
            
            <!-- Card 1 -->
            <div class="tp-visto-card" data-category="business">
                <h3 class="tp-visto-card__title">EB-5 Visa (Investor)</h3>
                <ul class="tp-visto-card__list">
                    <li class="tp-visto-card__list-item">Minimum contribution of $800k</li>
                    <li class="tp-visto-card__list-item">Generation of 10 jobs</li>
                    <li class="tp-visto-card__list-item">Direct path to Green Card</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/eb5-visa/' ) ); ?>" class="tp-visto-card__link">Learn More</a>
            </div>

            <!-- Card 2 -->
            <div class="tp-visto-card" data-category="nomad">
                <h3 class="tp-visto-card__title">EB-2 NIW Visa</h3>
                <ul class="tp-visto-card__list">
                    <li class="tp-visto-card__list-item">For exceptional professionals</li>
                    <li class="tp-visto-card__list-item">No job offer required</li>
                    <li class="tp-visto-card__list-item">Proven National Importance</li>
                </ul>
                <a href="#" class="tp-visto-card__link">Learn More</a>
            </div>

            <!-- Card 3 -->
            <div class="tp-visto-card" data-category="nomad">
                <h3 class="tp-visto-card__title">D7 Visa (Portugal)</h3>
                <ul class="tp-visto-card__list">
                    <li class="tp-visto-card__list-item">Proven passive income</li>
                    <li class="tp-visto-card__list-item">Minimum stay in the country</li>
                    <li class="tp-visto-card__list-item">Access to the Schengen area</li>
                </ul>
                <a href="#" class="tp-visto-card__link">Learn More</a>
            </div>

            <!-- Card 4 -->
            <div class="tp-visto-card" data-category="business">
                <h3 class="tp-visto-card__title">L-1A / L-1B (USA)</h3>
                <ul class="tp-visto-card__list">
                    <li class="tp-visto-card__list-item">Executive transfer</li>
                    <li class="tp-visto-card__list-item">Opening a branch in the USA</li>
                    <li class="tp-visto-card__list-item">Allows spouse to work</li>
                </ul>
                <a href="#" class="tp-visto-card__link">Learn More</a>
            </div>

            <!-- Card 5 -->
            <div class="tp-visto-card" data-category="family">
                <h3 class="tp-visto-card__title">Family Based (USA)</h3>
                <ul class="tp-visto-card__list">
                    <li class="tp-visto-card__list-item">Direct kinship with citizen</li>
                    <li class="tp-visto-card__list-item">Spouses of residents</li>
                    <li class="tp-visto-card__list-item">Internal status adjustment</li>
                </ul>
                <a href="#" class="tp-visto-card__link">Learn More</a>
            </div>
            
            <!-- Card 6 -->
            <div class="tp-visto-card" data-category="nomad">
                <h3 class="tp-visto-card__title">D8 Digital Nomad</h3>
                <ul class="tp-visto-card__list">
                    <li class="tp-visto-card__list-item">Remote work</li>
                    <li class="tp-visto-card__list-item">Minimum income required</li>
                    <li class="tp-visto-card__list-item">Tax flexibility</li>
                </ul>
                <a href="#" class="tp-visto-card__link">Learn More</a>
            </div>

        </div>
    </section>

    <!-- ============================================ -->
    <!-- SECTION 3: CTA BANNER                        -->
    <!-- ============================================ -->
    <section class="tp-banner">
        <h2 class="tp-banner__title">Don't know which visa to choose?</h2>
        <p class="tp-banner__text">Each case is unique. Our team will perform a complete audit of your profile.</p>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="tp-btn tp-btn--primary tp-btn--lg">Speak to a Specialist</a>
    </section>

    <!-- Backoffice Content -->
    <section class="tp-section">
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

<script>
document.addEventListener('DOMContentLoaded', function() {
    const pills = document.querySelectorAll('.tp-filter-pill');
    const cards = document.querySelectorAll('.tp-visto-card');
    
    pills.forEach(pill => {
        pill.addEventListener('click', () => {
            pills.forEach(p => p.classList.remove('active'));
            pill.classList.add('active');

            const filterValue = pill.getAttribute('data-filter');

            cards.forEach(card => {
                if (filterValue === 'all' || card.getAttribute('data-category') === filterValue) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
});
</script>

<?php get_footer(); ?>
