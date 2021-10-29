<?php
/**
 *
 * The Grahas list for the home page
 *
 * @package MisPlanetasTheme
 */

?>

		<?php
		// Adds the red h1 title before the Grahas list.
		get_template_part(
			'template_parts/list-or-grid',
			'header',
			array(
				'id'               => 'grahas',
				'nombre_sanscrito' => 'Grahas',
				'nombre_comun'     => 'Planetas',
			)
		);
		?>

		<?php
		$post_index = 1;
		$grahas     = new WP_Query( 'post_type=graha&posts_per_page=9' );
		if ( $grahas->have_posts() ) {
			while ( $grahas->have_posts() ) {
				$post_mod = $post_index % 2;
				$grahas->the_post();
				$current_post_id           = get_the_ID();
				$current_post_nombre_comun = get_post_meta( $current_post_id, 'nombreComun', true );
				if ( 1 === $post_mod ) {
					?>
			<a href="<?php the_permalink(); ?>">
				<figure class="bg-white rounded-xl p-8 mb-6 lg:flex lg:p-0">
					<?php
					if ( has_post_thumbnail() ) {
						?>
					<img
					class="
						w-32
						h-32
						rounded-full
						mx-auto
						lg:mx-0 lg:w-48 lg:h-auto lg:rounded-xl lg:rounded-r-none
					"
					src="<?php echo esc_attr( wp_get_attachment_url( get_post_thumbnail_id( $current_post_id ) ) ); ?>"
					alt="<?php the_title(); ?>"
					/>
						<?php
					}
					?>
					<div class="pt-6 lg:p-8 text-center lg:text-left space-y-4">
					<figcaption>
						<div class="text-cyan-600 font-medium">
						<?php the_title(); ?>
						<span class="text-sm font-normal italic"> (<?php echo esc_attr( $current_post_nombre_comun ); ?>) </span>
						</div>
					</figcaption>
					<blockquote>
						<p>
					<?php the_excerpt(); ?>
						</p>
					</blockquote>
					</div>
				</figure>
			</a>
					<?php
				} else {
					?>
			<a href="<?php the_permalink(); ?>">
				<figure class="bg-white rounded-xl p-8 mb-6 lg:flex lg:p-0">
					<?php
					if ( has_post_thumbnail() ) {
						?>
					<img
						class="w-32 h-32 rounded-full mx-auto lg:hidden"
						src="<?php echo esc_attr( wp_get_attachment_url( get_post_thumbnail_id( $current_post_id ) ) ); ?>"
						alt="<?php the_title(); ?>"
					/>
						<?php
					}
					?>
					<div class="w-full pt-6 lg:p-8 text-center lg:text-left space-y-4">
						<figcaption>
							<div class="text-cyan-600 font-medium">
						<?php the_title(); ?>
								<span class="text-sm font-normal italic"> (<?php echo esc_attr( $current_post_nombre_comun ); ?>) </span>
							</div>
						</figcaption>
						<blockquote>
							<p>
						<?php the_excerpt(); ?>
							</p>
						</blockquote>
					</div>
					<?php
					if ( has_post_thumbnail() ) {
						?>
					<img
						class="hidden w-48 h-auto rounded-xl rounded-l-none lg:block"
						src="<?php echo esc_attr( wp_get_attachment_url( get_post_thumbnail_id( $current_post_id ) ) ); ?>"
						alt="Shukla - Venus"
						width="384"
						height="512"
					/>
						<?php
					}
					?>
				</figure>
			</a>
						<?php
				}
					$post_index++;
			}
		}
		?>
