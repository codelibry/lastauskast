<?php $cookies_overlay_text = get_field('cookies_overlay_text', 'option'); ?>

<div class="cookies--overlay">
    <div class="cookies--overlay__wrap">
        <div class="cookies--overlay__text">
            <?php echo $cookies_overlay_text ? : 'Cookies are not accepted';?>
        </div>
    </div>
</div>
