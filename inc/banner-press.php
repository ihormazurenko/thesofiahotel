<?php
global $page_id;
$banner = get_field('banner', $page_id);

if (is_array($banner) && count($banner) > 0) {

    if (count($banner) === 1) {

        $slide      = $banner[0];
        $title      = trim($slide['details']['title']);
        $content    = trim($slide['details']['content']);
        $image      = $slide['bg']['image'];
        $transparent_class = $slide['bg']['transparent'] ? ' transparent-bg' : '';
        if ($slide['buttons'] && is_array($slide['buttons']) && $slide['buttons']['show_btn'] && is_array($slide['buttons']['array']) && count($slide['buttons']['array']) > 0) {
            $buttons = $slide['buttons']['array'];
        } else $buttons = false;

        if ($title || $content || $image || $buttons) {
            $bg     = ($image && !$transparent_class) ? 'background-image: url(' . esc_url($image['url']) . ');' : '';
            $color  = $slide['bg']['color'] ? ' color-' . $slide['bg']['color'] : '';
            $section_id  = $title ? " id='".element_id($title)."'" : '';

            echo "<section class='section-banner{$transparent_class}{$color}' style='{$bg}'{$section_id}>
                    <div class='container'>
                        <div class='vertical-align-box'>
                            <div class='inner-box'>";

            if ($title) {
                echo "<div class='banner-title-box'>
                        <h2 class='banner-title'>{$title}</h2>
                    </div>";
            }

            if ($content) {
                echo "<div class='banner-desc-box'>
                        <div class='content'>{$content}</div>
                    </div>";
            }

            if ($buttons) {
                echo "<ul class='banner-link'>";
                foreach ($buttons as $btn) {
                    if (trim($btn['url'])) {
                        $label          = trim($btn['label']) ? $btn['label'] : __('Read More', 'the-sofia-hotel');
                        $target         = $btn['target'] ? 'target="_blank" rel="nofollow noopener"' : 'target="_self"';
                        $color_class    = $btn['color'] == 'grey' ? ' grey' : '';
                        echo "<li><a href='" . esc_url($btn['url']) . "' title='" . strip_tags(esc_attr($label)) . "' class='btn{$color_class}' {$target}>{$label}</a></li>";
                    }
                }
                echo "</ul>";
            }

            echo            "</div>
                        </div>
                    </div>
                </section>";
        }

    } else {

        echo "<section class='section-banner banner-slider'>
                <div class='container'>
                    <div class='banner-slider-box'>
                        <div class='swiper-container'>
                            <div class='swiper-wrapper'>";

        foreach ($banner as $slide) {
            $title      = trim($slide['details']['title']);
            $content    = trim($slide['details']['content']);
            $image      = $slide['bg']['image'];
            $transparent_class = $slide['bg']['transparent'] ? ' transparent-bg' : '';
            if ($slide['buttons'] && is_array($slide['buttons']) && $slide['buttons']['show_btn'] && is_array($slide['buttons']['array']) && count($slide['buttons']['array']) > 0) {
                $buttons = $slide['buttons']['array'];
            } else $buttons = false;

            if ($title || $content || $image || $buttons) {
                $color = $slide['bg']['color'] ? ' color-' . $slide['bg']['color'] : '';

                echo "<div class='swiper-slide{$transparent_class}{$color}'>";
                if ($image) {
                    $img_class = $image['height'] > $image['width'] ? 'higher' : '';
                    echo wp_get_attachment_image($image['id'], 'full', false, array( 'alt' => strip_tags(esc_attr($title)), 'class' => $img_class ));
                }
                echo "<div class='banner-slider-content-box'>
                        <div class='vertical-align-box'>
                            <div class='inner-box'>";
                if ($title) {
                    echo "<div class='banner-title-box'>
                            <h2 class='banner-title'>{$title}</h2>
                        </div>";
                }

                if ($content) {
                    echo "<div class='banner-desc-box'>
                            <div class='content'>{$content}</div>
                        </div>";
                }

                if ($buttons) {
                    echo "<ul class='banner-link'>";
                    foreach ($buttons as $btn) {
                        if (trim($btn['url'])) {
                            $label          = trim($btn['label']) ? $btn['label'] : __('Read More', 'the-sofia-hotel');
                            $target         = $btn['target'] ? 'target="_blank" rel="nofollow noopener"' : 'target="_self"';
                            $color_class    = $btn['color'] == 'grey' ? ' grey' : '';
                            echo "<li><a href='" . esc_url($btn['url']) . "' title='" . strip_tags(esc_attr($label)) . "' class='btn{$color_class}' {$target}>{$label}</a></li>";
                        }
                    }
                    echo "</ul>";
                }
                echo            "</div>
                            </div>
                        </div>
                    </div>";
            }
        }

        echo            "</div>
                         <div class='swiper-pagination'></div>
                    </div>
                </div>
            </div>
        </section>";

    }

}