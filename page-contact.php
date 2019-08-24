<?php
/**
 * Template Name: Contact Us
 */
get_header(); ?>

    <section class="section-contact-us hero full">
        <div class="hero-vertical-align">
            <div class="hero-box">
                <div id="form-box" class="container">
                    <div class="top-box">
                        <div class="contact-message-box">
                            <p class="contact-message">Let us know how we are doing and what we can do to help you!</p>
                        </div>
                    </div>
                    <div class="bottom-box">
                        <div class="accordion-box">
                            <h3 class="accordion">
                                <a href="#tab1" class="smooth-js" title="">Guest services <i class="fa fa-chevron-down"></i></a>
                            </h3>
                            <div class="panel" id="tab1">
                                <div class="content">
                                    <h4>Is there something we can help with? <br>
                                                                        Sofia is at your service 24 hours a day.</h4>
                                    <p>When spending the night away from home, it’s the little things that make a difference. At the Sofia, we take time to consider the details needed to allow our guests a pleasant stay. No matter what time of day or night you arrive, a valet will be patiently waiting. Concierge service is conveniently located in the lobby to offer local recommendations, area directions and restaurant reservations 24-hours a day. Around-the-clock laundry service is just a phone call away. While relaxing in Sofia’s lobby area, enjoy high-speed Internet, bar service and an ATM for your convenience. Relax and enjoy your stay.</p>
                                </div>
                            </div>

                            <h3 class="accordion">
                                <a href="#tab2" class="smooth-js" title="">Website feedback <i class="fa fa-chevron-down"></i></a>
                            </h3>
                            <div class="panel" id="tab2">
                                
                                    <p>If you experience a problem with The Sofia Hotel website, please let us know so we can look into it for you. Please be as thorough as possible in your description, and be sure to include the name and version of the browser you're using. Thank you!</p>
                                    <?php echo do_shortcode('[contact-form-7 id="280" title="Website Feedback"]'); ?>
                                
                            </div>

                            <h3 class="accordion">
                                <a href="#tab3" class="smooth-js" title="">How was your stay? <i class="fa fa-chevron-down"></i></a>
                            </h3>
                            <div class="panel" id="tab3">
                                <p>The following form will help us continually meet our goal of providing an unforgettable experience for each of our guests. Many thanks! </p>
                                <?php echo do_shortcode('[contact-form-7 id="281" title="How Was Your Stay?"]'); ?>
                            </div>

                            <h3 class="accordion">
                                <a href="#tab4" class="smooth-js" title="">Schedule an event <i class="fa fa-chevron-down"></i></a>
                            </h3>
                            <div class="panel" id="tab4">
                                
                                    <p>Please allow 7 days before your next event. Our event team will be in contact with you within one business day after submitting this form. Thanks for staying with us.</p>
                                    
                                    <?php echo do_shortcode('[contact-form-7 id="282" title="Schedule an Event"]'); ?>
                                
                            </div>

                            <h3 class="accordion">
                                <a href="#tab5" class="smooth-js" title="">Restaurant questions <i class="fa fa-chevron-down"></i></a>
                            </h3>
                            <div class="panel" id="tab5">
                                <p>[Need Full Form Here]</p>
                                <?php echo do_shortcode('[contact-form-7 id="174" title="HOW WAS YOUR STAY?"]'); ?>
                            </div>

                            <h3 class="accordion">
                                <a href="#tab6" class="smooth-js" title="">Other inquiries <i class="fa fa-chevron-down"></i></a>
                            </h3>
                            <div class="panel" id="tab6">
                                <div class="content">
                                    <p>[Need Form]</p>
                                </div>
                            </div>

                            <h3 class="accordion">
                                <a href="#tab7" class="smooth-js" title="">Employment opportunities <i class="fa fa-chevron-down"></i></a>
                            </h3>
                            <div class="panel" id="tab7">
                                <p>The Sofia Hotel is committed to world-class customer service for her guests. She understands the value of the professionalism her team provides and is always seeking those qualified individuals that would allow her to continue providing her guests with an unforgettable experience <br>Sorry, no positions open at this time.</p>
                            </div>

                            <h3 class="accordion">
                                <a href="#tab8" class="smooth-js" title="">Cc authorization form <i class="fa fa-chevron-down"></i></a>
                            </h3>
                            <div class="panel" id="tab8">
                                <div class="content">
                                    <p>Please click <a href="https://49zsom4bh6mn310ohh2rfh3z-wpengine.netdna-ssl.com/wp-content/uploads/2018/01/CREDIT-CARD-AUTHORIZATION-Front-desk.doc">HERE</a> for the credit card authorization form.</p>
                                </div>
                            </div>

                            <h3 class="accordion">
                                <a href="#tab9" class="smooth-js" title="">Lost & found <i class="fa fa-chevron-down"></i></a>
                            </h3>
                            <div class="panel" id="tab9">
                                <div class="content">
                                    <p>For items lost within The Sofia Hotel property, please complete the online Lost and Found form. Once you have completed the form, click on the submit button. You will receive a confirmation email that your form has been entered into our system for processing. Upon completion of our investigation for your lost item, a notification email will be sent to you.  Please note that found items are held for 30 days from the date entered into our database.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div id="thank-box" class="container">
                    <div class="bottom-box">
                        <div class="contact-message-box">
                            <p class="contact-message">Let us know how we are doing and what we can do to help you!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-sticky-box">
            <p>To speak with someone please call: 800.826.0009, or fax your inquiries to 619.544.9879</p>
        </div>
    </section>

<?php get_footer(); ?>
