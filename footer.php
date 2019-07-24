            </div><!-- end div for lace -->
        </div> <!-- end #main-content -->

        <footer class="footer" id="footer">
            <div class="container">

                <div class="top">
                    <div class="footer-box">
                        <header class="footer-box-header">
                            <div class="footer-box-header-inner">
                                <a href="<?php echo home_url(); ?>" title="<?php echo get_bloginfo('name').' | '.__('Home', 'the-sofia-hotel'); ?>">
                                    <img src="<?php echo get_bloginfo('template_url'); ?>/img/footer-logo.png" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
                                </a>
                            </div>
                        </header>
                        <ul class="contact-list">
                            <li>
                                <i class="fas fa-mobile-alt"></i>
                                <p>Toll Free: <a href="tel:+18008260009" title="<?php echo esc_attr('800.826.0009'); ?>">800.826.0009</a></p>
                            </li>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <p>150 West Broadway,<br> San Diego, CA 92101</p>
                            </li>
                            <li>
                                <i class="far fa-envelope"></i>
                                <p><a href="mailto:info@thesofiahotel.com" title="<?php echo esc_attr('info@thesofiahotel.com'); ?>">info@thesofiahotel.com</a></p>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-box">
                        <header class="footer-box-header">
                            <div class="footer-box-header-inner">
                                <img src="<?php echo get_bloginfo('template_url'); ?>/img/historic-hotels-of-america.png" alt="<?php esc_attr_e('Historic Hotels of America', 'the-sofia-hotel'); ?>">
                            </div>
                        </header>
                        <div class="footer-box-content">
                            <p>The Sofia Hotel is a proud member of the National Trust Historic Hotels of America. Find out more on our History page.</p>
                            <a href="#" class="find-out-more" title="<?php esc_attr_e('Find Out More', 'the-sofia-hotel'); ?>"><?php _e('Find Out More >', 'the-sofia-hotel'); ?></a>
                        </div>
                    </div>
                    <div class="footer-box">
                        <header class="footer-box-header">
                            <div class="footer-box-header-inner"></div>
                        </header>
                        <ul class="social-list">
                            <li><a href="#" title="Facebook" target="_blank" rel="nofollow noopener"><i class="fab fa-facebook-square"></i></a></li>
                            <li><a href="#" title="Twitter" target="_blank" rel="nofollow noopener"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" title="Instagram" target="_blank" rel="nofollow noopener"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#" title="Yelp" target="_blank" rel="nofollow noopener"><i class="fab fa-yelp"></i></a></li>
                            <li><a href="#" title="TripAdvisor" target="_blank" rel="nofollow noopener"><i class="fab fa-tripadvisor"></i></a></li>
                        </ul>
                    </div>
                </div>

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
                        <p>&copy; 2019<?php if(date('Y') != 2019) echo '&ndash;'.date('Y'); ?> <?php bloginfo('name'); ?></p>
                    </div>
                </div>

            </div>
        </footer>
    </div>

    <?php wp_footer(); ?>
</body>
</html>