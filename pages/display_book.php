<?php

function oeuvres_proposes($type) {
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=lecture;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
	    die('Erreur : '.$e->getMessage());
	}

	$reponse = $bdd->prepare('SELECT DISTINCT style FROM oeuvres WHERE type = ? ORDER BY style');
	$reponse->execute(array($genre));

	$liste_styles = "<ul>";
	while($donnees = $reponse->fetch()) {
		$liste_styles .= "<li style=\"margin-left: 40px;\">" . $donnees['style'] . "</li>";
	}
	$liste_styles .= "</ul>";

	$reponse->closeCursor();
	echo $liste_styles;
}

function oeuvre($genre, $style) {
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=lecture;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
	    die('Erreur : '.$e->getMessage());
	}

	$reponse = $bdd->prepare('SELECT * FROM oeuvres WHERE type = ? AND style = ? ORDER BY auteur');
	$reponse->execute(array($genre, $style));

	$oeuvre = "";
	while($donnees = $reponse->fetch()) {
		$liste_personnages = explode("§", $donnees['personnages']);
		$personnages = "";
		for ($i=0; $i < count($liste_personnages); $i++) {
			if ($liste_personnages[$i] != "") {
				$personnages .= "<li class=\"personnages\">" . $liste_personnages[$i] . "</li>";
			}
		}
		$oeuvre .= "
			<hr style=\"margin-bottom: 6rem;\"/>
			<section class=\"oeuvre\">
				<p class=\"titre\">" . $donnees['titre'] . "</p>
				<p class=\"auteur\">" . $donnees['auteur'] . "</p>
				<p class=\"nationalite\">" . $donnees['nationalite'] . "</p>
				<p class=\"parution\">" . $donnees['parution'] . "</p>
				<br />
				<p class=\"resume\">Liste des personnages :</p>
				<ul>" . $personnages . "</ul>
				<br />
				<p class=\"resume\">Résumé :</p>
				<p>" . $donnees['resume'] . "</p>
			</section>
			";
	}

	$reponse->closeCursor();
	echo $oeuvre;
}

?>