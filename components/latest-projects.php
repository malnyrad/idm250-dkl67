<?php
$query = new WP_Query([
    "post_type" => "projects",
    "posts_per_page" => 3,
]);
?>
<?php if ($query->have_posts()) : ?>
<section class="">
    <h2>Most Recent Work</h2>
    <?php while ($query->have_posts()) : $query->the_post();
        // for each post, render this component
        get_template_part("components/project-card");
        endwhile;
    ?>
</section>
<?php else : ?>
<p>No projects found.</p>
<?php endif; ?>