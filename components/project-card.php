<div>    
    <h2 class="page-header center-align"><?php echo get_the_title(); ?></h2>
        <?php if (has_post_thumbnail()) : ?>
        <div class="featured-image">
            <?php the_post_thumbnail(); ?>
        </div>
        <?php endif; ?>
        <?php echo get_the_excerpt(); ?>
</div>