<?php get_header(); ?>
<main class="bg-deco">
  <div class="wrapper">
    <h2 class="page-header center-align"><?php single_term_title(); ?></h2>
    <?php
        if (have_posts()) :
          while (have_posts()) : the_post();
          // for each post, render this component
          get_template_part("components/project-card");
          endwhile;
        wp_reset_postdata();
        the_posts_pagination();
        else : ?>
      <p><?php esc_html_e('No projects found.', 'idm250-2025'); ?></p>
      <?php endif; ?>
    </div>
</main>
<?php get_footer(); ?>