<?php
    $background_color = get_sub_field('background_color');
    $text_color = get_sub_field('text_color');
    $image_position = get_sub_field('image_position');
    $image = get_sub_field('image');
    $text_slider = get_sub_field('text_slider');
?>

<?php if ($image && $text_slider) : ?>
    <section class="image-text animate fade-up" style="background-color: <?php echo $background_color; ?>">
        <div class="container--full">
            <div class="image-text__wrap">
                <div class="image-text__img <?php echo $image_position === 'right' ? 'image--right' : 'image--left'; ?>">
                <!-- removed class to img-wrap part-100vh -->
                    <div class="image-text__img-wrap">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?: $image['title']; ?>">
                    </div>
                </div>
                <div class="image-text__text <?php echo $image_position === 'right' ? 'text--left' : 'text--right'; ?>"
                     style="color: <?php echo $text_color ?: '#384a4c'; ?>">
                    <div class="js-text-fast-slider">
                        <?php foreach ($text_slider as $slide) : ?>
                            <?php $text = $slide['text']; ?>
                            <div class="slider-item"><?php echo $text; ?></div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>