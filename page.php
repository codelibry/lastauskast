<?php $content = get_the_content();?>

<?php get_header(); ?>

<?php if($content) :?>
    <section class="page-content">
        <div class="container">
            <div class="content-block">
                <?php the_content();?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php get_footer(); ?>
