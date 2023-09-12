<?php
    $article = get_field('article');
?>

<?php if ($article) : ?>
    <article class="article">
        <div class="article__wrap">
            <?php echo $article; ?>
        </div>
    </article>
<?php endif; ?>