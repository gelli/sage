<?php
use Roots\Sage\Assets;


/*add_action('admin_enqueue_scripts', function ($hook) {
    wp_enqueue_script('stonyray_tinymce', Assets\asset_path('scripts/tinymce_hintbox.js'));
});*/


/* Plugin Name: My TinyMCE Buttons */
add_action( 'admin_init', 'my_tinymce_button' );

function my_tinymce_button() {
     if ( current_user_can( 'edit_posts' ) && current_user_can( 'edit_pages' ) ) {
          add_filter( 'mce_buttons', 'my_register_tinymce_button' );
          add_filter( 'mce_external_plugins', 'my_add_tinymce_button' );
     }
}

function my_register_tinymce_button( $buttons ) {
     array_push( $buttons, "button_hintbox");
     return $buttons;
}

function my_add_tinymce_button( $plugin_array ) {
     $plugin_array['stonyray_hintbox'] = Assets\asset_path('scripts/tinymce_hintbox.js');
     return $plugin_array;
}
