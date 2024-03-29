<?php
/**
 * Template Name: Gallery
 */
get_header(); ?>

    <?php get_template_part('inc/hero'); ?>

    <?php
        $gallery = get_field('images');
        if ($gallery && is_array($gallery) && count($gallery) > 0) :
    ?>
    <section class="section-tabs gallery-type tablet-pad-0">
        <div class="container">
            <div class="tabs-box">
                <div class="tabs-content">
                    <?php
                        $tabs_arr   = [];
                        $tabs       = get_field('tabs');
                        $taxonomy   = 'media_category';

                        if ($tabs && is_array($tabs) && count($tabs) > 0) {
                            $i = 0;
                            foreach ($tabs as $tab) {
                                if ($tab['cat']->count <= 0) continue;
                                $tabs_arr[$i]['title']  = trim($tab['title']) ? $tab['title'] : $tab['cat']->name;
                                $tabs_arr[$i]['slug']   = $tab['cat']->slug;
                                $i++;
                            }
                        }

                        if (count($tabs_arr) <= 0) {
                            $cats = get_terms( array(
                                'taxonomy'      => array( $taxonomy ),
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

                            if ($cats || is_array($cats) || count($cats) > 0) {
                                $i = 0;
                                foreach ($cats as $cat) {
                                    $tabs_arr[$i]['title']  = $cat->name;
                                    $tabs_arr[$i]['slug']   = $cat->slug;
                                    $i++;
                                }
                            }
                        }

                        if ($tabs_arr || count($tabs_arr) > 0) :

                            // for overlay in images in list
                            $media_cats[] = [
                                'icon'  => '',
                                'color' => ''
                            ];
                            foreach ($tabs_arr as $cat) {
                                $icon = '';
                                if ($cat["slug"] == 'hotel') {
                                    $icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24.13 18.75" style="width: 30px;"><path class="cls-1" d="M12.06,18.75c2.93,0,8.4-.62,11.31-2.21.56-.3.77-.57.76-1.09.07-1.84-1.57-2.57-2.56-4.44a.93.93,0,0,0-.71-.47,1.83,1.83,0,0,0,.62-.35c.16-4.47-3.19-7-7.73-7.42V2.4s0-.13-.19-.18a9,9,0,0,0-1.06-.13V1.47l-.12.09a.79.79,0,0,0,.52-.34c.24-.26.79-.22.76-.7C13.66.36,13,0,12.06,0s-1.59.36-1.59.52c0,.48.52.44.76.7a.79.79,0,0,0,.52.34l-.12-.09v.62a9,9,0,0,0-1.06.13c-.2,0-.19.18-.19.18v.37c-4.54.4-7.89,2.95-7.74,7.42a2,2,0,0,0,.63.35.93.93,0,0,0-.71.47c-1,1.87-2.63,2.6-2.56,4.44,0,.52.2.79.76,1.09C3.67,18.13,9.14,18.75,12.06,18.75Z"/></svg>';
                                } elseif ($cat["slug"] == 'rooms') {
                                    $icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44.29 17.75" style="width: 53px;"><path class="cls-2" d="M35.28,7.25a7.73,7.73,0,0,1-.77-2A4,4,0,0,1,36.1,1a4.77,4.77,0,0,1,6.36.41A5.5,5.5,0,0,1,44.27,5a5.19,5.19,0,0,1-1,3.49c-.28.4-.29.4,0,.77a5.09,5.09,0,0,1-.15,6.34,5,5,0,0,1-5.16,2,4.61,4.61,0,0,1-3.38-2.71,3.86,3.86,0,0,1,0-2.7,9,9,0,0,1,.66-1.49c0-.06.12-.13,0-.19s-.19,0-.29,0a.11.11,0,0,0-.12.12.67.67,0,0,1-.31.65,1.78,1.78,0,0,1-1,.14c-.11,0-.15-.06-.09-.16a1.66,1.66,0,0,0,.13-.27c.07-.3-.06-.45-.36-.46a.63.63,0,0,0-.68.33,1.14,1.14,0,0,1-2-.15.42.42,0,0,0-.44-.25l-7.47,0-9,0-5.66,0c-.37,0-.37,0-.4.37v.14c0,.49,0,.49.43.57.15,0,.21.09.21.25,0,.59,0,1.18,0,1.77,0,.17-.05.22-.22.2-.47,0-.46,0-.47.42,0,.2.07.25.25.24.36,0,.36,0,.36.35,0,.86,0,1.71,0,2.56,0,.21-.06.29-.28.29a9.91,9.91,0,0,0-1.09,0c-.23,0-.28-.08-.27-.29s0-.56,0-.84-.05-.25-.23-.24l-1.86,0c-.16,0-.23.06-.23.21s0,.55,0,.82-.05.25-.24.25-.65,0-1,0-.23-.07-.23-.24l0-2.73c0-.19.07-.24.24-.21H3c.57.05.48.14.48-.45,0-.15,0-.22-.21-.23-.58,0-.58,0-.59-.62,0-.44,0-.89,0-1.33,0-.18,0-.24.23-.24.56,0,.56,0,.55-.59s0-.57-.59-.58l-1.44,0A1.47,1.47,0,0,1,0,8.56a1.46,1.46,0,0,1,1.59-1.5l9.54,0,5.45,0,11.67,0h1.94a.31.31,0,0,0,.33-.2,1.19,1.19,0,0,1,2.11,0,.5.5,0,0,0,.69.23c.21-.09.27-.27.13-.58s0-.28.2-.27a2.76,2.76,0,0,1,.7.11.69.69,0,0,1,.5.53C34.9,7.21,35,7.26,35.28,7.25Zm2.13,3.22a2.41,2.41,0,0,1,1.68.31,1.15,1.15,0,0,1,.48,1.62,2.35,2.35,0,0,1-1.07,1.09.56.56,0,0,1-.82-.21.63.63,0,0,1,.15-.85c.09-.08.19-.15.27-.23s.11-.3-.1-.37a.64.64,0,0,0-.43,0,1.45,1.45,0,0,0-.92.72,2.1,2.1,0,0,0,.3,2.58,3.33,3.33,0,0,0,4.45-.34,3.15,3.15,0,0,0,.78-2.9A6.44,6.44,0,0,0,41,9.26a.43.43,0,0,1,0-.62A6.92,6.92,0,0,0,42.21,6a3.24,3.24,0,0,0-.87-3.14A3.15,3.15,0,0,0,38,2.18a2.09,2.09,0,0,0-1.22,3.16,1.21,1.21,0,0,0,1,.65c.16,0,.32,0,.39-.18s-.09-.24-.18-.33l-.13-.1a.55.55,0,0,1-.19-.76.57.57,0,0,1,.74-.34,2,2,0,0,1,1.36,1.38,1.09,1.09,0,0,1-.36,1.2,1.83,1.83,0,0,1-1.66.41.45.45,0,0,0-.26,0A2.69,2.69,0,0,1,37.41,10.47Z"/></svg>';
                                } elseif ($cat["slug"] == 'restaurant') {
                                    $icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.48 15.37"><path class="cls-3" d="M2.53,2.44C6.71,4,13.1,5.84,23.64,5.84c.74,0,1-.12,1.21-.64,2.61-5.95,15.95-1.82,23-1.82,3.91,0,5.64-.8,5.64-1.79S50.75,0,48,0C40.43,0,25,1,2.89.05.36-.12.09.19,0,.58S-.07,1.45,2.53,2.44Z"/><path class="cls-1" d="M53.4,11.18c-.33-.58-1.33-1.42-4.79-1.36-7.2.12-18.3,2-25,.53-1.84-.39-2.74-.62-3.43-2-.39-.74-.72-.85-3.91-.68-2.72.15-6.55.39-10.53,1l-.11,0a.09.09,0,0,0-.08.09v0a.09.09,0,0,0,.08.09h.11c.26,0,6.77,0,9.81,0,.29,0,.62.1.62.48a.51.51,0,0,1-.55.53c-3,.12-8.74.36-9.88.44h-.1a.11.11,0,0,0-.09.1v0a.09.09,0,0,0,.09.09h.1c1.15.08,7.08.32,10.09.44.27,0,.49.14.49.45s-.29.42-.53.42h0c-3,.12-8.91.35-10,.44h-.1a.09.09,0,0,0-.09.09v0a.1.1,0,0,0,.09.09h.1c1.13.09,6.8.32,9.83.44.32,0,.6.16.6.53s-.31.48-.6.49c-3,0-9.56,0-9.83,0H5.6a.11.11,0,0,0-.08.1v.05a.1.1,0,0,0,.08.09h.11c4,.59,7.81.83,10.53,1,3.19.17,3.52.07,3.91-.67.66-1.42,1.65-1.63,3.43-2,6.83-1.45,17.83.41,25,.53,3.46.06,4.46-.78,4.79-1.37a.61.61,0,0,0,.08-.3A.67.67,0,0,0,53.4,11.18Z"/></svg>';
                                } elseif ($cat["slug"] == 'business') {
                                    $icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56.97 14.65"><path class="cls-4" d="M19.47,3.84a2.4,2.4,0,0,0-2-1.13c-1.06-.13-2.12-.3-3.18-.46L9.65,1.51A.63.63,0,0,0,8.93,2L8.79,3c3,.48,31.33,5,35,5.58,2,.3,3.84,1.1,5.82,1.44a11.83,11.83,0,0,1,2.37.74c.47.19,1.26,0,1.15.94,0,.07.28.25.28.25l3.33,1.43a.31.31,0,0,1-.12.6l-3.57,0s-.21,0-.24.06c-.42.88-1.23.58-1.89.57-2.41,0-4.83,0-7.22-.27S8.47,8.81,7,8.54c-.76-.13-.75-.16-.63-1l.12-.79L.38,5.7h0A1.4,1.4,0,0,1,.9,3.45h0l6,.94L7.56.52A.62.62,0,0,1,8.28,0L21.21,2.08A1,1,0,0,1,22,3.24C21.75,4.6,19.47,3.84,19.47,3.84Z"/></svg>';
                                } elseif ($cat["slug"] == 'area') {
                                    $icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.14 27.37" style="width: 32px;"><path class="cls-5" d="M8.07,5.14a42.1,42.1,0,0,1,7,.55c1.17.24,1.31.72.7,1.54-1.48,2-5.09,6.78-6.34,8.53a4.37,4.37,0,0,0-.81,2.63,21.16,21.16,0,0,0,0,3.69A3.77,3.77,0,0,0,9,23.78c1.22.06,4.33.56,4.31,1.79s-2.77,1.8-5.26,1.8-5.24-.61-5.25-1.8,3.08-1.73,4.3-1.79a3.64,3.64,0,0,0,.41-1.7,21.53,21.53,0,0,0,0-3.69,4.38,4.38,0,0,0-.82-2.63C5.44,14,1.83,9.2.36,7.23c-.62-.82-.47-1.3.69-1.54A42.1,42.1,0,0,1,8.07,5.14Z"/><polyline class="cls-5" points="6.44 10.12 13.99 0 14.32 0.3 9.09 7.84"/></svg>';
                                }
                                $media_cats[$cat["slug"]]['icon'] = $icon;
                            }
                    ?>
                        <div class="tabs-nav">
                            <ul class="tab-list" role="tablist">
                                <li>
                                    <a href="#" title="<?php esc_attr_e('View all', 'the-sofia-hotel'); ?>" role="tab" aria-selected="true" aria-controls="popup-gallery" class="view-all" data-filter="*"><?php _e('View all', 'the-sofia-hotel'); ?></a>
                                </li>
                                <?php
                                    $colors = ['light-blue', 'gold', 'purple', 'grey', 'dark'];
                                    foreach ($tabs_arr as $tab) {
                                        echo "<li><a href='#{$tab["slug"]}' title='".esc_attr($tab["title"])."' role='tab' aria-selected='false' aria-controls='popup-gallery' class='color-".current($colors)." {$tab["slug"]}' data-filter='.{$tab["slug"]}' aria-label='Filter the photo gallery by {$tab["title"]}'>{$tab["title"]}</a></li>";
                                        $media_cats[$tab['slug']]['color'] = current($colors);
                                        next($colors);
                                    }
                                ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <div class="tab-section">
                        <div class="tab-inner-box">
                            <ul class="grid grid-isotope popup-gallery" id="popup-gallery">
                                <?php
                                    $n = 1;
                                    foreach ($gallery as $image) :
                                        $image_cats = get_the_terms( $image['id'], $taxonomy );
                                        $cat_slug   = is_array($image_cats) ? $image_cats[0]->slug : '';
                                        $cat_title  = is_array($image_cats) ? $image_cats[0]->name : '';
                                        if ($n % 7 == 4) {
                                            $image_class = ' width-66';
                                        } elseif ($n % 7 == 6 || $n % 7 == 0) {
                                            $image_class = ' width-50';
                                        } else {
                                            $image_class = '';
                                        }
                                    ?>
                                    <li class="grid-item <?php echo $cat_slug . $image_class; ?>">
                                        <a href="<?php echo esc_url($image['url']); ?>" class="img-shadow">
                                            <?php echo wp_get_attachment_image($image['id'], 'large', false, array('alt' => esc_attr($image['alt']))); ?>
                                            <span class="gallery-overlay <?php echo $media_cats[$cat_slug]['color']; ?>">
                                                <?php if ($media_cats[$cat_slug]['icon'] || $cat_title) { ?>
                                                    <span class="gallery-cat">
                                                        <?php echo $media_cats[$cat_slug]['icon'] . '<br>' . $cat_title; ?>
                                                    </span>
                                                <?php } ?>
                                            </span>
                                        </a>
                                    </li>
                                <?php $n++;
                                endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <?php get_template_part('inc/flexible-content'); ?>

<?php get_footer(); ?>
