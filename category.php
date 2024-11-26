<?php
/**
 * The template for displaying category pages.
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
        <div>
        <!-- Category Title -->
        <header class="kazflix-category-header-1">
            <h1 class="kazflix-category-title-1"><?php single_cat_title(); ?></h1>
            <p class="kazflix-category-description-1"><?php echo category_description(); ?></p>
        </header>

        <!-- Category Posts -->
        <div class="kazflix-category-posts-container-1">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <!-- Single Post Card -->
                    <div class="kazflix-category-1-post-card-container">
                        <?php get_template_part( 'template-parts/post-cards/content', 'post-card-1' ); ?>
                    </div>
                <?php endwhile; ?>

               
            <?php else : ?>
                <p class="kazflix-no-posts"><?php _e( 'No posts found in this category.', 'kazflix' ); ?></p>
            <?php endif; ?>
        </div>
         <!-- Pagination -->
         <div class="kazflix-pagination">
                    <?php the_posts_pagination( array(
                        'mid_size'  => 2,
                        'prev_text' => __( '« Previous', 'kazflix' ),
                        'next_text' => __( 'Next »', 'kazflix' ),
                    ) ); ?>
                </div>
                    </div>
    </div>
</main>

<?php get_footer(); ?>
