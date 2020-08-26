<?php
/**
* Cool Admin Theme Lite for WordPress
* Version: 1.0.0
* License: GPL-2.0-or-later
*
* @package catforwp
* @version 1.0.0
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}




/**
* Adding custom css in admin head
*/


function catforwp_add_custom_style(){

	$options 		= wp_load_alloptions();
	$custom_css = isset($options['catforwp_cat_custom_style']) ? $options['catforwp_cat_custom_style'] : 0;

	if($custom_css){
		$style  = '<style type="text/css">';
		$style .= $custom_css;
		$style .= '</style>';
		echo $style;
	}
}

add_action( 'admin_head', 'catforwp_add_custom_style', 0 );







/**
* Adding catforwp class to body
*/

function catforwp_emojify_menu(){

	$options 			= wp_load_alloptions();
	$emojify 			= isset($options['catforwp_emojify']) ? $options['catforwp_emojify'] : 0 ;
	
	// Add emojify class to body

	if ( $emojify ):
		return 'catforwp-emojify';
	endif;
}
add_filter( 'admin_body_class', 'catforwp_emojify_menu');





/**
* Enqueue Admin Theme Scripts
*/


function catforwp_content_styles() {

	wp_enqueue_code_editor( 
		array( 'type' => 'text/html') 
	);

  wp_enqueue_script( 
		'catforwp-script', 
		plugin_dir_url( __FILE__ ) . '../js/catforwp-lite.js', 
		array( 'jquery' ), 
		'1.0', 
		true 
	);

	wp_enqueue_style(
		'catforwp-style',
		plugin_dir_url(__FILE__) . '../css/catforwp.min.css'
	);
}

add_action( 'admin_enqueue_scripts', 'catforwp_content_styles', 20 );