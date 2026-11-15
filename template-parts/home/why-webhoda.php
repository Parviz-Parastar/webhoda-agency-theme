<?php
/**
 * WEBHODA Why WEBHODA Section
 *
 * Section 5 of the six-section homepage structure (V-006).
 *
 * Content status: PROPOSED. All Persian copy below is a proposal and is not
 * approved yet. The copy describes WEBHODA's approach and values only: it
 * contains no statistics, client names, testimonials, guarantees or claims
 * about the readiness of any specific service.
 *
 * The section is intentionally non-interactive (no links, no JavaScript).
 */

$pillars = array(
    array(
        'number' => '۱',
        'title'  => __('شریک رشد، نه صرفاً مجری', 'agency-theme'),
        'text'   => __('پیش از اجرا، هدف کسب‌وکار و مخاطب شما را می‌شناسیم تا هر تصمیم طراحی و فنی در خدمت رشد باشد.', 'agency-theme'),
    ),
    array(
        'number' => '۲',
        'title'  => __('تمرکز بر فروش و ارزش پایدار', 'agency-theme'),
        'text'   => __('معیار ما فقط ظاهر و اجرای کار نیست؛ جذب مشتری، بهبود فروش و ارزشی است که در بلندمدت می‌ماند.', 'agency-theme'),
    ),
    array(
        'number' => '۳',
        'title'  => __('استراتژی، بازاریابی و فناوری در یک مسیر', 'agency-theme'),
        'text'   => __('طراحی، سئو، محتوا و در صورت نیاز هوش مصنوعی را به‌جای کارهای جدا از هم، در یک برنامه هماهنگ می‌بینیم.', 'agency-theme'),
    ),
    array(
        'number' => '۴',
        'title'  => __('نگاه بلندمدت', 'agency-theme'),
        'text'   => __('رشد را یک مسیر می‌دانیم: اندازه‌گیری، یادگرفتن و بهبود مداوم، نه یک تحویل یک‌باره.', 'agency-theme'),
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
                <?php echo esc_html__('چرا وب‌هُدیٰ؟', 'agency-theme'); ?>
            </p>

            <h2 id="why-title" class="why-title">
                <?php echo esc_html__('شریک رشد کسب‌وکار شما، نه فقط مجری یک پروژه', 'agency-theme'); ?>
            </h2>

            <span class="why-divider" aria-hidden="true"></span>

            <p class="why-intro">
                <?php echo esc_html__('کار ما از ساخت یک وب‌سایت شروع می‌شود، اما به همان‌جا ختم نمی‌شود. هدف ما کمک به دیده‌شدن، جذب مشتری و رشد پایدار کسب‌وکار شماست.', 'agency-theme'); ?>
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

        <div class="why-pledge">

            <h3 class="why-pledge-title">
                <?php echo esc_html__('تعهد ما: صداقت و امانت‌داری', 'agency-theme'); ?>
            </h3>

            <p class="why-pledge-text">
                <?php echo esc_html__('نام وب‌هُدیٰ از «هدایت» می‌آید. برای ما این یعنی مسیر شفاف، وعده‌های واقع‌بینانه و مسئولیت در برابر کار انجام‌شده. نه نتیجه فروش یا رتبه تضمین می‌کنیم و نه چیزی را بزرگ‌تر از واقعیت نشان می‌دهیم.', 'agency-theme'); ?>
            </p>

        </div>

    </div>

</section>
