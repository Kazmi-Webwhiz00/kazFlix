<?php
/**
 * Meta Fields Registration
 *
 * @package KazFlix
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// Add Meta Box
function kazflix_add_banner_meta_box() {
    add_meta_box(
        'kazflix_banner_meta', // Unique ID
        'Banner Settings',     // Box Title
        'kazflix_banner_meta_box_callback', // Content Callback
        'post',                // Post Type
        'side',                // Context (e.g., 'side', 'normal', etc.)
        'default'              // Priority
    );
}
add_action( 'add_meta_boxes', 'kazflix_add_banner_meta_box' );

// Meta Box Content Callback
function kazflix_banner_meta_box_callback( $post ) {
    // Nonce field for security
    wp_nonce_field( 'kazflix_save_banner_meta', 'kazflix_banner_meta_nonce' );

    // Retrieve current values
    $banner_name = get_post_meta( $post->ID, 'kazflix_banner_name', true );
    $banner_bg_color = get_post_meta( $post->ID, 'kazflix_banner_bg_color', true );
    $banner_text_color = get_post_meta( $post->ID, 'kazflix_banner_text_color', true );
    $banner_enabled = get_post_meta( $post->ID, 'kazflix_banner_enabled', true );

    // Output form fields
    ?>
    <p>
        <label for="kazflix_banner_name">Banner Name</label>
        <input type="text" id="kazflix_banner_name" name="kazflix_banner_name" value="<?php echo esc_attr( $banner_name ); ?>" class="widefat">
    </p>
    <p>
        <label for="kazflix_banner_bg_color">Background Color</label>
        <input type="color" id="kazflix_banner_bg_color" name="kazflix_banner_bg_color" value="<?php echo esc_attr( $banner_bg_color ); ?>" class="widefat">
    </p>
    <p>
        <label for="kazflix_banner_text_color">Text Color</label>
        <input type="color" id="kazflix_banner_text_color" name="kazflix_banner_text_color" value="<?php echo esc_attr( $banner_text_color ); ?>" class="widefat">
    </p>
    <p>
        <label for="kazflix_banner_enabled">
            <input type="checkbox" id="kazflix_banner_enabled" name="kazflix_banner_enabled" value="1" <?php checked( $banner_enabled, '1' ); ?>>
            Enable Banner
        </label>
    </p>
    <?php
}

// Save Meta Box Data
function kazflix_save_banner_meta( $post_id ) {
    // Check if nonce is set
    if ( ! isset( $_POST['kazflix_banner_meta_nonce'] ) ) {
        return;
    }

    // Verify nonce
    if ( ! wp_verify_nonce( $_POST['kazflix_banner_meta_nonce'], 'kazflix_save_banner_meta' ) ) {
        return;
    }

    // Prevent autosave
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    // Check user permissions
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    // Save/Update Banner Name
    if ( isset( $_POST['kazflix_banner_name'] ) ) {
        update_post_meta( $post_id, 'kazflix_banner_name', sanitize_text_field( $_POST['kazflix_banner_name'] ) );
    }

    // Save/Update Background Color
    if ( isset( $_POST['kazflix_banner_bg_color'] ) ) {
        update_post_meta( $post_id, 'kazflix_banner_bg_color', sanitize_hex_color( $_POST['kazflix_banner_bg_color'] ) );
    }

    // Save/Update Text Color
    if ( isset( $_POST['kazflix_banner_text_color'] ) ) {
        update_post_meta( $post_id, 'kazflix_banner_text_color', sanitize_hex_color( $_POST['kazflix_banner_text_color'] ) );
    }

    // Save/Update Enable Banner
    $is_enabled = isset( $_POST['kazflix_banner_enabled'] ) ? '1' : '0';
    update_post_meta( $post_id, 'kazflix_banner_enabled', $is_enabled );
}
add_action( 'save_post', 'kazflix_save_banner_meta' );
