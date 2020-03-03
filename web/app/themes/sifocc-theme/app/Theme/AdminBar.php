<?php

namespace Dxw\SifoccTheme\Theme;

class AdminBar implements \Dxw\Iguana\Registerable
{
    public function register()
    {
        add_action('show_admin_bar', [$this, 'showAdminBar']);
    }
    
    public function showAdminBar()
    {
        return current_user_can('edit_users');
    }
}
