<?php
function kazflix_enqueue_styles() {
    // Enqueue the parent theme stylesheet
    wp_enqueue_style('hello-elementor-style', get_template_directory_uri() . '/style.css');

    // Enqueue the main child theme stylesheet
    wp_enqueue_style('kazflix-child-style', get_stylesheet_directory_uri() . '/style.css', array('hello-elementor-style'), wp_get_theme()->get('Version'));

    // Enqueue header-specific stylesheet from assets/css directory
    wp_enqueue_style('kazflix-header-style', get_stylesheet_directory_uri() . '/assets/css/header.css', array('kazflix-child-style'), '1.0.0');
    wp_enqueue_style('kazflix-banners-style', get_stylesheet_directory_uri() . '/assets/css/kazflix-banners.css', array('kazflix-child-style'), '1.0.0');

     // Enqueue slider-specific stylesheet
    wp_enqueue_style('kazflix-latest-posts-slider-style', get_stylesheet_directory_uri() . '/assets/css/kazflix-latest-posts-slider.css', array('kazflix-child-style'), '1.0.0');

    wp_enqueue_script('kazflix-scroll-js', get_stylesheet_directory_uri() . '/assets/js/kazflix-latest-posts-slider.js', array(), '1.0.0', true);

    // Enqueue Font Awesome for icons (if needed)
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'kazflix_enqueue_styles');
