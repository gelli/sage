<div class="content row sam-content">
<?php
	get_template_part('templates/front-page/section', 'heroes');

	//get_template_part('templates/front-page', 'aside'); 
	// get_template_part('templates/front-page', 'articles');
?>
 </div><!-- /.content -->

 <div class="clearfix"></div>

 <?php get_template_part('templates/front-page/section', 'one'); ?>
 <?php get_template_part('templates/front-page/section', 'two'); ?>
 <?php get_template_part('templates/front-page/section', 'three'); ?>
 <?php get_template_part('templates/front-page/section', 'four'); ?>
 <?php get_template_part('templates/front-page/section', 'five'); ?>
 <?php get_template_part('templates/front-page/section', 'six'); ?>


<!-- pager -->
<div class="text-center">
    <?php // grayskull_numeric_posts_nav(); ?>
</div>
<?php // get_template_part('templates/front-page', 'categories');
?>