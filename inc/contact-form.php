<?php
/**
 * WEBHODA Contact Form
 *
 * Secure, server-side contact form exposed via the shortcode
 * [webhoda_contact_form]. It is rendered wherever the owner places the
 * shortcode (typically on the Contact page created in WP admin).
 *
 * Processing is in-place: the POST is validated on the same request and
 * feedback notices are rendered by the form itself. There is no redirect,
 * so the visitor never leaves the page the form is on and field values
 * are preserved on validation errors.
 *
 * Security measures: nonce verification, honeypot field, strict input
 * sanitization, email validation, length caps. Delivery uses wp_mail()
 * (in LocalWP this is caught by the bundled Mailpit catcher; actual SMTP
 * deliverability must be verified by the owner). No third-party plugin
 * or dependency is used (TECH-003).
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * UTF-8-aware string length that degrades gracefully.
 *
 * @param string $value Input string.
 * @return int
 */
function webhoda_contact_length( $value ) {
    return function_exists( 'mb_strlen' ) ? mb_strlen( $value, 'UTF-8' ) : strlen( $value );
}

/**
 * Human-readable validation messages per field.
 *
 * @return array field key => message.
 */
function webhoda_contact_field_messages() {
    return array(
        'name'    => __( 'لطفاً نام و نام خانوادگی را وارد کنید (حداکثر ۱۰۰ نویسه).', 'agency-theme' ),
        'email'   => __( 'لطفاً یک ایمیل معتبر وارد کنید.', 'agency-theme' ),
        'phone'   => __( 'شماره تلفن واردشده معتبر نیست (فقط رقم و کاراکترهای استاندارد).', 'agency-theme' ),
        'message' => __( 'لطفاً متن پیام را وارد کنید (حداکثر ۵۰۰۰ نویسه).', 'agency-theme' ),
    );
}

/**
 * Validate submitted contact fields.
 *
 * @param array $values Sanitized field values.
 * @return array field key => error message (empty when valid).
 */
function webhoda_contact_validate( $values ) {

    $errors = array();

    if ( '' === $values['name'] || webhoda_contact_length( $values['name'] ) > 100 ) {
        $errors['name'] = webhoda_contact_field_messages()['name'];
    }

    if ( ! is_email( $values['email'] ) || webhoda_contact_length( $values['email'] ) > 200 ) {
        $errors['email'] = webhoda_contact_field_messages()['email'];
    }

    if ( '' !== $values['phone'] && ( webhoda_contact_length( $values['phone'] ) > 40 || ! preg_match( '/^[0-9+\-\s()۰-۹]+$/u', $values['phone'] ) ) ) {
        $errors['phone'] = webhoda_contact_field_messages()['phone'];
    }

    if ( '' === $values['message'] || webhoda_contact_length( $values['message'] ) > 5000 ) {
        $errors['message'] = webhoda_contact_field_messages()['message'];
    }

    return $errors;
}

/**
 * Send the contact email to the site admin.
 *
 * @param array $values Sanitized field values.
 * @return bool True when wp_mail accepted the message.
 */
function webhoda_contact_send_mail( $values ) {

    $admin_email = get_option( 'admin_email' );

    if ( ! is_email( $admin_email ) ) {
        return false;
    }

    $subject = sprintf(
        /* translators: %s: sender name */
        __( 'پیام فرم تماس وب هُدیٰ — %s', 'agency-theme' ),
        $values['name']
    );

    $body_lines = array(
        __( 'نام:', 'agency-theme' ) . ' ' . $values['name'],
        __( 'ایمیل:', 'agency-theme' ) . ' ' . $values['email'],
        __( 'تلفن:', 'agency-theme' ) . ' ' . ( '' !== $values['phone'] ? $values['phone'] : '—' ),
        '',
        __( 'پیام:', 'agency-theme' ),
        $values['message'],
    );

    // Reply-To points at the visitor; the From address stays the site default.
    $headers = array(
        'Reply-To: ' . $values['name'] . ' <' . $values['email'] . '>',
    );

    return wp_mail( $admin_email, $subject, implode( "\n", $body_lines ), $headers );
}

/**
 * Render the contact form, process in-place submissions and show feedback.
 *
 * @return string Form HTML.
 */
