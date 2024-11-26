<?php
/**
 * Sidebar Navigation Template
 *
 * @package KazFlix
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// Fetch all categories with their images
$categories = get_categories(array(
    'hide_empty' => false, // Include all categories, even if they have no posts
));
?>

<aside class="sidebar-navigation">
    <!-- Mobile Search and Back Button -->
    <div class="search-container">
        <button class="back-button" id="kazflix-side-bar-back-button">
            <!-- Back Button SVG Icon -->
            <svg width="24" height="24" viewBox="0 0 24 24" fill="#AAADBE" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/>
            </svg>
        </button>
        <div class="search-bar">
            <!-- Search SVG Icon -->
            <svg fill="#AAADBE" width="30" height="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M21.71 20.29 18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.39M11 18a7 7 0 1 1 7-7 7 7 0 0 1-7 7"/>
            </svg>
            <input type="text" placeholder="Search">
        </div>
    </div>

    <nav>
        <ul class="sidebar-menu">
            <!-- Dynamic Categories -->
            <?php if (!empty($categories)) : ?>
                <?php foreach ($categories as $category) : ?>
                    <?php
                    $category_name = $category->name; // Get the category name
                    $category_link = get_category_link($category->term_id); // Get the category link
                    $category_image_id = get_term_meta($category->term_id, 'category_image_id', true); // Get the category image ID
                    $category_image_url = $category_image_id ? wp_get_attachment_url($category_image_id) : ''; // Get the category image URL
                    ?>
                    <li>
                        <a href="<?php echo esc_url($category_link); ?>">
                            <?php if ($category_image_url) : ?>
                                <img src="<?php echo esc_url($category_image_url); ?>" alt="<?php echo esc_attr($category_name); ?>" style="width:24px; height:24px; margin-right:8px; vertical-align:middle;">
                            <?php else : ?>
                                <i class="icon-default"></i> <!-- Default icon if no image -->
                            <?php endif; ?>
                            <span>
    <?php echo ucfirst(strtolower(explode(' ', esc_html($category_name))[0])) . substr(esc_html($category_name), strlen(explode(' ', $category_name)[0])); ?>
</span>

                        </a>
                    </li>
                <?php endforeach; ?>
            <?php else : ?>
                <li><span>No categories found.</span></li>
            <?php endif; ?>
        </ul>
    </nav>
</aside>
