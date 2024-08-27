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
        .here {

            color: #194ac2;
        }
    </style>
</head>
<body class=" w-screen overflow-x-hidden ">
<?php include 'navbar.html';?>
<div class="w-2/3 mx-auto mt-32">
    <div class="hero-content-wrap text-black text-center position-relative z-index">
        <h1 class="text-black text-4xl font-bold mb-4">Conditions Générale de Vente (CGV)</h1>
        <p class="lead text-gray-700">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium eos facilis fuga id minima optio, perferendis porro quos saepe sapiente, suscipit, ullam vel voluptatem. Corporis dolorem eligendi laudantium quae vitae?</p>
        <ul class="list-inline header-feature-list mt-5">
            <li class="list-inline-item text-center px-10">
                <a href="#FAQ">
                    <i class='bx bx-info-circle  icon-md d-block mb-3'></i>
                    <h5 class="text-black">FAQ</h5>
                </a>

            </li>
            <li class="list-inline-item text-center px-10">
                <a href="">
                    <i class='bx bx-objects-horizontal-center icon-md d-block mb-3 here'></i>
                    <h5 class="text-black here">CGV</h5>
                </a>
            </li>
            <li class="list-inline-item text-center px-10">
                <a href="CGU.php">
                    <i class='bx bx-user-voice icon-md d-block mb-3' ></i>
                    <h5 class="text-black">CGU</h5>
                </a>

            </li>
        </ul>
    </div>
</div>
<section class="bg-gray-100 w-2/3 mt-32 mx-auto rounded-xl shadow-sm">
    <div class="px-20 py-20 ">


                <h2 class="text-3xl font-bold text-black mb-6">Article 1 : Objet</h2>
                <p class="text-gray-700 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id dolor non velit aliquet aliquet a a velit. Nam ac ligula at sapien scelerisque dapibus.</p>

                <h2 class="text-3xl font-bold text-black mb-6">Article 2 : Prix</h2>
                <p class="text-gray-700 mb-4">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Cras sit amet varius nulla. Phasellus luctus vehicula metus, ac sollicitudin sapien viverra nec.</p>

                <h2 class="text-3xl font-bold text-black mb-6">Article 3 : Paiement</h2>
                <p class="text-gray-700 mb-4">Ut eu justo sit amet elit facilisis ultricies. Quisque lacinia, ex sit amet dapibus bibendum, arcu justo dignissim eros, nec viverra odio nulla id libero.</p>

                <h2 class="text-3xl font-bold text-black mb-6">Article 4 : Livraison</h2>
                <p class="text-gray-700 mb-4">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed fermentum auctor nunc, sit amet cursus dolor hendrerit ac.</p>

                <h2 class="text-3xl font-bold text-black mb-6">Article 5 : Rétractation</h2>
                <p class="text-gray-700 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tincidunt, risus eget hendrerit fermentum, felis metus tempus enim, eu venenatis turpis nunc nec mi.</p>

                <h2 class="text-3xl font-bold text-black mb-6">Article 6 : Garanties</h2>
                <p class="text-gray-700 mb-4">Duis vitae lorem sed orci aliquet condimentum. Praesent tristique consequat lectus a auctor. Aliquam erat volutpat. Ut ut arcu non urna cursus luctus nec euismod nulla.</p>

                <h2 class="text-3xl font-bold text-black mb-6">Article 7 : Responsabilité</h2>
                <p class="text-gray-700 mb-4">Mauris bibendum ultricies libero, id facilisis velit suscipit in. Nulla auctor ligula et augue volutpat, sit amet lacinia orci vehicula. In hac habitasse platea dictumst.</p>

                <h2 class="text-3xl font-bold text-black mb-6">Article 8 : Propriété intellectuelle</h2>
                <p class="text-gray-700 mb-4">Integer dapibus, magna at dictum suscipit, lectus lectus tincidunt arcu, nec congue sapien felis non velit. Cras in dui nec nisl luctus laoreet sed non sem.</p>

                <h2 class="text-3xl font-bold text-black mb-6">Article 9 : Données personnelles</h2>
                <p class="text-gray-700 mb-4">Fusce in augue ut lorem euismod cursus. Morbi id quam nec nulla consectetur dictum. Donec ut odio id est suscipit fringilla ac nec erat.</p>

                <h2 class="text-3xl font-bold text-black mb-6">Article 10 : Droit applicable</h2>
                <p class="text-gray-700 mb-4">Etiam sollicitudin purus ut turpis tincidunt, ac suscipit velit dapibus. Curabitur a mauris at ligula malesuada luctus nec sit amet est.</p>



    </div>

</section>



<section>
    <?php
    $json = file_get_contents('json/faq.json');
    $faq = json_decode($json, true);
    ?>
    <section id="FAQ" class="max-w-5xl mx-auto py-10 sm:py-20">
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
