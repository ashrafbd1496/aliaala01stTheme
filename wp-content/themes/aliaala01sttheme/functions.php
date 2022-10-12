<?php
/**
 * aliaala01sttheme functions and definitions
 *
 * @package aliaala01sttheme
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// aliaala01sttheme's includes directory.
$aliaala01sttheme_inc_dir = 'inc';

// Array of files to include.
$aliaala01sttheme_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/aliaala01sttheme/aliaala01sttheme/issues/567.
	'/editor.php',                          // Load Editor functions.
	'/block-editor.php',                    // Load Block Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

// Load WooCommerce functions if WooCommerce is activated.
if ( class_exists( 'WooCommerce' ) ) {
	$aliaala01sttheme_includes[] = '/woocommerce.php';
}

// Load Jetpack compatibility file if Jetpack is activiated.
if ( class_exists( 'Jetpack' ) ) {
	$aliaala01sttheme_includes[] = '/jetpack.php';
}

// Include files.
foreach ( $aliaala01sttheme_includes as $file ) {
	require_once get_theme_file_path( $aliaala01sttheme_inc_dir . $file );
}
