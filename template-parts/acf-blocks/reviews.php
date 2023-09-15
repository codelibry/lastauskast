<?php
    $reviews_title = get_sub_field('reviews_title');
    $reviews_list = get_sub_field('reviews_list');
?>

<?php if ($reviews_list) : ?>
    <section class="reviews">
        <?php if ($reviews_title) : ?>
            <div class="reviews__title h4">
                <?php echo $reviews_title; ?>
            </div>
        <?php endif; ?>
        <div class="container">
            <div class="reviews__wrap">
                <div class="reviews__list js-slider">
                    <?php foreach ($reviews_list as $review) : ?>
                        <?php get_template_part('template-parts/feed/card', 'reviews', [
                            'item' => $review
                        ]); ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
