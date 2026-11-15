<?php
/**
 * WEBHODA Homepage
 */

get_header();
?>

<main id="site-content" class="webhoda-homepage">

    <?php get_template_part('template-parts/home/hero'); ?>

    <?php get_template_part('template-parts/home/services'); ?>

    <?php get_template_part('template-parts/home/why-webhoda'); ?>

</main>

<?php
get_footer();
