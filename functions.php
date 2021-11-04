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
			$title = __( '(No title)', 'mis-planetas-theme' );
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
 * Registers the graha, rishi and bhava post types
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
function get_comments_html( $comment, $args, $depth ) {
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
 * This returns the array representation of an h2 heading in mis-planetas-theme.
 *
 * @since 1.0.0
 * @param anchor      $anchor A string representing the anchor(#) link for this heading.
 * @param content     $content A string that will be displayed as a heading.
 * @param placeholder $placeholder A string that will be displayed as a placeholder hint.
 * @param class_name  $class_name A string of custom CSS classes to be added to the base heading classes.
 *
 * There's a level attribute that can be a number between 1-6 to define h1, h2, h3, etc... May be useful in the future.
 */
function get_theme_h2_heading( $anchor = '', $content = '', $placeholder = 'Aquí va el título H2', $class_name = null ) {
	$base_class = 'mb-4 text-red-900 text-xl lg:text-left lg:text-2xl';

	return array(
		'core/heading',
		array(
			'anchor'      => $anchor,
			'className'   => ! $class_name ? $base_class : $base_class . ' ' . $class_name,
			'content'     => $content,
			'placeholder' => $placeholder,
		),
	);
}

/**
 * This returns the array representation of a paragraph in mis-planetas-theme.
 *
 * @since 1.0.0
 * @param placeholder $placeholder A string that will be displayed as a placeholder hint.
 */
function get_theme_paragraph( $placeholder = 'Aquí va el contenido' ) {
	return array(
		'core/paragraph',
		array(
			'placeholder' => $placeholder,
		),
	);
}

/**
 * This returns the array representation of a list in mis-planetas-theme.
 *
 * @since 1.0.0
 * @param placeholder $placeholder A string that will be displayed as a placeholder hint.
 */
function get_theme_list( $placeholder = 'Aquí va el contenido' ) {
	return array(
		'core/list',
		array(
			'className'   => 'text-lg italic text-center text-gray-400 space-y-2 lg:text-xl',
			'placeholder' => $placeholder,
		),
	);
}

/**
 * This returns the array representation of a custom HTML in mis-planetas-theme.
 *
 * @since 1.0.0
 * @param html $html A string represents the custom HTML that you want to display on a block.
 */
function get_theme_html( $html = '<div>Pega aquí tu código HTML</div>' ) {
	return array(
		'core/html',
		array(
			'content' => $html,
		),
	);
}

/**
 * This returns the array representation of a column in mis-planetas-theme.
 *
 * @since 1.0.0
 * @param anchor    $anchor A string representing the anchor(#) link for this column.
 * @param content   $content An array of array representations of blocks.
 * @param use_class $use_class A string representing the different column layout options available for this theme [ 'full', '1/2', '2/3' ].
 */
function get_theme_column( $anchor = null, $content = null, $use_class = '1/2' ) {
	$class_base = 'w-full h-auto p-8 mb-4 bg-white rounded-xl shadow';

	// Just in case! TODO: Remove these comment lines.
	// ORIGINAL FULL CSS: 'p-8 mb-4 bg-white rounded-xl shadow'.
	$class_name = array(
		'full' => $class_base,
		'1/2'  => $class_base . ' space-y-4 lg:w-1/2 lg:mb-0',
		'1/3'  => $class_base . ' space-y-4 lg:w-1/3 lg:mb-0',
		'2/3'  => $class_base . ' space-y-4 lg:w-2/3 lg:mx-auto',
	);

	return array(
		'core/column',
		array(
			'className' => $class_name[ $use_class ],
			'anchor'    => $anchor,
		),
		$content,
	);
}

/**
 * This returns the array representation of columns in mis-planetas-theme.
 *
 * @since 1.0.0
 * @param content    $content An array of array representations of blocks.
 * @param class_name $class_name A string of custom classes to be applied to the column (optional).
 */
function get_theme_columns( $content = null, $class_name = null ) {
	return array(
		'core/columns',
		array(
			'className' => $class_name ? $class_name : 'mb-4 lg:flex lg:p-0 lg:space-x-4',
		),
		$content,
	);
}

/**
 * This returns the array representation of the standard one column with white background, rounded corners and shadow (card) in mis-planetas-theme.
 *
 * @since 1.0.0
 * @param content $content An array of key value pairs to generate the standard one column white card layout for mis-planetas-theme.
 */
function get_one_column_white_card( $content = null ) {
	return ! $content ? null : get_theme_columns(
		array(
			get_theme_column(
				$content['anchor_column'],
				array(
					get_theme_h2_heading(
						$content['anchor_column'],
						$content['heading_column'],
					),
					$content['block'],
				),
				'full'
			),
		),
		'mb-0'
	);
}

/**
 * This returns the array representation of the standard two columns with white background, rounded corners and shadow (card) in mis-planetas-theme.
 *
 * @since 1.0.0
 * @param content $content An array of key value pairs to generate the standard two columns white card layout for mis-planetas-theme.
 */
function get_two_columns_white_card( $content ) {
	return ! $content ? null : get_theme_columns(
		array(
			get_theme_column(
				$content['anchor_column_left'],
				array(
					get_theme_h2_heading(
						$content['anchor_column_left'],
						$content['heading_column_left'],
					),
					get_theme_paragraph( $content['paragraph_column_left'] ),
				),
			),
			get_theme_column(
				$content['anchor_column_right'],
				array(
					get_theme_h2_heading(
						$content['anchor_column_right'],
						$content['heading_column_right'],
					),
					get_theme_paragraph( $content['paragraph_column_right'] ),
				),
			),
		)
	);
}

/**
 * This returns the array representation of the standard two columns with white background, rounded corners and shadow (card) in mis-planetas-theme.
 *
 * @since 1.0.0
 * @param content $content An array of key value pairs to generate the standard two columns white card layout for mis-planetas-theme.
 */
function get_three_columns_white_card( $content ) {
	return ! $content ? null : get_theme_columns(
		array(
			get_theme_column(
				$content['anchor_column_left'],
				array(
					get_theme_h2_heading(
						$content['anchor_column_left'],
						$content['heading_column_left'],
					),
					get_theme_paragraph( $content['paragraph_column_left'] ),
				),
				'1/3'
			),
			get_theme_column(
				$content['anchor_column_center'],
				array(
					get_theme_h2_heading(
						$content['anchor_column_center'],
						$content['heading_column_center'],
					),
					get_theme_paragraph( $content['paragraph_column_center'] ),
				),
				'1/3'
			),
			get_theme_column(
				$content['anchor_column_right'],
				array(
					get_theme_h2_heading(
						$content['anchor_column_right'],
						$content['heading_column_right'],
					),
					get_theme_paragraph( $content['paragraph_column_right'] ),
				),
				'1/3'
			),
		),
	);
}

/**
 * Returns an array based blocks template for the Graha post type 'graha'
 *
 * @since 1.0.0
 */
function grahas_block_template() {
	// "FAVORABLE VS DESFAVORABLE" TEMPLATE CONTENT.
	$favorable_desfavorable = array(
		'anchor_column_left'     => 'favorable',
		'anchor_column_right'    => 'desfavorable',
		'heading_column_left'    => 'Planeta Favorable',
		'heading_column_right'   => 'Planeta Desfavorable',
		'paragraph_column_left'  => 'Texto que habla sobre cuando el planeta está favorable...',
		'paragraph_column_right' => 'Texto que habla sobre cuando el planeta está desfavorable...',
	);

	// "FÍSICO Y SALUD + PSICOLOGÍA" TEMPLATE CONTENT.
	$fisico_salud_psicologia = array(
		'anchor_column_left'     => 'fisico-salud',
		'anchor_column_right'    => 'psicologia',
		'heading_column_left'    => 'Físico y Salud',
		'heading_column_right'   => 'Psicología',
		'paragraph_column_left'  => 'Texto que habla sobre cómo el planeta afecta en la salud de una persona...',
		'paragraph_column_right' => 'Texto que habla sobre cómo el planeta afecta psicológicamente a una persona...',
	);

	// "KARAKAS" TEMPLATE CONTENT.
	$karakas = array(
		'anchor_column_left'     => 'karakas',
		'anchor_column_right'    => 'karakas-fisicos-mentales',
		'heading_column_left'    => 'Karakas Principales',
		'heading_column_right'   => 'Karakas Físicos y Mentales',
		'paragraph_column_left'  => 'Lista de los karakas del planeta...',
		'paragraph_column_right' => 'Lista de los karakas físicos y mentales relacionados al planeta...',
	);

	// Custom HTML starter template for the "Otros datos sobre ..." section.
	$otros_html = '<div class="flex flew-row flex-wrap gap-3 justify-around lg:gap-4">
	<div id="punto-cardinal" class="w-full h-auto p-4 bg-red-50 rounded-xl text-center lg:w-64">
		<h3 class="text-red-900 text-lg lg:text-xl lg:mb-2">
			<a href="#punto-cardinal">Punto Cardinal</a>
		</h3>
		<ul>
			<li>Aquí va el punto cardinal regido por el planeta</li>
		</ul>
	</div>
</div>';

	return array(
		// "FAVORABLE VS DESFAVORABLE" COLUMNS.
		get_two_columns_white_card( $favorable_desfavorable ),
		// "FÍSICO Y SALUD + PSICOLOGÍA" COLUMNS.
		get_two_columns_white_card( $fisico_salud_psicologia ),
		// "KARAKAS" COLUMNS.
		get_two_columns_white_card( $karakas ),
		// "OTROS DATOS SOBRE EL PLANETA" COLUMN.
		get_theme_columns(
			array(
				get_theme_column(
					'otros',
					array(
						get_theme_h2_heading( 'otros', 'Otros datos sobre Planeta', 'Otros datos sobre Planeta' ),
						get_theme_html( $otros_html ),
					),
					'full'
				),
			),
			'mb-0'
		),
		// "DETALLES" COLUMN.
		get_theme_columns(
			array(
				get_theme_column(
					'detalles',
					array(
						get_theme_h2_heading( 'detalles', 'Detalles' ),
						get_theme_paragraph( 'Todos los demás detalles sobre el planeta...' ),
					),
					'full'
				),
			),
			'mb-0'
		),
		// "NOMBRES ALTERNATIVOS" COLUMN.
		get_theme_columns(
			array(
				get_theme_column(
					'nombres-alternativos',
					array(
						get_theme_h2_heading( 'nombres-alternativos', 'Nombres Alternativos', 'Nombres Alternativos', 'lg:text-center' ),
						get_theme_list( 'Lista de nombres alternativos...' ),
					),
					'2/3'
				),
			),
			'block'
		),
	);
}

/**
 * Returns an array based blocks template for the Rishi post type 'rishi'
 *
 * @since 1.0.0
 */
function rishis_block_template() {
	// "FISICO Y SALUD + GUNAS, MB, VARNA + OTROS" TEMPLATE CONTENT.
	$fisico_salud_gunas_otros = array(
		'anchor_column_left'      => 'fisico-salud',
		'anchor_column_center'    => 'gunas-mb-varna',
		'anchor_column_right'     => 'otros',
		'heading_column_left'     => 'Físico y Salud',
		'heading_column_center'   => 'Gunas, Maha Bhuta y Varna',
		'heading_column_right'    => 'Otros',
		'paragraph_column_left'   => 'Texto que habla sobre cómo la constelación afecta en la salud de una persona...',
		'paragraph_column_center' => 'Texto que habla sobre las gunas, el maha bhuta y el varna de la constelación...',
		'paragraph_column_right'  => 'Texto que habla sobre otros aspectos de la constelación...',
	);

	return array(
		// "FISICO Y SALUD + GUNAS, MB, VARNA + OTROS" COLUMNS.
		get_three_columns_white_card( $fisico_salud_gunas_otros ),
		// "DETALLES" COLUMN.
		get_theme_columns(
			array(
				get_theme_column(
					'detalles',
					array(
						get_theme_h2_heading( 'detalles', 'Detalles' ),
						get_theme_paragraph( 'Todos los demás detalles sobre la constelación...' ),
					),
					'full'
				),
			),
			'mb-0'
		),
	);
}

/**
 * Sets up a blocks template for post type 'post'
 *
 * @since 1.0.0
 * @param args      $args The arguments passed to register_post_type_args.
 * @param post_type $post_type A string representing the post type.
 */
function mis_planetas_theme_block_templates( $args, $post_type ) {

	// Only add template to 'post' post type.
	// Change for your post type: eg 'page', 'event', 'product'.
	if ( 'post' === $post_type ) {

		// Optionally lock templates from further changes.
		// Change to 'insert' to allow adding other blocks, but lock defined blocks.
		$args['template_lock'] = 'all';

		// Set the grahas template.
		$args['template'] = rishis_block_template();
	}

	if ( 'graha' === $post_type ) {
		$args['template_lock'] = 'all';
		$args['template']      = grahas_block_template();
	}

	return $args;

}
	// Hook function into post type arguments filter. 20 = priority. 2 = number of args.
	add_filter( 'register_post_type_args', 'mis_planetas_theme_block_templates', 20, 2 );
