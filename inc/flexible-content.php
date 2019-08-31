<?php
    $content = get_field('content');

    if ($content && is_array($content) && count($content) > 0) {
        foreach ($content as $section) {

            /*
            ********* BANNER *********
            */
            if ($section['acf_fc_layout'] == 'banner') {

                if (is_array($section['array']) && count($section['array']) > 0) {

                    if (count($section['array']) === 1) {

                        $slide      = $section['array'][0];
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

                            echo "</div>
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

                        foreach ($section['array'] as $slide) {
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
                                echo "</div>
                                        </div>
                                    </div>
                                </div>";
                            }
                        }

                                    echo "</div>
                                         <div class='swiper-pagination'></div>
                                    </div>
                                </div>
                            </div>
                        </section>";

                    }

                }

            }

            /*
            ********* TEXT *********
            */
            elseif ($section['acf_fc_layout'] == 'text') {
                $title      = trim($section['details']['title']);
                $content    = trim($section['details']['content']);

                if ($title || $content) {

                    if ($section['settings']['important']) {
                        $classes = 'section-important-information color-light-blue';
                    } else {
                        $classes = 'section-interesting-info';
                        $classes .= $section['settings']['color'] ? ' color-'.$section['settings']['color'] : '';
                    }

                    echo "<section class='section {$classes}'>
                            <div class='container'>";
                    if ($title) echo "<h2 class='section-title'>{$title}</h2>";
                    if ($content) echo "<div class='content'>{$content}</div>";
                    echo "</div>
                    </section>";
                }

            }

            /*
            ********* SLIDER *********
            */
            elseif ($section['acf_fc_layout'] == 'slider') {

                if ($section['images'] && is_array($section['images']) && count($section['images']) > 0) {
                    $small_class = !$section['high_slides'] ? ' small' : '';

                    echo "<section class='section-slider'>
                            <div class='container'>
                                <div class='single-slider{$small_class}'>
                                    <div class='swiper-container'>
                                        <div class='swiper-wrapper'>";

                                        foreach ($section['images'] as $img) {
                                            echo "<div class='swiper-slide'>";
                                                if ($section['show_captions']) {
                                                    echo "<div class='slide-name-box'>
                                                            <h3 class='slide-title'>{$img['caption']}</h3>
                                                        </div>";
                                                }
                                                $img_class = $img['height'] > $img['width'] ? 'higher' : '';
                                                if (!$section['high_slides']) $img_class .= ' no-lazy-load';
                                                echo wp_get_attachment_image($img['id'], 'large', false, array( 'alt' => esc_attr($img['alt']), 'class' => $img_class ));
                                            echo "</div>";
                                        }

                                echo "</div>
                                    <div class='swiper-button-prev'><span class='tsh-icon-arrow'></span></div>
                                    <div class='swiper-button-next'><span class='tsh-icon-arrow'></span></div>
                                </div>
                            </div>
                        </div>
                    </section>";
                }

            }

            /*
            ********* TWO COLUMNS *********
            */
            elseif ($section['acf_fc_layout'] == '2_cols') {

                if ( (is_array($section['content']) && count($section['content']) > 0) || (is_array($section['images']) && count($section['images']) > 0) ) {
                    $classes = '';
                    $settings = $section['settings'];
                    $classes .= $settings['reduced'] ? ' small' : '';
                    $classes .= $settings['high'] ? ' high-block vertical-middle' : '';
                    $classes .= $settings['patterns'] ? ' abstract-bg' : '';
                    $classes .= trim($settings['bg']) ? ' '.esc_attr($settings['bg']).'-bg' : '';
                    if (trim($settings['bg']) && $settings['bg'] === 'purple-translucency') {
                        $classes .= ' inverse';
                    } elseif (trim($settings['color'])) {
                        $classes .= ' color-'.esc_attr($settings['color']);
                    } else {
                        $classes .= '';
                    }

                    echo "<section class='section section-two-columns{$classes}'>
                            <div class='container'>
                                <div class='two-column-box'>";
                                    if (is_array($section['content'])) {
                                        $col_text = "<div class='column text'>
                                                        <div class='inner-box'>";
                                        foreach ($section['content'] as $block) {
                                            if (trim($block['title'])) {
                                                $col_text .= "<div class='section-title-box'>
                                                                <h2 class='section-title'>{$block['title']}</h2>
                                                            </div>";
                                            }
                                            if (trim($block['text'])) {
                                                $col_text .= "<div class='content-box'>
                                                                <div class='content'>{$block['text']}</div>
                                                            </div>";
                                            }
                                            if (is_array($block['buttons']) && $block['buttons']['show_btn'] && is_array($block['buttons']['array']) && count($block['buttons']['array']) > 0) {
                                                $col_text .= "<ul class='link-list'>";
                                                    foreach ($block['buttons']['array'] as $btn) {
                                                        if (trim($btn['url'])) {
                                                            $label          = trim($btn['label']) ? $btn['label'] : __('Read More', 'the-sofia-hotel');
                                                            $target         = $btn['target'] ? 'target="_blank" rel="nofollow noopener"' : 'target="_self"';
                                                            $color_class    = $btn['color'] == 'grey' ? ' grey' : '';
                                                            $col_text .= "<li><a href='" . esc_url($btn['url']) . "' title='" . strip_tags(esc_attr($label)) . "' class='btn{$color_class}' {$target}>{$label}</a></li>";
                                                        }
                                                    }
                                                $col_text .= "</ul>";
                                            }
                                        }
                                        $col_text .= "</div>
                                                    </div>";
                                    }

                                    if (is_array($section['images']) && count($section['images']) > 0) {
                                        $col_img = "<div class='column image'>
                                                        <div class='inner-box'>";
                                            if (count($section['images']) === 1) {
                                                $img = $section['images'][0];
                                                $img_class = $img['height'] > $img['width'] ? 'higher' : '';
                                                $col_img .= "<div class='img-wrap'>".
                                                                wp_get_attachment_image($img['id'], 'full', false, array( 'alt' => esc_attr($img['alt']), 'class' => $img_class ))
                                                            ."</div>";
                                            } else {
                                                $col_img .= "<div class='inner-slider'>
                                                                <div class='swiper-container'>
                                                                    <div class='swiper-wrapper'>";
                                                    foreach ($section['images'] as $img) {
                                                        $img_class = $img['height'] > $img['width'] ? 'higher' : '';
                                                        $col_img .= "<div class='swiper-slide'>".
                                                                        wp_get_attachment_image($img['id'], 'full', false, array( 'alt' => esc_attr($img['alt']), 'class' => $img_class ))
                                                                    ."</div>";
                                                    }
                                                $col_img .=         "</div>
                                                                    <div class='swiper-button-prev'><span class='tsh-icon-arrow'></span></div>
                                                                    <div class='swiper-button-next'><span class='tsh-icon-arrow'></span></div>
                                                                </div>
                                                            </div>";
                                            }
                                        $col_img .= "</div>
                                                    </div>";
                                    }

                                    echo ($section['settings']['position'] == 'right') ? $col_img . $col_text : $col_text . $col_img;
                            echo "</div>
                            </div>
                        </section>";
                }

            }

            /*
            ********* LINK BOXES *********
            */
            elseif ($section['acf_fc_layout'] == 'boxes') {

                if ( trim($section['title']) || (is_array($section['array']) && count($section['array']) > 0) ) { 

                    if (is_array($section['array']) && count($section['array']) > 0) {
                        $classes = '';
                        $classes .= trim($section['color']) ? ' color-'.esc_attr($section['color']) : '';

                        echo "<section class='section-more-ways{$classes}'>
                                <div class='container'>";
                                    echo trim($section['title']) ? "<h2 class='section-title'>{$section['title']}</h2>" : '';

                                    echo "<ul class='more-ways-list'>";

                                    foreach ($section['array'] as $box) {
                                        $title      = trim($box['text']['title']) ? $box['text']['title'] : '';
                                        $subtitle   = trim($box['text']['subtitle']) ? $box['text']['subtitle'] : '';

                                        echo "<li>";
                                            if ($box['url']) {
                                                $target = $box['target'] ? 'target="_blank" rel="nofollow noopener"' : 'target="_self"';
                                                echo "<a href='".esc_url($box['url'])."' title='".strip_tags(esc_attr($title))."' {$target}>";
                                            }
                                                echo "<span class='more-way-box'>
                                                        <span class='centered-img'>";
                                                        if ($box['img']) {
                                                            $img_class = $box['img']['height'] > $box['img']['width'] ? 'higher' : '';
                                                            echo wp_get_attachment_image($box['img']['id'], 'medium_large', false, array('alt' => esc_attr($box['img']['alt']), 'class' => $img_class));
                                                        }

                                                    echo "</span>";

                                                    if ($title || $subtitle) {
                                                        echo "<span class='inner-box'>
                                                                <span class='inner-table'>
                                                                    <span class='inner-cell'>";
                                                                    echo "<span class='more-way-subtitle'>{$subtitle}</span>";
                                                                    if ($title) echo "<span class='more-way-title'>{$title}</span>";
                                                                echo "</span>
                                                                </span>
                                                            </span>";
                                                    }
                                                echo "</span>";
                                            if ($box['url']) {
                                                echo "</a>";
                                            }
                                        echo "</li>";
                                    }
                            echo    "</ul>
                                </div>
                            </section>";
                    }

                }

            }

            /*
            ********* TEXT BOXES *********
            */
            elseif ($section['acf_fc_layout'] == 'text_boxes') {

                if ($section['array'] && is_array($section['array']) && count($section['array']) > 0) {
                    $list_class = is_page(129) ? ' press' : '';

                    echo "<section class='section-services'>
                            <div class='container'>
                                <ul class='service-list{$list_class}'>";

                    foreach ($section['array'] as $box) {
                        $desc = trim($box['desc']);
                        $notes = ($box['notes'] && is_array($box['notes']) && count($box['notes']) > 0) ? $box['notes'] : [];
                        $btn = (is_array($box['button']) && $box['button']['show_btn'] && trim($box['button']['url'])) ? $box['button'] : false;
                        if ($box['show_logo'] && $box['logo']) {
                            $title = "<span class='service-logo-box'>" . wp_get_attachment_image($box['logo']['id'], 'medium', false, array('alt' => esc_attr($box['logo']['alt']) )) . "</span>";
                        } elseif (trim($box['title'])) {
                            $title = "<h3 class='service-title'>{$box['title']}</h3>";
                        } else {
                            $title = '';
                        }

                        if ($title || $desc || $notes || $btn) {

                            echo "<li>
                                    <div class='service-box'>";
                            
                                        if ($title) {
                                            echo "<div class='title-box'>{$title}</div>";
                                        }
                                        if ($desc) {
                                            echo "<div class='service-desc'>
                                                    <div class='content'>{$desc}</div>
                                                </div>
                                                <a href='#' class='read-more'>".__('Read More','the-sofia-hotel')."</a>";
                                        }
                                        if ($notes && trim($notes[0]['text'])){
                                            echo "<ul class='price-list'>";
                                            foreach ($notes as $line) {
                                                if (trim($line['text'])) {
                                                    echo "<li>
                                                            <div class='price-box'>{$line['text']}</div>
                                                        </li>";
                                                }
                                            }
                                            echo "</ul>";
                                        }
                                        if ($btn) {
                                            $label  = trim($btn['label']) ? $btn['label'] : __('Read More', 'the-sofia-hotel');
                                            $target = $btn['target'] ? 'target="_blank" rel="nofollow noopener"' : 'target="_self"';
                                            echo "<a href='" . esc_url($btn['url']) . "' title='" . strip_tags(esc_attr($label)) . "' class='btn' {$target}>{$label}</a>";
                                        }
                            
                            echo    "</div>
                                </li>";

                        }
                    }

                    echo        "</ul>
                                </div>
                            </section>";

                }

            }

            /*
            ********* BLOG STYLE *********
            */
            elseif ($section['acf_fc_layout'] == 'blog') {
                
                if ( $section['array'] && is_array($section['array']) && count($section['array']) > 0 ) {
                    
                    echo "<section class='section-blog color-gold'>
                            <div class='container'>
                                <ul class='blog-list'>";
                                    
                                    foreach ($section['array'] as $row) {
                                        if (is_array($row['content'])) {
                                            $title      = trim($row['content']['title']);
                                            $text       = trim($row['content']['text']);
                                            if ($row['content']['buttons'] && is_array($row['content']['buttons']) && $row['content']['buttons']['show_btn'] && is_array($row['content']['buttons']['array']) && count($row['content']['buttons']['array']) > 0) {
                                                $buttons = $row['content']['buttons']['array'];
                                            } else $buttons = false;
                                        } else {
                                            $title = $text = $buttons = false;
                                        }
                                        $image = $row['image'];

                                        if ( $image || ($title || $text || $buttons) ) {
                                            $url = ($buttons && $buttons[0]) ? $buttons[0]['url'] : false;

                                            echo "<li>
                                                    <div class='two-column-box'>";
                                                        if ($image) {
                                                            $img_class = $image['height'] > $image['width'] ? 'higher' : '';
                                                            echo "<div class='column image'>";
                                                                echo $url ? "<a href='".esc_url($url)."' title='".strip_tags(esc_attr($title))."'>" : '';
                                                                    echo "<div class='inner-box'>
                                                                            <div class='img-wrap '>".
                                                                                wp_get_attachment_image($image['id'], 'large', false, array( 'alt' => esc_attr($image['alt']), 'class' => $img_class ))
                                                                            ."</div>
                                                                        </div>";
                                                                echo $url ? "</a>" : '';
                                                            echo "</div>";
                                                        }

                                                        if ( $title || $text || $buttons ) {

                                                            echo "<div class='column text'>
                                                                    <div class='inner-box'>";

                                                                if ($title) {
                                                                    echo "<div class='section-title-box'>
                                                                            <h2 class='section-title'>{$title}</h2>
                                                                        </div>";
                                                                }

                                                                if ($text) {
                                                                    echo "<div class='content-box'>
                                                                            <div class='content'>{$text}</div>
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

                                                            echo    "</div>
                                                                </div>";

                                                        }

                                            echo    "</div>
                                                </li>";
                                            
                                        }
                                    }
                    
                    echo        "</ul>
                            </div>
                        </section>";
                    
                }

            }
        }
    }
