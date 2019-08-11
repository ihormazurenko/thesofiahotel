<?php
/**
 * Template Name: Blog
 */
get_header(); ?>

    <?php get_template_part('inc/hero'); ?>

    <section class="section-blog">
        <div class="container">
            <?php global $wp_query;

            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            $args = array(
                'post_type'     => 'post',
                'post_status'   => 'publish',
                'orderby'       => 'date',
                'order'         => 'DESC',
                'posts_per_page'=> 3,
                'paged'         => $paged,
            );
            $new_query = new WP_Query( $args );

            if ( $new_query->have_posts() ) : while ( $new_query->have_posts() ) : $new_query->the_post();
                ?>
                <?php //get_template_part('loop', 'post'); ?>

            <?php endwhile; ?>

                <?php //wp_pagenavi( array( 'query' => $new_query ) ); ?>

            <?php else: echo "<p class='no-results'>".__('Sorry, no posts found...', 'the-sofia-hotel')."</p>";
            endif; wp_reset_query(); ?>
            <ul class="blog-list">
                <li>
                    <div class="two-column-box">
                        <div class="column image">
                            <a href="#" title="Mark the 4th of July in America’s Finest City">
                                <div class="inner-box">
                                    <div class="img-wrap ">
                                        <img src="https://acsdm.com/thesofiahotel/wp-content/themes/the-sofia-hotel/img/blog_1.jpg" alt="">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="column text">
                            <div class="inner-box">
                                <div class="section-title-box">
                                    <a href="#" title="Mark the 4th of July in America’s Finest City">
                                        <h2 class="section-title">Mark the 4th of July in America’s Finest City</h2>
                                    </a>
                                    <a href="#" class="date-box">July 1st, 2019</a>
                                </div>
                                <div class="content-box">
                                    <div class="content">
                                        <p>San Diego will be observing the 243rd birthday of the old Stars and
                                            Stripes with plenty of revelry and skyrocketing flair, and you can
                                            enjoy the festivities to the fullest with a guest room here at the
                                            Sofia Hotel on West Broadway!</p>
                                    </div>
                                </div>
                                <ul class="link-list">
                                    <li>
                                        <a href="#" class="btn grey" title="Read More">Read More</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="two-column-box">
                        <div class="column image">
                            <a href="#" title="A Long-Running San Diego Tradition">
                                <div class="inner-box">
                                    <div class="img-wrap ">
                                        <img src="https://acsdm.com/thesofiahotel/wp-content/themes/the-sofia-hotel/img/blog_2.jpg" alt="">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="column text">
                            <div class="inner-box">
                                <div class="section-title-box">
                                    <a href="#" title="A Long-Running San Diego Tradition">
                                        <h2 class="section-title">A Long-Running San Diego Tradition</h2>
                                    </a>
                                    <a href="#" class="date-box">July 20th, 2019</a>
                                </div>
                                <div class="content-box">
                                    <div class="content">
                                        <p>Watch Law Enforcement Officers & Firefighters From Across the Country
                                            Square Off in Everything From Paintball to Archery at the U.S.
                                            Police & Fire... </p>
                                    </div>
                                </div>
                                <ul class="link-list">
                                    <li>
                                        <a href="#" class="btn grey" title="Read More">Read More</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="two-column-box">
                        <div class="column image">
                            <a href="#" title="Take an Epicurean Safari Through the Gaslamp Quarter">
                                <div class="inner-box">
                                    <div class="img-wrap ">
                                        <img src="https://acsdm.com/thesofiahotel/wp-content/themes/the-sofia-hotel/img/blog_3.jpg" alt="">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="column text">
                            <div class="inner-box">
                                <div class="section-title-box">
                                    <a href="#" title="Take an Epicurean Safari Through the Gaslamp Quarter">
                                        <h2 class="section-title">Take an Epicurean Safari Through the Gaslamp Quarter</h2>
                                    </a>
                                    <a href="#" class="date-box">July 1st, 2019</a>
                                </div>
                                <div class="content-box">
                                    <div class="content">
                                        <p>San Diego Bay’s a vision of beauty anytime, but it’s about to get
                                            downright dramatic overhead...</p>
                                    </div>
                                </div>
                                <ul class="link-list">
                                    <li>
                                        <a href="#" class="btn grey" title="Read More">Read More</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>

            <?php get_template_part('inc/load-more'); ?>
        </div>
    </section>

<?php get_footer(); ?>