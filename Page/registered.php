<?php
// Initialize the session
session_start();
$conexion = mysqli_connect("localhost", "root", "", "demo");
// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
  header("location: login.php");
  exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Inicio</title>
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
  <link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i">
  <link rel="stylesheet" href="../assets/css/Card-Carousel-1.css">
  <link rel="stylesheet" href="../assets/css/Card-Carousel.css">
  <link rel="stylesheet" href="../assets/css/News-Cards.css">
  <link rel="stylesheet" href="./php/registered.php">
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
      <p class="navbar-brand">Hola,<b><?php echo htmlspecialchars(
          $_SESSION["username"]
        ); ?></b>.</p><button data-toggle="collapse" class="navbar-toggler" data-target="#navbarResponsive"><span
          class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="nav navbar-nav ml-auto">
          <li class="nav-item" role="presentation"><a class="nav-link" href="registered.php">Peliculas</a></li>
          <li class="nav-item" role="presentation"><a class="nav-link" href="netflix.php">Netflix</a></li>
          <li class="nav-item" role="presentation"><a class="nav-link" href="series.php">Series</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
              aria-expanded="false">Usuarios</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" role="presentation" href="../Page/perfil.php"  >Perfil</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" role="presentation" href="../logout.php">Cerrar sesión</a>
            </div>
          </li>
          <div class="btn-group" role="group">
            <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Español
            </button>
            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
              <a class="dropdown-item" href="../Inglish/Home.php">English</a>
            </div>
          </div>
        </ul>
      </div>
    </div>
  </nav>
  <header class="masthead text-center text-white">
    <div class="masthead-content">
      <div class="container">
        <h1 class="masthead-heading mb-0">Los mejores estrenos que veras</h1><a
          class="btn btn-primary btn-xl rounded-pill mt-5" role="button" href="estrenos.php">Estrenos</a>
      </div>
    </div>
    <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>
  </header>
  <br><br>
  
  <div class="masthead-content">
    <div class="container">
      <h1 class="masthead-heading mb-0">Destacados</h1><br><br>
    </div>

    
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
            <img src="<?php echo '.././assets/img/ ' .$mostrar['imagenes'] ?>" alt="pr-sample23" /></div>
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
            <p class="copyright text-muted text-center">InfoFlims 2020 | Diseñor web por<a href="https://energia-p.000webhostapp.com/">Axel Aranibar</a></p>
            <a href="contact.html"><strong>Contactarnos</strong></a><br><br><br>
          </div>
    </div>

    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/Card-Carousel.js"></script>

</body>

</html>