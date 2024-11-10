<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="kazflix-site-header">
    <div class="kazflix-header-left">
        <button class="kazflix-menu-icon">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="kazflix-site-logo">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/kazflix-logo.png" alt="KazFlix Logo">
            <span>crazy games</span>
        </a>
    </div>
    
    <div class="kazflix-header-center">
        <input type="text" class="kazflix-search-bar" placeholder="Search">
    </div>
    
    <div class="kazflix-header-right">
        <button class="kazflix-icon-button"><i class="kazflix-icon-user"></i></button>
        <button class="kazflix-icon-button"><i class="kazflix-icon-bell"></i></button>
        <button class="kazflix-icon-button"><i class="kazflix-icon-heart"></i></button>
        <button class="kazflix-login-button">Log in</button>
    </div>
</header>
