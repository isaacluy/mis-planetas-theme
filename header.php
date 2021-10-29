<?php
/**
 * Website header
 *
 * @package MisPlanetasTheme
 * @since 1.0.0
 */

?>
<!DOCTYPE html>
<html lang="es">
	<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<?php
		wp_head();
	?>
	</head>
	<body class="bg-gray-50">
	<?php
	// Adds the Main Menu.
	get_template_part(
		'template_parts/main',
		'menu',
	);
	?>

<!-- MAIN -->
	<main id="root" class="container mx-auto p-8 lg:w-11/12">
