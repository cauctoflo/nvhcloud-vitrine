<!-- Section datacenters -->
<section class="max-w-7xl mx-auto py-10">
    <div class="bg-white p-8 rounded-lg shadow">
        <h2 class="text-xl font-semibold mb-4">Des datacenters à proximité de vous et de vos clients</h2>
        <p class="text-gray-600">Louez des baies ou des serveurs dans nos datacenters situés à Paris, Grenoble et Tours. Que vous hébergiez des serveurs dédiés ou dans un environnement cloud, vous avez la tranquillité d'esprit avec des datacenters certifiés, des réseaux redondants et une gestion d'infrastructure simplifiée.</p>
    </div>
</section>

<!-- Section Pourquoi nous choisir -->
<section class="max-w-7xl mx-auto py-10 grid grid-cols-1 md:grid-cols-2 gap-8">
    <div class="bg-white p-8 rounded-lg shadow">
        <h3 class="text-lg font-semibold mb-2">Pourquoi nous choisir ?</h3>
        <ul class="text-gray-600">
            <li class="mb-2"><span class="font-semibold">Réseau robuste :</span> Notre réseau AS210926 possède une capacité supérieure à 320 Gbps, garantissant une forte résilience face aux pannes. Nos sites interconnectés nous permettent d'opérer efficacement à plus de 100 km de distance.</li>
            <li class="mb-2"><span class="font-semibold">Datacenters certifiés :</span> Nos infrastructures sont hébergées dans des datacenters suivant le modèle de conception Tier 3.</li>
            <li class="mb-2"><span class="font-semibold">Climatisation :</span> Pour optimiser l'efficacité énergétique, nous augmentons progressivement la température des salles jusqu'à 27°C (80°F) dans les allées froides.</li>
        </ul>
    </div>
    <div>
        <img src="./images/network.png" alt="Map Image" class="w-full h-auto rounded-lg shadow">
    </div>
</section>

<!-- Section Redondance réseau -->
<section class="max-w-7xl mx-auto py-10">
    <div class="bg-white p-8 rounded-lg shadow grid grid-cols-1 md:grid-cols-2 gap-8">
        <div>
            <h3 class="text-lg font-semibold mb-2">Redondance réseau</h3>
            <p class="text-gray-600">Notre réseau AS210926 est soutenu par plusieurs fournisseurs. Grâce à des liens de secours et un réseau diversifié, nous assurons la continuité du service, même en cas de panne. Nous proposons du transit via des ports de 100, 400, et 1000 Gbps.</p>
        </div>
        <img src="./images/data.png" alt="Network Image" class="w-full h-auto rounded-lg shadow">
    </div>
</section>

<!-- Section Redondance électrique -->
<section class="max-w-7xl mx-auto py-10">
    <div class="bg-white p-8 rounded-lg shadow grid grid-cols-1 md:grid-cols-2 gap-8">
        <img src="./images/ordi.jpg" alt="Electric Redundancy Image" class="w-full h-auto rounded-lg shadow">
        <div>
            <h3 class="text-lg font-semibold mb-2">Redondance électrique</h3>
            <ul class="text-gray-600">
                <li class="mb-2"><span class="font-semibold">Doubles voies :</span> Chaque équipement hébergé est alimenté par deux sources électriques, assurant une disponibilité continue, même lors de basculements en secours.</li>
                <li class="mb-2"><span class="font-semibold">Onduleurs :</span> Les salles sont équipées d'onduleurs régulant l'alimentation. En cas de coupure, ils prennent le relais pour maintenir vos serveurs opérationnels.</li>
                <li class="mb-2"><span class="font-semibold">Générateurs :</span> Lors d'une panne électrique, nos générateurs démarrent automatiquement pour garantir l'alimentation de tous les équipements pendant toute la durée de l'incident.</li>
            </ul>
        </div>
    </div>
</section>

<!-- Section Sécurité -->
<section class="max-w-7xl mx-auto py-10">
    <div class="bg-white p-8 rounded-lg shadow grid grid-cols-1 md:grid-cols-2 gap-8">
        <div>
            <h3 class="text-lg font-semibold mb-2">Sécurité</h3>
            <p class="text-gray-600">Nos datacenters International Business Exchange™ (IBX®) sont équipés de dispositifs de sécurité avancés. Nous appliquons des techniques et des procédures rigoureuses, avec cinq niveaux de contrôle, incluant la surveillance 24/7 par des agents de sécurité, des sas sécurisés et des lecteurs biométriques. Nos bâtiments sont également conçus de manière discrète pour une sécurité optimale.</p>
        </div>
        <img src="./images/security.jpg" alt="Security Image" class="w-full h-auto rounded-lg shadow">
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
         <?php include 'footer.php'; ?>