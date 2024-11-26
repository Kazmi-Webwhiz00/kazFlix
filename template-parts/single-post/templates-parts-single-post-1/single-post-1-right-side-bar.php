<?php
/**
 * Template part for displaying the right sidebar with an ads banner and random posts
 *
 * @package Your_Child_Theme
 */
?>

<div class="kazflix-right-side-bar-container-single-post-1">
    <!-- Ads Banner -->
    <div id="kazflix-ads-banner-1-right-area-single-post-1" class="kazflix-ads-banner-single-post-1">
        <!-- Add your banner image or code here -->
        <img src="https://via.placeholder.com/300x500" alt="Advertisement">
    </div>

    <?php
    // Query arguments for random posts
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 10,
        'orderby' => 'rand', // Random order
        'post__not_in' => array(get_the_ID()), // Exclude the current post
    );

    // The Query
    $random_posts_query = new WP_Query($args);

    if ($random_posts_query->have_posts()) : ?>
        <div id="kazflix-right-side-bar-post-list-single-post-1" class="kazflix-right-side-bar-post-list-single-post-1">
            <?php while ($random_posts_query->have_posts()) : $random_posts_query->the_post(); ?>
                <div id="kazflix-right-side-card-container-post-1-<?php the_ID(); ?>" class="kazflix-right-side-card-container-post-1">
                    <?php get_template_part('template-parts/post-cards/content', 'post-card-1'); ?>
                </div>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <!-- Debug message if no posts found -->
        <p>No random posts found.</p>
    <?php endif;

    // Restore original Post Data
    wp_reset_postdata();
    ?>
</div>
