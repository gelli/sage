<?php

use Roots\Sage\Assets;

/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<?php if (get_theme_mod( 'lbb_hero_image' )) { ?>
<style>
  .hero-splash {
    background-image: url('<?php echo wp_get_attachment_image_url(absint( get_theme_mod( 'lbb_hero_image' )), 'lbb-hero'); ?>')
  }
</style>
<? } ?>
<div class="col-xs-12">
  <div class="hero-splash">
    <div class="hero-splash-logo">
      <img class="img-responsive" src="<?php echo Assets\asset_path('images/sticker.png');?>">
    </div>
    <div class="hero-splash-text">
      <a class="btn btn-action btn-lg" href="/ebook-manuell-fotografieren/">
        Lerne fotografieren
      </a>
    </div>
  </div>
</div>
