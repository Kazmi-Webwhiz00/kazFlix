<?php
/**
 * Theme Customizer Setup.
 *
 * @package KazFlix
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Include individual settings files
require_once get_stylesheet_directory() . '/inc/settings/archive-settings.php';
require_once get_stylesheet_directory() . '/inc/settings/query-modifications.php';

// Add more as needed...

/**
 * Hook Customizer settings initialization.
 */
function kazflix_customize_register( $wp_customize ) {
    do_action( 'kazflix_customize_register', $wp_customize );
}
add_action( 'customize_register', 'kazflix_customize_register' );
