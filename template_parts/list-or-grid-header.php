<?php
	/**
	 * This file renders a red h1 HTML tag for the main titles on the website
	 *
	 * @package MisPlanetasTheme
	 */

?>

<h1
	id="<?php echo esc_attr( $args['id'] ); ?>"
	class="
		text-red-900 text-2xl
		mb-4
		text-center
		lg:text-left lg:ml-4 lg:text-3xl
	"
>
	<?php echo esc_attr( $args['nombre_sanscrito'] ); ?>
	<span class="text-sm italic">(<?php echo esc_attr( $args['nombre_comun'] ); ?>)</span>
</h1>
