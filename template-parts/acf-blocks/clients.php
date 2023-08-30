<?php
    $clients_title = get_sub_field('clients_title');
    $clients_posts = get_sub_field('clients_posts');
?>

<?php if ($clients_posts) : ?>
    <section class="clients">
        <?php if ($clients_title) : ?>
            <div class="clients__title">
                <?php echo $clients_title; ?>
            </div>
        <?php endif; ?>
        <div class="container">
            <div class="clients__wrap">
                <div class="clients__list">
                    <?php foreach ($clients_posts as $post) : ?>
                        <?php setup_postdata($post); ?>
                        <?php get_template_part('template-parts/feed/card', 'clients'); ?>
                        <?php wp_reset_postdata(); ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
