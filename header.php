<!DOCTYPE html>
<html lang="es">
	<head>
	<!-- <title>Mis Planetas Wireframes</title> -->

	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<?php
		/**
		 * Header
		 *
		 * @package MisPlanetasTheme
		 * @since 1.0.0
		 */

		wp_head();

	?>
	</head>
	<body class="bg-gray-50">
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
			<a class="float-left -mt-2" href="/">
				<span class="sr-only"
				>Centro Latinoamericano de Estudios Védicos</span
				>
				<img
				class="h-10 w-auto"
				src="https://www.iniciadossky.com/assets/design2/icon-9fd5dfd8774cebef18ffb89ac5ca5553338227555753edb4670f561e6d7b2a38.png"
				alt="Centro Latinoamericano de Estudios Védicos"
				/>
			</a>
			<div class="float-left ml-10 space-x-8">
				<a
				href="/#grahas"
				class="text-base font-medium text-white hover:text-red-50"
				key="Grahas"
				>
				Grahas
				</a>

				<a
				href="/#rishis"
				class="text-base font-medium text-white hover:text-red-50"
				key="Rishis"
				>
				Rishis
				</a>

				<a
				href="/#bhavas"
				class="text-base font-medium text-white hover:text-red-50"
				key="Bhavas"
				>
				Bhavas
				</a>

				<a
				href="/"
				class="text-base font-medium text-white hover:text-red-50"
				key="Relaciones"
				>
				Relaciones
				</a>

				<a
				href="/"
				class="text-base font-medium text-white hover:text-red-50"
				key="Analisis"
				>
				Análisis
				</a>
			</div>
			<div class="float-right">
				<form action="/">
				<div class="relative rounded-md shadow-sm">
					<div class="absolute inset-y-0 pl-1 pt-1 left-0 items-center pointer-events-none">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 24 24" fill="currentColor">
						<path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
					</svg>
					</div>
					<input
					type="search"
					name="q"
					id="search"
					class="float-left w-60 pl-8 border-gray-300 rounded-md focus:ring-yellow-500 focus:border-yellow-500">
					<button
					class="float-left w-24 p-1 ml-2 -m-0.5 rounded-md text-sm bg-yellow-400 hover:bg-yellow-200"
					type="submit"
					>
					Buscar
					</button>
				</div>
				</form>
			</div>
		</div>

		<div class="pt-8 pb-4 flex flex-wrap justify-center lg:hidden">
			<a href="/">
			<span class="sr-only">
				Centro Latinoamericano de Estudios Védicos
			</span>
			<img
				class="h-10 w-auto"
				src="https://www.iniciadossky.com/assets/design2/icon-9fd5dfd8774cebef18ffb89ac5ca5553338227555753edb4670f561e6d7b2a38.png"
				alt="Centro Latinoamericano de Estudios Védicos"
			/>
			</a>
		</div>
		<div class="py-4 flex flex-wrap justify-center space-x-6 border-b border-red-600 lg:hidden">
			<a
			href="/#grahas"
			class="text-base font-medium text-white hover:text-red-50"
			key="Grahas"
			>
			Grahas
			</a>

			<a
			href="/#rishis"
			class="text-base font-medium text-white hover:text-red-50"
			key="Rishis"
			>
			Rishis
			</a>

			<a
			href="/#bhavas"
			class="text-base font-medium text-white hover:text-red-50"
			key="Bhavas"
			>
			Bhavas
			</a>

			<a
			href="/"
			class="text-base font-medium text-white hover:text-red-50"
			key="Relaciones"
			>
			Relaciones
			</a>

			<a
			href="/"
			class="text-base font-medium text-white hover:text-red-50"
			key="Analisis"
			>
			Análisis
			</a>
		</div>

		<div class="py-4 flex flex-wrap justify-center lg:hidden">
			<form action="{{ url("search/results") }}">
			<div class="relative rounded-md shadow-sm">
				<div class="absolute inset-y-0 pl-1 pt-1 left-0 items-center pointer-events-none">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 24 24" fill="currentColor">
					<path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
				</svg>
				</div>
				<input
				type="search"
				name="q"
				id="search"
				class="block w-full pl-8 border-gray-300 rounded-md focus:ring-yellow-500 focus:border-yellow-500">
				<button
				class="block w-24 p-1 mt-1 mx-auto rounded-md text-sm bg-yellow-400 hover:bg-yellow-200"
				type="submit"
				>
				Buscar
				</button>
			</div>
			</form>
		</div>
		</nav>
	</header>
	<!-- END HEADER -->

<!-- MAIN -->
	<main id="root" class="container mx-auto p-8 lg:w-11/12">
