<?php

function toutes_oeuvres_proposes() {
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=lecture;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $reponse1 = $bdd->query('SELECT DISTINCT genre FROM oeuvres');
    $liste_genre_styles = "<ul>";
    while ($donnees1 = $reponse1->fetch()) {
        $genre = $donnees1['genre'];
        $liste_genre_styles .= "<li style=\"margin-left: 40px;\">" . $genre;

        $reponse2 = $bdd->prepare('SELECT DISTINCT style FROM oeuvres WHERE genre = ? ORDER BY style');
        $reponse2->execute(array($genre));

        $liste_genre_styles .= "<ul>";
        while ($donnees2 = $reponse2->fetch()) {
            $liste_genre_styles .= "<li style=\"margin-left: 40px;\">" . $donnees2['style'] . "</li>";
        }
        $liste_genre_styles .= "</ul></li>";
        $reponse2->closeCursor();
    }
    $liste_genre_styles .= "</ul>";

    $reponse1->closeCursor();
    echo $liste_genre_styles;
}

function oeuvres_proposes($genre) {
    try 	{
        $bdd = new PDO('mysql:host=localhost;dbname=lecture;charset=utf8', 'root', '');
    } catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }

    $reponse = $bdd->prepare('SELECT DISTINCT style FROM oeuvres WHERE genre = ? ORDER BY style');
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

function literary_research() {
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=lecture;charset=utf8', 'root', '');
    } catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }

    $reponse = $bdd->query('SELECT DISTINCT auteur FROM oeuvres ORDER BY auteur');

    $search = "<header><h3>Une recherche précise ?</h3></header>";
    $search .= "
    <form style=\"padding-left: 20px; padding-right: 20px;\">
        <select>
            <option value=\"-- Auteur --\">-- Auteur --</option>";
    while($donnees = $reponse->fetch()) {
        $search .= "<option value=\"auteur1\">" . $donnees['auteur'] . "</option>";
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
    <form style=\"padding-left: 20px; padding-right: 20px;\">
        <select>
            <option value=\"-- Auteur --\">-- Auteur --</option>";
    while($donnees = $reponse->fetch()) {
        $search .= "<option value=\"auteur1\">" . $donnees['auteur'] . "</option>";
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
    <form style=\"padding-left: 20px; padding-right: 20px;\">
        <select>
            <option value=\"-- Auteur --\">-- Auteur --</option>";
    while($donnees = $reponse->fetch()) {
        $search .= "<option value=\"auteur1\">" . $donnees['auteur'] . "</option>";
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

?>