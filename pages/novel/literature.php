<?php
function citation() {
	$citation = rand(1, 10);
    echo "<img src=\"/LectureDuJour/images/quotation1.png\" alt=\"« \" class=\"quotation\"/>";
    switch ($citation) {
		case 1:
			echo "Littérature populaire ne signifie pas littérature lue par le peuple, c’est une littérature qui se doit de fournir en premier lieu une lecture pour le plus grand nombre de gens possible.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\"/>
				<br /><i>Jean-Bernard Pouy</i>";
			break;
		case 2:
			echo "Il n’y a pas d’heure pour la littérature ; la littérature n’est jamais à l’heure.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\"/>
				<br /><i>Bernard-Henri Lévy</i>";
			break;
		case 3:
			echo "La littérature est le chant du cœur du peuple et le peuple est l'âme de la littérature.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\"/>
				<br /><i>Jiang Zilong</i>";
			break;
		case 4:
			echo "La différence entre littérature et journalisme, c'est que le journalisme est illisible et que la littérature n'est pas lue.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\"/>
				<br /><i>Oscar Wilde</i>";
			break;
		case 5:
			echo "On aimerait à savoir si c'est la littérature qui corrompt les moeurs ou les moeurs au contraire qui corrompent la littérature.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\"/>
				<br /><i>Alfred Capus</i>";
			break;
		case 6:
			echo "La vie est la source de la littérature et la littérature doit être fidèle à la vie.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\"/>
				<br /><i>Gao Xingjian</i>";
			break;
		case 7:
			echo "Littérature populaire ne signifie pas littérature lue par le peuple, c’est une littérature qui se doit de fournir en premier lieu une lecture pour le plus grand nombre de gens possible.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\"/>
				<br /><i>Jean-Bernard Pouy</i>";
			break;
		case 8:
			echo "Si Dieu existe, à quoi bon la littérature ? Si Dieu n'existe pas, alors à quoi bon faire de la littérature ?
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\"/>
				<br /><i>Eugène Ionesco</i>";
			break;
		case 9:
			echo "Le cinéma se nourrit de littérature, et la littérature se nourrit de tout, notamment de cinéma.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\"/>
				<br /><i>Martin Page</i>";
			break;
		case 10:
			echo "La littérature ne change ni l'homme ni la société. Pour autant, l'absence de littérature rendrait l'homme encore plus infréquentable.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\"/>
				<br /><i>Tahar Ben Jelloun</i>";
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
								<p>Romans</p>
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
										<h2>Littérature</h2>
										<p>
											<?php citation(); ?>
										</p>
									</header>
                                    <div class="image_genre_style"><img src="/LectureDuJour/images/littérature.jpg" alt="Littérature"/></div>
									<?php include('../display_book.php') ?>
									<?php oeuvre('Roman', 'Littérature'); ?>
								</article>
							</div>
							<div class="col-4 col-12-mobile" id="sidebar">
								<hr class="first" />
								<section>
									<header>
										<h3>Littérature</h3>
									</header>
									<p>
										Etymologiquement, le mot « Littérature » est issu du latin « littera » qui signifie lettre, et puis « litteratura » : écriture, grammaire et culture, et désigne :
										<ol>
											<li>L'ensemble des œuvres écrites ou orales fondées sur la langue et dont la dimension esthétique les distingue des œuvres scientifiques ou didactiques (sens attesté en 1764) ;</li>
											<li>Les activités de production et d'étude de telles œuvres (sens apparu dans la première partie du XIXe siècle) ;</li>
											<li>Ensemble de textes publiés relatifs à un sujet, qu'ils aient ou non une dimension esthétique (d'après l'allemand Literatur, 1758). C'est en ce sens que l'on peut parler par exemple de littérature scientifique.</li>
										</ol>
										<i>(Overblog : Qu'est ce que la littérature?)</i>
									</p>
									<footer>
										<a href="http://lifim2010.over-blog.com/article-qu-est-ce-que-la-litterature-75696778.html" class="button">Lire plus</a>
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