<?php
use Roots\Sage\Assets;
?>

<div class="row">
  <div class="col-md-8">
<!-- Most Read Articles -->
<?php
$sectionCategory = get_theme_mod('lbb_custom_cat_1');
if ($sectionCategory) :

  $category = lbb_get_category($sectionCategory);

  $query = new WP_Query( array (
    'post_type' => 'post',
    'posts_per_page' => '4',
    'category_name' => $category->slug
  )); ?>

  <h2 class="featured-posts">
    <a href="<?php echo get_category_link($category->cat_ID); ?>">
      <?php _e($category->description, 'littlebluebag' ); ?>
    </a>
  </h2>

  <?php if ( $query->have_posts() ) : ?>

                <?php //// Start the Loop.
        while ( $query->have_posts() ) : $query->the_post(); ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix row entry-card'); ?>>
            <div class="col-md-6">
                <a href="<?php echo esc_url(get_permalink()); ?>">
                    <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-responsive')); ?>
                </a>
            </div>
            <div class="col-md-6 entry-card-content">
                  <?php  printf( '<span class="small entry-date"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> <time class="entry-date" datetime="%2$s">%3$s</time></span>',
                    esc_url( get_permalink() ),
                    esc_attr( get_the_date( 'c' ) ),
                    esc_html( get_the_date() ),
                    esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) )
                  ); ?>
              
              <p><?php the_excerpt(); ?></p>
            </div>
          </article>
          

        <?php endwhile; ?>
  <?php endif; 
endif; ?>


  </div>
  <?php get_template_part('templates/front-page', 'aside'); ?>
</div>