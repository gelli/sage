<?php

namespace Roots\Sage\Init;

use Roots\Sage\Assets;

/**
 * Theme setup
 */
function setup() {
  // Make theme available for translation
  // Community translations can be found at https://github.com/roots/sage-translations
  load_theme_textdomain('sage', get_template_directory() . '/lang');

  // Enable plugins to manage the document title
  // http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
  add_theme_support('title-tag');

  // Register wp_nav_menu() menus
  // http://codex.wordpress.org/Function_Reference/register_nav_menus
  /* register_nav_menus([
    'primary_navigation' => __('Primary Navigation', 'sage')
  ]); */

  // Add post thumbnails
  // http://codex.wordpress.org/Post_Thumbnails
  // http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
  // http://codex.wordpress.org/Function_Reference/add_image_size
  add_theme_support('post-thumbnails');

  // Add post formats
  // http://codex.wordpress.org/Post_Formats
  add_theme_support('post-formats', ['video']);

  // Add HTML5 markup for captions
  // http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
  add_theme_support('html5', ['caption', 'comment-form', 'comment-list']);

  // Tell the TinyMCE editor to use a custom stylesheet
  add_editor_style(Assets\asset_path('styles/editor-style.css'));
}
add_action('after_setup_theme', __NAMESPACE__ . '\\setup');

/**
 * Register sidebars
 */
function widgets_init() {

  register_sidebar( array(
    'name'          => __( 'Sidebar Widget Area', 'greyskull14' ),
    'id'            => 'sidebar-primary',
    'description'   => __( 'Appears in the sidebar section of the site.', 'greyskull14' ),
    'before_widget' => '<div id="%1$s" class="row widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ));

  register_sidebar( array(
    'name'          => __( 'Footer Widget Area', 'greyskull14' ),
    'id'            => 'footer-1',
    'description'   => __( 'Appears in the footer section of the site.', 'greyskull14' ),
    'before_widget' => '<div id="%1$s" class="col-md-4 %2$s"><div class="row-centered text-left">',
    'after_widget'  => '</div></div>',
    'before_title'  => '<h1>',
    'after_title'   => '</h1><hr/>',
  ));
}
add_action('widgets_init', __NAMESPACE__ . '\\widgets_init');
