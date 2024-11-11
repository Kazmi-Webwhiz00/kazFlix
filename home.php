<?php
/**
 * The template for displaying the latest posts on the homepage.
 *
 * @package KazFlix
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); // Load the header
?>

<main id="content" class="kazflix-home-main">
    <!-- Main Content Area with Post Loop -->
    <?php get_template_part( 'template-parts/kazflix-top-banner', 'home' ); ?>

    <?php get_template_part( 'template-parts/kazflix-slider-latest-posts', 'home' ); ?>

    <?php get_template_part( 'template-parts/kazflix-slider-category-posts', 'home' ); ?>
</main>

<?php
get_footer(); // Load the footer
?>
