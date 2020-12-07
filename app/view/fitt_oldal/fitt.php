<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/fitt_oldal/fitt.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <title>Fitt Kalkulátor 💪</title>
</head>

<body class="main">
    <header class="borito">
        <div class="borito-img">
            <nav>
                <div class="topmenu">
                    <div class="logo">Logo</div>
                    <label for="btn" class="icon">
                        <span class="fa fa-bars"></span>
                    </label>
                    <input class="csekk" type="checkbox" id="btn">
                    <ul>
                        <li><a href="">Forum</a></li>
                        <li><a href="">Kapcsolat</a></li>
                        <li><a href="">Szolgaltatasok</a></li>
                        <li><a href="">Rolunk</a></li>
                        <li><a href="">Belepes</a></li>
                        <li><a href="">Regisztracio</a></li>
                    </ul>
                </div>
            </nav>
            <div class="cim">
                <h1>Fitt Kalkulátor</h1>
            </div>
        </div>
    </header>

    <div id="myDIV">
        <div class="mySlides">
            <div class="background">
                <h1 class="title">ÉRZED MAGADBAN A MOTIVÁCIÓT, HOGY ÚJ SZINTRE LÉPJ AZ ALAKFORMÁLÁSBAN?</h1>
                <button class="btn" onclick="plusDivs(1)">Belevágok</button>
            </div>
        </div>

        <div class="mySlides">
            <div class="background">
                <h2>Nemed?</h2>
                <button class="btn">Férfi</button>
                <button class="btn">Nő</button>
                <h2>Életkorod?</h2>
                <select name="Életkor" id="Életkor">
                    <option value="10-15">10-15</option>
                    <option value="15-20">15-20</option>
                    <option value="20-25">20-25</option>
                    <option value="25-30">25-30</option>
                    <option value="30-35">30-35</option>
                    <option value="35-40">35-40</option>
                    <option value="40-45">40-45</option>
                    <option value="45-50">45-50</option>
                </select>
            </div>
        </div>

        <div class="mySlides">
            <div class="background">
                <h2>Testmagasságod?</h2>
                <select name="Testmagasság" id="Testmagasság">
                    <option value="10-15">10-15</option>
                    <option value="15-20">15-20</option>
                    <option value="20-25">20-25</option>
                    <option value="25-30">25-30</option>
                    <option value="30-35">30-35</option>
                    <option value="35-40">35-40</option>
                    <option value="40-45">40-45</option>
                    <option value="45-50">45-50</option>
                </select>
                <h2>Testsúlyod?</h2>
                <select name="Testsúly" id="Testsúly">
                    <option value="10-15">10-15</option>
                    <option value="15-20">15-20</option>
                    <option value="20-25">20-25</option>
                    <option value="25-30">25-30</option>
                    <option value="30-35">30-35</option>
                    <option value="35-40">35-40</option>
                    <option value="40-45">40-45</option>
                    <option value="45-50">45-50</option>
                </select>
                <h2>Célsúlyod?</h2>
                <select name="Célsúly" id="Célsúly">
                    <option value="10-15">10-15</option>
                    <option value="15-20">15-20</option>
                    <option value="20-25">20-25</option>
                    <option value="25-30">25-30</option>
                    <option value="30-35">30-35</option>
                    <option value="35-40">35-40</option>
                    <option value="40-45">40-45</option>
                    <option value="45-50">45-50</option>
                </select>
            </div>
        </div>

        <div class="mySlides">
            <div class="background">
                <h2>Mi a célod?</h2>

                <div class="popup" onclick="myFunction()">Mit jelent ez?
                    <span class="popuptext" id="myPopup">A célod elsősorban a testtömeged növelése az izomtömeg
                        növelésével.</span>
                </div>
                <button class="btn" id="difButton">Testtömegnövelés</button>

                <div class="popup" onclick="myFunction1()">Mit jelent ez?
                    <span class="popuptext" id="myPopup1">A célod elsősorban a sportos, tónusos, atletikusan izmos
                        külső
                        elérése.</span>
                </div>
                <button class="btn" id="difButton">Szálkásítás</button>

                <div class="popup" onclick="myFunction2()">Mit jelent ez?
                    <span class="popuptext" id="myPopup2">A célod elsősorban a testtömeg csökkentése, nincs időd,
                        lehetőséged túl sokat sportolni és nem a sportos
                        külső elérése a célod.</span>
                </div>
                <button class="btn" id="difButton">Fogyás</button>
            </div>
        </div>

        <div class="mySlides">
            <div class="background">
                <h2>Milyen jellegű munkát végzel?</h2>

                <div class="popup" onclick="myFunction3()">Mit jelent ez?
                    <span class="popuptext" id="myPopup3">Inaktív napi rutin, edzés és különösebb fizikai aktivitás
                        nélkül
                        (TV nézés, főzés, maximum
                        kutyasétáltatás).</span>
                </div>
                <button class="btn" id="difButton">Üllőmunka</button>

                <div class="popup" onclick="myFunction4()">Mit jelent ez?
                    <span class="popuptext" id="myPopup4">Ülőmunka, amelyhez heti 2-4 alkalom mozgás társul, esetleg
                        a
                        napi
                        tevékenység tartalmaz könnyű
                        aktivitást.</span>
                </div>
                <button class="btn" id="difButton">Mérsékelten aktív munka</button>

                <div class="popup" onclick="myFunction5()">Mit jelent ez?
                    <span class="popuptext" id="myPopup5">Mozgással járó napi munkavégzés vagy az ülőmunka mellett
                        heti
                        4-5
                        nap intenzív edzésmunka, ami legalább
                        1-1,5
                        órás.</span>
                </div>
                <button class="btn" id="difButton">Aktív munka</button>

                <div class="popup" onclick="myFunction6()">Mit jelent ez?
                    <span class="popuptext" id="myPopup6">Egész napos kemény fizikai munka vagy napi szintű kemény,
                        intenzív
                        edzésmunka, ami legalább 1,5-2 órás.</span>
                </div>
                <button class="btn" id="difButton">Nagyon aktív fizikai munka</button>
            </div>
        </div>

        <div class="mySlides">
            <div class="background">
                <h2>Hányszor edzel egy héten?</h2>
                <button class="btn">Nem edzem rendszeresen</button>
                <button class="btn">1-2 edzés</button>
                <button class="btn">3-5 edzés</button>
                <button class="btn">Több</button>
            </div>
        </div>

        <div class="mySlides">
            <div class="background">
                <h2>Milyen jellegűek az edzéseid?</h2>
                <div class="popup" onclick="myFunction7()">Mit jelent ez?
                    <span class="popuptext" id="myPopup7">Futás, úszás, kerékpározás, spinning, stb.</span>
                </div>
                <button class="btn" id="difButton">Állóképességi edzés</button>
                <button class="btn">Súlyzós, saját testyúlyos edzés</button>
                <button class="btn">Vegyes</button>
            </div>
        </div>

        <div class="mySlides">
            <div class="background">
                <h2>Mióta edzel?</h2>
                <h3>Az elmúlt éveket vedd figyelembe, tehát, ha gyerekkorodban sportoltál, de azóta nem, az nem számít
                    bele.
                </h3>
                <button class="btn">Még nem edzettem</button>
                <button class="btn">1-2 éve edzem</button>
                <button class="btn">3-5 éve edzem</button>
                <button class="btn">Több, mint 6 éve edzem</button>
            </div>
        </div>

        <div class="mySlides">
            <div class="background">
                <h2>Mennyire táplálkozol tudatosan?</h2>
                <h3>Például kimért adagokat eszel, tartod a napi ötszöri étkezést, megválogatod az alapanyagokat, stb.
                </h3>
                <button class="btn">Maximálisan</button>
                <button class="btn">Nagyjából</button>
                <button class="btn">Ritkán</button>
                <button class="btn">Nem figyelek rá</button>
            </div>
        </div>

        <div class="mySlides">
            <div class="background">
                <h2>Vegetáriánus vagy vegán étrend szerint étkezel?</h2>
                <button class="btn">Vegán vagyok</button>
                <button class="btn">Vegetáránus vagyok</button>
                <button class="btn">Nem követem egyik étrendet sem</button>
            </div>
        </div>

        <div class="mySlides">
            <div class="background">
                <h2>Van-e az alábbiak közül ismert ételérzékenységed?</h2>
                <h3>Több választ is bejelölhetsz.</h3>
                <div class="labels">
                    <label for="Gluténérzékenység">Gluténérzékenység</label>
                    <input type="checkbox">
                </div>
                <div class="labels">
                    <label for="Laktózérzékenység">Laktózérzékenység</label>
                    <input type="checkbox">
                </div>
                <div class="labels">
                    <label for="Nincs">Nincs</label>
                    <input type="checkbox">
                </div>
            </div>
        </div>

        <div class="mySlides">
            <div class="background">
                <h2>Hány órát alszol naponta?</h2>
                <button class="btn">6 órónál kevesebbet</button>
                <button class="btn">6 órónál többet</button>
                <button class="btn">Rendszertelenül alszom</button>
            </div>
        </div>

        <div class="mySlides">
            <div class="background">
                <h2>Mennyi folyadékot fogyasztasz naponta?</h2>
                <button class="btn">Kevesebb, mint 1 litert</button>
                <button class="btn">1-2 litert</button>
                <button class="btn">3-4 litert</button>
                <button class="btn">Több, mint 4 litert</button>
                <button class="btn">Nem tudom, nem figyelek rá oda</button>
            </div>
        </div>


        <div class="mySlides">
            <div class="background">
                <h2>Ha nem vagy elégedett a megjelenéseddel, szerinted miért nem?</h2>
                <div class="labels">
                    <label for="Elégedett vagyok">Elégedett vagyok</label>
                    <input type="checkbox">
                </div>
                <div class="labels">
                    <label for="Nem megfelelő táplálkozás">Nem megfelelő táplálkozás</label>
                    <input type="checkbox">
                </div>
                <div class="labels">
                    <label for="Nem megfelelő edzés">Nem megfelelő edzés</label>
                    <input type="checkbox">
                </div>
                <div class="labels">
                    <label for="Nem megfelelő pihenés">Nem megfelelő pihenés</label>
                    <input type="checkbox">
                </div>
                <div class="labels">
                    <label for="Nem megfelelő motiváció">Nem megfelelő motiváció</label>
                    <input type="checkbox">
                </div>
            </div>
        </div>

        <div class="mySlides">
            <div class="background">
                <h1 class="title">Eredmény</h1>
                <table>
                    <tr>
                        <td>Célsúly</td>
                        <td>xxxxxxx</td>
                    </tr>
                    <tr>
                        <td>Ideális testsúly</td>
                        <td>xxxxxxx</td>
                    </tr>
                    <tr>
                        <td>Javasolt napi kalória bevitel</td>
                        <td>xxxxxxxx</td>
                    </tr>
                    <tr>
                        <td>Ajánlott napi folyadékmennyiség</td>
                        <td>xxxxxxxxx</td>
                    </tr>
                </table>
            </div>
        </div>

    </div>

    <div class="BackNext">
        <button class="Back btn" onclick="plusDivs(-1)">❮ Vissza</button>
        <button class="btn" onclick="plusDivs(1)">Tovább ❯</button>
    </div>

    <footer>
        <section class="info-container">
            <div class="info">
                <p class="elerhetoseg">Elérhetőség</p>
                <i class="fas fa-map-marker-alt">
                    <p>Seychelle-szigetek - Vista Do Mar <br> Barra Beach </p>
                </i>
                <i class="fas fa-envelope">
                    <p>
                        info@szfmwellness.hu
                    </p>
                </i>
                <i class="fas fa-mobile-alt">
                    <p>+36-30-123-456-7</p>
                </i>
                <i class="fas fa-door-open">
                    <p>06:00 - 22:00</p>
                </i>

            </div>
        </section>
        <section class="about-container">
            <div class="about">
                <p class="rolunk">Rólunk</p>
                <p class="rolunkszoveg"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor illo qui
                    recusandae natus, atque error deserunt asperiores assumenda consectetur omnis beatae alias adipisci
                    quaerat vel fuga sed minima culpa ipsum. Lorem, ipsum dolor sit
                    amet consectetur adipisicing elit. Distinctio et excepturi error in assumenda doloremque sint
                    tempore, minus labore dolor laborum non fugiat. Fuga doloribus ex voluptatem libero asperiores
                    delectus.......
                </p>
                <p class="bovebben">
                    <a href="">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span> Rólunk
                    </a>
                </p>
            </div>
        </section>
        <section class="message-container">
            <div class="message">
                <p class="contact">Lépjen Kapcsolatba Velünk</p>
                <div class="content">
                    <form action="#">
                        <div class="email">
                            <div class="text">Email *</div>
                            <input class="level" type="email" required>
                        </div>
                        <div class="msg">
                            <div class="text">Message *</div>
                            <textarea class="uzenet" rows="2" cols="25" required></textarea>
                        </div>
                        <div class="kuldes">
                            <button type="submit">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                Küldés</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <section class="social-text-container">
            <div class="social-effect">
                <p><span>Social links</span></p>
            </div>
        </section>
        <section class="social-link-container">
            <div class="social-container">

                <ul>
                    <li><a href=""><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href=""><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                    <li><a href=""><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href=""><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href=""><i class="fab fa-tiktok" aria-hidden="true"></i></a></li>
                    <li><a href=""><i class="fab fa-pinterest" aria-hidden="true"></i></a></li>
                </ul>

            </div>
        </section>
        <section class="termprivacy-container">
            <div class="rule-container">
                <p>terms &#124; privacy </p>
            </div>
        </section>
    </footer>

    <script>
        //Slides
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function currentDiv(n) {
            showDivs(slideIndex = n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            if (n > x.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = x.length }
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" w3-red", "");
            }
            x[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " w3-red";
        }
    </script>
    <script>
        //PopUp
        // When the user clicks on div, open the popup
        function myFunction() {
            var popup = document.getElementById("myPopup");
            popup.classList.toggle("show");
        }
        function myFunction1() {
            var popup = document.getElementById("myPopup1");
            popup.classList.toggle("show");
        }
        function myFunction2() {
            var popup = document.getElementById("myPopup2");
            popup.classList.toggle("show");
        }
        function myFunction3() {
            var popup = document.getElementById("myPopup3");
            popup.classList.toggle("show");
        }
        function myFunction4() {
            var popup = document.getElementById("myPopup4");
            popup.classList.toggle("show");
        }
        function myFunction5() {
            var popup = document.getElementById("myPopup5");
            popup.classList.toggle("show");
        }
        function myFunction6() {
            var popup = document.getElementById("myPopup6");
            popup.classList.toggle("show");
        }
        function myFunction7() {
            var popup = document.getElementById("myPopup7");
            popup.classList.toggle("show");
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="../../assets/js/szolgaltatas_oldalak_js/uszoda.js"></script>
    <script>
        // Add active class to the current button (highlight it)
        var header = document.getElementById("myDIV");
        var btns = header.getElementsByClassName("btn");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function () {
                var current = document.getElementsByClassName("active");
                if (current.length > 0) {
                    current[0].className = current[0].className.replace(" active", "");
                }
                this.className += " active";
            });
        }
    </script>
</body>

</html>
