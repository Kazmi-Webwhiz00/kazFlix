<?php
/**
 * Breadcrumb-related functions for KazFlix theme.
 *
 * @package KazFlix
 */


    /**
     * Display breadcrumbs for single post pages.
     *
     * @return void
     */
    function kazflix_display_breadcrumbs() {
        if ( is_single() ) {
            global $post;

            echo '<div class="kazflix-breadcrumb-single-post-1">';
            echo '<span class="breadcrumb-label">Breadcrumb:</span> ';

            // Home link
            echo '<a href="' . esc_url( home_url( '/' ) ) . '">Home</a> > ';

            // Get all categories of the post
            $categories = get_the_category( $post->ID );
            if ( ! empty( $categories ) ) {
                // Get the primary category or the first one
                $primary_category = $categories[0];

                // Generate the category hierarchy
                $category_hierarchy = get_category_parents( $primary_category->term_id, true, ' > ' );

                // Remove trailing separator
                $category_hierarchy = rtrim( $category_hierarchy, ' > ' );

                echo $category_hierarchy;
            }

            // Display the current post title
            echo ' > ' . esc_html( get_the_title() );

            echo '</div>';
        }
    }
