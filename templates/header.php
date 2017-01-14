<?php
use Roots\Sage\Assets;

if (is_front_page()) { ?>
  <?php if (get_theme_mod( 'lbb_hero_image' )) { ?>
  <style>
    .hero-splash {
      main-header: url('<?php echo wp_get_attachment_image_url(absint( get_theme_mod( 'lbb_hero_image' )), 'lbb-hero'); ?>')
    }
  </style>
  <?php } ?>

  <div class="main-header">
      <?php get_template_part('templates/header', 'navigation'); ?>
        <div class="header-content container text-center ">
          <div class="sticker">
            <img class="img-responsive" src="<?php echo Assets\asset_path('images/sticker.png');?>"/>
          </div>

          <div class="row jumbotron">
              <h2>Legendäre Reisefotos, das kannst du auch!</h2>
              <h2>Lerne mit uns fotografieren.</h2>
          </div>
          <div class="row">
            <div class="col-xs-12 text-center">
              <a href="/ebook-manuell-fotografieren" class="btn-hero btn btn-lg">kostenloses eBook</a>
              <a href="/produkt/littlebluebag-fotokurs-lerne-online-fotografieren" class="btn-hero btn btn-lg">Der Fotokurs</a>
            </div>
          </div>
        </div>
  </div>
<?php } else {
  get_template_part('templates/header', 'navigation');
};
?>
