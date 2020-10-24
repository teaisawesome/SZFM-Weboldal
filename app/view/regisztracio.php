<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/regisztracio.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Regisztracio</title>
</head>

<body>
    <form>
        <header class="content">
            <h1>Regisztráció</h1>
            <h1>Regisztráció</h1>
        </header>
        <section>
            <div class="elofizet">
                <p>Előfizet az extra szolgáltatásra?</p>
                <div>
                    <label id="checkboxLabel">
                    <input id="elofizetek" type="radio" name="pay">
                    <i class="fa fa-check" aria-hidden="true"></i>
                </label>
                    <label id="checkboxLabel">
                    <input id="nemfizet" type="radio" name="pay">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </label>
                    <div id="bankszam" class="regisztracio-form-control">
                        <input type="text" required>
                        <label for="">Bankkártyaszám</label>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="regisztracio-form-control">
                <input type="text" name="vezeteknev" required>
                <label for="">*Vezetéknév</label>
            </div>
            <div class="regisztracio-form-control">
                <input type="text" name="keresztnev" required>
                <label for="">*Keresztnév</label>
            </div>
            <div class="regisztracio-form-control">
                <input type="password" name="jelszo" required>
                <label for="">*Jelszó</label>
            </div>
            <div class="regisztracio-form-control">
                <input type="text" name="email" required>
                <label for="">*E-mail cím</label>
            </div>
            <div class="regisztracio-form-control">
                <input type="text" name="lakcim" required>
                <label for="">*Lakcím</label>
            </div>
            <div class="regisztracio-form-control">
                <input type="text" name="telefonszam" required>
                <label for="">*Telefonszám</label>
            </div>
        </section>
        <section>
            <div class="feltoltes">

                <input type="file" name="inpFile" id="inpFile">
                <label for="inpFile" id="browse">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <p>Profilkép kiválasztása...</p></label>
                <div class="image-preview" id="imagePreview">
                    <img src="" alt="Image Preview" class="image-preview__image">
                    <span class="image-preview__default-text"></span>
                </div>
            </div>
        </section>
        <main>
            <button type="submit" id="veglegesit">
            <span></span>
            <span></span>
            <span></span>
            <span></span>Regisztráció
        </button>
        </main>
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TimelineMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
    <script src="assets/js/anime.min.js"></script>
    <script src="assets/js/reg.js"></script>
</body>

</html>