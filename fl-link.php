<?php 
/*
Plugin Name: FL-Link
Plugin URI: https://github.com/tdatu/fl-link.git
Description: A short code plug-in for wordpress when linking within the same page.
Version: 0.1
Author: Anthony Datu
Author URI: https://github.com/tdatu
License: GPLv2
License URI: https://www.gnu.org/licenses/gpl-2.0.html 
*/

function fl_link_shortcode($att, $content = null)
{
	//Decode any html entities
	$content = html_entity_decode($content);
	//Assemble the anchor id
	$result = '<a id="' . $content . '">' . $content . '</a>';
	return $result;
}


function reg_fl_link()
{
	add_shortcode('fl-link', 'fl_link_shortcode');
}

add_action('init', 'reg_fl_link');


