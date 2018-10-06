<?php
function citation() {
    $citation = rand(1, 6);
    echo "<img src=\"/LectureDuJour/images/quotation1.png\" alt=\"« \" class=\"quotation\"/>";
    switch ($citation) {
        case 1:
            echo "Rien ne rend si aimable que de se croire aimé.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\"/>
				<br /><i>Pierre Carlet de Chamblain de Marivaux</i>";
            break;
        case 2:
            echo "Un héros de roman infidèle ! On n'aurait jamais rien vu de pareil ; il est réglé qu’ils doivent tous être constants.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\"/>
				<br /><i>Pierre Carlet de Chamblain de Marivaux</i>";
            break;
        case 3:
            echo "Bien écouter, c’est presque répondre.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\"/>
				<br /><i>Pierre Carlet de Chamblain de Marivaux</i>";
            break;
        case 4:
            echo "On ne met rien dans son coeur ; on y prend ce qu'on y trouve.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\"/>
				<br /><i>Pierre Carlet de Chamblain de Marivaux</i>";
            break;
        case 5:
            echo "Mon coeur est fait comme celui de tout le monde. De quoi le vôtre s'avise-t-il de n'être fait comme celui de personne?
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\"/>
				<br /><i>Le Jeu de l'amour et du hasard, Pierre Carlet de Chamblain de Marivaux</i>";
            break;
        case 6:
            echo "Tous les hommes sont menteurs, inconstants, faux, bavards, hypocrites, orgueilleux ou lâches, méprisables et sensuels; toutes les femmes sont perfides, artificieuses, vaniteuses, curieuses et dépravées.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\"/>
				<br /><i>On ne badine pas avec l'amour, Alfred de Musset</i>";
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
                <p>Théâtre</p>
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
                            <h2>Comédie</h2>
                            <p>
                                <?php citation(); ?>
                            </p>
                        </header>
                        <div class="image_genre_style"><img src="/LectureDuJour/images/drama.png" alt="Comédie dramatique"/></div>
                    </article>
                </div>
                <div class="col-4 col-12-mobile" id="sidebar">
                    <hr class="first" />
                    <section>
                        <header>
                            <h3>Théâtre de comédie</h3>
                        </header>
                        <p>
                            Pièce de théâtre destinée à provoquer le rire par le traitement de l'intrigue, la peinture satirique des mœurs, la représentation de travers et de ridicules.
                            <br />
                            <i>(Larousse)</i>
                        </p>
                        <footer>
                            <a href="https://www.larousse.fr/dictionnaires/francais/com%C3%A9die/17415" class="button">Lire plus</a>
                        </footer>
                    </section>
                    <hr />
                    <section>
                        <?php style_research('Théâtre', 'Comédie'); ?>
                    </section>
                </div>
            </div>
            <div>
                <?php oeuvre('Théâtre', 'Comédie'); ?>
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