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
	require get_template_directory() . '/inc/grahas-list.php';
	?>
	<!-- END GRAHAS -->

	<!-- RISHIS -->
	<?php
	include_file_with_variables(
		get_template_directory() . '/inc/rishis-or-bhavas-grid.php',
		array(
			'id'               => 'rishis',
			'nombre_sanscrito' => 'Rishis',
			'nombre_comun'     => 'Constelaciones',
		)
	);
	?>
	<!-- END RISHIS -->

	<!-- BHAVAS -->
	<?php
	include_file_with_variables(
		get_template_directory() . '/inc/rishis-or-bhavas-grid.php',
		array(
			'id'               => 'bhavas',
			'nombre_sanscrito' => 'Bhavas',
			'nombre_comun'     => 'Casas',
		)
	);
	?>
	<!-- END BHAVAS -->

<?php
	// Basically includes footer.php.
	get_footer();
?>
