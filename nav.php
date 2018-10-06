<head>
    <title>Lecture du Jour</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="/LectureDuJour/assets/css/main.css" />
    <link rel="stylesheet" href="/LectureDuJour/assets/css/main2.css" />
    <noscript><link rel="stylesheet" href="/LectureDuJour/assets/css/noscript.css" /></noscript>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<nav id="nav" class="cl-effect-1">
    <ul>
        <li><a href="/LectureDuJour/index.php">Accueil</a></li>
        <li>
            <a href="/LectureDuJour/pages/literary_work.php">Oeuvres</a>
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
                    <a href="/LectureDuJour/pages/novella.php">Nouvelles</a>
                </li>
                <li>
                    <a href="/LectureDuJour/pages/theater.php">Théâtre</a>
                    <ul>
                        <li><a href="/LectureDuJour/pages/theater/absurd.php">Absurde</a></li>
                        <li><a href="/LectureDuJour/pages/theater/comedy.php">Comédie</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/LectureDuJour/pages/poetry.php">Poésie</a>
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
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="/LectureDuJour/pages/search.php">Rechercher</a></li>
        <li><a href="/LectureDuJour/pages/new_reading.php">Nouvelle saisie</a></li>
        <li><a href="/LectureDuJour/pages/connect.php">Connexion</a></li>
    </ul>
</nav>

<div id="second_nav" style="display: none;">
    <span class="fa fa-bars" id="icone_menu" onclick="derouler_menu()" style="margin: 0; display: block;">
    <span style="color: #df7366; font-weight: bold; margin-left: 4px; font-size: 25px;">Menu</span>
    </span>
    <ul id="main_part" style="display: none; margin-top: 1em;">
        <li><a href="/LectureDuJour/index.php">Accueil</a></li>
        <li>
            <a href="/LectureDuJour/pages/literary_work.php">Oeuvres</a>
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
                    <a href="/LectureDuJour/pages/novella.php">Nouvelles</a>
                </li>
                <li>
                    <a href="/LectureDuJour/pages/theater.php">Théâtre</a>
                    <ul>
                        <li><a href="/LectureDuJour/pages/theater/absurd.php">Absurde</a></li>
                        <li><a href="/LectureDuJour/pages/theater/comedy.php">Comédie</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/LectureDuJour/pages/poetry.php">Poésie</a>
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
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="/LectureDuJour/pages/search.php">Rechercher</a></li>
        <li><a href="/LectureDuJour/pages/new_reading.php">Nouvelle saisie</a></li>
        <li><a href="/LectureDuJour/pages/connect.php">Connexion</a></li>
    </ul>
</div>

<script>
    let menu = false;
    function derouler_menu() {
        menu = !menu;
        if (menu) {
            document.getElementById(`main_part`).style.display = 'block';
        }
        else document.getElementById(`main_part`).style.display = 'none';
    }

    $(function() {
        $(window).scroll(() => {
            if ($(this).scrollTop() > $('#bottom_header').offset().top) {
                document.getElementById(`second_nav`).style.display = 'block';
            } else {
                document.getElementById(`second_nav`).style.display = 'none';
            }
        });
    });

</script>