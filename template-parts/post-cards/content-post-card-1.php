
<div class="kazflix-post-card">
    <?php
    // Fetch meta values
    $post_id = get_the_ID();
    $is_banner_enabled = get_post_meta( $post_id, 'kazflix_banner_enabled', true );
    $banner_name = get_post_meta( $post_id, 'kazflix_banner_name', true );
    $banner_bg_color = get_post_meta( $post_id, 'kazflix_banner_bg_color', true );
    $banner_text_color = get_post_meta( $post_id, 'kazflix_banner_text_color', true );

    // Conditionally render the ribbon
    if ( $is_banner_enabled === '1' && ! empty( $banner_name ) ) : ?>
        <div class="kazflix-ribbon" style="--c: <?php echo esc_attr( $banner_bg_color ); ?>; color: <?php echo esc_attr( $banner_text_color ); ?>;">
            <?php echo esc_html( $banner_name ); ?>
        </div>
    <?php endif; ?>

    
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

