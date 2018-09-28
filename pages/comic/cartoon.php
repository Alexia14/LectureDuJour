<?php
function citation() {
	$citation = rand(1, 6);
    echo "<img src=\"/LectureDuJour/images/quotation1.png\" alt=\"« \" style=\"width: 40px; opacity: 0.5; margin-right: 5px;\" />";
    switch ($citation) {
		case 1:
			echo "La seule chose que nous ayons à craindre, c'est que le ciel nous tombe sur la tête !
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" style=\"width: 40px; opacity: 0.5; margin-left: 5px;\" />
				<br /><i>René Goscinny</i>";
			break;
		case 2:
			echo "Comme on dit «il faut rendre à César ce qui appartient à César», j'ai envie de dire: «Il faut rendre Astérix à ses lecteurs. Car c'est à eux qu'il appartient... Et pas à moi.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" style=\"width: 40px; opacity: 0.5; margin-left: 5px;\" />
				<br /><i>Albert Uderzo</i>";
			break;
		case 3:
			echo "Vous n'êtes pas honteux ? VOUS VOUS ETES CONDUITS COMME DES HUMAINS !!
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" style=\"width: 40px; opacity: 0.5; margin-left: 5px;\" />
				<br /><i>Les Schtroumpfs, Peyo</i>";
			break;
		case 4:
			echo "Parce que ce schtroumpf est schtroumpfé pour schtroumpfer de la schtroumpf au schtroumpf et non pas des schtroumpfs schtroumpfés !
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" style=\"width: 40px; opacity: 0.5; margin-left: 5px;\" />
				<br /><i>Les Schtroumpfs, Peyo</i>";
			break;
		case 5:
			echo "Ah non, Schtroumpf à Lunettes...Ne recommence pas avec tes réflexions schtroumpfistes !
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" style=\"width: 40px; opacity: 0.5; margin-left: 5px;\" />
				<br /><i>Les Schtroumpfs, Peyo</i>";
			break;
		case 6:
			echo "Avez-vous été attaqués par une force supérieure en nombre ?<br />Supérieure en nombre...<br />...On ne peut pas dire !!!<br />Ils étaient un...<br />...Et pas bien gros avec ça !
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" style=\"width: 40px; opacity: 0.5; margin-left: 5px;\" />
				<br /><i>Astérix le Gaulois, René Goscinny et Albert Uderzo</i>";
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
								<p>Bande dessinée</p>
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
										<h2>BD Humoristiques</h2>
										<p>
											<?php citation(); ?>
										</p>
									</header>
									<center><img src="/LectureDuJour/images/smurf.jpg" alt="Schtroumpf à Lunettes" style="width: 500px; box-shadow: 5px 10px 8px #888888"/></center>
									<?php include('../display_book.php') ?>
									<?php oeuvre('BD', 'Humoristique'); ?>
								</article>
							</div>
							<div class="col-4 col-12-mobile" id="sidebar">
								<hr class="first" />
								<section>
									<header>
										<h3>Bande dessinée Humoristique</h3>
									</header>
									<p>
										La bande dessinée humoristique ou bande dessinée d'humour est le premier type de bande dessinée à avoir été développé. Les bandes dessinées humoristiques existent dans tous types de formats (comic strip, Gag, récit complet, etc.) et peuvent s'adresser selon le type d'humour aux enfants comme aux adultes.
										<br />
										<i>(Wikipédia)</i>
									</p>
									<footer>
										<a href="https://fr.wikipedia.org/wiki/Bande_dessin%C3%A9e_humoristique" class="button">Lire plus</a>
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