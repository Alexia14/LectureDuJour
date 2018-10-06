<div class="retour_top" id="retour_top" style="display: none;">
    <span class="fa fa-chevron-circle-up" onclick="haut_de_page()" style="font-size: 45px; color: #df7366;"></span>
</div>

<div id="footer">
    <div class="container">
        <!--
		<div class="row">
        -->
        <!-- Tweets -->
        <!--
            <section class="col-4 col-12-mobile">
                <header>
                    <h2 class="icon fa-address-card circled"><span class="label">Contact</span></h2>
                </header>
                <ul class="divided">
                    <li>
                        <article class="tweet">
                            Amet nullam fringilla nibh nulla convallis tique ante sociis accumsan.
                            <span class="timestamp">5 minutes ago</span>
                        </article>
                    </li>
                    <li>
                        <article class="tweet">
                            Hendrerit rutrum quisque.
                            <span class="timestamp">30 minutes ago</span>
                        </article>
                    </li>
                    <li>
                        <article class="tweet">
                            Curabitur donec nulla massa laoreet nibh. Lorem praesent montes.
                            <span class="timestamp">3 hours ago</span>
                        </article>
                    </li>
                    <li>
                        <article class="tweet">
                            Lacus natoque cras rhoncus curae dignissim ultricies. Convallis orci aliquet.
                            <span class="timestamp">5 hours ago</span>
                        </article>
                    </li>
                </ul>
            </section>
        -->
        <!-- Posts -->
        <!--
            <section class="col-4 col-12-mobile">
                <header>
                    <h2 class="icon fa-file circled"><span class="label">Posts</span></h2>
                </header>
                <ul class="divided">
                    <li>
                        <article class="post stub">
                            <header>
                                <h3><a href="#">Nisl fermentum integer</a></h3>
                            </header>
                            <span class="timestamp">3 hours ago</span>
                        </article>
                    </li>
                    <li>
                        <article class="post stub">
                            <header>
                                <h3><a href="#">Phasellus portitor lorem</a></h3>
                            </header>
                            <span class="timestamp">6 hours ago</span>
                        </article>
                    </li>
                    <li>
                        <article class="post stub">
                            <header>
                                <h3><a href="#">Magna tempus consequat</a></h3>
                            </header>
                            <span class="timestamp">Yesterday</span>
                        </article>
                    </li>
                    <li>
                        <article class="post stub">
                            <header>
                                <h3><a href="#">Feugiat lorem ipsum</a></h3>
                            </header>
                            <span class="timestamp">2 days ago</span>
                        </article>
                    </li>
                </ul>
            </section>
        -->
        <!-- Photos -->
        <!--
            <section class="col-4 col-12-mobile">
                <header>
                    <h2 class="icon fa-book circled"><span class="label">Oeuvres</span></h2>
                </header>
                <div class="row gtr-25">
                    <div class="col-6">
                        <a href="/LectureDuJour/pages/novel.php" class="image fit">
                            <img src="/LectureDuJour/images/roman.jpg" alt="Roman" />
                            <div class="overlay">
                                <div class="overlay_text">Roman</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="/LectureDuJour/pages/theater.php" class="image fit">
                            <img src="/LectureDuJour/images/théatre.jpg" alt="Théâtre" />
                            <div class="overlay">
                                <div class="overlay_text">Théâtre</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="/LectureDuJour/pages/youth.php" class="image fit">
                            <img src="/LectureDuJour/images/jeunesse.jpg" alt="Jeunesse" />
                            <div class="overlay">
                                <div class="overlay_text">Jeunesse</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="/LectureDuJour/pages/comic.php" class="image fit">
                            <img src="/LectureDuJour/images/BD.jpg" alt="BD" />
                            <div class="overlay">
                                <div class="overlay_text">BD</div>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
        -->
        <!--
		</div>

		<hr/>
		-->
        <div class="row">
            <div class="col-12">

                <!-- Contact -->
                <section class="contact">
                    <header>
                        <h3>Retrouvez-moi ici</h3>
                    </header>
                    <ul class="icons">
                        <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                        <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                        <li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
                        <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
                        <li><a href="#" class="icon fa-linkedin"><span class="label">Linkedin</span></a></li>
                    </ul>
                </section>

                <!-- Copyright -->
                <div class="copyright">
                    <ul class="menu">
                        <li>&copy; LectureDuJour. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                    </ul>
                </div>

            </div>

        </div>
    </div>
</div>

<script>
    function haut_de_page() {
        $('html,body').animate({
            scrollTop: 0
        }, 'slow');
    }

    $(function() {
        $(window).scroll(() => {
            if ($(this).scrollTop() > $('#bottom_header').offset().top) {
                document.getElementById(`retour_top`).style.display = "block";
            } else {
                document.getElementById(`retour_top`).style.display = "none";
            }
        });
    });
</script>