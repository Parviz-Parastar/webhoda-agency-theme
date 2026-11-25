<?php
/**
 * WEBHODA Services Section
 *
 * Section 3 of the six-section homepage structure (DESIGN-003).
 *
 * Content status: PROPOSED. Titles, descriptions and the section heading
 * are not approved yet. Service availability status is intentionally empty
 * until the owner classifies each service (CONTENT-002).
 *
 * Card data comes from webhoda_get_services() (inc/services-data.php) so
 * the homepage and the standalone services page stay in sync.
 */

if ( ! function_exists( 'webhoda_get_services' ) ) {
    require_once get_template_directory() . '/inc/services-data.php';
}
?>

<section id="services" class="services-section" aria-labelledby="services-title">

    <div class="container">

        <header class="services-header">

            <p class="services-eyebrow">
                <?php echo esc_html__( 'خدمات', 'agency-theme' ); ?>
            </p>

            <h2 id="services-title" class="services-title">
                <?php echo esc_html__( 'خدمات دیجیتال برای رشد کسب‌وکار', 'agency-theme' ); ?>
            </h2>

            <span class="services-divider" aria-hidden="true"></span>

            <p class="services-intro">
                <?php echo esc_html__( 'ترکیب فناوری، استراتژی و اجرای دقیق برای ساختن حضور دیجیتال پایدار و قابل‌اتکا.', 'agency-theme' ); ?>
            </p>

        </header>

        <?php get_template_part( 'template-parts/home/services-cards' ); ?>

    </div>

</section>
