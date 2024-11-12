<?php
// Footer Template: footer-1.php
?>

<div class="kazflix-footer-buttons">
    <button id="kazflix-random-post-button" class="kazflix-footer-button kazflix-random-game-button">
        <i class="fas fa-dice"></i> Random game
    </button>
    <button id="kazflix-back-to-top-button" class="kazflix-footer-button kazflix-back-to-top-button">
        <i class="fas fa-arrow-up"></i> Back to top
    </button>
</div>

<script>
    // Redirect to a random post when "Random game" is clicked
    document.getElementById('kazflix-random-post-button').addEventListener('click', function() {
        <?php
        $random_post = get_posts(array('orderby' => 'rand', 'numberposts' => 1));
        if (!empty($random_post)) {
            $random_post_url = get_permalink($random_post[0]->ID);
        ?>
        window.location.href = "<?php echo esc_url($random_post_url); ?>";
        <?php } ?>
    });
</script>
