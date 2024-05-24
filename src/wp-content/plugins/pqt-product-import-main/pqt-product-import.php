<?php

/**
 * @package PQTProductImport
 */
/*
Plugin Name: PQT Product Import
Description: Import sản phẩm theo custom file excel
Version: 1.0
Requires at least: 5.0
Requires PHP: 5.2
Author: Trung Pham
License: GPLv2 or later
*/

if (!function_exists('add_action')) {
	echo 'Không thể chạy plugins trong website!';
	exit;
}

const PQT_PRODUCT_IMPORT_CLASS_NAME = 'PQTProductImport';
const PQT_PRODUCT_IMPORT_NAME = 'PQT Product Import';

define('PQT_PRODUCT__PLUGIN_DIR', plugin_dir_path(__FILE__));
define('PQT_PRODUCT__PLUGIN_URL', plugin_dir_url(__FILE__));
require_once(PQT_PRODUCT__PLUGIN_DIR . '/lib/core.php');
add_action('init', array(PQT_PRODUCT_IMPORT_CLASS_NAME, 'init'));


register_activation_hook( __FILE__, array( PQT_PRODUCT_IMPORT_CLASS_NAME, 'pluginActivation' ) );
register_deactivation_hook( __FILE__, array( PQT_PRODUCT_IMPORT_CLASS_NAME, 'pluginDeactivation' ) );