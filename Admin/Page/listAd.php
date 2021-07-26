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

  <div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2 style="width: 343px;">Usuarios Registrados</h2>
                </div>
                
            <div class="row">
                <div class="col-md-12"><table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Usuario</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Action</th>
            </tr>
        </thead>
        

    <?php
    $sql = "SELECT*FROM users";
    $resul = mysqli_query($conexion, $sql);
    while ($mostrar = mysqli_fetch_array($resul)) { ?>

 <tbody>
            <tr>
                <td><?php echo $mostrar['id']; ?></td>
                <td><?php echo $mostrar['username']; ?></td>
                <td><?php echo $mostrar['nombre']; ?></td>
                <td><?php echo $mostrar['apellido']; ?></td>
                    <td>
                    <a href=".././php/borrarUs.php?axel=10&id=<?php echo $mostrar['id']; ?>"  class="btn btn-danger"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                </svg></a>
                    </td>
            </tr>
 </tbody>
    <?php }
    ?>
    </table></div>
            </div>
        </div>
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