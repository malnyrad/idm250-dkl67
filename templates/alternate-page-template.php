<?php
    /*
    * Template Name: Alternate Page Template
    */
?>
<?php get_header(); ?>
<main class="bg-deco">
    <div class="wrapper">
        <div class="alt-hero">
            <h2 class="alt-page-header center-align"><?php echo get_the_title(); ?></h2>
            <?php if (has_post_thumbnail()) : ?>
            <div class="alt-page-image">
                <?php the_post_thumbnail(); ?>
                <p><?php echo get_the_excerpt(); ?></p>
            </div>
        </div>
        <?php endif; ?>
        <div class="alt-main-content">
            <?php echo get_the_content(); ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>