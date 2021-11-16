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
	<link rel="icon" type="image/png" sizes="16x16"  href="<?php echo esc_attr( get_template_directory_uri() ) . '/assets/favicon-16x16.png'; ?>">
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
	<main id="root" class="container mx-auto px-8 py-12 lg:w-11/12">
