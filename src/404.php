
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
<body>
<div class="main">

    <section class="gradient-overlay ptb-100 height-lg-100vh d-flex align-items-center" >

    <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-9 col-lg-7">
                    <div class="error-content text-center text-white">
                        <div class="notfound-404">
                            <h1 class="text-white">404</h1>
                        </div>
                        <h3 class="text-white">Désolé, quelque chose n'a pas fonctionné</h3>
                        <p>La page que vous recherchez a peut-être été supprimée, son nom a changé ou elle est temporairement
                             indisponible.</p><a class="btn outline-white-btn" href="index.php">Aller sur la page d'accueil</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>


</body>
</html>