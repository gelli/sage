<?php
    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="col-md-<?php echo ($wp_query->current_post < 2) ? "6" : "4"; ?>">
            <?php get_template_part( 'templates/front-page', 'post'); ?>
        </div>

    <?php endwhile;
    else :
        // If no content, include the "No posts found" template.
        get_template_part( 'content', 'none' );
    endif;
?>