<article <?php post_class('featured-article-list-item'); ?> >
    <div class="date visible-max-width">
        <span class="date-day"><?php echo get_the_date('j'); ?></span>
        <span class="date-month"><?php echo get_the_date('F'); ?></span>
    </div>

    <div class="content">
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <time class="published visible-phone" datetime="<?php echo get_the_time('c'); ?>"><?php echo get_the_date('j F Y'); ?></time>
        <?php the_excerpt(); ?>
    </div>
</article>
