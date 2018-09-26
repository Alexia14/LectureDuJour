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

	$deja_existant = $bdd->prepare("SELECT * FROM oeuvres WHERE titre = :titre AND auteur = :auteur");
	$deja_existant->execute(array(
		'titre' => $_POST['titre'],
		'auteur' => $_POST['auteur']
		));
	$nb_existant = $deja_existant->fetch();

	if ($nb_existant == null) {
		ajout_oeuvre();
	}
	else echo "<script>alert('L\'oeuvre saisie existe déjà');</script>";
}

function ajout_oeuvre() {
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=lecture;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
	    die('Erreur : '.$e->getMessage());
	}

	$parution = $_POST['mois'] . " " . $_POST['annee'];
	if(isset($_POST) && !empty($_POST)) { // Teste si $_POST existe et n'est pas vide
	    foreach ($_POST as $key => $value) {
	        if($_POST[$key] == "-- mois --")
	            $parution = $_POST['annee'];
	        elseif ($_POST[$key] == "-- sélectionner --") {
	        	$_POST[$key] = "";
	        }
	    }
	}

	if (isset($_POST['style']) and !empty($_POST['style'])) {
		$styleOeuvre = $_POST['style'];
	}
	elseif (isset($_POST['newStyle'])) {
		$styleOeuvre = $_POST['newStyle'];
	}

	$listePersos = "";
	if (isset($_POST['nomPerso1'])) {
		$var = 1;
		foreach ($_POST as $key => $value) {
			if ($key == "nomPerso".$var) {
				$listePersos .= $_POST[$key] ." : ". $_POST['rolePerso'.$var] . "§";
				$var++;
			}
		}
	}

	$lecture = $bdd->prepare("INSERT INTO oeuvres (titre, auteur, type, style, nationalite, parution, personnages, resume) VALUES(:titre, :auteur, :type, :style, :nationalite, :parution, :personnages, :resume)");
	$lecture->execute(array(
		'titre' => $_POST['titre'],
		'auteur' => $_POST['auteur'],
		'type' => $_POST['type'],
		'style' => $styleOeuvre,
		'nationalite' => $_POST['nationalite'],
		'parution' => $parution,
		'personnages' => $listePersos,
		'resume' => $_POST['resume']
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
							
							<form method="post">
								<table class="newLivre">
									<tr>
										<td style="font-weight: bold;">Titre :</td>
										<td colspan="2"><input type="text" name="titre" required/></td>
									</tr>
									<tr>
										<td style="font-weight: bold;">Auteur :</td>
										<td colspan="2"><input type="text" name="auteur" required/></td>
									</tr>
									<tr>
										<td style="font-weight: bold;">Style :</td>
										<td colspan="2">
											<select name="type" onchange="style_livre(this.value)">
												<option>-- sélectionner --</option>
												<option value="Roman">Roman</option>
												<option value="Théâtre">Théâtre</option>
												<option value="Jeunesse">Jeunesse</option>
												<option value="BD">BD</option>
											</select>

											<div id="blockRoman" class="block_style_livre">
												<input type="radio" name="style" value="Autobiographique">Autobiographique
												<input type="radio" name="style" value="Littéraire">Littéraire
												<input type="radio" name="style" value="Policier">Policier
												<div style="display: flex;">
													<input type="radio" name="style" style="float: left; margin-top: auto; margin-bottom: auto;"><input type="text" name="newStyle" placeholder="autre" style="width: 90%;">
												</div>
											</div>
											<div id="blockThéâtre" class="block_style_livre">
												<input type="radio" name="style" value="Absurde">Absurde
												<input type="radio" name="style" value="Burlesque">Burlesque
												<div style="display: flex;">
													<input type="radio" name="style" style="float: left; margin-top: auto; margin-bottom: auto;"><input type="text" name="newStyle" placeholder="autre" style="width: 90%;">
												</div>
											</div>
											<div id="blockJeunesse" class="block_style_livre">
												<input type="radio" name="style" value="Roman jeunesse">Roman jeunesse
												<div style="display: flex;">
													<input type="radio" name="style" style="float: left; margin-top: auto; margin-bottom: auto;"><input type="text" name="newStyle" placeholder="autre" style="width: 90%;">
												</div>
											</div>
											<div id="blockBD" class="block_style_livre">
												<input type="radio" name="style" value="Humoristique française">Humoristique française
												<input type="radio" name="style" value="Humoristique belge">Humoristique belge
												<div style="display: flex;">
													<input type="radio" name="style" style="float: left; margin-top: auto; margin-bottom: auto;"><input type="text" name="newStyle" placeholder="autre" style="width: 90%;">
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td style="font-weight: bold;">Nationalité :</td>
										<td colspan="2"><input type="text" name="nationalite"/></td>
									</tr>
									<tr>
										<td style="font-weight: bold;">Date de parution :</td>
										<td style="width: 30%;">
											<select name="mois">
												<option>-- mois --</option>
												<option value="Janvier">Janvier</option>
												<option value="Février">Février</option>
												<option value="Mars">Mars</option>
												<option value="Avril">Avril</option>
												<option value="Mai">Mai</option>
												<option value="Juin">Juin</option>
												<option value="Juillet">Juillet</option>
												<option value="Aôut">Aôut</option>
												<option value="Septembre">Septembre</option>
												<option value="Octobre">Octobre</option>
												<option value="Novembre">Novembre</option>
												<option value="Décembre">Décembre</option>
											</select>
										</td>
										<td><input type="number" name="annee" min="1" max="2020" placeholder="année (aaaa)" required/></td>
									</tr>
									<tr>
										<td style="font-weight: bold;">Personnages :</td>
										<td colspan="2">
											<table id="persos" style="margin-top: 10px; margin-bottom: 0;">
												<tr>
													<td style="width: 30%;"><input type="text" name="nomPerso1" placeholder="Perso principal" required></td>
													<td><input type="text" name="rolePerso1" placeholder="rôle" required></td>
												</tr>
											</table>
										</td>
									</tr>
									<tr>
										<td></td>
										<td colspan="2"><input type="button" value="+" onclick="ajout_perso()" style="margin: 10px; margin-left: 30px;" /></td>
									</tr>
									<tr>
										<td style="font-weight: bold;">Résumé :</td>
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

<script>
	function style_livre(value) {
		tab_blocks = document.getElementsByClassName('block_style_livre');
		for (let i=0; i<tab_blocks.length; i++) {
			tab_blocks[i].style.display = 'none'
		}
		document.getElementById(`block${value}`).style.display = 'block';
	}

	let num = 2;
	function ajout_perso() {
		var table = document.getElementById("persos");
	    var row = table.insertRow(-1);
	    var cell1 = row.insertCell(0);
	    var cell2 = row.insertCell(1);
	    cell1.innerHTML = `<input type='text' name='nomPerso${num}' placeholder='nom'>`;
	    cell2.innerHTML = `<input type='text' name='rolePerso${num}' placeholder='rôle'>`;
	    num++;
	}
</script>