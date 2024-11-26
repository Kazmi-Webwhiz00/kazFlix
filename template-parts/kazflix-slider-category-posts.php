<?php
/**
 * Template part for displaying posts in a horizontal scrollable layout by category.
 *
 * @package KazFlix
 */

// Limit of posts per category
$category_slider_post_count = get_theme_mod( 'kazflix_category_slider_post_count', 15 );

// Get all categories
$categories = get_categories();

if ( ! empty( $categories ) ) :
    $category_count = 1; // Initialize category counter
    
    foreach ( $categories as $category ) :
        
        // Query for latest posts in each category
        $args = array(
            'post_type'      => 'post',
            'posts_per_page' => $category_slider_post_count,
            'category__in'   => array( $category->term_id ),
        );
        $query = new WP_Query( $args );

        if ( $query->have_posts() ) : ?>
            <div class="kazflix-titleContainer">
                <span class="kazflix-carouselTitle"><?php echo esc_html( $category->name ); ?></span>
                <a href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>" class="kazflix-seeMore">
                    <?php esc_html_e( 'View More', 'kazflix' ); ?>
                </a>
            </div>
            <div class="kazflix-carousel-container">
                <div class="kazflix-scroll-wrapper">
                    <button class="kazflix-scroll-button left-button"  id="kazflix-scroll-left">‹</button>
                    <div class="kazflix-mixed-layout-horizontal">
                        <?php
                        // Check if it's the second category
                        $container_class = ($category_count === 2) ? 'kazflix-post-card-container-category-short' : 'kazflix-post-card-container-category';
                        
                        while ( $query->have_posts() ) : $query->the_post(); ?>
                            <!-- Single Post Card with conditional class based on category count -->
                            <div class="<?php echo $container_class; ?>">
                                <?php get_template_part( 'template-parts/post-cards/content', 'post-card-1' ); ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <button class="kazflix-scroll-button right-button" id="kazflix-scroll-right">›</button>
                </div>
            </div>
            <?php wp_reset_postdata(); ?>

            <?php $category_count++; // Increment category counter after each category ?>
        <?php endif;
    endforeach;
else : ?>
    <p><?php esc_html_e( 'No categories found.', 'kazflix' ); ?></p>
<?php endif; ?>
