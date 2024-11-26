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

<main id="content" class="kazflix-single-main">
    <div class="container">
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
