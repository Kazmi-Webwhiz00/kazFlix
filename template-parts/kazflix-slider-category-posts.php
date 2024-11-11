<?php
/**
 * Template part for displaying posts in a horizontal scrollable layout by category.
 *
 * @package KazFlix
 */

// Limit of posts per category
$posts_per_category = 15;

// Get all categories
$categories = get_categories();

if ( ! empty( $categories ) ) :
    foreach ( $categories as $category ) :
        // Query for latest posts in each category
        $args = array(
            'post_type'      => 'post',
            'posts_per_page' => $posts_per_category,
            'category__in'   => array( $category->term_id ),
        );
        $query = new WP_Query( $args );

        if ( $query->have_posts() ) : ?>
                        <div class="kazflix-titleContainer">
                    <h2 class="kazflix-carouselTitle"><?php echo esc_html( $category->name ); ?></h2>
                </div>
            <div class="kazflix-scroll-wrapper">
                <div class="kazflix-mixed-layout-horizontal">
                    <?php
                    while ( $query->have_posts() ) : $query->the_post(); ?>
                        <!-- Single Post Card -->
                        <div class="kazflix-post-card-container-category">
                        <?php get_template_part( 'template-parts/content', 'post-card' ); ?>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
            <?php wp_reset_postdata(); ?>
        <?php endif;
    endforeach;
else : ?>
    <p><?php esc_html_e( 'No categories found.', 'kazflix' ); ?></p>
<?php endif; ?>
