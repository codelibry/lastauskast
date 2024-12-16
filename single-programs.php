<?php get_header(); ?>

<section class="programs">
	<div class="programs__title h4 animate fade-in">
		<h1 class="h2" style="color: #d4d0bf;">
			<?php echo the_title(); ?>
		</h1>
	</div>
</section>
<style>
  #main {
  	padding-top: 25px;
  }
</style>

<?php get_template_part('template-parts/single/bg_text_image');?>

<?php get_template_part('template-parts/single/content');?>

<?php get_template_part('template-parts/acf-blocks/clients');?>

<?php get_footer(); ?>
