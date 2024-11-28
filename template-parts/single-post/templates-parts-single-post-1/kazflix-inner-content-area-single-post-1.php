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

    <!-- Pagination Links -->
    <?php
    global $numpages;
    if ($numpages > 1) : // Only show pagination if there's more than one page
    ?>
    <div class="kazflix-pagination-single-post-1">
        <button id="kazflix-prev-page" class="kazflix-pagination-arrow" <?php if ($page <= 1) echo 'disabled'; ?>>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M32 15H3.41l8.29-8.29-1.41-1.42-10 10a1 1 0 0 0 0 1.41l10 10 1.41-1.41L3.41 17H32z" data-name="4-Arrow Left"/></svg>
        </button>
        <span class="kazflix-pagination-info">
            Page <span id="kazflix-current-page"><?php echo $page; ?></span> of <span id="kazflix-total-pages"><?php echo $numpages; ?></span>
        </span>
        <button id="kazflix-next-page" class="kazflix-pagination-arrow" <?php if ($page >= $numpages) echo 'disabled'; ?>>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="m31.71 15.29-10-10-1.42 1.42 8.3 8.29H0v2h28.59l-8.29 8.29 1.41 1.41 10-10a1 1 0 0 0 0-1.41" data-name="3-Arrow Right"/></svg>
    </button>
</div>

    <?php endif; ?>
</div>
