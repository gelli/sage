<?php
use Roots\Sage\Assets;
?>

<div class="content row sam-content">
	<?php get_template_part('templates/front-page/section', 'heroes'); ?>
</div>

<div class="clearfix"></div>

<?php
  get_template_part('templates/front-page/section', 'one');
  get_template_part('templates/front-page/section', 'two');
  get_template_part('templates/front-page/section', 'three');
  // get_template_part('templates/front-page/section', 'four');
  get_template_part('templates/front-page/section', 'five');
  get_template_part('templates/front-page/section', 'six');
?>
