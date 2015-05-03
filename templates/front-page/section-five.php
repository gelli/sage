<?php
use Roots\Sage\Assets;
?>

<div class="row">
  <div class="col-sm-8">

    <?php
    $sectionCategory = get_theme_mod('lbb_custom_cat_4');
    if ($sectionCategory) :

      $category = lbb_get_category($sectionCategory);

      $query = new WP_Query( array (
        'post_type' => 'post',
        'posts_per_page' => '4',
        'category_name' => $category->slug
      ));

      if ( $query->have_posts() ) : ?>

          <h2 id="featured-posts"><?php _e($category->description, 'littlebluebag' ); ?></h2>
          <div class="row">
              <?php //// Start the Loop.
              while ( $query->have_posts() ) : $query->the_post(); ?>

                  <div class="col-md-6 col-sm-6 col-xs-12 sam-featured">
                      <a class="img-wrap" href="<?php the_permalink(); ?>">
                          <?php the_post_thumbnail("image-wall", array('class' => 'img-responsive lbb-feature-image')); ?>
                          <div><!-- <p><?php echo get_the_title(); ?> </p>--> </div>
                      </a>
                  </div>

              <?php endwhile; ?>
          </div>
      <?php endif; 
    endif; ?>
  </div>

  <div class="col-sm-4">
    <h2 class="featured-posts">Newsletter</h2>
    <div class="row">
      <div class="col-sm-12">
        <a href="https://my.leadpages.net/leadbox/140bd4973f72a2%3A13706bf69b46dc/5638830484881408/">
          <img class="img-responsive" src="<?php echo Assets\asset_path('images/newsletter2.jpg');?>"src="<?php echo get_template_directory_uri(); ?>/static/images/newsletter2.jpg"/>
        </a>
        <script data-leadbox="140bd4973f72a2:13706bf69b46dc" data-url="https://my.leadpages.net/leadbox/140bd4973f72a2%3A13706bf69b46dc/5638830484881408/" data-config="%7B%7D" type="text/javascript" src="//my.leadpages.net/leadbox-901.js"></script>
      </div>
    </div>
  </div>
</div>