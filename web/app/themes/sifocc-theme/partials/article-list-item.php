<article <?php post_class('article-list-item'); ?> >
    <div class="content">
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <?php get_template_part('partials/entry-meta'); ?>
        <?php the_excerpt(); ?>
    </div>
</article>
