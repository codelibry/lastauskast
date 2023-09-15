<?php
    $video_blogs_title = get_sub_field('video_blogs_title');
    $video_blogs_posts = get_sub_field('video_blogs_posts');
?>

<?php if ($video_blogs_posts) : ?>
    <section class="video-blogs">
        <?php if ($video_blogs_title) : ?>
            <div class="video-blogs__title h4 animate fade-in">
                <?php echo $video_blogs_title; ?>
            </div>
        <?php endif; ?>
        <div class="container">
            <div class="video-blogs__wrap animate fade-up">
                <div class="video-blogs__list">
                    <?php foreach ($video_blogs_posts as $post) : ?>
                        <?php setup_postdata($post); ?>
                        <?php get_template_part('template-parts/feed/card', 'blogs'); ?>
                        <?php wp_reset_postdata(); ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
