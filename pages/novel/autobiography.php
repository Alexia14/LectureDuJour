<?php
function citation() {
    $citation = rand(1, 8);
    echo "<img src=\"/LectureDuJour/images/quotation1.png\" alt=\"« \" class=\"quotation\"/>";
    switch ($citation) {
        case 1:
            echo "Quand on écrit son autobiographie, on n'a pas le temps de vivre.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\"/>
				<br /><i>Robert Baillie</i>";
            break;
        case 2:
            echo "Il est bien à plaindre celui qui ne vit pas sa vie, mais son autobiographie.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\"/>
				<br /><i>Arthur Schnitzler</i>";
            break;
        case 3:
            echo "Une autobiographie révèle généralement que tout va très bien chez son auteur, sauf la mémoire.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\"/>
				<br /><i>Franklin P. Jones</i>";
            break;
        case 4:
            echo "Une autobiographie sérieuse devrait commencer par une théorie de la mémoire.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\"/>
				<br /><i>Pierre Baillargeon</i>";
            break;
        case 5:
            echo "Tout ce qu’un écrivain produit a sa part d’autobiographie, même s’il s’agit de science-fiction.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\"/>
				<br /><i>Antonio Soler</i>";
            break;
        case 6:
            echo "L'autobiographie est encore le meilleur moyen qu'on ait trouvé pour dire toute la vérité à propos des autres.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\"/>
				<br /><i>Pierre Daninos</i>";
            break;
        case 7:
            echo "Tous les livres sont autobiographiques. Sauf qu'on ne tient pas toujours à être reconnue.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\"/>
				<br /><i>Michèle Mailhot</i>";
            break;
        case 8:
            echo "Les biographies se terminent généralement par la mort du sujet étudié, conclusion naturelle dont ne bénéficient pas les autobiographies.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\"/>
				<br /><i>Eric Hobsbawm</i>";
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
                <p>Romans</p>
            </header>
        </div>

        <!-- Nav -->
        <?php include('../../nav.php'); ?>

    </div>

    <!-- Main -->
    <?php include('../display_book.php') ?>
    <div class="wrapper style1">

        <div class="container">
            <div class="row gtr-200">
                <div class="col-8 col-12-mobile" id="content">
                    <article id="main">
                        <header>
                            <h2>Autobiographie</h2>
                            <p>
                                <?php citation(); ?>
                            </p>
                        </header>
                        <div class="image_genre_style"><img src="/LectureDuJour/images/autobiographie.jpg" alt="autobiographie"/></div>
                    </article>
                </div>
                <div class="col-4 col-12-mobile" id="sidebar">
                    <hr class="first" />
                    <section>
                        <header>
                            <h3>Roman autobiographique</h3>
                        </header>
                        <p>
                            Le roman autobiographique est un genre littéraire issu de l'autobiographie ainsi que du roman-mémoires. Le sujet est un personnage de fiction dont la vie, narrée à la première personne du singulier, est assez fortement inspirée par la vie de l'auteur.<br />
                            À la différence du roman-mémoires, il y a identité de l’auteur et du narrateur.
                            <br />
                            <i>(Wikipedia)</i>
                        </p>
                        <footer>
                            <a href="https://fr.wikipedia.org/wiki/Roman_autobiographique" class="button">Lire plus</a>
                        </footer>
                    </section>
                    <hr />
                    <section>
                        <?php style_research('Roman', 'Autobiographie'); ?>
                    </section>
                </div>
            </div>
            <div>
                <?php oeuvre('Roman', 'Autobiographie'); ?>
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
    <?php include('../../footer.php'); ?>

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