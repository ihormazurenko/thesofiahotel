<?php
/**
 * Template Name: Blog
 */
get_header(); ?>

    <?php get_template_part('inc/hero'); ?>

    <section class="section-blog">
        <div class="container">
            <?php global $wp_query;

                $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                $posts_per_page = trim(get_field('posts_per_page')) ? (int) get_field('posts_per_page') : 3;

                $args = array(
                    'post_type'     => 'post',
                    'post_status'   => 'publish',
                    'orderby'       => 'date',
                    'order'         => 'DESC',
                    'posts_per_page'=> $posts_per_page,
                    'paged'         => $paged,
                );
                $new_query = new WP_Query( $args );

                if ( $new_query->have_posts() ) :
            ?>
                <ul class="blog-list" id="insert-list">

                    <?php while ( $new_query->have_posts() ) : $new_query->the_post();
                         get_template_part('loop', 'post');
                    endwhile; ?>

                </ul>

                <?php if ( $new_query->max_num_pages > 1 ) : ?>
                    <script>
                        var newQuery     = '<?php echo serialize($new_query->query_vars); ?>',
                            current_page = <?php echo $paged; ?>,
                            max_pages    = '<?php echo $new_query->max_num_pages; ?>';
                    </script>

                    <?php get_template_part('inc/load-more'); ?>
                <?php endif; ?>

            <?php else: echo "<p class='no-results'>".__('Sorry, no posts found...', 'the-sofia-hotel')."</p>";
                endif; wp_reset_query(); ?>

        </div>
    </section>

<?php get_footer(); ?>