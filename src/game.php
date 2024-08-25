<!DOCTYPE html>
<html lang="fr">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Menu avec Hover</title>
      <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
      <link href="./css/output.css" rel="stylesheet">
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <!-- animation -->
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

      <link rel="stylesheet" href="./css/perso/main.css">
		<link rel="stylesheet" href="./css/perso/custom.css">

      <style>
         /* Ajout de styles personnalisés pour gérer le menu déroulant */
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
         /* * {
         border-color: red;
         border-style: solid;
         border-width: 2px;
         } */
      </style>
   </head>
   <body class=" w-screen overflow-x-hidden ">
      <?php include 'navbar.html';?>




      <div class="main">
        <!--hero section start-->
        <section class="hero-equal-height pt-165 ptb-100 gradient-overly-bottom" style="background: url('https://imgs.search.brave.com/_tsojWfuOOj3QbQ-IbyAy9TTr2PS7ZJHZSB6U9E_j0s/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93YWxs/cGFwZXJzLmNvbS9p/bWFnZXMvaGQvZml2/ZW0tNHo3c3o0MDdr/Y3A4Y3MxNS5qcGc')no-repeat center center / cover">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-8">
                        <div class="hero-content-wrap text-white text-center position-relative z-index">
                            <h1 class="text-white text-4xl font-bold mb-4">Hébergement de serveurs FiveM</h1>
                            <p class="lead">Découvrez nos offres d'hébergement de serveurs FiveM ! Profitez d'une expérience de jeu fluide grâce à notre réseau ultra-performant. Disponibilité de 99.9% et support technique 24/7. Lancez-vous dans l'aventure FiveM dès maintenant !</p>
                            <ul class="list-inline header-feature-list mt-5">
                                <li class="list-inline-item text-center p-3">
                                    <i class='bx bxs-timer icon-md d-block mb-3'></i>
                                    <h5 class="text-white">99.9% d'Uptime</h5>
                                    
                                </li>
                                <li class="list-inline-item text-center p-3">
                                    <i class='bx bx-help-circle icon-md d-block mb-3' ></i>
                                    <h5 class="text-white">Support technique 24x7</h5>
                                   
                                </li>
                                <li class="list-inline-item text-center p-3">
                                    <i class='bx bxs-virus-block icon-md d-block mb-3' ></i>
                                    <h5 class="text-white">Protection Anti-DDoS</h5>
                                    
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="shape-bottom">
                <img src="./images/curve-shape-top.svg" alt="shape" class="bottom-shape img-fluid">
            </div>
        </section>
        <!--hero section end-->

        <!--pricing with switch section start-->
        <section class="pricing-section ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Nos prix d'hébergement FiveM</h2>
                            <p class="lead">
                                Découvrez nos offres d'hébergement FiveM professionnel à un prix abordable. Nous vous proposons une gamme complète de services pour répondre à vos besoins en matière d'hébergement FiveM.
                            </p>
                        </div>
                    </div>
                </div>

                

