<?php get_header(); ?>
<div class="page-section">
    <section class="container">
        <header>
            <h1><?php echo sifocc_get_archive_title(); ?></h1>
        </header>

        <?php
        $args = array(
            'post_type' => 'events',
            'meta_key' => 'start_date',
            'orderby' => 'meta_value_num',
            'order' => 'DESC'
        );
        $events = new WP_Query($args);
        while ($events->have_posts()) : $events->the_post();
            get_template_part('partials/event-list-item');
        endwhile;
        ?>

        <?php get_template_part('partials/pager') ?>
    </section>
</div>
<?php get_footer(); ?>
