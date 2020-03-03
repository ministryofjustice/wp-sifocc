<?php
if (!function_exists('sifocc_wp_head_analytics')) {

    function sifocc_wp_head_analytics()
    {
        ?>
        <script src="//script.crazyegg.com/pages/scripts/0019/0738.js" async></script>
        <?php
    }
}

add_action('wp_head', 'sifocc_wp_head_analytics');

if (!function_exists('sifocc_wp_footer_analytics')) {

    function sifocc_wp_footer_analytics()
    {
        ?>
        <script>
            var TRACKING_CODE = 'UA-115990570-1'; //Put the Google Analytics tracking code here
            if (!TRACKING_CODE.length) {
                console.warn('Google Analytics requires a tracking code to function correctly');
            }
            (function () {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = 'https://www.googletagmanager.com/gtag/js?id=' + TRACKING_CODE;
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments)
            };
            gtag('js', new Date());
            gtag('config', TRACKING_CODE);
        </script>
        <?php
    }
}

add_action('wp_footer', 'sifocc_wp_footer_analytics');