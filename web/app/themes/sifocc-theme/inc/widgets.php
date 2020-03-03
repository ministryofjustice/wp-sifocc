<?php
if (!function_exists('sifocc_widgets_init')) {

    function sifocc_widgets_init()
    {
        register_sidebar([
            'name' => __('Footer Area'),
            'id' => 'footer-area',
            'description' => __('Widgets in this area will be shown in the footer.'),
            'before_title' => '<h3>',
            'after_title' => '</h3>',
            'before_widget' => '',
            'after_widget' => '',
        ]);
    }
}

add_action('widgets_init', 'sifocc_widgets_init');