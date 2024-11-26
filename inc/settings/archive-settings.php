<?php
/**
 * Archive Settings Customizer.
 *
 * @package KazFlix
 */

add_action( 'kazflix_customize_register', function( $wp_customize ) {
    // Add Archive Settings Section
    $wp_customize->add_section( 'kazflix_archive_settings', array(
        'title'    => __( 'Archive Settings', 'kazflix' ),
        'priority' => 30,
    ) );

    // Setting: Posts per page on archives
    $wp_customize->add_setting( 'kazflix_posts_per_page_count', array(
        'default'           => 10,
        'sanitize_callback' => 'absint',
    ) );

    $wp_customize->add_control( 'kazflix_posts_per_page_count_control', array(
        'label'       => __( 'Posts Per Page', 'kazflix' ),
        'description' => __( 'Set the number of posts to display per page on archives.', 'kazflix' ),
        'section'     => 'kazflix_archive_settings',
        'settings'    => 'kazflix_posts_per_page_count',
        'type'        => 'number',
        'input_attrs' => array(
            'min' => 1,
        ),
    ) );

    // Setting: Number of posts for home main slider
    $wp_customize->add_setting( 'kazflix_home_slider_post_count', array(
        'default'           => 5, // Default number of posts for home slider
        'sanitize_callback' => 'absint',
    ) );

    $wp_customize->add_control( 'kazflix_home_slider_post_count_control', array(
        'label'       => __( 'Home Slider Post Count', 'kazflix' ),
        'description' => __( 'Set the number of posts to display in the home main slider.', 'kazflix' ),
        'section'     => 'kazflix_archive_settings',
        'settings'    => 'kazflix_home_slider_post_count',
        'type'        => 'number',
        'input_attrs' => array(
            'min' => 1,
        ),
    ) );

    // Setting: Number of posts for category slider
    $wp_customize->add_setting( 'kazflix_category_slider_post_count', array(
        'default'           => 5, // Default number of posts for category slider
        'sanitize_callback' => 'absint',
    ) );

    $wp_customize->add_control( 'kazflix_category_slider_post_count_control', array(
        'label'       => __( 'Category Slider Post Count', 'kazflix' ),
        'description' => __( 'Set the number of posts to display in the category slider.', 'kazflix' ),
        'section'     => 'kazflix_archive_settings',
        'settings'    => 'kazflix_category_slider_post_count',
        'type'        => 'number',
        'input_attrs' => array(
            'min' => 1,
        ),
    ) );
} );
