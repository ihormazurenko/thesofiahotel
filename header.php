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
                                <div class="left-box">
                                    <div class="burger-menu-box small">
                                        <ul class="burger-menu">
                                            <li><a href="#" title="Contact">Contact</a></li>
                                            <li><a href="#" title="Blog">Blog</a></li>
                                            <li><a href="#" title="Press">Press</a></li>
                                            <li><a href="#" title="History">History</a></li>
                                        </ul>
                                    </div>

                                    <div class="contact-box">
                                        <ul class="contact-list">
                                            <li>
                                                <p>Toll Free: <a href="tel:+18008260009" title="800.826.0009">800.826.0009</a></p>
                                            </li>
                                            <li>
                                                <p>T: <a href="tel:+16192349200" title="619.234.9200">619.234.9200</a>  F:<a href="tel:+16195449879" title="619.544.9879">619.544.9879</a></p>
                                            </li>
                                            <li>
                                                <p>150 West Broadway, San Diego, CA 92101</p>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="social-box">
                                        <ul class="social-list">
                                            <li><a href="https://www.facebook.com/TheSofiaHotel" title="Facebook" target="_blank" rel="nofollow noopener"><i class="fab fa-facebook-square" aria-hidden="true"></i></a></li>
                                            <li><a href="https://twitter.com/thesofiahotel" title="Twitter" target="_blank" rel="nofollow noopener"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="https://www.instagram.com/thesofiahotel/" title="Instagram" target="_blank" rel="nofollow noopener"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                            <li><a href="https://www.yelp.com/biz/the-sofia-hotel-san-diego" title="Yelp" target="_blank" rel="nofollow noopener"><i class="fab fa-yelp" aria-hidden="true"></i></a></li>
                                            <li><a href="https://www.tripadvisor.com/Hotel_Review-g60750-d628619-Reviews-The_Sofia_Hotel-San_Diego_California.html" title="TripAdvisor" target="_blank" rel="nofollow noopener"><i class="fab fa-tripadvisor" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="right-box">
                                    <div class="burger-menu-box">
                                        <ul class="burger-menu">
                                            <li><a href="#" title="Book Now">Book Now</a></li>
                                            <li><a href="#" title="Accommodations">Accommodations</a></li>
                                            <li><a href="#" title="Business Travel">Business Travel</a></li>
                                            <li><a href="#" title="Gallery">Gallery</a></li>
                                            <li><a href="#" title="Explore">Explore</a></li>
                                            <li><a href="#" title="Dining">Dining</a></li>
                                            <li><a href="#" title="Specials">Specials</a></li>
                                            <li><a href="#" title="Shop">Shop</a></li>
                                        </ul>
                                    </div>
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
