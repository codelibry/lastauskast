<?php
    $content = get_field('content_block');
    $contact_btn = get_field('contact_button');
    $other_programs_btn = get_field('other_programs_button');
?>

<?php if ($content) : ?>
    <section class="content animate fade-up">
        <div class="container--small">
            <div class="content__wrap">
                <div class="content__text h4">
                    <?php echo $content; ?>
                </div>
                <?php if ($contact_btn || $other_programs_btn) : ?>
                    <div class="content__btn">
                        <?php if ($contact_btn) : ?>
                            <a href="<?php echo $contact_btn['url']; ?>"
                               class="button button--dark button--lg"><?php echo $contact_btn['title']; ?></a>
                        <?php endif; ?>
                        <?php if ($other_programs_btn) : ?>
                            <a href="<?php echo $other_programs_btn['url']; ?>"
                               class="button button--dark button--lg"><?php echo $other_programs_btn['title']; ?></a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>