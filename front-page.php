<?php get_header(); ?>
<main>
    <?php get_template_part('components/home-title'); ?>
    <?php if (has_post_thumbnail()) : ?>
    <div class="featured-image">
        <?php the_post_thumbnail(); ?>
    </div>
    <?php endif; ?>
</main>
<?php get_template_part("components/content"); ?><?php get_footer(); ?>