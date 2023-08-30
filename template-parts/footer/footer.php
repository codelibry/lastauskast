<?php
    $footer_title = get_field('footer_title', 'option');
    $footer_contacts = get_field('footer_contacts', 'option');
    $footer_social = get_field('footer_social', 'option');
?>

<footer class="footer">
    <div class="container">
        <div class="footer__wrap">
            <div class="footer__col col--left">
                <?php if ($footer_title) : ?>
                    <div class="footer__title">
                        <?php echo $footer_title; ?>
                    </div>
                <?php endif; ?>
                
                <?php if ($footer_contacts) : ?>
                    <div class="footer__contacts">
                        <?php
                            $contact_address = $footer_contacts['contact_address'];
                            $contact_phone = $footer_contacts['contact_phone'];
                            $contact_email = $footer_contacts['contact_email'];
                        ?>
                        <?php if ($contact_address) : ?>
                            <span><?php echo $contact_address; ?></span>
                        <?php endif; ?>
                        <?php if ($contact_phone) : ?>
                            <a href="tel:<?php echo $contact_phone; ?>"><?php echo $contact_phone; ?></a>
                        <?php endif; ?>
                        <?php if ($contact_email) : ?>
                            <a href="mailto:<?php echo $contact_email; ?>"><?php echo $contact_email; ?></a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                
                <?php if ($footer_social) : ?>
                    <div class="footer__social">
                        <?php foreach ($footer_social as $social) : ?>
                            <?php
                            $social_icon = $social['social_icon'];
                            $social_link = $social['social_link'];
                            ?>
                            <?php if ($social_icon && $social_link) : ?>
                                <a href="<?php echo $social_link; ?>">
                                    <img src="<?php echo $social_icon['url']; ?>"
                                         alt="<?php echo $social_icon['alt'] ?: $social_icon['title']; ?>">
                                </a>
                            <?php endif; ?>
                        
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <div class="footer__copyright">
                    <span><?php the_date('Y'); ?><?php _e('lastauskas.lt'); ?></span>
                    <span><?php _e('ALL RIGHTS RESERVED.'); ?></span>
                </div>
            </div>
            <div class="footer__col col--right"></div>
            <div class="footer__col">
                GOOGLE REVIEWS
            </div>
        </div>
    </div>
</footer>