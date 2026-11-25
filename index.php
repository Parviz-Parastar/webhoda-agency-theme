<?php
/**
 * Main template file.
 *
 * Generic listing fallback of the WordPress Template Hierarchy
 * (blog index, archives, author and date views).
 */

get_header();
?>

<main id="site-content" class="search-page">

    <div class="container">

        <header class="search-header">

            <h1 class="search-title">
                <?php
                if (is_home() && !is_front_page()) {
                    $posts_page_id = (int) get_option('page_for_posts');
                    $listing_title = $posts_page_id ? get_the_title($posts_page_id) : '';

                    echo $listing_title ? esc_html($listing_title) : esc_html__('آخرین نوشته‌ها', 'agency-theme');
                } elseif (is_archive()) {
                    echo wp_kses_post(get_the_archive_title());
                } else {
                    echo esc_html__('آخرین نوشته‌ها', 'agency-theme');
                }
                ?>
            </h1>

        </header>


        <?php if (have_posts()) : ?>

            <div class="search-results">

                <?php while (have_posts()) : the_post(); ?>

                    <article <?php post_class('search-result-item'); ?>>

                        <h2 class="search-result-title">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>

                        <div class="search-result-excerpt">
                            <?php the_excerpt(); ?>
                        </div>

                        <a
                            class="search-result-link"
                            href="<?php the_permalink(); ?>"
                        >
                            <?php echo esc_html__('ادامه مطلب', 'agency-theme'); ?>
                        </a>

                    </article>

                <?php endwhile; ?>

            </div>


            <nav class="search-pagination" aria-label="<?php echo esc_attr__('صفحه‌بندی مطالب', 'agency-theme'); ?>">

                <?php
                the_posts_pagination(array(
                    'mid_size'  => 2,
                    'prev_text' => esc_html__('مطالب قبلی', 'agency-theme'),
                    'next_text' => esc_html__('مطالب بعدی', 'agency-theme'),
                ));
                ?>

            </nav>


        <?php else : ?>

            <div class="search-no-results">

                <h2>
                    <?php echo esc_html__('محتوایی یافت نشد', 'agency-theme'); ?>
                </h2>

                <p>
                    <?php echo esc_html__('در حال حاضر محتوایی برای نمایش در این بخش وجود ندارد.', 'agency-theme'); ?>
                </p>

            </div>

        <?php endif; ?>

    </div>

</main>

<?php
get_footer();
