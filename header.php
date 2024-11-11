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

<header class="kazflix-site-header">
    <div class="kazflix-header-left">
        <span class="kazflix-menu-icon">
            <svg viewBox="0 0 24 24" height="25" fill="#fff" aria-hidden="true" class="css-6qu7l6"><path xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" d="M21 4a1 1 0 1 0 0-2H5a1 1 0 0 0 0 2zM3.53 16.044l5.113-3.196a1 1 0 0 0 0-1.696L3.53 7.956A1 1 0 0 0 2 8.804v6.392a1 1 0 0 0 1.53.848M21 13a1 1 0 1 0 0-2h-8a1 1 0 1 0 0 2zm1 8a1 1 0 0 1-1 1H5a1 1 0 1 1 0-2h16a1 1 0 0 1 1 1"/></svg>
        </span>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="kazflix-site-logo">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/kazflix-logo.png" alt="KazFlix Logo">
            <span>crazy games</span>
        </a>
    </div>
    
    <div class="kazflix-header-center ">
        <div class="kazflix-search-bar-container" > 
            <input type="text" placeholder="Search">
            <svg fill="#AAADBE" width="30" height="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M21.71 20.29 18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.39M11 18a7 7 0 1 1 7-7 7 7 0 0 1-7 7"/></svg>
        </div>
    </div>
    
    <div class="kazflix-header-right">
        <span class="kazflix-icon">
            <!-- User SVG Icon -->
            <svg width="30" height="30" viewBox="0 0 17 17"><path d="M17 16.488c-.063-2.687-2.778-4.999-6.521-5.609V9.505c.492-.473.842-1.207 1.071-1.833.332-.166.624-.536.794-1.033.238-.688.146-1.323-.206-1.629.028-.238.046-.481.015-.723-.079-.663.065-1.038.194-1.368.106-.277.229-.591.106-.945C12.011.701 10.726 0 8.835 0l-.264.005C7.258.052 6.864.605 6.6 1.12a3 3 0 0 0-.077.151c-1.712.153-1.697 1.569-1.684 2.707l.003.369q0 .308.026.639c-.425.3-.504 1.005-.179 1.737.185.415.452.729.749.892.243.674.625 1.47 1.179 1.965v1.283C2.819 11.452.063 13.77 0 16.488L-.012 17h17.023zM1.054 16c.392-2.094 2.859-3.821 6.122-4.204l.441-.052V9.078l-.216-.15c-.393-.272-.791-.947-1.09-1.851l-.083-.281-.294-.051c-.053-.019-.208-.153-.33-.428a1.3 1.3 0 0 1-.112-.415l.51.143-.096-.749a8 8 0 0 1-.064-.95l-.003-.38c-.015-1.341.051-1.634.773-1.699.545-.048.752-.449.876-.689.15-.292.28-.543 1.12-.574L8.835 1c.829 0 2.279.169 2.669 1.282 0 .043-.052.177-.09.275-.145.374-.364.939-.254 1.853.024.188-.007.424-.04.675l-.089.805.441-.048c.008.104-.004.269-.075.472-.097.289-.242.438-.237.454h-.36l-.114.342c-.283.853-.65 1.497-1.009 1.768l-.198.15v2.726l.438.055c3.211.401 5.641 2.123 6.03 4.192z" fill="#fff"/></svg>
        </span>

        <span class="kazflix-icon">
            <!-- Bell SVG Icon -->
            <svg width="30" height="30" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill="#fff" d="M9.985 0c1.089 0 1.971.898 1.971 2.006l-.009.163c.868.352 1.707.936 2.451 1.71.862.893 1.366 2.077 1.521 3.596v5.478l1.191 2.098c.4.666.528 1.224.216 1.707-.286.441-.797.595-1.49.583h-2.67C12.854 18.86 11.532 20 9.95 20s-2.905-1.14-3.216-2.658H3.778l-.056-.003c-.627-.054-1.094-.357-1.199-.94-.071-.397.023-.823.268-1.331l1.225-2.18.003-5.473c.107-1.21.56-2.337 1.348-3.371.667-.875 1.62-1.519 2.654-1.89a2 2 0 0 1-.006-.148C8.015.898 8.897 0 9.985 0m1.818 17.342H8.097c.275.77 1 1.32 1.853 1.32.852 0 1.578-.55 1.853-1.32M10.082 3.124c-1.354 0-2.843.645-3.677 1.74-.638.836-.994 1.722-1.075 2.61v5.59c0 .117-.03.232-.087.333l-1.291 2.296q-.09.19-.12.311h12.014c.121.002.213-.003.276-.005a3 3 0 0 0-.141-.265l-1.287-2.267a.7.7 0 0 1-.088-.335l.003-5.586c-.121-1.162-.506-2.064-1.149-2.732-1.04-1.08-2.262-1.69-3.378-1.69m-.097-1.787a.66.66 0 0 0-.635.497q.369-.047.732-.047.266 0 .535.032a.66.66 0 0 0-.632-.482"/></svg>
        </span>

        <span class="kazflix-icon">
            <!-- Heart SVG Icon -->
            <svg width="30" height="30" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="#fff"><path d="M14.88 4.78a3.5 3.5 0 0 0-.37-.9 3.2 3.2 0 0 0-.6-.79 3.8 3.8 0 0 0-1.21-.81 3.74 3.74 0 0 0-2.84 0 4 4 0 0 0-1.16.75l-.05.06-.65.65-.65-.65-.05-.06a4 4 0 0 0-1.16-.75 3.74 3.74 0 0 0-2.84 0 3.8 3.8 0 0 0-1.21.81 3.55 3.55 0 0 0-.97 1.69 3.8 3.8 0 0 0-.12 1c0 .317.04.633.12.94a4 4 0 0 0 .36.89 3.8 3.8 0 0 0 .61.79L8 14.31l5.91-5.91c.237-.233.44-.5.6-.79A3.6 3.6 0 0 0 15 5.78a3.8 3.8 0 0 0-.12-1m-1 1.63a2.7 2.7 0 0 1-.69 1.21l-5.21 5.2-5.21-5.2a3 3 0 0 1-.44-.57 3 3 0 0 1-.27-.65 3.3 3.3 0 0 1-.08-.69A3.4 3.4 0 0 1 2.06 5a2.8 2.8 0 0 1 .27-.65q.181-.315.44-.57a2.9 2.9 0 0 1 .89-.6 2.8 2.8 0 0 1 2.08 0c.33.137.628.338.88.59l1.36 1.37 1.36-1.37a2.7 2.7 0 0 1 .88-.59 2.8 2.8 0 0 1 2.08 0c.331.143.633.347.89.6.174.165.32.357.43.57a2.7 2.7 0 0 1 .35 1.34 2.6 2.6 0 0 1-.06.72z"/></svg>
        </span>
        <button class="kazflix-login-button">Log in</button>
    </div>
</header>

<?php wp_footer(); ?>
</body>
</html>
