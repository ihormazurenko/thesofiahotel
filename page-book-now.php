<?php
/**
 * Template Name: Book Now
 */
get_header(); ?>

    <section class="section-contact-us hero full">
        <div class="hero-img" style="background-image: url(<?php echo get_bloginfo('template_url'); ?>/img/book_header_bg.jpg);"></div>
        <div class="hero-vertical-align">
            <div class="hero-box">
                <div class="container">
                    <div class="top-link-box">
                        <form action="https://gc.synxis.com/rez.aspx?" method="get">
                            <ul class="hero-links">
                                <li>
                                    <label for="check-in" class="link-sub-title"><?php _e('Check in date', 'the-sofia-hotel'); ?></label>
                                    <input type="text" id="check-in" name="arrive" class="btn transparent btn-datepicker" value="<?php echo date('F d'); ?>" tabindex="-1" aria-haspopup="true" aria-owns="ui-datepicker-div">
                                </li>
                                <li>
                                    <label for="check-out" class="link-sub-title"><?php _e('Check out date', 'the-sofia-hotel'); ?></label>
                                    <input type="text" id="check-out" name="depart" class="btn transparent btn-datepicker" value="<?php echo date('F d', strtotime("+7 day", strtotime(date('F d')))); ?>" tabindex="-1" aria-haspopup="true" aria-owns="ui-datepicker-div">
                                </li>
                                <li>
                                    <button type="submit" class="btn" title="<?php esc_attr_e('Find Rooms', 'the-sofia-hotel'); ?>"><?php _e('Find Rooms', 'the-sofia-hotel'); ?></button>
                                </li>
                            </ul>
                            <div class="sr-only" id="datepickerMessage" role="log" aria-live="assertive" aria-atomic="true" aria-relevant="additions"></div>

                            <input name="Hotel" type="hidden" value="80547">
                            <input name="Chain" type="hidden" value="17448">
                            <input name="template" type="hidden" value="RBE">
                            <input name="shell" type="hidden" value="RBE">
                        </form>
                    </div>

                    <div class="content-box">
                        <h1 class="section-title">Book with us</h1>
                        <div class="content">
                            <p>Sofia guarantees that you won’t find a better price on her rooms. Available only at thesofiahotel.com</p>
                        </div>
                    </div>

                    <div class="interesting-link-box">
                        <ul class="interesting-link-list">
                            <li>
                                <a href="#" title="Reserve a table - Currant brasserie">
                                    <span class="link-sub-title">Reserve a table</span>
                                    Currant brasserie
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Book a treatment - Sofia SPA">
                                    <span class="link-sub-title">Book a treatment</span>
                                    Sofia SPA
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Bundle and save - Packages">
                                    <span class="link-sub-title">Bundle and save</span>
                                    Packages
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="subscribe-box">
                        <script src="https://guestfolio.net/assets/embedded.js" type="text/javascript"></script>

                        <form action="https://guestfolio.net/subscriptions/signup" method="post" id="guestfolio">
                            <input type="text" id="website-url" name="website_url" value="" style="display: none;">
                            <input type="hidden" id="hotel" name="hotel" value="OTA1">

                            <ul class="subscribe-form-list">
                                <li>
                                    <h3 class="subscribe-title"><?php _e('Sofia incentives', 'the-sofia-hotel'); ?></h3>
                                </li>
                                <li>
                                    <span class="sr-only"><?php _e('* indicates a required field', 'the-sofia-hotel'); ?></span>
                                    <div class="input-row">
                                        <label for="first-name" class=""><?php _e('First name', 'the-sofia-hotel'); ?></label>
                                        <input type="text" id="first-name" name="subscriber[first_name]" value="" class="input-style" >
                                    </div>
                                    <div class="input-row">
                                        <label for="last-name" class=""><?php _e('Last name', 'the-sofia-hotel'); ?></label>
                                        <input type="text" id="last-name" name="subscriber[last_name]" value="" class="input-style" >
                                    </div>
                                    <div class="input-row">
                                        <label for="email" class=""><?php _e('Email', 'the-sofia-hotel'); ?> (required)</label>
                                        <input type="email" id="email" name="subscriber[email]" value="" required="required" class="input-style" >
                                    </div>
                                </li>
                                <li>
                                    <input type="submit" id="submit" name="submit" class="btn transparent" value="<?php esc_attr_e('Subscribe', 'the-sofia-hotel'); ?>">
                                </li>
                            </ul>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
