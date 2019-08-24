<?php
/**
 * Template Name: Specials
*/
get_header(); ?>

    <?php get_template_part('inc/hero'); ?>

    <section class="section-blog color-gold">
        <div class="container">
            <ul class="blog-list">
                <li>
                    <div class="two-column-box">
                        <div class="column image">
                            <a href="#" title="Craft Beer Tour">
                                <div class="inner-box">
                                    <div class="img-wrap ">
                                        <img src="https://acsdm.com/thesofiahotel/wp-content/themes/the-sofia-hotel/img/special_craft_beer.jpg" alt="">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="column text">
                            <div class="inner-box">
                                <div class="section-title-box">
                                    <a href="#" title="Craft Beer Tour">
                                        <h2 class="section-title">Craft Beer Tour</h2>
                                    </a>
                                </div>
                                <div class="content-box">
                                    <div class="content">
                                        <p>When you’re in the craft brew capital of America, you’ve got to check out the scene. What better way than on a guided tour with San Diego Beer Tour.</p>
                                    </div>
                                </div>
                                <ul class="link-list">
                                    <li>
                                        <a href="#" class="btn" title="CRAFT BEER TOUR">CRAFT BEER TOUR</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="two-column-box">
                        <div class="column image">
                            <a href="#" title="Dinning Cruise Package">
                                <div class="inner-box">
                                    <div class="img-wrap ">
                                        <img src="https://acsdm.com/thesofiahotel/wp-content/themes/the-sofia-hotel/img/special_2.jpg" alt="">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="column text">
                            <div class="inner-box">
                                <div class="section-title-box">
                                    <a href="#" title="Dinning Cruise Package">
                                        <h2 class="section-title">Dinning Cruise Package</h2>
                                    </a>
                                </div>
                                <div class="content-box">
                                    <div class="content">
                                        <p>One of the best ways to see the spectacular skyline of downtown San Diego is via a sightseeing or dinner cruise.</p>
                                    </div>
                                </div>
                                <ul class="link-list">
                                    <li>
                                        <a href="#" class="btn" title="CRUISE PACKAGE">CRUISE PACKAGE</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="two-column-box">
                        <div class="column image">
                            <a href="#" title="Lions, Tigers and Dolphins">
                                <div class="inner-box">
                                    <div class="img-wrap ">
                                        <img src="https://acsdm.com/thesofiahotel/wp-content/themes/the-sofia-hotel/img/special_3.jpg" alt="">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="column text">
                            <div class="inner-box">
                                <div class="section-title-box">
                                    <a href="#" title="Lions, Tigers and Dolphins">
                                        <h2 class="section-title">Lions, Tigers and Dolphins</h2>
                                    </a>
                                </div>
                                <div class="content-box">
                                    <div class="content">
                                        <p>From the USS Midway tour to Sea World and the world-famous San Diego Zoo, there is a tour package for you. </p>
                                    </div>
                                </div>
                                <ul class="link-list">
                                    <li>
                                        <a href="#" class="btn" title="SIGHTSEEING PACKAGE">SIGHTSEEING PACKAGE</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

<?php  /*
    <div class="content-wrap">
		<div class="content">
			<?php global $wp_query;

                $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                $args = array(
                    'post_type'     => 'post',
                    'post_status'   => 'publish',
                    'orderby'       => 'date',
                    'order'         => 'DESC',
                    'paged'         => $paged,
                );
                $new_query = new WP_Query( $args );

                if ( $new_query->have_posts() ) : while ( $new_query->have_posts() ) : $new_query->the_post();
            ?>
				<?php get_template_part('loop', 'post'); ?>

			<?php endwhile; ?>

                <?php wp_pagenavi( array( 'query' => $new_query ) ); ?>

            <?php else: echo "<p class='no-results'>".__('Sorry, no articles found...')."</p>"; 
                endif; wp_reset_query(); ?>
			 
		</div><!--/content-->	

		<?php get_sidebar(); ?>

	</div><!--/content-wrap-->
*/ ?>
<?php get_footer(); ?>