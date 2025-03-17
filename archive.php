<?php get_header(); ?>
<div class="wrapper">
  <div class="archive-header">
    <h1><?php the_archive_title(); ?></h1>
    <?php the_archive_description(); ?>
  </div>

  <?php if (have_posts()) : ?>
  <h1><?php the_archive_title(); ?></h1>

<ul class="grid grid-3">
    <?php
  while (have_posts()) : the_post(); ?>
    <div class="grid-item">
    <?php echo strtolower(get_the_title()); ?>
    </div>

    <?php endwhile; ?>
  </ul>

  <?php the_posts_pagination(); ?>

  <?php else : ?>
  <p>No posts found.</p>
  <?php endif; ?>
</div>
<?php get_footer(); ?>