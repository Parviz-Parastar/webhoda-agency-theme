<?php
/**
 * WEBHODA Why WEBHODA Section
 *
 * Section 5 of the six-section homepage structure (V-006).
 *
 * Copy: supplied by the project owner. It must not be reworded without the
 * owner's approval. It contains no statistics, client names, testimonials
 * or guarantees.
 *
 * The section is intentionally non-interactive (no links, no JavaScript).
 */

$pillars = array(
    array(
        'number' => '۰۱',
        'title'  => __('شناخت کسب‌وکار، پیش از آغاز راه', 'agency-theme'),
        'text'   => __('هر کسب‌وکار مسیر و نیازهای منحصربه‌فرد خود را دارد. پیش از هر اقدامی، اهداف، مخاطبان و ظرفیت‌های کسب‌وکار شما را بررسی می‌کنیم تا راهکارها بر پایه شناخت و متناسب با واقعیت‌های شما شکل بگیرند.', 'agency-theme'),
    ),
    array(
        'number' => '۰۲',
        'title'  => __('تمرکز بر نتیجه و ارزش‌آفرینی', 'agency-theme'),
        'text'   => __('زیبایی و کیفیت اجرا، تنها بخشی از یک راهکار موفق است. طراحی و بازاریابی باید به اهداف واقعی کسب‌وکار کمک کنند؛ از افزایش دیده‌شدن و جذب مشتری تا بهبود تجربه مخاطب و تقویت مسیر فروش.', 'agency-theme'),
    ),
    array(
        'number' => '۰۳',
        'title'  => __('پیوند استراتژی، خلاقیت و فناوری', 'agency-theme'),
        'text'   => __('از طراحی وب‌سایت و بهینه‌سازی موتورهای جست‌وجو تا تولید محتوا و ابزارهای هوشمند، راهکارهای دیجیتال را در مسیری منسجم به هم پیوند می‌دهیم تا هر بخش، مکمل بخش دیگر باشد.', 'agency-theme'),
    ),
    array(
        'number' => '۰۴',
        'title'  => __('رشد مستمر، نه یک تحویل مقطعی', 'agency-theme'),
        'text'   => __('همکاری را با تحویل یک پروژه پایان‌یافته نمی‌دانیم. بررسی عملکرد، تحلیل داده‌ها و بهبود مستمر، زمینه تصمیم‌گیری دقیق‌تر و حرکت هدفمندتر کسب‌وکار شما را فراهم می‌کند.', 'agency-theme'),
    ),
);
?>

<section id="why-webhoda" class="why-section" aria-labelledby="why-title">

    <!-- Decorative geometric pattern (interlaced squares, eight-pointed star) -->
    <svg
        class="why-pattern"
        xmlns="http://www.w3.org/2000/svg"
        width="100%"
        height="100%"
        aria-hidden="true"
        focusable="false"
    >
        <defs>
            <pattern id="why-pattern-tile" width="88" height="88" patternUnits="userSpaceOnUse">
                <g fill="none" stroke="currentColor" stroke-width="1">
                    <rect x="22" y="22" width="44" height="44"></rect>
                    <rect x="22" y="22" width="44" height="44" transform="rotate(45 44 44)"></rect>
                </g>
            </pattern>
        </defs>
        <rect width="100%" height="100%" fill="url(#why-pattern-tile)"></rect>
    </svg>

    <div class="container">

        <header class="why-header">

            <p class="why-eyebrow">
                <?php echo esc_html__('چرا وب هُدیٰ؟', 'agency-theme'); ?>
            </p>

            <h2 id="why-title" class="why-title">
                <?php echo esc_html__('همراه شما در مسیر رشد؛ فراتر از یک همکاری دیجیتال', 'agency-theme'); ?>
            </h2>

            <span class="why-divider" aria-hidden="true"></span>

            <p class="why-intro">
                <?php echo esc_html__('ما در وب هُدیٰ، فناوری، استراتژی و خلاقیت را در کنار هم قرار می‌دهیم تا کسب‌وکار شما حضوری مؤثرتر در فضای دیجیتال داشته باشد، مشتریان بیشتری جذب کند و برای رشد پایدار آماده شود.', 'agency-theme'); ?>
            </p>

        </header>

        <ul class="why-pillars" role="list">

            <?php foreach ($pillars as $pillar) : ?>

                <li class="why-pillar">

                    <span class="why-pillar-number" aria-hidden="true">
                        <?php echo esc_html($pillar['number']); ?>
                    </span>

                    <h3 class="why-pillar-title">
                        <?php echo esc_html($pillar['title']); ?>
                    </h3>

                    <p class="why-pillar-text">
                        <?php echo esc_html($pillar['text']); ?>
                    </p>

                </li>

            <?php endforeach; ?>

        </ul>

        <div class="why-pledge" role="group" aria-labelledby="why-pledge-title">

            <h3 id="why-pledge-title" class="why-pledge-title">
                <?php echo esc_html__('تعهد ما؛ صداقت در مسیر، امانت‌داری در همکاری', 'agency-theme'); ?>
            </h3>

            <p class="why-pledge-text">
                <?php echo esc_html__('نام وب هُدیٰ یادآور مفهوم هدایت است؛ مفهومی که در نگاه ما با مسئولیت‌پذیری، شفافیت و خدمت صادقانه معنا پیدا می‌کند. به همین دلیل، آنچه ارائه می‌دهیم بر پایه واقعیت، تخصص و تعهد است؛ نه وعده‌های اغراق‌آمیز و نتایج تضمین‌نشده.', 'agency-theme'); ?>
            </p>

        </div>

    </div>

</section>
