<?php
$conexion = mysqli_connect("localhost", "root", "", "demo");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>InfoFlims</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i">
  <link rel="stylesheet" href="assets/css/Card-Carousel-1.css">
  <link rel="stylesheet" href="assets/css/Card-Carousel.css">
  <link rel="stylesheet" href="assets/css/News-Cards.css">
  <link rel="stylesheet" href="assets/css/News-Cards.css">
  <link rel="" href="./php/inicio.php">
  <style type="text/css">
    body {
      font: 14px sans-serif;
      text-align: center;
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
          <li class="nav-item" role="presentation"><a class="nav-link" href="index.php"
              onclick="myFunction()">Peliculas</a></li>

          <li class="nav-item" role="presentation"><a class="nav-link" href="index.php"
              onclick="myFunction()">Series</a></li>
          <div class="btn-group" role="group">
            <a class="btn btn-outline-primary" href="login.php">Iniciar Sesión</a>
             
          </div>
        </ul>
      </div>
    </div>
  </nav>
  <header class="masthead text-center text-white">
    <div class="masthead-content">
      <div class="container">
        <h1 class="masthead-heading mb-0">Los mejores estrenos que veras</h1>
      </div>
    </div>
    <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>
  </header>
  <br><br>
  <table>
    <?php
    $sql="SELECT*FROM information";
    $resul=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_array($resul)){
    ?>
    <section>
      <div class="container" >

        <figure class="snip1527">
          <div class="image">
            <img src="<?php echo './assets/img/ ' .$mostrar['imagenes'] ?>" alt="pr-sample23" /></div>
          <figcaption>
            <div class="date"><span class="day month"><?php echo $mostrar['dates']?></span> <span class="month"></span></div>
            <h3><?php echo $mostrar['title']?></h3>
            <p><?php echo $mostrar['descriptions']?></p>
            <a href="<?php echo $mostrar['trailer'] ?>" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-secondary btn-sm">Trailer</button></a>
          </figcaption>
        </figure>
    </section>
    <?php
  }?>
  </table>
  <div class="container">
      <div class="col-md-6 col-lg-8 mx-auto">
              <br><br>
              <p class="copyright text-muted text-center">InfoFlims 2020 | Diseñor web por Axel Aranibar</p>
      </div>
  </div>  
    <script>
      function myFunction(){alert("Hola, para poder ingresar deberá registrarse, antes que nada. Gracias ");}
    </script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Card-Carousel.js"></script>
</body>
</html>