<?php
function citation() {
	$citation = rand(1, 5);
    echo "<img src=\"/LectureDuJour/images/quotation1.png\" alt=\"« \" style=\"width: 40px; opacity: 0.5; margin-right: 5px;\" />";
    switch ($citation) {
		case 1:
			echo "Nous naissons tous fous. Quelques-uns le demeurent.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" style=\"width: 40px; opacity: 0.5; margin-left: 5px;\" />
				<br /><i>Samuel Beckett</i>";
			break;
		case 2:
			echo "Je ne sais pas qui est Godot. Je ne sais même pas s'il existe.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" style=\"width: 40px; opacity: 0.5; margin-left: 5px;\" />
				<br /><i>Samuel Beckett</i>";
			break;
		case 3:
			echo "Se donner du mal pour les petites choses, c’est parvenir aux grandes, avec le temps.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" style=\"width: 40px; opacity: 0.5; margin-left: 5px;\" />
				<br /><i>Samuel Beckett</i>";
			break;
		case 4:
			echo "Les racines des mots sont-elles carrées ?
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" style=\"width: 40px; opacity: 0.5; margin-left: 5px;\" />
				<br /><i>Eugène Ionesco</i>";
			break;
		case 5:
			echo "Fini, c'est fini, ça va finir, ça va peut-être finir. Les grains s'ajoutent aux grains, un à un, et un jour, soudain, c'est un tas, un petit tas, l'impossible tas.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" style=\"width: 40px; opacity: 0.5; margin-left: 5px;\" />
				<br /><i>Fin de partie, Samuel Beckett</i>";
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
								<p>Théâtre</p>
							</header>
						</div>

					<!-- Nav -->
						<?php include('../../nav.php'); ?>

				</div>

			<!-- Main -->
				<div class="wrapper style1">

					<div class="container">
						<div class="row gtr-200">
							<div class="col-8 col-12-mobile" id="content">
								<article id="main">
									<header>
										<h2>Absurde</h2>
										<p>
											<?php citation(); ?>
										</p>
									</header>
									<center><img src="/LectureDuJour/images/absurde.jpg" alt="Théatre" style="width: 500px; box-shadow: 5px 10px 8px #888888"/></center>
									<?php include('../display_book.php') ?>
									<?php oeuvre('Théâtre', 'Absurde'); ?>
								</article>
							</div>
							<div class="col-4 col-12-mobile" id="sidebar">
								<hr class="first" />
								<section>
									<header>
										<h3>Théâtre de l'absurde</h3>
									</header>
									<p>
										Le théâtre de l'absurde est un style de théâtre apparu au xxe siècle, à l'époque de la Seconde Guerre mondiale, qui se caractérise par une rupture totale avec des genres plus classiques, tels que la tragédie, la comédie ou la tragi-comédie. [...]
										C'est un genre traitant fréquemment de l'absurdité de l'Homme et de la vie. [...]<br />
										Eugène Ionesco, Samuel Beckett, Arthur Adamov, Jean Genet, voire Harold Pinter sont parmi les auteurs de ces œuvres qui ont bouleversé les conventions du genre.
										<br />
										<i>(Wikipedia)</i>
									</p>
									<footer>
										<a href="https://fr.wikipedia.org/wiki/Th%C3%A9%C3%A2tre_de_l%27absurde" class="button">Lire plus</a>
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