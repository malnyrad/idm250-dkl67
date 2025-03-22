<?php get_header(); ?>
<?php if (has_post_thumbnail()) : ?>
    <div class="project-thumbnail">
        <?php the_post_thumbnail(); ?>
    </div>
<?php endif; ?>
<main class="project-container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="project">
            <h2 class="project-title"><?php the_title(); ?></h2>
            <p class="project-meta">Published on <?php the_date(); ?> in <?php the_category(", "); ?></p>
            <div>
            <p><strong>Project Categories:</strong>
                <?php echo get_the_term_list(
                    get_the_ID(), // 204
                    'project-categories', // taxonomy name
                    '', // before
                    ', ', // separator
                    '' // after
                ); ?>
            </p>
            </div>
            <hr>
            <div class="project-content">
                <?php the_content(); ?>
            </div>
            <div class="project-tags">
                <?php the_tags("Tags: ", ", "); ?>
            </div>
        </article>
    <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>