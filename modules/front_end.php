<?php

//Front end styles and javascript
if ( !is_admin() ) {
  
  
  /* Get the Plugin's Options Set in the WordPress Admin for this plugin */
  $legacyLinks = get_option( 'wpfl_use_legacy_links' );
  $removeStyles = get_option( 'wpfl_remove_all_styles' );
  
  
  /*
  *   Add a body class to tell the javascript 
  *   whether or not to use legacy links
  */  
  if ( $legacyLinks ) {      
    add_filter( 'body_class','use_legacy_links' );
    function use_legacy_links( $classes ) {
      $classes[] = 'useLegacyLinks';
      return $classes;
    }
  } else {
    add_filter( 'body_class','do_not_use_legacy_links' );
    function do_not_use_legacy_links( $classes ) {
      $classes[] = 'noLegacyLinks';
      return $classes;
    }
  }
  
  
  //Load the javascript
  add_action( 'wp_enqueue_scripts', 'wpfl_add_scripts' );
  function wpfl_add_scripts() {
    wp_register_script( 'wpfl_script', plugins_url('../assets/js/wpfl_front_end.js', __FILE__), false, '1.0', true );
    wp_enqueue_script( 'wpfl_script' );
  }
  
  
  //Load the front end styles
  function wpfl_fe_styles() {
    wp_enqueue_style( 'wpfl_fe_styles', plugins_url('../assets/css/wpfl-styles.css', __FILE__ ), false, '1.0.0' );
  }
  //If the user has not choosen to remove the styles, use them
  if( empty($removeStyles) ) {
    add_action( 'wp_enqueue_scripts', 'wpfl_fe_styles' );
  }
  
}