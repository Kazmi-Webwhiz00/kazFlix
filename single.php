<?php
/**
 * The template for displaying single posts.
 *
 * @package KazFlix
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header(); ?>

<main id="content" class="kazflix-home-main">
    <div class="main-container">
        <!-- Sidebar Area Wrapper -->
        <div class="sidebar-area">
            <?php get_template_part( 'template-parts/sidebars/sidebar-navigation-1' ); ?>
        </div>
        <?php 
        // Ensure we're on a single post page
        if ( is_singular( 'post' ) ) {
            // Render the single post template
            get_template_part( 'template-parts/single-post/single-post-template-1' );
        } else {
            echo '<p>' . __( 'Invalid post.', 'kazflix' ) . '</p>';
        }
        ?>
    </div>
</main>

<?php get_footer(); ?>
