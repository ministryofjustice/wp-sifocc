<nav class="header-navigation" role="navigation">
    <div class="row">
        <button type="button" id="js-navigation-toggle" class="navigation-toggle visible-tablet">Menu</button>
        <?php
        if (has_nav_menu('header')) {
            wp_nav_menu(array(
                'theme_location' => 'header',
                'container_class' => 'menu-header',
            ));
        }
        ?>
        <?php if (!is_user_logged_in()) : ?>
            <div class="cta">
                <a href="<?php echo wp_login_url() ?>" class="button">Members login</a>
            </div>
        <?php endif ?>
    </div>
</nav>
