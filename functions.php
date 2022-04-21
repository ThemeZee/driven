<?php
/**
 * Driven functions and definitions
 *
 * @package Driven
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function driven_setup() {

	// Set default Post Thumbnail size.
	set_post_thumbnail_size( 1530, 765 );

	// Enqueue editor styles.
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'driven_setup' );


/**
 * Enqueue scripts and styles.
 */
function driven_scripts() {

	// Register and Enqueue Stylesheet.
	wp_enqueue_style( 'driven-stylesheet', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'driven_scripts' );


/**
 * Enqueue block styles and scripts for Gutenberg Editor.
 */
function driven_block_scripts() {

	// Enqueue Editor Styling.
	wp_enqueue_style( 'driven-editor-styles', get_theme_file_uri( '/assets/css/editor-styles.css' ), array(), wp_get_theme()->get( 'Version' ), 'all' );

	// Get current screen.
	$current_screen = get_current_screen();

	// Enqueue Page Template Switcher Editor plugin.
	if ( method_exists( $current_screen, 'is_block_editor' ) && $current_screen->is_block_editor() && 'post' === $current_screen->base ) {
		wp_enqueue_script( 'driven-page-template-switcher', get_theme_file_uri( '/assets/js/page-template-switcher.js' ), array( 'wp-blocks', 'wp-element', 'wp-edit-post' ), '2022-03-31' );
	}
}
add_action( 'enqueue_block_editor_assets', 'driven_block_scripts' );


/**
* Enqueue theme fonts.
*/
function driven_theme_fonts() {
	$fonts_url = driven_get_fonts_url();

	// Load Fonts if necessary.
	if ( $fonts_url ) {
		require_once get_theme_file_path( 'inc/wptt-webfont-loader.php' );
		wp_enqueue_style( 'driven-theme-fonts', wptt_get_webfont_url( $fonts_url ), array(), '20201110' );
	}
}
add_action( 'wp_enqueue_scripts', 'driven_theme_fonts', 1 );
add_action( 'enqueue_block_editor_assets', 'driven_theme_fonts', 1 );


/**
 * Retrieve webfont URL to load fonts locally.
 */
function driven_get_fonts_url() {
	$font_families = array(
		'Roboto:400,400italic,700,700italic',
	);

	$query_args = array(
		'family'  => urlencode( implode( '|', $font_families ) ),
		'subset'  => urlencode( 'latin,latin-ext' ),
		'display' => urlencode( 'swap' ),
	);

	return apply_filters( 'driven_get_fonts_url', add_query_arg( $query_args, 'https://fonts.googleapis.com/css' ) );
}


/**
 * Change excerpt length for default posts
 *
 * @param int $length Length of excerpt in number of words.
 * @return int
 */
function driven_excerpt_length( $length ) {
	if ( is_admin() ) {
		return $length;
	}

	return apply_filters( 'driven_excerpt_length', 20 );
}
add_filter( 'excerpt_length', 'driven_excerpt_length' );


/**
 * Add body classes in Gutenberg Editor.
 */
function driven_block_editor_body_classes( $classes ) {
	global $post;
	$current_screen = get_current_screen();

	// Return early if we are not in the Gutenberg Editor.
	if ( ! ( method_exists( $current_screen, 'is_block_editor' ) && $current_screen->is_block_editor() && 'post' === $current_screen->base ) ) {
		return $classes;
	}

	// Fullwidth Page Template?
	if ( 'blank-fullwidth' === get_page_template_slug( $post->ID ) or 'page-fullwidth' === get_page_template_slug( $post->ID ) ) {
		$classes .= ' driven-fullwidth-page';
	}

	// No Title Page Template?
	if ( 'blank' === get_page_template_slug( $post->ID ) or 'blank-fullwidth' === get_page_template_slug( $post->ID ) ) {
		$classes .= ' driven-blank-page';
	}

	return $classes;
}
add_filter( 'admin_body_class', 'driven_block_editor_body_classes' );


// Add block patterns.
require get_template_directory() . '/inc/block-patterns.php';

// Add block styles.
require get_template_directory() . '/inc/block-styles.php';
