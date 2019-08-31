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
                                    <label for="check-in" class="link-sub-title">Check in date</label>
                                    <input type="text" id="check-in" name="arrive" class="btn transparent" value="<?php echo date('F d'); ?>">
                                </li>
                                <li>
                                    <label for="check-out" class="link-sub-title">Check out date</label>
                                    <input type="text" id="check-out" name="depart" class="btn transparent" value="<?php echo date('F d', strtotime("+7 day", strtotime(date('F d')))); ?>">
                                </li>
                                <li>
                                    <button type="submit" class="btn" title="Find Rooms">Find Rooms</button>
                                </li>
                            </ul>
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
                        <ul class="subscribe-form-list">
                            <li>
                                <h3 class="subscribe-title">Sofia incentives</h3>
                            </li>
                            <li>
                                <input type="email" placeholder="ENTER EMAIL" class="input-style">
                            </li>
                            <li>
                                <input type="submit" class="btn transparent" value="Subscribe">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
