<?php
function citation() {
	$citation = rand(1, 9);
    echo "<img src=\"/LectureDuJour/images/quotation1.png\" alt=\"« \" class=\"quotation\"/>";
    switch ($citation) {
		case 1:
			echo "Le roman est l'histoire du présent, tandis que l'histoire est le roman du passé.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\"/>
				<br /><i>Georges Duhamel</i>";
			break;
		case 2:
			echo "L'histoire est un roman qui a été ; le roman est de l'histoire qui aurait pu être.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\"/>
				<br /><i>Edmond et Jules de Goncourt</i>";
			break;
		case 3:
			echo "Un roman est un miroir qui se promène sur une grande route.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\"/>
				<br /><i>Stendhal</i>";
			break;
		case 4:
			echo "L'art du roman est de savoir mentir.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\"/>
				<br /><i>Louis Aragon</i>";
			break;
		case 5:
			echo "Excepté pour la passion du héros, un roman doit être un miroir.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\"/>
				<br /><i>Stendhal</i>";
			break;
		case 6:
			echo "Le roman, c’est la clef des chambres interdites de notre maison.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\"/>
				<br /><i>Louis Aragon</i>";
			break;
		case 7:
			echo "Chaque roman est un déicide secret, un assassinat symbolique de la réalité.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\"/>
				<br /><i>Mario Vargas Llosa</i>";
			break;
		case 8:
			echo "Malheur à tout roman que le lecteur n'est pas pressé d'achever.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\"/>
				<br /><i>Jean le Rond d’Alembert</i>";
			break;
		case 9:
			echo "Un roman est comme un archet, la caisse du violon qui rend les sons, c'est l'âme du lecteur.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\"/>
				<br /><i>Stendhal</i>";
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
								<p>Roman</p>
							</header>
						</div>

					<!-- Nav -->
						<?php include('../nav.php'); ?>

				</div>

			<!-- Main -->
            <?php include('display_book.php') ?>
				<div class="wrapper style1">

					<div class="container">
						<div class="row gtr-200">
							<div class="col-8 col-12-mobile" id="content">
								<article id="main">
									<header style="display: block;">
										<h2>Roman</h2>
										<p>
											<?php citation(); ?>
										</p>
									</header>
                                    <div class="image_genre_style"><img src="/LectureDuJour/images/roman.jpg" alt="Âme du lecteur"/></div>
									<section>
										<p>
											Vous vous trouvez ici dans la catégorie des romans. De façon générale, un roman est un récit en prose de longueur variable.
											<br />
											Vous pouvez toruver plusieurs sortes de romans différents. Les styles romanesques présentés dans cette section sont les suivants :
											<?php oeuvres_proposes('Roman'); ?>
										</p>
									</section>
								</article>
							</div>
							<div class="col-4 col-12-mobile" id="sidebar">
								<hr class="first" />
								<section>
									<header>
										<h3>Roman</h3>
									</header>
									<p>
										Œuvre d'imagination constituée par un récit en prose d'une certaine longueur, dont l'intérêt est dans la narration d'aventures, l'étude de mœurs ou de caractères, l'analyse de sentiments ou de passions, la représentation du réel ou de diverses données objectives et subjectives ; genre littéraire regroupant les œuvres qui présentent ces caractéristiques.
										<br />
										<i>(Larousse.fr)</i>
									</p>
									<footer>
										<a href="https://www.larousse.fr/dictionnaires/francais/roman/69755" class="button">Lire plus</a>
									</footer>
								</section>
								<hr />
								<section>
									<?php pages_research('Roman'); ?>
								</section>
							</div>
						</div>
                        <hr/>
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