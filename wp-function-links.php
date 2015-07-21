<?php
/**
 * Plugin Name: WP Function Links
 * Plugin URI: http://polepositionmarketing.com
 * Description: Use a shortcode to generate clickable links that do NOT pass on link juice in order to boost the link value of the other links on the page.
 * Version: 1.1.5
 * Author: Pole Position Marketing
 * Author URI: http://polepositionmarketing.com
 * Text Domain: wp_function_links
 * License: GPL2
 */
 
 /*  Copyright 2015  Pole Position Marketing  (email : info@polepositionmarketing.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/



//If this plugin is accessed directly, die.
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


//Create the submenu link in WordPress Admin Navigation
function wpFunctionLinksPluginMenu() {
  $appName = 'WP Function Links';
  $appID = 'wp-function-links';
  add_submenu_page( 'options-general.php', $appName, 'WP Function Links', 'administrator', $appID . '-sub-level', 'wpFunctionLinksAdminScreen');
}


//Admin screen content
include_once( plugin_dir_path( __FILE__ ) . '/modules/admin_screen.php');


//Create the WordPress shortcode for users to create function links 
include_once( plugin_dir_path( __FILE__ ) . '/modules/create_shortcode.php');


//Plugin settings registration
function register_wpFunctionLinks_settings() {
  register_setting( 'wp_function_links_options_group', 'wpfl_use_legacy_links' );
  register_setting( 'wp_function_links_options_group', 'wpfl_remove_underline_links' );
  register_setting( 'wp_function_links_options_group', 'wpfl_remove_all_styles' );
}


//Register the plugin
if ( is_admin() ) { // admin actions
  add_action('admin_menu', 'wpFunctionLinksPluginMenu');
  add_action( 'admin_init', 'register_wpFunctionLinks_settings' );
}


//Create the front end styles and scripts
include_once( plugin_dir_path( __FILE__ ) . '/modules/front_end.php');


//Load the admin styles and Javascript
function wpfl_enqueue_admin_styles($hook) {
  //Only load if they are on the settings page for this plugin
  if ( 'settings_page_wp-function-links-sub-level' != $hook ) {
    return;
  }
  wp_register_style( 'wpfl_admin_styles', plugins_url('assets/css/wpfl_admin.css', __FILE__ ), false, '1.0.0' );
  wp_enqueue_style('wpfl_admin_styles');
  
  wp_enqueue_script( 'wpfl_admin_script', plugins_url('assets/js/wpfl_admin.js', __FILE__), false, '1.0', true );
}
add_action( 'admin_enqueue_scripts', 'wpfl_enqueue_admin_styles' );