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
	<section id="grahas-section" class="mb-24">
	<?php
	// Adds the list of Grahas to the Home Page.
	get_template_part(
		'template_parts/grahas',
		'list',
	);
	?>
	</section>
	<!-- END GRAHAS -->

	<!-- RISHIS -->
	<section id="rishis-section" class="mb-24">
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
	</section>
	<!-- END RISHIS -->

	<!-- BHAVAS -->
	<section id="bhavas-section" class="mb-24">
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
	</section>
	<!-- END BHAVAS -->

<?php
	// Basically includes footer.php.
	get_footer();
?>
