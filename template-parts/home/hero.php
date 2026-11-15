
<?php
/**
 * WEBHODA Hero Section
 */

$hero_image = get_template_directory_uri() . '/assets/images/hero/hero-hall.webp';
?>

<section id="hero" class="hero-section" aria-labelledby="hero-title">

    <div class="hero-architecture">

        <img
            class="hero-architecture-image"
            src="<?php echo esc_url($hero_image); ?>"
            alt=""
            fetchpriority="high"
            decoding="async"
        >

        <div class="hero-overlay">

            <div class="hero-central-content">

                <a
                    class="hero-brand"
                    href="<?php echo esc_url(home_url('/')); ?>"
                    aria-label="<?php echo esc_attr__('صفحه اصلی وب هدا', 'agency-theme'); ?>"
                >
                    <span class="hero-brand-name">WEBHODA</span>
                    <span class="hero-brand-persian">وب هدا</span>
                </a>

                <h1 id="hero-title" class="hero-title">
                    رشد هوشمند کسب‌وکار
                </h1>

                <p class="hero-description">
                    راهکارهای دیجیتال برای توسعه پایدار کسب‌وکار شما
                </p>

                <div class="hero-actions">

                    <a class="hero-button hero-button-primary"
                       href="<?php echo esc_url(home_url('/contact/')); ?>">
                        شروع همکاری
                    </a>

                    <a class="hero-button hero-button-secondary"
                       href="#services">
                        آشنایی با خدمات
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>
