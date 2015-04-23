<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<div class="text-center">
  <div class="lbb-feature">
      <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail("image-wall", array('class' => 'img-responsive lbb-feature-image')); ?>
      </a>
  </div>
</div>