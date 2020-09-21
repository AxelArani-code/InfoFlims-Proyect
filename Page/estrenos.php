<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
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
      <p class="navbar-brand">Hola,<b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>.</p><button
        data-toggle="collapse" class="navbar-toggler" data-target="#navbarResponsive"><span
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
              <a class="dropdown-item" href="../Inglish/premieres.php">English</a>
            </div>
          </div>
        </ul>
      </div>
    </div>
  </nav>
  <br><br><br><br>

  <div class="masthead-content">
    <div class="container">
      <h1 class="masthead-heading mb-0"></h1><br><br>
    </div>


    <section>
      <div class="container">
        <figure class="snip1527">
          <div class="image">
            <img src="../assets/img/estrenos/81HQ90Xwz4L._RI_.jpg" alt="pr-sample23" /></div>
          <figcaption>
            <div class="date"><span class="day">2</span><span class="month">Nov</span></div>
            <h3>Timetrap</h3>
            <p>
              Un grupo de estudiantes queda atrapado dentro de una misteriosa cueva donde descubren que el tiempo pasa
              de manera diferente bajo tierra que en la superficie.
            </p>
            <a href="../Component/MeGusta2.php" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-primary btn-sm">Me Gusta</button></a>
            <a href="https://youtu.be/DYGx3AlK23s" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-secondary btn-sm">Trailer</button></a>
          </figcaption>
        </figure>
        <figure class="snip1527">
          <div class="image"><img src="../assets/img/estrenos/91yy24s7vwL._RI_.jpg" alt="pr-sample24" /></div>
          <figcaption>
            <div class="date"><span class="day">30</span><span class="month">Jul</span></div>
            <h3>Tammy</h3>
            <p>
              Después de perder su trabajo, chocar su carro y descubrir la infidelidad de su marido, una mujer sale de
              viaje con su esforzada abuela.
            </p>
            <a href="../Component/MeGusta2.php" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-primary btn-sm">Me Gusta</button></a>
            <a href="https://youtu.be/N8d6Bpl2eAo" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-secondary btn-sm">Trailer</button></a>
          </figcaption>
        </figure>
        <figure class="snip1527">
          <div class="image"><img src="../assets/img/estrenos/balle_perdue-785684707-large.jpg" alt="pr-sample25" />
          </div>
          <figcaption>
            <div class="date"><span class="day">19</span><span class="month">Jul</span></div>
            <h3>Bala perdida</h3>
            <p>
              El mecánico Lino es un apasionado de los autos de combate, pero cuando se enfrenta a policías corruptos,
              éstos le ofrecen un trato que no puede rechazar.
            </p>
            <a href="../Component/MeGusta2.php" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-primary btn-sm">Me Gusta</button></a>
            <a href="https://www.youtube.com/watch?v=rRvokiv8gZM" class="position-relative" role="button"
              aria-pressed="true">
              <button type="button" class="btn btn-secondary btn-sm">Trailer</button></a>
          </figcaption>
        </figure>
        <figure class="snip1527">
          <div class="image"><img src="../assets/img/estrenos/f768x1-950002_950129_155.png" alt="pr-sample23" /></div>
          <figcaption>
            <div class="date"><span class="day">7</span><span class="month">Mayo</span></div>
            <h3>Crímenes de familia</h3>
            <p>
              Un matrimonio adulto, residente de uno de los barrios más lujosos de Buenos Aires, debe enfrentar la
              acusación de intento de homicidio que pesa sobre su hijo Daniel.
            </p>
            <a href="../Component/MeGusta2.php" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-primary btn-sm">Me Gusta</button></a>
            <a href="https://www.youtube.com/watch?v=jlS78f4XcSY" class="position-relative" role="button"
              aria-pressed="true">
              <button type="button" class="btn btn-secondary btn-sm">Trailer</button></a>
          </figcaption>
        </figure>
        <figure class="snip1527 ">
          <div class="image"><img src="../assets/img/estrenos/hejter.jpg" alt="pr-sample24" /></div>
          <figcaption>
            <div class="date"><span class="day">6</span><span class="month">Marz</span></div>
            <h3>Hater</h3>
            <p>
              Un joven estudiante de derecho consigue trabajo en una compañía de relaciones públicas, y lo que parecía
              una simple tarea se convierte en una granja de trolls. Allí se destaca en el negocio de esparcir noticias
              falsas y odio online, cuyos blancos son personalidades, celebridades y políticos.s.
            </p>
            <a href="../Component/MeGusta2.php" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-primary btn-sm">Me Gusta</button></a>
            <a href="https://www.youtube.com/watch?v=gRrBVSG99Kk" class="position-relative" role="button"
              aria-pressed="true">
              <button type="button" class="btn btn-secondary btn-sm">Trailer</button></a>
          </figcaption>
        </figure>
        <figure class="snip1527">
          <div class="image"><img src="../assets/img/estrenos/the-kissing-booth-2.jpg" alt="pr-sample25" /></div>
          <figcaption>
            <div class="date"><span class="day">24</span><span class="month">Jul</span></div>
            <h3>El stand de los besos 2</h3>
            <p>
              Después de un verano romántico juntos, Noah se va a Harvard, y Elle regresa a la escuela de secundaria
              para cursar su último año.
            </p>
            <a href="../Component/MeGusta2.php" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-primary btn-sm">Me Gusta</button></a>
            <a href="https://www.youtube.com/watch?v=R7l4O-6TmBE" class="position-relative" role="button"
              aria-pressed="true">
              <button type="button" class="btn btn-secondary btn-sm">Trailer</button></a>
          </figcaption>
        </figure>
        <figure class="snip1527">
          <div class="image"><img src="../assets/img/estrenos/Vivarium-751492423-large.jpg" alt="pr-sample25" /></div>
          <figcaption>
            <div class="date"><span class="day">11</span><span class="month">Mar</span></div>
            <h3>Vivarium</h3>
            <p>
              Una joven pareja visita una inmobiliaria para comprar una casa. Un extraño agente los acompaña a una
              nueva, misteriosa y peculiar urbanización para mostrarles una vivienda unifamiliar. Allí se quedarán
              atrapados en una laberíntica pesadilla.
            </p>
            <a href="../Component/MeGusta2.php" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-primary btn-sm">Me Gusta</button></a>
            <a href="https://www.youtube.com/watch?v=SvE7HGwxA40" class="position-relative" role="button"
              aria-pressed="true">
              <button type="button" class="btn btn-secondary btn-sm">Trailer</button></a>
          </figcaption>
        </figure>
        <br>
        <figure class="snip1527">
          <div class="image"><img src="../assets/img/estrenos/unnamed (2).jpg" alt="pr-sample25" /></div>
          <figcaption>
            <div class="date"><span class="day">14</span><span class="month">Jul</span></div>
            <h3>Shaft</h3>
            <p>
              Cuando su mejor amigo muere en circunstancias poco claras, un agente del FBI experto en ciberseguridad se
              une a su padre, el legendario John Shaft, para navegar las calles del Harlem de Nueva York, descubrir la
              verdad y resolver el crimen.
            </p>
            <a href="../Component/MeGusta2.php" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-primary btn-sm">Me Gusta</button></a>
            <a href="https://www.youtube.com/watch?v=TuFtQFYxDv4" class="position-relative" role="button"
              aria-pressed="true">
              <button type="button" class="btn btn-secondary btn-sm">Trailer</button></a>
          </figcaption>
        </figure><br>
        <figure class="snip1527">
          <div class="image"><img src="../assets/img/estrenos/fatal-affair.jpg" alt="pr-sample25" /></div>
          <figcaption>
            <div class="date"><span class="day">16</span><span class="month">Jul</span></div>
            <h3>Encuentro fatal</h3>
            <p>
              Ellie intenta arreglar su matrimonio con su marido Marcus después de un breve encuentro con un viejo
              amigo, David, solo para descubrir que Davids es mucho más peligroso e inestable de lo que parece.
            </p>
            <a href="../Component/MeGusta2.php" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-primary btn-sm">Me Gusta</button></a>
            <a href="https://www.youtube.com/watch?v=I2W1XvYAyNk" class="position-relative" role="button"
              aria-pressed="true">
              <button type="button" class="btn btn-secondary btn-sm">Trailer</button></a>
          </figcaption>
        </figure>

        </figure>
      </div>

      <div class="container">
    <div class="col-md-6 col-lg-8 mx-auto">
            <br><br>
            <p class="copyright text-muted text-center">InfoFlims 2020 | Diseñor web por <a href="https://energia-p.000webhostapp.com/">Axel Aranibar</a></p>
            <a href="contact.html"><strong>Contactarnos</strong></a><br><br><br>
          </div>
    </div>


      <script src="../assets/js/jquery.min.js"></script>
      <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
      <script src="../assets/js/Card-Carousel.js"></script>

</body>

</html>