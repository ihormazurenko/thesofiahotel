<?php
/**
 * Template Name: Explore
 */
get_header();

global $tsh_google_map_key;

//The Sofia Hotel Coordinate
$tsh_coordinate_base = get_field('contacts', 'option')['map'] ? get_field('contacts', 'option')['map'] : [];

$base_lat = $tsh_coordinate_base['lat'] ? (float)$tsh_coordinate_base['lat'] : 32.715946087492;
$base_lng = $tsh_coordinate_base['lng'] ? (float)$tsh_coordinate_base['lng'] : -117.16446876526;

$icon_rel = [
    'coffee'      => 'coffee',
    'dining'      => 'restaurant',
    'nightlife'   => 'area',
    'shops'       => 'shop',
    'sites'       => 'photo',
];

$url         = get_template_directory_uri() . '/inc/func/places_data.json';
$places_data = json_decode(file_get_contents($url),true);
?>

    <?php get_template_part('inc/hero'); ?>

    <section class="section-tabs map-type">
        <div class="container">
            <script src="//maps.googleapis.com/maps/api/js?key=<?php echo $tsh_google_map_key; ?>"></script>

            <?php
                $cats = get_terms( array(
                    'taxonomy'      => array( 'place_type' ),
                    'orderby'       => 'id',
                    'order'         => 'ASC',
                    'hide_empty'    => true,
                    'number'        => 10,
                    'fields'        => 'all',
                    'count'         => false,
                    'parent'        => 0,
                    'hierarchical'  => true,
                    'cache_domain'  => 'core',
                    'update_term_meta_cache' => true
                ) );

                if ($cats && is_array($cats) && count($cats) > 0) {
                ?>

                <div class="tabs-nav">
                    <ul class="tab-list">
                        <li>
                            <a href="#all" data-types="tsh, coffee, dining, nightlife, shops, sites" title="<?php esc_attr_e('View all', 'the-sofia-hotel'); ?>" class="view-all" data-filter="*"><?php _e('View all', 'the-sofia-hotel'); ?></a>
                        </li>
                        <?php
                        $colors = ['light-blue', 'gold', 'purple', 'grey', 'dark'];
                        foreach ($cats as $cat) {
                            echo "<li><a href='#{$cat->slug}' data-types=\"tsh, {$cat->slug}\" title='".esc_attr($cat->name)."' class='color-".current($colors)." {$icon_rel[$cat->slug]}' data-filter='.{$cat->slug}'>{$cat->name}</a></li>";
                            next($colors);
                        }
                        ?>
                    </ul>
                </div>
            <?php } ?>

            <div class="map-wrap">
                <div id="map"></div>
            </div>

            <script>
                tsh_marker_base_url = "<?php echo get_bloginfo('template_url') . '/img/'; ?>";
                tsh_arr = '<?php echo json_encode($places_data); ?>';
                tsh_base_lat = <?php echo $base_lat; ?>;
                tsh_base_lng = <?php echo $base_lng; ?>;
            </script>
        </div>
    </section>

    <section class="section section-interesting-info color-light-blue">
        <div class="container">
            <h2 class="section-title">Discover America's Finest City</h2>
            <div class="content">
                <p>From exquisite beaches and bayside attractions, to famed Mexican cuisine and the world renowned San Diego Zoo, San Diego's playground awaits, ready to bring you Southern California's finest.</p>
            </div>
        </div>
    </section>

    <section class="section-slider">
        <div class="container">
            <div class="single-slider small">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="<?php echo get_bloginfo('template_url'); ?>/img/explore_slide_1.jpg" alt=""></div>
                        <div class="swiper-slide"><img src="<?php echo get_bloginfo('template_url'); ?>/img/explore_slide_2.jpg" alt=""></div>
                        <div class="swiper-slide"><img src="<?php echo get_bloginfo('template_url'); ?>/img/explore_slide_3.jpg" alt=""></div>
                        <div class="swiper-slide"><img src="<?php echo get_bloginfo('template_url'); ?>/img/explore_slide_4.jpg" alt=""></div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-prev"><span class="tsh-icon-arrow"></span></div>
                    <div class="swiper-button-next"><span class="tsh-icon-arrow"></span></div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-banner" style="background-image: url(<?php echo get_bloginfo('template_url'); ?>/img/explore_prefooter_bg.jpg);">
        <div class="container">
            <div class="vertical-align-box">
                <div class="inner-box">
                    <ul class="banner-link">
                        <li>
                            <a href="#" title="" class="btn">Book Now</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

