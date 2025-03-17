<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
            wp_title('|', true, 'right'); //page name
            bloginfo('name'); //site title
        ?>
    </title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="header-bar">
    <h6><a class='logo' href='/' id='top'>&lambda;</a></h6>
        <nav>
            <input id="toggle" type="checkbox">
            <label class="menu-button" for="toggle">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/hamburger-menu.svg" class="light-filter" alt="Hamburger menu">
                <span></span>
            </label>
            <div class="bg-deco-2 menu-overlay">
            <?php
                wp_nav_menu([
                    'theme_location' => 'primary-menu',
                    'menu_class' => 'menu',
                    'container' => false
                ]);
            ?>
            </div>
        </nav>
    </header>