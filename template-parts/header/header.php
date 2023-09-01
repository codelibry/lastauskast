<?php
    $header_logo = get_field('header_logo', 'option');
?>

<header class="header">
    <div class="container">
        <div class="header__wrap">
            <?php if ($header_logo) : ?>
                <div class="header__logo">
                    <img src="<?php echo $header_logo['url']; ?>"
                         alt="<?php echo $header_logo['alt'] ?: $header_logo['title']; ?>">
                </div>
            <?php endif; ?>

            <div class="header__nav">
                <?php
                    wp_nav_menu([
                        'theme_location' => 'main-menu',
                        'container' => false,
                    ]);
                ?>
            </div>

            <div class="header__search">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/search.png'; ?>" alt="search">
            </div>

            <div class="header__toggle">
                <span></span>
            </div>
           
            <div class="header__side-panel">
                <div class="header__nav">
                    <div class="header__close">
                        <span></span>
                        <span></span>
                    </div>
                    <?php
                        wp_nav_menu([
                            'theme_location' => 'main-menu',
                            'container' => false,
                        ]);
                    ?>
                </div>
            </div>
        </div>
    </div>
</header>
