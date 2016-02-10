<?php

use Roots\Sage\Config;
use Roots\Sage\Wrapper;

?>

<?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if lt IE 9]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->


    <div role="document">
      <?php
        do_action('get_header');
        get_template_part('templates/header');
      ?>

      <div class="container">
        <div class="row">
          <main class="main" role="main">
            <?php include Wrapper\template_path(); ?>
          </main><!-- /.main -->
          <?php if (Config\display_sidebar()) : ?>
            <aside class="sidebar" role="complementary">
              <?php include Wrapper\sidebar_path(); ?>
            </aside><!-- /.sidebar -->
          <?php endif; ?>
        </div>
      </div>
    </div><!-- /.wrap -->
    <?php
      get_template_part('templates/footer');
      wp_footer();
    ?>
    <!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
    <script type="text/javascript">
        window.cookieconsent_options = {
          "message":"This website uses cookies to ensure you get the best experience while browsing our pages",
          "dismiss":"Got it!",
          "learnMore":"More info",
          "link":null,"theme": "dark-top"};
    </script>

    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.9/cookieconsent.min.js"></script>
    <!-- End Cookie Consent plugin -->

  </body>
</html>
