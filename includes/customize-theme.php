<?php
    function theme_setup() {
        add_theme_support('post-thumbnails');
        add_post_type_support('page', 'excerpt');
    }
    add_action('after_setup_theme', 'theme_setup');

    function theme_add_logo() {
        add_theme_support('custom-logo', [
            'height' => 250,
            'width' => 250,
            'flex-width' => true, //allows width resizing
            'flex-height' => true, //allows height resizing
        ]);
    }
    add_action('after_setup_theme', 'theme_add_logo');

    function login_page_custom_logo() {
        ?>
        <style>
            body.login {
                background-color: #f3f3f3;
            }

            /*.login h1 a {
                background-image: url('<?php echo esc_url(get_stylesheet_directory_uri() . '/dist/images/logo.webp'); ?>') !important;
            }*/
        </style>
        <?php
    }
    add_action('login_enqueue_scripts', 'login_page_custom_logo');
?>