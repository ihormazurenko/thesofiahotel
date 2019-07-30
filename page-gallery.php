<?php
/**
 * Template Name: Gallery
 */
get_header(); ?>

    <?php get_template_part('inc/hero'); ?>


    <section class="section-tabs">
        <div class="container">
            <div class="tabs-box">
                <div class="tabs-content tabs-on">
                    <div class="tabs-nav">
                        <ul class="tab-list">
                            <li>
                                <a href="#hotel" title="Hotel" class="color-light-blue">
                                    <span class="icon-box">
                                        <span class="tsh-icon hotel"></span>
                                    </span>
                                    <span class="text-box">Hotel</span>
                                </a>
                            </li>
                            <li>
                                <a href="#rooms" title="Rooms" class="color-gold">
                                    <span class="icon-box">
                                        <span class="tsh-icon rooms"></span>
                                    </span>
                                    <span class="text-box">Rooms</span>
                                </a>
                            </li>
                            <li>
                                <a href="#restaurant" title="Restaurant" class="color-purple">
                                    <span class="icon-box">
                                        <span class="tsh-icon restaurant"></span>
                                    </span>
                                    <span class="text-box">Restaurant</span>
                                </a>
                            </li>
                            <li>
                                <a href="#business" title="Business" class="color-grey">
                                    <span class="icon-box">
                                        <span class="tsh-icon business"></span>
                                    </span>
                                    <span class="text-box">Business</span>
                                </a>
                            </li>
                            <li>
                                <a href="#area" title="Area" class="color-dark">
                                    <span class="icon-box">
                                        <span class="tsh-icon area"></span>
                                    </span>
                                    <span class="text-box">Area</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-box-btn">
                        <a href="#hotel" class="color-light-blue" title="Hotel">
                            <span class="icon-box">
                                <span class="tsh-icon hotel"></span>
                            </span>
                            <span class="text-box">Hotel</span>
                        </a>
                    </div>
                    <div id="hotel" class="tab-section">
                        <div class="tab-inner-box">
                            <div class="grid popup-gallery">
                                <div class="grid-item"><img src="<?php echo get_bloginfo('template_url'); ?>/img/gallery_1.jpg" alt=""></div>
                                <div class="grid-item"><img src="<?php echo get_bloginfo('template_url'); ?>/img/gallery_2.jpg" alt=""></div>
                                <div class="grid-item"><img src="<?php echo get_bloginfo('template_url'); ?>/img/gallery_3.jpg" alt=""></div>
                                <div class="grid-item"><img src="<?php echo get_bloginfo('template_url'); ?>/img/gallery_4.jpg" alt=""></div>
                                <div class="grid-item"><img src="<?php echo get_bloginfo('template_url'); ?>/img/gallery_5.jpg" alt=""></div>
                                <div class="grid-item"><img src="<?php echo get_bloginfo('template_url'); ?>/img/gallery_6.jpg" alt=""></div>
                                <div class="grid-item"><img src="<?php echo get_bloginfo('template_url'); ?>/img/gallery_7.jpg" alt=""></div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-box-btn">
                        <a href="#rooms" class="color-gold" title="Rooms">
                            <span class="icon-box">
                                <span class="tsh-icon rooms"></span>
                            </span>
                            <span class="text-box">Rooms</span>
                        </a>
                    </div>
                    <div id="rooms" class="tab-section">
                        <div class="tab-inner-box">
                            <div class="grid popup-gallery">
                                <div class="grid-item">
                                    <a href="<?php echo get_bloginfo('template_url'); ?>/img/gallery_1.jpg">
                                        <img src="<?php echo get_bloginfo('template_url'); ?>/img/gallery_1.jpg" alt=""></div>
                                    </a>
                                <div class="grid-item">
                                    <a href="<?php echo get_bloginfo('template_url'); ?>/img/gallery_4.jpg">
                                        <img src="<?php echo get_bloginfo('template_url'); ?>/img/gallery_4.jpg" alt=""></div>
                                    </a>
                                <div class="grid-item">
                                    <a href="<?php echo get_bloginfo('template_url'); ?>/img/gallery_3.jpg">
                                        <img src="<?php echo get_bloginfo('template_url'); ?>/img/gallery_3.jpg" alt=""></div>
                                    </a>
                                <div class="grid-item">
                                    <a href="<?php echo get_bloginfo('template_url'); ?>/img/gallery_7.jpg">
                                        <img src="<?php echo get_bloginfo('template_url'); ?>/img/gallery_7.jpg" alt=""></div>
                                    </a>
                                <div class="grid-item">
                                    <a href="<?php echo get_bloginfo('template_url'); ?>/img/gallery_2.jpg">
                                        <img src="<?php echo get_bloginfo('template_url'); ?>/img/gallery_2.jpg" alt=""></div>
                                    </a>
                                <div class="grid-item">
                                    <a href="<?php echo get_bloginfo('template_url'); ?>/img/gallery_5.jpg">
                                        <img src="<?php echo get_bloginfo('template_url'); ?>/img/gallery_5.jpg" alt=""></div>
                                    </a>
                                <div class="grid-item">
                                    <a href="<?php echo get_bloginfo('template_url'); ?>/img/gallery_6.jpg">
                                        <img src="<?php echo get_bloginfo('template_url'); ?>/img/gallery_6.jpg" alt=""></div>
                                    </a>
                            </div>
                        </div>
                    </div>

                    <div class="tab-box-btn">
                        <a href="#restaurant" class="color-purple" title="Restaurant">
                            <span class="icon-box">
                                <span class="tsh-icon restaurant"></span>
                            </span>
                            <span class="text-box">Restaurant</span>
                        </a>
                    </div>
                    <div id="restaurant" class="tab-section">
                        <div class="tab-inner-box">
                            <div class="grid popup-gallery">
                                <div class="grid-item"><img src="<?php echo get_bloginfo('template_url'); ?>/img/gallery_2.jpg" alt=""></div>
                                <div class="grid-item"><img src="<?php echo get_bloginfo('template_url'); ?>/img/gallery_7.jpg" alt=""></div>
                                <div class="grid-item"><img src="<?php echo get_bloginfo('template_url'); ?>/img/gallery_1.jpg" alt=""></div>
                                <div class="grid-item"><img src="<?php echo get_bloginfo('template_url'); ?>/img/gallery_3.jpg" alt=""></div>
                                <div class="grid-item"><img src="<?php echo get_bloginfo('template_url'); ?>/img/gallery_5.jpg" alt=""></div>
                                <div class="grid-item"><img src="<?php echo get_bloginfo('template_url'); ?>/img/gallery_4.jpg" alt=""></div>
                                <div class="grid-item"><img src="<?php echo get_bloginfo('template_url'); ?>/img/gallery_6.jpg" alt=""></div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-box-btn">
                        <a href="#business" class="color-grey" title="Business">
                            <span class="icon-box">
                                <span class="tsh-icon business"></span>
                            </span>
                            <span class="text-box">Business</span>
                        </a>
                    </div>
                    <div id="business" class="tab-section">
                        <div class="tab-inner-box">
                            <div class="grid popup-gallery">
                                <div class="grid-item"><img src="<?php echo get_bloginfo('template_url'); ?>/img/gallery_6.jpg" alt=""></div>
                                <div class="grid-item"><img src="<?php echo get_bloginfo('template_url'); ?>/img/gallery_2.jpg" alt=""></div>
                                <div class="grid-item"><img src="<?php echo get_bloginfo('template_url'); ?>/img/gallery_1.jpg" alt=""></div>
                                <div class="grid-item"><img src="<?php echo get_bloginfo('template_url'); ?>/img/gallery_5.jpg" alt=""></div>
                                <div class="grid-item"><img src="<?php echo get_bloginfo('template_url'); ?>/img/gallery_4.jpg" alt=""></div>
                                <div class="grid-item"><img src="<?php echo get_bloginfo('template_url'); ?>/img/gallery_3.jpg" alt=""></div>
                                <div class="grid-item"><img src="<?php echo get_bloginfo('template_url'); ?>/img/gallery_7.jpg" alt=""></div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-box-btn">
                        <a href="#area" class="color-dark" title="Area">
                            <span class="icon-box">
                                <span class="tsh-icon area"></span>
                            </span>
                            <span class="text-box">Area</span>
                        </a>
                    </div>
                    <div id="area" class="tab-section">
                        <div class="tab-inner-box">
                            <div class="grid">
                                <div class="grid-item"><img src="<?php echo get_bloginfo('template_url'); ?>/img/gallery_1.jpg" alt=""></div>
                                <div class="grid-item"><img src="<?php echo get_bloginfo('template_url'); ?>/img/gallery_4.jpg" alt=""></div>
                                <div class="grid-item"><img src="<?php echo get_bloginfo('template_url'); ?>/img/gallery_3.jpg" alt=""></div>
                                <div class="grid-item"><img src="<?php echo get_bloginfo('template_url'); ?>/img/gallery_7.jpg" alt=""></div>
                                <div class="grid-item"><img src="<?php echo get_bloginfo('template_url'); ?>/img/gallery_5.jpg" alt=""></div>
                                <div class="grid-item"><img src="<?php echo get_bloginfo('template_url'); ?>/img/gallery_6.jpg" alt=""></div>
                                <div class="grid-item"><img src="<?php echo get_bloginfo('template_url'); ?>/img/gallery_2.jpg" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-banner pre-footer" style="background-image: url(<?php echo get_bloginfo('template_url'); ?>/img/gallery_prefooter_bg.jpg);">
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

<?php get_footer(); ?>
