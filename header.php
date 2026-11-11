
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header id="site-header">

    <div class="container header-inner">

        <div class="site-branding">
            <a
                class="brand-link"
                href="<?php echo esc_url(home_url('/')); ?>"
                aria-label="<?php echo esc_attr__('WEBHODA - صفحه اصلی', 'agency-theme'); ?>"
            >
                <span class="brand-name">WEBHODA</span>
            </a>
        </div>

        <nav
            class="primary-navigation"
            aria-label="<?php echo esc_attr__('منوی اصلی', 'agency-theme'); ?>"
        >
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'primary-menu',
                'menu_id'        => 'primary-menu',
                'fallback_cb'    => false,
            ));
            ?>
        </nav>

    </div>

</header>
