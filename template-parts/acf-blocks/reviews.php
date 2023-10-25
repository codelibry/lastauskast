<?php
    $reviews_title = get_sub_field('reviews_title');

    $reviews_list = get_posts([
      'post_type' => 'reviews',
      'posts_per_page' => -1
    ]);
?>

<?php if ($reviews_list) : ?>
    <section class="reviews">
        <?php if ($reviews_title) : ?>
            <div class="container">
                <div class="reviews__title h4 animate fade-in">
                    <?php echo $reviews_title; ?>
                    <a href="#" class="reviews__button button button--dark button--sm animate fade-in">
                        All Reviews
                    </a>
                </div>
            </div>
        <?php endif; ?>
        <div class="container">
            <div class="reviews__wrap animate fade-up">
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
