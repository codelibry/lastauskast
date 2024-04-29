<?php
  $button = get_field('fixed-button', 'options');
  $svg_icon = get_field('fixed-button-svg', 'options');
?>

<a href="<?php echo $button['url'] ?>" class="fixed-button"> 
  <div class="fixed-button__text"><?php echo $button['title'] ?></div>
  <div class="fixed-button__icon">
    <?php echo $svg_icon ?>
  </div>
</a>
