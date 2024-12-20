<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link href="./output.css" rel="stylesheet">
<style>
	.group:hover .submenu {
	display: block;
	}
</style>
<body>
	<div class=" w-screen sticky top-0 z-50 bg-white border-b-2 border-gray-50 shadow md:justify-center md:flex block mx-auto">
		<div>
			<div class="flex justify-between items-center max-w-7xl h-20   mx-auto px-4 py-6 sm:px-6 md:justify-start md:space-x-10 lg:px-8">
				<div class="flex justify-start lg:flex-1 px-20">
					<a class="flex items-center" draggable="false" href="/">
					<img class="object-contain h-10 lg:h-20" src="./images/logo.png" alt="Logo" draggable="false">
					<span class="ml-2 mr-2 text-xl font-bold font-mono text-[#00aaff]">NVHCloud</span>
					</a>
				</div>
				<div class="-my-2 -mr-2 md:hidden ">
					<button onclick="toggleMobileMenu()" class="inline-flex items-center justify-center p-2 text-gray-400 transition rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500" id="headlessui-popover-button-11" type="button" aria-expanded="false">
						<span class="sr-only">Menu</span>
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6" aria-hidden="true">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
						</svg>
					</button>
				</div>
				<nav class="hidden space-x-10 md:flex py-20  mx-auto">
					<a class="text-base font-medium text-gray-500 hover:text-gray-900" href="/">Accueil</a>
					<div class="relative group">
						<button class="text-gray-500 group-hover:text-gray-900 rounded-md inline-flex items-center text-base font-medium hover:text-gray-900 transition" id="headlessui-popover-button-1" type="button" aria-expanded="false">
							<span>VPS</span>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-gray-400 rotate-0 ml-2 h-5 w-5 group-hover:text-gray-500 transform transition duration-500 ease-in-out" aria-hidden="true">
								<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
							</svg>
						</button>
						<div class="submenu hidden absolute z-10 w-screen max-w-md px-2  -ml-4 transform bg-white rounded-xl sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2" id="headlessui-popover-panel-2">
							<div class="overflow-hidden shadow-lg rounded-xl ring-1 ring-black ring-opacity-5">
								<div class="relative grid gap-6 px-5 py-6 sm:gap-8 sm:p-8">
									<a class="flex items-start p-3 -m-3 transition rounded-lg hover:bg-gray-50" href="#">
										<svg class="flex-shrink-0 w-6 h-6 text-blue-600" viewBox="0 0 24 24" fill="currentcolor" xmlns="http://www.w3.org/2000/svg">
											<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
											<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
											<g id="SVGRepo_iconCarrier">
												<path d="M9.6 20H14.4C18.4 20 20 18.4 20 14.4V9.6C20 5.6 18.4 4 14.4 4H9.6C5.6 4 4 5.6 4 9.6V14.4C4 18.4 5.6 20 9.6 20Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M10.5 17H13.5C16 17 17 16 17 13.5V10.5C17 8 16 7 13.5 7H10.5C8 7 7 8 7 10.5V13.5C7 16 8 17 10.5 17Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M8.01001 4V2" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 4V2" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M16 4V2" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M20 8H22" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M20 12H22" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M20 16H22" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M16 20V22" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12.01 20V22" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M8.01001 20V22" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M2 8H4" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M2 12H4" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M2 16H4" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 9.69995L11.06 11.34C10.85 11.7 11.02 12 11.44 12H12.56C12.98 12 13.15 12.3 12.94 12.66L12 14.3" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
											</g>
										</svg>
										<div class="ml-4">
											<p class="text-base font-medium text-gray-900">VPS RYZEN <span class="inline-flex items-center justify-center px-2 py-1 ml-1 text-xs font-bold leading-none text-white bg-gradient-to-r from-green-500 to-green-600 rounded-xl">Prochainement</span></p>
											<p class="text-sm text-gray-500">Idéal pour des jeux ou des calculs très rapides avec des performances multicoeurs optimisées.</p>
										</div>
									</a>
									<a class="flex items-start p-3 -m-3 transition rounded-lg hover:bg-gray-50" href="#">
										<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="flex-shrink-0 w-6 h-6 text-blue-600" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
											<path d="M228.844 32.22v114.218h17.687V32.218h-17.686zm-108.25.624c-15.507 0-28.094 12.586-28.094 28.093C92.5 76.444 105.087 89 120.594 89c12.655 0 23.34-8.372 26.844-19.875h44.937v77.313h17.688v-95H147.03c-3.888-10.837-14.262-18.593-26.436-18.593zm193.25 0c-15.507 0-28.063 12.586-28.063 28.093 0 12.124 7.677 22.45 18.44 26.376v59.124h17.655V87.844c11.596-3.452 20.063-14.193 20.063-26.906 0-15.508-12.587-28.094-28.094-28.094zM266.124 92.5v53.938h17.657V92.5h-17.655zm188.532 4.03c-15.507 0-28.094 12.588-28.094 28.095 0 13.083 8.948 24.074 21.063 27.188v27.468h-92.938v17.657h110.624v-46.342c10.223-4.192 17.407-14.233 17.407-25.97 0-15.507-12.557-28.094-28.064-28.094zM30.187 123.657v17.688H96.75v55.594h62.814V179.28h-45.126v-55.624h-84.25zm147.032 40.47v159.718h159.81v-159.72H177.22zm17.56 15.655h17.657v78.595l32.407 32.406h75.28v17.658H237.5l-2.594-2.594-10.75-10.75c-1.033 7.385-7.36 13.062-15.03 13.062-8.392 0-15.19-6.796-15.19-15.187 0-7.682 5.696-13.98 13.095-15l-9.655-9.658-2.594-2.593V179.78zm54.94.157h17.686v55.313h52.53l.002 17.688H249.72v-73zM53.124 217.375V307.344c-11.49 3.512-19.844 14.198-19.844 26.844 0 15.505 12.557 28.093 28.064 28.093s28.093-12.587 28.093-28.092c0-12.195-7.79-22.564-18.656-26.438v-72.72h88.782v-17.655H53.124zm301.563 0v17.656h53.968v-17.655h-53.97zm99.968 21.97c-10.898 0-20.342 6.21-25 15.28h-74.97l.002 17.688H427c2.325 13.168 13.824 23.187 27.656 23.187 15.507 0 28.063-12.588 28.063-28.094 0-15.507-12.557-28.062-28.064-28.062zm-349.062 15.28v17.688h53.97v-17.688h-53.97zm17.156 36.47v84.217c-11.498 3.513-19.875 14.2-19.875 26.844 0 15.506 12.587 28.094 28.094 28.094 15.506 0 28.06-12.588 28.06-28.094 0-12.194-7.766-22.564-18.624-26.437v-66.94h19.156v-17.686H122.75zm231.938 0v17.686h45.156v95.283c-11.323 3.624-19.53 14.26-19.53 26.78-.002 15.506 12.585 28.063 28.092 28.063 15.507 0 28.063-12.557 28.063-28.062 0-12.32-7.935-22.778-18.97-26.563V291.095h-62.814zM192.375 341.53v54.033h17.688V341.53h-17.688zm36.47 0v86.564c-11.013 3.794-18.94 14.233-18.94 26.53 0 15.506 12.588 28.095 28.095 28.095s28.063-12.59 28.063-28.095c0-12.53-8.203-23.14-19.532-26.75V341.53h-17.686zm37.28 0v54.033h17.688l-.032-54.032h-17.655zm38.094 0v140.064h17.655V341.53H304.22z"></path>
										</svg>
										<div class="ml-4">
											<p class="text-base font-medium text-gray-900">VPS Intel <span class="inline-flex items-center justify-center px-2 py-1 ml-1 text-xs font-bold leading-none text-white bg-gradient-to-r from-green-500 to-green-600 rounded-xl">Prochainement</span></p>
											<p class="text-sm text-gray-500">Parfait pour les jeux ou les calculs nécessitant principalement un cœur, offrant des performances solides sur un seul thread.</p>
										</div>
									</a>
									<a class="flex items-start p-3 -m-3 transition rounded-lg hover:bg-gray-50" href="vps-ptero">
										<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" class="flex-shrink-0 w-6 h-6 text-blue-600" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
											<path d="M0 10a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-1zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm2 0a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zM.91 7.204A2.993 2.993 0 0 1 2 7h12c.384 0 .752.072 1.09.204l-1.867-3.422A1.5 1.5 0 0 0 11.906 3H4.094a1.5 1.5 0 0 0-1.317.782L.91 7.204z"></path>
										</svg>
										<div class="ml-4">
											<p class="text-base font-medium text-gray-900">VPS Pterodactyl </p>
											<p class="text-sm text-gray-500">Conçu pour une gestion efficace avec Docker, ce VPS est parfait pour les panels de gestion.</p>
										</div>
									</a>
									<a class="flex items-start p-3 -m-3 transition rounded-lg hover:bg-gray-50" href="vps-ssd">
										<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="flex-shrink-0 w-6 h-6 text-blue-600" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
											<path d="M832 64H192c-17.7 0-32 14.3-32 32v224h704V96c0-17.7-14.3-32-32-32zM456 216c0 4.4-3.6 8-8 8H264c-4.4 0-8-3.6-8-8v-48c0-4.4 3.6-8 8-8h184c4.4 0 8 3.6 8 8v48zM160 928c0 17.7 14.3 32 32 32h640c17.7 0 32-14.3 32-32V704H160v224zm576-136c22.1 0 40 17.9 40 40s-17.9 40-40 40-40-17.9-40-40 17.9-40 40-40zM160 640h704V384H160v256zm96-152c0-4.4 3.6-8 8-8h184c4.4 0 8 3.6 8 8v48c0 4.4-3.6 8-8 8H264c-4.4 0-8-3.6-8-8v-48z"></path>
										</svg>
										<div class="ml-4">
											<p class="text-base font-medium text-gray-900">VPS SSD + Protect by NVHCloud </p>
											<p class="text-sm text-gray-500">Offre une rapidité exceptionnelle avec une protection renforcée, incluant un panneau de gestion pour une sécurité accrue.</p>
										</div>
									</a>
									<a class="flex items-start p-3 -m-3 transition rounded-lg hover:bg-gray-50" href="vps-nvme">
										<svg fill="currentcolor" class="flex-shrink-0 w-6 h-6 text-blue-600" viewBox="0 0 36 36" version="1.1" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" stroke="">
											<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
											<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
											<g id="SVGRepo_iconCarrier">
												<title>nvme-line</title>
												<path d="M27,22V14a2,2,0,0,0-2-2H11a2,2,0,0,0-2,2v8a2,2,0,0,0,2,2H25A2,2,0,0,0,27,22ZM11,14H25v8H11Z" class="clr-i-outline clr-i-outline-path-1"></path>
												<rect x="19" y="6" width="4" height="2" class="clr-i-outline clr-i-outline-path-2"></rect>
												<rect x="25.01" y="6" width="1.97" height="2" class="clr-i-outline clr-i-outline-path-3"></rect>
												<path d="M5.8,8H16.87V6h-11L7.78,4.08a1,1,0,0,0,0-1.42,1,1,0,0,0-1.41,0L2,7,6.37,11.4a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41Z" class="clr-i-outline clr-i-outline-path-4"></path>
												<path d="M29.61,24.68a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42L30.1,28H19v2H30.2l-2,2a1,1,0,0,0,0,1.41,1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29L34,29.05Z" class="clr-i-outline clr-i-outline-path-5"></path>
												<rect x="13" y="28" width="4" height="2" class="clr-i-outline clr-i-outline-path-6"></rect>
												<rect x="9" y="28" width="1.97" height="2" class="clr-i-outline clr-i-outline-path-7"></rect>
												<rect x="0" y="0" width="36" height="36" fill-opacity="0"></rect>
											</g>
										</svg>
										<div class="ml-4">
											<p class="text-base font-medium text-gray-900">VPS NVME </p>
											<p class="text-sm text-gray-500">Optimisé pour des calculs rapides avec des processeurs Xeon et des disques SSD NVMe pour des performances de stockage ultra-rapides.</p>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>



					<div class="relative group">
						<button  id="datacenterButton" class="text-gray-500 group-hover:text-gray-900 rounded-md inline-flex items-center text-base font-medium hover:text-gray-900 transition" id="headlessui-popover-button-3" type="button" aria-expanded="false">
							<span>Datacenter</span>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-gray-400 rotate-0 ml-2 h-5 w-5 group-hover:text-gray-500 transform transition duration-500 ease-in-out" aria-hidden="true">
								<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
							</svg>
						</button>
						<div id="datacenterMenu" class="submenu hidden absolute z-10 w-screen max-w-md px-2  -ml-4 transform bg-white rounded-xl sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2" id="headlessui-popover-panel-2">
							<div class="overflow-hidden shadow-lg rounded-xl ring-1 ring-black ring-opacity-5">
								<div class="relative grid gap-6 px-5 py-6 sm:gap-8 sm:p-8">
									<a class="flex items-start p-3 -m-3 transition rounded-lg hover:bg-gray-50" href="housing">
										<svg class="flex-shrink-0 w-6 h-6 text-blue-600" viewBox="0 0 24 24" fill="currentcolor" xmlns="http://www.w3.org/2000/svg">
											<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
											<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
											<g id="SVGRepo_iconCarrier">
												<path d="M9.6 20H14.4C18.4 20 20 18.4 20 14.4V9.6C20 5.6 18.4 4 14.4 4H9.6C5.6 4 4 5.6 4 9.6V14.4C4 18.4 5.6 20 9.6 20Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M10.5 17H13.5C16 17 17 16 17 13.5V10.5C17 8 16 7 13.5 7H10.5C8 7 7 8 7 10.5V13.5C7 16 8 17 10.5 17Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M8.01001 4V2" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 4V2" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M16 4V2" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M20 8H22" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M20 12H22" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M20 16H22" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M16 20V22" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12.01 20V22" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M8.01001 20V22" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M2 8H4" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M2 12H4" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M2 16H4" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 9.69995L11.06 11.34C10.85 11.7 11.02 12 11.44 12H12.56C12.98 12 13.15 12.3 12.94 12.66L12 14.3" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
											</g>
										</svg>
										<div class="ml-4">
											<p class="text-base font-medium text-gray-900">Housing</p>
											<p class="text-sm text-gray-500">Bénéficiez d'un espace dédié pour héberger vos serveurs physiques avec une infrastructure de pointe.</p>
										</div>
									</a>
									<a class="flex items-start p-3 -m-3 transition rounded-lg hover:bg-gray-50" href="dedicated">
										<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="flex-shrink-0 w-6 h-6 text-blue-600" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
											<path d="M228.844 32.22v114.218h17.687V32.218h-17.686zm-108.25.624c-15.507 0-28.094 12.586-28.094 28.093C92.5 76.444 105.087 89 120.594 89c12.655 0 23.34-8.372 26.844-19.875h44.937v77.313h17.688v-95H147.03c-3.888-10.837-14.262-18.593-26.436-18.593zm193.25 0c-15.507 0-28.063 12.586-28.063 28.093 0 12.124 7.677 22.45 18.44 26.376v59.124h17.655V87.844c11.596-3.452 20.063-14.193 20.063-26.906 0-15.508-12.587-28.094-28.094-28.094zM266.124 92.5v53.938h17.657V92.5h-17.655zm188.532 4.03c-15.507 0-28.094 12.588-28.094 28.095 0 13.083 8.948 24.074 21.063 27.188v27.468h-92.938v17.657h110.624v-46.342c10.223-4.192 17.407-14.233 17.407-25.97 0-15.507-12.557-28.094-28.064-28.094zM30.187 123.657v17.688H96.75v55.594h62.814V179.28h-45.126v-55.624h-84.25zm147.032 40.47v159.718h159.81v-159.72H177.22zm17.56 15.655h17.657v78.595l32.407 32.406h75.28v17.658H237.5l-2.594-2.594-10.75-10.75c-1.033 7.385-7.36 13.062-15.03 13.062-8.392 0-15.19-6.796-15.19-15.187 0-7.682 5.696-13.98 13.095-15l-9.655-9.658-2.594-2.593V179.78zm54.94.157h17.686v55.313h52.53l.002 17.688H249.72v-73zM53.124 217.375V307.344c-11.49 3.512-19.844 14.198-19.844 26.844 0 15.505 12.557 28.093 28.064 28.093s28.093-12.587 28.093-28.092c0-12.195-7.79-22.564-18.656-26.438v-72.72h88.782v-17.655H53.124zm301.563 0v17.656h53.968v-17.655h-53.97zm99.968 21.97c-10.898 0-20.342 6.21-25 15.28h-74.97l.002 17.688H427c2.325 13.168 13.824 23.187 27.656 23.187 15.507 0 28.063-12.588 28.063-28.094 0-15.507-12.557-28.062-28.064-28.062zm-349.062 15.28v17.688h53.97v-17.688h-53.97zm17.156 36.47v84.217c-11.498 3.513-19.875 14.2-19.875 26.844 0 15.506 12.587 28.094 28.094 28.094 15.506 0 28.06-12.588 28.06-28.094 0-12.194-7.766-22.564-18.624-26.437v-66.94h19.156v-17.686H122.75zm231.938 0v17.686h45.156v95.283c-11.323 3.624-19.53 14.26-19.53 26.78-.002 15.506 12.585 28.063 28.092 28.063 15.507 0 28.063-12.557 28.063-28.062 0-12.32-7.935-22.778-18.97-26.563V291.095h-62.814zM192.375 341.53v54.033h17.688V341.53h-17.688zm36.47 0v86.564c-11.013 3.794-18.94 14.233-18.94 26.53 0 15.506 12.588 28.095 28.095 28.095s28.063-12.59 28.063-28.095c0-12.53-8.203-23.14-19.532-26.75V341.53h-17.686zm37.28 0v54.033h17.688l-.032-54.032h-17.655zm38.094 0v140.064h17.655V341.53H304.22z"></path>
										</svg>
										<div class="ml-4">
											<p class="text-base font-medium text-gray-900">Serveurs Dédiés</p>
											<p class="text-sm text-gray-500">Profitez de serveurs dédiés haute performance, entièrement personnalisables pour répondre à vos besoins spécifiques. </p>
										</div>
									</a>
									<a class="flex items-start p-3 -m-3 transition rounded-lg hover:bg-gray-50" href="tunnelip">
										<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" class="flex-shrink-0 w-6 h-6 text-blue-600" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
											<path d="M0 10a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-1zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm2 0a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zM.91 7.204A2.993 2.993 0 0 1 2 7h12c.384 0 .752.072 1.09.204l-1.867-3.422A1.5 1.5 0 0 0 11.906 3H4.094a1.5 1.5 0 0 0-1.317.782L.91 7.204z"></path>
										</svg>
										<div class="ml-4">
											<p class="text-base font-medium text-gray-900">Tunnel IP / BGP</p>
											<p class="text-sm text-gray-500">Assurez la sécurité et la flexibilité de votre réseau avec nos solutions de Tunnel IP et BGP.</p>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>

					<script>
						document.getElementById('datacenterButton').addEventListener('click', function() {
							var menu = document.getElementById('datacenterMenu');
							menu.classList.toggle('hidden');
						});
					</script>
					


					<div class="relative group">
						<button class="text-gray-500 group-hover:text-gray-900 rounded-md inline-flex items-center text-base font-medium hover:text-gray-900 transition" id="headlessui-popover-button-5" type="button" aria-expanded="false">
							<span>Réseau</span>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-gray-400 rotate-0 ml-2 h-5 w-5 group-hover:text-gray-500 transform transition duration-500 ease-in-out" aria-hidden="true">
								<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
							</svg>
						</button>
						<div class="submenu hidden absolute z-10 w-screen max-w-md px-2  -ml-4 transform bg-white rounded-xl sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2" id="headlessui-popover-panel-2">
							<div class="overflow-hidden shadow-lg rounded-xl ring-1 ring-black ring-opacity-5">
								<div class="relative grid gap-6 px-5 py-6 sm:gap-8 sm:p-8">
									<a class="flex items-start p-3 -m-3 transition rounded-lg hover:bg-gray-50" href="vpn">
										<svg class="flex-shrink-0 w-6 h-6 text-blue-600" viewBox="0 0 24 24" fill="currentcolor" xmlns="http://www.w3.org/2000/svg">
											<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
											<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
											<g id="SVGRepo_iconCarrier">
												<path d="M9.6 20H14.4C18.4 20 20 18.4 20 14.4V9.6C20 5.6 18.4 4 14.4 4H9.6C5.6 4 4 5.6 4 9.6V14.4C4 18.4 5.6 20 9.6 20Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M10.5 17H13.5C16 17 17 16 17 13.5V10.5C17 8 16 7 13.5 7H10.5C8 7 7 8 7 10.5V13.5C7 16 8 17 10.5 17Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M8.01001 4V2" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 4V2" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M16 4V2" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M20 8H22" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M20 12H22" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M20 16H22" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M16 20V22" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12.01 20V22" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M8.01001 20V22" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M2 8H4" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M2 12H4" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M2 16H4" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 9.69995L11.06 11.34C10.85 11.7 11.02 12 11.44 12H12.56C12.98 12 13.15 12.3 12.94 12.66L12 14.3" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
											</g>
										</svg>
										<div class="ml-4">
											<p class="text-base font-medium text-gray-900">VPN Sécurisés</p>
											<p class="text-sm text-gray-500">Profitez de connexions sécurisées avec nos VPN. Nous offrons une protection avancée contre les menaces en ligne et garantissons une confidentialité totale pour vos activités.</p>
										</div>
									</a>
									<a class="flex items-start p-3 -m-3 transition rounded-lg hover:bg-gray-50" href="https://nvhshield.com">
										<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="flex-shrink-0 w-6 h-6 text-blue-600" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
											<path d="M228.844 32.22v114.218h17.687V32.218h-17.686zm-108.25.624c-15.507 0-28.094 12.586-28.094 28.093C92.5 76.444 105.087 89 120.594 89c12.655 0 23.34-8.372 26.844-19.875h44.937v77.313h17.688v-95H147.03c-3.888-10.837-14.262-18.593-26.436-18.593zm193.25 0c-15.507 0-28.063 12.586-28.063 28.093 0 12.124 7.677 22.45 18.44 26.376v59.124h17.655V87.844c11.596-3.452 20.063-14.193 20.063-26.906 0-15.508-12.587-28.094-28.094-28.094zM266.124 92.5v53.938h17.657V92.5h-17.655zm188.532 4.03c-15.507 0-28.094 12.588-28.094 28.095 0 13.083 8.948 24.074 21.063 27.188v27.468h-92.938v17.657h110.624v-46.342c10.223-4.192 17.407-14.233 17.407-25.97 0-15.507-12.557-28.094-28.064-28.094zM30.187 123.657v17.688H96.75v55.594h62.814V179.28h-45.126v-55.624h-84.25zm147.032 40.47v159.718h159.81v-159.72H177.22zm17.56 15.655h17.657v78.595l32.407 32.406h75.28v17.658H237.5l-2.594-2.594-10.75-10.75c-1.033 7.385-7.36 13.062-15.03 13.062-8.392 0-15.19-6.796-15.19-15.187 0-7.682 5.696-13.98 13.095-15l-9.655-9.658-2.594-2.593V179.78zm54.94.157h17.686v55.313h52.53l.002 17.688H249.72v-73zM53.124 217.375V307.344c-11.49 3.512-19.844 14.198-19.844 26.844 0 15.505 12.557 28.093 28.064 28.093s28.093-12.587 28.093-28.092c0-12.195-7.79-22.564-18.656-26.438v-72.72h88.782v-17.655H53.124zm301.563 0v17.656h53.968v-17.655h-53.97zm99.968 21.97c-10.898 0-20.342 6.21-25 15.28h-74.97l.002 17.688H427c2.325 13.168 13.824 23.187 27.656 23.187 15.507 0 28.063-12.588 28.063-28.094 0-15.507-12.557-28.062-28.064-28.062zm-349.062 15.28v17.688h53.97v-17.688h-53.97zm17.156 36.47v84.217c-11.498 3.513-19.875 14.2-19.875 26.844 0 15.506 12.587 28.094 28.094 28.094 15.506 0 28.06-12.588 28.06-28.094 0-12.194-7.766-22.564-18.624-26.437v-66.94h19.156v-17.686H122.75zm231.938 0v17.686h45.156v95.283c-11.323 3.624-19.53 14.26-19.53 26.78-.002 15.506 12.585 28.063 28.092 28.063 15.507 0 28.063-12.557 28.063-28.062 0-12.32-7.935-22.778-18.97-26.563V291.095h-62.814zM192.375 341.53v54.033h17.688V341.53h-17.688zm36.47 0v86.564c-11.013 3.794-18.94 14.233-18.94 26.53 0 15.506 12.588 28.095 28.095 28.095s28.063-12.59 28.063-28.095c0-12.53-8.203-23.14-19.532-26.75V341.53h-17.686zm37.28 0v54.033h17.688l-.032-54.032h-17.655zm38.094 0v140.064h17.655V341.53H304.22z"></path>
										</svg>
										<div class="ml-4">
											<p class="text-base font-medium text-gray-900">Anti-DDoS</p>
											<p class="text-sm text-gray-500">Protégez vos services contre les attaques DDoS avec notre solution avancée. Nos mesures de sécurité robustes assurent une défense efficace et une disponibilité continue de vos services. Pour toute urgence, contactez-nous immédiatement.</p>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="relative group">
						<button class="text-gray-500 group-hover:text-gray-900 rounded-md inline-flex items-center text-base font-medium hover:text-gray-900 transition" id="headlessui-popover-button-7" type="button" aria-expanded="false">
							<span>Web</span>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-gray-400 rotate-0 ml-2 h-5 w-5 group-hover:text-gray-500 transform transition duration-500 ease-in-out" aria-hidden="true">
								<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
							</svg>
						</button>
						<div class="submenu hidden absolute z-10 w-screen max-w-md px-2  -ml-4 transform bg-white rounded-xl sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2" id="headlessui-popover-panel-2">
							<div class="overflow-hidden shadow-lg rounded-xl ring-1 ring-black ring-opacity-5">
								<div class="relative grid gap-6 px-5 py-6 sm:gap-8 sm:p-8">
									<a class="flex items-start p-3 -m-3 transition rounded-lg hover:bg-gray-50" href="web">
										<svg class="flex-shrink-0 w-6 h-6 text-blue-600" viewBox="0 0 24 24" fill="currentcolor" xmlns="http://www.w3.org/2000/svg">
											<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
											<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
											<g id="SVGRepo_iconCarrier">
												<path d="M9.6 20H14.4C18.4 20 20 18.4 20 14.4V9.6C20 5.6 18.4 4 14.4 4H9.6C5.6 4 4 5.6 4 9.6V14.4C4 18.4 5.6 20 9.6 20Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M10.5 17H13.5C16 17 17 16 17 13.5V10.5C17 8 16 7 13.5 7H10.5C8 7 7 8 7 10.5V13.5C7 16 8 17 10.5 17Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M8.01001 4V2" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 4V2" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M16 4V2" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M20 8H22" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M20 12H22" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M20 16H22" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M16 20V22" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12.01 20V22" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M8.01001 20V22" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M2 8H4" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M2 12H4" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M2 16H4" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 9.69995L11.06 11.34C10.85 11.7 11.02 12 11.44 12H12.56C12.98 12 13.15 12.3 12.94 12.66L12 14.3" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
											</g>
										</svg>
										<div class="ml-4">
											<p class="text-base font-medium text-gray-900">Hébergement Web</p>
											<p class="text-sm text-gray-500">Propulsez votre site dès maintenant sur nos espaces mutualisés simples d'utilisation.</p>
										</div>
									</a>
									<a class="flex items-start p-3 -m-3 transition rounded-lg hover:bg-gray-50" href="ndd">
										<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="flex-shrink-0 w-6 h-6 text-blue-600" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
											<path d="M228.844 32.22v114.218h17.687V32.218h-17.686zm-108.25.624c-15.507 0-28.094 12.586-28.094 28.093C92.5 76.444 105.087 89 120.594 89c12.655 0 23.34-8.372 26.844-19.875h44.937v77.313h17.688v-95H147.03c-3.888-10.837-14.262-18.593-26.436-18.593zm193.25 0c-15.507 0-28.063 12.586-28.063 28.093 0 12.124 7.677 22.45 18.44 26.376v59.124h17.655V87.844c11.596-3.452 20.063-14.193 20.063-26.906 0-15.508-12.587-28.094-28.094-28.094zM266.124 92.5v53.938h17.657V92.5h-17.655zm188.532 4.03c-15.507 0-28.094 12.588-28.094 28.095 0 13.083 8.948 24.074 21.063 27.188v27.468h-92.938v17.657h110.624v-46.342c10.223-4.192 17.407-14.233 17.407-25.97 0-15.507-12.557-28.094-28.064-28.094zM30.187 123.657v17.688H96.75v55.594h62.814V179.28h-45.126v-55.624h-84.25zm147.032 40.47v159.718h159.81v-159.72H177.22zm17.56 15.655h17.657v78.595l32.407 32.406h75.28v17.658H237.5l-2.594-2.594-10.75-10.75c-1.033 7.385-7.36 13.062-15.03 13.062-8.392 0-15.19-6.796-15.19-15.187 0-7.682 5.696-13.98 13.095-15l-9.655-9.658-2.594-2.593V179.78zm54.94.157h17.686v55.313h52.53l.002 17.688H249.72v-73zM53.124 217.375V307.344c-11.49 3.512-19.844 14.198-19.844 26.844 0 15.505 12.557 28.093 28.064 28.093s28.093-12.587 28.093-28.092c0-12.195-7.79-22.564-18.656-26.438v-72.72h88.782v-17.655H53.124zm301.563 0v17.656h53.968v-17.655h-53.97zm99.968 21.97c-10.898 0-20.342 6.21-25 15.28h-74.97l.002 17.688H427c2.325 13.168 13.824 23.187 27.656 23.187 15.507 0 28.063-12.588 28.063-28.094 0-15.507-12.557-28.062-28.064-28.062zm-349.062 15.28v17.688h53.97v-17.688h-53.97zm17.156 36.47v84.217c-11.498 3.513-19.875 14.2-19.875 26.844 0 15.506 12.587 28.094 28.094 28.094 15.506 0 28.06-12.588 28.06-28.094 0-12.194-7.766-22.564-18.624-26.437v-66.94h19.156v-17.686H122.75zm231.938 0v17.686h45.156v95.283c-11.323 3.624-19.53 14.26-19.53 26.78-.002 15.506 12.585 28.063 28.092 28.063 15.507 0 28.063-12.557 28.063-28.062 0-12.32-7.935-22.778-18.97-26.563V291.095h-62.814zM192.375 341.53v54.033h17.688V341.53h-17.688zm36.47 0v86.564c-11.013 3.794-18.94 14.233-18.94 26.53 0 15.506 12.588 28.095 28.095 28.095s28.063-12.59 28.063-28.095c0-12.53-8.203-23.14-19.532-26.75V341.53h-17.686zm37.28 0v54.033h17.688l-.032-54.032h-17.655zm38.094 0v140.064h17.655V341.53H304.22z"></path>
										</svg>
										<div class="ml-4">
											<p class="text-base font-medium text-gray-900">Enregistrez votre nom de domaine</p>
											<p class="text-sm text-gray-500">Enregistrez votre nom de domaine en toute simplicité grâce à notre panneau de gestion convivial !</p>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="relative group">
						<button class="text-gray-500 group-hover:text-gray-900 rounded-md inline-flex items-center text-base font-medium hover:text-gray-900 transition" id="headlessui-popover-button-7" type="button" aria-expanded="false">
							<span>Game</span>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-gray-400 rotate-0 ml-2 h-5 w-5 group-hover:text-gray-500 transform transition duration-500 ease-in-out" aria-hidden="true">
								<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
							</svg>
						</button>
						<div class="submenu hidden absolute z-10 w-screen max-w-3xl px-2  -ml-4 transform bg-white rounded-xl sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2" id="headlessui-popover-panel-2">
							<div class="overflow-hidden shadow-lg rounded-xl ring-1 ring-black ring-opacity-5">
								<div class="relative grid grid-cols-2 gap-6 px-5 py-6 sm:gap-8 sm:p-8">
									<a class="flex items-start p-3 -m-3 transition rounded-lg hover:bg-gray-50" href="https://rvhhost.fr/hebergeur-serveur-rust">
										<svg class="flex-shrink-0 w-6 h-6 text-blue-600" viewBox="0 0 24 24" fill="currentcolor" xmlns="http://www.w3.org/2000/svg">
											<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
											<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
											<g id="SVGRepo_iconCarrier">
												<path d="M9.6 20H14.4C18.4 20 20 18.4 20 14.4V9.6C20 5.6 18.4 4 14.4 4H9.6C5.6 4 4 5.6 4 9.6V14.4C4 18.4 5.6 20 9.6 20Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M10.5 17H13.5C16 17 17 16 17 13.5V10.5C17 8 16 7 13.5 7H10.5C8 7 7 8 7 10.5V13.5C7 16 8 17 10.5 17Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M8.01001 4V2" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 4V2" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M16 4V2" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M20 8H22" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M20 12H22" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M20 16H22" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M16 20V22" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12.01 20V22" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M8.01001 20V22" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M2 8H4" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M2 12H4" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M2 16H4" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 9.69995L11.06 11.34C10.85 11.7 11.02 12 11.44 12H12.56C12.98 12 13.15 12.3 12.94 12.66L12 14.3" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
											</g>
										</svg>
										<div class="ml-4">
											<p class="text-base font-medium text-gray-900">Rust</p>
											<p class="text-sm text-gray-500">À partir de 5,99 € par mois</p>
										</div>
									</a>

									<a class="flex items-start p-3 -m-3 transition rounded-lg hover:bg-gray-50" href="https://rvhhost.fr/hebergeur-serveur-fivem">
										<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="flex-shrink-0 w-6 h-6 text-blue-600" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
											<path d="M228.844 32.22v114.218h17.687V32.218h-17.686zm-108.25.624c-15.507 0-28.094 12.586-28.094 28.093C92.5 76.444 105.087 89 120.594 89c12.655 0 23.34-8.372 26.844-19.875h44.937v77.313h17.688v-95H147.03c-3.888-10.837-14.262-18.593-26.436-18.593zm193.25 0c-15.507 0-28.063 12.586-28.063 28.093 0 12.124 7.677 22.45 18.44 26.376v59.124h17.655V87.844c11.596-3.452 20.063-14.193 20.063-26.906 0-15.508-12.587-28.094-28.094-28.094zM266.124 92.5v53.938h17.657V92.5h-17.655zm188.532 4.03c-15.507 0-28.094 12.588-28.094 28.095 0 13.083 8.948 24.074 21.063 27.188v27.468h-92.938v17.657h110.624v-46.342c10.223-4.192 17.407-14.233 17.407-25.97 0-15.507-12.557-28.094-28.064-28.094zM30.187 123.657v17.688H96.75v55.594h62.814V179.28h-45.126v-55.624h-84.25zm147.032 40.47v159.718h159.81v-159.72H177.22zm17.56 15.655h17.657v78.595l32.407 32.406h75.28v17.658H237.5l-2.594-2.594-10.75-10.75c-1.033 7.385-7.36 13.062-15.03 13.062-8.392 0-15.19-6.796-15.19-15.187 0-7.682 5.696-13.98 13.095-15l-9.655-9.658-2.594-2.593V179.78zm54.94.157h17.686v55.313h52.53l.002 17.688H249.72v-73zM53.124 217.375V307.344c-11.49 3.512-19.844 14.198-19.844 26.844 0 15.505 12.557 28.093 28.064 28.093s28.093-12.587 28.093-28.092c0-12.195-7.79-22.564-18.656-26.438v-72.72h88.782v-17.655H53.124zm301.563 0v17.656h53.968v-17.655h-53.97zm99.968 21.97c-10.898 0-20.342 6.21-25 15.28h-74.97l.002 17.688H427c2.325 13.168 13.824 23.187 27.656 23.187 15.507 0 28.063-12.588 28.063-28.094 0-15.507-12.557-28.062-28.064-28.062zm-349.062 15.28v17.688h53.97v-17.688h-53.97zm17.156 36.47v84.217c-11.498 3.513-19.875 14.2-19.875 26.844 0 15.506 12.587 28.094 28.094 28.094 15.506 0 28.06-12.588 28.06-28.094 0-12.194-7.766-22.564-18.624-26.437v-66.94h19.156v-17.686H122.75zm231.938 0v17.686h45.156v95.283c-11.323 3.624-19.53 14.26-19.53 26.78-.002 15.506 12.585 28.063 28.092 28.063 15.507 0 28.063-12.557 28.063-28.062 0-12.32-7.935-22.778-18.97-26.563V291.095h-62.814zM192.375 341.53v54.033h17.688V341.53h-17.688zm36.47 0v86.564c-11.013 3.794-18.94 14.233-18.94 26.53 0 15.506 12.588 28.095 28.095 28.095s28.063-12.59 28.063-28.095c0-12.53-8.203-23.14-19.532-26.75V341.53h-17.686zm37.28 0v54.033h17.688l-.032-54.032h-17.655zm38.094 0v140.064h17.655V341.53H304.22z"></path>
										</svg>
										<div class="ml-4">
											<p class="text-base font-medium text-gray-900">FiveM</p>
											<p class="text-sm text-gray-500">À partir de 0,99 € par mois</p>
										</div>
									</a>
									<a class="flex items-start p-3 -m-3 transition rounded-lg hover:bg-gray-50" href="https://rvhhost.fr/hebergeur-serveur-gmod">
										<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="flex-shrink-0 w-6 h-6 text-blue-600" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
											<path d="M228.844 32.22v114.218h17.687V32.218h-17.686zm-108.25.624c-15.507 0-28.094 12.586-28.094 28.093C92.5 76.444 105.087 89 120.594 89c12.655 0 23.34-8.372 26.844-19.875h44.937v77.313h17.688v-95H147.03c-3.888-10.837-14.262-18.593-26.436-18.593zm193.25 0c-15.507 0-28.063 12.586-28.063 28.093 0 12.124 7.677 22.45 18.44 26.376v59.124h17.655V87.844c11.596-3.452 20.063-14.193 20.063-26.906 0-15.508-12.587-28.094-28.094-28.094zM266.124 92.5v53.938h17.657V92.5h-17.655zm188.532 4.03c-15.507 0-28.094 12.588-28.094 28.095 0 13.083 8.948 24.074 21.063 27.188v27.468h-92.938v17.657h110.624v-46.342c10.223-4.192 17.407-14.233 17.407-25.97 0-15.507-12.557-28.094-28.064-28.094zM30.187 123.657v17.688H96.75v55.594h62.814V179.28h-45.126v-55.624h-84.25zm147.032 40.47v159.718h159.81v-159.72H177.22zm17.56 15.655h17.657v78.595l32.407 32.406h75.28v17.658H237.5l-2.594-2.594-10.75-10.75c-1.033 7.385-7.36 13.062-15.03 13.062-8.392 0-15.19-6.796-15.19-15.187 0-7.682 5.696-13.98 13.095-15l-9.655-9.658-2.594-2.593V179.78zm54.94.157h17.686v55.313h52.53l.002 17.688H249.72v-73zM53.124 217.375V307.344c-11.49 3.512-19.844 14.198-19.844 26.844 0 15.505 12.557 28.093 28.064 28.093s28.093-12.587 28.093-28.092c0-12.195-7.79-22.564-18.656-26.438v-72.72h88.782v-17.655H53.124zm301.563 0v17.656h53.968v-17.655h-53.97zm99.968 21.97c-10.898 0-20.342 6.21-25 15.28h-74.97l.002 17.688H427c2.325 13.168 13.824 23.187 27.656 23.187 15.507 0 28.063-12.588 28.063-28.094 0-15.507-12.557-28.062-28.064-28.062zm-349.062 15.28v17.688h53.97v-17.688h-53.97zm17.156 36.47v84.217c-11.498 3.513-19.875 14.2-19.875 26.844 0 15.506 12.587 28.094 28.094 28.094 15.506 0 28.06-12.588 28.06-28.094 0-12.194-7.766-22.564-18.624-26.437v-66.94h19.156v-17.686H122.75zm231.938 0v17.686h45.156v95.283c-11.323 3.624-19.53 14.26-19.53 26.78-.002 15.506 12.585 28.063 28.092 28.063 15.507 0 28.063-12.557 28.063-28.062 0-12.32-7.935-22.778-18.97-26.563V291.095h-62.814zM192.375 341.53v54.033h17.688V341.53h-17.688zm36.47 0v86.564c-11.013 3.794-18.94 14.233-18.94 26.53 0 15.506 12.588 28.095 28.095 28.095s28.063-12.59 28.063-28.095c0-12.53-8.203-23.14-19.532-26.75V341.53h-17.686zm37.28 0v54.033h17.688l-.032-54.032h-17.655zm38.094 0v140.064h17.655V341.53H304.22z"></path>
										</svg>
										<div class="ml-4">
											<p class="text-base font-medium text-gray-900">Gmod</p>
											<p class="text-sm text-gray-500">À partir de 1,99 € par mois</p>
										</div>
									</a>
									<a class="flex items-start p-3 -m-3 transition rounded-lg hover:bg-gray-50" href="https://rvhhost.fr/hebergeur-serveur-minecraft">
										<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="flex-shrink-0 w-6 h-6 text-blue-600" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
											<path d="M228.844 32.22v114.218h17.687V32.218h-17.686zm-108.25.624c-15.507 0-28.094 12.586-28.094 28.093C92.5 76.444 105.087 89 120.594 89c12.655 0 23.34-8.372 26.844-19.875h44.937v77.313h17.688v-95H147.03c-3.888-10.837-14.262-18.593-26.436-18.593zm193.25 0c-15.507 0-28.063 12.586-28.063 28.093 0 12.124 7.677 22.45 18.44 26.376v59.124h17.655V87.844c11.596-3.452 20.063-14.193 20.063-26.906 0-15.508-12.587-28.094-28.094-28.094zM266.124 92.5v53.938h17.657V92.5h-17.655zm188.532 4.03c-15.507 0-28.094 12.588-28.094 28.095 0 13.083 8.948 24.074 21.063 27.188v27.468h-92.938v17.657h110.624v-46.342c10.223-4.192 17.407-14.233 17.407-25.97 0-15.507-12.557-28.094-28.064-28.094zM30.187 123.657v17.688H96.75v55.594h62.814V179.28h-45.126v-55.624h-84.25zm147.032 40.47v159.718h159.81v-159.72H177.22zm17.56 15.655h17.657v78.595l32.407 32.406h75.28v17.658H237.5l-2.594-2.594-10.75-10.75c-1.033 7.385-7.36 13.062-15.03 13.062-8.392 0-15.19-6.796-15.19-15.187 0-7.682 5.696-13.98 13.095-15l-9.655-9.658-2.594-2.593V179.78zm54.94.157h17.686v55.313h52.53l.002 17.688H249.72v-73zM53.124 217.375V307.344c-11.49 3.512-19.844 14.198-19.844 26.844 0 15.505 12.557 28.093 28.064 28.093s28.093-12.587 28.093-28.092c0-12.195-7.79-22.564-18.656-26.438v-72.72h88.782v-17.655H53.124zm301.563 0v17.656h53.968v-17.655h-53.97zm99.968 21.97c-10.898 0-20.342 6.21-25 15.28h-74.97l.002 17.688H427c2.325 13.168 13.824 23.187 27.656 23.187 15.507 0 28.063-12.588 28.063-28.094 0-15.507-12.557-28.062-28.064-28.062zm-349.062 15.28v17.688h53.97v-17.688h-53.97zm17.156 36.47v84.217c-11.498 3.513-19.875 14.2-19.875 26.844 0 15.506 12.587 28.094 28.094 28.094 15.506 0 28.06-12.588 28.06-28.094 0-12.194-7.766-22.564-18.624-26.437v-66.94h19.156v-17.686H122.75zm231.938 0v17.686h45.156v95.283c-11.323 3.624-19.53 14.26-19.53 26.78-.002 15.506 12.585 28.063 28.092 28.063 15.507 0 28.063-12.557 28.063-28.062 0-12.32-7.935-22.778-18.97-26.563V291.095h-62.814zM192.375 341.53v54.033h17.688V341.53h-17.688zm36.47 0v86.564c-11.013 3.794-18.94 14.233-18.94 26.53 0 15.506 12.588 28.095 28.095 28.095s28.063-12.59 28.063-28.095c0-12.53-8.203-23.14-19.532-26.75V341.53h-17.686zm37.28 0v54.033h17.688l-.032-54.032h-17.655zm38.094 0v140.064h17.655V341.53H304.22z"></path>
										</svg>
										<div class="ml-4">
											<p class="text-base font-medium text-gray-900">Minecraft</p>
											<p class="text-sm text-gray-500">À partir de 1,99 € par mois</p>
										</div>
									</a>
									<a class="flex items-start p-3 -m-3 transition rounded-lg hover:bg-gray-50" href="https://rvhhost.fr/hebergeur-serveur-nova-life">
										<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="flex-shrink-0 w-6 h-6 text-blue-600" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
											<path d="M228.844 32.22v114.218h17.687V32.218h-17.686zm-108.25.624c-15.507 0-28.094 12.586-28.094 28.093C92.5 76.444 105.087 89 120.594 89c12.655 0 23.34-8.372 26.844-19.875h44.937v77.313h17.688v-95H147.03c-3.888-10.837-14.262-18.593-26.436-18.593zm193.25 0c-15.507 0-28.063 12.586-28.063 28.093 0 12.124 7.677 22.45 18.44 26.376v59.124h17.655V87.844c11.596-3.452 20.063-14.193 20.063-26.906 0-15.508-12.587-28.094-28.094-28.094zM266.124 92.5v53.938h17.657V92.5h-17.655zm188.532 4.03c-15.507 0-28.094 12.588-28.094 28.095 0 13.083 8.948 24.074 21.063 27.188v27.468h-92.938v17.657h110.624v-46.342c10.223-4.192 17.407-14.233 17.407-25.97 0-15.507-12.557-28.094-28.064-28.094zM30.187 123.657v17.688H96.75v55.594h62.814V179.28h-45.126v-55.624h-84.25zm147.032 40.47v159.718h159.81v-159.72H177.22zm17.56 15.655h17.657v78.595l32.407 32.406h75.28v17.658H237.5l-2.594-2.594-10.75-10.75c-1.033 7.385-7.36 13.062-15.03 13.062-8.392 0-15.19-6.796-15.19-15.187 0-7.682 5.696-13.98 13.095-15l-9.655-9.658-2.594-2.593V179.78zm54.94.157h17.686v55.313h52.53l.002 17.688H249.72v-73zM53.124 217.375V307.344c-11.49 3.512-19.844 14.198-19.844 26.844 0 15.505 12.557 28.093 28.064 28.093s28.093-12.587 28.093-28.092c0-12.195-7.79-22.564-18.656-26.438v-72.72h88.782v-17.655H53.124zm301.563 0v17.656h53.968v-17.655h-53.97zm99.968 21.97c-10.898 0-20.342 6.21-25 15.28h-74.97l.002 17.688H427c2.325 13.168 13.824 23.187 27.656 23.187 15.507 0 28.063-12.588 28.063-28.094 0-15.507-12.557-28.062-28.064-28.062zm-349.062 15.28v17.688h53.97v-17.688h-53.97zm17.156 36.47v84.217c-11.498 3.513-19.875 14.2-19.875 26.844 0 15.506 12.587 28.094 28.094 28.094 15.506 0 28.06-12.588 28.06-28.094 0-12.194-7.766-22.564-18.624-26.437v-66.94h19.156v-17.686H122.75zm231.938 0v17.686h45.156v95.283c-11.323 3.624-19.53 14.26-19.53 26.78-.002 15.506 12.585 28.063 28.092 28.063 15.507 0 28.063-12.557 28.063-28.062 0-12.32-7.935-22.778-18.97-26.563V291.095h-62.814zM192.375 341.53v54.033h17.688V341.53h-17.688zm36.47 0v86.564c-11.013 3.794-18.94 14.233-18.94 26.53 0 15.506 12.588 28.095 28.095 28.095s28.063-12.59 28.063-28.095c0-12.53-8.203-23.14-19.532-26.75V341.53h-17.686zm37.28 0v54.033h17.688l-.032-54.032h-17.655zm38.094 0v140.064h17.655V341.53H304.22z"></path>
										</svg>
										<div class="ml-4">
											<p class="text-base font-medium text-gray-900">Nova-Life</p>
											<p class="text-sm text-gray-500">À partir de 8,99 € par mois</p>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</nav>
				<div class="items-center justify-end hidden md:flex md:flex-1 lg:w-0  px-32 ">
					<a href="https://manager.nvhcloud.com/" class="inline-flex items-center justify-center px-4 py-2 ml-8 text-stt font-medium text-white transform rounded-md shadow-sm bg-gradient-to-tr from-blue-500 to-[#00acff] whitespace-nowrap hover:-translate-y-0.5 transition duration-150 ease-in-out hover:shadow-xl">Espace Client</a>
				</div>
			</div>
		</div>
	</div>
	<div id="mobile-menu" class="sticky top-20 z-50 hidden md:hidden bg-white shadow-lg">
            <a href="#" class="bg-gray-100 rounded-full block px-4 py-2 text-gray-700">Home</a>
            <!-- About with dropdown -->
            <div>
                <button id="about-menu-button" class="bg-gray-100 rounded-full mt-2 block w-full   text-left px-4 py-2 text-gray-700">VPS</button>
                <div id="about-submenu" class="hidden ml-4">
                    <a href="#" class="block px-4 py-2 text-gray-700">VPS Ryzen</a>
                    <a href="#" class="block px-4 py-2 text-gray-700">VPS Intel</a>
                    <a href="#" class="block px-4 py-2 text-gray-700">VPS Pterodactyl</a>
                    <a href="#" class="block px-4 py-2 text-gray-700">VPS SSD + Protec</a>
                    <a href="#" class="block px-4 py-2 text-gray-700">VPS NVME</a>
                </div>
            </div>
			<div>
                <button id="about-menu-button" class="bg-gray-100 rounded-full mt-2 block w-full text-left px-4 py-2 text-gray-700">Datacenter</button>
                <div id="about-submenu" class="hidden ml-4">
                    <a href="#" class="block px-4 py-2 text-gray-700">Housing</a>
                    <a href="#" class="block px-4 py-2 text-gray-700">Serveurs dédiés</a>
                    <a href="#" class="block px-4 py-2 text-gray-700">VPS Pterodactyl</a>
                    <a href="#" class="block px-4 py-2 text-gray-700">Tunnel IP</a>
                </div>
            </div>
			<div>
                <button id="about-menu-button" class="bg-gray-100 rounded-full mt-2 block w-full text-left px-4 py-2 text-gray-700">Réseau</button>
                <div id="about-submenu" class="hidden ml-4">
                    <a href="#" class="block px-4 py-2 text-gray-700">VPN</a>
                    <a href="#" class="block px-4 py-2 text-gray-700">Anti-DDOS</a>

                </div>
            </div>			
			<div>
                <button id="about-menu-button" class="bg-gray-100 rounded-full mt-2 block w-full text-left px-4 py-2 text-gray-700">WEB</button>
                <div id="about-submenu" class="hidden ml-4">
                    <a href="#" class="block px-4 py-2 text-gray-700">Web</a>
                    <a href="#" class="block px-4 py-2 text-gray-700">Nom de domaine</a>

                </div>
            </div>			
			<div>
                <button id="about-menu-button" class="bg-gray-100 rounded-full mt-2 block w-full text-left px-4 py-2 text-gray-700">Game</button>
                <div id="about-submenu" class="hidden ml-4">
                    <a href="https://rvhhost.fr/hebergeur-serveur-rust" class="block px-4 py-2 text-gray-700">Rust</a>
                    <a href="https://rvhhost.fr/hebergeur-serveur-gmod" class="block px-4 py-2 text-gray-700">Gmod</a>
                    <a href="https://rvhhost.fr/hebergeur-serveur-nova-life" class="block px-4 py-2 text-gray-700">NovaLife</a>
                    <a href="https://rvhhost.fr/hebergeur-serveur-fivem" class="block px-4 py-2 text-gray-700">FiveM</a>
                    <a href="https://rvhhost.fr/hebergeur-serveur-minecraft" class="block px-4 py-2 text-gray-700">Minecraft</a>

                </div>
            </div>
            <a href="#" class="block px-4 py-2 text-gray-700">Espace Client</a>
        </div>
	<script>	
		// Function to toggle the mobile menu
		function toggleMobileMenu() {
			const mobileMenu = document.getElementById('mobile-menu');
			mobileMenu.classList.toggle('hidden');
		}
		        // Toggle About submenu
				const aboutMenuButton = document.getElementById('about-menu-button');
        const aboutSubmenu = document.getElementById('about-submenu');
        aboutMenuButton.addEventListener('click', () => {
            aboutSubmenu.classList.toggle('hidden');
        });
	</script>

</body>
</html>