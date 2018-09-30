<nav id="nav" class="cl-effect-1">
	<ul>
		<li><a href="/LectureDuJour/index.php">Accueil</a></li>
		<li>
			<a href="/LectureDuJour/pages/search_reading.php">Oeuvres</a>
			<ul>
				<li>
					<a href="/LectureDuJour/pages/novel.php">Roman</a>
					<ul>
						<li><a href="/LectureDuJour/pages/novel/autobiography.php">Autobiographie</a></li>
						<li><a href="/LectureDuJour/pages/novel/literature.php">Littérature</a></li>
						<li><a href="/LectureDuJour/pages/novel/detective.php">Policier</a></li>
					</ul>
				</li>
				<li>
					<a href="/LectureDuJour/pages/theater.php">Théâtre</a>
					<ul>
						<li><a href="/LectureDuJour/pages/theater/absurd.php">Absurde</a></li>
						<li><a href="/LectureDuJour/pages/theater/comedy.php">Comédie</a></li>
						</li>
					</ul>
				</li>
				<li>
					<a href="/LectureDuJour/pages/youth.php">Jeunesse</a>
					<ul>
						<li><a href="/LectureDuJour/pages/youth/fiction.php">Fiction</a></li>
					</ul>
				</li>
				<li>
					<a href="/LectureDuJour/pages/comic.php">BD</a>
					<ul>
						<li><a href="/LectureDuJour/pages/comic/fantastic.php">Fantastique</a></li>
						<li><a href="/LectureDuJour/pages/comic/cartoon.php">Humoristique</a></li>
						</li>
					</ul>
				</li>
			</ul>
		</li>
		<li><a href="/LectureDuJour/pages/search_reading.php">Rechercher</a></li>
		<li><a href="/LectureDuJour/pages/new_reading.php">Nouvelle saisie</a></li>
		<li><a href="/LectureDuJour/pages/connect.php">Connexion</a></li>
	</ul>
</nav>

<div id="second_nav" style="position: fixed" class="second">
    <span class="fa fa-bars" id="icone_menu" onclick="derouler_menu()" style="margin: 0px; display: block;" />
    <span style="color: #df7366; font-weight: bold; margin-left: 4px; font-size: 25px;">Menu</span>
    <ul id="main_part" style="display: none;">
        <li><a href="/LectureDuJour/index.php">Accueil</a></li>
        <li>
            <a href="/LectureDuJour/pages/search_reading.php">Oeuvres</a>
            <ul>
                <li>
                    <a href="/LectureDuJour/pages/novel.php">Roman</a>
                    <ul>
                        <li><a href="/LectureDuJour/pages/novel/autobiography.php">Autobiographie</a></li>
                        <li><a href="/LectureDuJour/pages/novel/literature.php">Littérature</a></li>
                        <li><a href="/LectureDuJour/pages/novel/detective.php">Policier</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/LectureDuJour/pages/theater.php">Théâtre</a>
                    <ul>
                        <li><a href="/LectureDuJour/pages/theater/absurd.php">Absurde</a></li>
                        <li><a href="/LectureDuJour/pages/theater/comedy.php">Comédie</a></li>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="/LectureDuJour/pages/youth.php">Jeunesse</a>
                    <ul>
                        <li><a href="/LectureDuJour/pages/youth/fiction.php">Fiction</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/LectureDuJour/pages/comic.php">BD</a>
                    <ul>
                        <li><a href="/LectureDuJour/pages/comic/fantastic.php">Fantastique</a></li>
                        <li><a href="/LectureDuJour/pages/comic/cartoon.php">Humoristique</a></li>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="/LectureDuJour/pages/search_reading.php">Rechercher</a></li>
        <li><a href="/LectureDuJour/pages/new_reading.php">Nouvelle saisie</a></li>
        <li><a href="/LectureDuJour/pages/connect.php">Connexion</a></li>
    </ul>
</div>

<script>
    let menu = false;
    function derouler_menu() {
        menu = !menu;
        if (menu == true) {
            document.getElementById(`main_part`).style.display = 'block';
        }
        else document.getElementById(`main_part`).style.display = 'none';
    }

    $('#second_nav').hide();  // d'abord, on masque le deuxième menu de navigation, qui porte la classe "navigation2"
    const hauteur = 600; // XXX, c'est le nombre de pixels à partir duquel on déclenche le tout
    $(function(){
        $(window).scroll(() => { //Au scroll dans la fenetre on déclenche la fonction
            if ($(this).scrollTop() > hauteur) { //si on a défile de plus de XXX (variable "hauteur) pixels du haut vers le bas
                //document.getElementById(`nav`).style.display = 'none'; // On masque le 1
                document.getElementById(`second_nav`).style.display = 'block'; // On affiche le 2
            } else {
                document.getElementById(`second_nav`).style.display = 'none'; // "et vice et versa" (© Les inconnus, 1990 ^^)
               // document.getElementById(`nav`).style.display = 'none';
            }
        });
    });
</script>