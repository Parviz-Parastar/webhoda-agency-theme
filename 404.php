<?php
/**
 * WEBHODA 404 Template
 *
 * Canonical template of the WordPress Template Hierarchy for URLs that
 * match no content. Reuses the search page layout so the error page
 * stays consistent with the rest of the theme.
 */

get_header();
?>

<main id="site-content" class="search-page">

    <div class="container">

        <header class="search-header">

            <h1 class="search-title">
                <?php echo esc_html__('صفحه مورد نظر پیدا نشد', 'agency-theme'); ?>
            </h1>

            <p class="search-description">
                <?php echo esc_html__('متأسفانه صفحه‌ای که به‌دنبال آن بودید موجود نیست (خطای ۴۰۴)؛ ممکن است حذف یا جابه‌جا شده باشد یا آدرس آن اشتباه وارد شده باشد.', 'agency-theme'); ?>
            </p>

        </header>


        <div class="search-no-results">

            <p>
                <?php echo esc_html__('از جست‌وجو برای یافتن محتوای مورد نظر استفاده کنید یا به صفحه اصلی برگردید.', 'agency-theme'); ?>
            </p>


            <!-- Native WordPress search: GET request to the home URL with the "s" parameter -->

            <form
                role="search"
                method="get"
                action="<?php echo esc_url(home_url('/')); ?>"
            >

                <label
                    class="screen-reader-text"
                    for="error-404-search-field"
                >
                    <?php echo esc_html__('جست‌وجو در سایت', 'agency-theme'); ?>
                </label>

                <input
                    type="search"
                    id="error-404-search-field"
                    name="s"
                    placeholder="<?php echo esc_attr__('جست‌وجو...', 'agency-theme'); ?>"
                >

                <button type="submit">
                    <?php echo esc_html__('جست‌وجو', 'agency-theme'); ?>
                </button>

            </form>


            <p>
                <a
                    class="search-result-link"
                    href="<?php echo esc_url(home_url('/')); ?>"
                >
                    <?php echo esc_html__('بازگشت به صفحه اصلی', 'agency-theme'); ?>
                </a>
            </p>

        </div>

    </div>

</main>

<?php
get_footer();
