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





      <section class="hero-equal-height pt-165 ptb-100 gradient-overly-bottom" style="background: url('./images/ndd.png')no-repeat center center / cover">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-7">
                        <div class="hero-content-left text-white text-center">
                            <h1 class="text-white text-5xl font-bold">Utilise Domain Checker pour trouver des domaines uniques</h1>
                            <p class="lead">Jusqu'à 50% de réduction sur le domaine et l'hébergement, à partir de 2,99 $/mois, certificat SSL gratuit, assistance 24/7/365, garantie de remboursement.</p>

                            <form action="domain-search-result.php" class="domain-search-form mt-3 w-75  mx-auto">
                                <div class="input-group">
                                    <input type="text" name="domain" id="domain" class="form-control" placeholder="example.com">
                                    <div class="input-group-append">
                                        <button class="btn search-btn btn-hover d-flex align-items-center" type="submit">
                                        <i class='bx bx-search-alt-2'></i>&nbsp;Rechercher
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <div class="domain-list-wrap mt-4">
                                <ul class="list-inline domain-search-list text-white">
                                    <li class="list-inline-item"><a href="#">com <span>$8.99</span></a></li>
                                    <li class="list-inline-item"><a href="#">fr <span>$4.99</span></a></li>
                                    <li class="list-inline-item"><a href="#">online <span>$2.99</span></a></li>
                                    <li class="list-inline-item"><a href="#">xyz <span>$0.99</span></a></li>
                                    <li class="list-inline-item"><a href="#">dbz <span>$0.99</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

<section class="domain-search-result-section gray-light-bg ptb-100">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-3">
                        <div class="domain-extension-filter-wrap p-4 white-bg rounded">
                            <div class="domain-filter-title">
                                <h5 class="mb-0">Filtration<i class='bx bx-chevron-down' ></i></h5>
                            </div>
                            <ul class="list-unstyled domain-filter-list mt-3">
                                <li class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="">Voir Tout
                                    </label>
                                </li>
                                <li class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="">.com
                                    </label>
                                </li>
                                <li class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="">.net
                                    </label>
                                </li>
                                <li class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="">.online
                                    </label>
                                </li>
                                <li class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="">.org
                                    </label>
                                </li>
                                <li class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="">.xyz
                                    </label>
                                </li>
                                <li class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="">.store
                                    </label>
                                </li>
                                <li class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="">.website
                                    </label>
                                </li>
                                <li class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="">.biz
                                    </label>
                                </li>
                                <button type="submit" class="btn btn-block outline-btn mt-3">Appliquer</button>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-9">
                        <div class="content-with-sidebar">
                            <!--alert table start-->
                            <table class="table vps-hosting-pricing-table domain-search-result-table alert-table mb-5 hover:border-0">
                                <tbody>
                                    <tr class="vps-pricing-row hover:border-0 ">
                                        <td>Domaine <span class="color-primary">example.com</span> est maintenant disponnible
                                            <br><small>Offre limités </small>
                                        </td>
                                        <td>
                                            <p>
                                                <span class="rate">$3.95<span>/mois</span></span>
                                                <span class="pricing-onsale">En promotion - <span class="badge color-3 color-3-bg">-30%</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <a href="#" class="btn secondary-solid-btn">Ajoutez au panier</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--alert table end-->
                            <h4 class="text-center">Plus d'options</h4>
                            <table class="table vps-hosting-pricing-table domain-search-result-table">
                                <tbody>
                                    <tr class="vps-pricing-row border-accent-primary">
                                        <td data-value="Available">nvhcloud<span class="color-primary">.com</span></td>
                                        <td data-value="Price">
                                            <p>
                                            <span class="rate">$3.95<span>/mois</span></span>
                                            <span class="pricing-onsale">En promotion - <span class="badge color-3 color-3-bg">-30%</span></span>
                                            </p>
                                        </td>
                                        <td>
                                        <a href="#" class="btn primary-solid-btn">Ajoutez au panier</a>
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         


    
        
   </body>
</html>