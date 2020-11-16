<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>SZFM - Profil</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        .profile-container
        {
            width: 70%;
            height: 100%;
            background-color: red;
            margin: 0 auto;
            margin-top: 3rem;
            padding: 2rem;
            text-align: center;
        }
        img
        {
            display: block;
            margin: 0 auto;
            border-radius: 90px;
        }
    </style>

    </head>
  <body>
    <div class="container">
        <div class="row">
            <h2>
                asd
            </h2>
            <h2>asd</h2>
            <div class="profile-container">
                <img src="datas/pictures/<?php 
                    echo $this->user->getImage();               
                ?>" alt="" width="150" height="150">
                <h3>Név: <?php echo $this->user->getName(); ?></h3>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
  </html>