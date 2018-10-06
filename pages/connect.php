<?php

if (isset($_POST) and !empty($_POST)) {

    try {
        $bdd = new PDO('mysql:host=localhost;dbname=lecture;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    if (isset($_POST['type']) and $_POST['type'] == "Connexion") {
        connexion();
    }
    else inscription();
}

function connexion()
{
    if (isset($_POST) and !empty($_POST)) {

        try {
            $bdd = new PDO('mysql:host=localhost;dbname=lecture;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $inscrit = $bdd->prepare("SELECT prenom FROM inscrits WHERE email = :email AND password = :password");
        $inscrit->execute(array(
            'email' => $_POST['email'],
            'password' => $_POST['password']
        ));

        $inscrit->closeCursor();
    }
}

function inscription() {
    if (isset($_POST) and !empty($_POST)) {

        try {
            $bdd = new PDO('mysql:host=localhost;dbname=lecture;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $deja_inscrit = $bdd->prepare("SELECT * FROM inscrits WHERE email = :email AND password = :password");
        $deja_inscrit->execute(array(
            'email' => $_POST['email'],
            'password' => $_POST['password']
        ));

        if (isset($_POST['email']) and !empty($_POST['email'])) {
            if (isset($_POST['verif_email']) and !empty($_POST['verif_email'])) {
                if ($_POST['email'] != $_POST['verif_email']) {
                    echo "<script>alert('Veuillez vérifier email.');</script>";
                }
            }
        }

        if (isset($_POST['password']) and !empty($_POST['password'])) {
            if (isset($_POST['verif_password']) and !empty($_POST['verif_password'])) {
                if ($_POST['password'] != $_POST['verif_password']) {
                    echo "<script>alert('Veuillez vérifier password.');</script>";
                }
            }
        }

        if ($deja_inscrit->fetch() != null) {
            echo "<script>alert('Cette adresse correpond déjà à un espace de connexion.');</script>";
        }

        else ajout_personne();
    }
}

function ajout_personne() {
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=lecture;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    if (isset($_POST['style']) and !empty($_POST['style'])) {
        $styleOeuvre = $_POST['style'];
    }
    elseif (isset($_POST['newStyle'])) {
        $styleOeuvre = $_POST['newStyle'];
    }

    $inscrire = $bdd->prepare("INSERT INTO inscrits (nom, prenom, anniversaire, email, password, type, style)
        VALUES(:nom, :prenom, :anniversaire, :email, :password, :type, :style)");
    $inscrire->execute(array(
        'nom' => $_POST['nom'],
        'prenom' => $_POST['prenom'],
        'anniversaire' => $_POST['anniversaire'],
        'email' => $_POST['email'],
        'password' => $_POST['password'],
        'type' => $_POST['type'],
        'style' => $styleOeuvre
    ));
}
?>

<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<body class="no-sidebar is-preload">
<div id="page-wrapper">

    <!-- Header -->
    <div id="header">

        <!-- Inner -->
        <div class="inner">
            <header>
                <h1><a href="/LectureDuJour/index.php" id="logo">Lecture du Jour</a></h1>
                <hr />
                <p>Connectez vous</p>
            </header>
        </div>

        <!-- Nav -->
        <?php include('../nav.php'); ?>

    </div>

    <!-- Main -->
    <div class="wrapper style1">

        <div class="container">
            <article id="main" class="special">
                <header>
                    <h2 style="color: #df7366; margin-bottom: 60px;">La connexion est la clé du partage</h2>
                </header>

                <form method="post">
                    <table class="formulaire" style="width: 70%; margin-left: auto; margin-right: auto;">
                        <tr>
                            <td><input type="email" name="email" placeholder="email" required></td>
                            <td style="width: 1%;"></td>
                            <td><input type="password" name="password" placeholder="mot de passe" required></td>
                        </tr>

                        <tr>
                            <td colspan="3" style="text-align: center;">
                                <input type="submit" value="Connexion"/>
                                <input type="hidden" name="type" value="Connexion"/>
                            </td>
                        </tr>
                    </table>
                </form>

                <p style="text-align: center;">
                    Pas encore de compte ? Cliquez ici :
                    <span class="fa fa-edit" onclick="new_connexion()" style="margin-bottom: 20px; margin-left: 30px;" />
                </p>
                <div id="new_connect" style="display: none;">
                    <hr />
                    <h2 style="color: #df7366; margin-bottom: 60px; font-size: 40px;">Inscrivez vous pour partager votre expérience :</h2>
                    <form method="post">
                        <table class="formulaire">
                            <tr>
                                <td class="form_col1">Nom<span style="color: red">*</span> :</td>
                                <td style="width: 39%;"><input type="text" name="nom" placeholder="Nom" required/></td>
                                <td style="width: 1%;"></td>
                                <td><input type="text" name="prenom" placeholder="Prénom" required/></td>
                            </tr>
                            <tr>
                                <td class="form_col1">Date de naissance :</td>
                                <td><input type="date" name="anniversaire" style="width: 250px;"></td>
                            </tr>
                            <tr>
                                <td class="form_col1">Adresse mail<span style="color: red">*</span> :</td>
                                <td><input type="email" name="email" placeholder="email" required></td>
                                <td></td>
                                <td><input type="email" name="verif_email" placeholder="Confirmation email" required></td>
                            </tr>
                            <tr>
                                <td class="form_col1">Mot de passe<span style="color: red">*</span> :</td>
                                <td><input type="password" name="password" placeholder="mot de passe" required></td>
                                <td></td>
                                <td><input type="password" name="verif_password" placeholder="Confirmation mot de passe" required></td>
                            </tr>
                            <tr>
                                <td class="form_col1">Style de préférence :</td>
                                <td colspan="3">
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
                                        <input type="radio" name="style" value="Comédie">Comédie
                                        <div style="display: flex;">
                                            <input type="radio" name="style" style="float: left; margin-top: auto; margin-bottom: auto;"><input type="text" name="newStyle" placeholder="autre" style="width: 90%;">
                                        </div>
                                    </div>
                                    <div id="blockJeunesse" class="block_style_livre">
                                        <input type="radio" name="style" value="Fiction">Fiction
                                        <div style="display: flex;">
                                            <input type="radio" name="style" style="float: left; margin-top: auto; margin-bottom: auto;"><input type="text" name="newStyle" placeholder="autre" style="width: 90%;">
                                        </div>
                                    </div>
                                    <div id="blockBD" class="block_style_livre">
                                        <input type="radio" name="style" value="Fantastique">Fantastique
                                        <input type="radio" name="style" value="Humoristique">Humoristique
                                        <div style="display: flex;">
                                            <input type="radio" name="style" style="float: left; margin-top: auto; margin-bottom: auto;"><input type="text" name="newStyle" placeholder="autre" style="width: 90%;">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                            <tr>
                                <td colspan="3">
                                    <input type="submit" value="Inscription"/>
                                    <input type="hidden" name="type" value="Inscription"/>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>

            </article>

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

    function new_connexion() {
        document.getElementById(`new_connect`).style.display = 'block';
        $('html,body').animate({
            scrollTop: $('#new_connect').offset().top
        }, 'slow');
    }
</script>