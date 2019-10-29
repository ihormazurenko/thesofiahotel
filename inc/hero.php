<?php
    $hero       = get_field('hero') ? get_field('hero')[0] : [];

    if ($hero) {
        $title      = trim($hero['title']) ? $hero['title'] : '';
        $content    = trim($hero['content']) ? $hero['content'] : '';
        $buttons    = !empty($hero['buttons']) && $hero['buttons']['show_btn'] ? $hero['buttons']['array'] : [];

        if (!$title && !$content && empty($buttons)) {
            $title  = get_the_title();
        }

        $bg         = !empty($hero['bg']) ? $hero['bg']['url'] : '';
        $overlay    = $hero['overlay'] ? ' overlay black' : '';
        $full       = $hero['full'] ? ' full' : '';
    } else {
        $title      = get_the_title();
    }

    if (is_single() && !$bg && has_post_thumbnail()) {
        $bg         = get_the_post_thumbnail_url(get_the_ID(), 'full');
        $overlay    = ' overlay black';
    }
?>
<div class="hero<?php echo $full; ?>">
    <?php if ($bg) : ?>
        <div class="hero-img<?php echo $overlay; ?>" style="background-image: url(<?php echo esc_url($bg); ?>);"></div>
    <?php endif; ?>

    <div class="hero-vertical-align">
        <div class="hero-box">
            <div class="container">
                <?php if ($title) : ?>
                    <header>
                        <h1><?php echo $title; ?></h1>
                    </header>
                <?php else :
                    the_title('<h1 class="sr-only">', '</h1>');
                endif; ?>

                <?php if ($content) :
                    $content_class = $hero['content_wide'] ? ' wide' : '';
                ?>
                    <div class="hero-content<?php echo $content_class; ?>"><?php echo $content; ?></div>
                <?php endif; ?>

                <?php if (!empty($buttons) && count($buttons) > 0) : ?>
                    <ul class="hero-links">
                        <?php foreach ($buttons as $btn) :
                            if (trim($btn['url'])) {
                                $url = esc_url($btn['url']);
                            } else { continue; }

                            $label  = trim($btn['label']) ? $btn['label'] : __('Read More', 'the-sofia-hotel');
                            $target = $btn['target'] ? 'target="_blank" rel="nofollow noopener"' : 'target="_self"';
                        ?>
                            <li>
                                <a href="<?php echo $url; ?>" class="btn" title="<?php echo strip_tags(esc_attr($label)); ?>" <?php echo $target; ?>><?php echo $label; ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <?php if ($full && !is_404()) : ?>
        <div class="scroll-box">
            <span><?php _e('Enjoy More', 'the-sofia-hotel'); ?></span>
            <a href="#content" class="scroll-link smooth-js" title="<?php esc_attr_e('Enjoy More', 'the-sofia-hotel'); ?>">
                <img src="<?php echo get_bloginfo('template_url'); ?>/img/click-arrow.svg" alt="Scroll down to learn more">
            </a>
        </div>
    <?php endif; ?>

</div>

<div class="lace-curtain" id="content">