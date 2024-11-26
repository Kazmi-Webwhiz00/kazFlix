<?php
/**
 * Template part for displaying a slider of the first 5 posts and a static layout for the rest.
 *
 * @package KazFlix
 */

// Query for up to 15 posts

$home_slider_post_count = get_theme_mod( 'kazflix_home_slider_post_count', 15 ); 

$args = array(
    'post_type'      => 'post',
    'posts_per_page' => $home_slider_post_count,
);
$query = new WP_Query($args);

if ( $query->have_posts() ) : 
    $posts = $query->posts; // Get all posts as an array
    ?>

    <!-- Slider Container for the First 5 Posts -->
    <div class="kazflix-slider-container-mobile">
        <div class="kazflix-slider-mobile" id="kazflixSlider-mobile">
            <?php
            // Display the first 5 posts in the slider
            for ( $i = 0; $i < 5 && $i < count($posts); $i++ ) :
                $post = $posts[$i];
                setup_postdata($post);
                ?>
                <div class="kazflix-slider-item-mobile">
                    <?php get_template_part( 'template-parts/post-cards/content', 'post-card-1' ); ?>
                </div>
            <?php endfor; ?>
        </div>

        <!-- Slider Dots Navigation for the first 5 posts -->
        <div class="kazflix-slider-dots-mobile">
            <?php for ( $i = 0; $i < min(5, count($posts)); $i++ ) : ?>
                <span class="kazflix-dot-mobile" data-slide="<?php echo $i; ?>"></span>
            <?php endfor; ?>
        </div>
    </div>

    <!-- Static Layout Container for Remaining Posts -->
    <div class="kazflix-static-layout-container-mobile">
        
        <?php
        // Group the remaining posts in chunks of 5, starting from the 6th post
        $remaining_posts = array_slice($posts, 5);
        $chunks = array_chunk($remaining_posts, 5);

        foreach ( $chunks as $chunk ) :
            ?>
            <!-- Large Post -->
            <div class="kazflix-large-post-mobile">
                <?php
                // Set up post data for the first (large) post in the chunk
                $post = $chunk[0];
                setup_postdata($post);
                get_template_part( 'template-parts/post-cards/content', 'post-card-1' );
                ?>
            </div>

            <!-- Small Post Group -->
            <div class="kazflix-small-post-group-container-mobile">
                <?php foreach ( array_slice($chunk, 1) as $post ) : // Remaining 4 small posts ?>
                    <div class="kazflix-small-post-mobile">
                        <?php
                        setup_postdata($post);
                        get_template_part( 'template-parts/post-cards/content', 'post-card-1' );
                        ?>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php wp_reset_postdata(); // Reset after each chunk ?>
        <?php endforeach; ?>
        
    </div>

    <?php wp_reset_postdata(); ?>
<?php else : ?>
    <p><?php esc_html_e( 'No posts found.', 'kazflix' ); ?></p>
<?php endif; ?>
