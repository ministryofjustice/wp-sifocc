<?php
if (!function_exists('sifocc_setup')) {

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function sifocc_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on brookhouse, use a find and replace
         * to change 'brookhouse' to the name of your theme in all the template files
         */
        load_theme_textdomain('sifocc', get_template_directory() . '/languages');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(150, 150, true);
        add_image_size('medium', 200, 200, true);
        add_image_size('large', 800, 300, true);

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menu('header', 'Header Menu');
        register_nav_menu('footer_about', 'Footer Menu - About SIFOCC');
        register_nav_menu('footer_info', 'Footer Menu - More information');

    }
}

add_action('after_setup_theme', 'sifocc_setup');