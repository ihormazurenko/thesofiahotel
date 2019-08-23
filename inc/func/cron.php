<?php
function places_cron_job() {
    global $tsh_google_map_key, $wp_query;

    $tsh_coordinate = [];

    //The Sofia Hotel Coordinate
    $tsh_coordinate_base = get_field('contacts', 'option')['map'] ? get_field('contacts', 'option')['map'] : [];

    $base_lat = $tsh_coordinate_base['lat'] ? (float)$tsh_coordinate_base['lat'] : 32.715946087492;
    $base_lng = $tsh_coordinate_base['lng'] ? (float)$tsh_coordinate_base['lng'] : -117.16446876526;

    $tsh_coordinate[] = [
        'place_title' => __('The Sofia Hotel','the-sofia-hotel'),
        'place_short_desc' => '',
        'place_lat' => $base_lat,
        'place_lng' => $base_lng,
        'place_type' => 'tsh'
    ];


    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
    $args = array(
        'post_type'     => 'place',
        'post_status'   => 'publish',
        'posts_per_page' => -1,
        'orderby'       => 'date',
        'order'         => 'ASC',
        'paged'         => $paged,
    );
    $new_query = new WP_Query( $args );

    if ($new_query->have_posts()) {
        while ( $new_query->have_posts() ) : $new_query->the_post();
            $map                = get_field('map');
            $title              = get_the_title();
            $short_description  = get_field('place_description');
            $place_id           = get_field('place_id') ? get_field('place_id') : '';
            $types              = wp_get_post_terms( get_the_ID(), 'place_type' );
            $marker_description = $short_description ? preg_replace('/[\n\r]/', '', htmlentities($short_description)) : '';
            $place_type         = '';
            $jsonContent        = '';
            $rating             = '';
            $review_count       = '';
            $place_url          = '';
            $price_level        = '';

            if ($types && is_array($types) && count($types) > 0) {
                $place_type = (trim($types[0]->slug) && count($types[0]->count) > 0 ) ? $types[0]->slug : '';
            }

            if ($map && is_array($map) && count($map) > 0) {
                $lat = $map['lat'] ? (float)$map['lat'] : '';
                $lng = $map['lng'] ? (float)$map['lng'] : '';
            }


            if ($place_id) {
                 $url = 'https://maps.googleapis.com/maps/api/place/details/json?placeid='.$place_id.'&fields=rating,user_ratings_total,price_level,url&key='.$tsh_google_map_key;
                 $json = file_get_contents($url);
                 $place_data  = json_decode($json, TRUE);

                 if ($place_data && is_array($place_data) && count($place_data) > 0) {
                     if (strtolower($place_data['status']) == 'ok') {
                         $result = $place_data['result'];
                         if ($result && is_array($result) && count($result) > 0) {
                                $rating         = $result['rating'] ? $result['rating'] : '';
                                $review_count   = $result['user_ratings_total'] ? $result['user_ratings_total'] : '';
                                $price_level    = $result['price_level'] ? $result['price_level'] : '';
                                $place_url      =  $result['url'] ? $result['url'] : '';
                         }
                     }
                 }
            }



            $tsh_coordinate[] = [
                'place_title' => $title,
                'place_short_desc' => $marker_description,
                'place_lat' => $lat,
                'place_lng' => $lng,
                'place_type' => $place_type,
                'place_id' => $place_id,
                'rating' => $rating,
                'review_count' => $review_count,
                'price_level' => $price_level,
                'place_url' => $place_url,
            ];
        endwhile;
    }

    wp_reset_query();

    $content = json_encode($tsh_coordinate);
    $file = fopen(__DIR__.'/places_data.json', 'w');

    fwrite($file, $content);
    fclose($file);
}

add_action('wp', 'place_inf_cron_job_activation');
function place_inf_cron_job_activation() {
    if ( ! wp_next_scheduled( 'my_twelve_hour_event' ) ) {
        wp_schedule_event( time(), 'twicedaily', 'my_twelve_hour_event');
    }
}


add_action('my_twelve_hour_event', 'do_twelve_hour_event');
function do_twelve_hour_event() {
    places_cron_job();
}

//wp_clear_scheduled_hook('my_twelve_hour_event');