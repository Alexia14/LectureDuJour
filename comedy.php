<?php
function citation() {
	$citation = rand(1, 6);
	echo "<span class=\"quotation1\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>";
	switch ($citation) {
		case 1:
			echo "Rien ne rend si aimable que de se croire aimé.
				<span class=\"quotation2\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<br /><i>Pierre Carlet de Chamblain de Marivaux</i>";
			break;
		case 2:
			echo "Un héros de roman infidèle ! On n'aurait jamais rien vu de pareil ; il est réglé qu’ils doivent tous être constants.
				<span class=\"quotation2\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<br /><i>Pierre Carlet de Chamblain de Marivaux</i>";
			break;
		case 3:
			echo "Bien écouter, c’est presque répondre.
				<span class=\"quotation2\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<br /><i>Pierre Carlet de Chamblain de Marivaux</i>";
			break;
		case 4:
			echo "On ne met rien dans son coeur ; on y prend ce qu'on y trouve.
				<span class=\"quotation2\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<br /><i>Pierre Carlet de Chamblain de Marivaux</i>";
			break;
		case 5:
			echo "Mon coeur est fait comme celui de tout le monde. De quoi le vôtre s'avise-t-il de n'être fait comme celui de personne?
				<span class=\"quotation2\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<br /><i>Le Jeu de l'amour et du hasard, Pierre Carlet de Chamblain de Marivaux</i>";
			break;
		case 6:
			echo "Tous les hommes sont menteurs, inconstants, faux, bavards, hypocrites, orgueilleux ou lâches, méprisables et sensuels; toutes les femmes sont perfides, artificieuses, vaniteuses, curieuses et dépravées.
				<span class=\"quotation2\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
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
								<p>Théâtre</p>
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
										<h2>Comédie</h2>
										<p>
											<?php citation(); ?>
										</p>
									</header>
									<center><img src="images/drama.png" alt="Comédie dramatique" style="width: 500px; box-shadow: 5px 10px 8px #888888"/></center>
									<?php include('display_book.php') ?>
									<?php oeuvre('Théâtre', 'Comédie'); ?>
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