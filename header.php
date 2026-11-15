<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<a class="skip-link" href="#site-content">
    <?php echo esc_html__('پرش به محتوای اصلی', 'agency-theme'); ?>
</a>

<header id="site-header">

    <div class="container header-inner">

        <!-- Brand -->
        <div class="site-branding">

            <a
                class="brand-link"
                href="<?php echo esc_url(home_url('/')); ?>"
                aria-label="<?php echo esc_attr__('WEBHODA - صفحه اصلی', 'agency-theme'); ?>"
            >
                <span class="brand-name">WEBHODA</span>

                <span class="brand-tagline">
                    رشد دیجیتال، با هدایت الهی
                </span>
            </a>

        </div>


        <!-- Main Navigation -->
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


            <!-- Search Form -->
            <form
                class="header-search"
                role="search"
                method="get"
                action="<?php echo esc_url(home_url('/')); ?>"
            >

                <label
                    class="screen-reader-text"
                    for="header-search-field"
                >
                    جست‌وجو در سایت
                </label>

                <input
                    type="search"
                    id="header-search-field"
                    class="header-search-input"
                    placeholder="جست‌وجو..."
                    value="<?php echo esc_attr(get_search_query()); ?>"
                    name="s"
                >

                <button
                    type="submit"
                    class="header-search-button"
                    aria-label="جست‌وجو"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="19"
                        height="19"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.8"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        aria-hidden="true"
                    >
                        <circle cx="11" cy="11" r="7"></circle>
                        <path d="m20 20-4-4"></path>
                    </svg>
                </button>

            </form>


            <!-- Call To Action -->
            <a
                class="header-cta"
                href="<?php echo esc_url(home_url('/contact/')); ?>"
            >
                شروع همکاری
            </a>

        </nav>

    </div>

</header>