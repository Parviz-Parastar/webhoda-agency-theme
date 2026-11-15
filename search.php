
<?php
/**
 * Search Results Template
 *
 * Displays search results for WEBHODA.
 */

get_header();
?>

<main id="site-content" class="search-page">

    <div class="container">

        <header class="search-header">

            <h1 class="search-title">
                نتایج جست‌وجو
            </h1>

            <p class="search-description">
                نتیجه جست‌وجو برای:
                <strong>
                    <?php echo esc_html(get_search_query()); ?>
                </strong>
            </p>

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
                            ادامه مطلب
                        </a>

                    </article>

                <?php endwhile; ?>

            </div>


            <nav class="search-pagination" aria-label="صفحه‌بندی نتایج">

                <?php
                the_posts_pagination(array(
                    'mid_size'  => 2,
                    'prev_text' => 'مطالب قبلی',
                    'next_text' => 'مطالب بعدی',
                ));
                ?>

            </nav>


        <?php else : ?>

            <div class="search-no-results">

                <h2>نتیجه‌ای پیدا نشد!</h2>

                <p>
                    متأسفانه مطلبی مطابق عبارت جست‌وجوی شما پیدا نکردیم.
                    لطفاً عبارت دیگری را امتحان کنید.
                </p>

            </div>

        <?php endif; ?>

    </div>

</main>

<?php
get_footer();
