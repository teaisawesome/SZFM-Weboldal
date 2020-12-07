<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/szolgaltatas_oldalak/melyviz.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <title>Buvar</title>
</head>

<body>
    <header class="borito">
        <div class="borito-img">
        <nav>
                <div class="topmenu">
                    <div class="logo">
                        <img src="../datas/pictures/logo.png" alt="" width="80" height="80">
                    </div>
                    <label for="btn" class="icon">
                        <span class="fa fa-bars"></span>
                    </label>
                    <input class="csekk" type="checkbox" id="btn">
                    <ul>
                        <li><a href="http://localhost/SZFM-Weboldal/app/forum">Fórum</a></li>
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
                    </ul>
                </div>
            </nav>
            <div class="cim">
                <h1>BúvárHuszárok</h1>
                <h3>Aquam abyssi tribuo</h3>
            </div>
        </div>
    </header>
    <main>
        <div class="szovegresz">
            <div class="kor kor1">
                <img src="../resources/images/szolgaltatas_oldalak_images/buvarbal.jpg" alt="">
            </div>
            <div class="kor kor2">
                <img src="../resources/images/szolgaltatas_oldalak_images/buvarjobb.jpg" alt="">
            </div>
            <div class="tartalom">
                <h2>Altum natare non perimus</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam odio possimus ipsa officia, est mollitia sapiente quia cupiditate sequi magni. Exercitationem minus, dolor doloremque aspernatur veritatis vel atque eligendi modi. Lorem ipsum
                    dolor sit amet consectetur adipisicing elit. Necessitatibus dignissimos a suscipit eum! Cum quia maiores adipisci non, perspiciatis laboriosam dolore doloribus tenetur nisi aperiam, debitis hic nihil omnis blanditiis. Lorem ipsum dolor
                    sit amet consectetur adipisicing elit. Quae hic officiis repudiandae reiciendis cumque repellat. In praesentium, beatae a ratione nobis odio id iste quis quos est fugit dolorum nemo. Lorem, ipsum dolor sit amet consectetur adipisicing
                    elit. Tempora sit nam itaque nulla ipsa est porro quos maiores consectetur beatae at laboriosam commodi doloribus accusantium illum, veniam hic alias corporis. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis quam molestias
                    ab dolor natus vitae ullam saepe iusto doloribus minima. In voluptates beatae, sed quas quae eaque nobis quam quaerat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt ipsa veritatis inventore velit autem minus nam
                    officiis quia perferendis in, ullam blanditiis a sunt iste distinctio eos numquam ut iusto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo omnis qui quia, ipsam nostrum, ducimus minus ea aliquid impedit atque repudiandae
                    dignissimos velit corrupti dolor, id consectetur voluptatibus magni voluptate! Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis tenetur dicta, est exercitationem ut iste labore esse incidunt id recusandae necessitatibus.
                    Labore suscipit sit esse hic veritatis fuga reiciendis ex. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita blanditiis modi culpa libero qui aperiam in consectetur veniam adipisci molestiae! Tempore similique autem
                    saepe dignissimos officiis iure fuga veritatis tempora. Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, eaque! Illum beatae obcaecati qui nihil repudiandae, aperiam ipsum harum doloribus inventore magnam ex nesciunt
                    dicta rerum rem? Voluptates, fugiat quas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, veniam reiciendis! Itaque porro voluptate dignissimos quis doloribus minima nobis nemo, optio, magnam perferendis soluta tempore
                    deserunt praesentium, aliquid voluptas voluptatem?</p>
            </div>
        </div>
    </main>
    <section>
        <div class="page-wrapper">
            <div class="post-slider">
                <h1 class="slider-title">Galéria</h1>
                <i class="fa fa-chevron-left prev"></i>
                <i class="fa fa-chevron-right next"></i>
                <div class="post-wrapper">

                    <div class="post">
                        <img src="../resources/images/szolgaltatas_oldalak_images/buvargaleria.jpg" alt="" class="slider-image">
                    </div>
                    <div class="post">
                        <img src="../resources/images/szolgaltatas_oldalak_images/buvargaleria.jpg" alt="" class="slider-image">

                    </div>
                    <div class="post">
                        <img src="../resources/images/szolgaltatas_oldalak_images/buvargaleria.jpg" alt="" class="slider-image">

                    </div>
                    <div class="post">
                        <img src="../resources/images/szolgaltatas_oldalak_images/buvargaleria.jpg" alt="" class="slider-image">

                    </div>
                    <div class="post">
                        <img src="../resources/images/szolgaltatas_oldalak_images/buvargaleria.jpg" alt="" class="slider-image">

                    </div>
                    <div class="post">
                        <img src="../resources/images/szolgaltatas_oldalak_images/buvargaleria.jpg" alt="" class="slider-image">

                    </div>
                    <div class="post">
                        <img src="../resources/images/szolgaltatas_oldalak_images/buvargaleria.jpg" alt="" class="slider-image">

                    </div>
                    <div class="post">
                        <img src="../resources/images/szolgaltatas_oldalak_images/buvargaleria.jpg" alt="" class="slider-image">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <section class="info-container">
            <div class="info">
                <p class="elerhetoseg">Elérhetőség</p>
                <i class="fas fa-map-marker-alt">
                    <p>Seychelle-szigetek - Vista Do Mar <br> Barra Beach </p></i>
                <i class="fas fa-envelope"><p>
                    info@szfmwellness.hu
                </p></i>
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
                <p class="rolunkszoveg"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor illo qui recusandae natus, atque error deserunt asperiores assumenda consectetur omnis beatae alias adipisci quaerat vel fuga sed minima culpa ipsum. Lorem, ipsum dolor sit
                    amet consectetur adipisicing elit. Distinctio et excepturi error in assumenda doloremque sint tempore, minus labore dolor laborum non fugiat. Fuga doloribus ex voluptatem libero asperiores delectus.......
                </p>
                <p class="bovebben">
                    <a href="">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span> Bővebben
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="../assets/js/szolgaltatas_oldalak_js/melyviz.js"></script>
</body>