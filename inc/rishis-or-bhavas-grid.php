<?php
/**
 *
 * The Rishis or Bhavas grid for the home page
 *
 * @package MisPlanetasTheme
 */

?>

		<?php
		// Adds the red h1 title.
		include_file_with_variables(
			get_template_directory() . '/inc/list-or-grid-header.php',
			$variables
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
	$rishis_or_bhavas = new WP_Query( 'post_type=' . $variables['post_type'] . '&posts_per_page=12' );
	while ( $rishis_or_bhavas->have_posts() ) {
		$rishis_or_bhavas->the_post();
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
					<img
					src="https://www.thelist.com/img/gallery/heres-what-everyone-gets-wrong-about-sagittarius/intro-1624392883.jpg"
					alt="Sagitario"
					class="object-cover pointer-events-none group-hover:opacity-75"
					/>
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
					<?php the_title(); ?>
				</p>
				</a>
			</li>
		<?php } ?>
		</ul>
