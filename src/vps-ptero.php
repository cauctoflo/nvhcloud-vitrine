<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>NVHCloud SAS - VPS Pterodactyl</title>
		<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
		<link href="./css/output.css" rel="stylesheet">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<link rel="stylesheet" href="./css/perso/main.css">
		<link rel="stylesheet" href="./css/perso/custom.css">
	</head>
	<body class=" w-screen overflow-x-hidden ">
		<?php include "navbar.php"; ?>
		<section>
			<section class="vps-pricing-plane ">
				<div class="container">
					<div class="row justify-content-center">
						<div class="items-center sm:flex sm:flex-col sm:align-center ">
							<div class="section-heading text-center mb-5">
								<img src="images/ryzen.svg" style="filter:drop-shadow(0px 0 20px #999490);" class="h-32 mx-auto" alt="">
								<h1 class="inline-flex items-center content-center text-5xl font-extrabold text-center text-gray-900 sm:text-center">&nbsp;VPS NVME</h1>
								<div class="hidden sm:block h-1 w-64 rounded-3xl  mb-2 mt-2 mx-auto border-b-4 border-[#00aaff]"></div>
								<p class="mt-2 w-96   text-xl text-gray-500 sm:text-center">Nos VPS NVMe offrent des vitesses de stockage fulgurantes, idéales pour les applications nécessitant des temps de réponse ultra-rapides.</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<table class="table vps-hosting-pricing-table">
								<thead>
									<tr>
										<th>vCore</th>
										<th>Ram</th>
										<th>Puissance du processeur</th>
										<th>Stockage</th>
										<th>Score</th>
										<th>Réseau</th>
										<th colspan="2">Prix</th>
									</tr>
								</thead>
								<tbody>
									<?php
										$json = file_get_contents("json/vps/nvme.json");
										$data = json_decode($json, true);
										$html = "";
										
										foreach ($data["plans"] as $id => $plan) {
										    $vcpu = $plan["vCPU"];
										    $memory = $plan["Memory"];
										    $cpu_power = $plan["CPU Power"];
										    $storage = $plan["Storage"];
										    $geekbench_score = $plan["Geekbench Score"];
										    $geekbench_percent =
										        $plan["Geekbench Pourcent"];
										    $bandwidth = $plan["Bandwidth"];
										    $price_month =
										        $plan["Price"]["month"]["amount"];
										    $price_year = $plan["Price"]["year"]["amount"];
										    $on_sale = $plan["Price"]["onSale"];
										    $discount = $plan["Price"]["discount"];
										    $order_now = $plan["Order Now"];
										
										    if ($on_sale) {
										        $discount_amount =
										            $price_month *
										            ((int) str_replace("%", "", $discount) /
										                100);
										        $discounted_price =
										            $price_month - $discount_amount;
										    }
										
										    $html .=
										        '<tr class="vps-pricing-row border-accent-primary">';
										    $html .=
										        '<td data-value="VCPU">' . $vcpu . "</td>";
										    $html .=
										        '<td data-value="Memory">' .
										        $memory .
										        "</td>";
										    $html .=
										        '<td data-value="CPU Power"><span>' .
										        $cpu_power .
										        '<span class="cpu-core"></span></span></td>';
										    $html .=
										        '<td data-value="Storage">' .
										        $storage .
										        "</td>";
										    $html .= '<td data-value="Geekbench Score">';
										    $html .= '<div class="score-bar-wrap">';
										    $html .=
										    '<span class="geekbench-score">' .
										    $geekbench_score .
										    "</span>";
										    $html .=
										        '<div class="progress w-100 score-bar-item">';
										    $html .=
										        '<div class="progress-bar primary-bg" role="progressbar" style="width: ' .
										        $geekbench_percent .
										        '%;" aria-valuenow="' .
										        $geekbench_percent .
										        '" aria-valuemin="0" aria-valuemax="100">' .
										        $geekbench_percent .
										        "%</div>";
										    $html .= "</div>";
										    $html .= "</div>";
										    $html .= "</td>";
										    $html .=
										        '<td data-value="Bandwidth">' .
										        $bandwidth .
										        "</td>";
										    $html .= '<td data-value="Price">';
										    $html .= "<p>";
										    if ($on_sale) {
										        $html .=
										            '<br><span class="rate">' .
										            number_format($discounted_price, 2) .
										            "€<span>/month</span></span>";
										        $html .=
										            '<span class="pricing-onsale">On sale - <span class="badge color-3 color-3-bg">Save ' .
										            $discount .
										            "</span></span>";
										    } else {
										        $html .=
										            '<span class="rate">' .
										            $price_month .
										            "€<span>/month</span></span>";
										    }
										    $html .= "</p>";
										    $html .= "</td>";
										    $html .= "<td>";
										    $html .=
										        '<a href="' .
										        $order_now .
										        '" class="btn primary-solid-btn">Commander</a>';
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
		<div class="container flex flex-col md:flex-row items-center p-6  shadow-md rounded-lg">
			<div class="md:w-1/2 p-4">
				<h1 class="text-2xl font-bold mb-4">Xeon® E5-2695 V2 / Xeon® E5-2697A v4</h1>
				<p class="text-gray-700 mb-2">
					Explorez la performance exceptionnelle des processeurs Xeon® E5-2695 V2 et Xeon® E5-2697A v4, spécialement conçus pour exceller en virtualisation. Ces processeurs offrent une puissance de calcul impressionnante et une gestion de données efficace, répondant aux besoins des environnements virtualisés et des charges de travail complexes avec une productivité avancée.
				</p>
			</div>
			<div class="md:w-1/2 p-4">
				<img src="./images/r62.jpg" alt="Processeur Intel" class="rounded-xl w-[28rem] shadow-md">
			</div>
		</div>
		<?php include "wdm.php"; ?>
	</body>
</html>