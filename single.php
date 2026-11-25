<?php
/**
 * WEBHODA Single Post Template
 *
 * Canonical template of the WordPress Template Hierarchy for single
 * blog posts. Reuses the theme's established inner-page layout
 * (search/page conventions) and its defined CSS classes.
 */

get_header();
?>

<main id="site-content" class="search-page">

    <div class="container">

        <?php while (have_posts()) : the_post(); ?>

            <article <?php post_class('search-result-item'); ?>>

                <header class="search-header">

                    <h1 class="search-title">
                        <?php the_title(); ?>
                    </h1>

                </header>

                <?php if (has_post_thumbnail()) : ?>

                    <div class="page-thumbnail">
                        <?php the_post_thumbnail('large'); ?>
                    </div>

                <?php endif; ?>

                <div class="page-content">

                    <?php
                    the_content();

                    wp_link_pages(array(
                        'before' => '<nav class="page-pagination" aria-label="' . esc_attr__('صفحه‌بندی محتوا', 'agency-theme') . '">',
                        'after'  => '</nav>',
                    ));
                    ?>

                </div>

            </article>


            <?php
            the_post_navigation(array(
                'class'     => 'search-pagination',
                'prev_text' => esc_html__('نوشته قبلی: %title', 'agency-theme'),
                'next_text' => esc_html__('نوشته بعدی: %title', 'agency-theme'),
            ));
            ?>

        <?php endwhile; ?>

    </div>

</main>

<?php
get_footer();
