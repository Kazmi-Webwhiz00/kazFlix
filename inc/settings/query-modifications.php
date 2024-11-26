<?php
/**
 * Modify main query based on Customizer setting for posts per page.
 *
 * @package KazFlix
 */

function kazflix_modify_archive_posts_per_page( $query ) {
    // Check if it's the main query and on an archive page
    if ( $query->is_main_query() && ! is_admin() && ( is_archive() || is_home() ) ) {
        // Get the posts per page value from Customizer
        $posts_per_page = get_theme_mod( 'kazflix_posts_per_page_count', 10 ); // Default to 10
        $query->set( 'posts_per_page', $posts_per_page );
    }
}
add_action( 'pre_get_posts', 'kazflix_modify_archive_posts_per_page' );
