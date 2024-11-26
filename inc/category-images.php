<?php
// Add image upload field when adding a category
function add_category_image_field() {
    ?>
    <div class="form-field">
        <label for="category-image"><?php _e('Category Image', 'your-theme'); ?></label>
        <input type="hidden" id="category-image" name="category-image" value="">
        <div id="category-image-preview"></div>
        <button class="button category-image-upload-button"><?php _e('Upload/Add Image', 'your-theme'); ?></button>
    </div>
    <script>
        jQuery(document).ready(function($) {
            $('.category-image-upload-button').on('click', function(e) {
                e.preventDefault();
                let frame = wp.media({
                    title: '<?php _e('Select Category Image', 'your-theme'); ?>',
                    button: { text: '<?php _e('Use this image', 'your-theme'); ?>' },
                    multiple: false
                });
                frame.on('select', function() {
                    let attachment = frame.state().get('selection').first().toJSON();
                    $('#category-image').val(attachment.id);
                    $('#category-image-preview').html('<img src="' + attachment.url + '" style="max-width: 100%;"/>');
                });
                frame.open();
            });
        });
    </script>
    <?php
}
add_action('category_add_form_fields', 'add_category_image_field');

// Add image upload field when editing a category
function edit_category_image_field($term) {
    $image_id = get_term_meta($term->term_id, 'category_image_id', true);
    $image_url = $image_id ? wp_get_attachment_url($image_id) : '';
    ?>
    <tr class="form-field">
        <th scope="row"><label for="category-image"><?php _e('Category Image', 'your-theme'); ?></label></th>
        <td>
            <input type="hidden" id="category-image" name="category-image" value="<?php echo esc_attr($image_id); ?>">
            <div id="category-image-preview">
                <?php if ($image_url) : ?>
                    <img src="<?php echo esc_url($image_url); ?>" style="max-width: 100%;"/>
                <?php endif; ?>
            </div>
            <button class="button category-image-upload-button"><?php _e('Upload/Add Image', 'your-theme'); ?></button>
        </td>
    </tr>
    <script>
        jQuery(document).ready(function($) {
            $('.category-image-upload-button').on('click', function(e) {
                e.preventDefault();
                let frame = wp.media({
                    title: '<?php _e('Select Category Image', 'your-theme'); ?>',
                    button: { text: '<?php _e('Use this image', 'your-theme'); ?>' },
                    multiple: false
                });
                frame.on('select', function() {
                    let attachment = frame.state().get('selection').first().toJSON();
                    $('#category-image').val(attachment.id);
                    $('#category-image-preview').html('<img src="' + attachment.url + '" style="max-width: 100%;"/>');
                });
                frame.open();
            });
        });
    </script>
    <?php
}
add_action('category_edit_form_fields', 'edit_category_image_field');

// Save category image when added/edited
function save_category_image($term_id) {
    if (isset($_POST['category-image']) && $_POST['category-image']) {
        update_term_meta($term_id, 'category_image_id', absint($_POST['category-image']));
    } else {
        delete_term_meta($term_id, 'category_image_id');
    }
}
add_action('created_category', 'save_category_image');
add_action('edited_category', 'save_category_image');


// Add new column to categories table
function add_category_image_column($columns) {
    $columns['category_image'] = __('Image', 'your-theme');
    return $columns;
}
add_filter('manage_edit-category_columns', 'add_category_image_column');

// Populate the image column
function display_category_image_column($content, $column_name, $term_id) {
    if ($column_name === 'category_image') {
        $image_id = get_term_meta($term_id, 'category_image_id', true);
        if ($image_id) {
            $image_url = wp_get_attachment_url($image_id);
            $content = '<img src="' . esc_url($image_url) . '" style="width:50px; height:auto;">';
        }
    }
    return $content;
}
add_filter('manage_category_custom_column', 'display_category_image_column', 10, 3);

