<?php
/**
 * Template part for displaying the inner content area
 *
 * @package Your_Child_Theme
 */
?>

<div class="kazflix-inner-content-area-single-post-1">
    <!-- Post Title -->
    <h1 class="kazflix-inner-title-single-post-1">
        <?php the_title(); ?>
    </h1>

    <!-- Author Details -->
    <div class="kazflix-inner-author-details-single-post-1">
        <?php
        // Display author avatar (thumbnail)
        echo get_avatar(get_the_author_meta('ID'), 50, '', 'Author Thumbnail', array('class' => 'kazflix-author-thumbnail-single-post-1'));
        ?>
        <span class="kazflix-inner-author-info">
            Written by <span class="kazflix-inner-author-name"><?php the_author(); ?></span>
</span>
    </div>

    <!-- Post Creation Details -->
    <div class="kazflix-inner-post-meta-single-post-1">
        <p>
            Published on <?php echo get_the_date(); ?>
        </p>
    </div>

    <!-- Post Content -->
    <div class="kazflix-inner-post-content-single-post-1">
        <?php the_content(); ?>
    </div>
</div>
