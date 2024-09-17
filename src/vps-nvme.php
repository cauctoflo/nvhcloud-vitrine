<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>NVHCloud SAS - VPS NVME</title>
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


		
<div class="px-4 py-8 mx-auto text-center max-w-7xl sm:py-10 sm:px-6 lg:px-8"><p class="mt-5 text-xl text-gray-500 sm:text-center">Systèmes d'exploitation disponibles</p><div class="flow-root mt-4 lg:mt-4"><div class="grid items-start max-w-md grid-cols-2 gap-6 mx-auto mt-6 lg:grid-cols-6 md:max-w-2xl lg:max-w-none"><div class="relative flex flex-col items-center p-5 transition duration-300 ease-in-out transform bg-white shadow-lg rounded-xl hover:-translate-y-2 hover:shadow-2xl"><img class="object-contain h-16 my-auto" src="./images/Ubuntu_logo.svg" alt="Logo Linux Ubuntu" draggable="false"></div><div class="relative flex flex-col items-center p-5 transition duration-300 ease-in-out transform bg-white shadow-lg rounded-xl hover:-translate-y-2 hover:shadow-2xl"><img class="object-contain h-16 my-auto " src="./images/Debian_logo.svg" alt="Logo Linux Debian" draggable="false"></div><div class="relative flex flex-col items-center p-5 transition duration-300 ease-in-out transform bg-white shadow-lg rounded-xl hover:-translate-y-2 hover:shadow-2xl"><img class="object-contain h-16 my-auto" src="./images/CentOS_logo.svg" alt="Logo Linux CentOS" draggable="false"></div><div class="relative flex flex-col items-center p-5 transition duration-300 ease-in-out transform bg-white shadow-lg rounded-xl hover:-translate-y-2 hover:shadow-2xl"><img class="object-contain h-16 p-1 my-auto" src="./images/Fedora_logo.svg" alt="Logo Linux Fedora" draggable="false"></div><div class="relative flex flex-col items-center p-5 transition duration-300 ease-in-out transform bg-white shadow-lg rounded-xl hover:-translate-y-2 hover:shadow-2xl" data-tip="true" data-for="windows_option" currentitem="false"><img class="object-contain h-16 p-1 my-auto" src="./images/Windows_logo.svg" alt="Logo Windows Server" draggable="false"><div class="__react_component_tooltip tb3d2db08-2c5c-4b0f-96eb-33c7d4b28252 place-top type-dark font-semibold bg-gray-200 rounded-2xl" id="windows_option" data-id="tooltip" style="left: 0px; top: -59px;"><style aria-hidden="true">
  	.tb3d2db08-2c5c-4b0f-96eb-33c7d4b28252 {
	    color: #fff;
	    background: #222;
	    border: 1px solid transparent;
  	}

  	.tb3d2db08-2c5c-4b0f-96eb-33c7d4b28252.place-top {
        margin-top: -10px;
    }
    .tb3d2db08-2c5c-4b0f-96eb-33c7d4b28252.place-top::before {
        border-top: 8px solid transparent;
    }
    .tb3d2db08-2c5c-4b0f-96eb-33c7d4b28252.place-top::after {
        border-left: 8px solid transparent;
        border-right: 8px solid transparent;
        bottom: -6px;
        left: 50%;
        margin-left: -8px;
        border-top-color: #222;
        border-top-style: solid;
        border-top-width: 6px;
    }

    .tb3d2db08-2c5c-4b0f-96eb-33c7d4b28252.place-bottom {
        margin-top: 10px;
    }
    .tb3d2db08-2c5c-4b0f-96eb-33c7d4b28252.place-bottom::before {
        border-bottom: 8px solid transparent;
    }
    .tb3d2db08-2c5c-4b0f-96eb-33c7d4b28252.place-bottom::after {
        border-left: 8px solid transparent;
        border-right: 8px solid transparent;
        top: -6px;
        left: 50%;
        margin-left: -8px;
        border-bottom-color: #222;
        border-bottom-style: solid;
        border-bottom-width: 6px;
    }

    .tb3d2db08-2c5c-4b0f-96eb-33c7d4b28252.place-left {
        margin-left: -10px;
    }
    .tb3d2db08-2c5c-4b0f-96eb-33c7d4b28252.place-left::before {
        border-left: 8px solid transparent;
    }
    .tb3d2db08-2c5c-4b0f-96eb-33c7d4b28252.place-left::after {
        border-top: 5px solid transparent;
        border-bottom: 5px solid transparent;
        right: -6px;
        top: 50%;
        margin-top: -4px;
        border-left-color: #222;
        border-left-style: solid;
        border-left-width: 6px;
    }

    .tb3d2db08-2c5c-4b0f-96eb-33c7d4b28252.place-right {
        margin-left: 10px;
    }
    .tb3d2db08-2c5c-4b0f-96eb-33c7d4b28252.place-right::before {
        border-right: 8px solid transparent;
    }
    .tb3d2db08-2c5c-4b0f-96eb-33c7d4b28252.place-right::after {
        border-top: 5px solid transparent;
        border-bottom: 5px solid transparent;
        left: -6px;
        top: 50%;
        margin-top: -4px;
        border-right-color: #222;
        border-right-style: solid;
        border-right-width: 6px;
    }
  </style></div></div><div class="relative flex flex-col items-center p-5 transition duration-300 ease-in-out transform bg-white shadow-lg rounded-xl hover:-translate-y-2 hover:shadow-2xl"><img class="object-contain h-16 p-1 my-auto" src="./images/PfSense_logo.png" alt="Logo Pfsense" draggable="false"></div></div></div><p class="mt-20 text-xl text-gray-500 sm:text-center">Applications One-Click install disponibles</p><div class="flow-root mt-4 lg:mt-4"><div class="grid items-start max-w-md grid-cols-2 gap-6 mx-auto mt-6 lg:grid-cols-6 md:max-w-2xl lg:max-w-none"><div class="relative flex flex-col items-center p-5 transition duration-300 ease-in-out transform bg-white shadow-lg rounded-xl hover:-translate-y-2 hover:shadow-2xl"><img class="object-contain h-16 my-auto" src="./images/Pterodactyl.png" alt="Logo Pterodactyl" draggable="false"></div><div class="relative flex flex-col items-center p-5 transition duration-300 ease-in-out transform bg-white shadow-lg rounded-xl hover:-translate-y-2 hover:shadow-2xl"><img class="object-contain h-16 my-auto" src="./images/plesk.svg" alt="Logo Plesk" draggable="false"></div><div class="relative flex flex-col items-center p-5 transition duration-300 ease-in-out transform bg-white shadow-lg rounded-xl hover:-translate-y-2 hover:shadow-2xl"><img class="object-contain h-16 my-auto" src="./images/wordpress.svg" alt="Logo Wordpress" draggable="false"></div><div class="relative flex flex-col items-center p-5 transition duration-300 ease-in-out transform bg-white shadow-lg rounded-xl hover:-translate-y-2 hover:shadow-2xl"><img class="object-contain h-16 my-auto" src="./images/openvpn.svg" alt="Logo OpenVPN" draggable="false"></div><div class="relative flex flex-col items-center p-5 transition duration-300 ease-in-out transform bg-white shadow-lg rounded-xl hover:-translate-y-2 hover:shadow-2xl"><img class="object-contain h-16 my-auto" src="./images/gitlab.svg" alt="Logo Gitlab" draggable="false"></div><div class="relative flex flex-col items-center p-5 transition duration-300 ease-in-out transform bg-white shadow-lg rounded-xl hover:-translate-y-2 hover:shadow-2xl"><img class="object-contain h-16 my-auto" src="./images/cp.svg" alt="Logo CPanel" draggable="false"></div></div></div></div>





		
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