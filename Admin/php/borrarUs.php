<?php
// Actualizamos en funcion del id que recibimos
$in_id = $_REQUEST['id'];
$msj="";
$msjError="";
$conn = mysqli_connect("localhost", "root", "", "demo");
$sql = "DELETE FROM users WHERE id='$in_id'";

if ($conn->query($sql) === true) {
  $msj="El Usuario se borror corectamente";
} else {
  $msjError="Error en la base de datos...";
}

$conn->close();
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Untitled</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
<ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" href="../../admin.php">Inicio</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
        aria-expanded="false">Contenido</a>
      <div class="dropdown-menu">
        
        <a class="dropdown-item" href="netflixAd.php">Netflix</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="seriesAd.php">HBO</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="MostRecentAd.php">Proximamente</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link text-primary" href="listAd.php">Usuarios</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
        aria-expanded="false">Sesion</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="../logout.php">Cerras Sesion</a>
      </div>
    </li>
  </ul>
  <!-- Image and text -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="../Page/listAd.php">
  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5.5a.5.5 0 0 0 0-1H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5z"/>
</svg>
    Volver
  </a>
</nav>
<div class="container">
  <p class="display-3"><?php echo $msj?></p>
  <p class="display-3"><?php echo$msjError?></p>
</div>




  







  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>
</body>

</html>