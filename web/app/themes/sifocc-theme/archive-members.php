<?php get_header(); ?>
<div class="interactive-map-container hidden-tablet">
    <div id="interactive-map">
        <span class="sr-only">World map with SIFoCC member courts</span>
        <?php get_template_part('partials/interactive-svg-map'); ?>
        <?php get_template_part('partials/interactive-map-content'); ?>
    </div>
</div>

<div class="page-section">
    <section class="container">
        <header>
            <h1>Member countries and courts</h1>
        </header>
        <?php
            $args = array('post_type' => 'members','orderby'=>'title','order'=>'ASC', 'posts_per_page' => -1);
            $members = new WP_Query( $args );
            $lettersList = [];
            $currentLetter = '';
            $previousLetter = '';
            while ( $members->have_posts() ) : $members->the_post();
                $currentLetter = strtoupper(substr(get_the_title(), 0, 1));
                if ($currentLetter != $previousLetter) {
                    echo "<a name='" .$currentLetter . "'><h2>" . $currentLetter . "</h2></a>";
                    $lettersList[] = $currentLetter;
                }
                get_template_part('partials/member-list-item');
                $previousLetter = $currentLetter;
            endwhile;
        ?>
    </section>

    <aside>
        <div class="quick-links">
            <h3>Quick links</h3>
            <p>Jump to:</p>
            <ul>
                <?php foreach($lettersList as $letter) : ?>
                <li><?php echo "<a href='#" . $letter .  "'>" . $letter . "</a>" ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </aside>
</div>
<?php get_footer(); ?>
