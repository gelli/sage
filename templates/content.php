<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
  <header class="entry-header">
    <div class="post-date">
      <div class="month"><?php echo get_the_date('M'); ?></div>
      <div class="day"><?php echo get_the_date('d'); ?></div>
    </div>
    <h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-thumb">
      <a href="<?php echo esc_url(get_permalink()); ?>">
          <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-responsive')); ?>
      </a>
  </div>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
</article>
