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
    <div class="main-container">
        <!-- Sidebar Area Wrapper -->
        <div class="sidebar-area">
            <?php get_template_part( 'template-parts/sidebars/sidebar-navigation-1' ); ?>
        </div>

        <!-- Main Content Area with Post Loop -->
        <div class="content-area">
            <?php get_template_part( 'template-parts/banners/kazflix-wellcome-banner', 'home' ); ?>

            <?php if ( wp_is_mobile() ) : ?>
                <!-- Load the mobile-specific slider for the latest posts -->
                <?php get_template_part( 'template-parts/kazflix-slider-latest-posts-mobile', 'home' ); ?>
            <?php else : ?>
                <!-- Load the desktop-specific slider for the latest posts -->
                <?php get_template_part( 'template-parts/kazflix-slider-latest-posts', 'home' ); ?>
            <?php endif; ?>

            <?php get_template_part( 'template-parts/kazflix-slider-category-posts', 'home' ); ?>
        </div>
    </div>
</main>
