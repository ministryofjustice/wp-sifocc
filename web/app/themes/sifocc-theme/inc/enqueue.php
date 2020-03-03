<?php
if (!function_exists('sifocc_enqueue_scripts')) {

    function sifocc_enqueue_scripts()
    {
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', moj_get_asset('jquery'));

        wp_enqueue_script('modernizr', moj_get_asset('modernizr'));

        wp_enqueue_script('main-js', moj_get_asset('main-js'), ['jquery', 'modernizr'], '', true);

        wp_enqueue_style('main-css', moj_get_asset('main-css'));
    }
}

add_action('wp_enqueue_scripts', 'sifocc_enqueue_scripts');

if (!function_exists('sifocc_print_scripts')) {

    function sifocc_print_scripts()
    {
        ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="apple-touch-icon-precomposed"
              href="<?php echo esc_url(get_template_directory_uri() . '/dist/img/apple-touch-icon-precomposed.png'); ?>">

        <link rel="icon" type="image/png"
              href="<?php echo esc_url( get_template_directory_uri() . '/dist/img/shortcut-icon.png'); ?>">
        <?php
    }
}

add_action('wp_print_scripts', 'sifocc_print_scripts');

if (!function_exists('moj_get_asset')) {

    function moj_get_asset($handle)
    {
        $dist_dir = get_template_directory() . '/dist';

        $get_assets = file_get_contents($dist_dir . '/mix-manifest.json', true);
        $manifest = json_decode($get_assets, true);

        $assets = array(
            'main-css' => $manifest['/css/main.min.css'],
            'main-js' => $manifest['/js/main.min.js'],
            'jquery' => $manifest['/js/lib/jquery.min.js'],
            'modernizr' => $manifest['/js/lib/modernizr.min.js'],
            'map' => $manifest['/js/map.min.js'],
        );

        if (strpos($assets[$handle], 'https') === 0) {
            return $assets[$handle];
        }

        // create the file system path for the file requested.
        $file_system_path = $dist_dir . strstr($assets[$handle], '?', true);

        if (file_exists($file_system_path)) {
            return get_template_directory_uri() . '/dist' . $assets[$handle];
        }

        return false;
    }
}