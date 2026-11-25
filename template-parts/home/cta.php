<?php
/**
 * WEBHODA Final CTA Section
 *
 * Section 6 of the six-section homepage structure (DESIGN-003), directly
 * above the footer.
 *
 * Copy: honest and professional; no guarantees of results (BRAND-004).
 * Buttons link only to real destinations (contact page, services section).
 */

$cta_contact_url = home_url('/contact/');
$cta_services_url = home_url('/#services');
?>

<section id="cta" class="cta-section" aria-labelledby="cta-title">

    <div class="container cta-inner">

        <h2 id="cta-title" class="cta-title">
            <?php echo esc_html__('آماده بررسی مسیر رشد کسب‌وکار خود هستید؟', 'agency-theme'); ?>
        </h2>

        <p class="cta-text">
            <?php echo esc_html__('از طریق فرم تماس، نیاز و هدف کسب‌وکار خود را مطرح کنید؛ در پاسخ، مسیر مناسب برای بررسی و گفت‌وگو پیشنهاد می‌شود.', 'agency-theme'); ?>
        </p>

        <div class="cta-actions">

            <a class="cta-button cta-button-primary" href="<?php echo esc_url($cta_contact_url); ?>">
                <?php echo esc_html__('شروع همکاری', 'agency-theme'); ?>
            </a>

            <a class="cta-button cta-button-secondary" href="<?php echo esc_url($cta_services_url); ?>">
                <?php echo esc_html__('آشنایی با خدمات', 'agency-theme'); ?>
            </a>

        </div>

    </div>

</section>
