<footer class="global-footer" role="contentinfo">
    <div class="row">
        <section>
            <h4>Contact us</h4>
            <p>
                Secretariat to the Standing International<br>
                Forum of Commercial Courts<br>
                4th Floor, Rolls Building, Fetter Lane<br>
                London<br>
                EC4A 1NL<br>
                United Kingdom
            </p>
            <p>
                <a href="tel:+44-207-073-0318">+44 207 073 0318</a>
            </p>
            <p>
                <a href="mailto:Grace.Karrass1@judiciary.uk">Grace.Karrass1@judiciary.uk</a>
            </p>
        </section>
        <section>
            <h4>About SIFoCC</h4>
            <?php
            if (has_nav_menu('footer_about')) {
                wp_nav_menu(array('theme_location' => 'footer_about'));
            }
            ?>
        </section>
        <section>
            <h4>More information</h4>
            <?php
            if (has_nav_menu('footer_info')) {
                wp_nav_menu(array('theme_location' => 'footer_info'));
            }
            ?>
        </section>
    </div>

    <?php if (is_active_sidebar('footer-area')) : ?>
        <div class="row">
            <div class="footer-widget">
                <?php dynamic_sidebar('footer-area') ?>
            </div>
        </div>
    <?php endif ?>

    <div class="row">
        <p class="copyright">&copy; Copyright SIFoCC <?php echo date('Y'); ?></p>
    </div>
</footer>
