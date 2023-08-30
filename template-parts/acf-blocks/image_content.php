<?php
    $image = get_sub_field('image');
    $content = get_sub_field('content');
?>

<?php if ($image && $content) : ?>
    <section class="image-content">
        <div class="container--full">
            <div class="image-content__wrap">
                <div class="image-content__img">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?: $image['title']; ?>">
                </div>
                <div class="image-content__text">
                    <?php echo $content;?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
