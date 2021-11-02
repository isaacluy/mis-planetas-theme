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
 * @param menu_icon $menu_icon (optional) string from https://developer.wordpress.org/resource/dashicons/ .
 */
function register_custom_post_type( $post_type = null, $labels, $menu_icon = null ) {
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
			'menu_icon'    => $menu_icon ? $menu_icon : 'dashicons-admin-post',
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
		),
		'dashicons-admin-site'
	);

	register_custom_post_type(
		'rishi',
		array(
			'name'          => __( 'Rishis' ),
			'singular_name' => __( 'Rishi' ),
		),
		'dashicons-star-filled'
	);

	register_custom_post_type(
		'bhava',
		array(
			'name'          => __( 'Bhavas' ),
			'singular_name' => __( 'Bhava' ),
		),
		'dashicons-admin-home'
	);
}

add_action( 'init', 'create_custom_post_types' );

/**
 * Outputs the HTML for a saved comment in the Comments section of a post or page.
 *
 * @since 1.0.0
 * @param comment $comment The WordPress comment object.
 * @param args    $args The arguments passed into the callback.
 * @param depth   $depth The depth of the comment in the threads.
 */
function my_comments_callback( $comment, $args, $depth ) {
	$margin_left       = $depth < 2 ? '' : 'lg:ml-' . ( 10 * ( $depth - 1 ) );
	$background_styles = 'p-8 bg-white rounded-xl shadow';
	?>
	<li <?php comment_class( $margin_left . ' ' . $background_styles ); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			<div class="comment-content"><?php comment_text(); ?></div>
			<p><?php comment_author(); ?></p>
			<div class="reply">
				<?php
				comment_reply_link(
					array_merge(
						$args,
						array(
							'reply_text' => __( 'Responder <span>&darr;</span>', 'misplanetastheme' ),
							'depth'      => $depth,
							'max_depth'  => $args['max_depth'],
							'login_text' => 'Registrate para responder',
						)
					)
				);
				?>
			</div>
		</article>
	</li>
	<?php
}

/**
 * Sets up a blocks template for post type 'post'
 *
 * @since 1.0.0
 * @param args      $args The arguments passed to register_post_type_args.
 * @param post_type $post_type A string representing the post type.
 */
function mytheme_block_templates( $args, $post_type ) {

	// Only add template to 'post' post type.
	// Change for your post type: eg 'page', 'event', 'product'.
	if ( 'post' === $post_type ) {

		// Optionally lock templates from further changes.
		// Change to 'insert' to allow adding other blocks, but lock defined blocks.
		$args['template_lock'] = 'all';

		// Set the template.
		$args['template'] = array(
			array(
				'core/columns',
				array( 'className' => 'mb-4 lg:flex lg:p-0 lg:space-x-4' ),
				array(
					array(
						'core/column',
						array(
							'className' => 'w-full h-auto p-8 mb-4 bg-white rounded-xl space-y-4 shadow lg:w-1/2 lg:mb-0',
							'anchor'    => 'favorable',
						),
						array(
							array(
								'core/heading',
								array(
									'placeholder' => 'Planeta Favorable',
									'content'     => 'Planeta Favorable',
									'anchor'      => 'favorable',
								),
							),
							array(
								'core/paragraph',
								array(
									'placeholder' => 'Texto que habla sobre cuando el planeta está favorable...',
								),
							),
						),
					),
					array(
						'core/column',
						array(
							'className' => 'w-full h-auto p-8 mb-4 bg-white rounded-xl space-y-4 shadow lg:w-1/2 lg:mb-0',
							'anchor'    => 'desfavorable',
						),
						array(
							array(
								'core/heading',
								array(
									'placeholder' => 'Planeta Desfavorable',
									'content'     => 'Planeta Desfavorable',
									'anchor'      => 'desfavorable',
								),
							),
							array(
								'core/paragraph',
								array(
									'placeholder' => 'Texto que habla sobre cuando el planeta está desfavorable...',
								),
							),
						),
					),
				),
			),
		);
	}

	return $args;

}
// Hook function into post type arguments filter.
add_filter( 'register_post_type_args', 'mytheme_block_templates', 20, 2 );
