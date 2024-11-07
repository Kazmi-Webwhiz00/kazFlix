<?php
function kazflix_enqueue_styles() {
    // Enqueue the parent theme stylesheet
    wp_enqueue_style('hello-elementor-style', get_template_directory_uri() . '/style.css');

    // Enqueue the child theme stylesheet
    wp_enqueue_style('kazflix-child-style', get_stylesheet_directory_uri() . '/style.css', array('hello-elementor-style'), wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts', 'kazflix_enqueue_styles');
