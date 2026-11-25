<?php
/**
 * WEBHODA Services Data
 *
 * Single source of truth for the six service categories. Used by both the
 * homepage services section (template-parts/home/services.php) and the
 * standalone services page (page-services.php).
 *
 * Content status: PROPOSED. Titles and descriptions are not owner-approved
 * yet (CONTENT-002): each service must be classified by the owner as
 * Ready / Under Development / Future Roadmap before any readiness badge is
 * shown. The 'status' key stays empty until then.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Allowed service availability statuses (Master Context, section 2).
 * A badge is rendered only when a service has one of these keys in 'status'.
 *
 * @return array status key => label.
 */
function webhoda_get_service_statuses() {
    return array(
        'ready'      => __( 'آماده ارائه', 'agency-theme' ),
        'developing' => __( 'در حال توسعه', 'agency-theme' ),
        'roadmap'    => __( 'برنامه آینده', 'agency-theme' ),
    );
}

/**
 * The six WEBHODA service categories.
 *
 * 'icon' values are static, hard-coded SVG markup (no user input),
 * decorative only.
 *
 * @return array list of service definitions.
 */
function webhoda_get_services() {
    return array(
        array(
            'title'  => __( 'طراحی و توسعه وب‌سایت', 'agency-theme' ),
            'text'   => __( 'طراحی و پیاده‌سازی وب‌سایت‌های واکنش‌گرا و قابل‌نگهداری بر پایه وردپرس، با تمرکز بر سرعت و دسترس‌پذیری.', 'agency-theme' ),
            'status' => '',
            'icon'   => '<rect x="3" y="4" width="18" height="16" rx="2"></rect><path d="M3 9h18"></path><path d="m9 13-2 2 2 2"></path><path d="m15 13 2 2-2 2"></path>',
        ),
        array(
            'title'  => __( 'سئو و بهینه‌سازی برای موتور جست‌وجو', 'agency-theme' ),
            'text'   => __( 'بهبود ساختار فنی و محتوایی وب‌سایت برای دیده‌شدن بهتر در نتایج جست‌وجو.', 'agency-theme' ),
            'status' => '',
            'icon'   => '<circle cx="11" cy="11" r="6"></circle><path d="m20 20-4.5-4.5"></path><path d="M9 13v-2"></path><path d="M11 13V9"></path><path d="M13 13v-3"></path>',
        ),
        array(
            'title'  => __( 'استراتژی محتوا و دیجیتال مارکتینگ', 'agency-theme' ),
            'text'   => __( 'برنامه‌ریزی محتوا و کانال‌های دیجیتال برای معرفی صادقانه و هدفمند کسب‌وکار به مخاطب مناسب.', 'agency-theme' ),
            'status' => '',
            'icon'   => '<path d="M3 11v2a1 1 0 0 0 1 1h2l5 4V6L6 10H4a1 1 0 0 0-1 1z"></path><path d="M15 9a4 4 0 0 1 0 6"></path><path d="M18 6.5a8 8 0 0 1 0 11"></path>',
        ),
        array(
            'title'  => __( 'هویت و توسعه برند', 'agency-theme' ),
            'text'   => __( 'شفاف‌سازی جایگاه، پیام و هویت بصری برند تا حضور کسب‌وکار منسجم و قابل‌اعتماد باشد.', 'agency-theme' ),
            'status' => '',
            'icon'   => '<rect x="5" y="5" width="14" height="14"></rect><rect x="5" y="5" width="14" height="14" transform="rotate(45 12 12)"></rect>',
        ),
        array(
            'title'  => __( 'توسعه فروش و مدیریت ارتباط با مشتری', 'agency-theme' ),
            'text'   => __( 'طراحی فرایندهای فروش و ارتباط با مشتری و استفاده از داده برای تصمیم‌گیری بهتر.', 'agency-theme' ),
            'status' => '',
            'icon'   => '<path d="m3 17 5-5 4 4 8-8"></path><path d="M15 8h5v5"></path>',
        ),
        array(
            'title'  => __( 'هوش مصنوعی و اتوماسیون کسب‌وکار', 'agency-theme' ),
            'text'   => __( 'استفاده مسئولانه و شفاف از هوش مصنوعی و اتوماسیون برای کاهش کارهای تکراری و ارتقای کارایی.', 'agency-theme' ),
            'status' => '',
            'icon'   => '<circle cx="12" cy="12" r="2.5"></circle><circle cx="5" cy="6" r="1.8"></circle><circle cx="19" cy="6" r="1.8"></circle><circle cx="5" cy="18" r="1.8"></circle><circle cx="19" cy="18" r="1.8"></circle><path d="m10 10.5-3.6-3.2"></path><path d="m14 10.5 3.6-3.2"></path><path d="m10 13.5-3.6 3.2"></path><path d="m14 13.5 3.6 3.2"></path>',
        ),
    );
}
