<?php
/**
 * WEBHODA Page Template
 *
 * Default template for static pages in the WordPress Template Hierarchy.
 * Renders the page title, optional featured image and the page content.
 */

get_header();
?>

<main id="site-content" class="site-page">

    <div class="container">

        <?php while (have_posts()) : the_post(); ?>

            <article <?php post_class('page-article'); ?>>

                <header class="page-header">

                    <h1 class="page-title">
                        <?php the_title(); ?>
                    </h1>

                    <?php if (has_post_thumbnail()) : ?>

                        <div class="page-thumbnail">
                            <?php the_post_thumbnail('large'); ?>
                        </div>

                    <?php endif; ?>

                </header>

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

        <?php endwhile; ?>

    </div>

</main>

<?php
get_footer();
