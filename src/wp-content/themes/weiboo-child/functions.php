<?php

/*** Child Theme Function  ***/

/*
 * Define Variables
 */
if (!defined('THEME_DIR'))
	define('THEME_DIR', get_template_directory());
if (!defined('THEME_URL'))
	define('THEME_URL', get_template_directory_uri());


/*
 * Include framework files
 */
foreach (glob(THEME_DIR . '-child' . "/includes/*.php") as $file_name) {
	require_once($file_name);
}
function weiboo_theme_enqueue_scripts()
{
	wp_register_style('childstyle', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('childstyle');
}
add_action('wp_enqueue_scripts', 'weiboo_theme_enqueue_scripts', 11);
add_action('wp_enqueue_scripts', 'custom_icon_heart', 10);

function custom_icon_heart()
{
	wp_enqueue_style('custom-icon-heart',  'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css');
}
remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
add_action('woocommerce_shop_loop_item_title', 'woo_shop_products_title', 10);
function woo_shop_products_title()
{
	echo '<a href="' . get_permalink() . '"><h3 class="' . esc_attr(apply_filters('woocommerce_product_loop_title_classes', 'woocommerce-loop-product__title')) . '">' . get_the_title() . '</h3></a>';
}
