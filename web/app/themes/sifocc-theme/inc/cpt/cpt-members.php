<?php
if (!function_exists('sifocc_add_members_post_type')) {

    function sifocc_add_members_post_type()
    {
        register_post_type(
            'members',
            [
                'labels' => [
                    'name' => 'Members',
                    'singular_name' => 'Member'
                ],
                'supports' => ['title', 'editor', 'excerpt'],
                'public' => true,
                'has_archive' => true,
                'rewrite' => ['slug' => 'countries'],
                'menu_icon' => 'dashicons-admin-site'
            ]
        );
    }
}

add_action('init', 'sifocc_add_members_post_type');
