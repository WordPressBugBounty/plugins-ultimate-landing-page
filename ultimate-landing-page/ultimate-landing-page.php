<?php 
/*
* Plugin Name: Ultimate Landing Page
* Description: Create Beautiful Landing Pages in minutes with Ultimate Landing Page Builder.
* Author: Web-Settler
* Plugin URI: https://pluginops.com/page-builder/?ref=ulp
* Author URI: https://pluginops.com/page-builder/?ref=ulp
* Text Domain: ultimate-landing-page
* Domain Path: /languages
* Version: 3.2
* Donate link: https://pluginops.com/page-builder/?ref=ulp
* License : GPL v2
*/


if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

include 'config.php';
include 'lpp_settings.php';
include 'lpp_cs_post_type.php';
include 'lpp_scripts.php';
include 'admin-pages.php';
include 'ask-rev.php';

function ulpb_websettler_load_textDomain() {
    $plugin_rel_path = basename( dirname( __FILE__ ) ) . '/languages'; /* Relative to WP_PLUGIN_DIR */
    load_plugin_textdomain( 'ultimate-landing-page', false, $plugin_rel_path );
}
add_action('plugins_loaded', 'ulpb_websettler_load_textDomain');


function ulf_plugin_add_settings_link( $links ) {
    $settings_link = '<a href="edit.php?post_type=landingpage_f">' . __( 'Dashboard','ultimate-landing-page' ) . '</a>';
    $support_link = '<a href="http://web-settler.com/ulp-support/">' . __( 'Support','ultimate-landing-page' ) . '</a>';
    array_push( $links, $settings_link );
    array_push( $links, $support_link );
  	return $links;
}
$lpp_plugin = plugin_basename( __FILE__ );
add_filter( "plugin_action_links_$lpp_plugin", 'ulf_plugin_add_settings_link' );

register_activation_hook(__FILE__, 'lpp_plugin_activation');
add_action('admin_init', 'lpp_plugin_redirect_activation');

function lpp_plugin_activation() {
flush_rewrite_rules();
add_option('lpp_plugin_activation_check_option', true);
}

function lpp_plugin_redirect_activation() {
if (get_option('lpp_plugin_activation_check_option', false)) {
    delete_option('lpp_plugin_activation_check_option');
    if(!isset($_GET['activate-multi']))
    {
        wp_redirect("edit.php?post_type=landingpage_f&page=lpp_dashboard");
        exit();
    }
 }
}


?>