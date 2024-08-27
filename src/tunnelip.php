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





      <!--pricing with switch section start-->
      <section class="pricing-section ptb-100">
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-md-9 col-lg-8">
                      <div class="section-heading text-center mb-5">
                          <h2 class="text-4xl font-bold mb-4">Nos prix d'hébergement TunnelIP</h2>
                          <p class="lead">
                              Découvrez nos offres d'hébergement TunnelIP professionnel à un prix abordable. Nous vous proposons une gamme complète de services pour répondre à vos besoins en matière d'hébergement Réseaux.
                          </p>
                      </div>
                  </div>
              </div>



              <div class="row align-items-center justify-content-between">

                  <?php
                  $json = file_get_contents("json/datacenter/tunnelip.json");
                  $data = json_decode($json, true);
                  $html = "";

                  foreach ($data["plans"] as $id => $plan) {
                      $name = $plan["name"];
                      $ipv4_addresses = $plan["ipv4_addresses"];
                      $ipv6_addresses = $plan["ipv6_addresses"];
                      $bandwidth = $plan["bandwidth"];
                      $latency = $plan["latency"];
                      $uptime = $plan["uptime"];
                      $price_month = $plan["price"]["month"]["amount"];
                      $price_year = $plan["price"]["year"]["amount"];
                      $on_sale = $plan["price"]["onSale"];
                      $discount = $plan["price"]["discount"];
                      $order_now = "#";

                      if ($on_sale) {
                          $discount_amount = $price_month * ((int) str_replace("%", "", $discount) / 100);
                          $discounted_price = $price_month - $discount_amount;
                      }

                      $html .= '<div class="col-lg-4 col-md-4 col-12">';
                      $html .= '<div class="card text-center single-pricing-pack">';
                      $html .= '<div class="pt-5">';
                      $html .= '<h5 class="mb-2 text-2xl">' . $name  . '</h5>';
                      $html .= '</div>';
                      $html .= '<div class="card-header pb-4 border-0 pricing-header">';

                      if ($on_sale) {
                          $html .= '<div class="price text-center mb-0 monthly-price">';
                          $html .= number_format($discounted_price, 2) . '€<span>/month</span>';
                          $html .= '</div>';
                          $html .= '<span class="pricing-onsale">On sale - <span class="badge color-3 color-3-bg">Save ' . $discount . '</span></span>';
                      } else {
                          $html .= '<div class="price text-center mb-0 monthly-price">';
                          $html .= $price_month . '€<span>/month</span>';
                          $html .= '</div>';
                      }

                      $html .= '</div>';
                      $html .= '<div class="card-body">';
                      $html .= '<ul class="list-unstyled mb-4 pricing-feature-list">';
                      $html .= '<li>IPv4 Addresses: ' . $ipv4_addresses . '</li>';
                      $html .= '<li>IPv6 Addresses: ' . $ipv6_addresses . '</li>';
                      $html .= '<li>Bandwidth: ' . $bandwidth . '</li>';
                      $html .= '<li>Latency: ' . $latency . '</li>';
                      $html .= '<li>Uptime: ' . $uptime . '</li>';
                      $html .= '</ul>';
                      $html .= '<a href="' . $order_now . '" class="btn outline-btn mb-3" target="_blank">Commander</a>';
                      $html .= '</div>';
                      $html .= '</div>';
                      $html .= '</div>';

                  }
                  echo $html;
                  ?>




      </section>


         <?php include('footdatacenter.php'); ?>
        
   </body>
</html>