<div class="content row sam-content">
<?php
	get_template_part('templates/front-page', 'aside'); 
	get_template_part('templates/front-page', 'articles');
?>
 </div><!-- /.content -->

 <div class="clearfix"></div>

<!-- pager -->
<div class="text-center">
    <?php grayskull_numeric_posts_nav(); ?>
</div>
<?php get_template_part('templates/front-page', 'categories');
?>