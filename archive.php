<?php get_header(); ?>
<main class="bg-deco">
  <div class="wrapper">
    <h2 class="page-header center-align">Projects</h2>
    <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = [
            'post_type' => 'projects',
            'posts_per_page' => 10,
            'paged' => $paged,
        ];
        $query = new WP_Query($args);

        if ($query->have_posts()) :
          while ($query->have_posts()) : $query->the_post();
          // for each post, render this component
          get_template_part("components/project-card");
          endwhile;
        get_template_part('components/pagination.php');
        wp_reset_postdata();
        else : ?>
      <p><?php esc_html_e('No projects found.', 'idm250-2025'); ?></p>
      <?php endif; ?>
    </div>
</main>
<?php get_footer(); ?>