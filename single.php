<?php get_header(); ?>

    <?php get_template_part('inc/hero'); ?>

    <div class="content-wrap">
        <div class="container">
            <div class="content">

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <?php the_content(); ?>

                <?php endwhile; else: endif; ?>

            </div>
        </div>
    </div>

<?php get_footer(); ?>