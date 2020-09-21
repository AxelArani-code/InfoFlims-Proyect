<?php
// Initialize the session
session_start();

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
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i">
  <link rel="stylesheet" href="../assets/css/Card-Carousel-1.css">
  <link rel="stylesheet" href="../assets/css/Card-Carousel.css">
  <link rel="stylesheet" href="../assets/css/News-Cards.css">
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
      <p class="navbar-brand">Hola,<b><?php echo htmlspecialchars(
          $_SESSION["username"]
        ); ?></b>.</p><button data-toggle="collapse" class="navbar-toggler" data-target="#navbarResponsive"><span
          class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="nav navbar-nav ml-auto">
          <li class="nav-item" role="presentation"><a class="nav-link" href="registered.php">Peliculas</a></li>
          <li class="nav-item" role="presentation"><a class="nav-link" href="netflix.php">Netflix</a></li>
          <li class="nav-item" role="presentation"><a class="nav-link" href="series.php">Series</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
              aria-expanded="false">Usuarios</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" role="presentation" href="../Page/perfil.php">Perfil</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" role="presentation" href="../logout.php">Cerrar sesión</a>
            </div>
          </li>
          <div class="btn-group" role="group">
            <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Español
            </button>
            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
              <a class="dropdown-item" href="../Inglish/SeriesN.php">English</a>
            </div>
          </div>
        </ul>
      </div>
    </div>
  </nav>
  <br><br><br><br><br><br>

  <div class="masthead-content">
    <div class="container">
      <h1 class="masthead-heading mb-0">Las mejores series del 2020</h1><br><br>
    </div>
  </div>

  <section>
    <div class="container ">
      <figure class="snip1527">
        <div class="image">
          <img src="../assets/img/series/13b278af21ea982f6e410be6ccee79af.jpg" alt="pr-sample23" /></div>
        <figcaption>
          <div class="date  "><span class="day">05</span><span class="month">Oct</span></div>

          <h3>Élite</h3>
          <p>
            Las Encinas es el colegio más exclusivo de España, el lugar donde estudian los hijos de la élite y donde
            acaban de ser admitidos tres jóvenes de clase baja, procedentes de un colegio público en ruinas.
          </p><br>

          <a href="../Component/MeGusta3.php" class="position-relative" role="button" aria-pressed="true">
            <button type="button" class="btn btn-primary btn-sm">Me Gusta</button></a>
          <a href="estrenos.php" class="position-relative" role="button" aria-pressed="true">
            <button type="button" class="btn btn-secondary btn-sm">Trailer</button></a>
        </figcaption>
      </figure>
      <figure class="snip1527">
        <div class="image"><img src="../assets/img/series/17b5648dc97c211f2d85b1d91b40dce0.jpg" alt="pr-sample24" />
        </div>
        <figcaption>
          <div class="date"><span class="day">11</span><span class="month">Ene</span></div>
          <h3>Sex Education</h3>
          <p>
            Otis siempre tiene una respuesta respecto al sexo. Otis se une a su amiga Maeve para abrir una clínica de
            terapia sexual en la escuela.
          </p><br>

          <a href="../Component/MeGusta3.php" class="position-relative" role="button" aria-pressed="true">
            <button type="button" class="btn btn-primary btn-sm">Me Gusta</button></a>
          <a href="estrenos.php" class="position-relative" role="button" aria-pressed="true">
            <button type="button" class="btn btn-secondary btn-sm">Trailer</button></a>
        </figcaption>
      </figure>
      <figure class="snip1527">
        <div class="image"><img src="../assets/img/series/06109eb585bd131f4a9319f90a6d4266.jpg" alt="pr-sample25" />
        </div>
        <figcaption>
          <div class="date"><span class="day">02</span><span class="month">May</span></div>
          <h3>La casa de papel</h3>
          <p>
            Una banda organizada de ladrones tiene el objetivo de cometer el atraco del siglo en la Fábrica Nacional de
            Moneda y Timbre. Cinco meses de preparación quedarán reducidos a once días para poder llevar a cabo con
            éxito el gran golpe.
          </p><br>

          <a href="../Component/MeGusta3.php" class="position-relative" role="button" aria-pressed="true">
            <button type="button" class="btn btn-primary btn-sm">Me Gusta</button></a>
          <a href="https://youtu.be/HxbngF7jz3w" class="position-relative" role="button" aria-pressed="true">
            <button type="button" class="btn btn-secondary btn-sm">Trailer</button></a>
        </figcaption>
      </figure>
      <figure class="snip1527">
        <div class="image"><img src="../assets/img/series/descarga (2).jpg" alt="pr-sample23" /></div>
        <figcaption>
          <div class="date"><span class="day">10</span><span class="month">Juli</span></div>
          <h3>Poco ortodoxa</h3>
          <p>
            Una mujer judía huye de un matrimonio arreglado en Brooklyn para comenzar una nueva vida en el exterior.
          </p><br>

          <a href="../Component/MeGusta3.php" class="position-relative" role="button" aria-pressed="true">
            <button type="button" class="btn btn-primary btn-sm">Me Gusta</button></a>
          <a href="https://youtu.be/OCDhMOrCEoc" class="position-relative" role="button" aria-pressed="true">
            <button type="button" class="btn btn-secondary btn-sm">Trailer</button></a>
        </figcaption>
      </figure>
      <figure class="snip1527 ">
        <div class="image"><img src="../assets/img/series/descarga (3).jpg" alt="pr-sample24" /></div>
        <figcaption>
          <div class="date"><span class="day">29</span><span class="month">May</span></div>
          <h3>Fuerza espacial</h3>
          <p>
            Un general condecorado colabora a regañadientes con un científico excéntrico en el despliegue de la nueva
            agencia del Ejército de EE.UU. que tiene como misión volver a la Luna.
          </p><br>

          <a href="../Component/MeGusta3.php" class="position-relative" role="button" aria-pressed="true">
            <button type="button" class="btn btn-primary btn-sm">Me Gusta</button></a>
          <a href="https://youtu.be/Yghnm_17a8w" class="position-relative" role="button" aria-pressed="true">
            <button type="button" class="btn btn-secondary btn-sm">Trailer</button></a>
        </figcaption>
      </figure>
      <figure class="snip1527">
        <div class="image"><img src="../assets/img/series/descarga (4).jpg" alt="pr-sample25" /></div>
        <figcaption>
          <div class="date"><span class="day">15</span><span class="month">Abr</span></div>
          <h3>Muertos para mí</h3>
          <p>
            Una viuda que aún sufre por la muerte de su marido y una mujer optimista con un terrible secreto forman una
            amistad poderosa.
          </p><br>

          <a href="../Component/MeGusta3.php" class="position-relative" role="button" aria-pressed="true">
            <button type="button" class="btn btn-primary btn-sm">Me Gusta</button></a>
          <a href="https://youtu.be/YjJS6X_MxFQ" class="position-relative" role="button" aria-pressed="true">
            <button type="button" class="btn btn-secondary btn-sm">Trailer</button></a>
        </figcaption>
      </figure>
      <figure class="snip1527">
        <div class="image"><img src="../assets/img/series/El_ltimo_baile_Miniserie_de_TV-389158062-large (1).jpg"
            alt="pr-sample23" /></div>
        <figcaption>
          <div class="date"><span class="day">19</span><span class="month">Abr</span></div>
          <h3>El último baile</h3>
          <p>
            En el otoño de 1997, Michael Jordan y los Chicago Bulls permitieron que un equipo de filmación los siguiera
            mientras buscaban su sexto título de la NBA en ocho temporadas. El retrato de uno de los más grandes atletas
            del deporte y un equipo célebre.
          </p><br>

          <a href="../Component/MeGusta3.php" class="position-relative" role="button" aria-pressed="true">
            <button type="button" class="btn btn-primary btn-sm">Me Gusta</button></a>
          <a href="https://youtu.be/cohV0RtTfQw" class="position-relative" role="button" aria-pressed="true">
            <button type="button" class="btn btn-secondary btn-sm">Trailer</button></a>
        </figcaption>
      </figure>
      <figure class="snip1527 ">
        <div class="image"><img src="../assets/img/series/I-Am-Not-Okay-with-This.jpg" alt="pr-sample24" /></div>
        <figcaption>
          <div class="date"><span class="day">26</span><span class="month">Febr</span></div>
          <h3>Esta mierda me supera</h3>
          <p>
            Una adolescente atraviesa las complejidades de la escuela secundaria, la familia y su sexualidad.
          </p><br>

          <a href="../Component/MeGusta3.php" class="position-relative" role="button" aria-pressed="true">
            <button type="button" class="btn btn-primary btn-sm">Me Gusta</button></a>
          <a href="https://youtu.be/_dOsJFhJNGc" class="position-relative" role="button" aria-pressed="true">
            <button type="button" class="btn btn-secondary btn-sm">Trailer</button></a>
        </figcaption>
      </figure>
      <figure class="snip1527">
        <div class="image"><img src="../assets/img/series/Ozarkk.jpg" alt="pr-sample25" /></div>
        <figcaption>
          <div class="date"><span class="day">21</span><span class="month">Jul</span></div>
          <h3>Ozark</h3>
          <p>
            Un financista traslada a su familia a Ozarks. Después de que un plan de lavado de dinero va mal, se ve
            obligado a pagar una deuda a un narcotraficante mexicano para mantener a su familia.
          </p><br>

          <a href="../Component/MeGusta3.php" class="position-relative" role="button" aria-pressed="true">
            <button type="button" class="btn btn-primary btn-sm">Me Gusta</button></a>
          <a href="https://youtu.be/T-wJ7EYAIPI" class="position-relative" role="button" aria-pressed="true">
            <button type="button" class="btn btn-secondary btn-sm">Trailer</button></a>
        </figcaption>
      </figure>
    </div>

    <div class="container">
    <div class="col-md-6 col-lg-8 mx-auto">
            <br><br>
            <p class="copyright text-muted text-center">InfoFlims 2020 | Diseñor web por<a href="https://energia-p.000webhostapp.com/">Axel Aranibar</a>  </p>
            <a href="contact.html"><strong>Contactarnos</strong></a><br><br><br>
          </div>
    </div>

    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/Card-Carousel.js"></script>

</body>

</html>