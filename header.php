<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/header-style.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
 <?php get_template_part( 'template-parts/headers/header-1', 'home' ); ?>
<?php wp_footer(); ?>
</body>
</html>
