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
  <html>
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Inicio</title>
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i">
  <link rel="stylesheet" href="../assets/css/Card-Carousel-1.css">
  <link rel="stylesheet" href="../assets/css/Card-Carousel.css">
  <link rel="stylesheet" href="../assets/css/News-Cards.css">

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
      <p class="navbar-brand">Hola,<b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>.</p><button
        data-toggle="collapse" class="navbar-toggler" data-target="#navbarResponsive"><span
          class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="nav navbar-nav ml-auto">
        <li class="nav-item" role="presentation"><a class="nav-link" href="registered.php">Inicio</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
              aria-expanded="false">Apartados</a>
            <div class="dropdown-menu">

              <a class="dropdown-item" role="presentation" href="netflix.php">Netflix</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" role="presentation" href="series.php">HBO</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" role="presentation" href="MostRecent.php">Proximamente</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
              aria-expanded="false">Usuarios</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" role="presentation" href="../Page/perfil.php">Perfil</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" role="presentation" href="../logout.php">Cerrar sesión</a>
            </div>
          </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                aria-expanded="false">Español</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" role="presentation" href="../Inglish/Home.php">Ingles</a>
              </div>
          </li>
          <li class="nav-item" role="presentation"><a class="nav-link" href="./Component/ayuda.php">Ayuda</a></li>
          </div>
        </ul>
      </div>
    </div>
  </nav>
  <br><br><br><br>

  <div class="masthead-content">
    <div class="container">
      <h1 class="masthead-heading mb-0"></h1><br><br>
    </div>

    <table>
    <?php
    $sql="SELECT*FROM netflix";
    $resul=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_array($resul)){
    ?>
    <section>
      <div class="container">

        <figure class="snip1527" style="border-radius: 25px; height: 500px; width: 500px;">
          <div class="image">
            <img src="<?php echo'.././assets/img/ '. $mostrar['imagenes'] ?>" alt="pr-sample23" /></div>
          <figcaption>
            <div class="date"><span class="day month"><?php echo $mostrar['dates']?></span> <span class="month"></span></div>
            <h3><?php echo $mostrar['title']?></h3>
            <p><?php echo $mostrar['descriptions']?></p>
            <a href="./Component/dep.php?axel=10&info_id=<?php echo $mostrar['info_id']; ?>&title=<?php echo$mostrar['title']?>&descriptions=<?php echo$mostrar['descriptions']?>&imagenes=<?php echo$mostrar['imagenes']?>&trailer=<?php echo$mostrar['trailer']?>&genero=<?php echo $mostrar['genero']; ?>&audio=<?php echo $mostrar['audio']; ?>" class="position-relative" role="button">
              <button  style="border-radius: 25px;" type="button" class="btn btn-info btn-sm"  >Ver más</button></a>
          </figcaption>
        </figure>
    </section>
    <?php
  }?>
  </table>
  <nav aria-label="Page navigation example">
  <div class="container ">
       <div class="col-md-6 col-lg-8 mx-auto pagination justify-content-center">
              <br><br>
              <p class="copyright text-muted text-center">InfoFlims 2020 |
             <a  class="" href="contact.html"><strong>Contactarnos</strong></a></p>
            </div>
      </div>
   </nav>
      

      <script src="../assets/js/jquery.min.js"></script>
      <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
      <script src="../assets/js/Card-Carousel.js"></script>

</body>

  </html>