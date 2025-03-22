<article>
    <?php if (has_post_thumbnail()) : ?>
    <div class="featured-image">
        <?php the_post_thumbnail(); ?>
    </div>
    <?php endif; ?>
    <div class="project-box">
        <h2 class="page-header center-align"><?php echo get_the_title(); ?></h2>
        <p class="project-blurb"><?php echo get_the_excerpt(); ?></p>
        <div class="see-more-button">
            <a href="<?php the_permalink(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/circle.svg" class="blue-whale-inv-filter" alt="circle"></a>
            <a class="button-link" href="<?php the_permalink(); ?>">see m<span class="dark-text">ore &#9656;</span></a>
        </div>
    </div>
</article>