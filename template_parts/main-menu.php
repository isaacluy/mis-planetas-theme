<?php
/**
 * Main menu at the top of every page
 *
 * @package MisPlanetasTheme
 * @since 1.0.0
 */

$grahas_text = 'Grahas';
$rishis_text = 'Rishis';
$bhavas_text = 'Bhavas';
?>
		<!-- HEADER -->
		<header class="bg-red-700">
			<nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" aria-label="Top">
				<div
					class="
						hidden
						w-full
						h-28
						pt-12
						lg:block
					"
				>
					<a class="float-left -mt-2" href="<?php echo esc_attr( get_home_url() ); ?>">
						<span class="sr-only">
							Centro Latinoamericano de Estudios Védicos
						</span>
						<img
							class="h-10 w-auto"
							src="https://storage.googleapis.com/mis-planetas-assets/clev-logo.png"
							alt="Centro Latinoamericano de Estudios Védicos"
						/>
					</a>
					<div class="float-left ml-10 space-x-8">
						<a
							href="<?php echo esc_attr( get_home_url() ) . '/#grahas'; ?>"
							class="text-base font-medium text-white hover:text-red-50"
							key="<?php echo esc_attr( $grahas_text ); ?>"
						>
							<?php echo esc_attr( $grahas_text ); ?>
						</a>

						<a
							href="<?php echo esc_attr( get_home_url() ) . '/#rishis'; ?>"
							class="text-base font-medium text-white hover:text-red-50"
							key="<?php echo esc_attr( $rishis_text ); ?>"
						>
							<?php echo esc_attr( $rishis_text ); ?>
						</a>

						<a
							href="<?php echo esc_attr( get_home_url() ) . '/#bhavas'; ?>"
							class="text-base font-medium text-white hover:text-red-50"
							key="<?php echo esc_attr( $bhavas_text ); ?>"
						>
							<?php echo esc_attr( $bhavas_text ); ?>
						</a>

						<!-- <a
							href="<?php echo esc_attr( get_home_url() ); ?>"
							class="text-base font-medium text-white hover:text-red-50"
							key="Relaciones"
						>
							Relaciones
						</a>

						<a
							href="<?php echo esc_attr( get_home_url() ); ?>"
							class="text-base font-medium text-white hover:text-red-50"
							key="Analisis"
						>
							Análisis
						</a> -->
					</div>
					<div class="float-right">
						<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_attr( get_home_url() ); ?>">
							<div class="relative rounded-md shadow-sm">
								<div class="absolute inset-y-0 pl-1 pt-1 left-0 items-center pointer-events-none">
										<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 24 24" fill="currentColor">
											<path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
										</svg>
								</div>
								<input
									type="text"
									name="s"
									id="s"
									class="float-left w-72 pl-8 border-gray-300 rounded-md focus:ring-yellow-500 focus:border-yellow-500">
								<!--
								<button
									class="float-left w-24 p-1 ml-2 -m-0.5 rounded-md text-sm bg-yellow-400 hover:bg-yellow-200"
									type="submit"
								>
									Buscar
								</button>
								-->
							</div>
						</form>
					</div>
				</div>

				<!-- MOBILE MENU -->
				<div class="pt-8 pb-4 flex flex-wrap justify-center lg:hidden">
					<a href="<?php echo esc_attr( get_home_url() ); ?>">
						<span class="sr-only">
							Centro Latinoamericano de Estudios Védicos
						</span>
						<img
							class="h-10 w-auto"
							src="https://storage.googleapis.com/mis-planetas-assets/clev-logo.png"
							alt="Centro Latinoamericano de Estudios Védicos"
						/>
					</a>
				</div>
				<div class="py-4 flex flex-wrap justify-center space-x-6 border-b border-red-600 lg:hidden">
					<a
						href="<?php echo esc_attr( get_home_url() ) . '/#grahas'; ?>"
						class="text-base font-medium text-white hover:text-red-50"
						key="<?php echo esc_attr( $grahas_text ); ?>"
					>
						<?php echo esc_attr( $grahas_text ); ?>
					</a>

					<a
						href="<?php echo esc_attr( get_home_url() ) . '/#rishis'; ?>"
						class="text-base font-medium text-white hover:text-red-50"
						key="<?php echo esc_attr( $rishis_text ); ?>"
					>
						<?php echo esc_attr( $rishis_text ); ?>
					</a>

					<a
						href="<?php echo esc_attr( get_home_url() ) . '/#bhavas'; ?>"
						class="text-base font-medium text-white hover:text-red-50"
						key="<?php echo esc_attr( $bhavas_text ); ?>"
					>
						<?php echo esc_attr( $bhavas_text ); ?>
					</a>

					<!-- <a
						href="<?php echo esc_attr( get_home_url() ); ?>"
						class="text-base font-medium text-white hover:text-red-50"
						key="Relaciones"
					>
						Relaciones
					</a>

					<a
						href="<?php echo esc_attr( get_home_url() ); ?>"
						class="text-base font-medium text-white hover:text-red-50"
						key="Analisis"
					>
						Análisis
					</a> -->
				</div>
				<!-- END MOBILE MENU -->
				<!-- MOBILE SEARCH -->
				<div class="py-4 flex flex-wrap justify-center lg:hidden">
					<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_attr( get_home_url() ); ?>">
						<div class="relative rounded-md shadow-sm">
							<div class="absolute inset-y-0 pl-1 pt-1 left-0 items-center pointer-events-none">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 24 24" fill="currentColor">
									<path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
								</svg>
							</div>
							<input
								type="text"
								name="s"
								id="s"
								class="block w-full pl-8 border-gray-300 rounded-md focus:ring-yellow-500 focus:border-yellow-500">
							<button
								id="searchsubmit"
								class="block w-24 p-1 mt-1 mx-auto rounded-md text-sm bg-yellow-400 hover:bg-yellow-200"
								type="submit"
							>
								Buscar
							</button>
						</div>
					</form>
				</div>
				<!-- END MOBILE SEARCH -->
			</nav>
		</header>
		<!-- END HEADER -->
