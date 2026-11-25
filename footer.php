
<footer id="site-footer">

    <div class="container footer-grid">

        <!-- Brand -->
        <div class="footer-brand">

            <p class="footer-brand-name">WEBHODA</p>

            <p class="footer-tagline">
                <?php echo esc_html__('مسیر هوشمندانه رشد کسب‌وکار', 'agency-theme'); ?>
            </p>

            <p class="footer-about">
                <?php echo esc_html__('وب هُدیٰ؛ حوزه فعالیت ما شامل دیجیتال مارکتینگ، طراحی و توسعه وب‌سایت، تجارت الکترونیک و رشد کسب‌وکار است.', 'agency-theme'); ?>
            </p>

        </div>


        <?php if ( has_nav_menu( 'footer' ) ) : ?>

            <!-- Page links -->
            <nav
                class="footer-nav"
                aria-label="<?php echo esc_attr__('پیوندهای پابرگ', 'agency-theme'); ?>"
            >

                <h2 class="footer-heading">
                    <?php echo esc_html__('صفحات', 'agency-theme'); ?>
                </h2>

                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'container'      => false,
                    'menu_class'     => 'footer-menu',
                    'menu_id'        => 'footer-menu',
                    'depth'          => 1,
                    'fallback_cb'    => false,
                ));
                ?>

            </nav>

        <?php endif; ?>


        <!-- Services -->
        <div class="footer-services">

            <h2 class="footer-heading">
                <?php echo esc_html__('خدمات', 'agency-theme'); ?>
            </h2>

            <ul class="footer-menu" role="list">

                <li>
                    <a href="<?php echo esc_url( home_url('/#services') ); ?>">
                        <?php echo esc_html__('خدمات دیجیتال', 'agency-theme'); ?>
                    </a>
                </li>

            </ul>

        </div>


        <!-- Contact -->
        <div class="footer-contact">

            <h2 class="footer-heading">
                <?php echo esc_html__('تماس', 'agency-theme'); ?>
            </h2>

            <ul class="footer-menu" role="list">

                <li>
                    <a href="<?php echo esc_url( home_url('/contact/') ); ?>">
                        <?php echo esc_html__('فرم تماس', 'agency-theme'); ?>
                    </a>
                </li>

            </ul>

        </div>

    </div>


    <div class="footer-bottom">

        <div class="container">

            <p class="footer-copyright">
                &copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?>
                WEBHODA.
                <?php echo esc_html__('تمامی حقوق محفوظ است.', 'agency-theme'); ?>
            </p>

        </div>

    </div>

</footer>

<?php wp_footer(); ?>

</body>
</html>
