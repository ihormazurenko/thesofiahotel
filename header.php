<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="wrapper">
        <a class="btn btn-jump-to-content smooth-scroll" href="#main-content" title="<?php esc_attr_e('Skip Navigation', 'the-sofia-hotel'); ?>"><?php _e('Skip Navigation', 'the-sofia-hotel'); ?></a>

        <header class="header" id="header">
            <div class="container">
                <div class="logo">
                    <a href="<?php echo home_url(); ?>" title="<?php echo get_bloginfo('name').' | '.__('Home', 'the-sofia-hotel'); ?>">
                        <img src="<?php echo get_bloginfo('template_url'); ?>/img/logo.svg" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
                    </a>
                </div>

                <a href="#" title="<?php esc_attr_e('Navigation Menu', 'the-sofia-hotel') ?>" class="menu-toggle">
                    <span></span>
                </a>

                <div class="weather-box">65◦C<span class="icon">&#x26C5;</span></div>

                <a href="#" class="btn btn-sm btn-find-rooms" title="<?php _e('Find Rooms', 'the-sofia-hotel'); ?>"><?php _e('Find Rooms', 'the-sofia-hotel'); ?></a>
            </div>
        </header>

        <div id="main-content">
