<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    
<!--Boostrap-->

    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i">
    <link rel="stylesheet" href="../assets/css/Card-Carousel-1.css">
    <link rel="stylesheet" href="../assets/css/Card-Carousel.css">
    <link rel="stylesheet" href="../assets/css/News-Cards.css">
   

    <link rel="stylesheet" href="../assets/css/Carousel-Hero.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>

<div class="mx-auto" style="width: 200px;">
<div class="card" style="width: 18rem;">
  <img src="../assets/img/animation_500_ke955lte.gif" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Gracias por elegirnos  </h5>
    <p class="card-text">Esperamos que le haya gustado nuestro contenido. Y síganos visitando para mayor contenido. Comparta en sus redes sociales para aumentar esta comunidad y recibir nuevas notificaciones. </p>
    <a href="../series.php" class="btn btn-primary">Volver</a>

    <div class="btn-group" role="group">
                      <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Compartir
                      </button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <a class="dropdown-item" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Faxeelll1513.000webhostapp.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Facebook</a>
                          <a class="dropdown-item" href="https://twitter.com/compose/tweet/">twitter</a>
                          <a class="dropdown-item" href="https://www.instagram.com/?hl=es-la">instagram</a>
                    </div>
  </div>
</div>
</div>




    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/Card-Carousel.js"></script>
  
</body>
</html>