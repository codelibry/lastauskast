<?php
    $image_position = get_sub_field('image_position');
    $image = get_sub_field('image');
    $content = get_sub_field('content');
?>

<?php if ($image && $content) : ?>
    <section class="image-content animate fade-up">
        <div class="container">
            <div class="image-content__wrap">
                <div class="image-content__img <?php echo $image_position === 'right' ? 'image--right' : 'image--left'; ?>">
                    <div class="image-content__img-wrap">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?: $image['title']; ?>">
                    </div>
                </div>
                <div class="image-content__text <?php echo $image_position === 'right' ? 'text--left' : 'text--right'; ?>">
                    <?php echo $content; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
