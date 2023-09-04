<?php get_header(); ?>

<?php
    $post_type = get_post_type(get_the_ID());
    
    $args = [
        'post_type' => $post_type,
        'posts_per_page' => -1,
        'order' => 'ASC'
    ];
    
    $query = new WP_Query($args);
?>

<?php if($query->have_posts()) :?>
    <section class="archive archive--programs">
        <div class="container">
            <div class="archive__wrap">
                <?php while($query->have_posts()) : $query->the_post();?>
                    <?php get_template_part('template-parts/feed/card', 'programs');?>
                <?php wp_reset_postdata();?>
                <?php endwhile;?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php get_footer(); ?>
