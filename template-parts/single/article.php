<?php if (get_the_content()) : ?>
    <article class="article animate fade-in">
        <div class="article__wrap content-block">
            <?php echo the_content();?>
        </div>
    </article>
<?php endif; ?>