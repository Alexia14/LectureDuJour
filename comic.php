<?php
function citation() {
	$citation = rand(1, 7);
	echo "<span class=\"quotation1\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>";
	switch ($citation) {
		case 1:
			echo "La bande dessinée c’est l’évasion.
				<span class=\"quotation2\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<br /><i>Grzegorz Rosinski</i>";
			break;
		case 2:
			echo "Faire de la bande dessinée, c’est comme voir ses rêves.
				<span class=\"quotation2\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<br /><i>Chris Ware</i>";
			break;
		case 3:
			echo "Les bandes dessinées ne seront jamais aussi tarées que ceux qui aiment ça.
				<span class=\"quotation2\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<br /><i>Georges Wolinski</i>";
			break;
		case 4:
			echo "Faire une bande dessinée, c’est se souvenir.
				<span class=\"quotation2\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<br /><i>Chris Ware</i>";
			break;
		case 5:
			echo "Il y a toujours un peu de l'auteur dans un personnage... Pourtant Astérix adore le sanglier, moi, j'ai horreur de ça !
				<span class=\"quotation2\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<br /><i>René Goscinny</i>";
			break;
		case 6:
			echo "La seule chose que nous ayons à craindre, c'est que le ciel nous tombe sur la tête !
				<span class=\"quotation2\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<br /><i>René Goscinny</i>";
			break;
		case 7:
			echo "Comme on dit «il faut rendre à César ce qui appartient à César», j'ai envie de dire: «Il faut rendre Astérix à ses lecteurs. Car c'est à eux qu'il appartient... Et pas à moi.
				<span class=\"quotation2\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<br /><i>Albert Uderzo</i>";
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
								<p>Bandes dessinées</p>
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
										<h2>Bandes dessinées</h2>
										<p>
											<?php citation(); ?>
										</p>
									</header>
									<center><img src="images/BD.jpg" alt="Bande dessinée" style="width: 700px; box-shadow: 5px 10px 8px #888888" /></center>
									<hr />
									<section>
										<p>
											Vous vous trouvez ici dans la catégorie des bandes dessinées.
											<br />
											Comme pour tout type de lecture, vous pouvez trouver en plusieurs de nombreuses sortes :
											<?php include('display_book.php') ?>
											<?php oeuvres_proposes('BD'); ?>
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
										<h3>Bande dessinée</h3>
									</header>
									<p>
										Mode de narration utilisant une succession d'images dessinées, incluant, à l'intérieur de bulles, les paroles, sentiments ou pensées des protagonistes.<br />
										Si certains ont pu hésiter à considérer comme un genre littéraire ou un art plastique un procédé narratif qui mêle texte et image, la bande dessinée (BD) a été baptisée « neuvième art » par ses nombreux fans.
										<br />
										<i>(Larousse)</i>
									</p>
									<footer>
										<a href="http://www.larousse.fr/encyclopedie/divers/bande_dessin%C3%A9e/185578" class="button">Lire plus</a>
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