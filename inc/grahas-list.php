<?php
/**
 *
 * The Grahas list for the home page
 *
 * @package MisPlanetasTheme
 */

?>

		<?php
		// Adds the red h1 title.
		include_file_with_variables(
			get_template_directory() . '/inc/list-or-grid-header.php',
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
				if ( 1 === $post_mod ) {
					?>
			<a href="<?php the_permalink(); ?>">
				<figure class="bg-white rounded-xl p-8 mb-6 lg:flex lg:p-0">
					<img
					class="
						w-32
						h-32
						rounded-full
						mx-auto
						lg:mx-0 lg:w-48 lg:h-auto lg:rounded-xl lg:rounded-r-none
					"
					src="http://cdn.sci-news.com/images/enlarge7/image_8862_1e-Jupiter-Europa.jpg"
					alt="<?php the_title(); ?>"
					width="384"
					height="512"
					/>
					<div class="pt-6 lg:p-8 text-center lg:text-left space-y-4">
					<figcaption>
						<div class="text-cyan-600 font-medium">
						<?php the_title(); ?>
						<span class="text-sm font-normal italic"> (<?php the_title(); ?>) </span>
						</div>
					</figcaption>
					<blockquote>
						<p>
					<?php the_content(); ?>
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
					<img
						class="w-32 h-32 rounded-full mx-auto lg:hidden"
						src="https://s3-us-west-2.amazonaws.com/uw-s3-cdn/wp-content/uploads/sites/6/2021/01/25211738/PIA23791_fig2.jpg"
						alt="<?php the_title(); ?>"
						width="384"
						height="512"
					/>
					<div class="w-full pt-6 lg:p-8 text-center lg:text-left space-y-4">
						<figcaption>
							<div class="text-cyan-600 font-medium">
						<?php the_title(); ?>
								<span class="text-sm font-normal italic"> (<?php the_title(); ?>) </span>
							</div>
						</figcaption>
						<blockquote>
							<p>
						<?php the_content(); ?>
							</p>
						</blockquote>
					</div>
					<img
						class="hidden w-48 h-auto rounded-xl rounded-l-none lg:block"
						src="https://s3-us-west-2.amazonaws.com/uw-s3-cdn/wp-content/uploads/sites/6/2021/01/25211738/PIA23791_fig2.jpg"
						alt="Shukla - Venus"
						width="384"
						height="512"
					/>
				</figure>
			</a>
						<?php
				}
					$post_index++;
			}
		}
		?>
