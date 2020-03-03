<?php get_header(); ?>
<div class="page-section">
    <section class="container">
        <header>
            <h1>News</h1>
        </header>

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : ?>
                <?php the_post(); ?>
                <?php get_template_part('partials/article-list-item'); ?>
            <?php endwhile; ?>
        <?php endif; ?>

        <?php get_template_part('partials/pager') ?>
    </section>
</div>
<?php get_footer(); ?>
