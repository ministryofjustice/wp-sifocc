<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package sifocc
 */

get_header();
?>
<?php while (have_posts()) : the_post(); ?>

    <div class="page-section">
        <article class="container">
            <header>
                <h1><?php the_title(); ?></h1>
            </header>

            <?php if (have_rows('contents')) : ?>
                <section class="contents">
                    <h3>Contents</h3>
                    <ul>
                        <?php while (have_rows('contents')) :
                            the_row();
                            $linkText = get_sub_field('link_text');
                            $url = get_sub_field('short_url'); ?>
                            <li>
                                <a href="#<?php echo $url; ?>"><?php echo $linkText; ?></a>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </section>
            <?php endif; ?>

            <div class="entry content rich-text">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('large'); ?>
                <?php endif; ?>
                <?php the_content(); ?>
            </div>

        </article>
    </div>

<?php endwhile; ?>
<?php get_footer(); ?>
