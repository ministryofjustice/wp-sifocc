<article <?php post_class('event-list-item'); ?> >
    <div class="content">
        <h1>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h1>
        <?php get_template_part('partials/event-meta'); ?>
        <?php the_excerpt(); ?>
    </div>
</article>
