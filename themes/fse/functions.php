<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package FSE
 * @since 1.0.0
 */

/**
 * Enqueue the style.css file.
 *
 * @since 1.0.0
 */
function fse_styles() {
	wp_enqueue_style( 'fse-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'fse_styles' );

function prefix_default_page_template( $settings ) {
	$settings['defaultBlockTemplate'] = file_get_contents( get_theme_file_path( 'templates/full-width.html' ) );
	return $settings;
}
add_filter( 'block_editor_settings_all', 'prefix_default_page_template' );