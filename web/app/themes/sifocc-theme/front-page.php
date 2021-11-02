<?php get_header(); ?>
    <div class="page-section page-section-text">
        <?php if (get_field('left_heading')) : ?>
            <article>
                <header>
                    <h1><?php the_field('left_heading'); ?></h1>
                </header>
                <p><?php the_field('left_text_area'); ?></p>
                <a href="<?php the_field('left_link_url'); ?>"><?php the_field('left_link_text'); ?></a>
            </article>
        <?php endif; ?>

        <?php if (get_field('right_heading')) : ?>
            <article>
                <header>
                    <h1><?php the_field('right_heading'); ?></h1>
                </header>
                <p><?php the_field('right_text_area'); ?></p>
                <a href="<?php the_field('right_link_url'); ?>"><?php the_field('right_link_text'); ?></a>
            </article>
        <?php endif; ?>
    </div>

    <div class="map-banner">
        <?php if (get_field('banner_button_text')) : ?>
            <a class="button"
               href="<?php the_field('banner_button_url'); ?>"><?php the_field('banner_button_text'); ?></a>
        <?php endif; ?>
    </div>

    <div class="page-section page-section-feed">
        <section>
            <header>
                <h1>Latest news</h1>
            </header>
            <div class="featured-news">
                <?php
                // display sticky posts
                $sticky_posts = array();
                $featured_args = array(
                    'posts_per_page' => 1
                );
                global $post;
                $featured_posts = get_posts($featured_args);
                foreach ($featured_posts as $post) : setup_postdata($post);
                    get_template_part('partials/featured-article-list-item');
                    $sticky_posts[] = $post->ID;
                endforeach;
                ?>
            </div>
        </section>
        <section>
            <header>
                <h1>Events</h1>
            </header>
            <div class="featured-events">
                <?php
                // display sticky posts

                $featured_args = array(
                    'post_type' => 'events',
                    'meta_key'         =>'start_date',
                    'orderby'         =>'meta_value_num',
                    'order'           =>'DESC',
                    'posts_per_page' => 1
                );
                global $post;
                $featured_posts = get_posts($featured_args);
                foreach ($featured_posts as $post) : setup_postdata($post);
                    get_template_part('partials/event-list-item');
                endforeach;
                ?>
            </div>
        </section>
    </div>
<?php get_footer(); ?>
