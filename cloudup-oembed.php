<?php 

/*
Plugin Name: Cloudup oEmbed
Plugin URI: http://hanni.me/plugins/cloudup-oembed/
Description: Add Cloudup oEmbeds. 
Author: Hanni Ross
Version: 0.1
Author URI: http://hanni.me
License: GPL version 2 or later - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/


add_action( 'init', 'add_oembed_cloudup' );

function add_oembed_cloudup() {
	wp_oembed_add_provider( 'https://cloudup.com/*' , 'https://cloudup.com/oembed', false ); 
}		