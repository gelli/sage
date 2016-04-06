<!-- Most Read Articles -->
<?php
$sectionCategory = get_theme_mod('lbb_custom_cat_5');
if ($sectionCategory) :

  $category = lbb_get_category($sectionCategory);

  $query = new WP_Query( array (
    'post_type' => 'post',
    'posts_per_page' => '4',
    'category_name' => $category->slug
  ));

  if ( $query->have_posts() ) : ?>

    <div class="row sam-content">
      <div class="col-xs-12">
        <h2 class="featured-posts featured-other"><?php _e($category->description, 'littlebluebag' ); ?></h2>
      </div>
        <?php //// Start the Loop.
        while ( $query->have_posts() ) : $query->the_post(); ?>
          <div class="col-md-3 col-sm-3 col-xs-12">
            <article id="post-<?php the_ID(); ?>" class="entry-card">
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
          </div>
        <?php endwhile; ?>
    </div>
  <?php endif;
endif; ?>

<?php
  if (in_array('instagram-feed-pro/instagram-feed.php', get_option('active_plugins'))) {
?>
  <div class="row sam-content">
    <div class="col-xs-12">
      <h2 class="featured-posts featured-other">LittleBlueBag auf Instagram</h2>
    </div>
    <div class="col-xs-12 sam-featured">
      <div class="entry-card">
        <?php echo do_shortcode('[instagram-feed]'); ?>
      </div>
    </div>
  </div>
<?php }
