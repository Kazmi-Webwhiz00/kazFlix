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
    <?php get_template_part( 'template-parts/banners/kazflix-wellcome-banner', 'home' ); ?>

    <?php if ( wp_is_mobile() ) : ?>
        <!-- Load the mobile-specific slider for the latest posts -->
        <?php get_template_part( 'template-parts/kazflix-slider-latest-posts-mobile', 'home' ); ?>
    <?php else : ?>
        <!-- Load the desktop-specific slider for the latest posts -->
        <?php get_template_part( 'template-parts/kazflix-slider-latest-posts', 'home' ); ?>
    <?php endif; ?>
   
    <?php get_template_part( 'template-parts/kazflix-slider-category-posts', 'home' ); ?>
</main>

<?php
get_footer(); // Load the footer
?>
