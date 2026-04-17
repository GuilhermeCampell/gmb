<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="site-branding">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo">
            <span class="logo-icon">G</span>
            <span class="logo-text">GLOBAL MOBILITY <strong style="margin-left: 2px;">BOUTIQUE</strong></span>
        </a>
    </div>
    
    <div class="header-right-col">
        <!-- Main Nav -->
        <nav class="main-navigation tp-nav">
            <ul id="primary-menu">
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                <li><a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>">About us</a></li>
                <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Services</a></li>
                <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a></li>
                <li><a href="<?php echo esc_url( home_url( '/assess-profile/' ) ); ?>" class="tp-btn tp-btn--primary tp-btn--sm" style="margin-left: 15px;">Assess Profile</a></li>
            </ul>
        </nav>
    </div>
</header>
