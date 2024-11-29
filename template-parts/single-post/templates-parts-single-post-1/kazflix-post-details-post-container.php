<?php
// Get tags of the current post
$tags = wp_get_post_tags(get_the_ID());
$tag_ids = array();

// Extract tag IDs
if ($tags) {
    foreach ($tags as $tag) {
        $tag_ids[] = $tag->term_id;
    }
}

// Query arguments for posts with similar tags
$args = array(
    'post_type'      => 'post',
    'posts_per_page' => 10, // Limit to 10 posts
    'orderby'        => 'date',
    'order'          => 'DESC',
    'post__not_in'   => array(get_the_ID()), // Exclude the current post
    'tag__in'        => $tag_ids, // Include posts with similar tags
);

// The Query
$similar_posts_query = new WP_Query($args);

if ($similar_posts_query->have_posts()) :
    $post_counter = 0; // Initialize a counter
    ?>

    <div class="kazflix-footer-single-post-1">
        <div class="kazflix-details-posts-container-wrapper">
            <?php
            // First loop: Display the first 5 posts
            while ($similar_posts_query->have_posts()) :
                $similar_posts_query->the_post();
                $post_counter++; // Increment the counter
            ?>
                <div class="kz-post-details-cards-container">
                    <?php get_template_part('template-parts/post-cards/content', 'post-card-1'); ?>
                </div>
            <?php
                // Stop the loop after 5 posts
                if ($post_counter >= 5) {
                    break;
                }
            endwhile;
            ?>
        </div>
    </div>

    <div class="kazflix-footer-single-post-1">
        <div class="kazflix-details-posts-container-wrapper">
            <?php
            // Second loop: Display the rest of the posts
            while ($similar_posts_query->have_posts()) :
                $similar_posts_query->the_post();
            ?>
                <div class="kz-post-details-cards-container">
                    <?php get_template_part('template-parts/post-cards/content', 'post-card-1'); ?>
                </div>
            <?php endwhile; ?>
        </div>
    </div>

<?php
endif;

// Restore original Post Data
wp_reset_postdata();
?>
