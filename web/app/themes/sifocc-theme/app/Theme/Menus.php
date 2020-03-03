<?php

namespace Dxw\SifoccTheme\Theme;

class Menus implements \Dxw\Iguana\Registerable
{
    public function register()
    {
        register_nav_menu('header', 'Header Menu');
        register_nav_menu('footer_about', 'Footer Menu - About SIFOCC');
        register_nav_menu('footer_info', 'Footer Menu - More information');
    }
}
