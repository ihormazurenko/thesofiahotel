<?php
/**
 * Template Name: Test
 */
get_header(); ?>

    <?php get_template_part('inc/hero'); ?>

    <?php if (get_current_user_id() == 1) { ?>
        <section class="section-banner" style="background-image: url(<?php echo get_bloginfo('template_url'); ?>/img/banner_img.jpg);">
            <div class="container">
                <div class="vertical-align-box">
                    <div class="inner-box">
                        <div class="banner-title-box">
                            <h2 class="banner-title">Test modals</h2>
                        </div>
                        <ul class="banner-link">
                            <li>
                                <a class="open-tsh-popup btn" href="#book-modal">Book modal</a>
                            </li>
                            <li>
                                <a class="open-tsh-popup btn" href="#form-modal">Form modal</a>
                            </li>
                            <li>
                                <a class="open-tsh-popup btn" href="#let-us-know-modal">Let Us Know modal</a>
                            </li>
                            <li>
                                <a class="open-tsh-popup btn" href="#thank-modal">Thank modal</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>

    <section class="section section-two-columns small color-light-blue">
        <div class="container">
            <div class="two-column-box">
                <div class="column image">
                    <div class="inner-box">
                        <div class="inner-slider">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><img src="<?php echo get_bloginfo('template_url'); ?>/img/accom.jpg" alt=""></div>
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
                <div class="column text">
                    <div class="inner-box">
                        <div class="section-title-box">
                            <h2 class="section-title">Spa Services</h2>
                        </div>
                        <div class="content-box">
                            <div class="content">
                                <h3>Hours of Operation</h3>
                                <p>Monday - Friday 8am - 8pm </br>
                                    Saturday, Sunday 8am - 8pm
                                </p>
                            </div>
                        </div>
                        <ul class="link-list">
                            <li>
                                <a href="#" class="btn grey" title="View services">View services</a>
                            </li>
                        </ul>

                        <div class="section-title-box">
                            <h2 class="section-title">Yoga + Health Center</h2>
                        </div>
                        <div class="content-box">
                            <div class="content">
                                <h3>Hours of Operation</h3>
                                <p>The Harkishan Yoga Studio and Health Center are open 24 / 7.</p>
                            </div>
                        </div>
                        <ul class="link-list">
                            <li>
                                <a href="#" class="btn grey" title="Health center">Health center</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-two-columns small light-blue-bg color-gold">
        <div class="container">
            <div class="two-column-box">
                <div class="column text">
                    <div class="inner-box">
                        <div class="section-title-box">
                            <h2 class="section-title">VIP Suites</h2>
                        </div>
                        <div class="content-box">
                            <div class="content">
                                <p>For guests who require special accommodations the hotel offers special suites
                                    featuring all the standard guest room amenities and additional touches.</p>
                                <h3>FEATURES AND AMENITIES:</h3>
                                <ul>
                                    <li>Soaking spa tub with jets</li>
                                    <li>Fine art, decorative wallpaper, plumped cushions  and accessories</li>
                                    <li>Wide selection of Free Television Channels including HBO</li>
                                    <li>Universal Docking station alarm clock/radio</li>
                                    <li>Illuminating, adjustable bedside lamps</li>
                                    <li>Fine linens with white down comforters, plush pillows and pillow-top mattresses</li>
                                    <li>Updated, modern bathroom with sparkling, contemporary bath and vanity fixtures</li>
                                    <li>Separate vanities with lighted cosmetic mirrors</li>
                                    <li>Pro Terra products and toiletries</li>
                                    <li>In-room refreshment center with coffeemaker, mini-fridge and microwave</li>
                                    <li>Hair dryer and iron with board</li>
                                    <li>Electronic in-room laptop safe</li>
                                    <li>Pet-friendly rooms</li>
                                </ul>
                            </div>
                        </div>
                        <ul class="link-list">
                            <li>
                                <a href="#" class="btn grey" title="Floor Plans">Floor Plans</a>
                            </li>
                            <li>
                                <a href="#" class="btn grey" title="Book Now">Book Now</a>
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

    <section class="section-banner" style="background-image: url(<?php echo get_bloginfo('template_url'); ?>/img/banner_img.jpg);">
        <div class="container">
            <div class="vertical-align-box">
                <div class="inner-box">
                    <div class="banner-title-box">
                        <h2 class="banner-title">Body Treatments</h2>
                    </div>
                    <div class="banner-desc-box">
                        <div class="content">
                            <p>All body treatments include a gharsana treatment.</p>
                        </div>
                    </div>
                    <ul class="banner-link">
                        <li>
                            <a href="#" title="" class="btn">Book Now</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section-services">
        <div class="container">
            <ul class="service-list">
                <li>
                    <div class="service-box">
                        <div class="title-box">
                            <h3 class="service-title">Circulatory</h3>
                        </div>
                        <div class="service-desc">
                            <div class="content">
                                <p>Circulates blood, lymph and breath so that you can get in touch with your flow.</p>
                            </div>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                        <ul class="price-list">
                           <li>
                               <div class="price-box">
                                   <p>50 min: <span class="price">$98</span></p>
                               </div>
                           </li>
                            <li>
                               <div class="price-box">
                                   <p>80 min: <span class="price">$80</span></p>
                               </div>
                           </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="service-box">
                        <div class="title-box">
                            <h3 class="service-title">Deep Tissue</h3>
                        </div>
                        <div class="service-desc">
                            <div class="content">
                                <p>Release into your deep tissue therapeutic massage. Soften the tissue, strengthen the spirit and soothe the soul.</p>
                            </div>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                        <ul class="price-list">
                            <li>
                                <div class="price-box">
                                    <p>50 min: <span class="price">$115</span></p>
                                </div>
                            </li>
                            <li>
                                <div class="price-box">
                                    <p>80 min: <span class="price">$155</span></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="service-box">
                        <div class="title-box">
                            <h3 class="service-title">Fusion</h3>
                        </div>
                        <div class="service-desc">
                            <div class="content">
                                <p>A blend of circulatory and deep tissue techniques specifically customized for your session.</p>
                            </div>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                        <ul class="price-list">
                            <li>
                                <div class="price-box">
                                    <p>50 min: <span class="price">$110</span></p>
                                </div>
                            </li>
                            <li>
                                <div class="price-box">
                                    <p>80 min: <span class="price">$150</span></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <section class="section-services">
    <div class="container">
        <ul class="service-list">
            <li>
                <div class="service-box">
                    <div class="title-box">
                        <h3 class="service-title">Luna</h3>
                    </div>
                    <div class="service-desc">
                        <div class="content">
                            <p>A special session for mothers to be. Promotes circulation and relaxation, easing aching joints and muscles. Great for both mama and baby.</p>
                        </div>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                    <ul class="price-list">
                        <li>
                            <div class="price-box">
                                <p>50 min: <span class="price">$110</span></p>
                            </div>
                        </li>
                        <li>
                            <div class="price-box">
                                <p>80 min: <span class="price">$150</span></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <div class="service-box">
                    <div class="title-box">
                        <h3 class="service-title">Sublime Thigh Treatment</h3>
                    </div>
                    <div class="service-desc">
                        <div class="content">
                            <p>A brisk gharsana treatment followed by deep, kneading massage strokes to break up fatty accumulations in the thighs and buttocks.</p>
                        </div>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                    <ul class="price-list">
                        <li>
                            <div class="price-box">
                                <p>50 min: <span class="price">$120</span></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <div class="service-box">
                    <div class="title-box">
                        <h3 class="service-title">Crowning Chakra</h3>
                    </div>
                    <div class="service-desc show-more">
                        <div class="content">
                            <p>A blend of aromatherapy infused oil is used in pressure point massage to the head, neck and
                                shoulders. Great for dry tresses as well!
                            </p>
                        </div>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                    <ul class="price-list">
                        <li>
                            <div class="price-box">
                                <p>30 min: <span class="price">$80</span></p>
                                <div class="additional-info">(add-on to any treatment)</div>
                            </div>
                        </li>
                        <li>
                            <div class="price-box">
                                <p>50 min: <span class="price">$150</span></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</section>

    <section class="section-slider">
        <div class="container">
            <div class="single-slider">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="slide-name-box">
                                <h3 class="slide-title">Convention Center</h3>
                            </div>
                            <img src="<?php echo get_bloginfo('template_url'); ?>/img/bussines_slide_1.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-name-box">
                                <h3 class="slide-title">Hall of Justice</h3>
                            </div>
                            <img src="<?php echo get_bloginfo('template_url'); ?>/img/bussines_slide_2.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-name-box">
                                <h3 class="slide-title">Santa Fe Depot</h3>
                            </div>
                            <img src="<?php echo get_bloginfo('template_url'); ?>/img/bussines_slide_3.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-name-box">
                                <h3 class="slide-title">Administration Center</h3>
                            </div>
                            <img src="<?php echo get_bloginfo('template_url'); ?>/img/bussines_slide_4.jpg" alt="">
                        </div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-prev"><span class="tsh-icon-arrow"></span></div>
                    <div class="swiper-button-next"><span class="tsh-icon-arrow"></span></div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-important-information color-light-blue">
        <div class="container">
            <div class="content">
                <h3>CANCELLATION POLICY</h3>
                <p>Any cancellation must be received within 4 hours of your appointment. Any late cancellations will
                    incur a 50% cancellation fee. A full fee will be imposed for a no show client.</p>
                <h3>GRATUITIES</h3>
                <p>As a courtesy to your therapist an 18% gratuity will be automatically added to your bill.</p>
                <h3>REFUND POLICY</h3>
                <p>Fitness packages are non transferable, non refundable and non exchangeable.</p>
                <h3>SPECIAL CONSIDERATION</h3>
                <p>Guests who have any medical issues are advised to consult a physician before signing up for
                    fitness services. Please report any medical conditions to your instructor. Liability waivers will
                    be provided, and are to be signed before any fitness activity is performed.</p>
            </div>
        </div>
    </section>

    <section class="section-slider">
        <div class="container">
            <div class="single-slider small">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="<?php echo get_bloginfo('template_url'); ?>/img/explore_slide_1.jpg" alt=""></div>
                        <div class="swiper-slide"><img src="<?php echo get_bloginfo('template_url'); ?>/img/explore_slide_2.jpg" alt=""></div>
                        <div class="swiper-slide"><img src="<?php echo get_bloginfo('template_url'); ?>/img/explore_slide_3.jpg" alt=""></div>
                        <div class="swiper-slide"><img src="<?php echo get_bloginfo('template_url'); ?>/img/explore_slide_4.jpg" alt=""></div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-prev"><span class="tsh-icon-arrow"></span></div>
                    <div class="swiper-button-next"><span class="tsh-icon-arrow"></span></div>
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

<?php /*
<!--style for maps-->
<script type="text/javascript">
    var gmb_data = {"2885":{"id":"2885","ajax_url":"https:\/\/thesofiahotel.com\/wp-admin\/admin-ajax.php","map_params":{"title":"Nightlife","width":"100","height":"600","latitude":"32.7159428","longitude":"-117.1644647","zoom":"15","default_marker":"https:\/\/thesofiahotel.com\/wp-content\/plugins\/google-maps-builder-pro\/assets\/img\/spotlight-poi.png"},"map_controls":{"zoom_control":"DEFAULT","pan_control":"true","map_type_control":"horizontal_bar","draggable":"true","double_click_zoom":"true","wheel_zoom":"true","street_view":"true"},"map_theme":{"map_type":"RoadMap","map_theme_json":"[\r\n    {\r\n        \"featureType\": \"administrative\",\r\n        \"elementType\": \"labels.text.fill\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#444444\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"landscape\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#f2f2f2\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"landscape.natural\",\r\n        \"elementType\": \"geometry\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"on\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"poi\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"off\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"road\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"saturation\": -100\r\n            },\r\n            {\r\n                \"lightness\": 45\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"road.highway\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"simplified\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"road.arterial\",\r\n        \"elementType\": \"labels.icon\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"off\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"transit\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"off\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"water\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#c6abb5\"\r\n            },\r\n            {\r\n                \"visibility\": \"on\"\r\n            }\r\n        ]\r\n    }\r\n]"},"marker_centered":"yes","marker_cluster":"","plugin_url":"https:\/\/thesofiahotel.com\/wp-content\/plugins\/google-maps-builder-pro\/","site_name":"The Sofia Hotel","site_url":"https:\/\/thesofiahotel.com","mashup_markers":[{"post_type":"post","taxonomy":"none","latitude":"_edit_lock","longitude":"_edit_lock","featured_img":"yes","marker_img_id":0}],"map_markers":[{"place_id":"ChIJbQ_kUahU2YARc-JtJkbuqRc","lat":"32.7159428","lng":"-117.1644647","marker_img_id":128,"marker_img":"https:\/\/thesofiahotel.com\/wp-content\/uploads\/2017\/09\/MAP-e1504435739422.png","infowindow_open":"closed"}],"destination_markers":[{"travel_mode":"DRIVING","point":[]}],"text_directions":"overlay","layers":"","places_search":"","places_api":{"show_places":"yes","search_radius":"15000","search_places":["night_club"]},"map_markers_icon":"none"},"2884":{"id":"2884","ajax_url":"https:\/\/thesofiahotel.com\/wp-admin\/admin-ajax.php","map_params":{"title":"Shopping","width":"100","height":"600","latitude":"32.7159428","longitude":"-117.1644647","zoom":"15","default_marker":"https:\/\/thesofiahotel.com\/wp-content\/plugins\/google-maps-builder-pro\/assets\/img\/spotlight-poi.png"},"map_controls":{"zoom_control":"DEFAULT","pan_control":"true","map_type_control":"horizontal_bar","draggable":"true","double_click_zoom":"true","wheel_zoom":"true","street_view":"true"},"map_theme":{"map_type":"RoadMap","map_theme_json":"[\r\n    {\r\n        \"featureType\": \"administrative\",\r\n        \"elementType\": \"labels.text.fill\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#444444\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"landscape\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#f2f2f2\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"landscape.natural\",\r\n        \"elementType\": \"geometry\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"on\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"poi\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"off\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"road\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"saturation\": -100\r\n            },\r\n            {\r\n                \"lightness\": 45\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"road.highway\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"simplified\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"road.arterial\",\r\n        \"elementType\": \"labels.icon\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"off\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"transit\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"off\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"water\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#c6abb5\"\r\n            },\r\n            {\r\n                \"visibility\": \"on\"\r\n            }\r\n        ]\r\n    }\r\n]"},"marker_centered":"yes","marker_cluster":"","plugin_url":"https:\/\/thesofiahotel.com\/wp-content\/plugins\/google-maps-builder-pro\/","site_name":"The Sofia Hotel","site_url":"https:\/\/thesofiahotel.com","mashup_markers":[{"post_type":"post","taxonomy":"none","latitude":"_edit_lock","longitude":"_edit_lock","featured_img":"yes","marker_img_id":0}],"map_markers":[{"place_id":"ChIJbQ_kUahU2YARc-JtJkbuqRc","lat":"32.7159428","lng":"-117.1644647","marker_img_id":128,"marker_img":"https:\/\/thesofiahotel.com\/wp-content\/uploads\/2017\/09\/MAP-e1504435739422.png","infowindow_open":"closed"}],"destination_markers":[{"travel_mode":"DRIVING","point":[]}],"text_directions":"overlay","layers":"","places_search":"","places_api":{"show_places":"yes","search_radius":"3000","search_places":["atm","bank","beauty_salon","book_store","clothing_store","florist","grocery_or_supermarket","hair_care","jewelry_store","pharmacy","shoe_store","shopping_mall","store"]},"map_markers_icon":"none"},"2881":{"id":"2881","ajax_url":"https:\/\/thesofiahotel.com\/wp-admin\/admin-ajax.php","map_params":{"title":"Dining","width":"100","height":"600","latitude":"32.7159273","longitude":"-117.164289","zoom":"15","default_marker":"https:\/\/thesofiahotel.com\/wp-content\/plugins\/google-maps-builder-pro\/assets\/img\/spotlight-poi.png"},"map_controls":{"zoom_control":"DEFAULT","pan_control":"true","map_type_control":"horizontal_bar","draggable":"true","double_click_zoom":"true","wheel_zoom":"true","street_view":"true"},"map_theme":{"map_type":"RoadMap","map_theme_json":"[\r\n    {\r\n        \"featureType\": \"administrative\",\r\n        \"elementType\": \"labels.text.fill\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#444444\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"landscape\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#f2f2f2\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"landscape.natural\",\r\n        \"elementType\": \"geometry\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"on\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"poi\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"off\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"road\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"saturation\": -100\r\n            },\r\n            {\r\n                \"lightness\": 45\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"road.highway\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"simplified\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"road.arterial\",\r\n        \"elementType\": \"labels.icon\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"off\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"transit\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"off\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"water\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#c6abb5\"\r\n            },\r\n            {\r\n                \"visibility\": \"on\"\r\n            }\r\n        ]\r\n    }\r\n]"},"marker_centered":"yes","marker_cluster":"","plugin_url":"https:\/\/thesofiahotel.com\/wp-content\/plugins\/google-maps-builder-pro\/","site_name":"The Sofia Hotel","site_url":"https:\/\/thesofiahotel.com","mashup_markers":[{"post_type":"post","taxonomy":"none","latitude":"_edit_lock","longitude":"_edit_lock","featured_img":"yes","marker_img_id":0}],"map_markers":[{"title":"The Sofia Hotel","description":"","reference":"","place_id":"ChIJbQ_kUahU2YARc-JtJkbuqRc","hide_details":false,"lat":"32.7159428","lng":"-117.1644647","marker_img_id":128,"marker_img":"https:\/\/thesofiahotel.com\/wp-content\/uploads\/2017\/09\/MAP-e1504435739422.png","marker_included_img":"","marker":"","label":"","infowindow_open":"closed"},{"place_id":"ChIJI7PyTqhU2YAREoGQkmb7IXY","lat":"32.7159273","lng":"-117.164289","marker_img_id":2883,"marker_img":"https:\/\/thesofiahotel.com\/wp-content\/uploads\/2018\/01\/MAP-Currant-copy.png","infowindow_open":"closed"}],"destination_markers":[{"travel_mode":"DRIVING","point":[]}],"text_directions":"overlay","layers":"","places_search":"","places_api":{"show_places":"yes","search_radius":"15000","search_places":["bar","restaurant"]},"map_markers_icon":"none"},"2880":{"id":"2880","ajax_url":"https:\/\/thesofiahotel.com\/wp-admin\/admin-ajax.php","map_params":{"title":"Sites","width":"100","height":"600","latitude":"32.7159428","longitude":"-117.1644647","zoom":"14","default_marker":"https:\/\/thesofiahotel.com\/wp-content\/plugins\/google-maps-builder-pro\/assets\/img\/spotlight-poi.png"},"map_controls":{"zoom_control":"DEFAULT","pan_control":"true","map_type_control":"horizontal_bar","draggable":"true","double_click_zoom":"true","wheel_zoom":"true","street_view":"true"},"map_theme":{"map_type":"RoadMap","map_theme_json":"[\r\n    {\r\n        \"featureType\": \"administrative\",\r\n        \"elementType\": \"labels.text.fill\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#444444\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"landscape\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#f2f2f2\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"landscape.natural\",\r\n        \"elementType\": \"geometry\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"on\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"poi\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"off\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"poi.attraction\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"on\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"poi.attraction\",\r\n        \"elementType\": \"labels.text.fill\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#ff00e9\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"poi.park\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"on\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"poi.park\",\r\n        \"elementType\": \"geometry\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#c393c0\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"poi.park\",\r\n        \"elementType\": \"labels.text.fill\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#ee00d9\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"road\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"saturation\": -100\r\n            },\r\n            {\r\n                \"lightness\": 45\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"road.highway\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"simplified\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"road.arterial\",\r\n        \"elementType\": \"labels.icon\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"off\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"transit\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"off\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"water\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#c6abb5\"\r\n            },\r\n            {\r\n                \"visibility\": \"on\"\r\n            }\r\n        ]\r\n    }\r\n]"},"marker_centered":"yes","marker_cluster":"","plugin_url":"https:\/\/thesofiahotel.com\/wp-content\/plugins\/google-maps-builder-pro\/","site_name":"The Sofia Hotel","site_url":"https:\/\/thesofiahotel.com","mashup_markers":[{"post_type":"post","taxonomy":"none","latitude":"_edit_lock","longitude":"_edit_lock","featured_img":"yes","marker_img_id":0}],"map_markers":[{"title":"Taffy 3 Memorial","description":"","reference":"","place_id":"ChIJ_bLPSFWr3oARNFIMMcjESnA","hide_details":false,"lat":"32.7127149","lng":"-117.17413690000001","marker_img_id":0,"marker_img":false,"marker_included_img":"assets\/img\/maps-icons-collection\/information.png","marker":"","label":"","infowindow_open":"closed"},{"title":"Ernest Hahn Statue","description":"","reference":"","place_id":"ChIJWZi6AahU2YARI2OoPW7_Ybg","hide_details":false,"lat":"32.7146533","lng":"-117.16200049999998","marker_img_id":0,"marker_img":false,"marker_included_img":"assets\/img\/maps-icons-collection\/information.png","marker":"","label":"","infowindow_open":"closed"},{"title":"Visit the Gaslamp Museum at the Davis-Horton House","description":"","reference":"","place_id":"ChIJP_hB71lT2YAR8zwNVdBewng","hide_details":false,"lat":"32.7105762","lng":"-117.16068869999998","marker_img_id":0,"marker_img":false,"marker_included_img":"assets\/img\/maps-icons-collection\/information.png","marker":"","label":"","infowindow_open":"closed"},{"title":"The Sofia Hotel","place_id":"ChIJbQ_kUahU2YARc-JtJkbuqRc","lat":"32.7159428","lng":"-117.1644647","marker_img_id":128,"marker_img":"https:\/\/thesofiahotel.com\/wp-content\/uploads\/2017\/09\/MAP-e1504435739422.png","infowindow_open":"closed"}],"destination_markers":[{"travel_mode":"DRIVING","point":[]}],"text_directions":"overlay","layers":"","places_search":"","places_api":{"show_places":"yes","search_radius":"15000","search_places":["amusement_park","aquarium","art_gallery","casino","embassy","movie_theater","stadium","university"]},"map_markers_icon":"none"},"2878":{"id":"2878","ajax_url":"https:\/\/thesofiahotel.com\/wp-admin\/admin-ajax.php","map_params":{"title":"Coffee","width":"100","height":"600","latitude":"32.7159428","longitude":"-117.1644647","zoom":"15","default_marker":"https:\/\/thesofiahotel.com\/wp-content\/plugins\/google-maps-builder-pro\/assets\/img\/spotlight-poi.png"},"map_controls":{"zoom_control":"DEFAULT","pan_control":"true","map_type_control":"horizontal_bar","draggable":"true","double_click_zoom":"true","wheel_zoom":"true","street_view":"true"},"map_theme":{"map_type":"RoadMap","map_theme_json":"[\r\n    {\r\n        \"featureType\": \"administrative\",\r\n        \"elementType\": \"labels.text.fill\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#444444\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"landscape\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#f2f2f2\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"landscape.natural\",\r\n        \"elementType\": \"geometry\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"on\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"poi\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"off\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"road\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"saturation\": -100\r\n            },\r\n            {\r\n                \"lightness\": 45\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"road.highway\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"simplified\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"road.arterial\",\r\n        \"elementType\": \"labels.icon\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"off\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"transit\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"visibility\": \"off\"\r\n            }\r\n        ]\r\n    },\r\n    {\r\n        \"featureType\": \"water\",\r\n        \"elementType\": \"all\",\r\n        \"stylers\": [\r\n            {\r\n                \"color\": \"#c6abb5\"\r\n            },\r\n            {\r\n                \"visibility\": \"on\"\r\n            }\r\n        ]\r\n    }\r\n]\r\n"},"marker_centered":"yes","marker_cluster":"","plugin_url":"https:\/\/thesofiahotel.com\/wp-content\/plugins\/google-maps-builder-pro\/","site_name":"The Sofia Hotel","site_url":"https:\/\/thesofiahotel.com","mashup_markers":[{"post_type":"post","taxonomy":"none","latitude":"_edit_lock","longitude":"_edit_lock","featured_img":"yes","marker_img_id":0}],"map_markers":[{"title":"The Sofia Hotel","description":"The Sofia Hotel is a proud member of a National Trust Historic Hotels of America. Find out more on our History page.","lat":"32.7159428","lng":"-117.1644647","marker_img_id":128,"marker_img":"https:\/\/thesofiahotel.com\/wp-content\/uploads\/2017\/09\/MAP-e1504435739422.png","infowindow_open":"closed"}],"destination_markers":[{"travel_mode":"DRIVING","point":[]}],"text_directions":"overlay","layers":"","places_search":"","places_api":{"show_places":"yes","search_radius":"8000","search_places":["cafe"]},"map_markers_icon":"none"},"i18n":{"get_directions":"Get Directions","visit_website":"Visit Website"},"infobubble_args":{"shadowStyle":0,"padding":12,"backgroundColor":"rgb(255, 255, 255)","borderRadius":3,"arrowSize":15,"minHeight":20,"maxHeight":450,"minWidth":200,"maxWidth":350,"borderWidth":0,"disableAutoPan":true,"disableAnimation":true,"backgroundClassName":"gmb-infobubble","closeSrc":"https:\/\/www.google.com\/intl\/en_us\/mapfiles\/close.gif"}};
</script>
*/ ?>

<?php get_footer(); ?>
