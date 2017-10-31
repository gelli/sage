<?php
  use Roots\Sage\Assets;
?>

<?php
  if (!get_theme_mod( 'lbb_world_map' )) return;
  $shortcode = '[rvm_map mapid="'.get_theme_mod('lbb_world_map').'"]';
  $mapContent = do_shortcode($shortcode);
  if ($mapContent == $shortcode) return; // plugin not active
?>

<div class="row">
<!--
  <div class="col-sm-4">

    <?php
    $sectionCategory = get_theme_mod('lbb_custom_cat_4');
    if ($sectionCategory) :

      $category = lbb_get_category($sectionCategory);

      $query = new WP_Query( array (
        'post_type' => 'post',
        'posts_per_page' => '2',
        'category_name' => $category->slug
      ));

      if ( $query->have_posts() ) : ?>

          <h2 class="featured-posts featured-photos"><?php _e($category->description, 'littlebluebag' ); ?></h2>
          <div class="row">
              <?php //// Start the Loop.
              while ( $query->have_posts() ) : $query->the_post(); ?>

                  <div class="col-xs-12 sam-featured">
                      <a class="img-wrap" href="<?php the_permalink(); ?>">
                          <?php the_post_thumbnail("image-wall", array('class' => 'img-responsive lbb-feature-image')); ?>
                          <div></div>
                      </a>
                  </div>

              <?php endwhile; ?>
          </div>
      <?php endif;
    endif; ?>
  </div> -->

  <div class="col-sm-12">
    <h2 class="featured-posts featured-other">Never stop exploring</h2>
    <div class="row">
      <div class="col-xs-12 sam-featured">
        <div>
          <?php echo $mapContent ?>
        </div>
      </div>
    </div>
  </div>
</div>
