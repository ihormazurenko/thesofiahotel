<?php 
    $title  = strip_tags(get_the_title());
    $url    = esc_url(get_the_permalink());
?>

<li>
    <div class="two-column-box">
        <?php if( has_post_thumbnail() ) : ?>
            <div class="column image">
                <a href="<?php echo $url; ?>" title="<?php echo esc_attr($title); ?>">
                    <div class="inner-box">
                        <div class="img-wrap">
                            <?php echo wp_get_attachment_image(get_post_thumbnail_id(), 'large', false, array('alt' => esc_attr($title))); ?>
                        </div>
                    </div>
                </a>
            </div>
        <?php endif; ?>

        <div class="column text">
            <div class="inner-box">
                <div class="section-title-box">
                    <a href="<?php echo $url; ?>" title="<?php echo esc_attr($title); ?>">
                        <h2 class="section-title"><?php echo $title; ?></h2>
                    </a>
                    <span class="date-box"><?php the_time(get_option('date_format')); ?></span>
                </div>
                <div class="content-box">
                    <div class="content">
                        <?php the_excerpt(); ?>
                    </div>
                </div>
                <ul class="link-list">
                    <li>
                        <a href="<?php echo $url; ?>" class="btn grey" title="<?php esc_attr_e('Read More', 'the-sofia-hotel'); ?>"><?php _e('Read More', 'the-sofia-hotel'); ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</li>