<?php
function citation() {
	$citation = rand(1, 6);
    echo "<img src=\"/LectureDuJour/images/quotation1.png\" alt=\"« \" class=\"quotation\" />";
    switch ($citation) {
		case 1:
			echo "La lecture est une amitié.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\" />
				<br /><i>Marcel Proust</i>";
			break;
		case 2:
			echo "Une lecture m'émeut plus qu'un malheur réel.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\" />
				<br /><i>Gustave Flaubert</i>";
			break;
		case 3:
			echo "Une heure de lecture est le souverain remède contre les dégoûts de la vie.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\" />
				<br /><i>Montesquieu</i>";
			break;
		case 4:
			echo "La lecture est à l'esprit ce que l'exercice est au corps.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\" />
				<br /><i>J. Addison</i>";
			break;
		case 5:
			echo "Les citations sont à la lecture ce que les bandes annonces sont au cinéma...
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\" />
				<br /><i>Franck Dunand</i>";
			break;
		case 6:
			echo "Ce sont nos choix qui montrent ce que nous sommes vraiment, beaucoup plus que nos aptitudes.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\" />
				<br /><i>Harry Potter et la chambre des secrets, Joanne K. Rowling</i>";
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
								<p>Jeunesse</p>
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
										<h2>Lecture jeunesse</h2>
										<p>
											<?php citation(); ?>
										</p>
									</header>
                                    <div class="image_genre_style"><img src="/LectureDuJour/images/jeunesse.jpg" alt="Lecture jeunesse"/></div>
									<hr />
									<section>
										<p>
											Vous vous trouvez ici dans la catégorie jeunesse du site.
											<br />
											Vous pouvez trouver plusieurs sortes de lecture pour adolescents :
											<?php include('display_book.php') ?>
											<?php oeuvres_proposes('Jeunesse'); ?>
										</p>
									</section>
									<section>
										
									</section>
								</article>
							</div>
							<div class="col-4 col-12-mobile" id="sidebar">
								<hr class="first" />
								<section>
									<header>
										<h3>Littérature de jeunesse</h3>
									</header>
									<p style="margin: 0;">
										La littérature de jeunesse peut être définie comme l’ensemble des œuvres spécialement écrites pour les enfants ou les adolescents, ou de livres écrits pour des adultes qui sont devenus, par leur thème, traditionnellement, des lectures pour les jeunes. [...]<br />
										L’objectif majeur de la littérature de jeunesse est d’amener le très jeune lecteur à se repérer dans la diversité des écrits.[...] La littérature de jeunesse permet ainsi la découverte du monde au travers de textes qui donnent à partager des modes de pensée et des points de vue variés.<br />
										La littérature de jeunesse permet de :
										<ol>
											<li>nourrir l’imaginaire enfantin</li>
											<li>faire découvrir un usage particulier de la langue</li>
											<li>faire découvrir le patrimoine</li>
										</ol>
										<i>(salledesprofs.org)</i>
									</p>
									<footer>
										<a href="http://salledesprofs.org/album-de-jeunesse-pour-un-enrichissement-intellectuel-et-moral-de-lenfance/" class="button">Lire plus</a>
									</footer>
								</section>
								<hr />
								<section>
									<header>
										<h3>Affinez votre choix</h3>
									</header>
									<p>affinage</p>
									<footer>
										<a href="#" class="button">Magna Adipiscing</a>
									</footer>
								</section>
							</div>
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