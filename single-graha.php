<?php
	/**
	 * Grahas Template
	 *
	 * @package MisPlanetasTheme
	 * @since 1.0.0
	 */

	// Basically includes header.php.
	get_header();
	get_template_part(
		'template_parts/grahas',
		'submenu'
	);
	?>

<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		$current_post_id           = get_the_ID();
		$current_post_title        = get_the_title( $current_post_id );
		$current_post_nombre_comun = get_post_meta( $current_post_id, 'nombreComun', true );

		?>
			<!-- ENTRY HEADER -->
			<section class="bg-white rounded-xl p-8 mb-4 shadow lg:flex lg:p-0">
			<?php
			if ( has_post_thumbnail() ) {
				?>
				<img
					class="
						w-32
						h-32
						rounded-full
						mx-auto
						lg:mx-0 lg:h-auto lg:rounded-xl lg:rounded-r-none
						shadow
					"
					src="<?php echo esc_attr( wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ) ); ?>"
					alt="<?php echo esc_attr( $current_post_title ); ?> | <?php echo esc_attr( $current_post_nombre_comun ); ?>"
				/>
				<?php
			}
			?>
				<div class="mt-2 text-center lg:text-left lg:m-4">
					<h1
						class="text-red-900 text-2xl text-center lg:text-left lg:text-3xl"
					>
						<?php echo esc_attr( $current_post_title ); ?>
						<span class="text-sm italic">( <?php echo esc_attr( $current_post_nombre_comun ); ?> )</span>
					</h1>
					<p class="mt-1 text-base text-gray-600 italic lg:text-lg">
						<?php the_excerpt(); ?>
					</p>
				</div>
			</section>
			<!-- END ENTRY HEADER -->

			<!-- FAVORABLE VS DESFAVORABLE -->
				<?php the_content(); ?>
		<?php
	}
}
?>

<?php
	// Basically includes footer.php.
	get_footer();
