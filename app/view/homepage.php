<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="assets/css/HomePageStyle.css">
      <title>SZFM</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link rel="stylesheet" href="assets/css/homestyle.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

      <link rel="stylesheet" href="assets/css/homefooterstyle.css">
  </head>
  <body>
    <div class="bgimg1 w3-display-container w3-animate-opacity w3-text-white">
    <?php 
      require "template/navtemp.php";
    ?>
      <div class="w3-display-middle">
        <!--<h1 class="title1 w3-animate-top">SZFM Wellness Centrum</h1>-->
      </div>
    </div> 
    <div class="container-fluid">
      <div class="row history">
        <div class="col-md-12 text-center">
          <h1><strong>Történetünk</strong></h1>
          <h5 class="mt-5">
            Az SZFM Egyészségközpont 1985-ben nyitotta meg kapuit és azóta kiemelkedő magas szolgáltatásokat nyújt a pihenni és sportolni vágyóknak.
          </h5>
        </div>
        <div class="col-md-12">
          <button class="btn btn-info mt-3 about-hp-btn">Rólunk Bővebben</button>
        </div>
        </button>
      </div>
    </div>
    <div class="row text-center p-5 vector-container">
      <div class="col-md-3">
        <img class="icons" src="resources/images/premium-quality.png" alt="" width="150" height="150">
        <p class="szoveg">Premium minőségű szolgáltatások</p>
      </div>
      <div class="col-md-3">
        <img  class="icons"src="resources/images/island.png" alt="" width="150" height="150">
        <p  class="szoveg">Pihenjen egy luxus szigeten</p>
      </div>
      <div class="col-md-3">
        <img  class="icons"src="resources/images/mai-thai.png" alt="" width="150" height="150">
        <p  class="szoveg">Karibi étel/ital kínálat</p>
      </div>
      <div class="col-md-3">
        <img  class="icons" src="resources/images/fitness.png" alt="" width="150" height="150">
        <p  class="szoveg">Sportolási lehetőségek széles skálája</p>
      </div>
    </div>
    <div class="row px-3">
      <div class="col-md-4 csempek elso"></div>
      <div class="col-md-4 csempek masodik"></div>
      <div class="col-md-4 csempek harmadik"></div>
    </div>
    <div class="row">
      <div class="col-md-4 csempek negyedik"></div>
      <div class="col-md-4 csempek otodik"></div>
      <div class="col-md-4 csempek hatodik"></div>
    </div>
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
                <p class="rolunk">Infók</p>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>