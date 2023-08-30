<?php
    $title = get_the_title();
    $permalink = get_the_permalink();
    $thumbnail_url = get_the_post_thumbnail_url();
    $thumbnail_caption = get_the_post_thumbnail_caption() ?: get_the_title();
?>

<div class="card-video-blogs">
    <a href="<?php echo $permalink; ?>">
        <div class="card-video-blogs__wrap">
            <?php if ($title) : ?>
                <div class="card-video-blogs__title">
                    <?php echo $title; ?>
                </div>
            <?php endif; ?>
            <?php if ($thumbnail_url) : ?>
                <div class="card-video-blogs__img">
                    <img src="<?php echo $thumbnail_url; ?>" alt="<?php echo $thumbnail_caption; ?>">
                </div>
            <?php endif; ?>
        </div>
    </a>
</div>