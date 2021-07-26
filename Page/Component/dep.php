<?php include_once 'form.php';
// Initialize the session

$id=$_REQUEST['info_id'];
$title=$_REQUEST['title'];
$descriptions=$_REQUEST['descriptions'];
$imagenes=$_REQUEST['imagenes'];
$trailer=$_REQUEST['trailer'];
$genero=$_REQUEST['genero'];
$audio=$_REQUEST['audio'];

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
  <link rel="stylesheet" href="./php/registered.php">
  <style type="text/css">
    body {
      font: 14px sans-serif;
      text-align: center;
    }
  </style>
  <style >
    #form {
  width: 250px;
  margin: 0 auto;
  height: 50px;
}

#form p {
  text-align: center;
}

#form label {
  font-size: 20px;
}

input[type="radio"] {
  display: none;
}

label {
  color: grey;
}

.clasificacion {
  direction: rtl;
  unicode-bidi: bidi-override;
}

label:hover,
label:hover ~ label {
  color: orange;
}

input[type="radio"]:checked ~ label {
  color: orange;
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
  </nav><br><br><br><br><br><br>

<div class="container">
<!-- Button trigger modal -->
<div class="mb-3" style="max-width: 2040px;">
  <div class="row no-gutters">
    <div class="col-md-4" style="border-radius: 25px;">
      <img src="<?php echo '../.././assets/img/ '. $imagenes?>" class="card-img " alt="..." style="border-radius: 25px;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <p class="display-4"><?php echo $title?></p>
        <p class="card-text"><?php echo $descriptions?></p>
        <p><strong>Idioma: </strong> <?php echo $audio?> </p>
        <p><strong>Genero: </strong> <?php echo $genero?> </p>
        <button type="button" style="border-radius: 25px;" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Comentar</button>
        <form>
          <p class="clasificacion">
            <input id="radio1" type="radio" name="estrellas" value="5"><!--
            --><label for="radio1">★</label><!--
            --><input id="radio2" type="radio" name="estrellas" value="4"><!--
            --><label for="radio2">★</label><!--
            --><input id="radio3" type="radio" name="estrellas" value="3"><!--
            --><label for="radio3">★</label><!--
            --><input id="radio4" type="radio" name="estrellas" value="2"><!--
            --><label for="radio4">★</label><!--
            --><input id="radio5" type="radio" name="estrellas" value="1"><!--
            --><label for="radio5">★</label>
          </p>
        </form>
        <p class="card-text"><small class="text-muted h6">Trailer...</small></p>
        <div  style="border-radius: 25px;" class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="<?php echo$trailer?>" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
</div><br><br><br>

<p class="float-left h3">TAMBIÉN TE PUEDE GUSTAR</p><br><br><br>
<table>
    <?php
    $sql = "SELECT*FROM estrenos order by rand() limit 4";
    $resul = mysqli_query($conexion, $sql);
    while ($mostrar = mysqli_fetch_array($resul)) { ?>
    <section>
      <div class="container-flux">
      
        <figure class="snip1527" style="border-radius: 25px; height: 400px; width: 300px;" >
          <div class="image">
            <img src="<?php echo '../.././assets/img/ ' .
              $mostrar['imagenes']; ?>" alt="pr-sample23" style="" />
              <div class="card-img-overlay">
              <a href="dep.php?axel=10&info_id=<?php echo $mostrar['info_id']; ?>&title=<?php echo $mostrar['title']; ?>&descriptions=<?php echo $mostrar['descriptions']; ?>&imagenes=<?php echo $mostrar['imagenes']; ?>&trailer=<?php echo $mostrar['trailer']; ?>&genero=<?php echo $mostrar['genero']; ?>&audio=<?php echo $mostrar['audio']; ?>" class="position-relative" role="button">
              <button  style="border-radius: 25px;" type="button" class="btn btn-info btn-sm"  >Ver más</button></a>
              </a>
            </div>
              </div>
        </figure>
        
    </section>
   <?php }
    ?>
  </table>
  

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Comentario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="" method="post" enctype="multipart/form-data">
  
      
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Descripsión</label>
          <textarea class="form-control" name="detalles" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <hr>
        <div class="form-row">
          <div class="col-md-12 content-right">
            <button class="btn btn-primary form-btn" type="submit" name="save_profile">Guardar</button>
            <input type="reset" class="btn btn-danger form-btn" value="Borrar">
          </div>
        </div>
      </div>
    </div>
    </form>
      </div>
    </div>
  </div>
</div><br><br><br><br><br><br><br><br><br>
<!--
  <h3>Comentarios</h3>
<?php
$sql="SELECT*FROM comentarios WHERE id='$id'";
$resul=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_array($resul)){
?>
<div class="position-static container ">
<div class="card">
  <div class="card-header">
   Usuario--<?php ?>
  </div>
  <div class="card-body"> 
    <h5 class="card-title"></h5>
    <p class="card-text"><?php echo$mostrar['detalles']?></p>
  </div>
</div>
</div>

  <?php
}?>

  -->


<nav aria-label="Page navigation example">
  <div class="container ">
       <div class="col-md-6 col-lg-8 mx-auto pagination justify-content-center">
              <br><br>
              <p class="copyright text-muted text-center">InfoFlims 2020 |
             <a  class="" href="contact.html"><strong>Contactarnos</strong></a></p>
            </div>
      </div>
   </nav>

    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../assets/js/Card-Carousel.js"></script>

</body>

</html>