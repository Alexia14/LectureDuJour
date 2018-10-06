<?php
function citation() {
    $citation = rand(1, 2);
    echo "<img src=\"/LectureDuJour/images/quotation1.png\" alt=\"« \" class=\"quotation\" />";
    switch ($citation) {
        case 1:
            echo "Une vie... quelques jours, et puis plus rien.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\"/>
				<br /><i>Guy de Maupassant</i>";
            break;
        case 2:
            echo "Et Boule de suif pleurait toujours et parfois un sanglot, qu'elle n'avait pu retenir, passait, entre deux couplets, dans les ténèbres.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\"/>
				<br /><i>Guy de Maupassant</i>";
            break;
        default:
            break;
    }
}
?>

<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body class="right-sidebar is-preload">
<div id="page-wrapper">

    <!-- Header -->
    <div id="header">

        <!-- Inner -->
        <div class="inner">
            <header>
                <h1><a href="/LectureDuJour/index.php" id="logo">Lecture du Jour</a></h1>
                <hr />
                <p>Nouvelle</p>
            </header>
        </div>

        <!-- Nav -->
        <?php include('../nav.php'); ?>

    </div>

    <!-- Main -->
    <div class="wrapper style1">

        <div class="container">
            <div class="row gtr-200">
                <div class="col-8 col-12-mobile" id="content">
                    <article id="main">
                        <header style="display: block;">
                            <h2>Nouvelle</h2>
                            <p>
                                <?php citation(); ?>
                            </p>
                        </header>
                        <div class="image_genre_style"><img src="/LectureDuJour/images/nouvelle.jpg" alt="Nouvelles"/></div>
                        <section>
                            <p>
                                Vous vous trouvez ici dans la catégorie des nouvelles.
                                <br />
                                <?php include('display_book.php') ?>
                                <?php oeuvres_proposes('Nouvelle'); ?>
                            </p>
                        </section>
                    </article>
                </div>
                <div class="col-4 col-12-mobile" id="sidebar">
                    <hr class="first" />
                    <section>
                        <header>
                            <h3>Nouvelle</h3>
                        </header>
                        <p>
                            La nouvelle est un récit court, écrit en prose. Cependant, plus que sa longueur, c'est bien davantage la concision et l'efficacité de son écriture qui la caractérisent. En règle générale, les personnages d'une nouvelle sont peu nombreux et brièvement décrits. Son action est assez simple mais construite de façon à ménager un effet de surprise au dénouement : c'est ce que l'on appelle la chute.
                            <br />
                            <i>(www.assistancescolaire.com)</i>
                        </p>
                        <footer>
                            <a href="https://www.assistancescolaire.com/eleve/6e/francais/lexique/N-nouvelle-fc_n06" class="button">Lire plus</a>
                        </footer>
                    </section>
                    <hr />
                    <section>
                        <?php pages_research('Nouvelle'); ?>
                    </section>
                </div>
            </div>
            <hr />
            <div>

            </div>
            <hr />
            <div class="row">
                <article class="col-4 col-12-mobile special">
                    <a href="#" class="image featured"><img src="/LectureDuJour/images/pic07.jpg" alt="" /></a>
                    <header>
                        <h3><a href="#">Gravida aliquam penatibus</a></h3>
                    </header>
                    <p>
                        Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
                        porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
                    </p>
                </article>
                <article class="col-4 col-12-mobile special">
                    <a href="#" class="image featured"><img src="/LectureDuJour/images/pic08.jpg" alt="" /></a>
                    <header>
                        <h3><a href="#">Sed quis rhoncus placerat</a></h3>
                    </header>
                    <p>
                        Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
                        porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
                    </p>
                </article>
                <article class="col-4 col-12-mobile special">
                    <a href="#" class="image featured"><img src="/LectureDuJour/images/pic09.jpg" alt="" /></a>
                    <header>
                        <h3><a href="#">Magna laoreet et aliquam</a></h3>
                    </header>
                    <p>
                        Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
                        porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
                    </p>
                </article>
            </div>
        </div>

    </div>

    <!-- Footer -->
    <?php include('../footer.php'); ?>

</div>

<!-- Scripts -->
<script src="/LectureDuJour/assets/js/jquery.min.js"></script>
<script src="/LectureDuJour/assets/js/jquery.dropotron.min.js"></script>
<script src="/LectureDuJour/assets/js/jquery.scrolly.min.js"></script>
<script src="/LectureDuJour/assets/js/jquery.scrollex.min.js"></script>
<script src="/LectureDuJour/assets/js/browser.min.js"></script>
<script src="/LectureDuJour/assets/js/breakpoints.min.js"></script>
<script src="/LectureDuJour/assets/js/util.js"></script>
<script src="/LectureDuJour/assets/js/main.js"></script>

</body>
</html>