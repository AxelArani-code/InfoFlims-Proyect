<?php include_once 'processForm.php';

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
  header("location: login.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Perfil</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href=".././css/main.css  ">


  <link rel="stylesheet" href=".././assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i">
  <link rel="stylesheet" href=".././assets/css/Card-Carousel-1.css">
  <link rel="stylesheet" href=".././assets/css/Card-Carousel.css">
  <link rel="stylesheet" href=".././assets/css/News-Cards.css">
  <link rel="stylesheet" href=".././assets/css/Profile-Edit-Form-1.css">
  <link rel="stylesheet" href=".././assets/css/Profile-Edit-Form.css">
</head>

<body>
   <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark navbar-custom" action="forms.php">
    <div class="container">
      <button data-toggle="collapse" class="navbar-toggler" data-target="#navbarResponsive"><span
          class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="nav navbar-nav ml-auto">
          <li class="nav-item" role="presentation"><a class="nav-link" href="registered.php">Peliculas</a></li>
          <li class="nav-item" role="presentation"><a class="nav-link" href="contact.html">Contactarnos</a></li>
          <li class="nav-item" role="presentation"><a class="nav-link" href="series.php">Series</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
              aria-expanded="false">Usuarios</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" role="presentation" href="perfil.php">Perfil</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" role="presentation" href="">Eliminar</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" role="presentation" href="logout.php">Cerrar sesión</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav><br><br><br><br><br><br>
  
  <div class="container profile profile-view" id="profile">
    <div class="row">
      <div class="col-md-4 relative">
        <form action="form.php" method="post" enctype="multipart/form-data">
          <h2 class="text-center mb-3 mt-3">Ingrese una imagen</h2>
          <?php if (!empty($msg)): ?>
          <div class="alert <?php echo $msg_class; ?>" role="alert">
            <?php echo $msg; ?>
          </div>
          <?php endif; ?>
          <div class="form-group text-center" style="position: relative;">
            <span class="img-div">
              <div class="text-center img-placeholder" onClick="triggerClick()">
                <h4>Subir</h4>
              </div>
              <img src="images/avatar.jpg" onClick="triggerClick()" id="profileDisplay">
            </span>
            <input type="file" name="profileImage" onChange="displayImage(this)" id="profileImage" class="form-control"
              style="display: none;">
            <label>Perfil imagen</label>
          </div>
      </div>

      <div class="col-md-8">
        <h1>Perfil</h1>
        <hr>
        <div class="form-row">
          <div class="col-sm-12 col-md-6">
            <div class="form-group"><label>Nombre </label><input class="form-control" type="text" name="nombre"></div>
          </div>
          <div class="col-sm-12 col-md-6">
            <div class="form-group"><label>Apellido </label><input class="form-control" type="text" name="apellido">
            </div>
          </div>
        </div>
        <div class="form-group"><label>Email</label><input class="form-control" type="email" autocomplete="off"
            required="" name="email"></div>
        <div class="form-row">
          <div class="col-sm-12 col-md-6">
            <div class="form-group"><label>Numero de Teléfono</label><input class="form-control" type=""
                name="telefono" autocomplete="off" required=""></div>
          </div>
          <div class="col-sm-12 col-md-6">
            <div class="col-sm-12 col-md-6">
              <div class="form-group"><label>Genero </label><input class="form-control" type="text" name="genero"></div>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="exampleFormControlTextarea1">¿Describe el tipo de peliculas o series te gustan ?</label>
          <textarea class="form-control" name="bio" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <hr>
        <div class="form-row">
          <div class="col-md-12 content-right">
            <button class="btn btn-primary form-btn" type="submit" name="save_profile">Guardar</button>
            <input type="reset" class="btn btn-danger form-btn" value="Borrar">
            <a href="../reset-password.php"  class="btn btn-warning form-btn">Cambiar de contraseña</a>
          </div>
        </div>
      </div>
    </div>
    </form>
  </div>
  </div>
  </div>

  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets/js/Card-Carousel.js"></script>
  <script src="../assets/js/Profile-Edit-Form.js"></script>
  
  <script src="script.js"></script>
</body>

</html>