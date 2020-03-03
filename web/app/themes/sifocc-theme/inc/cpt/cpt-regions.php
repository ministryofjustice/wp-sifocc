<?php
if (!function_exists('sifocc_add_regions_post_type')) {

    function sifocc_add_regions_post_type()
    {
        register_post_type(
            'regions',
            [
                'labels' => [
                    'name' => 'Regions',
                    'singular_name' => 'Region',
                    'add_new_item' => 'Add New Region',
                    'edit_item' => 'Edit Region',
                    'new_item' => 'New Region',
                    'view_item' => 'View Region',
                    'view_items' => 'View Regions'
                ],
                'supports' => ['title'],
                'public' => false,
                'show_ui' => true,
                'menu_icon' => 'dashicons-admin-site'
            ]
        );
    }
}

add_action('init', 'sifocc_add_regions_post_type');
