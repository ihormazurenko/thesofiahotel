<?php
/**
 * Template Name: Currant
 */
get_header(); ?>

    <?php get_template_part('inc/hero'); ?>

    <div id="parallax-container">
        <div style="background-image: url(<?php echo get_bloginfo('template_url'); ?>/img/current_bg.svg); "></div>
    </div>

    <div id="current-content">

        <?php get_template_part('inc/flexible-content'); ?>

    </div>

<?php get_footer(); ?>
