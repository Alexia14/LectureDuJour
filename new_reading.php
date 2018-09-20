<?php

if (isset($_POST) and !empty($_POST)) {

	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=lecture;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
	    die('Erreur : '.$e->getMessage());
	}

	if(isset($_POST) && !empty($_POST)) { // Teste si $_POST existe et n'est pas vide
	    foreach ($_POST as $key => $value) {
	        if($_POST[$key] == "-- mois --")
	            $_POST[$key] = "";
	    }
	}
	$parution = $_POST['mois'] + $_POST['annee'];

	$lecture = $bdd->prepare("INSERT INTO oeuvres (titre, auteur, style, nationnalite, parution, resume) VALUES(:titre, :auteur, :style, :nationnalite, :parution, :resume)");
	$lecture->execute(array(
		'titre' => (isset($_POST['titre'])) ? $_POST['titre'] : 'titre',
		'auteur' => (isset($_POST['auteur'])) ? $_POST['auteur'] : 'auteur',
		'style' => (isset($_POST['style'])) ? $_POST['style'] : 'style',
		'nationnalite' => (isset($_POST['nationnalite'])) ? $_POST['nationnalite'] : 'nationnalite',
		'parution' => $parution,
		'resume' => (isset($_POST['resume'])) ? $_POST['resume'] : 'resume'
	));
}
?>

<!DOCTYPE HTML>
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
								<p>Nouvelle lecture ?</p>
							</header>
						</div>

					<!-- Nav -->
						<?php include('nav.php'); ?>

				</div>

			<!-- Main -->
				<div class="wrapper style1">

					<div class="container">
						<article id="main" class="special">
							<header>
								<h2 style="float: right;">Une nouvelle lecture à partager ?</h2>
								<img style="height: 300px;" src="images/lecture.jpeg" alt="Lecture d'Astérix" />
							</header>
							
							<form method="post" action="#">
								<table class="newLivre">
									<tr>
										<td>Titre :</td>
										<td colspan="2"><input type="text" name="titre" required/></td>
									</tr>
									<tr>
										<td>Auteur :</td>
										<td colspan="2"><input type="text" name="auteur" required/></td>
									</tr>
									<tr>
										<td>Style :</td>
										<td colspan="2">
											Roman : 
											<input type="radio" name="style" value="Autobiographique" checked> Autobiographique
											<input type="radio" name="style" value="Littéraire"> Littéraire
											<input type="radio" name="style" value="Policier"> Policier
											<br />
											Théâtre : 
											<input type="radio" name="style" value="Absurde"> Absurde
											<input type="radio" name="style" value="Burlesque"> Burlesque
											<br />
											Jeunesse : 
											<input type="radio" name="style" value="Roman jeunesse"> Roman jeunesse
											<br />
											BD : 
											<input type="radio" name="style" value="Humoristique française"> Humoristique française
											<input type="radio" name="style" value="Humoristique belge"> Humoristique belge
										</td>
									</tr>
									<tr>
										<td>Nationnalité :</td>
										<td colspan="2"><input type="text" name="nationnalite"/></td>
									</tr>
									<tr>
										<td>Date de parution :</td>
										<td>
											<select name="mois">
												<option>-- mois --</option>
												<option>Janvier</option>
												<option>Février</option>
												<option>Mars</option>
												<option>Avril</option>
												<option>Mai</option>
												<option>Juin</option>
												<option>Juillet</option>
												<option>Aôut</option>
												<option>Septembre</option>
												<option>Octobre</option>
												<option>Novembre</option>
												<option>Decembre</option>
											</select>
										</td>
										<td><input type="number" name="annee" placeholder="année (aaaa)" pattern="[0-9]{4}" required/></td>
									</tr>
									<tr>
										<td>Résumé :</td>
										<td colspan="2"><textarea type="text" name="resume" required/></textarea></td>
									</tr>
				                    <tr>
				                        <td colspan="3"><input type="submit" value="Valider"/></td>
				                    </tr>
								</table>
							</form>

						</article>

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