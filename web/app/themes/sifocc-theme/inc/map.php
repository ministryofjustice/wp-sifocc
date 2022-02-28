<?php

if (!function_exists('sifocc_enqueue_map_script')) {

    function sifocc_enqueue_map_script()
    {
        wp_enqueue_script('map', moj_get_asset('map'), ['main-js']);
        $data = sifocc_countries_and_courts_data();
        wp_localize_script('map', 'mapData', $data);
    }
}

add_action('wp_enqueue_scripts', 'sifocc_enqueue_map_script');

if (!function_exists('sifocc_get_all_court_names')) {

    function sifocc_get_all_court_names(\WP_Post $country)
    {
        $courtNames = [];
        $courts = get_field('courts', $country->ID);
        if(!empty($courts)){
            foreach ($courts as $court) {
                $courtNames[] = "<dd>" . $court['court_name'] . "</dd>";
            }
        }
        return $courtNames;
    }

}

if (!function_exists('sifocc_get_all_regions')) {

    function sifocc_get_all_regions()
    {
        return get_posts([
            'posts_per_page' => -1,
            'post_type' => 'regions'
        ]);
    }
}

if (!function_exists('sifocc_get_region_id')) {

    function sifocc_get_region_id(\WP_Post $region)
    {
        return get_field('region_id', $region->ID);
    }
}

if (!function_exists('sifocc_get_all_countries')) {

    function sifocc_get_all_countries(\WP_Post $region)
    {
        return get_posts([
            'post_type' => 'members',
            'posts_per_page' => -1,
            'meta_key' => 'region',
            'meta_value' => $region->ID
        ]);
    }
}

if (!function_exists('sifocc_get_all_countries_with_courts')) {

    function sifocc_get_all_countries_with_courts(\WP_Post $region)
    {
        $countriesWithCourts = [];
        $countries = sifocc_get_all_countries($region);
        foreach ($countries as $country) {
            $courtNames = sifocc_get_all_court_names($country);
            if ($courtNames != []) {
                $countriesWithCourts[$country->post_title] = $courtNames;
            }
        }
        return $countriesWithCourts;
    }
}

if (!function_exists('sifocc_countries_and_courts_data')) {

    function sifocc_countries_and_courts_data()
    {
        $data = [];
        $regions = sifocc_get_all_regions();
        foreach ($regions as $region) {
            $data[sifocc_get_region_id($region)] = [
                'region' => $region->post_title,
                'countries' => sifocc_get_all_countries_with_courts($region)
            ];
        }
        return $data;
    }
}
