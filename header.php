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

                <a href="#" title="<?php esc_attr_e('Navigation Menu', 'the-sofia-hotel') ?>" class="menu-toggle">
                    <span></span>
                </a>

                <div class="weather-box">65◦C<span class="icon">&#x26C5;</span></div>

                <a href="#" class="btn btn-sm btn-find-rooms" title="<?php _e('Find Rooms', 'the-sofia-hotel'); ?>"><?php _e('Find Rooms', 'the-sofia-hotel'); ?></a>
            </div>
            <div class="burger-box" id="burger-box">
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
                                                        <p>Toll Free: <?php echo $contacts['toll_free']; ?></p>
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
                                                        echo "<li><a href='".esc_url($social['facebook'])."' title='Facebook' target='_blank' rel='nofollow noopener'><i class='fab fa-facebook-square'></i></a></li>";

                                                    if ($social['twitter'])
                                                        echo "<li><a href='".esc_url($social['twitter'])."' title='Twitter' target='_blank' rel='nofollow noopener'><i class='fab fa-twitter'></i></a></li>";

                                                    if ($social['instagram'])
                                                        echo "<li><a href='".esc_url($social['instagram'])."' title='Instagram' target='_blank' rel='nofollow noopener'><i class='fab fa-instagram'></i></a></li>";

                                                    if ($social['yelp'])
                                                        echo "<li><a href='".esc_url($social['yelp'])."' title='Yelp' target='_blank' rel='nofollow noopener'><i class='fab fa-yelp'></i></a></li>";

                                                    if ($social['tripadvisor'])
                                                        echo "<li><a href='".esc_url($social['tripadvisor'])."' title='TripAdvisor' target='_blank' rel='nofollow noopener'><i class='fab fa-tripadvisor'></i></a></li>";
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

                <a href="#" title="<?php esc_attr_e('Navigation Menu', 'the-sofia-hotel') ?>" class="menu-toggle">
                    <span></span>
                </a>

                <div class="weather-box">65◦C<span class="icon">&#x26C5;</span></div>

                <a href="#" class="btn btn-sm btn-find-rooms" title="<?php _e('Find Rooms', 'the-sofia-hotel'); ?>"><?php _e('Find Rooms', 'the-sofia-hotel'); ?></a>
            </div>
        </header>

        <div id="main-content">
