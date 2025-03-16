<?php
    add_theme_support('post-thumbnails');
    add_post_type_support('page', 'excerpt');

    function theme_scripts_and_styles() {
        wp_enqueue_style(
            'idm-normalize',
            'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css',
            [],
        );

        wp_enqueue_style(
            'idm-main',
            get_template_directory_uri() . '/dist/css/main.css',
            [],
            filemtime(get_template_directory() . '/dist/css/main.css')
        );
    }
    add_action('wp_enqueue_scripts', 'theme_scripts_and_styles');
?>