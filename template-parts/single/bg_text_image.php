<?php
    $featured_blocks = get_field('featured_blocks');
?>

<?php if ($featured_blocks) : ?>
    <?php foreach ($featured_blocks as $block) : ?>
        
        <?php
        $background_color = $block['background_color'];
        $text_color = $block['text_color'];
        $image_position = $block['image_position'];
        $image = $block['image'];
        $text = $block['text'];
        ?>
        
        <section class="bg-text-image" style="background-color: <?php echo $background_color; ?>">
            <div class="container--full">
                <div class="bg-text-image__wrap">
                    <?php if ($image) : ?>
                        <div class="bg-text-image__img <?php echo $image_position === 'right' ? 'image--right' : 'image--left'; ?>">
                            <div class="bg-text-image__img-wrap">
                                <img src="<?php echo $image['url']; ?>"
                                     alt="<?php echo $image['alt'] ?: $image['title']; ?>">
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if ($text) : ?>
                        <div class="bg-text-image__text <?php echo $image_position === 'right' ? 'text--left' : 'text--right'; ?>"
                             style="color: <?php echo $text_color ?: '#384a4c'; ?>">
                            <?php echo $text; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    <?php endforeach; ?>
<?php endif; ?>