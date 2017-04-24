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
  <div style="margin-top: 1em; height: 200px">
    <?php  printf( '<span class="small entry-date"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> <time class="entry-date" datetime="%2$s">%3$s</time></span>',
      esc_url( get_permalink() ),
      esc_attr( get_the_date( 'c' ) ),
      esc_html( get_the_date() ),
      esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) )
    ); ?>
    <p><?php the_excerpt(); ?></p>
  </div>
</div>