<?php
function romans_proposes() {
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=lecture;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
	    die('Erreur : '.$e->getMessage());
	}

	$reponse = $bdd->query('SELECT DISTINCT style FROM oeuvres WHERE type = \'Roman\' ORDER BY style');

	$liste_styles = "<ul>";
	while($donnees = $reponse->fetch()) {
		$liste_styles .= "<li style=\"margin-left: 40px;\">" . $donnees['style'] . "</li>";
	}
	$liste_styles .= "</ul>";

	$reponse->closeCursor();
	echo $liste_styles;
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
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="right-sidebar is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Inner -->
						<div class="inner">
							<header>
								<h1><a href="index.php" id="logo">Lecture du Jour</a></h1>
								<hr />
								<p>Romans</p>
							</header>
						</div>

					<!-- Nav -->
						<?php include('nav.php'); ?>

				</div>

			<!-- Main -->
				<div class="wrapper style1">

					<div class="container">
						<div class="row gtr-200">
							<div class="col-8 col-12-mobile" id="content">
								<article id="main">
									<header style="display: block;">
										<h2>Roman</h2>
										<p>
											« Un roman est comme un archet, la caisse du violon qui rend les sons, c'est l'âme du lecteur ».
											<br />Stendhal
										</p>
									</header>
									<img src="images/Book-is-candle.jpg" alt="Âme du lecteur"/>
									<hr />
									<section>
										<p>
											Vous vous trouvez ici dans la catégorie des romans. De façon générale, un roman est un récit en prose de longueur variable.
											<br />
											Vous pouvez toruver plusieurs sortes de romans différents. Les styles romanesques présentés dans cette section sont les suivants :
											<?php romans_proposes(); ?>
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
										<h3>Roman</h3>
									</header>
									<p>
										Œuvre d'imagination constituée par un récit en prose d'une certaine longueur, dont l'intérêt est dans la narration d'aventures, l'étude de mœurs ou de caractères, l'analyse de sentiments ou de passions, la représentation du réel ou de diverses données objectives et subjectives ; genre littéraire regroupant les œuvres qui présentent ces caractéristiques.
										<br />
										<i>(https://www.larousse.fr/dictionnaires/francais/roman/69755)</i>
									</p>
									<footer>
										<a href="https://www.larousse.fr/dictionnaires/francais/roman/69755" class="button">Lire plus</a>
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
								<a href="#" class="image featured"><img src="images/pic07.jpg" alt="" /></a>
								<header>
									<h3><a href="#">Gravida aliquam penatibus</a></h3>
								</header>
								<p>
									Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
									porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
								</p>
							</article>
							<article class="col-4 col-12-mobile special">
								<a href="#" class="image featured"><img src="images/pic08.jpg" alt="" /></a>
								<header>
									<h3><a href="#">Sed quis rhoncus placerat</a></h3>
								</header>
								<p>
									Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
									porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
								</p>
							</article>
							<article class="col-4 col-12-mobile special">
								<a href="#" class="image featured"><img src="images/pic09.jpg" alt="" /></a>
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
				<?php include('footer.php'); ?>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>