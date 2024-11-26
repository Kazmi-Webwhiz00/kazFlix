<?php
/**
 * Template part for displaying the left sidebar with category posts
 *
 * @package Your_Child_Theme
 */

// Get the categories of the current post
$current_post_categories = get_the_category();
if (!empty($current_post_categories)) {
    // Use the first category of the current post
    $category_slug = $current_post_categories[0]->slug;

    // Query arguments for similar posts
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 10,
        'category_name' => $category_slug, // Dynamically set category
        'orderby' => 'date',
        'order' => 'DESC',
        'post__not_in' => array(get_the_ID()), // Exclude the current post
    );

    // The Query
    $similar_posts_query = new WP_Query($args);

    if ($similar_posts_query->have_posts()) : ?>
        <div class="kazflix-left-side-bar-post-list">
            <?php while ($similar_posts_query->have_posts()) : $similar_posts_query->the_post(); ?>
                <div class="kazflix-left-side-card-container-post-1">
                    <?php get_template_part('template-parts/post-cards/content', 'post-card-1'); ?>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif;

    // Restore original Post Data
    wp_reset_postdata();
} else {
    // Optionally, handle cases where the current post has no category
    echo '<p>No related posts available.</p>';
}
?>
