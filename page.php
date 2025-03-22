<?php get_header(); ?>
<main class="bg-deco">
    <div class="wrapper">
        <h2 class="page-header center-align"><?php echo get_the_title(); ?></h2>
        <?php if (has_post_thumbnail()) : ?>
        <div class="page-image">
            <?php the_post_thumbnail(); ?>
            <p><?php echo get_the_excerpt(); ?></p>
        </div>
        <?php endif; ?>
        <?php get_template_part("components/content"); ?>
    </div>
</main>
<?php get_footer(); ?>