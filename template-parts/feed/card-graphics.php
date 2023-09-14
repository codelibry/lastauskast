<?php
    if (isset($args)) {
        $item = $args['item'];
        
        $date = get_the_date('Ymd');
        
        $graphics_title = $item['graphics_title'];
        $graphics_date = DateTime::createFromFormat('Ymd', $item['graphics_date']);
        $formatted_date = $graphics_date->format('Y-m-d');
        $graphics_place = $item['graphics_place'];
        $graphics_participants = $item['graphics_participants'];
        $graphics_button = $item['graphics_button'];
    }
?>

<?php if ($graphics_title && $graphics_date && $graphics_place && $graphics_participants && $graphics_button) : ?>
    <div class="card-graphics animate fade-up" data-date="<?php echo $formatted_date;?>">
        <div class="card-graphics__wrap">
            <div class="card-graphics__title">
                <h4>
                    <?php echo $graphics_title; ?>
                </h4>
            </div>
            <div class="card-graphics__info">
                <div class="card-graphics__date">
                    <?php _e('Data: '); ?>
                    <?php echo $formatted_date; ?>
                </div>
                <div class="card-graphics__place">
                    <?php _e('Vieta: '); ?>
                    <?php echo $graphics_place; ?>
                </div>
                <div class="card-graphics__participants">
                    <?php _e('Dalyvių skaičius: '); ?>
                    <?php echo $graphics_participants; ?>
                </div>
            </div>
            <?php if ($graphics_date > $date) : ?>
                <div class="card-graphics__btn">
                    <a href="<?php echo $graphics_button['url']; ?>" class="button button--dark button--lg">
                        <?php echo $graphics_button['title'] ?: 'Registruotis'; ?>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>