<?php
/**
 * Template Name: History
 */
get_header(); ?>

<?php get_template_part('inc/hero'); ?>

    <section class="section-history">

        <div class="history-year year-1915 grune-bg">
            <div class="container">
                <div class="year-box">
                    <h2 class="year-name">1915</h2>
                </div>
                <div class="content">
                    <p>San Diego-based stagecoach company, Limited Imperial Valley Stage Line, changes its name to the
                        Pickwick Stage Lines and moves its station to the lobby of the old Pickwick Theater on the east
                        side of Fourth Street, north of Broadway.</p>
                </div>
            </div>
        </div>

        <div class="year-full-with-img vertical-line" style="background-image: url(<?php echo get_bloginfo('template_url'); ?>/img/history_1915.jpg)"></div>

        <div class="history-year year-1927 grune-bg">
            <div class="key-side-img">
                <img src="<?php echo get_bloginfo('template_url'); ?>/img/history_key.png" alt="">
            </div>
            <div class="container">
                <div class="year-box">
                    <h2 class="year-name">1927</h2>
                </div>
                <div class="content">
                    <p>Another Pickwick Hotel opens its doors in San Diego at First and Broadway in May.
                        The first hotel in San Diego to be built with "en suite" bathrooms, its marketing
                        slogan was "A Room and a Bath for Two and a Half."</p>
                </div>
            </div>
        </div>

        <div class="history-year year-1930 inverse vertical-line" style="background-image: url(<?php echo get_bloginfo('template_url'); ?>/img/history_1930.jpg)">
            <div class="key-side-img">
                <img src="<?php echo get_bloginfo('template_url'); ?>/img/history_bus.jpg" alt="">
            </div>
            <div class="container">
                <div class="year-box big">
                    <span class="year-sub-text">Early</span>
                    <h2 class="year-name">1930s</h2>
                </div>
                <div class="content">
                    <p>Under the Pickwick ownership, the station uses a variety of slogans to promoto their identity.
                        Among those KGB uses during this time are "The Voice of Sunny San Diego."
                        Pickwick Broadcasting Corporation later formed a three-station chain including
                        KNRC in Los Angeles and KTAB in San Francisco.</p>
                </div>
            </div>
        </div>

        <div class="history-year year-1950 grune-bg">
            <div class="container">
                <div class="year-box">
                    <h2 class="year-name">1950</h2>
                </div>
                <div class="content">
                    <p>Downtown is changing and the bus operation expands to occupy both ground floor corners of
                        The Pickwick Hotel. Also at this time, the San Diego City Council requires that decorative
                        architectural elements be removed from all buildings to prevent potential injury and casualty
                        during an earthquake.</p>
                </div>
            </div>
            <div class="photo-collage-box">
                <ul class="photo-collage popup-gallery">
                    <li>
                        <div class="photo-box">
                            <a href="<?php echo get_bloginfo('template_url'); ?>/img/history_1950_1.jpg" title="">
                                <img src="<?php echo get_bloginfo('template_url'); ?>/img/history_1950_1.jpg" alt="">
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="photo-box">
                            <a href="<?php echo get_bloginfo('template_url'); ?>/img/history_1950_2.jpg" title="">
                                <img src="<?php echo get_bloginfo('template_url'); ?>/img/history_1950_2.jpg" alt="">
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="photo-box">
                            <a href="<?php echo get_bloginfo('template_url'); ?>/img/history_1950_1.jpg" title="">
                                <img src="<?php echo get_bloginfo('template_url'); ?>/img/history_1950_1.jpg" alt="">
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </section>

<?php get_footer(); ?>
