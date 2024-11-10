<?php
/**
 * Template part for displaying posts in a horizontal scrollable layout.
 *
 * @package KazFlix
 */

// Number of posts to display
$post_count = 20; // Adjust as needed

// Query for latest posts
$args = array(
    'post_type'      => 'post',
    'posts_per_page' => $post_count,
);
$query = new WP_Query($args);

if ( $query->have_posts() ) : ?>
    <div class="kazflix-scroll-wrapper">
        <div class="kazflix-mixed-layout-horizontal">
            <?php
            $post_index = 0;
            while ( $query->have_posts() ) : $query->the_post(); ?>
                
                <?php if ($post_index % 5 === 0): ?>
                    <!-- Large Post Card -->
                    <div class="kazflix-large-post">
                        <a href="<?php echo esc_url( get_permalink() ); ?>" class="kazflix-post-thumbnail">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail( 'large' ); ?>
                            <?php endif; ?>
                        </a>
                        <div class="kazflix-post-content">
                            <h2 class="kazflix-post-title"><?php the_title(); ?></h2>
                            <p class="kazflix-post-description"><?php echo wp_trim_words(get_the_excerpt(), 25); // Limit to 150 characters ?></p>
                        </div>
                    </div>
                
                <?php else: ?>
                    <?php if ($post_index % 5 === 1): ?>
                        <!-- Start Small Post Group -->
                        <div class="kazflix-small-post-group">
                    <?php endif; ?>
                    
                    <!-- Small Post Card -->
                    <div class="kazflix-small-post">
                        <a href="<?php echo esc_url( get_permalink() ); ?>" class="kazflix-post-thumbnail">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail( 'medium' ); ?>
                            <?php endif; ?>
                        </a>
                        <div class="kazflix-post-content">
                            <h3 class="kazflix-post-title"><?php the_title(); ?></h3>
                            <p class="kazflix-post-description"><?php echo wp_trim_words(get_the_excerpt(), 25); // Limit to 150 characters ?></p>
                        </div>
                    </div>
                    
                    <?php if ($post_index % 5 === 4): ?>
                        <!-- End Small Post Group -->
                        </div>
                    <?php endif; ?>
                
                <?php endif; ?>

                <?php $post_index++; ?>
            <?php endwhile; ?>
        </div>
    </div>
    <?php wp_reset_postdata(); ?>
<?php else : ?>
    <p><?php esc_html_e( 'No posts found.', 'kazflix' ); ?></p>
<?php endif; ?>


