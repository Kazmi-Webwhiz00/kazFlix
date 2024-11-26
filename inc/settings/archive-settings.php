<?php
/**
 * Archive Settings Customizer.
 *
 * @package KazFlix
 */

function kazflix_archive_settings( $wp_customize ) {
    // Add Archive Settings Section
    $wp_customize->add_section( 'kazflix_archive_settings', array(
        'title'    => __( 'Archive Settings', 'kazflix' ),
        'priority' => 30,
    ) );

    // Add setting and control
    $wp_customize->add_setting( 'kazflix_posts_per_page', array(
        'default'           => 10,
        'sanitize_callback' => 'absint',
    ) );

    $wp_customize->add_control( 'kazflix_posts_per_page_control', array(
        'label'       => __( 'Posts Per Page', 'kazflix' ),
        'description' => __( 'Set the number of posts per page on archives post.', 'kazflix' ),
        'section'     => 'kazflix_archive_settings',
        'settings'    => 'kazflix_posts_per_page',
        'type'        => 'number',
        'input_attrs' => array(
            'min' => 1,
        ),
    ) );
}
add_action( 'kazflix_customize_register', 'kazflix_archive_settings' );
