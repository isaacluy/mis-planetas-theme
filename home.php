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

<!-- MAIN -->
	<main id="root" class="container mx-auto p-8 lg:w-11/12">
	<!-- GRAHAS.-->
	<?php
	require get_template_directory() . '/inc/grahas-list.php';
	?>
	<!-- END GRAHAS -->

		<!-- RISHIS 
		<h1
		id="rishis"
		class="
			text-red-900 text-2xl
			my-4
			text-center
			lg:text-left lg:ml-4 lg:text-3xl
		"
		>
		Rishis
		<span class="text-sm italic">(Constelaciones)</span>
		</h1>

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
		<li class="relative">
			<a href="rishis/sagitario.html">
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
				<span class="sr-only">Ver detalles de Sagitario</span>
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
				Sagitario
			</p>
			<p
				class="
				block
				font-medium
				text-center text-sm text-gray-500
				pointer-events-none
				"
			>
				Sagitario
			</p>
			</a>
		</li>
		<li class="relative">
			<a href="rishis/sagitario.html">
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
				src="https://thepacepress.org/wp-content/uploads/2019/11/zodiac-sign-4374414_960_720-900x636.jpg"
				alt="Capricornio"
				class="object-cover pointer-events-none group-hover:opacity-75"
				/>
				<button type="button" class="absolute inset-0 focus:outline-none">
				<span class="sr-only">Ver detalles de Capricornio</span>
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
				Capricornio
			</p>
			<p
				class="
				block
				font-medium
				text-center text-sm text-gray-500
				pointer-events-none
				"
			>
				Capricornio
			</p>
			</a>
		</li>
		<li class="relative">
			<a href="rishis/sagitario.html">
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
				src="https://uploads-ssl.webflow.com/566f41e69091869557a9d12d/5f526d3a70a1c2200a16b93e_Aquarius.png"
				alt="Acuario"
				class="object-cover pointer-events-none group-hover:opacity-75"
				/>
				<button type="button" class="absolute inset-0 focus:outline-none">
				<span class="sr-only">Ver detalles de Acuario</span>
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
				Acuario
			</p>
			<p
				class="
				block
				font-medium
				text-center text-sm text-gray-500
				pointer-events-none
				"
			>
				Acuario
			</p>
			</a>
		</li>
		<li class="relative">
			<a href="rishis/sagitario.html">
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
				src="https://static.toiimg.com/photo/84376765.cms"
				alt="Piscis"
				class="object-cover pointer-events-none group-hover:opacity-75"
				/>
				<button type="button" class="absolute inset-0 focus:outline-none">
				<span class="sr-only">Ver detalles de Piscis</span>
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
				Piscis
			</p>
			<p
				class="
				block
				font-medium
				text-center text-sm text-gray-500
				pointer-events-none
				"
			>
				Piscis
			</p>
			</a>
		</li>
		<li class="relative">
			<a href="rishis/sagitario.html">
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
				src="https://www.datocms-assets.com/7756/1600771626-zodiac-sign-4374404.jpg?auto=enhance%2Cformat&h=630&w=1200"
				alt="Aries"
				class="object-cover pointer-events-none group-hover:opacity-75"
				/>
				<button type="button" class="absolute inset-0 focus:outline-none">
				<span class="sr-only">Ver detalles de Aries</span>
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
				Aries
			</p>
			<p
				class="
				block
				font-medium
				text-center text-sm text-gray-500
				pointer-events-none
				"
			>
				Aries
			</p>
			</a>
		</li>
		<li class="relative">
			<a href="rishis/sagitario.html">
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
				src="https://blog.prepscholar.com/hs-fs/hubfs/body-taurus-taurean-symbol.jpg?width=400&name=body-taurus-taurean-symbol.jpg"
				alt="Tauro"
				class="object-cover pointer-events-none group-hover:opacity-75"
				/>
				<button type="button" class="absolute inset-0 focus:outline-none">
				<span class="sr-only">Ver detalles de Tauro</span>
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
				Tauro
			</p>
			<p
				class="
				block
				font-medium
				text-center text-sm text-gray-500
				pointer-events-none
				"
			>
				Tauro
			</p>
			</a>
		</li>
		</ul>
		<!-- END RISHIS -->

		<!-- BHAVAS 
		<h1
		id="bhavas"
		class="
			text-red-900 text-2xl
			my-4
			text-center
			lg:text-left lg:ml-4 lg:text-3xl
		"
		>
		Bhavas
		<span class="text-sm italic">(Casas)</span>
		</h1>

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
		<li class="relative">
			<a href="bhavas/casa-11.html">
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
				src="https://astromundus.com/wp-content/uploads/2020/05/Casa-11-830x400-1.jpg"
				alt="Casa 11"
				class="object-cover pointer-events-none group-hover:opacity-75"
				/>
				<button type="button" class="absolute inset-0 focus:outline-none">
				<span class="sr-only">Ver detalles de Casa 11</span>
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
				Casa 11
			</p>
			<p
				class="
				block
				font-medium
				text-center text-sm text-gray-500
				pointer-events-none
				"
			>
				Casa 11
			</p>
			</a>
		</li>
		<li class="relative">
			<a href="bhavas/casa-11.html">
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
				src="https://astromundus.com/wp-content/uploads/2020/05/Casa-11-830x400-1.jpg"
				alt="Casa 12"
				class="object-cover pointer-events-none group-hover:opacity-75"
				/>
				<button type="button" class="absolute inset-0 focus:outline-none">
				<span class="sr-only">Ver detalles de Casa 12</span>
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
				Casa 12
			</p>
			<p
				class="
				block
				font-medium
				text-center text-sm text-gray-500
				pointer-events-none
				"
			>
				Casa 12
			</p>
			</a>
		</li>
		<li class="relative">
			<a href="bhavas/casa-11.html">
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
				src="https://astromundus.com/wp-content/uploads/2020/05/Casa-11-830x400-1.jpg"
				alt="Casa 1"
				class="object-cover pointer-events-none group-hover:opacity-75"
				/>
				<button type="button" class="absolute inset-0 focus:outline-none">
				<span class="sr-only">Ver detalles de Casa 1</span>
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
				Casa 1
			</p>
			<p
				class="
				block
				font-medium
				text-center text-sm text-gray-500
				pointer-events-none
				"
			>
				Casa 1
			</p>
			</a>
		</li>
		</ul>
		<!-- END BHAVAS -->

<?php
	// Basically includes footer.php.
	get_footer();
?>
