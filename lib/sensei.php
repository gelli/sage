<?php
/**
 * Created by IntelliJ IDEA.
 * User: gelli
 * Date: 11/03/15
 * Time: 21:16
 */

global $woothemes_sensei;

if (isset($woothemes_sensei)) {
  remove_action( 'sensei_before_main_content', array( $woothemes_sensei->frontend, 'sensei_output_content_wrapper' ), 10 );
  remove_action( 'sensei_after_main_content', array( $woothemes_sensei->frontend, 'sensei_output_content_wrapper_end' ), 10 );
  remove_action( 'sensei_comments', array( $woothemes_sensei->frontend, 'sensei_output_comments' ), 10 );

  add_action( 'after_setup_theme', function () {
    add_theme_support( 'sensei' );
  });
}
