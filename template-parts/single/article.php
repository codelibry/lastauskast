<?php
    $article = get_the_content();
?>

<?php if ($article) : ?>
    <article class="article animate fade-in">
        <div class="article__wrap content-block">
            <?php echo $article; ?>
        </div>
    </article>
<?php endif; ?>