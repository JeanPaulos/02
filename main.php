<?php
/**
 * Plugin Name: My Account item by JP
 * Plugin URI: https://www.bedrukt.nl
 * Description: Hide menu items in my account.
 * Version: 1.0.0
 * Author: J.P. van der Meer
 * Author URI: https://www.bedrukt.nl
 * License: GPL2
 * WC requires at least: 3.3
 * WC tested up to: 4.7.0
 */

add_filter ( 'woocommerce_account_menu_items', 'misha_remove_my_account_links' );
function misha_remove_my_account_links( $menu_links ){
	
	unset( $menu_links['downloads'] ); // Disable Downloads
	
	return $menu_links;
	
}
