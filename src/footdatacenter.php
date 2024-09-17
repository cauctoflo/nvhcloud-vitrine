 <!-- Section datacenters -->
 <section class="max-w-7xl mx-auto py-10">
            <div class="bg-white p-8 rounded-lg shadow">
               <h2 class="text-xl font-semibold mb-4">Des datacentres proches de vous, et de vos clients.</h2>
               <p class="text-gray-600">Des datacentres à proximité de vous et de vos clients. La location de baies dans nos datacentres situés à Paris constitue la solution idéale pour héberger vos serveurs applicatifs ou de données. Elle assure une sécurité optimale pour l'ensemble de vos équipements, tout en vous libérant des contraintes de gestion d'infrastructure.</p>
            </div>
         </section>
         <!-- Section Pourquoi nous choisir -->
         <section class="max-w-7xl mx-auto py-10 grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white p-8 rounded-lg shadow">
               <h3 class="text-lg font-semibold mb-2">Pourquoi nous choisir ?</h3>
               <ul class="text-gray-600">
                  <li class="mb-2"><span class="font-semibold">Réseau :</span> Notre réseau AS210926 dispose d'une capacité dépassant les 320 Gbps, garantissant une haute résilience face aux pannes. Grâce à nos sites interconnectés, répartis sur plus de 100 km, nous assurons une continuité de service optimale.</li>
                  <li class="mb-2"><span class="font-semibold">Datacenters certifiés :</span> Nos infrastructures sont hébergées dans des datacentres conçus selon les normes Tier 3.</li>
                  <li class="mb-2"><span class="font-semibold">Climatisation :</span> Nous maintenons nos équipements à 23°C, un équilibre parfait pour prolonger la durée de vie du matériel tout en préservant ses performances.</li>
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
                  <p class="text-gray-600">Le réseau AS210926 bénéficie de multiples fournisseurs. Nous utilisons des connexions de secours sur un réseau diversifié afin de garantir une disponibilité ininterrompue, même en cas de défaillance. Nous offrons également du transit sur des ports de 100, 400 et 1000 Gbps.</p>
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
                     <li class="mb-2">Chaque équipement hébergé dispose de deux sources d'alimentation électrique pour assurer une disponibilité maximale, même en cas de panne. Onduleurs : Chaque salle est équipée d'onduleurs qui prennent automatiquement le relais en cas de coupure, maintenant ainsi l'alimentation de vos serveurs. Générateurs : Si une panne électrique survient, nos générateurs se déclenchent automatiquement pour alimenter tous les équipements jusqu'à la résolution de l'incident.</li>
                  </ul>
               </div>
            </div>
         </section>
         <!-- Section Cogent Global Peer Exchange -->
         <section class="max-w-7xl mx-auto py-10">
            <div class="bg-white p-8 rounded-lg shadow grid grid-cols-1 md:grid-cols-2 gap-8">
               <div>
                  <h3 class="text-lg font-semibold mb-2">Sécurité</h3>
                  <p class="text-gray-600">Nos datacentres IBX® sont protégés par des systèmes de sécurité avancés et des procédures rigoureuses. Nous appliquons généralement cinq niveaux de contrôle, comprenant des agents de sécurité présents 24/7, des sas sécurisés et des dispositifs biométriques. De plus, la conception discrète de nos bâtiments maximise leur sécurité.</p>
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