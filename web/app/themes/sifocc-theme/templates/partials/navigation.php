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
    </div>
</nav>
