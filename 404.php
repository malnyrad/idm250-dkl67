    <?php get_header(); ?>
    <div class="wrapper">
        <div class="error-404">
            <h3>404: Page Not Found</h3>
            <p>Sorry, the page you're looking for doesn't exist.</p>
            <!-- Add some helpful navigation 
            <nav class="error-navigation">
                <?php
                        wp_nav_menu([
                            'theme_location' => '404-menu',
                            'menu_class' => 'error-menu',
                            'container' => false
                        ]);
                ?>
            </nav>-->
        </div>
    </div>
    <?php get_footer(); ?>