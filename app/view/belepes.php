<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/belepes.css">
    <title>Belépés</title>
</head>

<body>
    <form method="post" action="/SZFM-Weboldal/app/loginservice">
        <header class="content">
            <h1>Belépés</h1>
            <h1>Belépés</h1>
        </header>
        <section>
            <h2 class="errorMessage">
            <?php 
                if(isset($_SESSION['login_errors']['loginErrorMessage']))
                {
                    echo $_SESSION['login_errors']['loginErrorMessage'];
                }
            ?>
            </h2>
            <div class="belepes-form-control">
                <input type="text" name="email" required>
                <label for="">E-mail cím</label>
                <h3 class="errorMessage">
                <?php 
                    if(isset($_SESSION['login_errors']['emailErrorMessage']))
                    {
                        echo $_SESSION['login_errors']['emailErrorMessage'];
                    }
                ?>
                </h3>
            </div>
            <div class="belepes-form-control">
                <input type="password" name="password" required>
                <label for="">Jelszó</label>
            </div>
        </section>
        <footer>
            <button type="submit" id="belep" required>
            <span></span>
            <span></span>
            <span></span>
            <span></span>Belépés
        </button>
        </footer>
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TimelineMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
    <script src="assets/js/anime.min.js"></script>
    <script src="assets/js/bel.js"></script>
</body>
</html>