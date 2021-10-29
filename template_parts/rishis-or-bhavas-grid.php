<?php
/**
 *
 * The Rishis or Bhavas grid for the home page
 *
 * @package MisPlanetasTheme
 */

?>

		<?php
		// Adds the red h1 title before the Rishis or Bhavas grid.
		get_template_part(
			'template_parts/list-or-grid',
			'header',
			$args
		);
		?>
		<ul
		role="list"
		class="
			grid grid-cols-2
			gap-x-4 gap-y-8
			sm:grid-cols-3 sm:gap-x-6
			lg:grid-cols-4
			xl:gap-x-8
		"
		>
	<?php
	// TODO: I might need rewind_posts() below this line?
	$rishis_or_bhavas = new WP_Query( 'post_type=' . $args['post_type'] . '&posts_per_page=12' );
	while ( $rishis_or_bhavas->have_posts() ) {
		$rishis_or_bhavas->the_post();
		$current_post_id           = get_the_ID();
		$current_post_nombre_comun = get_post_meta( $current_post_id, 'nombreComun', true );
		?>
			<li class="relative">
				<a href="<?php the_permalink(); ?>">
				<div
					class="
					group
					block
					w-full
					aspect-w-10 aspect-h-7
					rounded-lg
					bg-gray-100
					focus-within:ring-2
					focus-within:ring-offset-2
					focus-within:ring-offset-gray-100
					focus-within:ring-indigo-500
					overflow-hidden
					"
				>
				<?php
				if ( has_post_thumbnail() ) {
					?>
					<img
					src="<?php echo esc_attr( wp_get_attachment_url( get_post_thumbnail_id( $current_post_id ) ) ); ?>"
					alt="Sagitario"
					class="object-cover pointer-events-none group-hover:opacity-75"
					/>
					<?php
				}
				?>
					<button type="button" class="absolute inset-0 focus:outline-none">
					<span class="sr-only">Ver detalles de <?php the_title(); ?></span>
					</button>
				</div>
				<p
					class="
					mt-2
					block
					font-medium
					text-center text-cyan-600
					truncate
					pointer-events-none
					"
				>
					<?php the_title(); ?>
				</p>
				<p
					class="
					block
					font-medium
					text-center text-sm text-gray-500
					pointer-events-none
					"
				>
					<?php echo esc_attr( $current_post_nombre_comun ); ?>
				</p>
				</a>
			</li>
		<?php } ?>
		</ul>
