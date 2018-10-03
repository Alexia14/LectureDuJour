<?php
function citation() {
    $citation = rand(1, 3);
    echo "<img src=\"/LectureDuJour/images/quotation1.png\" alt=\"« \" class=\"quotation\" />";
    switch ($citation) {
        case 1:
            echo "D'ailleurs, parce que le vent, comme on dit, n'est pas à la poésie, ce n'est pas un motif pour que la poésie ne prenne pas son envol. Tout au contraire des vaisseaux, les oiseaux ne volent bien que contre le vent. Or la poésie tient de l'oiseau.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\"/>
				<br /><i>Victor Hugo</i>";
            break;
        case 2:
            echo "Le souvenir est poésie, et la poésie n’est autre que souvenir.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\"/>
				<br /><i>Giovanni Pascoli</i>";
            break;
        case 3:
            echo "La peinture est une poésie qui se voit au lieu de se sentir et la poésie est une peinture qui se sent au lieu de se voir. 
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\"/>
				<br /><i>Léonard de Vinci</i>";
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
		<title>Lecture du Jour</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/LectureDuJour/assets/css/main.css" />
		<link rel="stylesheet" href="/LectureDuJour/assets/css/main2.css" />
		<noscript><link rel="stylesheet" href="/LectureDuJour/assets/css/noscript.css" /></noscript>
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
								<p>Poésie</p>
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
										<h2>Poésie</h2>
										<p>
											<?php citation(); ?>
										</p>
									</header>
                                    <div class="image_genre_style"><img src="/LectureDuJour/images/poesie.jpg" alt="Poésie"/></div>
									<section>
										<p>
											Vous vous trouvez ici dans la catégorie de la poésie.
											<br />
											<?php include('display_book.php') ?>
											<?php oeuvres_proposes('Poésie'); ?>
										</p>
									</section>
								</article>
							</div>
							<div class="col-4 col-12-mobile" id="sidebar">
								<hr class="first" />
								<section>
									<header>
										<h3>Poésie</h3>
									</header>
                                    <p>
                                        La poésie est un art du langage, une façon de « sculpter » les phrases et les mots pour leur faire dire plus qu'ils ne disent habituellement. Par la richesse des images poétiques, l'artiste donne à voir sa propre vision du monde.
                                        <br />
                                        Traditionnellement, un poème est écrit en vers réguliers qui riment. Mais il peut également être écrit en prose : la force suggestive des images, le rythme et la musicalité des mots suffisent à en faire une œuvre poétique.
                                        <br />
                                        <i>(www.assistancescolaire.com)</i>
                                    </p>
                                    <footer>
                                        <a href="https://www.assistancescolaire.com/eleve/6e/francais/lexique/P-poeme-poesie-fc_p18" class="button">Lire plus</a>
                                    </footer>
								</section>
								<hr />
                                <section>
                                    <?php pages_research('Poésie'); ?>
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