<?php /*
<!--style for maps-->
<script type="text/javascript">
    var gmb_data = {"2885":{"id":"2885","ajax_url":"https:\/\/thesofiahotel.com\/wp-admin\/admin-ajax.php","map_params":{"title":"Nightlife","width":"100","height":"600","latitude":"32.7159428","longitude":"-117.1644647","zoom":"15","default_marker":"https:\/\/thesofiahotel.com\/wp-content\/plugins\/google-maps-builder-pro\/assets\/img\/spotlight-poi.png"},"map_controls":{"zoom_control":"DEFAULT","pan_control":"true","map_type_control":"horizontal_bar","draggable":"true","double_click_zoom":"true","wheel_zoom":"true","street_view":"true"},"map_theme":{"map_type":"RoadMap","map_theme_json":"[\r\n    {\r\n        \"featureType\": \"administrative\",\r\n        \"elementType\": \"labels.text.fill\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#444444\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"landscape\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#f2f2f2\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"landscape.natural\",\r\n        \"elementType\": \"geometry\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"on\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"poi\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"off\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"road\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"saturation\": -100\r\n            },\r\n            {\r\n                \"lightness\": 45\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"road.highway\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"simplified\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"road.arterial\",\r\n        \"elementType\": \"labels.icon\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"off\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"transit\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"off\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"water\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#c6abb5\"\r\n            },\r\n            {\r\n                \"visibility\": \"on\"\r\n            }\r\n        ]\r\n    }\r\n]"},"marker_centered":"yes","marker_cluster":"","plugin_url":"https:\/\/thesofiahotel.com\/wp-content\/plugins\/google-maps-builder-pro\/","site_name":"The Sofia Hotel","site_url":"https:\/\/thesofiahotel.com","mashup_markers":[{"post_type":"post","taxonomy":"none","latitude":"_edit_lock","longitude":"_edit_lock","featured_img":"yes","marker_img_id":0}],"map_markers":[{"place_id":"ChIJbQ_kUahU2YARc-JtJkbuqRc","lat":"32.7159428","lng":"-117.1644647","marker_img_id":128,"marker_img":"https:\/\/thesofiahotel.com\/wp-content\/uploads\/2017\/09\/MAP-e1504435739422.png","infowindow_open":"closed"}],"destination_markers":[{"travel_mode":"DRIVING","point":[]}],"text_directions":"overlay","layers":"","places_search":"","places_api":{"show_places":"yes","search_radius":"15000","search_places":["night_club"]},"map_markers_icon":"none"},"2884":{"id":"2884","ajax_url":"https:\/\/thesofiahotel.com\/wp-admin\/admin-ajax.php","map_params":{"title":"Shopping","width":"100","height":"600","latitude":"32.7159428","longitude":"-117.1644647","zoom":"15","default_marker":"https:\/\/thesofiahotel.com\/wp-content\/plugins\/google-maps-builder-pro\/assets\/img\/spotlight-poi.png"},"map_controls":{"zoom_control":"DEFAULT","pan_control":"true","map_type_control":"horizontal_bar","draggable":"true","double_click_zoom":"true","wheel_zoom":"true","street_view":"true"},"map_theme":{"map_type":"RoadMap","map_theme_json":"[\r\n    {\r\n        \"featureType\": \"administrative\",\r\n        \"elementType\": \"labels.text.fill\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#444444\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"landscape\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#f2f2f2\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"landscape.natural\",\r\n        \"elementType\": \"geometry\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"on\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"poi\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"off\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"road\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"saturation\": -100\r\n            },\r\n            {\r\n                \"lightness\": 45\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"road.highway\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"simplified\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"road.arterial\",\r\n        \"elementType\": \"labels.icon\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"off\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"transit\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"off\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"water\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#c6abb5\"\r\n            },\r\n            {\r\n                \"visibility\": \"on\"\r\n            }\r\n        ]\r\n    }\r\n]"},"marker_centered":"yes","marker_cluster":"","plugin_url":"https:\/\/thesofiahotel.com\/wp-content\/plugins\/google-maps-builder-pro\/","site_name":"The Sofia Hotel","site_url":"https:\/\/thesofiahotel.com","mashup_markers":[{"post_type":"post","taxonomy":"none","latitude":"_edit_lock","longitude":"_edit_lock","featured_img":"yes","marker_img_id":0}],"map_markers":[{"place_id":"ChIJbQ_kUahU2YARc-JtJkbuqRc","lat":"32.7159428","lng":"-117.1644647","marker_img_id":128,"marker_img":"https:\/\/thesofiahotel.com\/wp-content\/uploads\/2017\/09\/MAP-e1504435739422.png","infowindow_open":"closed"}],"destination_markers":[{"travel_mode":"DRIVING","point":[]}],"text_directions":"overlay","layers":"","places_search":"","places_api":{"show_places":"yes","search_radius":"3000","search_places":["atm","bank","beauty_salon","book_store","clothing_store","florist","grocery_or_supermarket","hair_care","jewelry_store","pharmacy","shoe_store","shopping_mall","store"]},"map_markers_icon":"none"},"2881":{"id":"2881","ajax_url":"https:\/\/thesofiahotel.com\/wp-admin\/admin-ajax.php","map_params":{"title":"Dining","width":"100","height":"600","latitude":"32.7159273","longitude":"-117.164289","zoom":"15","default_marker":"https:\/\/thesofiahotel.com\/wp-content\/plugins\/google-maps-builder-pro\/assets\/img\/spotlight-poi.png"},"map_controls":{"zoom_control":"DEFAULT","pan_control":"true","map_type_control":"horizontal_bar","draggable":"true","double_click_zoom":"true","wheel_zoom":"true","street_view":"true"},"map_theme":{"map_type":"RoadMap","map_theme_json":"[\r\n    {\r\n        \"featureType\": \"administrative\",\r\n        \"elementType\": \"labels.text.fill\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#444444\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"landscape\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#f2f2f2\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"landscape.natural\",\r\n        \"elementType\": \"geometry\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"on\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"poi\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"off\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"road\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"saturation\": -100\r\n            },\r\n            {\r\n                \"lightness\": 45\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"road.highway\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"simplified\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"road.arterial\",\r\n        \"elementType\": \"labels.icon\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"off\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"transit\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"off\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"water\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#c6abb5\"\r\n            },\r\n            {\r\n                \"visibility\": \"on\"\r\n            }\r\n        ]\r\n    }\r\n]"},"marker_centered":"yes","marker_cluster":"","plugin_url":"https:\/\/thesofiahotel.com\/wp-content\/plugins\/google-maps-builder-pro\/","site_name":"The Sofia Hotel","site_url":"https:\/\/thesofiahotel.com","mashup_markers":[{"post_type":"post","taxonomy":"none","latitude":"_edit_lock","longitude":"_edit_lock","featured_img":"yes","marker_img_id":0}],"map_markers":[{"title":"The Sofia Hotel","description":"","reference":"","place_id":"ChIJbQ_kUahU2YARc-JtJkbuqRc","hide_details":false,"lat":"32.7159428","lng":"-117.1644647","marker_img_id":128,"marker_img":"https:\/\/thesofiahotel.com\/wp-content\/uploads\/2017\/09\/MAP-e1504435739422.png","marker_included_img":"","marker":"","label":"","infowindow_open":"closed"},{"place_id":"ChIJI7PyTqhU2YAREoGQkmb7IXY","lat":"32.7159273","lng":"-117.164289","marker_img_id":2883,"marker_img":"https:\/\/thesofiahotel.com\/wp-content\/uploads\/2018\/01\/MAP-Currant-copy.png","infowindow_open":"closed"}],"destination_markers":[{"travel_mode":"DRIVING","point":[]}],"text_directions":"overlay","layers":"","places_search":"","places_api":{"show_places":"yes","search_radius":"15000","search_places":["bar","restaurant"]},"map_markers_icon":"none"},"2880":{"id":"2880","ajax_url":"https:\/\/thesofiahotel.com\/wp-admin\/admin-ajax.php","map_params":{"title":"Sites","width":"100","height":"600","latitude":"32.7159428","longitude":"-117.1644647","zoom":"14","default_marker":"https:\/\/thesofiahotel.com\/wp-content\/plugins\/google-maps-builder-pro\/assets\/img\/spotlight-poi.png"},"map_controls":{"zoom_control":"DEFAULT","pan_control":"true","map_type_control":"horizontal_bar","draggable":"true","double_click_zoom":"true","wheel_zoom":"true","street_view":"true"},"map_theme":{"map_type":"RoadMap","map_theme_json":"[\r\n    {\r\n        \"featureType\": \"administrative\",\r\n        \"elementType\": \"labels.text.fill\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#444444\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"landscape\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#f2f2f2\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"landscape.natural\",\r\n        \"elementType\": \"geometry\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"on\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"poi\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"off\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"poi.attraction\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"on\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"poi.attraction\",\r\n        \"elementType\": \"labels.text.fill\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#ff00e9\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"poi.park\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"on\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"poi.park\",\r\n        \"elementType\": \"geometry\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#c393c0\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"poi.park\",\r\n        \"elementType\": \"labels.text.fill\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#ee00d9\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"road\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"saturation\": -100\r\n            },\r\n            {\r\n                \"lightness\": 45\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"road.highway\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"simplified\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"road.arterial\",\r\n        \"elementType\": \"labels.icon\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"off\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"transit\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"off\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"water\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#c6abb5\"\r\n            },\r\n            {\r\n                \"visibility\": \"on\"\r\n            }\r\n        ]\r\n    }\r\n]"},"marker_centered":"yes","marker_cluster":"","plugin_url":"https:\/\/thesofiahotel.com\/wp-content\/plugins\/google-maps-builder-pro\/","site_name":"The Sofia Hotel","site_url":"https:\/\/thesofiahotel.com","mashup_markers":[{"post_type":"post","taxonomy":"none","latitude":"_edit_lock","longitude":"_edit_lock","featured_img":"yes","marker_img_id":0}],"map_markers":[{"title":"Taffy 3 Memorial","description":"","reference":"","place_id":"ChIJ_bLPSFWr3oARNFIMMcjESnA","hide_details":false,"lat":"32.7127149","lng":"-117.17413690000001","marker_img_id":0,"marker_img":false,"marker_included_img":"assets\/img\/maps-icons-collection\/information.png","marker":"","label":"","infowindow_open":"closed"},{"title":"Ernest Hahn Statue","description":"","reference":"","place_id":"ChIJWZi6AahU2YARI2OoPW7_Ybg","hide_details":false,"lat":"32.7146533","lng":"-117.16200049999998","marker_img_id":0,"marker_img":false,"marker_included_img":"assets\/img\/maps-icons-collection\/information.png","marker":"","label":"","infowindow_open":"closed"},{"title":"Visit the Gaslamp Museum at the Davis-Horton House","description":"","reference":"","place_id":"ChIJP_hB71lT2YAR8zwNVdBewng","hide_details":false,"lat":"32.7105762","lng":"-117.16068869999998","marker_img_id":0,"marker_img":false,"marker_included_img":"assets\/img\/maps-icons-collection\/information.png","marker":"","label":"","infowindow_open":"closed"},{"title":"The Sofia Hotel","place_id":"ChIJbQ_kUahU2YARc-JtJkbuqRc","lat":"32.7159428","lng":"-117.1644647","marker_img_id":128,"marker_img":"https:\/\/thesofiahotel.com\/wp-content\/uploads\/2017\/09\/MAP-e1504435739422.png","infowindow_open":"closed"}],"destination_markers":[{"travel_mode":"DRIVING","point":[]}],"text_directions":"overlay","layers":"","places_search":"","places_api":{"show_places":"yes","search_radius":"15000","search_places":["amusement_park","aquarium","art_gallery","casino","embassy","movie_theater","stadium","university"]},"map_markers_icon":"none"},"2878":{"id":"2878","ajax_url":"https:\/\/thesofiahotel.com\/wp-admin\/admin-ajax.php","map_params":{"title":"Coffee","width":"100","height":"600","latitude":"32.7159428","longitude":"-117.1644647","zoom":"15","default_marker":"https:\/\/thesofiahotel.com\/wp-content\/plugins\/google-maps-builder-pro\/assets\/img\/spotlight-poi.png"},"map_controls":{"zoom_control":"DEFAULT","pan_control":"true","map_type_control":"horizontal_bar","draggable":"true","double_click_zoom":"true","wheel_zoom":"true","street_view":"true"},"map_theme":{"map_type":"RoadMap","map_theme_json":"[\r\n    {\r\n        \"featureType\": \"administrative\",\r\n        \"elementType\": \"labels.text.fill\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#444444\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"landscape\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#f2f2f2\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"landscape.natural\",\r\n        \"elementType\": \"geometry\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"on\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"poi\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"off\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"road\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"saturation\": -100\r\n            },\r\n            {\r\n                \"lightness\": 45\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"road.highway\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"simplified\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"road.arterial\",\r\n        \"elementType\": \"labels.icon\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"off\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"transit\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"off\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"water\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#c6abb5\"\r\n            },\r\n            {\r\n                \"visibility\": \"on\"\r\n            }\r\n        ]\r\n    }\r\n]\r\n"},"marker_centered":"yes","marker_cluster":"","plugin_url":"https:\/\/thesofiahotel.com\/wp-content\/plugins\/google-maps-builder-pro\/","site_name":"The Sofia Hotel","site_url":"https:\/\/thesofiahotel.com","mashup_markers":[{"post_type":"post","taxonomy":"none","latitude":"_edit_lock","longitude":"_edit_lock","featured_img":"yes","marker_img_id":0}],"map_markers":[{"title":"The Sofia Hotel","description":"The Sofia Hotel is a proud member of a National Trust Historic Hotels of America. Find out more on our History page.","lat":"32.7159428","lng":"-117.1644647","marker_img_id":128,"marker_img":"https:\/\/thesofiahotel.com\/wp-content\/uploads\/2017\/09\/MAP-e1504435739422.png","infowindow_open":"closed"}],"destination_markers":[{"travel_mode":"DRIVING","point":[]}],"text_directions":"overlay","layers":"","places_search":"","places_api":{"show_places":"yes","search_radius":"8000","search_places":["cafe"]},"map_markers_icon":"none"},"i18n":{"get_directions":"Get Directions","visit_website":"Visit Website"},"infobubble_args":{"shadowStyle":0,"padding":12,"backgroundColor":"rgb(255, 255, 255)","borderRadius":3,"arrowSize":15,"minHeight":20,"maxHeight":450,"minWidth":200,"maxWidth":350,"borderWidth":0,"disableAutoPan":true,"disableAnimation":true,"backgroundClassName":"gmb-infobubble","closeSrc":"https:\/\/www.google.com\/intl\/en_us\/mapfiles\/close.gif"}};
</script>
*/ ?>

<?php get_footer(); ?>
