<?php
/**
 * Template Name: Contact Us
 */
get_header(); 

?>




    <section class="section-contact-us hero full">
        <div class="hero-vertical-align">
            <div class="hero-box">
                <div id="form-box" class="container">
                    <div class="top-box">
                        <div class="contact-message-box">
                            <h1 class="contact-message"><?php the_field('contact_page_title'); ?></h1>
                        </div>
                    </div>
                    <div class="bottom-box">
                        <div class="accordion-box" id="accordion-box">
                            <?php
                                if (have_rows('contact_accordions')) :

                                    $index = 0;

                                    while( have_rows('contact_accordions') ): the_row();

                                    $label = get_sub_field('accordion_label');
                                    $title = get_sub_field('contact_title');
                                    $content = get_sub_field('contact_content');
                                    $form = get_sub_field('form_shortcode');
                            ?>

                                <div class="accordion">
                                    <a href="#tab<?php print $index; ?>" id="tabLabel<?php print $index; ?>" class="smooth-accordion-js" aria-expanded="false" aria-controls="tab<?php print $index; ?>"  title=""><?php print $label; ?> <i class="fa fa-chevron-down"></i></a>
                                </div>
                                <div class="panel" id="tab<?php print $index; ?>"  aria-hidden="true" aria-labelledby="tabLabel<?php print $index; ?>" data-parent="#accordion-box">
                                    <div class="<?php print ($form) ? '' : 'content'; ?>">
                                        <h4><?php print $title; ?></h4>
                                        <?php print $content; ?>
                                        
                                        <?php
                                            if($form): 
                                                echo do_shortcode($form); 
                                            endif; ?>
                                    </div>
                                </div>

                            <?php
                                $index++;
                                endwhile; 
                            endif; ?>
                            
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
            <p><?php the_field('contact_bottom_text'); ?></p>
        </div>
    </section>

<?php get_footer(); ?>
