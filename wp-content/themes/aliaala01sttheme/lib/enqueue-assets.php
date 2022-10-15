<?php 
	function aliaala01sttheme_assets(){
		wp_enqueue_style('aliaala01sttheme-stylesheet', get_template_directory_uri() . '/dist/asset/css/bundle.css', array('aliaala01sttheme-styles'),time(), 'all');
	}
	add_action('wp_enqueue_scripts','aliaala01sttheme_assets');

 function aliaala01sttheme_admin_assets(){
		wp_enqueue_style('aliaala01sttheme-admin-stylesheet', get_template_directory_uri() . '/dist/asset/css/admin.css', array(),time(), 'all');
	}
	add_action('admin_enqueue_scripts','aliaala01sttheme_admin_assets');