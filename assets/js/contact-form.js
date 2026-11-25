/**
 * WEBHODA — Contact Form submit state.
 *
 * Vanilla JS, no dependencies. On submit: disables the button and shows a
 * busy state so the form cannot be double-submitted while wp_mail runs.
 * Native HTML5 validation runs first, so the submit event only reaches
 * here when the fields pass basic checks.
 */
(function () {
    'use strict';

    function init() {
        var form = document.querySelector('.webhoda-contact-form form');
        if (!form) {
            return;
        }

        var button = form.querySelector('.webhoda-contact-submit');
        if (!button) {
            return;
        }

        var busyText = 'در حال ارسال…';

        form.addEventListener('submit', function () {
            if (button.disabled) {
                return;
            }

            button.disabled = true;
            button.setAttribute('aria-busy', 'true');
            button.dataset.originalText = button.textContent;
            button.textContent = busyText;
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
