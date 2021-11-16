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

<h1> This is where the RELACIONES PAGE content goes!</p>

<?php
	// Basically includes footer.php.
	get_footer();
