<?php
    function theme_scripts_and_styles() {
        wp_enqueue_style(
            'normalize-css',
            'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css',
            [],
        );

        wp_enqueue_style(
            'idm-variables',
            get_template_directory_uri() . '/dist/css/variables.css',
            [],
            filemtime(get_template_directory() . '/dist/css/variables.css')
        );

        wp_enqueue_style(
            'idm-navigation',
            get_template_directory_uri() . '/dist/css/navigation.css',
            [],
            filemtime(get_template_directory() . '/dist/css/navigation.css')
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