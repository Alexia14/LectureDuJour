<?php
function oeuvre($type, $style) {
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=lecture;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
	    die('Erreur : '.$e->getMessage());
	}

	$reponse = $bdd->prepare('SELECT * FROM oeuvres WHERE type = ? AND style = ? ORDER BY auteur');
	$reponse->execute(array($type, $style));

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
			/*
			couper les personnages aux §
			mettre § après tous les persos et split pour avoir un tableau
			afficher tableau
			*/
	}

	$reponse->closeCursor();
	echo $oeuvre;
}
?>