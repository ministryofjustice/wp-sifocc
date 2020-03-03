<?php

namespace Dxw\SifoccTheme;

class LoginRedirect implements \Dxw\Iguana\Registerable
{
    public function register()
    {
        add_filter('login_redirect', [$this, 'loginRedirect'], 10, 3);
    }

    public function loginRedirect(string $url, $req, $user) : string
    {
        if (preg_match('/\/wp-admin\/$/', $url) && $user !== null && !is_wp_error($user) && !$user->has_cap('edit_users')) {
            return '/members/';
        }

        return $url;
    }
}
