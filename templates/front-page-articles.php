<div class="col-md-8">
    <div class="row image-wall">
        <div class="visible-xs visible-sm">
            <h3 class="featured-posts"><?php _e('Articles', 'littlebluebag' ); ?></h3>
        </div>
        <?php
            if ( have_posts() ) : while ( have_posts() ) : the_post();
                get_template_part( 'templates/front-page', 'post');
            endwhile;
            else :
                // If no content, include the "No posts found" template.
                get_template_part( 'content', 'none' );
            endif;
        ?>
    </div><!-- row imagewall -->
</div> <!-- col-md-8 -->