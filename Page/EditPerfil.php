<?php include_once 'processForm.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>DEMO</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Actor">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/Card-Carousel-1.css">
    <link rel="stylesheet" href="../assets/css/Card-Carousel.css">
    <link rel="stylesheet" href="../assets/css/News-Cards.css">
    <link rel="stylesheet" href="../assets/css/Profile-Card.css">
    <link rel="stylesheet" href="../assets/css/Profile-Edit-Form-1.css">
    <link rel="stylesheet" href="../assets/css/Profile-Edit-Form.css">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark navbar-custom">
        <div class="container">
          <button data-toggle="collapse" class="navbar-toggler" data-target="#navbarResponsive"><span
              class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="nav navbar-nav ml-auto">
              <li class="nav-item" role="presentation"><a class="nav-link" href="registered.php">Inicio</a></li>
              <li class="nav-item" role="presentation"><a class="nav-link" href="netflix.php">Netflix</a></li>
              <li class="nav-item" role="presentation"><a class="nav-link" href="series.php">HBO</a></li>
              <li class="nav-item" role="presentation"><a class="nav-link" href="MostRecent.php">Información</a></li>
              <li class="nav-item dropdown">
              <li class="nav-item" role="presentation"><a class="nav-link" href="./Component/ayuda.php">Ayuda</a></li>

                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                  aria-expanded="false">Usuarios</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" role="presentation" href="../Page/perfil.php" onclick="myFunction()" >Dar de alta</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" role="presentation" href="../logout.php">Cerrar sesión</a>
                </div>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
<br><br><br>
    <div class="container profile profile-view" id="profile">
        <div class="row">
            <div class="col-md-12 alert-col relative">
                <div class="alert alert-info absolue center" role="alert"><button type="button" class="close"
                        data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><span>Profile
                        save with success</span></div>
            </div>
        </div>
        <form action="valida_foto.php" method="POST" enctype="multipart/form-data">
            <div class="form-row profile-row">
                <div class="col-md-4 relative">
                    <div class="avatar">
                        <div class="avatar-bg center"></div>
                    </div><input type="file" class="form-control" name="foto" id="foto">
                </div>
                <div class="col-md-8">
                    <h1>Perfil </h1>
                    <hr>
                    <div class="form-row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label>Nombre </label><input class="form-control" type="text"
                                    name=""></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label>Apellido </label><input class="form-control" type="text"
                                    name=""></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label>Numero de Telefono</label><input class="form-control"
                                    type="text" name=""></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label>Genero </label><input class="form-control" type="text"
                                    name=""></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Describe tipo de peliculas te gustan y series. </label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <div class="form-group"><label>Email</label><input class="form-control" type="email"
                            autocomplete="off" required="" name=""></div>
                    <hr>
                    <div class="form-row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label>Nueva contraseña </label><input class="form-control"
                                    type="password" name="" autocomplete="off" required=""></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label>Confirmar contraseña</label><input class="form-control"
                                    type="password" name="" autocomplete="off" required=""></div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="col-md-12 content-right">
                            <input type="submit" name="enviar" value="Enviar">
                            <button class="btn btn-primary form-btn" type="submit">Guardar </button>
                            <button class="btn btn-info form-btn" type="reset">Borrar</button>
                            <button class="btn btn-danger form-btn" type="reset">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>
        function myFunction() {
          alert("Hola, para poder ingresar deberá registrarse, antes que nada. Gracias ");
        }
      </script>
    <script src=".././assets/js/jquery.min.js"></script>
    <script src=".././assets/bootstrap/js/bootstrap.min.js"></script>
    <script src=".././assets/js/Card-Carousel.js"></script>
    <script src=".././assets/js/Profile-Edit-Form.js"></script>
</body>

</html>