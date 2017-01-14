<?php

use Roots\Sage\Config;
use Roots\Sage\Wrapper;
use Roots\Sage\Assets;
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

    <!-- LIKEJS HTML -->
    <div id="likejsbox">
      <div class="header">Werde Fan von LittleBlueBag <span id="close" onClick="closeLikeJSBox();"><img src="<?php echo Assets\asset_path('images/likejs/close.png'); ?>" alt="schliessen" /></span></div>
      <iframe src="https://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Flittlebluebag&amp;width=296&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=false&amp;header=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:296px; height:258px;" allowTransparency="true"></iframe>
    </div>
    <div id="relikejsbox" onClick="reLikeJSBox();">
      <img src="<?php echo Assets\asset_path('images/likejs/relikejsbox.jpg'); ?>" alt="oeffnen" />
    </div>

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
