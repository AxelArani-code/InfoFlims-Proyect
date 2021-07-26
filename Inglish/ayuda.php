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
  <link rel="stylesheet" href=".././assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i">
  <link rel="stylesheet" href=".././assets/css/Card-Carousel-1.css">
  <link rel="stylesheet" href=".././assets/css/Card-Carousel.css">
  <link rel="stylesheet" href=".././assets/css/News-Cards.css">

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
      <p class="navbar-brand">HELLO,<b><?php echo htmlspecialchars(
        $_SESSION["username"]
      ); ?></b>.</p><button data-toggle="collapse" class="navbar-toggler" data-target="#navbarResponsive"><span
          class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
              <!--  <form class="form-inline" action="buscar.php" method="POST">
                    <input class="form-control mr-sm-2" type="text" name="buscar" placeholder="Search" aria-label="Search">
                    <input type="submit" value="Buscar">
              </form>-->
        <ul class="nav navbar-nav ml-auto">
        <li class="nav-item" role="presentation"><a class="nav-link" href="Home.php">Home</a></li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
              aria-expanded="false">Pages </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" role="presentation" href="netflix.php">Netflix</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" role="presentation" href="series.php">HBO</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" role="presentation" href="MostRecent.php">Coming soon</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
              aria-expanded="false">Usuarios</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" role="presentation" href="../Page/perfil.php">Profile</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" role="presentation" href="../logout.php">Close session</a>
            </div>
          </li>
          
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                aria-expanded="false">English</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" role="presentation" href=".././Page/registered.php">Spanish</a>
              </div>
          </li>
            <li class="nav-item" role="presentation"><a class="nav-link" href="ayuda.php">help</a></li>
          </div>
        </ul>
      </div>
    </div>
  </nav><br><br><br><br><br><br>
  
  <div class="container">
    <p class="display-3">Who we are</p>
    <p>InfoFlims is a publication on cinema, with all the latest news on series and films. We like to analyze with critical passion each of the details that surround the cinema, to recommend the best to enjoy the audiovisual. </p><br><br>
    
    <div class="container">
    <h3 class="float-left">Steps to register </h3><br><br><br>
    <p class="float-left"><strong>At the top you will find a button that says "Login".</strong>  </p>
    <img src=".././assets/img/Helps/Desktop - 8.png" class="card-img-top" alt=""><br><br><br>
    <p class="float-left"><strong>Once you are in "Login" you must click on "User".</strong> </p>
    <img src=".././assets/img/Helps/Desktop - 9.png" class="card-img-top"    alt="">
    <p class="float-left"> <strong>To register, please go to the "Register Now" section. Enter a username and password. And then login with your new username and password.</strong> </p>
    <img src=".././assets/img/Helps/Desktop - 13.png" class="card-img-top"  alt=""><br><br>
    <p class="float-left"><strong>At the top you will find a section of "Sections" that displays various content such as Netflix, HBO, Soon. </strong></p>
    <img src=".././assets/img/Helps/Desktop - 12.png" class="card-img-top"    alt="">
    <h3 class="float-left">Steps to Edit Profile </h3><br><br><br><br>
    <p class="float-left"><strong>As you can see at the top is a section where it says "Users" will display a section, you must click on the "Profile".</strong></p>
    <img src=".././assets/img/Helps/Desktop - 10.png" class="card-img-top" alt=""><br><br><br>
    <p class="float-left"><strong>You must enter in the "Edit Profile" pate. </strong></p>
    <img src=".././assets/img/Helps/Desktop - 14.png" class="card-img-top" alt=""><br><br>
    <p class="float-left"><strong>Once you have entered the necessary data such as name, surname, email, phone number, genre and describe the type of movies or series you like? To save the data click on the "Save" button. And you have your Profile. </strong></p>
    <img src=".././assets/img/Helps/Desktop - 11.png" class="card-img-top"  alt="">
    </div>
    
  </div>
 
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/Card-Carousel.js"></script>

</body>

</html>