<?php 
  if(isset($_POST['exit']))
  {
    session_destroy();
    header("Location: http://localhost/SZFM-Weboldal/app/");
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SZFM - Profil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/homestyle.css">
    <link rel="stylesheet" href="assets/css/profilestyle.css">
    </head>
  <body>
    <?php 
      require "template/navtemp.php";
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 img-section">
                <img id="profile-img" src="datas/pictures/<?php 
                    echo $this->user->getImage();               
                ?>" alt="" width="150" height="150">
            </div>
        </div>
        <div class="row profile-row">
            <div class="col-md-6">
              <div class="profile-info-section">
                <h5><strong>Név:</strong> <?php echo $this->user->getName(); ?></h5>
              </div>
            </div>
            <div class="col-md-6">
              <div class="profile-info-section">
                <h5><strong>Email:</strong> <?php echo $this->user->getEmail(); ?></h5>
              </div>
            </div>
            <div class="col-md-4">
              <div class="profile-info-section">
                <h5><strong>Lakcím:</strong> <?php echo $this->user->getAddress(); ?></h5>
              </div>
            </div>
            <div class="col-md-4">
              <div class="profile-info-section">
                <h5><strong>Kártya:</strong> <?php 
                $card = $this->user->getCard();
                
                if($card)
                {
                  echo $card;
                }
                else
                {
                  echo "Nincs megadva.";
                }
                
                ?></h5>
              </div>
            </div>
            <div class="col-md-4">
              <div class="profile-info-section">
                <h5><strong>Telefonszám:</strong> <?php echo $this->user->getPhone(); ?></h5>
              </div>
            </div>
        </div>
        <form action="" method="post">
        <div class="row profile-row text-center p-5">
            <div class="col-md-6 profile-button">
                <button class="btn btn-warning">Adataim szerkesztése</button>
            </div>
            <div class="col-md-6 profile-button">
                <input class="btn btn-info" name="exit" type="submit" value="Kilépés">
            </div>
        </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
  </html>