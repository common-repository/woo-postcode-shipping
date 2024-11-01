<?php
/**
 * Use the PHP for https://github.com/tommcfarlin/WordPress-Plugin-Boilerplate
 *
 * @package   Plugin_Name
 * @author    Your Name <email@example.com>
 * @license   GPL-2.0+
 * @link      http://example.com
 * @copyright 2014 Your Name or Company Name
 *
 * @wordpress-plugin
 * Plugin Name:       WooCommerce JSON Postcodes Shipping
 * Plugin URI:        @TODO
 * Description:       @TODO
 * Version:           1.0.0
 * Author:            @TODO
 * Author URI:        @TODO
 * Text Domain:       woo-postcode-shipping
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/brasadesign/woo-postcode-shipping
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
function wc_uk_shipping_class() {
	include('wc-shipping-class.php');
}
function add_wc_uk_shipping_class( $methods ) {
	$methods[] = 'WC_Shipping_JSON_PostCode';
	return $methods;
}
add_action( 'woocommerce_shipping_init', 'wc_uk_shipping_class' );
add_filter( 'woocommerce_shipping_methods', 'add_wc_uk_shipping_class' );

/**
 * Load plugin textdomain.
 *
 * @since 1.0.0
 */
function wc_shipping_json_postcode_load_textdomain() {
  load_plugin_textdomain( 'woo-postcode-shipping', false, plugin_basename( dirname( __FILE__ ) ) . '/languages' );
}
add_action( 'plugins_loaded', 'wc_shipping_json_postcode_load_textdomain' );
