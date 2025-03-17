<?php get_header(); ?>
<main>
    <h2 class="page-header center-align"><?php echo strtolower(get_the_title()); ?></h2>
    <?php if (has_post_thumbnail()) : ?>
    <div class="featured-image">
        <?php the_post_thumbnail(); ?>
    </div>
    <?php endif; ?>
    <?php get_template_part("components/content"); ?>
</main>
<?php get_footer(); ?>