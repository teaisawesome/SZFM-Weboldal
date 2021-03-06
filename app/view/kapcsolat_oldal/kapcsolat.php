<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/kapcsolat_oldal/owl.carousel.min.css">


    <link rel="stylesheet" href="assets/css/kapcsolat_oldal/kapcsolat.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="assets/js/kapcsolat_oldal/owl.carousel.min.js"></script>

    <title>Kapcsolat</title>
</head>

<body>
    <nav>
        <div class="topmenu">
        <div class="logo">
                        <img src="datas/pictures/logo.png" alt="" width="80" height="80">
                    </div>
            <label for="btn" class="icon">
            <span class="fa fa-bars"></span>
        </label>
            <input class="csekk" type="checkbox" id="btn">
            <ul>
            <li><a href="http://localhost/SZFM-Weboldal/app/contact">Kapcsolat</a></li>
                        <li><a href="http://localhost/SZFM-Weboldal/app/services">Szolgáltatások</a></li>
                        <li><a href="http://localhost/SZFM-Weboldal/app/about">Rólunk</a></li>
                            <?php 
                                if(isset($_SESSION['logged']))
                                {
                                    echo "<li id='nav-email'><a href='http://localhost/SZFM-Weboldal/app/profile'>" . $_SESSION['user'] . "</a></li>";
                                }
                                else
                                {
                                    echo "<li><a href='http://localhost/SZFM-Weboldal/app/login'>Belépes</a></li>";
                                    echo "<li><a href='http://localhost/SZFM-Weboldal/app/registration'>Regisztráció</a></li>";
                                }
                            ?>
            </ul>
        </div>
    </nav>
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe width="450" height="620" id="gmap_canvas" src="https://maps.google.com/maps?q=seychelles%20Vista%20do%20mar&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                            </iframe>
                            <a href="https://www.whatismyip-address.com/nordvpn-coupon/">nordvpn discounts</a>
                        </div>
                    </div>
                </div>


                <div class="col-md-7">
                    <div class="owl-carousel owl-theme">

                        <div class="content">
                            <h3><b>Kapcsolat</b></h3>
                            <br>
                            <span class="sub-title">
                                SZFM WELNESS KÖZPONt
                             </span>
                            <p class="pb-10">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa facere adipisci architecto eligendi ratione optio molestiae amet unde eius impedit?
                            </p>
                            <br>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque explicabo inventore eligendi earum debitis natus.
                            </p>
                            <br><br><br>

                            <div class="info">
                                <ul>
                                    <li>
                                        <span class="title">Elérhetőség</span>
                                        <span class="value">Seychell szigetek - Vista Do Mar - Barra Beach</span>
                                    </li>

                                    <li>
                                        <span class="title">Email</span>
                                        <span class="value">info@szfmwellness.hu</span>
                                    </li>

                                    <li>
                                        <span class="title">Nyitvatartás</span>
                                        <span class="value">06:00 - 22:00</span>
                                    </li>

                                    <li>
                                        <span class="title">Telefon</span>
                                        <span class="value">+36-30-123-456-7</span>
                                    </li>
                                </ul>

                                <div class="social-icon">
                                    <a href="">
                                        <span><i class="fab fa-facebook"></i></span>

                                    </a>

                                    <a href="">
                                        <span><i class="fab fa-twitter"></i></span>

                                    </a>


                                    <a href="">
                                        <span><i class="fab fa-instagram"></i></span>

                                    </a>

                                    <a href="">
                                        <span><i class="fab fa-pinterest"></i></span>

                                    </a>

                                    <a href="">
                                        <span><i class="fab fa-youtube"></i></span>

                                    </a>

                                </div>

                            </div>

                        </div>


                        <div class="content">
                            <h3><b>Keressen minket bátran</b></h3>
                            <br>
                            <span class="sub-title">SZFM WELNESS KÖZPONT</span>

                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic optio, aperiam! Provident quis enim nemo earum unde ducimus culpa quidem.
                            </p>


                            <br><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="feature-box">
                                        <i class="fas fa-question"></i>
                                        <div class="feature-content">
                                            <h5>GYIK</h5>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus nulla ipsum eaque optio consequuntur sequi.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="feature-box">
                                        <i class="fa fa-feather"></i>
                                        <div class="feature-content">
                                            <h5>Válaszok</h5>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus nulla ipsum eaque optio consequuntur sequi.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="feature-box">
                                        <i class="fa fa-wifi"></i>
                                        <div class="feature-content">
                                            <h5>Hálózat</h5>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus nulla ipsum eaque optio consequuntur sequi.
                                            </p>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="feature-box">
                                        <i class="fa fa-helicopter"></i>
                                        <div class="feature-content">
                                            <h5>Megközelíthetőség</h5>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus nulla ipsum eaque optio consequuntur sequi.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div style="margin-top: 10px;"></div>
                            <div class="mt-10">
                                <a href="">
                                    <span class="btn btn-danger">Írjon Nekünk</span>
                                </a>
                            </div>

                        </div>


                    </div>
                </div>



            </div>
        </div>



    </section>
    <script>
        jQuery(document).ready(function() {

            $('.contact .owl-carousel').owlCarousel({
                items: 1,
                loop: true,
                autoplay: true,
                smartSpeed: 500,
                dots: false


            });

        });
    </script>
</body>

</html>