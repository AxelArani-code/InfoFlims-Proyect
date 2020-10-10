<?php include_once 'php/processFormsSE.php';

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


<!-- Image and text -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="./Page/seriesAd.php">
  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5.5a.5.5 0 0 0 0-1H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5z"/>
</svg>
    Volver
  </a>
</nav>

  <div class="container">
<div class="alert alert-success" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <h4 class="alert-heading">Admin</h4>
    <p>Bienvenido administrador, le recomendamos que el tamaño de las imágenes sean de ancho 416px y de alto de 600px.
      Buscar bien la información sobre el contenido, Gracias </p>
  </div>
  </div>
  <div class="container profile profile-view" id="profile">
    <div class="row">
      <div class="col-md-4 relative">
        <form action="" method="post" enctype="multipart/form-data">
          <h2 class="text-center mb-3 mt-3">Portada</h2>
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
            <input type="file" name="imagenes" onChange="displayImage(this)" id="profileImage" class="form-control"
              style="display: none;">
            <label>Imagen de portada</label>
          </div>
      </div>

      <div class="col-md-8">
        <h1>Editar</h1>
        <hr>
        <div class="form-row">
          <div class="col-sm-12 col-md-6">
            <div class="form-group"><label>Titulo</label><input class="form-control" type="text" name="title"></div>
          </div>
          <div class="col-sm-12 col-md-6">
            <div class="form-group"><label>Trailer(URL)</label><input class="form-control" type="text" name="trailer"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="col-sm-12 col-md-6">
            <div class="col-sm-12 col-md-6">
              <div class="form-group"><label>Fecha o Resolución </label><input class="form-control" type="text" name="dates"></div>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="exampleFormControlTextarea1">Descripsión</label>
          <textarea class="form-control" name="descriptions" id="exampleFormControlTextarea1" rows="3"></textarea>
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