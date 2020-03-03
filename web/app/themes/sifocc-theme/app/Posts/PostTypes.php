<?php

namespace Dxw\SifoccTheme\Posts;

class PostTypes implements \Dxw\Iguana\Registerable
{
    public function register()
    {
        add_action('init', [$this, 'addMembersPostType']);
        add_action('init', [$this, 'addRegionPostType']);
        add_action('init', [$this, 'addEventsPostType']);
    }

    public function addMembersPostType()
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
                'rewrite' => [ 'slug' => 'countries' ],
                'menu_icon' => 'dashicons-admin-site'
            ]
        );
    }
    
    public function addRegionPostType()
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

    public function addEventsPostType()
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
