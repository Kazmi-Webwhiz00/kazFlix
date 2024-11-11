
<div class="kazflix-post-card">
    <!-- Ribbon Tag for posts with tags -->
    <div class="kazflix-ribbon">
        <!-- Fetch the first tag of the post -->
        <?php 
        $post_tags = get_the_tags(); 
        if ($post_tags) {
            echo esc_html($post_tags[0]->name);
        }
        ?>
    </div>
    
    <!-- Post thumbnail and content -->
    <a href="<?php echo esc_url( get_permalink() ); ?>" class="kazflix-post-thumbnail">
        <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail( 'large' ); ?>
        <?php endif; ?>
    </a>
    
    <div class="kazflix-post-content">
        <div class="kazflix-title-link">
            <span class="kazflix-post-title"><?php the_title(); ?></span>
            <a href="<?php echo esc_url( get_permalink() ); ?>" class="kazflix-link-icon">
                <svg width="14" height="14" viewBox="0 0 1024 1024" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M642.174 504.594c7.99 7.241 7.897 17.58-0.334 24.782L332.62 799.945c-8.867 7.759-9.766 21.236-2.007 30.103 7.758 8.867 21.236 9.766 30.103 2.007l309.221-270.569c27.429-24 27.792-64.127 0.89-88.507L360.992 192.192c-8.73-7.912-22.221-7.248-30.133 1.482-7.912 8.73-7.248 22.222 1.482 30.134l309.833 280.786z"/>
                </svg>
            </a>
        </div>
    </div>
</div>

