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
      <?php include 'navbar.php';?>



         <section>
			<section class="vps-pricing-plane ">
				<div class="container">
					<div class="row justify-content-center">
						<div class="items-center sm:flex sm:flex-col sm:align-center ">
							<div class="section-heading text-center mb-5">
								<img src="images/Intel.svg" style="filter:drop-shadow(0px 0 20px #999490);" class="h-32 mx-auto" alt="">
								<h1 class="inline-flex items-center content-center text-5xl font-extrabold text-center text-gray-900 sm:text-center">Service VPN Sécurisé</h1>
								<p class="mt-2 w-96 mx-auto  text-center text-xl text-gray-500 sm:text-center">Idéal pour voyager sans bouger de chez sois</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <table class="table vps-hosting-pricing-table">
                            <thead>
                                <tr>
                                    <th>Serveurs</th>
                                    <th>Emplacements</th>
                                    <th>Bande passante</th>
                                    <th>Cryptage</th>
                                    <th>Appareils supportés</th>
                                    <th>Disponibilité</th>
                                    <th colspan="2">Prix</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $json = file_get_contents("json/reseau/vpn.json");
                                    $data = json_decode($json, true);
                                    $html = "";
                                    
                                    foreach ($data["plans"] as $id => $plan) {
                                        $servers = $plan["servers"];
                                        $locations = $plan["locations"];
                                        $bandwidth = $plan["bandwidth"];
                                        $encryption = $plan["encryption"];
                                        $devices = $plan["devices"];
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
                                        
                                        $html .= '<tr class="vps-pricing-row border-accent-primary">';
                                        $html .= '<td data-value="Servers">' . $servers . "</td>";
                                        $html .= '<td data-value="Locations">' . $locations . "</td>";
                                        $html .= '<td data-value="Bandwidth">' . $bandwidth . "</td>";
                                        $html .= '<td data-value="Encryption">' . $encryption . "</td>";
                                        $html .= '<td data-value="Devices">' . $devices . "</td>";
                                        $html .= '<td data-value="Uptime">' . $uptime . "</td>";
                                        $html .= '<td data-value="Price">';
                                        $html .= "<p>";
                                        if ($on_sale) {
                                            $html .= '<br><span class="rate">' . number_format($discounted_price, 2) . "€<span>/month</span></span>";
                                            $html .= '<span class="pricing-onsale">On sale - <span class="badge color-3 color-3-bg">Save ' . $discount . "</span></span>";
                                        } else {
                                            $html .= '<span class="rate">' . $price_month . "€<span>/month</span></span>";
                                        }
                                        $html .= "</p>";
                                        $html .= "</td>";
                                        $html .= "<td>";
                                        $html .= '<a href="' . $order_now . '" class="btn primary-solid-btn">Commander</a>';
                                        $html .= "</td>";
                                        $html .= "</tr>";
                                    }
                                    echo $html;
                                ?>
                            </tbody>
                        </table>



						</div>
					</div>
				</div>
			</section>
		</section>





        <div class=""><div class="px-4 py-8 mx-auto text-center max-w-7xl sm:py-10 sm:px-3 lg:px-8"><p class="mt-5 text-xl text-black-500 sm:text-center" style="font-weight: bold;">Système compatible avec notre VPN</p><div class="flow-root mt-4 lg:mt-4"><div class="grid items-start max-w-md grid-cols-1 gap-4 mx-auto mt-4 lg:grid-cols-4 md:max-w-2xl lg:max-w-none">
			<div class="relative flex flex-col items-center p-5 transition duration-300 ease-in-out transform bg-white shadow-lg rounded-xl hover:-translate-y-2 hover:shadow-2xl">
				<img class="object-contain h-16 my-auto" src="./images/Linux_logo.svg" alt="Linux Logo" draggable="false"></div>
			<div class="relative flex flex-col items-center p-5 transition duration-300 ease-in-out transform bg-white shadow-lg rounded-xl hover:-translate-y-2 hover:shadow-2xl">
				<img class="object-contain h-16 my-auto " src="/images/Android_logo.svg" alt="Android Logo" draggable="false"></div>
				<div class="relative flex flex-col items-center p-5 transition duration-300 ease-in-out transform bg-white shadow-lg rounded-xl hover:-translate-y-2 hover:shadow-2xl">
					<img class="object-contain h-16 my-auto" src="/images/Apple_logo.svg" alt="Apple Logo" draggable="false"></div>
                    <div class="relative flex flex-col items-center p-5 transition duration-300 ease-in-out transform bg-white shadow-lg rounded-xl hover:-translate-y-2 hover:shadow-2xl">
					<img class="object-contain h-16 my-auto" src="/images/Windows_logo.svg" alt="Windows Logo" draggable="false"></div>
				
	</div></div></div></div>


      <?php include "footreseau.php"; ?>
        
   </body>
</html>