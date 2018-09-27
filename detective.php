<?php
function citation() {
	$citation = rand(1, 9);
	echo "<span class=\"quotation1\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>";
	switch ($citation) {
		case 1:
			echo "La psychanalyse ressemble parfois à un roman policier.
				<span class=\"quotation2\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<br /><i>Patrick Modiano</i>";
			break;
		case 2:
			echo "Le cinéma policier, tout comme le roman policier, est le meilleur reflet de l'époque à laquelle il est tourné.
				<span class=\"quotation2\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<br /><i>François Guérif</i>";
			break;
		case 3:
			echo "Rétrospectivement, il me semble que des épisodes de mon enfance ont ressemblé à un roman policier.
				<span class=\"quotation2\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<br /><i>Patrick Modiano</i>";
			break;
		case 4:
			echo "Dans un mauvais roman policier, le coupable n'est jamais loin, c'est l'auteur.
				<span class=\"quotation2\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<br /><i>Robert Sabatier</i>";
			break;
		case 5:
			echo "Le roman policier est-il un genre dans la littérature ou une façon d'écrire hors littérature ?
				<span class=\"quotation2\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<br /><i>Alain Demouzon</i>";
			break;
		case 6:
			echo "Tout ce qu’il faut pour faire une comédie c’est un parc, un policier et une jolie fille.
				<span class=\"quotation2\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<br /><i>Charlie Chaplin</i>";
			break;
		case 7:
			echo "Dans un bon roman policier rien n’est perdu, il n’y a pas de phrase ni de mot qui ne soient pas significatifs.
				<span class=\"quotation2\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<br /><i>Paul Auster</i>";
			break;
		case 8:
			echo "Lire la fin d'un roman policier avant d'y arriver, c'est comme manger un biscuit fourré à la noix de coco en allant tout de suite à la noix de coco. Après il ne reste plus qu'à jeter le biscuit.
				<span class=\"quotation2\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<br /><i>Stephen King</i>";
			break;
		case 9:
			echo "Toutes les pièces qui ont été écrites, depuis l'Antiquité jusqu'à nos jours, n'ont jamais été que policières. Le théâtre n'a jamais été que réaliste et policier. Toute pièce est une enquête menée à bonne fin.
				<span class=\"quotation2\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<br /><i>Eugène Ionesco</i>";
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
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/main2.css" />
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
									<header>
										<h2>Policier</h2>
										<p>
											<?php citation(); ?>
										</p>
									</header>
									<center><img src="images/policier.jpg" alt="Policier" style="width: 500px; box-shadow: 5px 10px 8px #888888"/></center>
									<?php include('display_book.php') ?>
									<?php oeuvre('Roman', 'Policier'); ?>
								</article>
							</div>
							<div class="col-4 col-12-mobile" id="sidebar">
								<hr class="first" />
								<section>
									<header>
										<h3>Roman policier</h3>
									</header>
									<p>
										Le roman policier, en argot le polar, est un genre littéraire, dont la trame est constituée par l’élucidation d’un crime en milieu urbain (en général). Le plus souvent il s’agit, d’une enquête policière ou encore d’une enquête de détective privé. Le genre policier comporte six invariants : le crime, le mobile, le coupable, la victime, le mode opératoire et l’enquête.
										<br />
										<i>(www.romanpolicier.net)</i>
									</p>
									<footer>
										<a href="http://www.romanpolicier.net/caracteristiques-du-roman-policier/" class="button">Lire plus</a>
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