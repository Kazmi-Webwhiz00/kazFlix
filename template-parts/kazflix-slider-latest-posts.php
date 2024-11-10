<?php
/**
 * Template part for displaying posts in a horizontal scrollable slider.
 *
 * @package KazFlix
 */

// Number of posts to display
$post_count = 10; // Change this to adjust the number of posts displayed

// Query for latest posts
$args = array(
    'post_type'      => 'post',
    'posts_per_page' => $post_count,
);
$query = new WP_Query($args);

if ( $query->have_posts() ) : ?>
    <div class="kazflix-slider-wrapper">
        <div class="kazflix-horizontal-scroll-container">
            <?php
            while ( $query->have_posts() ) {
                $query->the_post();
                $post_link = get_permalink();
                ?>
                <article class="kazflix-scroll-post">
                    <a href="<?php echo esc_url( $post_link ); ?>" class="kazflix-scroll-thumbnail">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail( 'medium' ); // Adjust size as needed ?>
                        <?php endif; ?>
                    </a>
                    <div class="kazflix-scroll-overlay">
                        <h2 class="kazflix-scroll-title"><?php the_title(); ?></h2>
                    </div>
                </article>
            <?php } ?>
        </div>
        <!-- Scroll Buttons - Left and Right -->
        <button class="kazflix-scroll-button kazflix-scroll-left">❮</button>
        <button class="kazflix-scroll-button kazflix-scroll-right">❯</button>
    </div>
    <?php wp_reset_postdata(); ?>
<?php else : ?>
    <p><?php esc_html_e( 'No posts found.', 'kazflix' ); ?></p>
<?php endif; ?>
