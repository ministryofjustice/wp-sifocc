<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>

    <?php $flag = get_field('flag'); ?>

    <div class="page-section page-section-country">
        <section class="container">
            <header>
                <h1><?php the_title(); ?></h1>
            </header>
            <article class="entry content rich-text">
                <?php echo the_content(); ?>
            </article>
        </section>

        <aside>
            <?php if (!empty($flag)) : ?>
                <div class="flag">
                    <h3>Flag</h3>
                    <img src="<?php echo $flag['url']; ?>" alt="<?php echo $flag['alt']; ?>"/>
                </div>
            <?php endif; ?>

            <?php if (have_rows('courts')) : ?>
                <div class="courts">
                    <h3>Courts</h3>
                    <ul>
                        <?php while (have_rows('courts')) :
                            the_row();
                            $courtName = get_sub_field('court_name');
                            $courtLink = get_sub_field('court_url'); ?>
                            <li>
                                <?php if (!empty($courtLink)): ?>
                                    <a href="<?php echo $courtLink; ?>"><?php echo $courtName; ?></a>
                                <?php else : echo $courtName; ?>
                                <?php endif; ?>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <?php if (have_rows('useful_links')) : ?>
                <div class="links">
                    <h3>Useful links</h3>
                    <ul>
                        <?php while (have_rows('useful_links')) :
                            the_row(); ?>
                            <li>
                                <a href="<?php the_sub_field('link_url') ?>"><?php the_sub_field('link_text'); ?></a>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            <?php endif; ?>
        </aside>
    </div>

<?php endwhile; ?>
<?php get_footer(); ?>
