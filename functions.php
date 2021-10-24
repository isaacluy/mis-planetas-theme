<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package MisPlanetasTheme
 * @since 1.0.0
 */

/**
 * The theme version.
 *
 * @since 1.0.0
 */
define( 'MIS_PLANETAS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 *
 * Adds Theme Support features for Mis Planetas Theme
 *
 * @since 1.0.0
 */
function mis_planetas_theme_support() {
	// Adds dynamic title tag support - Requires wp_head().
	add_theme_support( 'title-tag' );

	// Adds the possibility of uploading a logo from the admin panel.
	add_theme_support( 'custom-logo' );

	// Adds the possibility of setting up a featured image for each post.
	add_theme_support( 'post-thumbnails' );

}

add_action( 'after_setup_theme', 'mis_planetas_theme_support' );


/**
 *
 * Registers the styles for Mis Planetas Theme
 *
 * @since 1.0.0
 */
function mis_planetas_register_styles() {

	wp_enqueue_style(
		'mis-planetas-styles',
		get_template_directory_uri() . '/style.css',
		array( 'tailwind-cdn' ),
		MIS_PLANETAS_VERSION,
		'all'
	);

	wp_enqueue_style(
		'tailwind-cdn',
		'https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css',
		array(),
		'2.2.17',
		'all'
	);
}

add_action( 'wp_enqueue_scripts', 'mis_planetas_register_styles' );

/**
 *
 * Registers the scripts for Mis Planetas Theme
 *
 * @since 1.0.0
 */
function mis_planetas_register_scripts() {

	wp_enqueue_script(
		'mis-planetas-main',
		get_template_directory_uri() . '/assets/js/main.js',
		array(),
		MIS_PLANETAS_VERSION,
		true
	);

}

add_action( 'wp_enqueue_scripts', 'mis_planetas_register_scripts' );

/**
 * Show '(No title)' if post has no title.
 */
add_filter(
	'the_title',
	function( $title ) {
		if ( ! is_admin() && empty( $title ) ) {
			$title = __( '(No title)', 'mis-planetas' );
		}

		return $title;
	}
);

/**
 * A way to include files and pass variables to it
 *
 * @since 1.0.0
 * @param file_name $file_name is the name of the included file.
 * @param variables $variables array of variables.
 *
 * function include_file_with_variables( $file_name, $variables ) {
 * include $file_name;
 * }
 */

/**
 * Registers a custom post type
 *
 * @since 1.0.0
 * @param post_type $post_type a unique string that will represent the post type in the database.
 * @param labels    $labels array of string labels for the custom post type.
 */
function register_custom_post_type( $post_type = null, $labels ) {
	$public       = true;
	$has_archive  = true;
	$show_in_rest = true; // True to enable Gutenberg.
	$supports     = array(
		'title',
		'editor',
		'excerpt',
		'thumbnail',
		'comments',
		'custom-fields',
	);

	register_post_type(
		$post_type,
		array(
			'labels'       => $labels,
			'supports'     => $supports,
			'public'       => $public,
			'has_archive'  => $has_archive,
			'show_in_rest' => $show_in_rest,
		)
	);
}

/**
 * Registers the graha, rishi and bhava post type
 *
 * @since 1.0.0
 */
function create_custom_post_types() {
	register_custom_post_type(
		'graha',
		array(
			'name'          => __( 'Grahas' ),
			'singular_name' => __( 'Graha' ),
		)
	);

	register_custom_post_type(
		'rishi',
		array(
			'name'          => __( 'Rishis' ),
			'singular_name' => __( 'Rishi' ),
		)
	);

	register_custom_post_type(
		'bhava',
		array(
			'name'          => __( 'Bhavas' ),
			'singular_name' => __( 'Bhava' ),
		)
	);
}

add_action( 'init', 'create_custom_post_types' );