function webhoda_contact_form_shortcode() {

    $values = array(
        'name'    => '',
        'email'   => '',
        'phone'   => '',
        'message' => '',
    );

    $errors       = array();
    $status       = ''; // '', 'success' or 'error'.
    $general_error = '';

    if ( isset( $_POST['webhoda_contact_action'] ) && 'send' === $_POST['webhoda_contact_action'] ) {

        $nonce = isset( $_POST['webhoda_contact_nonce'] ) ? sanitize_text_field( wp_unslash( $_POST['webhoda_contact_nonce'] ) ) : '';

        if ( ! wp_verify_nonce( $nonce, 'webhoda_contact_form' ) ) {

            $status        = 'error';
            $general_error = __( 'نشست ارسال معتبر نبود. لطفاً صفحه را دوباره بارگذاری کنید و یک‌بار دیگر تلاش کنید.', 'agency-theme' );

        } elseif ( ! empty( $_POST['webhoda_contact_website'] ) ) {

            /*
             * Honeypot filled: almost certainly a bot. Pretend success so
             * the bot learns nothing; no email is sent.
             */
            $status = 'success';

        } else {

            $values['name']    = isset( $_POST['webhoda_contact_name'] ) ? sanitize_text_field( wp_unslash( $_POST['webhoda_contact_name'] ) ) : '';
            $values['email']   = isset( $_POST['webhoda_contact_email'] ) ? sanitize_email( wp_unslash( $_POST['webhoda_contact_email'] ) ) : '';
            $values['phone']   = isset( $_POST['webhoda_contact_phone'] ) ? sanitize_text_field( wp_unslash( $_POST['webhoda_contact_phone'] ) ) : '';
            $values['message'] = isset( $_POST['webhoda_contact_message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['webhoda_contact_message'] ) ) : '';

            $errors = webhoda_contact_validate( $values );

            if ( empty( $errors ) ) {

                if ( webhoda_contact_send_mail( $values ) ) {
                    $status = 'success';

                    // Clear the fields after a successful send.
                    $values = array(
                        'name'    => '',
                        'email'   => '',
                        'phone'   => '',
                        'message' => '',
                    );
                } else {
                    $status        = 'error';
                    $general_error = __( 'ارسال پیام انجام نشد. لطفاً بعداً دوباره تلاش کنید یا از راه دیگری با ما در تماس باشید.', 'agency-theme' );
                }

            } else {
                $status = 'error';
            }
        }
    }

    // Enqueue the submit-state script only when the form actually renders.
    wp_enqueue_script(
        'webhoda-contact-form',
        get_template_directory_uri() . '/assets/js/contact-form.js',
        array(),
        '1.0.0',
        true
    );

    ob_start();
    ?>

    <div id="webhoda-contact-form" class="webhoda-contact-form">

        <?php if ( 'success' === $status ) : ?>

            <div class="webhoda-contact-notice webhoda-contact-notice-success" role="status">
                <p>
                    <?php echo esc_html__( 'پیام شما با موفقیت ثبت شد. سپاس از تماس شما؛ پاسخ در اولین فرصت ارسال می‌شود.', 'agency-theme' ); ?>
                </p>
            </div>

        <?php elseif ( 'error' === $status ) : ?>

            <div class="webhoda-contact-notice webhoda-contact-notice-error" role="alert">

                <?php if ( '' !== $general_error ) : ?>

                    <p><?php echo esc_html( $general_error ); ?></p>

                <?php else : ?>

                    <p><?php echo esc_html__( 'لطفاً موارد زیر را بررسی و اصلاح کنید:', 'agency-theme' ); ?></p>

                    <ul class="webhoda-contact-error-list">

                        <?php foreach ( $errors as $error_message ) : ?>

                            <li><?php echo esc_html( $error_message ); ?></li>

                        <?php endforeach; ?>

                    </ul>

                <?php endif; ?>

            </div>

        <?php endif; ?>


        <form method="post" novalidate>

            <?php wp_nonce_field( 'webhoda_contact_form', 'webhoda_contact_nonce' ); ?>
            <input type="hidden" name="webhoda_contact_action" value="send">

            <div class="webhoda-contact-row">

                <div class="webhoda-contact-field<?php echo isset( $errors['name'] ) ? ' has-error' : ''; ?>">

                    <label for="webhoda-contact-name">
                        <?php echo esc_html__( 'نام و نام خانوادگی', 'agency-theme' ); ?>
                        <span class="webhoda-required" aria-hidden="true">*</span>
                    </label>

                    <input
                        type="text"
                        id="webhoda-contact-name"
                        name="webhoda_contact_name"
                        required
                        maxlength="100"
                        autocomplete="name"
                        value="<?php echo esc_attr( $values['name'] ); ?>"
                        <?php echo isset( $errors['name'] ) ? 'aria-invalid="true" aria-describedby="webhoda-contact-name-error"' : ''; ?>
                    >

                    <?php if ( isset( $errors['name'] ) ) : ?>

                        <p class="webhoda-field-error" id="webhoda-contact-name-error">
                            <?php echo esc_html( $errors['name'] ); ?>
                        </p>

                    <?php endif; ?>

                </div>


                <div class="webhoda-contact-field<?php echo isset( $errors['email'] ) ? ' has-error' : ''; ?>">

                    <label for="webhoda-contact-email">
                        <?php echo esc_html__( 'ایمیل', 'agency-theme' ); ?>
                        <span class="webhoda-required" aria-hidden="true">*</span>
                    </label>

                    <input
                        type="email"
                        id="webhoda-contact-email"
                        name="webhoda_contact_email"
                        required
                        maxlength="200"
                        autocomplete="email"
                        dir="ltr"
                        value="<?php echo esc_attr( $values['email'] ); ?>"
                        <?php echo isset( $errors['email'] ) ? 'aria-invalid="true" aria-describedby="webhoda-contact-email-error"' : ''; ?>
                    >

                    <?php if ( isset( $errors['email'] ) ) : ?>

                        <p class="webhoda-field-error" id="webhoda-contact-email-error">
                            <?php echo esc_html( $errors['email'] ); ?>
                        </p>

                    <?php endif; ?>

                </div>

            </div>


            <div class="webhoda-contact-field<?php echo isset( $errors['phone'] ) ? ' has-error' : ''; ?>">

                <label for="webhoda-contact-phone">
                    <?php echo esc_html__( 'تلفن (اختیاری)', 'agency-theme' ); ?>
                </label>

                <input
                    type="tel"
                    id="webhoda-contact-phone"
                    name="webhoda_contact_phone"
                    maxlength="40"
                    autocomplete="tel"
                    dir="ltr"
                    value="<?php echo esc_attr( $values['phone'] ); ?>"
                    <?php echo isset( $errors['phone'] ) ? 'aria-invalid="true" aria-describedby="webhoda-contact-phone-error"' : ''; ?>
                >

                <?php if ( isset( $errors['phone'] ) ) : ?>

                    <p class="webhoda-field-error" id="webhoda-contact-phone-error">
                        <?php echo esc_html( $errors['phone'] ); ?>
                    </p>

                <?php endif; ?>

            </div>


            <div class="webhoda-contact-field<?php echo isset( $errors['message'] ) ? ' has-error' : ''; ?>">

                <label for="webhoda-contact-message">
                    <?php echo esc_html__( 'متن پیام', 'agency-theme' ); ?>
                    <span class="webhoda-required" aria-hidden="true">*</span>
                </label>

                <textarea
                    id="webhoda-contact-message"
                    name="webhoda_contact_message"
                    required
                    maxlength="5000"
                    rows="7"
                    <?php echo isset( $errors['message'] ) ? 'aria-invalid="true" aria-describedby="webhoda-contact-message-error"' : ''; ?>
                ><?php echo esc_textarea( $values['message'] ); ?></textarea>

                <?php if ( isset( $errors['message'] ) ) : ?>

                    <p class="webhoda-field-error" id="webhoda-contact-message-error">
                        <?php echo esc_html( $errors['message'] ); ?>
                    </p>

                <?php endif; ?>

            </div>


            <!-- Honeypot: hidden from users and assistive technology -->
            <div class="webhoda-contact-hp" aria-hidden="true">

                <label for="webhoda-contact-website">
                    <?php echo esc_html__( 'وب‌سایت', 'agency-theme' ); ?>
                </label>

                <input
                    type="text"
                    id="webhoda-contact-website"
                    name="webhoda_contact_website"
                    tabindex="-1"
                    autocomplete="off"
                >

            </div>


            <button type="submit" class="webhoda-contact-submit">
                <?php echo esc_html__( 'ارسال پیام', 'agency-theme' ); ?>
            </button>

        </form>

    </div>

    <?php
    return ob_get_clean();
}

add_shortcode( 'webhoda_contact_form', 'webhoda_contact_form_shortcode' );
