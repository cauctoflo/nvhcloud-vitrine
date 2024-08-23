<div class=" mt-5 container flex flex-col md:flex-row items-center bg-white shadow-md rounded-lg p-6">
	<div class="md:w-1/2">
		<img src="./images/r6.png" alt="Server Image" class="rounded-lg">
	</div>
	<div class="md:w-1/2 md:pl-6 mt-4 md:mt-0">
		<h2 class="text-2xl font-bold mb-4">Pourquoi nous choisir ?</h2>
		<div class="mb-4">
			<div class="flex items-center mb-2">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500 mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
					<path d="M12 19l-7 7 7-7m0 0l7 7-7-7m7-7h-7V2h7v7z"></path>
				</svg>
				<h3 class="text-xl font-semibold">Infrastructure Réseau de Pointe</h3>
			</div>
			<p class="text-gray-700">Avec un panneau de contrôle intuitif et un routeur performant, notre réseau est soutenu par quatre transitaires distincts, garantissant une fiabilité et une résilience exceptionnelles.</p>
		</div>
		<div class="mb-4">
			<div class="flex items-center mb-2">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500 mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
					<rect x="2" y="2" width="20" height="20" rx="2.18" ry="2.18" />
					<path d="M7 2v20M17 2v20" />
				</svg>
				<h3 class="text-xl font-semibold">VPS Flexibles</h3>
			</div>
			<p class="text-gray-700">Nos serveurs privés virtuels (VPS) sont basés sur la technologie KVM, offrant une flexibilité totale pour l'installation et la gestion de diverses applications, y compris Docker. Cela permet à nos clients de personnaliser leur environnement virtuel en fonction de leurs besoins spécifiques.</p>
		</div>
		<div>
			<div class="flex items-center mb-2">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500 mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
					<path d="M9 17v2a4 4 0 0 0 8 0v-2M3 9v2a4 4 0 0 0 8 0V9M9 9V4a4 4 0 0 1 8 0v5m0 0V4a4 4 0 0 0-8 0v5" />
				</svg>
				<h3 class="text-xl font-semibold">Protection Avancée</h3>
			</div>
			<p class="text-gray-700">Nous utilisons StormWall pour une protection robuste contre les attaques DDoS, complétée par un filtrage sophistiqué fourni par NVHCloud via XDP. Cette double protection assure une sécurité optimale tout en maintenant une latence extrêmement basse.</p>
		</div>
	</div>
</div>
<div class="mt-5 container flex flex-col bg-white md:flex-row items-center p-6  shadow-md rounded-lg">
	<div class="md:w-1/2 p-4">
		<h1 class="text-2xl font-bold mb-4">Votre Confiance, Notre Engagement</h1>
		<p class="text-gray-700 mb-2">
			Notre infrastructure est conçue pour offrir une protection maximale grâce à une surveillance constante et des mises à jour régulières. Nous déployons des protocoles de sécurité rigoureux et des correctifs fréquents pour garantir la résilience et la fiabilité de nos systèmes. Avec notre engagement envers l'innovation continue, nous assurons que vos données et vos applications sont protégées contre les menaces les plus récentes.
		</p>
		<a href="https://manager.nvhcloud.com/contact.php" class="inline-flex items-center justify-center mt-5 px-4 py-2 text-sm font-medium text-white transform border border-transparent rounded-md shadow-sm bg-gradient-to-tr from-blue-500 to-[#00acff] whitespace-nowrap hover:-translate-y-0.5 transition duration-150 ease-in-out hover:shadow-xl">
		Nous contacter
		</a>
	</div>
	<div class="md:w-1/2 p-4">
		<img src="https://imgs.search.brave.com/oRJzXnBHyk5bCEdBxmyALz1gaPJcrUnyidv7-dRaZtM/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9idXJz/dC5zaG9waWZ5Y2Ru/LmNvbS9waG90b3Mv/ZGV2ZWxvcGVyLWNv/ZGluZy1pbi1waHAu/anBnP3dpZHRoPTEw/MDAmZm9ybWF0PXBq/cGcmZXhpZj0wJmlw/dGM9MA" alt="Processeur Ryzen" class="rounded-xl w-[28rem] shadow-md">
	</div>
</div>
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
</section>
<?php include 'footer.html'; ?>