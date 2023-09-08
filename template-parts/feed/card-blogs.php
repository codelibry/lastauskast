<?php
    $title = get_the_title(get_the_ID());
    $permalink = get_the_permalink(get_the_ID());
    $thumbnail_url = get_the_post_thumbnail_url(get_the_ID());
    $thumbnail_caption = get_the_post_thumbnail_caption(get_the_ID()) ?: get_the_title(get_the_ID());
    
    $terms = wp_get_post_terms(get_the_ID(), 'blog_category');
?>

<div class="card-blogs card-blogs-<?php echo $terms[0]->slug;?>">
    <a href="<?php echo $permalink; ?>">
        <div class="card-blogs__wrap">
            <?php if ($title) : ?>
                <div class="card-blogs__title">
                    <?php echo $title; ?>
                </div>
            <?php endif; ?>
            <?php if ($thumbnail_url) : ?>
                <div class="card-blogs__img">
                    <div class="blog--icon">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/play_icon.svg';?>" alt="play-icon">
                    </div>
                    <img src="<?php echo $thumbnail_url; ?>" alt="<?php echo $thumbnail_caption; ?>" class="blog--image">
                </div>
            <?php endif; ?>
        </div>
    </a>
</div>