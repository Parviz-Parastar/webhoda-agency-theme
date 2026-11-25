<?php
/**
 * Template Name: خدمات (Services)
 *
 * WEBHODA Services Page Template.
 *
 * Structure: dedicated page hero (navy, title from the page editor,
 * subtitle from the page excerpt), the shared services cards grid, any
 * content the owner adds in the editor, and the final CTA section.
 *
 * TECH-004: the page title/excerpt/content stay editable in WP admin.
 * CONTENT-002: service readiness classification remains with the owner;
 * no invented readiness is displayed. BRAND-004: no invented claims.
 */

get_header();

if ( ! function_exists( 'webhoda_get_services' ) ) {
    require_once get_template_directory() . '/inc/services-data.php';
}
?>

<main id="site-content" class="site-page services-page">

    <?php while ( have_posts() ) : the_post(); ?>

        <!-- Page hero -->
        <section class="services-page-hero">

            <!-- Decorative arch motif -->
            <svg
                class="services-page-hero-pattern"
                xmlns="http://www.w3.org/2000/svg"
                width="100%"
                height="100%"
                aria-hidden="true"
                focusable="false"
            >
                <defs>
                    <pattern id="services-hero-tile" width="96" height="96" patternUnits="userSpaceOnUse">
                        <g fill="none" stroke="currentColor" stroke-width="1">
                            <rect x="24" y="24" width="48" height="48"></rect>
                            <rect x="24" y="24" width="48" height="48" transform="rotate(45 48 48)"></rect>
                        </g>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#services-hero-tile)"></rect>
            </svg>

            <div class="container services-page-hero-inner">

                <p class="services-page-eyebrow">
                    <?php echo esc_html__( 'خدمات', 'agency-theme' ); ?>
                </p>

                <h1 class="services-page-title">
                    <?php the_title(); ?>
                </h1>

                <?php if ( has_excerpt() ) : ?>

                    <p class="services-page-subtitle">
                        <?php echo esc_html( get_the_excerpt() ); ?>
                    </p>

                <?php endif; ?>

            </div>

        </section>


        <!-- Shared services grid -->
        <section class="services-page-grid-section" aria-label="<?php echo esc_attr__( 'فهرست خدمات', 'agency-theme' ); ?>">

            <div class="container">

                <?php get_template_part( 'template-parts/home/services-cards' ); ?>

            </div>

        </section>


        <!-- Owner-editable content -->
        <?php if ( trim( get_the_content() ) !== '' ) : ?>

            <div class="container page-content services-page-content">

                <?php the_content(); ?>

            </div>

        <?php endif; ?>

    <?php endwhile; ?>


    <!-- Final CTA (same component as the homepage) -->
    <?php get_template_part( 'template-parts/home/cta' ); ?>

</main>

<?php
get_footer();
