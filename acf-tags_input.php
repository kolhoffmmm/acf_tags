<?php

/*
Plugin Name: Advanced Custom Fields: Tags input
Description: Simple field for non hierarchical taxonomy (tags)
Version: 1.0.0
Author: Mouring Kolhoff
Author URI: http://www.smesolutions.co.za
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/




// 1. set text domain
// Reference: https://codex.wordpress.org/Function_Reference/load_plugin_textdomain
load_plugin_textdomain( 'acf-tags_input', false, dirname( plugin_basename(__FILE__) ) . '/lang/' ); 




// 2. Include field type for ACF5
// $version = 5 and can be ignored until ACF6 exists
function include_field_types_tags_input( $version ) {
	
	include_once('acf-tags_input-v5.php');
	
}

add_action('acf/include_field_types', 'include_field_types_tags_input');	




// 3. Include field type for ACF4
function register_fields_tags_input() {
	
	include_once('acf-tags_input-v4.php');
	
}

add_action('acf/register_fields', 'register_fields_tags_input');	



	
?>
