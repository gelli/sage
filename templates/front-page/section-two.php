<?php
use Roots\Sage\Assets;
?>

<!-- Most Read Articles -->
<?php
  $sectionCategory = get_theme_mod('lbb_custom_cat_1');
  if ($sectionCategory) :
    $category = lbb_get_category($sectionCategory);

    $query = new WP_Query( array (
      'post_type' => 'post',
      'posts_per_page' => '3',
      'category_name' => $category->slug,
    ));

    if ( $query->have_posts() ) : ?>

      <div class="row sam-content">
        <div class="col-xs-12">
          <h2 class="featured-posts featured-photos">
            <a href="<?php echo get_category_link($category->cat_ID); ?>">
              <?php _e($category->description, 'littlebluebag' ); ?>
            </a>
          </h2>
        </div>
      </div>

      <div class="row sam-content">
        <?php //// Start the Loop.
        while ( $query->have_posts() ) : $query->the_post(); ?>
          <div class="col-sm-12 col-md-4 col-xs-12 ">
            <div class="lbb-feature">
              <a class="img-wrap" href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail("image-wall", array('class' => 'img-responsive lbb-feature-image')); ?>
                    <div></div>
                </a>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    <?php endif;
  endif;
?>
