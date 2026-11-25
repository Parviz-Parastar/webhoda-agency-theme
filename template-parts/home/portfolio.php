<?php
/**
 * WEBHODA Portfolio Section
 *
 * Section 4 of the six-section homepage structure (DESIGN-003).
 *
 * BRAND-004: no invented clients, statistics, testimonials or case
 * studies. While no real, publishable project material exists, this
 * section renders a professional empty state. When real projects (with
 * owner permission) become available, project cards can be added here.
 */

$portfolio_intro = __('در این بخش، نمونه‌کارهای واقعی وب هُدیٰ منتشر می‌شوند؛ پروژه‌هایی که با اجازه کارفرما و با جزئیات واقعی ارائه شوند.', 'agency-theme');
?>

<section id="portfolio" class="portfolio-section" aria-labelledby="portfolio-title">

    <div class="container">

        <header class="portfolio-header">

            <p class="portfolio-eyebrow">
                <?php echo esc_html__('نمونه‌کارها', 'agency-theme'); ?>
            </p>

            <h2 id="portfolio-title" class="portfolio-title">
                <?php echo esc_html__('کارهای واقعی، بدون اغراق', 'agency-theme'); ?>
            </h2>

            <span class="portfolio-divider" aria-hidden="true"></span>

            <p class="portfolio-intro">
                <?php echo esc_html($portfolio_intro); ?>
            </p>

        </header>


        <?php
        /*
         * Empty state: no real, publishable project material exists yet.
         * No CPT exists either (CONTENT-004); when genuine projects with
         * owner permission become available, cards can be added here or a
         * standalone portfolio page built per the approved roadmap.
         */
        ?>

        <div class="portfolio-empty">

            <span class="portfolio-empty-icon" aria-hidden="true">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="40"
                    height="40"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.4"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    focusable="false"
                >
                    <rect x="3" y="4" width="18" height="16" rx="2"></rect>
                    <path d="M3 9h18"></path>
                    <path d="M8 4v5"></path>
                    <path d="m10 13-2 2 2 2"></path>
                    <path d="m14 13 2 2-2 2"></path>
                </svg>
            </span>

            <p class="portfolio-empty-text">
                <?php echo esc_html__('نمونه‌کارهای واقعی در حال آماده‌سازی برای انتشار هستند. به‌جای نمایش پروژه‌های نمایشی، ترجیح ما انتشار نمونه‌کارهایی است که به‌درستی به آن‌ها اجازه انتشار داده شده باشد.', 'agency-theme'); ?>
            </p>

        </div>

    </div>

</section>
