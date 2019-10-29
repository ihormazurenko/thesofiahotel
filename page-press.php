<?php
/**
 * Template Name: Press
 */
get_header();

    global $page_id;
    $page_id = get_the_ID();
?>

    <?php get_template_part('inc/hero'); ?>

    <?php
        global $wp_query;

        $paged = get_query_var('paged') ? get_query_var('paged') : 1;

        $args = array(
            'post_type'     => 'news',
            'post_status'   => 'publish',
            'orderby'       => 'meta_value_num menu_order',
            'order'         => 'DESC',
            'meta_key'      => 'date_news_U',
            'posts_per_page'=> 6,
            'paged'         => $paged,
        );
        $news_query = new WP_Query( $args );

        if ( $news_query->have_posts() ) :
            $i = 1;
    ?>
        <section class="section-services">
            <div class="container">
                <ul class="service-list press">

                    <?php while ( $news_query->have_posts() ) : $news_query->the_post();

                            if ($i === 4) {
                                echo       "</ul>
                                        </div>
                                    </section>";

                                    get_template_part('inc/banner', 'press');

                                echo "<section class='section-services press'>
                                        <div class='container'>
                                            <ul class='service-list press' id='insert-list'>";
                            }

                            get_template_part('loop', 'news');

                            $i++;

                    endwhile; ?>

                </ul>

                <?php if ( $news_query->max_num_pages > 1 ) : ?>
                    <script>
                        var newQuery     = '<?php echo serialize($news_query->query_vars); ?>',
                            current_page = <?php echo $paged; ?>,
                            max_pages    = '<?php echo $news_query->max_num_pages; ?>';
                    </script>
                <?php endif; ?>
            </div>
        </section>

        <?php if ( $news_query->max_num_pages > 1 ) :
            get_template_part('inc/load-more');
        endif; ?>

    <?php else: echo "<div class='container'><p class='no-results'>".__('Sorry, no news found...', 'the-sofia-hotel')."</p></div>";
        endif; wp_reset_query(); ?>


    <?php if ($i <= 4) {
        get_template_part('inc/banner', 'press');
    } ?>

<?php get_footer(); ?>
