<?php
/**
 * Template Name: Custom Template (no sidebar)
 */

  while (have_posts()) : the_post();
    get_template_part('templates/content', 'page');
  endwhile;
?>