<div class="row align-items-center justify-content-between">

            <div class="col-lg-4 col-md-4 col-12">
                <div class="card text-center single-pricing-pack">
                    <div class="pt-5">
                        <h5 class="mb-0">Nom</h5>
                    </div>
                    <div class="card-header pb-4 border-0 pricing-header">
                        <div class="price text-center mb-0 monthly-price">12<span>/month</span></div>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled mb-4 pricing-feature-list">
                                <li>aaabbb</li>

                        </ul>
                        <a href="#" class="btn outline-btn mb-3" target="_blank">Acheter</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card text-center single-pricing-pack">
                    <div class="pt-5">
                        <h5 class="mb-0">Nom</h5>
                    </div>
                    <div class="card-header pb-4 border-0 pricing-header">
                        <div class="price text-center mb-0 monthly-price">12<span>/month</span></div>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled mb-4 pricing-feature-list">
                                <li>aaabbb</li>

                        </ul>
                        <a href="#" class="btn outline-btn mb-3" target="_blank">Acheter</a>
                    </div>
                </div>
            </div><div class="col-lg-4 col-md-4 col-12">
                <div class="card text-center single-pricing-pack">
                    <div class="pt-5">
                        <h5 class="mb-0">Nom</h5>
                    </div>
                    <div class="card-header pb-4 border-0 pricing-header">
                        <div class="price text-center mb-0 monthly-price">12<span>/month</span></div>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled mb-4 pricing-feature-list">
                                <li>aaabbb</li>

                        </ul>
                        <a href="#" class="btn outline-btn mb-3" target="_blank">Acheter</a>
                    </div>
                </div>
            </div>


                
        </section>
         
        <section id="features" class="feature-tab-section ptb-100">
            <div class="container mx-auto">
                <div class="row mx-auto">
                    <div class="col-xl-6 mx-auto col-lg-3 col-12 order-lg-last align-self-center">
                        <div class="image-box mx-auto fadein text-xl-right text-center">

                            <img src="https://imgs.search.brave.com/q0SYac722SMxBkQ5UcrE61RsBayay6csvm67kFbKxZ8/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly93YWxs/cGFwZXJzLmNvbS9p/bWFnZXMvZmVhdHVy/ZWQvZml2ZW0tcGlj/dHVyZXMtNnEzYng5/ZzJnZGN1NHRoNS5q/cGc" alt="" class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-9 col-12 order-xl-first">
                        <h2>Meilleur support et sécurité</h2>
                        <p>Développez progressivement des compétences essentielles à la mission sans paradigmes magnétiques. Développez de manière appropriée un retour sur investissement flexible sans service client axé sur les objectifs. De manière transparente.</p>
                        <div class="row pt-2">
                            <div class="col-md-6 col-12">
                                <h5>Optimisation FiveM</h5>
                                <ul class="disc-style">
                                    <li>Dernière version de Java la plus rapide</li>
                                    <li>Support pour les plugins FiveM</li>
                                    <li>Optimisation des performances </li>
                                    <li>Protection DDoS pour les serveurs FiveM</li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-12">
                                <h5>Panel Pterodactyl</h5>
                                <ul class="disc-style">
                                    <li>Gestion facile des serveurs FiveM</li>
                                    <li>Contrôle complet du serveur via une interface conviviale</li>
                                    <li>Installation en un clic de mods et de plugins</li>
                                    <li>Surveillance en temps réel des performances du serveur</li>
                                </ul>
                            </div>
                        </div>
                        <div class="action-btns mt-4">
                            <a href="#" class="btn primary-solid-btn mr-3">Commencer maintenant</a>
                            <a href="#" class="btn outline-btn">Forfaits et tarifs</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="cta-new pb-100">
            <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-4 col-lg-7 col-12 order-lg-last align-self-center">
                <div class="image-box fadein text-xl-right text-center">
                    <img src="https://rvhhost.fr/assets/images/hosting/panelrvhh.png" alt="panel" class="img-fluid" />
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-12 order-xl-last">
                <h2>Hébergement partagé mondialement connu</h2>
                <p>Optimisez votre serveur FiveM pour des performances et une sécurité maximales. Obtenez la dernière version de Java pour des parties plus rapides, un support pour les plugins FiveM, une optimisation des performances et une protection DDoS. Gérez facilement votre serveur FiveM avec le panneau de contrôle Pterodactyl, qui vous permet d'avoir un contrôle total sur votre serveur grâce à une interface conviviale. Installez des mods et des plugins en un seul clic et surveillez les performances de votre serveur en temps réel. Commencez maintenant et découvrez les meilleurs services d'hébergement FiveM.</p>
                <div class="row pt-2">
                    <div class="col-md-6 col-12">
                    <h5>Fonctionnalités exclusives</h5>
                    <ul class="disc-style">
                        <li>Sauvegardes quotidiennes et restauration gratuite des sauvegardes</li>
                        <li>Mises à jour de sécurité et correctifs</li>
                        <li>Surveillance des performances et des ressources</li>
                        <li>Tutoriels étape par étape et base de connaissances</li>
                    </ul>
                    </div>
                    <div class="col-md-6 col-12">
                    <h5>Services FiveM</h5>
                    <ul class="disc-style">
                        <li>Installation de FiveM en un clic</li>
                        <li>Transfert gratuit de FiveM</li>
                        <li>Installation de thèmes et de plugins</li>
                        <li>Scan et rapports de logiciels malveillants</li>
                    </ul>
                    </div>
                </div>
                <div class="action-btns mt-4">
                    <a href="#" class="btn primary-solid-btn mr-2">Commencer maintenant</a>
                    <a href="#" class="btn outline-btn">Forfaits et tarifs</a>
                </div>
                </div>
            </div>
            </div>
        </section>
        <!--feature section tab style end-->

        <!--call to action new style start-->
        <section class="call-to-action ptb-100 gradient-overly-bottom" style="background: url('https://imgs.search.brave.com/_tsojWfuOOj3QbQ-IbyAy9TTr2PS7ZJHZSB6U9E_j0s/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93YWxs/cGFwZXJzLmNvbS9p/bWFnZXMvaGQvZml2/ZW0tNHo3c3o0MDdr/Y3A4Y3MxNS5qcGc')no-repeat center center / cover fixed">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="call-to-action-content text-white text-center">
                            <h2 class="text-white text-5xl mb-4 font-bold">Vous avez déjà un hébergement que vous aimez ?</h2>
                            <p>Il est simple et rapide de transférer votre hébergement FiveM vers NVHCloud pour optimiser vos performances et gagner en autonomie.</p>
                            <div class="action-btns mt-3">
                                <a href="#" class="btn solid-white-btn mr-3">Clients existants</a>
                                <a href="#" class="btn outline-white-btn">Nouveaux clients</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    
        <section>
	<?php
		$json = file_get_contents('json/faq.json');
		$faq = json_decode($json, true);
		?>
	<section class="max-w-5xl mx-auto py-10 sm:py-20">
		<div class="flex items-center justify-center flex-col gap-y-2 py-5">
			<h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-black">Questions Fréquemment Posées</h2>
			<p class="text-lg font-medium text-slate-400/70">Questions Relatives à NVHCloud</p>
		</div>
		<div class="w-full px-7 md:px-10 xl:px-2 py-4">
			<div class="mx-auto w-full max-w-5xl border border-slate-400/40 rounded-lg">
				<?php foreach ($faq as $index => $item) : ?>
				<div class="border-b border-[#0A071B]/10">
					<button class="question-btn flex w-full items-start gap-x-1 justify-between rounded-lg text-left text-lg text-black focus:outline-none px-5 py-4" data-toggle="answer-<?= $index + 1 ?>">
						<span><?= htmlspecialchars($item['question'], ENT_QUOTES, 'UTF-8') ?></span>
						<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="mt-1.5 md:mt-0 flex-shrink-0 h-5 w-5 text-[#5B5675]" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
							<path d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z"></path>
						</svg>
					</button>
					<div class="answer pt-2 pb-5 px-5 text-sm lg:text-base text-slate-400" id="answer-<?= $index + 1 ?>" style="display: none;">
						<?= htmlspecialchars($item['answer'], ENT_QUOTES, 'UTF-8') ?>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
	<script>
		document.addEventListener('DOMContentLoaded', function() {
		const buttons = document.querySelectorAll('.question-btn');
		
		buttons.forEach(button => {
		    button.addEventListener('click', function() {
		    const targetId = this.getAttribute('data-toggle');
		    const target = document.getElementById(targetId);
		    const isExpanded = target.style.display === 'block';
		
		    if (isExpanded) {
		        target.style.display = 'none';
		        this.querySelector('svg').classList.remove('rotate-180');
		    } else {
		        target.style.display = 'block';
		        this.querySelector('svg').classList.add('rotate-180');
		    }
		    });
		});
		});
	</script>
   </body>
</html>