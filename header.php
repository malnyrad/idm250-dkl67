<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
            wp_title('|', true, 'right'); // About
            bloginfo('name'); // IDM250
        ?>
    </title>
    <!--<link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">-->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <?php get_template_part('components/navigation'); ?>