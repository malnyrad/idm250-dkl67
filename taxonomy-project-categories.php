<?php get_header(); ?>
<div class="wrapper">

  <h1><?php single_term_title(); ?></h1>

  <?php if (have_posts()) : ?>
  <ul class="grid grid-3">
    <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part("components/project-card"); ?>
    <?php endwhile; ?>
  </ul>
  <?php the_posts_pagination(); ?>
  <?php else : ?>
  <p>No projects found in this category.</p>
  <?php endif; ?>

</div>
<?php get_footer(); ?>