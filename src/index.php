<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>NVHCloud SAS - Principal</title>
		<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<link rel="stylesheet" href="./css/perso/main.css">
		<link rel="stylesheet" href="./css/perso/custom.css">
		<style>
			.group:hover .submenu {
			display: block;
			}
			.text-transition_inner {
			overflow: hidden;
			display: block;
			position: absolute;
			top: 0;
			left: 0;
			height: 100%;
			width: 22rem;
			}
			.bounce-1 {
			animation-name: bounce;
			animation-duration: 5s;
			animation-iteration-count: infinite;
			}
			@keyframes bounce {
			0% {transform: translateY(0);}
			50% {transform: translateY(-5px);}
			100% {transform: translateY(0);}
			}
			@layer utilities {
			.highlight {
			background-color: #00aaff;
			color: white;
			}
			}
			.text-transition_inner div {
			transition: transform 0.5s ease-in-out;
			}
		</style>
	</head>
	<body class=" w-screen overflow-x-hidden ">
		<?php include 'navbar.html';?>
		<section class="z-0 sm:mt-1 ">
			<section class="sm:bg-blue-500  overflow-hidden">
				<div class="pt-10 bg-white sm:pt-16 lg:pb-16 w-screen lg:overflow-hidden">
					<div class="mx-auto max-w-7xl lg:px-8 mb-12">
						<div class="lg:grid lg:grid-cols-2 lg:gap-8 mt-8">
							<div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 sm:text-start lg:px-0 lg:text-left lg:flex lg:items-start">
								<div class="lg:py-24 max-w-xl ">
									<h1 class="mt-4 text-3xl tracking-tight font-bold text-black sm:mt-5 sm:text-4xl lg:mt-6 mr-16 ">
										<span class="block">
										L'hébergement pour tout le monde
										</span>
										<span class="block">
											que vous soyez 
											<span class="text-blue-700  overflow-hidden ">
												<div id="width" class="text-transition pb-2 text-3xl font-extrabold transition text-blue-700 bg-clip-text xl:inline sm:text-4xl" style=" white-space: nowrap; display: inline-block; position: relative;">
													<span style="visibility:hidden" class="text-transition_placeholder">start-up</span>
													<div class="text-transition_inner z-10 " style="display:block;position:absolute;top:0;left:0;height:100%;">
														<div id="word-display" style="opacity: 1; transform: translateY(0%); position: absolute;" class="text-[#00aaff] w-96">une Start-Up</div>
													</div>
													<svg aria-hidden="true" viewBox="0 0 418 42" class="absolute top-2/4 left-0 h-[0.58em] z-0 w-full opacity-50" preserveAspectRatio="none">
														<path d="M203.371.916c-26.013-2.078-76.686 1.963-124.73 9.946L67.3 12.749C35.421 18.062 18.2 21.766 6.004 25.934 1.244 27.561.828 27.778.874 28.61c.07 1.214.828 1.121 9.595-1.176 9.072-2.377 17.15-3.92 39.246-7.496C123.565 7.986 157.869 4.492 195.942 5.046c7.461.108 19.25 1.696 19.17 2.582-.107 1.183-7.874 4.31-25.75 10.366-21.992 7.45-35.43 12.534-36.701 13.884-2.173 2.308-.202 4.407 4.442 4.734 2.654.187 3.263.157 15.593-.78 35.401-2.686 57.944-3.488 88.365-3.143 46.327.526 75.721 2.23 130.788 7.584 19.787 1.924 20.814 1.98 24.557 1.332l.066-.011c1.201-.203 1.53-1.825.399-2.335-2.911-1.31-4.893-1.604-22.048-3.261-57.509-5.556-87.871-7.36-132.059-7.842-23.239-.254-33.617-.116-50.627.674-11.629.54-42.371 2.494-46.696 2.967-2.359.259 8.133-3.625 26.504-9.81 23.239-7.825 27.934-10.149 28.304-14.005.417-4.348-3.529-6-16.878-7.066Z"></path>
													</svg>
												</div>
											</span>
											.
										</span>
									</h1>
								</div>
							</div>
							<div class="relative">
								<div class="absolute inset-0 bg-blue-300 rounded-lg transform translate-x-8 translate-y-8"></div>
								<div class="absolute inset-0 bg-blue-400 rounded-lg transform translate-x-4 translate-y-4"></div>
								<div class="relative bg-blue-500 rounded-lg shadow-lg overflow-hidden">
									<img src="./svg/server.svg" alt="Data Center" class="object-full w-full h-96 ">
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</section>
		<section class="sm:-mt-10">
			<div class="">
				<div class="container mx-auto px-6 sm:px-20 py-20 ">
					<div class=" p-4 ">
						<div class="relative py-12 overflow-hidden">
							<div aria-hidden="true" class="absolute inset-0 w-full m-auto grid grid-cols-2 -space-x-52 opacity-20"></div>
							<div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
								<div class="relative">
									<div class="flex items-center justify-center  px-2 sm:px-0">
										<div class="mt-6 m-auto space-y-6 w-full sm:w-8/12 md:w-7/12">
											<h1
												class="text-center text-3xl sm:text-4xl md:text-4xl font-bold text-gray-700 dark:text-white">
												Nous innovons pour la qualité de chacun
											</h1>
											<div class="hidden sm:block h-1 w-96 rounded-3xl -mt-4 -mb-4 mx-auto border-b-4 border-[#00aaff]"></div>
											<p class="text-center text-sm sm:text-base md:text-xl text-gray-600 dark:text-gray-300">
												Nos produits s'adaptent à vos besoins et à votre budget. Nous proposons de nombreuses solutions afin de répondre à tous les besoins.
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="grid grid-cols-1 md:grid-cols-4 gap-4">
						<!-- Large item -->
						<div data-aos="zoom-in-right" data-aos-duration="900" class="md:col-span-2 md:row-span-2 relative overflow-hidden rounded-2xl shadow-lg group">
							<img src="https://imgs.search.brave.com/p5UhgpPi6zrkXPOUbfuNPJAsLglOKGiJspWusT3al78/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly90NC5m/dGNkbi5uZXQvanBn/LzA3Lzg0LzAzLzI3/LzM2MF9GXzc4NDAz/Mjc4N19LYWkzUWFl/d1BqZ3N2NnpVNXJz/RFdVbmFnTmk2ZnlS/Yy5qcGc" alt="" class="w-full h-full object-cover">
							<div
								class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
								<div class="absolute bottom-0 left-0 right-0 p-4">
									<h3 class="text-2xl font-bold text-white">Serveurs VPS</h3>
									<p class="text-white">Découvrez un environement Virtuel rien que pour vous</p>
									<div class="items-center justify-end hidden md:flex md:flex-1 lg:w-0  ml-24 ">
										<a href="" class="inline-flex items-center justify-center px-4 py-2  text-sm font-medium text-white transform border border-transparent rounded-md shadow-sm bg-gradient-to-tr from-blue-500 to-[#00acff] whitespace-nowrap hover:-translate-y-0.5 transition duration-150 ease-in-out hover:shadow-xl">Découvrir</a>
									</div>
								</div>
							</div>
						</div>
						<!-- Two small items -->
						<div data-aos="zoom-in-left" data-aos-duration="900" class="md:col-span-2 md:row-span-1 relative overflow-hidden rounded-2xl shadow-lg group">
							<div class="relative overflow-hidden rounded-2xl shadow-lg group" >
								<img src="./images/antiddos.png" alt="" class=" w-full h-[20rem] object-cover ">
							</div>
							<div
								class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
								<div class="absolute bottom-0 left-0 right-0 p-4">
									<h3 class="text-2xl font-bold text-white">Protection ANTI-DDoS</h3>
									<p class="text-white">Dites adieux au down à cause des attaques ddos</p>
									<div class="items-center justify-end hidden md:flex md:flex-1 lg:w-0  ml-24 ">
										<a href="" class="inline-flex items-center justify-center px-4 py-2  text-sm font-medium text-white transform border border-transparent rounded-md shadow-sm bg-gradient-to-tr from-blue-500 to-[#00acff] whitespace-nowrap hover:-translate-y-0.5 transition duration-150 ease-in-out hover:shadow-xl">Découvrir</a>
									</div>
								</div>
							</div>
						</div>
						<div data-aos="zoom-out-up" data-aos-duration="900" class="relative overflow-hidden rounded-2xl shadow-lg group">
							<img src="./images/WEBHOSTING.webp" alt="web" class="w-full h-48 object-cover">
							<div
								class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
								<div class="absolute bottom-0 left-0 right-0 p-4">
									<h3 class="text-2xl font-bold text-white">Serveurs WEB</h3>
									<p class="text-white">Faites briller vos talents de développeur avec nos offres WEB</p>
									<div class="items-center justify-end hidden md:flex md:flex-1 lg:w-0  ml-24 ">
										<a href="" class="inline-flex items-center justify-center px-4 py-2  text-sm font-medium text-white transform border border-transparent rounded-md shadow-sm bg-gradient-to-tr from-blue-500 to-[#00acff] whitespace-nowrap hover:-translate-y-0.5 transition duration-150 ease-in-out hover:shadow-xl">Découvrir</a>
									</div>
								</div>
							</div>
						</div>
						<div data-aos="zoom-out-up" data-aos-duration="900" class="relative overflow-hidden rounded-2xl shadow-lg group">
							<img src="./images/vpn.png" alt="web" class="w-full h-48 object-cover">
							<div
								class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
								<div class="absolute bottom-0 left-0 right-0 p-4">
									<h3 class="text-2xl font-bold text-white">Offre VPN</h3>
									<p class="text-white">Voyager en un clic avec nos offre VPN.</p>
									<div class="items-center justify-end hidden md:flex md:flex-1 lg:w-0  ml-24 ">
										<a href="" class="inline-flex items-center justify-center px-4 py-2  text-sm font-medium text-white transform border border-transparent rounded-md shadow-sm bg-gradient-to-tr from-blue-500 to-[#00acff] whitespace-nowrap hover:-translate-y-0.5 transition duration-150 ease-in-out hover:shadow-xl">Découvrir</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section>
			<section class="sm:mt-20" id="stats-section">
				<div class="container max-w-xl p-6 mx-auto space-y-12 lg:px-8 lg:max-w-7xl">
					<div>
						<h2 class="text-3xl font-bold text-center sm:text-4xl">Quelques Statistiques</h2>
						<p class="max-w-3xl mx-auto mt-4 text-xl text-center ">Nous sélectionnons les options les plus excellentes pour vous, en mettant toujours la qualité en premier lieu.</p>
					</div>
					<div class="grid lg:gap-8 lg:grid-cols-4 lg:items-center mx-auto sm:px-32 ">
						<div class="col-span-1 ">
							<div class="mt-4 space-y-12 w-64">
								<div data-aos="zoom-in-right" class="py-4 flex hover:bg-gray-50 hover:rounded-2xl hover:shadow-lg hover:scale-105 transition-all duration-300">
									<div class="flex-shrink-0 ">
										<div class="flex items-center justify-center w-12 h-12 rounded-md">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
												stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
												class="lucide lucide-rocket">
												<path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z">
												</path>
												<path
													d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z">
												</path>
												<path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"></path>
												<path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"></path>
											</svg>
										</div>
									</div>
									<div class="ml-4">
										<p class="compteur text-2xl font-medium leadi" onscroll="" id="reseau"></p>
										<span class="ml-4">Transitaires</span>
									</div>
								</div>
								<div data-aos="zoom-in-right" class="py-4 flex hover:bg-gray-50 hover:rounded-2xl hover:shadow-lg hover:scale-105 transition-all duration-300">
									<div class="flex-shrink-0 ">
										<div class="flex items-center justify-center w-12 h-12 rounded-md">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
												stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
												class="lucide lucide-rocket">
												<path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z">
												</path>
												<path
													d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z">
												</path>
												<path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"></path>
												<path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"></path>
											</svg>
										</div>
									</div>
									<div class="ml-4">
										<p class="compteur text-2xl font-medium leadi" id="points"></p>
										<p class="mt-2 ">Capacité de filtrage</p>
									</div>
								</div>
								<div data-aos="zoom-in-right" class="py-4 flex hover:bg-gray-50 hover:rounded-2xl hover:shadow-lg hover:scale-105 transition-all duration-300">
									<div class="flex-shrink-0 ">
										<div class="flex items-center justify-center w-12 h-12 rounded-md">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
												stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
												class="lucide lucide-rocket">
												<path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z">
												</path>
												<path
													d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z">
												</path>
												<path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"></path>
												<path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"></path>
											</svg>
										</div>
									</div>
									<div class="ml-4">
										<p class="compteur text-2xl font-medium leadi" id="server">+</p>
										<p class="mt-2 ">Clients</p>
									</div>
								</div>
							</div>
						</div>
						<div aria-hidden="true"  class="col-span-3  mt-10 lg:mt-0">
							<img width="600" height="600" src="https://images.unsplash.com/photo-1516542076529-1ea3854896f2?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxNHx8Y29tcHV0ZXJ8ZW58MHwwfHx8MTY5OTE3MDk1N3ww&ixlib=rb-4.0.3&q=80&w=1080" class="mx-auto rounded-lg shadow-lg dark-bg-gray-500" style="color:transparent">
						</div>
					</div>
				</div>
			</section>
		</section >
		<section class="sm:-mt-10">
			<div class="">
				<div  class="container mx-auto sm:px-20 sm:py-20 ">
					<div data-aos="zoom-out-down" class=" p-4 ">
						<div class="relative py-12 overflow-hidden">
							<div aria-hidden="true" class="absolute inset-0 w-full m-auto grid grid-cols-2 -space-x-52 opacity-20"></div>
							<div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
								<div class="relative">
									<div class="flex items-center justify-center  px-2 sm:px-0">
										<div class="mt-6 m-auto space-y-6 w-full sm:w-8/12 md:w-7/12">
											<h1
												class="text-center text-3xl sm:text-4xl md:text-4xl font-bold text-gray-700 dark:text-white">
												Nos offres phare
											</h1>
											<div class="hidden sm:block h-1 w-96 rounded-3xl -mt-4 -mb-4 mx-auto border-b-4 border-[#00aaff]"></div>
											<p class="text-center text-sm sm:text-base md:text-xl text-gray-600 dark:text-gray-300">
                                            Découvrez les offres les plus appréciées par nos clients. Profitez d'opportunités exclusives et optimisées pour répondre à vos besoins les plus exigeants.
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<section class="flex items-center justify-center sm:-mt-32 pb-10">
				<div class="p-4 sm:px-10 flex flex-col justify-center items-center text-base h-100vh mx-auto" id="pricing">
					<div class="isolate mx-auto grid max-w-md grid-cols-1 gap-8 lg:mx-0 lg:max-w-none lg:grid-cols-3">
						<div data-aos="zoom-in-right" class="ring-1 ring-gray-200 rounded-3xl p-8 xl:p-10">
							<div class="flex items-center justify-between gap-x-4">
								<h3 id="tier-standard" class="text-gray-900 text-2xl font-semibold leading-8">VPS - NVME 4</h3>
							</div>
							<p class="mt-6 flex items-baseline gap-x-1">
								<span class="line-through text-2xl font-sans text-gray-500/70">29.99€</span><span class="text-5xl font-bold tracking-tight text-gray-900 monthly-price">25.99€</span>
							</p>
							<a href=""
								aria-describedby="tier-standard"
								class="text-blue-600 ring-1 ring-inset ring-blue-200 hover:ring-blue-300 mt-6 block rounded-md py-2 px-3 text-center text-base font-medium leading-6 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600"
								target="_blank">Commander</a>
							<ul role="list" class="mt-8 space-y-3 text-sm leading-6 text-gray-600 xl:mt-10">
								<li class="flex gap-x-3 text-base">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
										stroke="currentColor" aria-hidden="true" class="h-6 w-5 flex-none text-blue-600">
										<path stroke-linecap="round" stroke-linejoin="round"
											d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
									</svg>
									3.20GHz @ 6vCore
								</li>
								<li class="flex gap-x-3 text-base">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
										stroke="currentColor" aria-hidden="true" class="h-6 w-5 flex-none text-blue-600">
										<path stroke-linecap="round" stroke-linejoin="round"
											d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
									</svg>
									16Go RAM
								</li>
								<li class="flex gap-x-3 text-base">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
										stroke="currentColor" aria-hidden="true" class="h-6 w-5 flex-none text-blue-600">
										<path stroke-linecap="round" stroke-linejoin="round"
											d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
									</svg>
									110Go Stockage
								</li>
                                <li class="flex gap-x-3 text-base">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
										stroke="currentColor" aria-hidden="true" class="h-6 w-5 flex-none text-blue-600">
										<path stroke-linecap="round" stroke-linejoin="round"
											d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
									</svg>
									5Gbits Réseau
								</li>
							</ul>
						</div>
						<div data-aos="zoom-out"  class="ring-1 ring-gray-200 rounded-3xl p-8 xl:p-10">
							<div class="flex items-center justify-between gap-x-4">
								<h3 id="tier-standard" class="text-gray-900 text-2xl font-semibold leading-8">Housing - 2</h3>
							</div>
							<p class="mt-6 flex items-baseline gap-x-1">
                                <span class="text-2xl font-sans text-gray-500/70">A partir de 44.99€</span>
							</p>
							<a href="https://manager.nvhcloud.com/contact.php"
								aria-describedby="tier-standard"
								class="text-blue-600 ring-1 ring-inset ring-blue-200 hover:ring-blue-300 mt-6 block rounded-md py-2 px-3 text-center text-base font-medium leading-6 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600"
								target="_blank">Nous contacter</a>
							<ul role="list" class="mt-8 space-y-3 text-sm leading-6 text-gray-600 xl:mt-10">
                                <li class="flex gap-x-3 text-base">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
										stroke="currentColor" aria-hidden="true" class="h-6 w-5 flex-none text-blue-600">
										<path stroke-linecap="round" stroke-linejoin="round"
											d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
									</svg>
									1U-2U
								</li>
								<li class="flex gap-x-3 text-base">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
										stroke="currentColor" aria-hidden="true" class="h-6 w-5 flex-none text-blue-600">
										<path stroke-linecap="round" stroke-linejoin="round"
											d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
									</svg>
									150W-500W
								</li>
								<li class="flex gap-x-3 text-base">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
										stroke="currentColor" aria-hidden="true" class="h-6 w-5 flex-none text-blue-600">
										<path stroke-linecap="round" stroke-linejoin="round"
											d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
									</svg>
									1Gbits-10Gbits
								</li>
                                <li class="flex gap-x-3 text-base">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
										stroke="currentColor" aria-hidden="true" class="h-6 w-5 flex-none text-blue-600">
										<path stroke-linecap="round" stroke-linejoin="round"
											d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
									</svg>
									Datacenter en France
								</li>
							</ul>
						</div>
						<div data-aos="zoom-in-left"  class="ring-2 ring-blue-600 rounded-3xl p-8 xl:p-10">
							<div class="flex items-center justify-between gap-x-4">
								<h3 id="tier-extended" class="text-blue-600 text-2xl font-semibold leading-8">
								    Tunnel IP - Mars
								<h3>
								<p class="rounded-full bg-blue-600/10 px-2.5 py-1 text-xs font-semibold leading-5 text-blue-600">
									Le plus populaire
								</p>
							</div>
							<p class="mt-6 flex items-baseline gap-x-1">
								<span class="text-2xl font-sans text-gray-500/70">A partir de 49.99€</span>
							</p>
							<a href=""
								aria-describedby="tier-extended"
								class="bg-blue-600 text-white shadow-sm hover:bg-blue-500 mt-6 block rounded-md py-2 px-3 text-center text-base font-medium leading-6 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600"
								target="_blank">Commander</a>
							<ul role="list" class="mt-8 space-y-3 text-sm leading-6 text-gray-600 xl:mt-10">
								<li class="flex gap-x-3 text-base">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
										stroke="currentColor" aria-hidden="true" class="h-6 w-5 flex-none text-blue-600">
										<path stroke-linecap="round" stroke-linejoin="round"
											d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
									</svg>
									32 IPV4 + 1.10€ / IPV4
								</li>
								<li class="flex gap-x-3 text-base">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
										stroke="currentColor" aria-hidden="true" class="h-6 w-5 flex-none text-blue-600">
										<path stroke-linecap="round" stroke-linejoin="round"
											d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
									</svg>
									IPV6 Disponible (Demande)
								</li>
								<li class="flex gap-x-3 text-base">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
										stroke="currentColor" aria-hidden="true" class="h-6 w-5 flex-none text-blue-600">
										<path stroke-linecap="round" stroke-linejoin="round"
											d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
									</svg>
									Anti-DDoS (> 4.5 Tbit/s)
								</li>
                                <li class="flex gap-x-3 text-base">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
										stroke="currentColor" aria-hidden="true" class="h-6 w-5 flex-none text-blue-600">
										<path stroke-linecap="round" stroke-linejoin="round"
											d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
									</svg>
									Session BGP (AS210926)
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
		</section>
		<section class="sm:mt-1">
			<section class="client-review-section py-24 ">
				<div class="container mx-auto">
					<div class="flex justify-center">
						<div class="w-full max-w-lg text-center mb-10">
							<h2 class="text-center text-xl font-bold mb-2">
								<span class="highlight">AVIS DE NOS CLIENTS</span>
							</h2>
							<h3 class="text-center text-4xl mb-12 font-bold ">Ce que pensent nos clients...</h3>
						</div>
					</div>
					<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <div class="single-testimonial bg-gray-100 shadow-sm rounded-lg p-6 hover:scale-105 transition-all duration-300">
                            <ul class="flex mb-2">
                                <li><span class="fas fa-star text-yellow-500"></span></li>
                                <li><span class="fas fa-star text-yellow-500"></span></li>
                                <li><span class="fas fa-star text-yellow-500"></span></li>
                                <li><span class="fas fa-star text-yellow-500"></span></li>
                                <li><span class="fas fa-star text-yellow-500"></span></li>
                            </ul>
                            <div class="ratting-content">
                                <h5 class="text-xl font-semibold mb-2">Sur mesure dans un contexte difficile</h5>
                                <p class="text-gray-600">Plusieurs problèmes avec des concurrents, qui effectuent des attaques DDoS régulièrement. RVH a su s'adapter et proposer des solutions sur mesure ! Merci ;)</p>
                            </div>
                            <div class="ratting-author mt-4">
                                <h6 class="text-lg font-medium">Jérémy Manet</h6>
                                <small class="text-gray-500">11 Août 2024</small>
                            </div>
                        </div>
                        
                        <div class="single-testimonial bg-gray-100 shadow-sm rounded-lg p-6 hover:scale-105 transition-all duration-300">
                            <ul class="flex mb-2">
                                <li><span class="fas fa-star text-yellow-500"></span></li>
                                <li><span class="fas fa-star text-yellow-500"></span></li>
                                <li><span class="fas fa-star text-yellow-500"></span></li>
                                <li><span class="fas fa-star text-yellow-500"></span></li>
                                <li><span class="fas fa-star text-yellow-500"></span></li>
                            </ul>
                            <div class="ratting-content">
                                <h5 class="text-xl font-semibold mb-2">Très bonne protection</h5>
                                <p class="text-gray-600">Nathan & Sulivan sont à l'écoute et adaptent constamment la protection à mes besoins spécifiques. Très impliqués, ils m'assistent dans mes projets.</p>
                            </div>
                            <div class="ratting-author mt-4">
                                <h6 class="text-lg font-medium">Mana Fix</h6>
                                <small class="text-gray-500">7 Août 2024</small>
                            </div>
                        </div>
                        
                        <div class="single-testimonial bg-gray-100 shadow-sm rounded-lg p-6 hover:scale-105 transition-all duration-300">
                            <ul class="flex mb-2">
                                <li><span class="fas fa-star text-yellow-500"></span></li>
                                <li><span class="fas fa-star text-yellow-500"></span></li>
                                <li><span class="fas fa-star text-yellow-500"></span></li>
                                <li><span class="fas fa-star text-yellow-500"></span></li>
                                <li><span class="fas fa-star text-yellow-500"></span></li>
                            </ul>
                            <div class="ratting-content">
                                <h5 class="text-xl font-semibold mb-2">Excellent rapport qualité-prix</h5>
                                <p class="text-gray-600">Très bon rapport qualité-prix, et un staff présent comme Nathan, qui nous aide directement et montre les vidéos explicatives.</p>
                            </div>
                            <div class="ratting-author mt-4">
                                <h6 class="text-lg font-medium">Milann Veux</h6>
                                <small class="text-gray-500">31 juillet 2024</small>
                            </div>
                        </div>
                    </div>
				</div>
			</section>
		</section>
		<?php include 'footer.html'; ?>
		<script>
			const monthlyButton = document.getElementById('monthlyButton');
			const annualButton = document.getElementById('annualButton');
			
			const monthlyPrices = document.querySelectorAll('.monthly-price');
			const annualPrices = document.querySelectorAll('.annual-price');
			
			monthlyButton.addEventListener('click', () => {
			    monthlyButton.classList.add('bg-[#00aaff]', 'text-white');
			    annualButton.classList.remove('bg-[#00aaff]', 'text-white');
			    monthlyPrices.forEach(price => price.classList.remove('hidden'));
			    annualPrices.forEach(price => price.classList.add('hidden'));
			});
			
			annualButton.addEventListener('click', () => {
			    annualButton.classList.add('bg-[#00aaff]', 'text-white');
			    monthlyButton.classList.remove('bg-[#00aaff]', 'text-white');
			    annualPrices.forEach(price => price.classList.remove('hidden'));
			    monthlyPrices.forEach(price => price.classList.add('hidden'));
			});
		</script>
		<script>
			document.addEventListener('DOMContentLoaded', () => {
			    const words = ['une start-up', 'une entreprise', 'un particulier'];
			    let currentIndex = 0;
			    const wordDisplay = document.getElementById('word-display');
			    const width = document.getElementById('width');
			
			    function updateWord() {
			        currentIndex = (currentIndex + 1) % words.length;
			        wordDisplay.style.transform = 'translateY(100%)';
			        setTimeout(() => {
			            wordDisplay.style.transition = 'none';
			            wordDisplay.style.transform = 'translateY(-100%)';
			            wordDisplay.textContent = words[currentIndex];
			            width.style.transition = 'width 0.5s ease-in-out';
			            width.style.width = `${words[currentIndex].length * 23}px`;
			            setTimeout(() => {
			                wordDisplay.style.transition = 'transform 0.5s ease-in-out';
			                wordDisplay.style.transform = 'translateY(0)';
			            }, 50);
			        }, 500);
			    }
			
			    setInterval(updateWord, 2000);
			});
			
			
		</script>
		<script>
			var listeCompteurs = [
			    {
			        "id" : "#reseau",
			        "nombre" : 6,
			    },
			    {
			        "id" : "#points",
			        "nombre" : 4500,
			    },
			    {
			        "id" : "#server",
			        "nombre" : 150,
			    },
			];
			
			function lancerAnimationCompteurs() {
			    for (var i in listeCompteurs) {
			        var compteur = listeCompteurs[i];
					$(compteur["id"]).empty();
			        var afficheNombre = $("<span/>");
			
			        $(compteur["id"]).append(
			            $("<b>")
			                .append(afficheNombre)
			        );
			
			        afficheNombre.animate({
			            "nombre" : compteur["nombre"],
			        }, {
			            duration: 1000 + compteur["nombre"] / 30,
			            easing: 'swing',
			            step: function (now) {
                            console.log(now)
                            if (now == 150) {
                                $(this).text("+" + Math.ceil(now));
                            } else if (now == 4500) {
                                $(this).text("> 4.5 Tbit/s");
                            } else {
                                $(this).text(Math.ceil(now));
                            }
			            },
			        });
			    }
			}
			
			lancerAnimationCompteurs();
		</script>
		<script>
			AOS.init();
		</script>
	</body>
</html>