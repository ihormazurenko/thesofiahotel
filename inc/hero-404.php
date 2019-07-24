<?php
    $title = '404';
    $content = __('Page not found', 'the-sofia-hotel');
?>
<div class="hero full">
    <?php if ($bg) : ?>
        <div class="hero-img<?php echo $overlay; ?>" style="background-image: url(<?php echo esc_url($bg['url']); ?>);"></div>
    <?php endif; ?>

    <div class="hero-vertical-align">
        <div class="hero-box">
            <div class="container">
                <?php if ($title) : ?>
                    <header>
                        <h1><?php echo $title; ?></h1>
                    </header>
                <?php endif; ?>

                <?php if ($content) : ?>
                    <div class="hero-content"><?php echo $content; ?></div>
                <?php endif; ?>
            </div>
        </div>
    </div>

</div>