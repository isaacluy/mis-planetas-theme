<?php
	/**
	 * Home Page Template
	 *
	 * @package MisPlanetasTheme
	 * @since 1.0.0
	 */

	// Basically includes header.php.
	get_header();
?>
	<!-- GRAHAS.-->
	<?php
	// Adds the list of Grahas to the Home Page.
	get_template_part(
		'template_parts/grahas',
		'list',
	);
	?>
	<!-- END GRAHAS -->

	<!-- RISHIS -->
	<?php
	// Adds the grid of Rishis to the Home Page.
	get_template_part(
		'template_parts/rishis-or-bhavas',
		'grid',
		array(
			'id'               => 'rishis',
			'nombre_sanscrito' => 'Rishis',
			'nombre_comun'     => 'Constelaciones',
			'post_type'        => 'rishi',
		)
	);
	?>
	<!-- END RISHIS -->

	<!-- BHAVAS -->
	<?php
	// Adds the grid of Bhavas to the Home Page.
	get_template_part(
		'template_parts/rishis-or-bhavas',
		'grid',
		array(
			'id'               => 'bhavas',
			'nombre_sanscrito' => 'Bhavas',
			'nombre_comun'     => 'Casas',
			'post_type'        => 'bhava',
		)
	);
	?>
	<!-- END BHAVAS -->

<?php
	// Basically includes footer.php.
	get_footer();
?>
