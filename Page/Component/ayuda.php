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
  <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
  <link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i">
  <link rel="stylesheet" href="../../assets/css/Card-Carousel-1.css">
  <link rel="stylesheet" href="../../assets/css/Card-Carousel.css">
  <link rel="stylesheet" href="../../assets/css/News-Cards.css">
  <link rel="stylesheet" href=".././php/registered.php">
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
              <!--  <form class="form-inline" action="buscar.php" method="POST">
                    <input class="form-control mr-sm-2" type="text" name="buscar" placeholder="Search" aria-label="Search">
                    <input type="submit" value="Buscar">
              </form>-->
        <ul class="nav navbar-nav ml-auto">
        <li class="nav-item" role="presentation"><a class="nav-link" href="../registered.php">Inicio</a></li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
              aria-expanded="false">Apartados</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" role="presentation" href="../netflix.php">Netflix</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" role="presentation" href="../series.php">HBO</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" role="presentation" href="../MostRecent.php">Proximamente</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
              aria-expanded="false">Usuarios</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" role="presentation" href="../../Page/perfil.php">Perfil</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" role="presentation" href="../../logout.php">Cerrar sesión</a>
            </div>
          </li>
          
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                aria-expanded="false">Español</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" role="presentation" href="../../Inglish/Home.php">Ingles</a>
              </div>
          </li>
            <li class="nav-item" role="presentation"><a class="nav-link" href="ayuda.php">Ayuda</a></li>
          </div>
        </ul>
      </div>
    </div>
  </nav><br><br><br><br><br><br><br><br>
  
  <div class="container">
    <p class="display-3">Quiénes somos</p>
    <p>InfoFlims es una publicación sobre cine, con toda la actualidad de series y películas. Nos gusta analizar con pasión crítica cada uno de los detalles que rodean al cine, recomendar lo mejor para disfrutar de lo audiovisual. </p><br><br>
    
    <div class="container">
    <h3 class="float-left">Pasos para registrarse </h3><br><br><br>
    <p class="float-left"><strong>En la parte superior encontrarás un botón que dice “Iniciar Sesión”</strong>  </p>
    <img src="../.././assets/img/Helps/Desktop - 1.png" class="card-img-top" alt=""><br><br><br>
    <p class="float-left"><strong>Una vez situado en “Iniciar Sesión” deberás hacer click en “Usuario”</strong> </p>
    <img src="../.././assets/img/Helps/Desktop - 2.png" class="card-img-top"    alt="">
    <p class="float-left"> <strong>Para registrarse deberás ingresar en la parte “Registrarse ahora”. Ingrese un nombre de usuario y contraseña. Y luego ingrese con su nuevo usuario y contraseña.</strong> </p>
    <img src="../.././assets/img/Helps/Desktop - 3.png" class="card-img-top"  alt=""><br><br>
    <p class="float-left"><strong>En la parte superior encontrarás una sección de “Apartados” se despliega varios contenidos como Netflix, HBO, Próximamente. </strong></p>
    <img src="../.././assets/img/Helps/Desktop - 5.png" class="card-img-top"    alt="">
    <h3 class="float-left">Pasos para editar Perfil </h3><br><br><br>
    <p class="float-left"><strong>Como podrá ver en la parte superior se encuentra un apartado en donde dice “Usuarios” se desplegará una sección, deberá hacer click en la parte de “Perfil”.</strong></p>
    <img src="../.././assets/img/Helps/Desktop - 4.png" class="card-img-top" alt=""><br><br><br>
    <p class="float-left"><strong>Deberá ingresar en el pate de "Editar perfil". </strong></p>
    <img src="../.././assets/img/Helps/Desktop - 7.png" class="card-img-top" alt=""><br><br>
    <p class="float-left"><strong>Una vez ingresado colocar los datos necesarios como nombre, apellido, email, Número de teléfono, género y ¿Describe el tipo de películas o series te gustan? Para guarda los datos haga click en el botón de “Guardar”. Y ya tienes tu Perfil. </strong></p>
    <img src="../.././assets/img/Helps/Desktop - 6.png" class="card-img-top"  alt="">
    </div>
    
  </div>
 
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../assets/js/Card-Carousel.js"></script>

</body>

</html>