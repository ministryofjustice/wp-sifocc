<?php /* Template name: News and events */ ?>
<?php get_header(); ?>
<div class="page-section page-section-feed">
    <section>
        <header>
            <h1>News</h1>
        </header>
        <?php
        $news_args = array(
            'posts_per_page' => 3
        );
        global $post;
        $news_posts = get_posts($news_args);
        foreach($news_posts as $post) : setup_postdata($post);
            get_template_part('partials/article-list-item');
        endforeach;
        ?>
        <a class="button" href="<?php echo get_post_type_archive_link('post') ?>">More news</a>
    </section>
    <section>
        <header>
            <h1>Events</h1>
        </header>
        <?php
        $events_args = array(
            'posts_per_page'  => 3,
            'post_type'       => 'events',
            'meta_key'         =>'start_date',
            'orderby'         =>'meta_value_num',
            'order'           =>'DESC'
        );
        global $post;
        $events_posts = get_posts($events_args);

        foreach($events_posts as $post) : setup_postdata($post);
            get_template_part('partials/event-list-item');
        endforeach;
        ?>
        <a class="button" href="<?php echo get_post_type_archive_link('events') ?>">More events</a>
    </section>
</div>
<?php get_footer(); ?>
