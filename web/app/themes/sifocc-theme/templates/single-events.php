<?php while (have_posts()) : the_post(); ?>

    <div class="page-section">
        <?php get_template_part('partials/event'); ?>
    </div>

<?php endwhile; ?>
