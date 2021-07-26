<?php
// Initialize the session
session_start();
$id=$_SESSION['id'];


//Connection
  $conn = mysqli_connect("localhost", "root", "", "demo");
//selection 
  $results = mysqli_query($conn, "SELECT * FROM users WHERE  id='$id'");
  $users = mysqli_fetch_all($results, MYSQLI_ASSOC);
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
<div class="card mb-3">
  <img src="../assets/img/Icons/animation_200_khmifld9.gif" class="card-img" style="width: 18rem;"alt="...">
  <div class="card-body">
    <h5 class="card-title">Eliminar tu cuenta</h5>
    <p class="card-text">¿Estás seguro que deseas eliminar tu cuenta? <br>
      Si eliminas tu cuenta perderás todos los datos al almacenado. 
    </p>
    <a href="delate.php?axel=10&id=<?php echo $_SESSION['id']; ?>" class="btn btn-primary form-btn">Eliminar</a>
    <a href="javascript: history.go(-1)" class="btn btn-success form-btn">Volver</a>
  </div>
</div>

  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets/js/Card-Carousel.js"></script>
  <script src="../assets/js/Profile-Edit-Form.js"></script>
</body>

</html>