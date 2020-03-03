<?php
if (!function_exists('sifocc_get_archive_title')) {

    function sifocc_get_archive_title()
    {
        if (is_archive()) {
            $term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));

            if ($term) {
                return apply_filters('single_term_title', $term->name);
            }

            if (is_post_type_archive()) {
                return apply_filters('the_title', get_queried_object()->labels->name);
            }

            if (is_day()) {
                return sprintf(__('Daily Archives: %s', 'roots'), get_the_date());
            }

            if (is_month()) {
                return sprintf(__('Monthly Archives: %s', 'roots'), get_the_date('F Y'));
            }

            if (is_year()) {
                return sprintf(__('Yearly Archives: %s', 'roots'), get_the_date('Y'));
            }

            if (is_author()) {
                $author = get_queried_object();

                return sprintf(__('Author Archives: %s', 'roots'), apply_filters('the_author', is_object($author) ? $author->display_name : null));
            }

            return single_cat_title('', false);
        }
    }
}
