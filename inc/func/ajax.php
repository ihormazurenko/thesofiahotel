<?php

// Ajax for Blog page
function load_more(){
    $args           = unserialize(stripslashes($_POST['query']));
    $args['paged']  = $_POST['page'] + 1;
    $template       = $_POST['template'];

    if ($args['offset']) $args['offset'] = false;

    $q = new WP_Query($args);
    if( $q->have_posts() ):
        while($q->have_posts()): $q->the_post();
            if ($template == 'news') {
                get_template_part('loop', 'news');
            } else {
                get_template_part('loop', 'post');
            }
        endwhile;
    endif;
    wp_reset_query();
    die();
}
add_action('wp_ajax_load_more', 'load_more');
add_action('wp_ajax_nopriv_load_more', 'load_more');