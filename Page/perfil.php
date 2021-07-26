<?php
// Initialize the session
session_start();
$id=$_SESSION['id'];


//Connection
  $conn = mysqli_connect("localhost", "root", "", "demo");
//selection 
  $results = mysqli_query($conn, "SELECT * FROM users WHERE  id='$id'");
  $users = mysqli_fetch_all($results, MYSQLI_ASSOC);

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
  <title>Perfil</title>
  <link rel="stylesheet" href=".././assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Actor">
  <link rel="stylesheet" href=".././assets/fonts/font-awesome.min.css">
  <link rel="stylesheet" href=".././assets/css/Card-Carousel-1.css">
  <link rel="stylesheet" href=".././assets/css/Card-Carousel.css">
  <link rel="stylesheet" href=".././assets/css/News-Cards.css">
  <link rel="stylesheet" href=".././assets/css/Profile-Card.css">
  <link rel="stylesheet" href=".././assets/css/Profile-Edit-Form-1.css">
  <link rel="stylesheet" href=".././assets/css/Profile-Edit-Form.css">
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
          <li class="nav-item" role="presentation"><a class="nav-link" href="ayuda.php">Ayuda</a></li>
        </ul>
      </div>
    </div>
  </nav><br><br><br>
  <?php foreach ($users as $user): ?>
  <div class="profile-card border border-white">

    <div class="profile-back" style="background-color: #1340e0;">
    </div>
    <img class="rounded-circle profile-pic" src="<?php echo 'images/' . $user['profile_image'] ?>" width="90"
      height="90" alt="">

    <h4><a href="form.php">Editar Perfil</a></h4>
    <h3 class="profile-name" style="background-color: #1340e0;"><?php echo $user ['nombre']; echo'  '. $user ['apellido']?>
    </h3>
    <p class="profile-bio"> <?php echo $user['bio']; ?></p>
    <ul class="profile-name" style="background-color: #2E2E2E;">
      <li><?php echo 'Género: '. $user['genero']?><i></i></li>
      <li><?php echo'Número de teléfono:'. $user['telefono']?><i></i></li>
    </ul>
  </div>
  <?php endforeach; ?>

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
  <script src="../assets/js/Profile-Edit-Form.js"></script>
</body>

</html>