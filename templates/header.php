<?php
use Roots\Sage\Nav\NavWalker;
use Roots\Sage\Assets;

?>

<!-- <header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new NavWalker(), 'menu_class' => 'nav navbar-nav']);
      endif;
      ?>
    </nav>
  </div>
</header>  -->

<div class="page-header">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-center">
        <img src="<?php echo Assets\asset_path('images/bluebag_logo.png');?>">
    </a>
</div>

<div class="wrap container">
  <!-- navbar -->
  <div class="row">
      <nav data-spy="affix" data-offset-top="147" id="sam-main-nav" class="navbar navbar-sam navbar-static-top navbar-default" role="navigation">
          <div class="container-fluid">
            <div class="container">
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse"
                          data-target="#bs-example-navbar-collapse-1">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
              </div>


              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <?php /* wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); */

                  wp_nav_menu( array(
                          'menu'              => 'primary',
                          'theme_location'    => 'header-menu',
                          'depth'             => 2,
                          // 'container'         => 'div',
                          // 'container_class'   => 'collapse navbar-collapse',
                          // 'container_id'      => 'bs-example-navbar-collapse-1',
                          'menu_class'        => 'nav navbar-nav',
                          'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                          'walker'            => new wp_bootstrap_navwalker())
                  );

                  wp_nav_menu( array(
                          'menu'              => 'secondary',
                          'theme_location'    => 'header-right-menu',
                          'depth'             => 2,
                          // 'container'         => 'div',
                          // 'container_class'   => 'collapse navbar-collapse',
                          // 'container_id'      => 'bs-example-navbar-collapse-1',
                          'menu_class'        => 'nav navbar-nav navbar-right',
                          'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                          'walker'            => new wp_bootstrap_navwalker())
                  );
                  // get_search_form();
                  ?>
              </div>
          </div>
        </div>
      </nav>
  </div><!-- /navbar -->
</div>