<div class="kazflix-post-details-section-single-post-1">
    <!-- Share and Subscribe Section -->
    <div class="kazflix-share-subscribe-section-single-post-1">
        <button class="kazflix-share-button-single-post-1">Share Post</button>
    </div>

    <!-- Post Information Section -->
    <div class="kazflix-post-info-single-post-1">
        <h3 class="kazflix-post-info-title">Post Info</h3>
        <p>
            <span class="info-label">Image credit:</span> (c) <?php echo get_the_author(); ?>
        </p>
        <p>
            <span class="info-label">Earnings disclaimer:</span>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque luctus ante non dolor gravida, vitae varius sem rutrum.
        </p>
    </div>

    <!-- Breadcrumb Section -->
    <div class="kazflix-breadcrumb-single-post-1">
        <span class="breadcrumb-label">Breadcrumb:</span> 
        <a href="/">Home</a> > 
        <a href="/category/something">Something</a> > 
        <a href="/category/something/adventure">Adventure</a> > 
        Minecraft
    </div>

    <!-- Tags and Categories Section -->
    <div class="kazflix-tags-categories-single-post-1">
        <?php
        // Fetch and display all categories
        $all_categories = get_categories();
        if ($all_categories) {
            foreach ($all_categories as $category) {
                echo '<a href="' . esc_url(get_category_link($category->term_id)) . '" class="kazflix-tag-button-single-post-1">' . esc_html($category->name) . '</a>';
            }
        }

        // Fetch and display all tags
        $all_tags = get_tags();
        if ($all_tags) {
            foreach ($all_tags as $tag) {
                echo '<a href="' . esc_url(get_tag_link($tag->term_id)) . '" class="kazflix-tag-button-single-post-1">' . esc_html($tag->name) . '</a>';
            }
        }
        ?>
    </div>
</div>
