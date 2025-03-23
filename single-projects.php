<?php get_header(); ?>
<main class="bg-deco">
    <div class="wrapper">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="project">
                <h2 class="project-header"><?php the_title(); ?></h2>
                <p class="tag-line"><?php echo get_the_excerpt(); ?></p>
                <p class="project-categories">
                    <?php echo get_the_term_list(
                        get_the_ID(), // 204
                        'project-categories', // taxonomy name
                        '', // before
                        ', ', // separator
                        '' // after
                    ); ?>
                </p>
                <hr>
                <?php if (has_post_thumbnail()) : ?>
                    <div class="project-thumbnail">
                        <?php the_post_thumbnail(); ?>
                    </div>
                <?php endif; ?>
                <div class="project-content">
                    <?php the_content(); ?>
                </div>
                <div class="project-tags">
                    <?php the_tags("Tags: ", ", "); ?>
                </div>
            </div>
        <?php endwhile; endif; ?>
    </div>
</main>
<?php get_footer(); ?>