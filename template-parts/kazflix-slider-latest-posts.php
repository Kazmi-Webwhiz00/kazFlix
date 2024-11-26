<?php
/**
 * Template part for displaying posts in a horizontal scrollable layout.
 *
 * @package KazFlix
 */

// Number of posts to display
$home_slider_post_count = get_theme_mod( 'kazflix_home_slider_post_count', 15 ); 

// Query for latest posts
$args = array(
    'post_type'      => 'post',
    'posts_per_page' => $home_slider_post_count,
);
$query = new WP_Query($args);

if ( $query->have_posts() ) : ?>
    <div class="kazflix-carousel-container">
        
        <div class="kazflix-scroll-wrapper">
            <button class="kazflix-scroll-button left-button"  id="kazflix-scroll-left">‹</button>
            <div class="kazflix-mixed-layout-horizontal" id="kazflixCarousel">
                <?php
                $post_index = 0;
                while ( $query->have_posts() ) : $query->the_post(); ?>
                    
                    <?php if ($post_index % 5 === 0): ?>
                        <!-- Single Large Post -->
                        <div class="kazflix-post-card-container">

                        <?php get_template_part( 'template-parts/post-cards/content', 'post-card-1' ); ?>
                        </div>
                    
                    <?php elseif ($post_index % 5 === 1): ?>
                        <!-- Group of Four Posts -->
                        <div class="kazflix-post-card-container">
                            <div class="kazflix-small-post-group">
                    <?php endif; ?>

                    <?php if ($post_index % 5 > 0 && $post_index % 5 < 5): ?>
                        <!-- Post Card within Small Group -->
                        <div class="kazflix-post-card-container-category">
                        <?php get_template_part( 'template-parts/post-cards/content', 'post-card-1' ); ?>
                    </div>
                    <?php endif; ?>

                    <?php if ($post_index % 5 === 4): ?>
                            <!-- End Small Post Group -->
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php $post_index++; ?>
                <?php endwhile; ?>
            </div>
            <button class="kazflix-scroll-button right-button" id="kazflix-scroll-right">›</button>
        </div>

    </div>

    <?php wp_reset_postdata(); ?>
<?php else : ?>
    <p><?php esc_html_e( 'No posts found.', 'kazflix' ); ?></p>
<?php endif; ?>
