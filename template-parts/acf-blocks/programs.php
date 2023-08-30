<?php
    $programs_title = get_sub_field('programs_title');
    $programs_posts = get_sub_field('programs_posts');
?>

<?php if ($programs_posts) : ?>
    <section class="programs">
        <?php if($programs_title) :?>
            <div class="programs__title">
                <?php echo $programs_title;?>
            </div>
        <?php endif; ?>
        <div class="container">
            <div class="programs__wrap">
                <div class="programs__list">
                    <?php foreach($programs_posts as $post) :?>
                        <?php setup_postdata($post);?>
                        <?php get_template_part('template-parts/feed/card', 'programs');?>
                        <?php wp_reset_postdata();?>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
