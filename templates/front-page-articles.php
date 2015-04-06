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

    <div id="amazon-search" class="row text-center">
        <script charset="utf-8" type="text/javascript">
            amzn_assoc_ad_type = "responsive_search_widget";
            amzn_assoc_tracking_id = "weddingsam-21";
            amzn_assoc_marketplace = "amazon";
            amzn_assoc_region = "DE";
            amzn_assoc_placement = "";
            amzn_assoc_search_type = "search_box";
            amzn_assoc_width = "auto";
            amzn_assoc_height = "auto";
            amzn_assoc_default_search_category = "";
            amzn_assoc_default_search_key = "";
            amzn_assoc_theme = "light";
            amzn_assoc_bg_color = "000000";
        </script>
        <script src="//z-eu.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&Operation=GetScript&ID=OneJS&WS=1&MarketPlace=DE"></script>
    </div>
</div> <!-- col-md-8 -->