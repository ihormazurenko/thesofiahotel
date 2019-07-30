<?php
/**
 * Template Name: Home
 */
get_header(); ?>

    <?php get_template_part('inc/hero'); ?>

    <section class="section-two-columns abstract-bg high-block vertical-middle color-purple">
        <div class="container">
            <div class="two-column-box">
                <div class="column image">
                    <div class="inner-box">
                        <div class="img-wrap ">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/img/world-class-accommodations.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="column text">
                    <div class="inner-box">
                        <div class="section-title-box">
                            <h2 class="section-title">World Class Accommodations</h2>
                        </div>
                        <div class="content-box">
                            <div class="content">
                                <p>An unforgettable experience for any guest lies in the hands of the host.
                                    Sofia's graciousness, charm, and attention to detail are everywhere from
                                    the fine linens and soothing toiletries, to the ambient bedside light,
                                    offering tired guests an opportunity to read or work from the comfort of
                                    their bed.</p>
                            </div>
                        </div>
                        <ul class="link-list">
                            <li>
                                <a href="#" class="btn" title="Accommodations">Accommodations</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-interesting-info">
        <div class="container">
            <h2 class="section-title">A Room For Every Occasion</h2>
            <div class="content">
                <p>Sofia is a sensible hostess who has thought of everything from a laptop safe to a mini-fridge.
                    Her responsiveness and ability to anticipate her guests' needs will resonate with visitors for
                    years to come.</p>
            </div>
        </div>
    </section>

<!--        for slider-->
    <section class="section-two-columns">
        <div class="container">
            <div class="two-column-box">
                <div class="column text">
                    <div class="inner-box">
                        <div class="section-title-box">
                            <h2 class="section-title">VIP Sеuites</h2>
                        </div>
                        <div class="content-box">
                            <div class="content">
                                <p>For guests who require special accommodations, Sofia offers special suites
                                    featuring all the standard guest room amenities and additional touches.</p>
                            </div>
                        </div>
                        <ul class="link-list">
                            <li>
                                <a href="#" class="btn grey" title="View our suites">View our suites</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="column image">
                    <div class="inner-box">
                        <div class="inner-slider">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><img src="<?php echo get_bloginfo('template_url'); ?>/img/vip-suites-section.jpg" alt=""></div>
                                    <div class="swiper-slide"><img src="<?php echo get_bloginfo('template_url'); ?>/img/hero-home.jpg" alt=""></div>
                                    <div class="swiper-slide"><img src="<?php echo get_bloginfo('template_url'); ?>/img/prefooter-home.jpg" alt=""></div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-button-prev"><span class="tsh-icon-arrow"></span></div>
                                <div class="swiper-button-next"><span class="tsh-icon-arrow"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-interesting-info color-purple">
        <div class="container">
            <h2 class="section-title">We Mean Business</h2>
            <div class="content">
                <p>Be it business or pleasure, an enjoyable stay is just as much about your experiences
                    inside the hotel as outside. </p>
            </div>
        </div>
    </section>

    <?php get_template_part('inc/banner'); ?>

    <section class="section section-interesting-info color-gold">
        <div class="container">
            <h2 class="section-title">More Than Just a Room</h2>
            <div class="content">
                <p>For one night or many, Sofia is at your beck and call. Dine, relax, or find adventure with us. </p>
            </div>
        </div>
    </section>

    <section class="section-services">
        <div class="container">
            <ul class="services-list">
                <li>
                    <a href="#" title="">
                        <span class="service-box">
                            <span class="centered-img">
                                <img src="<?php echo get_bloginfo('template_url'); ?>/img/reserve-a-table-img.jpg" alt="">
                            </span>
                            <span class="inner-box">
                                <span class="inner-table">
                                    <span class="inner-cell">
                                        <span class="service-subtitle">RESERVE A TABLE</span>
                                        <span class="service-title">CURRANT BRASSERIE</span>
                                    </span>
                                </span>
                            </span>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#" title="">
                        <span class="service-box">
                            <span class="centered-img">
                                <img src="<?php echo get_bloginfo('template_url'); ?>/img/book-a-treatment-img.jpg" alt="">
                            </span>
                            <span class="inner-box">
                                <span class="inner-table">
                                    <span class="inner-cell">
                                        <span class="service-subtitle">BOOK A TREATMENT</span>
                                        <span class="service-title">SOFIA SPA</span>
                                    </span>
                                </span>
                            </span>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#" title="">
                        <span class="service-box">
                            <span class="centered-img">
                                <img src="<?php echo get_bloginfo('template_url'); ?>/img/bundle-and-save-img.jpg" alt="">
                            </span>
                            <span class="inner-box">
                                <span class="inner-table">
                                    <span class="inner-cell">
                                        <span class="service-subtitle">BUNDLE AND SAVE</span>
                                        <span class="service-title">PACKAGES</span>
                                    </span>
                                </span>
                            </span>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <section class="section-banner pre-footer" style="background-image: url(<?php echo get_bloginfo('template_url'); ?>/img/prefooter-home-2.jpg);">
        <div class="container">
            <div class="vertical-align-box">
                <div class="inner-box">
                    <ul class="banner-link">
                        <li>
                            <a href="#" title="" class="btn">Find Rooms</a>
                        </li>
                        <li>
                            <a href="#" title="" class="btn">Accommodations</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>