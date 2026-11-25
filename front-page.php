<?php
/**
 * WEBHODA Homepage
 *
 * Homepage content is managed through Gutenberg.
 * Header and footer remain part of the classic PHP theme.
 */

get_header();
?>

<main id="site-content" class="webhoda-homepage">

    <?php
    while ( have_posts() ) :
        the_post();
        the_content();
    endwhile;
    ?>

</main>

<?php
get_footer();