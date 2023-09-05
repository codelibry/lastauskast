<?php
    $background_color = get_sub_field('background_color');
    $text_color = get_sub_field('text_color');
    $image_position = get_sub_field('image_position');
    $image = get_sub_field('image');
    $text = get_sub_field('text');
?>

<?php if ($image && $text) : ?>
    <section class="image-text" style="background-color: <?php echo $background_color; ?>">
        <div class="container--full">
            <div class="image-text__wrap">
                <div class="image-text__img <?php echo $image_position === 'right' ? 'image--right' : 'image--left'; ?>">
                    <div class="image-text__img-wrap">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?: $image['title']; ?>">
                    </div>
                </div>
                <div class="image-text__text <?php echo $image_position === 'right' ? 'text--left' : 'text--right'; ?>"
                     style="color: <?php echo $text_color ?: '#384a4c'; ?>">
                    <?php echo $text; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>