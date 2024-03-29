<?php
// loading styles and scripts
function load_style_script(){
    global $is_IE;

    wp_enqueue_style('jquery-ui.min', '//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css', array(), null );
    wp_enqueue_style('swiper.min', '//cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css', array(), null );
    wp_enqueue_style('screen', get_template_directory_uri() . '/assets/css/screen.css', array(), '1.0.2' );
    wp_enqueue_style('style', get_stylesheet_uri(), array(), null );

    wp_enqueue_script('modernizr.min', '//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', array(), '2.8.3', false );
    if ( !wp_script_is( 'jquery' ) ) {
        wp_enqueue_script('jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js', array(), '1.12.4', false );
    }
    wp_enqueue_script('jquery-ui', '//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js', array('jquery'), '1.12.1', false );
    wp_enqueue_script('fontawesome', '//kit.fontawesome.com/0d9005a90f.js', array(), '5.9.0', false );

    wp_enqueue_script('html5shiv', '//html5shiv.googlecode.com/svn/trunk/html5.js', array(), null, false );
    wp_script_add_data('html5shiv','conditional','IE 9');

    wp_enqueue_script('magnific', get_template_directory_uri() . '/assets/js/magnific.js', array('jquery'), '1.1.0', true );
//    wp_enqueue_script('accessible-tabs', get_template_directory_uri() . '/assets/js/accessible-tabs.js', array('jquery'), '1.0.0', true );
//    wp_enqueue_script('accessible-tabs-ie9', get_template_directory_uri() . '/assets/js/accessible-tabs-ie9.js', array('jquery'), '1.0.0', true );
//    wp_script_add_data('accessible-tabs-ie9','conditional','IE 9');

    wp_enqueue_script('jquery.nicescroll.min', '//cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js', array(), '3.7.6', true );
    wp_enqueue_script('swiper.min', '//cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js', array(), '4.5.0', false );
    wp_enqueue_script('smooth-scroll.polyfills', get_template_directory_uri() . '/assets/js/smooth-scroll.polyfills.min.js', array(), '16.1.0', true );
    wp_enqueue_script('isotope.pkgd.min', '//unpkg.com/isotope-layout@3.0.6/dist/isotope.pkgd.min.js', array(), '3.0.6', true );
    wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/custom/scripts.js', array('jquery'), null, true );
    wp_enqueue_script('datepicker', get_template_directory_uri() . '/assets/js/custom/datepicker.js', array('jquery'), null, true );

    if ( is_page(69) ) {
        wp_enqueue_script('custom-map', get_template_directory_uri() . '/assets/js/custom/map.js', array('jquery'), '1.0.0', true );
    }

    wp_localize_script('scripts', 'load_posts_var', array(
            'load_post_ajaxurl' => admin_url('admin-ajax.php'),
        )
    );
}
add_action('wp_enqueue_scripts', 'load_style_script');


// logo at the entrance to the admin panel
function my_custom_login_logo(){
    echo '<style type="text/css">
    h1 a {height:40px !important; width:280px !important; background-size:contain !important; background-image:url('.get_bloginfo("template_url").'/img/logo.svg) !important;}
    </style>';
}
add_action('login_head', 'my_custom_login_logo');

add_filter( 'login_headerurl', function(){ return get_home_url(); } );
add_filter( 'login_headertitle', function(){ return false; } );


// no information explaining the situation will appear when an incorrect login or password is entered
add_filter( 'login_errors', function($a){ return null; } );


// delete unnecessary items in wp_head
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
remove_action( 'wp_head', 'wp_generator' );


// remove the wrapped <p> tag from images in the content
function filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}
add_filter('the_content', 'filter_ptags_on_images');


// automatic generation of the tag <title>
add_theme_support( 'title-tag' );
// adding html5 markup
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

// support custom logo
add_theme_support( 'custom-logo', array(
    'flex-height' => true,
    'flex-width'  => true
) );
add_theme_support( 'custom-logo' );


// support thumbnails
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
}


// support menus
if ( function_exists( 'register_nav_menus' ) ) {
    register_nav_menus(array(
        'main-menu'         => 'Main Menu',
        'secondary-menu'    => 'Secondary Menu',
        'footer-menu'       => 'Footer Menu'
    ));
}


// for excerpts
function new_excerpt_more( $more ) {
    return '&hellip;';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );


function new_excerpt_length($length) {
  return 40;
}
add_filter('excerpt_length', 'new_excerpt_length');




/* Hack on overwriting the guid parameter when publishing or updating a post in the admin panel (the permalink in the current structure is written)
--------------------------------------------------------------------------------------------------------------------------------- */
function guid_write( $id ){
    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE  ) return false; // если это автосохранение

    global $wpdb;

    if( $id = (int) $id )
        $wpdb->query("UPDATE $wpdb->posts SET guid='". get_permalink($id) ."' WHERE ID=$id LIMIT 1");
}
add_action ('save_post', 'guid_write', 100);



// for Options Page
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page('Theme Options');
}


// for Ajax funcs
get_template_part('inc/func/ajax');

// for Cron Job
get_template_part('inc/func/cron');

// get current URL
function current_url() {
    global $wp;
    if(!$wp->did_permalink){
        $output = home_url(add_query_arg($wp->query_string));
    } else {
        $output = home_url(add_query_arg(array(),$wp->request).'/');
    }

    return $output;
}

// ACF Google Maps
global $tsh_google_map_key;

$tsh_google_map_key = 'AIzaSyCUoxAdDUz3znGK7KPWJPSxETdqo4XAJBA';

if (class_exists('acf')) {
    function my_acf_init() {
        global $tsh_google_map_key;
        acf_update_setting( 'google_api_key', $tsh_google_map_key );
    }
    add_action('acf/init', 'my_acf_init');
}


// to make ID of element
function element_id($text = '') {
    $output = '';

    if(trim($text)){
        $output  = preg_replace('/[^\w]/','-', strtolower(strip_tags(trim($text))) );
        $output  = preg_replace('/(-)\1+/','-', $output );
    }

    return $output;
}

//update Places date
add_action( 'save_post_place', 'places_cron_job', 10, 3 );


// for the date of Press article
function news_date($post_id) {

    // if revision or post autosave or insufficient editing permissions
    if ( wp_is_post_revision($post_id) || (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) || !current_user_can( 'edit_post', $post_id ) )
        return;

    if (empty($_POST['acf']) || get_current_screen()->id !== "news")
        return;

    $date = trim($_POST['acf']['field_5d696e643493d']['field_5d696ead3493f']) ? strtotime($_POST['acf']['field_5d696e643493d']['field_5d696ead3493f']) : 2;

    update_post_meta($post_id, 'date_news_U', $date);

    return $post_id;

}
add_action('save_post_news', 'news_date', -1);

