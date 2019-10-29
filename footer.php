            </div><!-- end div for lace -->
        </div> <!-- end #main-content -->

        <footer class="footer" id="footer">
            <div class="container">
                <?php
                    $logo_url   = get_field('footer_logo', 'option') ? esc_url(get_field('footer_logo', 'option')['url']) : get_bloginfo('template_url').'/img/footer-logo.png';
                    $contacts   = get_field('contacts', 'option');
                    $hha        = get_field('historic_hotels_of_america', 'option');
                    $social     = get_field('social', 'option');
                    $copyright  = get_field('copyright', 'option');

                    if (!empty($contacts) || !empty($historic_hotels_of_america) || !empty($social)) :
                ?>

                <div class="top">
                    <div class="footer-box">
                        <header class="footer-box-header">
                            <div class="footer-box-header-inner">
                                <a href="<?php echo home_url(); ?>" title="<?php echo get_bloginfo('name').' | '.__('Home', 'the-sofia-hotel'); ?>">
                                    <img src="<?php echo $logo_url; ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
                                </a>
                            </div>
                        </header>
                        <?php if ($contacts && ($contacts['toll_free'] || $contacts['address'] || $contacts['email'])) : ?>
                        <ul class="contact-list">
                            <?php if (trim($contacts['toll_free'])) { ?>
                                <li>
                                    <i class="fas fa-mobile-alt"></i>
                                    <p><?php _e('Toll Free:', 'the-sofia-hotel'); ?> <?php echo $contacts['toll_free']; ?></p>
                                </li>
                            <?php }
                            if (trim($contacts['address'])) { ?>
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <p><?php echo $contacts['address']; ?></p>
                                </li>
                            <?php }
                            if (trim($contacts['email'])) { ?>
                                <li>
                                    <i class="far fa-envelope"></i>
                                    <p><?php echo $contacts['email']; ?></p>
                                </li>
                            <?php } ?>
                        </ul>
                        <?php endif; ?>
                    </div>

                    <?php if ($hha && ($hha['img'] || $hha['text'] || $hha['btn']['show'])) : ?>
                    <div class="footer-box">
                        <header class="footer-box-header">
                            <div class="footer-box-header-inner">
                                <?php if ($hha['img']) {
                                    echo "<img src='{$hha['img']['url']}' alt='".esc_attr__('Historic Hotels of America National Trust of Historic Preservation', 'the-sofia-hotel')."'>";
                                } ?>
                            </div>
                        </header>
                        <?php if ($hha['text'] || $hha['btn']['show']) { ?>
                        <div class="footer-box-content">
                            <?php
                                echo $hha['text'];
                                if ($hha['btn']['show'] && $hha['btn']['url']) {
                                    $btn_label  = trim($hha['btn']['label']) ? $hha['btn']['label'] : 'Find Out More >';
                                    $btn_target = $hha['btn']['target'] ? "target='_blank' rel='nofollow noopener'" : "target='_self'";
                                    echo "<a href='".esc_url($hha['btn']['url'])."' class='find-out-more' title='".esc_attr__($btn_label, 'the-sofia-hotel')."' {$btn_target}>".__($btn_label, 'the-sofia-hotel')."</a>";
                                }
                            ?>
                        </div>
                        <?php } ?>
                    </div>
                    <?php endif; ?>

                    <?php if ($social && ($social['facebook'] || $social['twitter'] || $social['instagram'] || $social['yelp'] || $social['tripadvisor'])) : ?>
                    <div class="footer-box">
                        <header class="footer-box-header">
                            <div class="footer-box-header-inner"></div>
                        </header>
                        <ul class="social-list">
                            <?php
                                if ($social['facebook'])
                                    echo "<li><a href='".esc_url($social['facebook'])."' title='Facebook' target='_blank' rel='nofollow noopener'><i class='fab fa-facebook-square'></i><span class=\"sr-only\">Visit our Facebook</span></a></li>";

                                if ($social['twitter'])
                                    echo "<li><a href='".esc_url($social['twitter'])."' title='Twitter' target='_blank' rel='nofollow noopener'><i class='fab fa-twitter'></i><span class=\"sr-only\">Visit our Twitter</span></a></li>";

                                if ($social['instagram'])
                                    echo "<li><a href='".esc_url($social['instagram'])."' title='Instagram' target='_blank' rel='nofollow noopener'><i class='fab fa-instagram'></i><span class=\"sr-only\">Visit our Instagram</span></a></li>";

                                if ($social['yelp'])
                                    echo "<li><a href='".esc_url($social['yelp'])."' title='Yelp' target='_blank' rel='nofollow noopener'><i class='fab fa-yelp'></i><span class=\"sr-only\">Visit our Yelp</span></a></li>";

                                if ($social['tripadvisor'])
                                    echo "<li><a href='".esc_url($social['tripadvisor'])."' title='Trip Advisor' target='_blank' rel='nofollow noopener'><i class='fab fa-tripadvisor'></i><span class=\"sr-only\">Visit our Trip Advisor</span></a></li>";
                            ?>
                        </ul>

                        <?php /*
                        <!--Start Guestfolio Signup Assets-->
                        <script src="https://guestfolio.net/assets/embedded.js" type="text/javascript"></script>
                        <!--End Guestfolio Signup Assets-->

                        <div class="twelve columns">
                            <form action="https://guestfolio.net/subscriptions/signup" method="post" id="guestfolio"><input type="text" id="website-url" name="website_url" value="" style="position: absolute;left: -999em;"><input type="hidden" id="hotel" name="hotel" value="OTA1"><div id="first-name-row" class="row">
                                    <div class="four columns"><label for="first-name">First name:</label></div>
                                    <div class="eight columns"><input type="text" id="first-name" name="subscriber[first_name]" value="" class="input-text" placeholder="First name"></div>
                                </div><div id="last-name-row" class="row">
                                    <div class="four columns"><label for="last-name">Last name:</label></div>
                                    <div class="eight columns"><input type="text" id="last-name" name="subscriber[last_name]" value="" class="input-text" placeholder="Last name"></div>
                                </div><div id="email-address-row" class="row">
                                    <div class="four columns"><label for="email">Email:</label></div>
                                    <div class="eight columns"><input type="email" id="email" name="subscriber[email]" value="" required="required" class="email input-text" placeholder="email@example.com"></div>
                                </div><input type="submit" id="submit" name="submit" class="small radius white button" value="Submit"></form>
                        </div>
                    <!--End Guestfolio Signup Form--> */ ?>
                    </div>
                    <?php endif; ?>
                </div>
                <?php endif; ?>

                <div class="bottom">
                    <?php if (has_nav_menu('footer-menu')) { ?>
                        <nav class="footer-menu">
                            <ul>
                                <?php
                                wp_nav_menu(array(
                                    'theme_location'  => 'footer-menu',
                                    'menu'            => 'Footer Menu',
                                    'container'       => false,
                                    'items_wrap'      => '%3$s',
                                    'depth'           => 1
                                ));
                                ?>
                            </ul>
                        </nav>
                    <?php } ?>

                    <div class="copyright">
                        <?php
                        if (trim($copyright)) :
                            echo "<p>{$copyright}</p>";
                        else :
                            echo "<p>&copy; 2019";
                            if (date('Y') != 2019)
                                echo '&ndash;'.date('Y');
                            echo " ".get_bloginfo('name')."</p>";
                        endif;
                        ?>
                    </div>
                </div>

            </div>
        </footer>
    </div>

    <?php wp_footer(); ?>
</body>
</html>