<?php
function citation() {
	$citation = rand(1, 8);
	echo "<span class=\"quotation1\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>";
	switch ($citation) {
		case 1:
			echo "Quand on écrit son autobiographie, on n'a pas le temps de vivre.
				<span class=\"quotation2\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<br /><i>Robert Baillie</i>";
			break;
		case 2:
			echo "Il est bien à plaindre celui qui ne vit pas sa vie, mais son autobiographie.
				<span class=\"quotation2\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<br /><i>Arthur Schnitzler</i>";
			break;
		case 3:
			echo "Une autobiographie révèle généralement que tout va très bien chez son auteur, sauf la mémoire.
				<span class=\"quotation2\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<br /><i>Franklin P. Jones</i>";
			break;
		case 4:
			echo "Une autobiographie sérieuse devrait commencer par une théorie de la mémoire.
				<span class=\"quotation2\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<br /><i>Pierre Baillargeon</i>";
			break;
		case 5:
			echo "Tout ce qu’un écrivain produit a sa part d’autobiographie, même s’il s’agit de science-fiction.
				<span class=\"quotation2\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<br /><i>Antonio Soler</i>";
			break;
		case 6:
			echo "L'autobiographie est encore le meilleur moyen qu'on ait trouvé pour dire toute la vérité à propos des autres.
				<span class=\"quotation2\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<br /><i>Pierre Daninos</i>";
			break;
		case 7:
			echo "Tous les livres sont autobiographiques. Sauf qu'on ne tient pas toujours à être reconnue.
				<span class=\"quotation2\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<br /><i>Michèle Mailhot</i>";
			break;
		case 8:
			echo "Les biographies se terminent généralement par la mort du sujet étudié, conclusion naturelle dont ne bénéficient pas les autobiographies.
				<span class=\"quotation2\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
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
										<h2>Autobiographie</h2>
										<p>
											<?php citation(); ?>
										</p>
									</header>
									<center><img src="images/autobiographie.jpg" alt="autobiographie" style="width: 500px; box-shadow: 5px 10px 8px #888888"/></center>
									<?php include('display_book.php') ?>
									<?php oeuvre('Roman', 'Autobiographique'); ?>
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