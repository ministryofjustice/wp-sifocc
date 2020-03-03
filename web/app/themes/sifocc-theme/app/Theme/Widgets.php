<?php

namespace Dxw\SifoccTheme\Theme;

class Widgets implements \Dxw\Iguana\Registerable
{
    //
    // Register sidebars.
    //
    public function widgetsInit()
    {
        register_sidebar([
            'name' => __('Primary'),
            'id' => 'sidebar-primary',
            'before_widget' => '<section class="widget %1$s %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ]);

        register_sidebar([
            'name' => __('Footer'),
            'id' => 'sidebar-footer',
            'before_widget' => '<section class="widget %1$s %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ]);

        register_sidebar([
            'name'         => __('Footer Area'),
            'id'           => 'footer-area',
            'description'  => __('Widgets in this area will be shown in the footer.'),
            'before_title' => '<h3>',
            'after_title'  => '</h3>',
            'before_widget' => '',
            'after_widget'  => '',
        ]);
    }

    public function register()
    {
        add_action('widgets_init', [$this, 'widgetsInit']);
    }
}
