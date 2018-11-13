<?php

function oeuvres_proposes($genre) {
    try 	{
        $bdd = new PDO('mysql:host=localhost;dbname=lecture;charset=utf8', 'root', '');
    } catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }

    $reponse = $bdd->prepare('SELECT DISTINCT style FROM oeuvres WHERE genre = ? ORDER BY style');
    $reponse->execute(array($genre));

    $resultat = [];
    while ($donnees = $reponse->fetch()) {
        array_push($resultat, $donnees['style']);
    }

    if ($resultat[0] != "") {
        $liste_styles = "<p>Voici les types d'oeuvres correpondant au genre " . $genre . " :</p>";
        foreach ($resultat as &$value) {
            $liste_styles .= "<li style=\"margin-left: 40px;\">" . $value . "</li>";
        }
        echo $liste_styles;
    }

    $reponse->closeCursor();
}

//affichage de toutes les oeuvres correspondantes au genre et style
function oeuvre($genre, $style) {
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=lecture;charset=utf8', 'root', '');
    } catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }

    $reponse = $bdd->prepare('SELECT * FROM oeuvres WHERE genre = ? AND style = ? ORDER BY auteur');
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

//affinage page oeuvre
function literary_research() {
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=lecture;charset=utf8', 'root', '');
    } catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }

    $reponse = $bdd->query('SELECT DISTINCT auteur FROM oeuvres ORDER BY auteur');

    $search = "<header><h3>Une recherche précise ?</h3></header>";
    $search .= "
    <form method=\"post\" onsubmit=\"afficherAuteur()\" style=\"padding-left: 20px; padding-right: 20px;\">
        <select name=\"auteurChoisi\">
            <option value=\"-- Auteur --\">-- Auteur --</option>";
    while($donnees = $reponse->fetch()) {
        $search .= "<option value=\"". $donnees['auteur'] ."\">" . $donnees['auteur'] . "</option>";
    }
    $search .= " 
        </select>
        <div style=\"text-align: center;\">
            <input type=\"submit\" value=\"Chercher\">
            <p style=\"text-align: center;\">Pas trouvé ?
                <span class=\"fa fa-caret-right\">
                    <a href=\"/LectureDuJour/pages/literary_work.php\" style=\"border-bottom: none; color: #df7366; text-decoration: underline;\">oeuvres</a>
                </span>
            </p>
        </div>
    </form>";

    $reponse->closeCursor();
    echo $search;
}

//affinage page genre (roman, BD...)
function pages_research($genre) {
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=lecture;charset=utf8', 'root', '');
    } catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }

    $reponse = $bdd->prepare('SELECT DISTINCT auteur FROM oeuvres WHERE genre = ? ORDER BY auteur');
    $reponse->execute(array($genre));

    $search = "<header><h3>Une recherche précise ?</h3></header>";
    $search .= "
    <form method=\"post\" onsubmit=\"afficherAuteur()\" style=\"padding-left: 20px; padding-right: 20px;\">
        <select name=\"auteurChoisi\">
            <option value=\"-- Auteur --\">-- Auteur --</option>";
    while($donnees = $reponse->fetch()) {
        $search .= "<option value=\"". $donnees['auteur'] ."\">" . $donnees['auteur'] . "</option>";
    }
    $search .= " 
        </select>
        <div style=\"text-align: center;\">
            <input type=\"submit\" value=\"Chercher\">
            <p style=\"text-align: center;\">Pas trouvé ?
                <span class=\"fa fa-caret-right\">
                    <a href=\"/LectureDuJour/pages/literary_work.php\" style=\"border-bottom: none; color: #df7366; text-decoration: underline;\">oeuvres</a>
                </span>
            </p>
        </div>
    </form>";

    $reponse->closeCursor();
    echo $search;
}

//affinage page style (autobiographie...)
function style_research($genre, $style) {
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=lecture;charset=utf8', 'root', '');
    } catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }

    $reponse = $bdd->prepare('SELECT DISTINCT auteur FROM oeuvres WHERE genre = ?  AND style = ? ORDER BY auteur');
    $reponse->execute(array($genre, $style));

    $search = "<header><h3>Une recherche précise ?</h3></header>";
    $search .= "
    <form method=\"post\" onsubmit=\"afficherAuteur()\" style=\"padding-left: 20px; padding-right: 20px;\">
        <select name=\"auteurChoisi\">
            <option value=\"-- Auteur --\">-- Auteur --</option>";
    while($donnees = $reponse->fetch()) {
        $search .= "<option value=\"". $donnees['auteur'] ."\">" . $donnees['auteur'] . "</option>";
    }
    $search .= " 
        </select>
        <div style=\"text-align: center;\">
            <input type=\"submit\" value=\"Chercher\">
            <p style=\"text-align: center;\">Pas trouvé ?
                <span class=\"fa fa-caret-right\">
                    <a href=\"/LectureDuJour/pages/literary_work.php\" style=\"border-bottom: none; color: #df7366; text-decoration: underline;\">oeuvres</a>
                </span>
            </p>
        </div>
    </form>";

    $reponse->closeCursor();
    echo $search;
}

//affichage du résultat d'un affinage par auteur
function afficherAuteur() {

};

?>