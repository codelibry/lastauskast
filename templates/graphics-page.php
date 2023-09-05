<?php
    /*
     * Template Name: Graphics page
    */
?>

<?php get_header(); ?>

<?php
    $graphics_list = get_field('graphics_list');
    
    usort($graphics_list, function ($a, $b) {
        $date_a = DateTime::createFromFormat('Ymd', $a['graphics_date']);
        $date_b = DateTime::createFromFormat('Ymd', $b['graphics_date']);
        return $date_a <=> $date_b;
    });
?>

<?php if ($graphics_list) : ?>
    <section class="graphics">
        <div class="container">
            <div class="graphics__wrap">
                <?php foreach ($graphics_list as $graphics_item) : ?>
                    <?php get_template_part('template-parts/feed/card', 'graphics', array(
                        'item' => $graphics_item
                    )); ?>
                <?php endforeach; ?>
                
            </div>
            <div class="vertical-line"></div>
        </div>
    </section>
<?php endif; ?>


<?php get_footer(); ?>