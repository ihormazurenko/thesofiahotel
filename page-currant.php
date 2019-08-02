<?php
/**
 * Template Name: Currant
 */
get_header(); ?>

<?php get_template_part('inc/hero'); ?>

<div id="parallax-container">
    <div style="background-image: url(<?php echo get_bloginfo('template_url'); ?>/img/current_bg.svg); "></div>
</div>


<div id="current-content">

    <section class="section section-interesting-info color-purple transparent-bg">
        <div class="container">
            <h2 class="section-title">Culinary Adventure Awaits</h2>
            <div class="content">
                <p>Currant's cuisine embodies American reinterpretations of classic
                    French technique — with the soul of a home cooked meal.</p>
            </div>
        </div>
    </section>

    <section class="section section-two-columns purple-translucency-bg inverse small">
        <div class="container">
            <div class="two-column-box">
                <div class="column image">
                    <div class="inner-box">
                        <div class="img-wrap ">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/img/currant_1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="column text">
                    <div class="inner-box">
                        <div class="section-title-box">
                            <h2 class="section-title">Hours</h2>
                        </div>
                        <div class="content-box">
                            <div class="content">
                                <h3>Monday – Friday</h3>
                                <p>Breakfast/Brunch: 7:00am – 2:00pm<br/>
                                    Lounge Menu: 2:00pm – 7pm<br/>
                                    Dinner: 4:30pm – 10:00pm
                                </p>
                                <br>
                                <h3>Saturday & Sunday</h3>
                                <p>Brunch: 9:00am – 2:00pm<br/>
                                    Lounge Menu: 2:00pm – 7:00pm<br/>
                                    Dinner Sat/Sun 4:30 – 10pm / 4:30 – 9pm</p>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-banner transparent-bg">
        <div class="container">
            <div class="vertical-align-box">
                <div class="inner-box">
                    <ul class="banner-link">
                        <li>
                            <a href="#" title="Reservations" class="btn">Reservations</a>
                        </li>
                        <li>
                            <a href="#" title="View Menus" class="btn">View Menus</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section-slider">
        <div class="container">
            <div class="single-slider">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/img/currant_slide_1.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/img/currant_slide_2.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/img/currant_slide_3.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/img/currant_slide_4.jpg" alt="">
                        </div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-prev"><span class="tsh-icon-arrow"></span></div>
                    <div class="swiper-button-next"><span class="tsh-icon-arrow"></span></div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>
