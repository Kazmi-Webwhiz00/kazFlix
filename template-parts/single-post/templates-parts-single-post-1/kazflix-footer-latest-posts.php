<?php
/**
 * Template part for displaying the footer with latest posts
 *
 * @package Your_Child_Theme
 */
?>

<div class="kazflix-footer-single-post-1">
    <div class="kazflix-footer-posts-container-1">
        <?php
        // Query arguments for the latest posts excluding the current post
        $args = array(
            'post_type'      => 'post',
            'posts_per_page' => 12, // Limit to 20 posts
            'orderby'        => 'date',
            'order'          => 'DESC',
            'post__not_in'   => array(get_the_ID()), // Exclude the current post
        );

        // The Query
        $latest_posts_query = new WP_Query($args);

        if ($latest_posts_query->have_posts()) :
            while ($latest_posts_query->have_posts()) : $latest_posts_query->the_post();
        ?>
                <div class="kazflix-footer-1-post-card-container">
                    <?php get_template_part('template-parts/post-cards/content', 'post-card-1'); ?>
                </div>
        <?php
            endwhile;
        else :
            echo '<p>No latest posts available.</p>';
        endif;

        // Restore original Post Data
        wp_reset_postdata();
        ?>
    </div>
</div>
