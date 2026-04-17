<?php
function advocacia_pro_setup() {
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

    register_nav_menus( array(
        'primary' => esc_html__( 'Primary', 'advocacia-pro' ),
    ) );
}
add_action( 'after_setup_theme', 'advocacia_pro_setup' );

function advocacia_pro_scripts() {
    // Fonts: Outfit (to match the clean exact image styling)
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap', false );

    // Main stylesheet
    wp_enqueue_style( 'advocacia-pro-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css') );

    // GSAP Core & ScrollTrigger
    // wp_enqueue_script( 'gsap-core', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js', array(), '3.12.5', true );
    // wp_enqueue_script( 'gsap-scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js', array('gsap-core'), '3.12.5', true );

    // Custom Animations
    wp_enqueue_script( 'advocacia-pro-animations', get_template_directory_uri() . '/assets/js/animations.js', array(), filemtime(get_template_directory() . '/assets/js/animations.js'), true );
}
add_action( 'wp_enqueue_scripts', 'advocacia_pro_scripts' );
