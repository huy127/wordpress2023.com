<?php
/*
 * Plugin Name:       Wordpress Ecommerce 2023
 * Plugin URI:        #
 * Description:       plugin demo
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            huy127
 * Author URI:        #
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        #
 * Text Domain:       wp2023_ecommerce
 * Domain Path:       /languages
 */

 define('WP2023_PATH', plugin_dir_path(__FILE__));
 define('WP2023_URL', plugin_dir_url(__FILE__));


 register_activation_hook(__FILE__,'wp2023_ecommerce_activation');
 function wp2023_ecommerce_activation(){

 }


 register_deactivation_hook(__FILE__,'wp2023_ecommerce_deactivation');
 function wp2023_ecommerce_deactivation(){

 }

 include_once WP2023_PATH.'includes\includes.php';