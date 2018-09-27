<?php
function citation() {
	$citation = rand(1, 10);
	echo "<span class=\"quotation1\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>";
	switch ($citation) {
		case 1:
			echo "Un texte de théâtre est à voir. Un texte de théâtre est à écouter. Est-ce qu'un texte de théâtre est à lire ?
				<span class=\"quotation2\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<br /><i>Francis Huster</i>";
			break;
		case 2:
			echo "Le théâtre est une tribune. Le théâtre est une chaire. Le théâtre parle fort et parle haut.
				<span class=\"quotation2\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<br /><i>Victor Hugo</i>";
			break;
		case 3:
			echo "Ceux qui veulent comprendre au théâtre sont ceux qui ne comprennent pas le théâtre.
				<span class=\"quotation2\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<br /><i>Jean Giraudoux</i>";
			break;
		case 4:
			echo "Un théâtre où on ne rit pas est un théâtre dont on doit rire.
				<span class=\"quotation2\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<br /><i>Bertolt Brecht</i>";
			break;
		case 5:
			echo "L'essentiel du théâtre n'est pas l'auteur, mais le théâtre.
				<span class=\"quotation2\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<br /><i>Jean Giraudoux</i>";
			break;
		case 6:
			echo "Nous voulons de la vie au théâtre, et du théâtre dans la vie.
				<span class=\"quotation2\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<br /><i>Jules Renard</i>";
			break;
		case 7:
			echo "Le théâtre est une nourriture aussi indispensable à la vie que le pain et le vin... Le théâtre est donc, au premier chef, un service public. Tout comme le gaz, l'eau, l'électricité.
				<span class=\"quotation2\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<br /><i>Jean Vilar</i>";
			break;
		case 8:
			echo "Le théâtre, c'est la générosité, le cinéma, c'est l'avarice. La caméra vient nous chercher, il faut tout garder. Le théâtre est le véritable espace d'expression du comédien.
				<span class=\"quotation2\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<br /><i>George Cukor</i>";
			break;
		case 9:
			echo "L'attitude d'un auteur, quand il écrit pour le théâtre, doit être affective avant d'être intellectuelle car tout le théâtre s'adresse à l'émotion avant tout.
				<span class=\"quotation2\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<br /><i>Charlie Chaplin</i>";
			break;
		case 10:
			echo "Jouer à l’opéra est plus facile que jouer au théâtre, car la musique est déjà écrite, alors qu’au théâtre il faut composer sa partition soi-même.
				<span class=\"quotation2\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<br /><i>Natalie Dessay</i>";
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
									<header style="display: block;">
										<h2>Théâtre</h2>
										<p>
											<?php citation(); ?>
										</p>
									</header>
									<center><img src="images/théatre.jpg" alt="Théâtre" style="width: 600px; box-shadow: 5px 10px 8px #888888" /></center>
									<hr />
									<section>
										<p>
											Vous vous trouvez ici dans la catégorie du théâtre.
											<br />
											Vous pouvez toruver plusieurs sortes de théâtre dans cette section :
											<?php include('display_book.php') ?>
											<?php oeuvres_proposes('Théâtre'); ?>
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
										<h3>Théâtre</h3>
									</header>
									<p>
										Le théâtre est un genre littéraire destiné à être joué devant un public. Quand il est joué, on l’appelle aussi art dramatique. Les romans et les nouvelles sont des genres qu’on lit seul. Les représentations théâtrales sont au contraire partagées par de nombreuses personnes, dans les salles de théâtre le plus souvent.
										<br />
										<i>(junior.universalis.fr)</i>
									</p>
									<footer>
										<a href="https://junior.universalis.fr/encyclopedie/theatre-genre/" class="button">Lire plus</a>
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