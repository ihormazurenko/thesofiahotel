<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="wrapper">
        <a class="btn btn-jump-to-content smooth-scroll" href="#main-content" title="<?php esc_attr_e('Skip Navigation', 'the-sofia-hotel'); ?>"><?php _e('Skip Navigation', 'the-sofia-hotel'); ?></a>

        <header class="header" id="header-main">
            <div class="container">
                <div class="logo">
                    <a href="<?php echo home_url(); ?>" title="<?php echo get_bloginfo('name').' | '.__('Home', 'the-sofia-hotel'); ?>">
                        <img src="<?php echo get_bloginfo('template_url'); ?>/img/logo.svg" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
                    </a>
                </div>
                
                <div class="right-content">
                    <div class="inner">
                        <?php
                            $header_btn = get_field('header_btn', 'option');

                            if ($header_btn && is_array($header_btn) && $header_btn['show']) {
                                if ( trim($header_btn['url']) ) {
                                    $label  = trim($header_btn['label']) ? $header_btn['label'] : __('Find Rooms', 'the-sofia-hotel');
                                    $target = $header_btn['target'] ? 'target="_blank" rel="nofollow noopener"' : 'target="_self"';
                                    echo "<a href='".esc_url($header_btn['url'])."' class='btn btn-sm btn-find-rooms' title='".esc_attr($label)."' {$target}>{$label}</a>";
                                }
                            }
                        ?>

                        <div class="weather-box"><?php echo do_shortcode('[shortcode-weather-atlas city_selector=2338455 background_color="transparent" daily="0" sunrise_sunset="0" layout="horizontal" font_size="12px" current="0"]') ?></div>

                        <a href="#burger-menu" title="<?php esc_attr_e('Navigation menu', 'the-sofia-hotel') ?>" class="menu-toggle open-tsh-popup" data-open="">
                            <span></span>
                            <i class="sr-only"><?php _e('Menu', 'the-sofia-hotel'); ?></i>
                        </a>

                        
                    </div>
                </div>
                
            </div>
            <div class="burger-box" id="burger-menu" role="dialog" aria-modal="true" aria-label="menu">
                <div class="hero">
                    <div class="hero-img" style="background-image: url(<?php echo get_bloginfo('template_url'); ?>/img/burger-bg.jpg);"></div>
                    <div class="burger-inner-wrap">
                        <div class="burger-inner-box">
                            <div class="container">
                                <div class="right-box">
                                    <?php if (has_nav_menu('main-menu')) { ?>
                                        <nav class="burger-menu-box">
                                            <ul class="burger-menu">
                                                <?php
                                                wp_nav_menu(array(
                                                    'theme_location'  => 'main-menu',
                                                    'menu'            => 'Main Menu',
                                                    'container'       => false,
                                                    'items_wrap'      => '%3$s',
                                                    'depth'           => 1
                                                ));
                                                ?>
                                            </ul>
                                        </nav>
                                    <?php } ?>
                                </div>

                                <div class="left-box">
                                    <?php if (has_nav_menu('secondary-menu')) { ?>
                                        <nav class="burger-menu-box small">
                                            <ul class="burger-menu">
                                                <?php
                                                wp_nav_menu(array(
                                                    'theme_location'  => 'secondary-menu',
                                                    'menu'            => 'Secondary Menu',
                                                    'container'       => false,
                                                    'items_wrap'      => '%3$s',
                                                    'depth'           => 1
                                                ));
                                                ?>
                                            </ul>
                                        </nav>
                                    <?php } ?>

                                    <?php
                                        $contacts   = get_field('contacts', 'option');
                                        $social     = get_field('social', 'option');
                                    ?>
                                    <?php if ($contacts && ($contacts['toll_free'] || $contacts['address'] || $contacts['tel'])) : ?>
                                        <div class="contact-box">
                                            <ul class="contact-list">
                                                <?php if (trim($contacts['toll_free'])) { ?>
                                                    <li>
                                                        <p><?php _e('Toll Free:', 'the-sofia-hotel'); ?> <?php echo $contacts['toll_free']; ?></p>
                                                    </li>
                                                <?php }
                                                if (trim($contacts['tel'])) { ?>
                                                    <li>
                                                        <p><?php echo $contacts['tel']; ?></p>
                                                    </li>
                                                <?php }
                                                if (trim($contacts['address'])) { ?>
                                                    <li>
                                                        <p><?php echo strip_tags($contacts['address']); ?></p>
                                                    </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ($social && ($social['facebook'] || $social['twitter'] || $social['instagram'] || $social['yelp'] || $social['tripadvisor'])) : ?>
                                        <div class="social-box">
                                            <ul class="social-list">
                                                <?php
                                                    if ($social['facebook'])
                                                        echo "<li><a href='".esc_url($social['facebook'])."' title='Facebook' target='_blank' rel='nofollow noopener'><i class='fab fa-facebook-square'></i><span class='sr-only'>Visit our Facebook</span></a></li>";

                                                    if ($social['twitter'])
                                                        echo "<li><a href='".esc_url($social['twitter'])."' title='Twitter' target='_blank' rel='nofollow noopener'><i class='fab fa-twitter'></i><span class='sr-only'>Visit our Twitter</span></a></li>";

                                                    if ($social['instagram'])
                                                        echo "<li><a href='".esc_url($social['instagram'])."' title='Instagram' target='_blank' rel='nofollow noopener'><i class='fab fa-instagram'></i><span class='sr-only'>Visit our Instagram</span></a></li>";

                                                    if ($social['yelp'])
                                                        echo "<li><a href='".esc_url($social['yelp'])."' title='Yelp' target='_blank' rel='nofollow noopener'><i class='fab fa-yelp'></i><span class='sr-only'>Visit our Yelp</span></a></li>";

                                                    if ($social['tripadvisor'])
                                                        echo "<li><a href='".esc_url($social['tripadvisor'])."' title='Trip Advisor' target='_blank' rel='nofollow noopener'><i class='fab fa-tripadvisor'></i><span class='sr-only'>Visit our Trip Advisor</span></a></li>";
                                                ?>
                                            </ul>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <header class="header" id="header-scrolling">
            <div class="container">
                <div class="logo">
                    <a href="<?php echo home_url(); ?>" title="<?php echo get_bloginfo('name').' | '.__('Home', 'the-sofia-hotel'); ?>">
                        <img src="<?php echo get_bloginfo('template_url'); ?>/img/logo_v2.svg" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
                    </a>
                </div>
                
                <div class="right-content">
                    <div class="inner">
                        

                        

                        <?php
                            if ($header_btn && is_array($header_btn) && $header_btn['show']) {
                                if ( trim($header_btn['url']) ) {
                                    $label  = trim($header_btn['label']) ? $header_btn['label'] : __('Find Rooms', 'the-sofia-hotel');
                                    $target = $header_btn['target'] ? 'target="_blank" rel="nofollow noopener"' : 'target="_self"';
                                    echo "<a href='".esc_url($header_btn['url'])."' class='btn btn-sm btn-find-rooms' title='".esc_attr($label)."' {$target}>{$label}</a>";
                                }
                            }
                        ?>

                        <div class="weather-box"><?php echo do_shortcode('[shortcode-weather-atlas city_selector=2338455 background_color="transparent" daily="0" text_color="#939598" sunrise_sunset="0" layout="horizontal" font_size="12px" current="0"]') ?></div>

                        <a href="#burger-menu" title="<?php esc_attr_e('Navigation Menu', 'the-sofia-hotel') ?>" class="menu-toggle open-tsh-popup">
                            <span></span>
                            <i class="sr-only"><?php _e('Menu', 'the-sofia-hotel'); ?></i>
                        </a>

                        
                    </div>
                </div>
                
            </div>
        </header>

        <div id="main-content">
