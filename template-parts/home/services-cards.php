<?php
/**
 * WEBHODA Services Cards Grid
 *
 * Shared grid of the six service cards. Used by the homepage services
 * section and the standalone services page. Data comes from
 * webhoda_get_services() (inc/services-data.php) so both stay in sync.
 */

$webhoda_services          = webhoda_get_services();
$webhoda_service_statuses  = webhoda_get_service_statuses();
?>

<ul class="services-grid" role="list">

    <?php foreach ( $webhoda_services as $webhoda_service ) : ?>

        <li class="service-card">

            <span class="service-icon" aria-hidden="true">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="28"
                    height="28"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.6"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    focusable="false"
                >
                    <?php echo $webhoda_service['icon']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static markup defined in inc/services-data.php. ?>
                </svg>
            </span>

            <h3 class="service-title">
                <?php echo esc_html( $webhoda_service['title'] ); ?>
            </h3>

            <p class="service-text">
                <?php echo esc_html( $webhoda_service['text'] ); ?>
            </p>

            <?php if ( ! empty( $webhoda_service['status'] ) && isset( $webhoda_service_statuses[ $webhoda_service['status'] ] ) ) : ?>

                <span class="service-status service-status-<?php echo esc_attr( $webhoda_service['status'] ); ?>">
                    <?php echo esc_html( $webhoda_service_statuses[ $webhoda_service['status'] ] ); ?>
                </span>

            <?php endif; ?>

        </li>

    <?php endforeach; ?>

</ul>
