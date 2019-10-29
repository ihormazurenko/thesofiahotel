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
                            <a href="#all" data-types="tsh, coffee, dining, nightlife, shops, sites" title="<?php esc_attr_e('View all', 'the-sofia-hotel'); ?>" class="view-all" data-filter="*" aria-label="Show all locations on the map"><?php _e('View all', 'the-sofia-hotel'); ?></a>
                        </li>
                        <?php
                        $colors = ['light-blue', 'gold', 'purple', 'grey', 'dark'];
                        foreach ($cats as $cat) {
                            echo "<li><a href='#{$cat->slug}' data-types=\"tsh, {$cat->slug}\" title='".esc_attr($cat->name)."' class='color-".current($colors)." {$icon_rel[$cat->slug]}' data-filter='.{$cat->slug}' aria-label='Filter locations on the map by {$cat->name}'>{$cat->name}</a></li>";
                            next($colors);
                        }
                        ?>
                    </ul>
                </div>
            <?php } ?>

            <div class="map-wrap">
                <div id="map" role="region" aria-label="map"></div>
            </div>

            <ul id="map-markers" class="sr-only" role="list"></ul>

            <script>
                tsh_marker_base_url = "<?php echo get_bloginfo('template_url') . '/img/'; ?>";
                tsh_arr = '<?php echo json_encode($places_data); ?>';
                tsh_base_lat = <?php echo $base_lat; ?>;
                tsh_base_lng = <?php echo $base_lng; ?>;
            </script>
        </div>
    </section>

    <?php get_template_part('inc/flexible-content'); ?>

<?php get_footer(); ?>
