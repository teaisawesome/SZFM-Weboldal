<header class="borito-fasz">
    <div class="borito-img-fasz">
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
                    <li><a href="">Fórum</a></li>
                    <li><a href="">Kapcsolat</a></li>
                    <li><a href="">Szolgáltatások</a></li>
                    <li><a href="">Rólunk</a></li>
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
        </nav>
    </div>
</header>