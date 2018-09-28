<?php
function citation() {
	$citation = rand(1, 8);
    echo "<img src=\"/LectureDuJour/images/quotation1.png\" alt=\"« \" style=\"width: 40px; opacity: 0.5; margin-right: 5px;\" />";
    switch ($citation) {
		case 1:
			echo "La fiction ne suffit pas à caractériser le roman, mais un certain rapport entre cette fiction et la réalité.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" style=\"width: 40px; opacity: 0.5; margin-left: 5px;\" />
				<br /><i>Louis Aragon</i>";
			break;
		case 2:
			echo "La fiction, c’est la part de vérité qu’il existe en chaque mensonge.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" style=\"width: 40px; opacity: 0.5; margin-left: 5px;\" />
				<br /><i>Stephen King</i>";
			break;
		case 3:
			echo "La mémoire est une fiction. Elle est comme une mosaïque, faite de tessons.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" style=\"width: 40px; opacity: 0.5; margin-left: 5px;\" />
				<br /><i>José Carlos Llop</i>";
			break;
		case 4:
			echo "Tout le réel pour moi n'est qu'une fiction.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" style=\"width: 40px; opacity: 0.5; margin-left: 5px;\" />
				<br /><i>Alfred de Musset</i>";
			break;
		case 5:
			echo "La réalité dépasse la fiction mais les mensonges la dépassent bien plus encore.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" style=\"width: 40px; opacity: 0.5; margin-left: 5px;\" />
				<br /><i>Philip Roth</i>";
			break;
		case 6:
			echo "Il y a une différence entre la fiction et le mensonge. La fiction est là pour elle-même, elle ne sert à rien, alors que le mensonge sert toujours à quelqu'un.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" style=\"width: 40px; opacity: 0.5; margin-left: 5px;\" />
				<br /><i>Micheline La France</i>";
			break;
		case 7:
			echo "La vérité doit forcément être plus étrange que la fiction car la fiction n'est qu'une création de l'esprit humain et, par conséquent, est à sa mesure.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" style=\"width: 40px; opacity: 0.5; margin-left: 5px;\" />
				<br /><i>Gilbert Keith Chesterton</i>";
			break;
		case 8:
			echo "La vérité est toujours plus surprenante que la fiction, parce que la fiction doit coller à ce qui est possible, alors que la vérité, elle, n’y est pas obligée.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" style=\"width: 40px; opacity: 0.5; margin-left: 5px;\" />
				<br /><i>Mark Twain</i>";
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
						<?php include('../../nav.php'); ?>

				</div>

			<!-- Main -->
				<div class="wrapper style1">

					<div class="container">
						<div class="row gtr-200">
							<div class="col-8 col-12-mobile" id="content">
								<article id="main">
									<header>
										<h2>Fiction</h2>
										<p>
											<?php citation(); ?>
										</p>
									</header>
									<center><img src="/LectureDuJour/images/fiction.png" alt="Roman de fiction jeunesse" style="width: 700px; background-color: #fbe4ce; box-shadow: 5px 10px 8px #888888"/></center>
									<?php include('../display_book.php') ?>
									<?php oeuvre('Jeunesse', 'Fiction'); ?>
								</article>
							</div>
							<div class="col-4 col-12-mobile" id="sidebar">
								<hr class="first" />
								<section>
									<header>
										<h3>Fiction</h3>
									</header>
									<p>
										L’expression « œuvre de fiction » désigne une production créative dans le domaine de l’art. [...]<br />
										D’un point de vue technique, toute œuvre est par définition une œuvre de fiction, dans le sens où la fiction s’oppose à la réalité : dès qu’une œuvre tente de copier, d’enrichir, de contredire, de renverser ou de nier la réalité, elle est nécessairement fictive. Il est donc nécessaire de restreindre cette notion, non seulement ici à la littérature, mais dans la littérature même, aux œuvres principalement narrative. C’est en effet dans le cadre d’une histoire que nous percevons mieux la relation de fiction.
										<br />
										<i>(www.bac-pro.net)</i>
									</p>
									<footer>
										<a href="https://www.bac-pro.net/document/francais/les-oeuvres-de-fiction-fiche-de-francais-bac-pro-1072.html" class="button">Lire plus</a>
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