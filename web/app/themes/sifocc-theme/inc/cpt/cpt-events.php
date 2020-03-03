<?php
if (!function_exists('sifocc_add_events_post_type')) {

    function sifocc_add_events_post_type()
    {
        register_post_type(
            'events',
            [
                'labels' => [
                    'name' => 'Events',
                    'singular_name' => 'Event'
                ],
                'supports' => ['title', 'editor', 'excerpt'],
                'public' => true,
                'has_archive' => true,
                'menu_icon' => 'dashicons-calendar'
            ]
        );
    }
}

add_action('init', 'sifocc_add_events_post_type');
