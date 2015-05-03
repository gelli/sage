<?php
use Roots\Sage\Assets;
?>

<div class="row">
  <!-- packliste und ebook -->
  <div class="col-md-4">
    <h2 class="featured-posts">Empfehlung</h2>
      <article class="text-center">
        <div class="lbb-feature">
          <a href="<?php echo get_permalink(13632); ?>">
            <?php echo get_the_post_thumbnail(13632, "image-wall", array('class' => 'img-responsive lbb-feature-image')); ?>
          </a>
        </div>
      </article>
      <article class="text-center">
        <div class="lbb-feature">
          <a href="<?php echo get_permalink(12934); ?>">
            <?php echo get_the_post_thumbnail(12934, "image-wall", array('class' => 'img-responsive lbb-feature-image')); ?>
          </a>
        </div>
      </article>

    </div>
  <div class="col-md-8">
<!-- Most Read Articles -->
<?php
$sectionCategory = get_theme_mod('lbb_custom_cat_3');
if ($sectionCategory) :

  $category = lbb_get_category($sectionCategory);

  $query = new WP_Query( array (
    'post_type' => 'post',
    'posts_per_page' => '2',
    'category_name' => $category->slug
  )); ?>

  <h2 class="featured-posts">
    <a href="<?php echo get_category_link($category->cat_ID); ?>">
      <?php _e($category->description, 'littlebluebag' ); ?>
    </a>
  </h2>

  <?php if ( $query->have_posts() ) : ?>
    <div class="row">

        <?php //// Start the Loop.
        while ( $query->have_posts() ) : $query->the_post(); ?>

            <article id="post-<?php the_ID(); ?>" class="col-md-6 col-sm-6 col-xs-12 entry-card">
                <a class="img-wrap" href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail("image-wall", array('class' => 'img-responsive lbb-feature-image')); ?>
                    <div><!-- <p><?php echo get_the_title(); ?> </p>--> </div>
                </a>
                <div class="entry-card-content">
                  <?php  printf( '<span class="small entry-date"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> <time class="entry-date" datetime="%2$s">%3$s</time></span>',
                    esc_url( get_permalink() ),
                    esc_attr( get_the_date( 'c' ) ),
                    esc_html( get_the_date() ),
                    esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) )
                  ); ?>
                  <!-- <p> <?php the_excerpt(); ?></p> -->
                  <p><?php the_excerpt( __( 'weiterlesen <span class="meta-nav">&rarr;</span>', 'greyskull14'), true );?> </p>
                </div>
            </article>

        <?php endwhile; ?>
    </div>
  <?php endif; 
endif; ?>


  </div>
</div>