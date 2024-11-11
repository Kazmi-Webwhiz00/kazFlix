<!-- template-parts/content-post-card.php -->
<div class="kazflix-post-card">
    <a href="<?php echo esc_url( get_permalink() ); ?>" class="kazflix-post-thumbnail">
        <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail( 'large' ); ?>
        <?php endif; ?>
    </a>
    <div class="kazflix-post-content">
        <h2 class="kazflix-post-title"><?php the_title(); ?></h2>
        <p class="kazflix-post-description"><?php echo wp_trim_words( get_the_excerpt(), 25 ); ?></p>
    </div>
</div>
