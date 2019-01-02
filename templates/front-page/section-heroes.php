<?php

    $i = 0;

    if ( have_posts() ) : while ( have_posts() ) : the_post();

        $i++;
        ?>
        <div class="col-md-6">
            <?php get_template_part( 'templates/front-page', 'post'); ?>
        </div>

    <?php
    if ($i % 2 == 0) {
      ?>
      </div>
      <div class="content row sam-content">
      <?php
    }

    endwhile;
    else :
        // If no content, include the "No posts found" template.
        get_template_part( 'content', 'none' );
    endif;
?>
