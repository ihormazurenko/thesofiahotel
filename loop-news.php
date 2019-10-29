<?php
    $logo       = get_field('logo');
    $details    = get_field('details');
    $button     = get_field('button');
    $title  = strip_tags(get_the_title());

    if ($details && is_array($details)) {
        $desc = trim($details['desc']);
        $date = $details['date'];
    } else {
        $desc = $date = false;
    }

    $btn = (is_array($button) && trim($button['url'])) ? true : false;

    if ($title || $desc || $date || $btn) {
?>
    <li>
        <div class="service-box">
            <div class="title-box">
            <?php
                if ($logo) {
                    echo "<span class='service-logo-box'>" .
                            wp_get_attachment_image($logo['id'], 'medium', false, array('alt' => esc_attr($logo['alt']) ))
                        . "</span>";
                }
            ?>
            </div>

            <?php if ($desc || $title) { ?>
                <div class="service-desc">
                    <div class="content"><?php echo ($desc) ? $desc : '"' . $title . '"'; ?></div>
                </div>
                
            <?php } ?>

            <?php if ($date) { ?>
                <ul class="price-list">
                    <li>
                        <div class="price-box"><?php echo date_format(date_create($date),"F Y"); ?></div>
                    </li>
                </ul>
            <?php } ?>

            <?php if ($btn && $button['target']) {
                $label  = trim($button['label']) ? $button['label'] : __('Read More', 'the-sofia-hotel');
                $target = $button['target'] ? 'target="_blank" rel="nofollow noopener"' : 'target="_self"';

                echo "<a href='" . esc_url($button['url']) . "' title='" . strip_tags(esc_attr($label)) . "' class='btn' {$target}>{$label}</a>";
            } ?>
        </div>
    </li>
<?php } ?>