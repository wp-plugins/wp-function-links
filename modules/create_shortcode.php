<?php

//Create the shortcode [function_link]
function wp_function_links_shortcode( $atts, $content = null ) {
  
  //Set the defaults settings for the shortcode attributes
  $a = shortcode_atts( array(
      'url' => '#',
      'target' => '_self',
      'title' => '',
  ), $atts );

  //Get user input options from the plugin settings page
  $useLegacyLinks = get_option( 'wpfl_use_legacy_links' );
  $removeUnderlineLinks = get_option( 'wpfl_remove_underline_links' );
  
  //If the "remove link underline" setting is checked by the user
  if( $removeUnderlineLinks ) {
    $underlineLinks = 'no_underline';
  }
  
  //Create varible to be set later
  $url;
  
  //If the user has selected the "Use legacy links" option
  if( $useLegacyLinks ) {
    //Display the link as a plain URL
    $url = $a['url'];
  } else {
    //Display the link as a base64 encoded link
    $url = base64_encode($a['url']);
  }
  
  //Return a function link
  return '<span class="ppm-wpfl '.$underlineLinks.'" data-destination="'.$url.'" data-target="'.$a['target'].'" title="'.$a['title'].'" onclick="destination(this)">'.$content.'</span>';
}
add_shortcode( 'function_link', 'wp_function_links_shortcode' );