<?php
if (!function_exists('sifocc_add_feed_to_head')) {

    function sifocc_add_feed_to_head()
    {
        ?>
        <link rel="alternate" type="application/atom+xml" title="<?php echo esc_attr(get_bloginfo('name')) ?> Feed"
              href="<?php echo esc_attr(get_feed_link('atom')) ?>">
        <?php
    }
}

add_action('wp_head', 'sifocc_add_feed_to_head');

if (!function_exists('sifocc_set_feeds')) {

    function sifocc_set_feeds()
    {
        add_filter('default_feed', 'sifocc_set_default_feed');

        remove_action('do_feed_rdf', 'do_feed_rdf', 10, 1);
        remove_action('do_feed_rss', 'do_feed_rss', 10, 1);
        remove_action('do_feed_rss2', 'do_feed_rss2', 10, 1);
    }
}

add_action('init', 'sifocc_set_feeds');

if (!function_exists('sifocc_set_default_feed')) {
    function sifocc_set_default_feed()
    {
        return 'atom';
    }
}