<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>

    <div class="page-section">
        <?php get_template_part('partials/article'); ?>
    </div>

<?php endwhile; ?>
<?php get_footer(); ?>