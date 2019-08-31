<?php
/**
 * Template Name: Press
 */
get_header(); ?>

    <?php get_template_part('inc/hero'); ?>

    <?php get_template_part('inc/flexible-content'); ?>

    <?php /*
        $args = array(
            'post_type'     => 'news',
            'post_status'   => 'publish',
            'orderby'       => 'meta_value_num menu_order',
            'order'         => 'DESC',
            'meta_key'      => 'details_date',
            'posts_per_page'=> 6,
        );
        $news_query = new WP_Query( $args );

        if ( $news_query->have_posts() ) :
    ?>
        <section class="section-services">
            <div class="container">
                <ul class="service-list press" id="insert-list">

                    <?php while ( $news_query->have_posts() ) : $news_query->the_post();
                         get_template_part('loop', 'news');
                    endwhile; ?>

                </ul>
            </div>
        </section>

        <?php if ( $news_query->max_num_pages > 1 ) :
            wp_reset_query();

            $args['offset'] = 6;
            $args['posts_per_page'] = 9;
            $news_ajax_query = new WP_Query( $args );
        ?>
            <script>
                var newQuery     = '<?php echo serialize($news_ajax_query->query_vars); ?>',
                    current_page = '1',
                    max_pages    = '<?php echo $news_ajax_query->max_num_pages; ?>';
            </script>

            <?php get_template_part('inc/load-more'); ?>
        <?php endif; ?>

    <?php else: echo "<div class='container'><p class='no-results'>".__('Sorry, no news found...', 'the-sofia-hotel')."</p></div>";
        endif; wp_reset_query(); */ ?>


<?php get_footer(); ?>
