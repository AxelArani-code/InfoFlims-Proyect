<?php
// Initialize the session
session_start();
$id=$_REQUEST['info_id'];
$title=$_REQUEST['title'];
$descriptions=$_REQUEST['descriptions'];
$imagenes=$_REQUEST['imagenes'];
$trailer=$_REQUEST['trailer'];
$genero=$_REQUEST['genero'];
$audio=$_REQUEST['audio'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Inicio</title>
  <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
  <link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i">
  <link rel="stylesheet" href="../../assets/css/Card-Carousel-1.css">
  <link rel="stylesheet" href="../../assets/css/Card-Carousel.css">
  <link rel="stylesheet" href="../../assets/css/News-Cards.css">
  <link rel="stylesheet" href="./php/registered.php">
  <style type="text/css">
    body {
      font: 14px sans-serif;
      text-align: center;
    }
  </style>
  <style >
    #form {
  width: 250px;
  margin: 0 auto;
  height: 50px;
}

#form p {
  text-align: center;
}

#form label {
  font-size: 20px;
}

input[type="radio"] {
  display: none;
}

label {
  color: grey;
}

.clasificacion {
  direction: rtl;
  unicode-bidi: bidi-override;
}

label:hover,
label:hover ~ label {
  color: orange;
}

input[type="radio"]:checked ~ label {
  color: orange;
}
  </style>
</head>

<body>
<nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark navbar-custom">
    <div class="container">
      <button data-toggle="collapse" class="navbar-toggler" data-target="#navbarResponsive"><span
        class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="nav navbar-nav ml-auto">
              <li class="nav-item dropdown">
            <a class="btn btn-outline-primary" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
              aria-expanded="false">Iniciar Sesión</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" role="presentation" href="../../login.php">Usuario</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" role="presentation" href="../../loginAd.php">Admin</a>
            </div>
          </li>
         
        </ul>
      </div>
    </div>
  </nav><br><br><br><br><br><br>

<div class="container">
<!-- Button trigger modal -->
<div class="mb-3" style="max-width: 2040px;">
  <div class="row no-gutters">
    <div class="col-md-4" style="border-radius: 25px;">
      <img src="<?php echo '../.././assets/img/ '. $imagenes?>" class="card-img " alt="..." style="border-radius: 25px;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <p class="display-4"><?php echo $title?></p>
        <p class="card-text"><?php echo $descriptions?></p>
        <p><strong>Idioma: </strong> <?php echo $audio?> </p>
        <p><strong>Genero: </strong> <?php echo $genero?> </p>
        <form>
          <p class="clasificacion">
            <input id="radio1" type="radio" name="estrellas" value="5"><!--
            --><label for="radio1">★</label><!--
            --><input id="radio2" type="radio" name="estrellas" value="4"><!--
            --><label for="radio2">★</label><!--
            --><input id="radio3" type="radio" name="estrellas" value="3"><!--
            --><label for="radio3">★</label><!--
            --><input id="radio4" type="radio" name="estrellas" value="2"><!--
            --><label for="radio4">★</label><!--
            --><input id="radio5" type="radio" name="estrellas" value="1"><!--
            --><label for="radio5">★</label>
          </p>
        </form>
        <p class="card-text"><small class="text-muted h6">Trailer...</small></p>
        <div  style="border-radius: 25px;" class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="<?php echo$trailer?>" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<nav aria-label="Page navigation example">
  <div class="container ">
       <div class="col-md-6 col-lg-8 mx-auto pagination justify-content-center">
              <br><br>
              <p class="copyright text-muted text-center">InfoFlims 2020 |
             <a  class="" href="contact.html"><strong>Contactarnos</strong></a></p>
            </div>
      </div>
   </nav>


   <script>
      function myFunction(){alert("Hola, para poder ingresar deberá registrarse, antes que nada. Gracias ");}
    </script>
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../assets/js/Card-Carousel.js"></script>

</body>

</html>