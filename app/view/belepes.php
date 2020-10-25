<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/belepes.css">
    <title>Belépés</title>
</head>

<body>
    <form>
        <header class="content">
            <h1>Belépés</h1>
            <h1>Belépés</h1>
        </header>
        <section>
            <div class="belepes-form-control">
                <input type="text" name="email" required>
                <label for="">E-mail cím</label>
            </div>
            <div class="belepes-form-control">
                <input type="password" name="jelszo" required>
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
            <h5 id="errorMessage">Hibás e-mail / jelszó</h5>
        </footer>
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TimelineMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
    <script src="assets/js/anime.min.js"></script>
    <script src="assets/js/bel.js"></script>
</body>
</html>