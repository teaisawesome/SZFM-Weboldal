
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/szolgaltatasok_osszessege_css/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/szolgaltatasok_osszessege_css/szolgaltatasok.css">
    <title>Szolgáltatások</title>
</head>

<body>
    <nav class="nav-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-3">
                    <div class="logo">
                        <a href="">Logo</a>
                        <label for="btn" class="icon">
                            <span class="fa fa-bars"></span>
                        </label>
                    </div>

                </div>


                <div class="col-xl-9">

                    <div class="menu">
                        <input class="csekk" type="checkbox" id="btn">

                        <ul>

                        <li><a href="forum">Fórum</a></li>
                        <li><a href="contact">Kapcsolat</a></li>
                        <li><a href="services">Szolgáltatások</a></li>
                        <li><a href="about">Rólunk</a></li>
                            <?php 
                                if(isset($_SESSION['logged']))
                                {
                                    echo "<li id='nav-email'><a href='profile'>" . $_SESSION['user'] . "</a></li>";
                                }
                                else
                                {
                                    echo "<li><a href='login'>Belépes</a></li>";
                                    echo "<li><a href='registration'>Regisztráció</a></li>";
                                }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <section class="slider-area owl-carousel">
        <div class="single-slide-szauna">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slide-content-szauna">
                            <h2>Szauna</h2>
                            <h4>Mikor és Miért?</h4>
                            <p>A szauna elsősorban télen kellemes, de a finnek nyáron is használják. Számukra a hagyományos belföldi vakáció az, hogy kimennek a mökkibe, horgásznak, kirándulnak, grilleznek, és természetesen szaunáznak is.....
                            </p>
                            <a class="szaunaref" href="services/szauna">Bővebben</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slide-sobarlang">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slide-content-sobarlang">
                            <h2>Sóbarlang</h2>
                            <h4>Kinek ajánljuk?</h4>
                            <p>A só gyógyító erejét a II. világháború végén is megfigyelték, az óvóhelyként használt sóbányákban. Nem sokkal ezután asztmatikus szanatóriumokat nyitottak meg németországi, svájci .. természetes sóbarlangokban....</p>
                            <a class="sobarlangref" href="services/sobarlang">Bővebben</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slide-halpedikur">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slide-content-halpedikur">
                            <h2>Halpedikűr</h2>
                            <h4>Pedikűr és Nevetés</h4>
                            <p>Halpedikűr elterjedése konkrétan nem meghatározható csak vissza tekintve a Garra Rufa halak "tudása" tulajdonsága és származása amely pontosan vissza vezethető. Halpedikűrt megelőzte a halak gyógyászati hasznának vizsgálata....</p>
                            <a class="halpedikurref" href="services/halpedikur">Bővebben</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slide-uszoda">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slide-content-uszoda">
                            <h2>Uszoda</h2>
                            <h4>Nyugalom és testedzés</h4>
                            <p>SZFM komplexumunkban, a pihenés mellett formába is hozhatja magát, hála a negyven emeletes 100x100-as medencéknek, ahol naponta több mint 100.000 ember úszkál oda vissza. Az úszómesteri pozícióra még mindig van felvétel......</p>
                            <a class="uszodaref" href="services/uszoda">Bővebben</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slide-teknos">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slide-content-teknos">
                            <h2>Teknős Simogató</h2>
                            <h4>Felnőtteknek - Gyerekeknek</h4>
                            <p>Ha még nem simogatott teknőst mert nem talált megfelelő helyet, hogy ki élje belső békességének megtestesítő vágyait akkor itt a nagy alkalom, hogy hatalmas teknősöket simogasson és etessen, hisz nálunk több mint 3 millió......</p>
                            <a class="teknosref" href="services/teknos">Bővebben</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slide-buvar">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slide-content-buvar">
                            <h2>Mélyvízi Búvárkodás</h2>
                            <h4>Izgalom és Szépség</h4>
                            <p>A csendes óceán felét megvettük, így kedvükre úszkálhatnak a felénk betérő vendégek, kik rendelkeznek a megfelelő papírral. Sikeresen betelepítettünk 100 millió elektromos angolnát körzetünkbe, így egy kis izgalmat is vittünk.....</p>
                            <a class="buvarref" href="services/melyviz">Bővebben</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slide-terem">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slide-content-terem">
                            <h2>Étterem</h2>
                            <h4>Kaja és Pia</h4>
                            <p>Éttermünkben minden fogásban megtalálja a mediterrán érzést.</p>
                            <a class="teremref" href="services/edzoterem">Bővebben</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slide-terem">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slide-content-terem">
                            <h2>Edzőterem</h2>
                            <h4>Erő és Egyensúly</h4>
                            <p>Nem vagy elég fáradt? Hát most az leszel. Lovász fiúk képzett ostoros edzéstervet állítanak össze bárkinek aki betér. Mai napig nem érkezett panasz, egyben mindenki le is fogyott az általa vágyott testsúlyra....</p>
                            <a class="teremref" href="services/edzoterem">Bővebben</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slide-terem">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slide-content-terem">
                            <h2>Kalkulátor</h2>
                            <h4>Erő és Egyensúly</h4>
                            <p>Nem vagy elég fáradt? Hát most az leszel. Lovász fiúk képzett ostoros edzéstervet állítanak össze bárkinek aki betér. Mai napig nem érkezett panasz, egyben mindenki le is fogyott az általa vágyott testsúlyra....</p>
                            <a class="teremref" href="services/calculator">Bővebben</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="assets/js/szolgaltatasok_osszessege_js/owl.carousel.min.js"></script>
    <script src="assets/js/szolgaltatasok_osszessege_js/szolgaltatasok.js"></script>

</body>

</html>

</html>