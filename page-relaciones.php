<?php
	/**
	 * Relaciones Page Template
	 *
	 * @package MisPlanetasTheme
	 * @since 1.0.0
	 */

	// Basically includes header.php.
	get_header();
	get_template_part(
		'template_parts/relaciones',
		'submenu'
	);
	?>

<h1 class="mb-6 text-red-900 text-2xl text-center lg:text-left lg:text-3xl">
		Relaciones entre las tres variables
</h1>
<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		the_content();
	}
}
	// Basically includes footer.php.
	get_footer();
