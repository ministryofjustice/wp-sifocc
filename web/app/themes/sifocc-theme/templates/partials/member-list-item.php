<article <?php post_class('member-list-item'); ?> >
    <div class="content">
        <h1>
            <a href="<?php the_permalink(); ?>">
                <?php $fullName = get_field('full_name');
                if( !empty($fullName) ): ?>
                    <?php the_title(); ?>, <?php echo $fullName; ?>
                <?php else : ?>
                    <?php the_title(); ?>
                <?php endif; ?>
            </a>
        </h1>
        <?php if (have_rows('courts')) : ?>
            <ul>
              <?php while (have_rows('courts')) :
                  the_row();
                  $courtName = get_sub_field('court_name'); ?>
                  <li><?php echo $courtName; ?></li>
              <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
</article>
