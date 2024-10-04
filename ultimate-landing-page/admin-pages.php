<?php if ( ! defined( 'ABSPATH' ) ) exit; 
add_action('admin_menu','lpp_sub_menus_to_subscribe_me');

function lpp_sub_menus_to_subscribe_me(){

	add_submenu_page( 'edit.php?post_type=landingpage_f', 'Dashboard', 'Dashboard', 'manage_options', 'lpp_dashboard', 'add_lpp_dashboard_menu' );
}

function add_lpp_dashboard_menu(){

	include_once LPP_PLUGIN_PATH.'/admin/admin-dashboard.php';
}

?>