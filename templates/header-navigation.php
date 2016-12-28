<?php
use Roots\Sage\Nav\NavWalker;
use Roots\Sage\Assets;
?>

<nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">
    <div class="nav header-logo">
      <a href="/">
        <img src="<?php echo Assets\asset_path('images/rune.png');?>"/>
      </a>
    </div>
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <?php
        wp_nav_menu( array(
          'menu'              => 'primary',
          'theme_location'    => 'header-menu',
          'depth'             => 2,
          // 'container'         => 'div',
          // 'container_class'   => 'collapse navbar-collapse',
          // 'container_id'      => 'bs-example-navbar-collapse-1',
          'menu_class'        => 'header-nav header-nav-left nav navbar-nav',
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
          'menu_class'        => 'header-nav nav navbar-nav',
          'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
          'walker'            => new wp_bootstrap_navwalker())
        );
      ?>
    </div>
  </div>
</nav>
