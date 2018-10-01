<?php
function citation() {
    $citation = rand(1, 10);
    echo "<img src=\"/LectureDuJour/images/quotation1.png\" alt=\"« \" class=\"quotation\" />";
    switch ($citation) {
        case 1:
            echo "On est meilleur juge des oeuvres des autres.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\"'/>
				<br /><i>La Petite Marchande de prose, Daniel Pennac</i>";
            break;
        case 2:
            echo "Les écrivains ne savent jamais juger leurs oeuvres.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\"'/>
				<br /><i>La chambre dérobée, Paul Auster</i>";
            break;
        case 3:
            echo "Les oeuvres les plus belles sont celles où il y a le moins de matière.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\"'/>
				<br /><i>Gustave Flaubert</i>";
            break;
        case 4:
            echo "Il faut mettre son génie dans sa vie et son talent dans ses oeuvres.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\"'/>
				<br /><i>Oscar Wilde</i>";
            break;
        case 5:
            echo "Les chefs-d'oeuvres sont comme les grands animaux. Ils ont la mine tranquille.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\"'/>
				<br /><i>Gustave Flaubert</i>";
            break;
        case 6:
            echo "Un artiste ne doit pas se faire d'illusions : exceptionnelles sont les oeuvres totalement réussies.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\"'/>
				<br /><i></i>";
            break;
        case 7:
            echo "Il n'y a pas d'oeuvres populaires destinées à un public spécifique, peu ou moyennement cultivé. Les oeuvres populaires doivent s'adresser à tous les publics et être assez accessibles pour être reçues par tous.
				<img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\"'/>
				<br /><i>Entretien avec Bernard Pivot, Maurice Druon</i>";
            break;
        case 8:
            echo "Il y a des oeuvres qui font passer le temps, et d’autres qui expliquent le temps.
                <img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\"'/>
				<br /><i>André Malraux</i>";
            break;
        case 9:
            echo "C'est le propre des oeuvres vraiment artistiques, d'être une source inépuisable de suggestions.
                <img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\"'/>
				<br /><i>L'Art romantique, Charles Baudelaire</i>";
            break;
        case 10:
            echo "Les grandes oeuvres d’art ne sont grandes que parce qu’elles sont accessibles et compréhensibles à tous.
                <img src=\"/LectureDuJour/images/quotation2.png\" alt=\" »\" class=\"quotation\"'/>
				<br /><i>Qu’est-ce que l’art ?, Léon Tolstoï</i>";
            break;
        default:
            break;
    }
}

function oeuvres_proposes() {
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

?>


<!DOCTYPE HTML>
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
								<p>Quelle lecture ?</p>
							</header>
						</div>

					<!-- Nav -->
						<?php include('../nav.php'); ?>

				</div>

			<!-- Main -->
                <div class="wrapper style1">

                    <div class="container">
                        <div class="row gtr-200">
                            <div class="col-8 col-12-mobile" id="content">
                                <article id="main">
                                    <header style="display: block;">
                                        <h2>Oeuvres</h2>
                                        <p>
                                            <?php citation(); ?>
                                        </p>
                                    </header>
                                    <div class="image_genre_style"><img src="/LectureDuJour/images/oeuvres.jpg" alt="oeuvre"/></div>
                                    <hr />
                                    <section>
                                        <p>
                                            Ce site a pour but de permettre à chaque lecteur de se renseigner sur certaines oeuvres.
                                            <br />
                                            Vous pouvez retrouver sur ce site des avis de lecteur sur les oeuvres publiées, des informations générales sur celles-çi comme la liste des personnages et le résumé de l'oeuvre telle qu'elle a été perçue par le lecteur.
                                            <br />
                                            Ce site ouvert à tous regroupe des genres littéraires variés tels que :
                                            <?php oeuvres_proposes(); ?>
                                        </p>
                                    </section>
                                    <section>

                                    </section>
                                </article>
                            </div>
                            <div class="col-4 col-12-mobile" id="sidebar">
                                <hr class="first" />
                                <section>
                                    <header>
                                        <h3>Oeuvre</h3>
                                    </header>
                                    <p>
                                        Création qui raconte souvent une histoire, à la première (je) ou la troisième personne (il, elle, …), qui a des fins esthétiques.
                                        Elle exprime aussi une intention de la part de l’auteur et présente diverses ressources littéraires liées à l’époque de celui-ci.
                                        L’œuvre littéraire peut appartenir à différents genres, tels que le récit (prose, roman, conte), la lyrique (composition en vers qui exprime les sentiments de l’auteur), le drame (œuvre conçue pour être montrée/présentée au public), l’épique (versets qui racontent les exploits des héros ou des dieux) ou la didactique (qui cherche à instruire le lecteur ou l’auditeur).
                                        <br />
                                        <i>(www.usherbrooke.ca)</i>
                                    </p>
                                    <footer>
                                        <a href="https://www.usherbrooke.ca/litt-et-maths/fondements/quest-ce-quune-oeuvre-litteraire/" class="button">Lire plus</a>
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
				<?php include('../footer.php'); ?>

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