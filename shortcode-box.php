<?php
/*

**************************************************************************

Plugin Name:  Shortcode Box
Plugin URI:   http://www.arefly.com/shortcode-box/
Description:  Add Useful Boxes to your blog simply by shortcode.
Version:      1.1.2
Author:       Arefly
Author URI:   http://www.arefly.com/
Text Domain:  shortcode-box
Domain Path:  /lang/

**************************************************************************

	Copyright 2014  Arefly  (email : eflyjason@gmail.com)

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License, version 2, as 
	published by the Free Software Foundation.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

**************************************************************************/

define("SHORTCODE_BOX_PLUGIN_URL", plugin_dir_url( __FILE__ ));
define("SHORTCODE_BOX_FULL_DIR", plugin_dir_path( __FILE__ ));
define("SHORTCODE_BOX_TEXT_DOMAIN", "shortcode-box");

/* Plugin Localize */
function shortcode_box_load_plugin_textdomain() {
	load_plugin_textdomain(SHORTCODE_BOX_TEXT_DOMAIN, false, dirname(plugin_basename( __FILE__ )).'/lang/');
}
add_action('plugins_loaded', 'shortcode_box_load_plugin_textdomain');

include_once SHORTCODE_BOX_FULL_DIR."help.php";

/* Add Links to Plugins Management Page */
function shortcode_box_action_links($links){
	$links[] = '<a href="'.get_admin_url(null, 'tools.php?page='.SHORTCODE_BOX_TEXT_DOMAIN.'-help').'">'.__("Help", SHORTCODE_BOX_TEXT_DOMAIN).'</a>';
	return $links;
}
add_filter('plugin_action_links_'.plugin_basename(__FILE__), 'shortcode_box_action_links');

function shortcode_box_enqueue_styles(){
	wp_enqueue_style(SHORTCODE_BOX_TEXT_DOMAIN, SHORTCODE_BOX_PLUGIN_URL.'style.min.css');
}
add_action('wp_enqueue_scripts', 'shortcode_box_enqueue_styles');
add_action('admin_enqueue_scripts', 'shortcode_box_enqueue_styles');

function shortcode_box($atts, $content = null){
	$content = trim(do_shortcode($content));
	extract(shortcode_atts(array("mode"=>'text'), $atts));
	switch ($mode) {
		case 'down':
			return '<div class="down box-content">'.$content.'</div>';
		break;

		case 'warning':
			return '<div class="warn box-content">'.$content.'</div>';
		break;

		case 'ins':
			return '<div class="instruct box-content">'.$content.'</div>';
		break;

		case 'text':
			return '<div class="text-box box-content">'.$content.'</div>';
		break;

		case 'question':
			return '<div class="question box-content">'.$content.'</div>';
		break;

		case 'course':
			return '<div class="course box-content">'.$content.'</div>';
		break;

		case 'stop':
			return '<div class="stop box-content">'.$content.'</div>';
		break;

		case 'task':
			return '<div class="task box-content">'.$content.'</div>';
		break;

		case 'link':
			return '<div class="link box-content">'.$content.'</div>';
		break;
		
		default:
			return $content;		
		break;
	}
}
add_shortcode('box', 'shortcode_box');
