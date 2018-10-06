<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body class="no-sidebar is-preload">
<div id="page-wrapper">

    <!-- Header -->
    <div id="header">

        <!-- Inner -->
        <div class="inner">
            <header>
                <h1><a href="/LectureDuJour/index.php" id="logo">Lecture du Jour</a></h1>
                <hr />
                <p>Une recherche ?</p>
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
                    <h2 style="color: #df7366; margin-bottom: 60px;">Vous cherchez une lecture particulière ?</h2>
                </header>

                <form method="post">
                    <table class="formulaire">
                        <tr>
                            <td class="form_col1">Titre :</td>
                            <td colspan="3"><input type="text" name="titre" placeholder="Titre"/></td>
                        </tr>
                        <tr>
                            <td class="form_col1">Auteur :</td>
                            <td colspan="3"><input type="text" name="auteur" placeholder="Auteur"/></td>
                        </tr>
                        <tr>
                            <td class="form_col1">Style :</td>
                            <td colspan="3">
                                <select name="genre" onchange="style_livre(this.value)">
                                    <option>-- sélectionner --</option>
                                    <option value="Roman">Roman</option>
                                    <option value="Nouvelle">Nouvelle</option>
                                    <option value="Théâtre">Théâtre</option>
                                    <option value="Poésie">Poésie</option>
                                    <option value="Jeunesse">Jeunesse</option>
                                    <option value="BD">BD</option>
                                    <option value="Autre">Autre</option>
                                </select>

                                <div id="blockRoman" class="block_style_livre">
                                    <input type="radio" name="style" value="Autobiographique">Autobiographie
                                    <input type="radio" name="style" value="Littéraire">Littéraire
                                    <input type="radio" name="style" value="Policier">Policier
                                    <div style="display: flex;">
                                        <input type="radio" name="style" style="float: left; margin-top: auto; margin-bottom: auto;"><input type="text" name="newStyle" placeholder="autre" style="width: 90%;">
                                    </div>
                                </div>
                                <div id="blockNouvelle" class="block_style_livre">
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
                                <div id="blockPoésie" class="block_style_livre">
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
                                <div id="blockAutre" class="block_style_livre">
                                    <div style="display: flex;">
                                        <input type="text" name="newGenre" placeholder="genre ex: roman" style="width: 40%; margin-right: 5%;">
                                        <input type="text" name="newStyle" placeholder="style ex: autobiographie" style="width: 40%;">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="form_col1">Nationalité :</td>
                            <td colspan="3"><input type="text" name="nationalite" placeholder="Nationalité"/></td>
                        </tr>
                        <tr>
                            <td class="form_col1">Date de parution :</td>
                            <td style="width: 20%;">
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
                            <td style="width: 1%;"></td>
                            <td><input type="number" name="annee" min="1" max="2020" placeholder="année (aaaa)"/></td>
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