<?php
  session_start();
$conexion = mysqli_connect("localhost", "root", "", "demo");
// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
  header("location: loginAd.php");
  exit();
}
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
        <a class="dropdown-item" href="estrenosAd.php">Estrenos</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="MostRecentAd.php">Proximamente </a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link text-primary" href="listAd.php">Usuarios</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
        aria-expanded="false">Sesion</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="../../logout.php">Cerras Sesion</a>
      </div>
    </li>

  </ul>
  <div class="alert alert-success" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <h4 class="alert-heading">Admin</h4>
    <p>Bienvenido administrador, le recomendamos que el tamaño de las imágenes sean de ancho 416px y de alto de 600px.
      Buscar bien la información sobre el contenido, Gracias </p>
  </div>

  <table>
    <?php
    $sql="SELECT*FROM series";
    $resul=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_array($resul)){
    ?>

    <div class="card mb-3" style="max-width: 940px;">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="<?php echo '../.././assets/img/ '.$mostrar['imagenes']?>" class="card-img" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title"><?php echo$mostrar['title'] ?></h5>
            <p class="card-text"><?php echo$mostrar['descriptions']?></p>
            <p class="card-text"><small class="text-muted"><?php echo$mostrar['dates']?></small></p>
            <a href="../indiceSE.php?axel=10&info_id=<?php echo$mostrar['info_id']?>" class="position-relative"
              role="button" aria-pressed="true">
              <button type="button" class="btn btn-dark btn-sm">Editar</button>
            </a>

            <p><?php echo$mostrar['info_id']?></p>
          </div>
        </div>
      </div>
    </div>
    <?php
  }?>
  </table>



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