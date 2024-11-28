<?php

require_once get_stylesheet_directory() . '/inc/meta-fields.php';
require_once get_stylesheet_directory() . '/inc/category-images.php';
require_once get_stylesheet_directory() . '/inc/settings/customizer.php';
require_once get_stylesheet_directory() . '/inc/kazflix-breadcrumbs.php';






function kazflix_enqueue_styles() {
    // Enqueue jQuery (default with WordPress)
    wp_enqueue_script('jquery');

    // Enqueue the parent theme stylesheet
    wp_enqueue_style('hello-elementor-style', get_template_directory_uri() . '/style.css');

    // Enqueue the main child theme stylesheet
    wp_enqueue_style('kazflix-child-style', get_stylesheet_directory_uri() . '/style.css', array('hello-elementor-style'), wp_get_theme()->get('Version'));
    wp_enqueue_style('kazflix-layout-style', get_stylesheet_directory_uri() . '/layout.css', array('kazflix-child-style'), '1.0.0');

    // Enqueue additional stylesheets
    wp_enqueue_style('kazflix-header-style', get_stylesheet_directory_uri() . '/assets/css/header.css', array('kazflix-child-style'), '1.0.0');
    wp_enqueue_style('kazflix-header-1-style', get_stylesheet_directory_uri() . '/assets/css/headers/header-1.css', array('kazflix-child-style'), '1.0.0');
    wp_enqueue_style('kazflix-footer-1-style', get_stylesheet_directory_uri() . '/assets/css/footers/footer-1.css', array('kazflix-child-style'), '1.0.0');
    wp_enqueue_style('kazflix-banners-style', get_stylesheet_directory_uri() . '/assets/css/banners/kazflix-wellcome-banner.css', array('kazflix-child-style'), '1.0.0');
    wp_enqueue_style('kazflix-side-bar-style-1', get_stylesheet_directory_uri() . '/assets/css/sidebars/sidebar-navigation-1.css', array('kazflix-child-style'), '1.0.0');
    wp_enqueue_style('kazflix-category-style-1', get_stylesheet_directory_uri() . '/assets/css/kazflix-category-page.css', array('kazflix-child-style'), '1.0.0');
   
    wp_enqueue_style('kazflix-single-post-page-style-1', get_stylesheet_directory_uri() . '/assets/css/kazflix-single-post-page.css', array('kazflix-child-style'), '1.0.0');
   
    wp_enqueue_style('custom-google-fonts', 'https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;700&display=swap', false);
    wp_enqueue_style('kazflix-latest-posts-slider-style', get_stylesheet_directory_uri() . '/assets/css/kazflix-latest-posts-slider.css', array('kazflix-child-style'), '1.0.0');
    wp_enqueue_style('kazflix-latest-posts-slider-style-mobile', get_stylesheet_directory_uri() . '/assets/css/kazflix-latest-posts-slider-mobile.css', array('kazflix-child-style'), '1.0.0');
    wp_enqueue_style('post-card-css-1', get_stylesheet_directory_uri() . '/assets/css/post-card-1', array('kazflix-child-style'), '1.0.0');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');

    // Enqueue custom JavaScript with jQuery as a dependency
    wp_enqueue_script('kazflix-scroll-js', get_stylesheet_directory_uri() . '/assets/js/kazflix-latest-posts-slider.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'kazflix_enqueue_styles');


function theme_enqueue_media_uploader() {
    if (is_admin()) {
        wp_enqueue_media();
    }
}
add_action('admin_enqueue_scripts', 'theme_enqueue_media_uploader');
