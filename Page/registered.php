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
  <title></title>
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
  <link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i">
  <link rel="stylesheet" href="../assets/css/Card-Carousel-1.css">
  <link rel="stylesheet" href="../assets/css/Card-Carousel.css">
  <link rel="stylesheet" href="../assets/css/News-Cards.css">
  <link rel="stylesheet" href="./php/registered.php">
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
          <li class="nav-item" role="presentation"><a class="nav-link" href="series.php">Series</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
              aria-expanded="false">Usuarios</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" role="presentation" href="../Page/perfil.php"  >Perfil</a>
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
              <a class="dropdown-item" href="../Inglish/Home.php">English</a>
            </div>
          </div>
        </ul>
      </div>
    </div>
  </nav>
  <header class="masthead text-center text-white">
    <div class="masthead-content">
      <div class="container">
        <h1 class="masthead-heading mb-0">Los mejores estrenos que veras</h1><a
          class="btn btn-primary btn-xl rounded-pill mt-5" role="button" href="estrenos.php">Estrenos</a>
      </div>
    </div>
    <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>
  </header>
  <br><br>
  
  <div class="masthead-content">
    <div class="container">
      <h1 class="masthead-heading mb-0">Destacados</h1><br><br>
    </div>

    <section>
      <div class="container">
        <figure class="snip1527">
          <div class="image">
            <img src="../assets/img/sonic-the-hedgehog-4k.jpg" alt="pr-sample23" /></div>
          <figcaption>
            <div class="date"><span class="day">14</span><span class="month">Febr</span></div>
            <h3>Sonic: La película</h3>
            <p>
              Después de descubrir a un increíblemente veloz erizo azul, un oficial de policía de un pequeño pueblo debe
              ayudarlo a derrotar a un genio malvado.
            </p>

            <a href="../Component/MeGusta1.php" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-primary btn-sm">Me Gusta</button></a>
            <a href="https://youtu.be/v1ljrA7P0to" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-secondary btn-sm">Trailer</button></a>
          </figcaption>
        </figure>
        <figure class="snip1527">
          <div class="image"><img src="https://www.cinecalidad.is/wp-content/uploads/2020/03/aves-de-presa-y-la-fantabulosa-emancipacion-de-harley-quinn-4k.jpg"
              alt="pr-sample24" /></div>
          <figcaption>
            <div class="date"><span class="day">29</span><span class="month">Ene</span></div>
            <h3>Aves de presa</h3>
            <p>
              Cuando el nefasto villano de Gotham, Roman Sionis, y su mano derecha, Zsasz, piden una recompensa por una
              joven llamada Cass, toda la ciudad comienza a buscarla.
            </p>

            <a href="../Component/MeGusta1.php" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-primary btn-sm">Me Gusta</button></a>
            <a href="https://youtu.be/xthGgPbyhD4" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-secondary btn-sm">Trailer</button></a>
          </figcaption>
        </figure>
        <figure class="snip1527">
          <div class="image"><img src="https://www.cinecalidad.is/wp-content/uploads/2020/04/bad-boys-for-life-4k.jpg" alt="pr-sample25" /></div>
          <figcaption>
            <div class="date"><span class="day">16</span><span class="month">Ene</span></div>
            <h3>Bad Boys para siempre</h3>
            <p>
              Marcus y Mike deben confrontar cambios de carrera y crisis de edad media, cuando se unen a un equipo de
              élite.
            </p>

            <a href="../Component/MeGusta1.php" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-primary btn-sm">Me Gusta</button></a>
            <a href="https://youtu.be/HxbngF7jz3w" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-secondary btn-sm">Trailer</button></a>
          </figcaption>
        </figure>
        <figure class="snip1527">
          <div class="image"><img src="../assets/img/la-vieja-guardia.jpg" alt="pr-sample23" /></div>
          <figcaption>
            <div class="date"><span class="day">10</span><span class="month">Juli</span></div>
            <h3>La vieja guardia</h3>
            <p>
              Un grupo secreto de mercenarios con la misteriosa inhabilidad de morir han luchado por siglos. Pero cuando
              sus extraordinarias habilidades del equipo son repentinamente expuestas durante una misión.
            </p>
            <a href="../Component/MeGusta1.php" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-primary btn-sm">Me Gusta</button></a>
            <a href="https://youtu.be/OCDhMOrCEoc" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-secondary btn-sm">Trailer</button></a>
          </figcaption>
        </figure>
        <figure class="snip1527 ">
          <div class="image"><img src="../assets/img/the-invisible-man-4k.jpg" alt="pr-sample24" /></div>
          <figcaption>
            <div class="date"><span class="day">27</span><span class="month">Febr</span></div>
            <h3>El hombre invisible</h3>
            <p>
              Cuando el ex de Cecilia se quita la vida y le deja su fortuna, ella sospecha que su muerte fue un engaño.
              Conforme una serie de coincidencias se vuelven letales.
            </p>
            <a href="../Component/MeGusta1.php" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-primary btn-sm">Me Gusta</button></a>
            <a href="https://youtu.be/Yghnm_17a8w" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-secondary btn-sm">Trailer</button></a>
          </figcaption>
        </figure>
        <figure class="snip1527">
          <div class="image"><img src="../assets/img/1917-4k.jpg" alt="pr-sample25" /></div>
          <figcaption>
            <div class="date"><span class="day">04</span><span class="month">Dec</span></div>
            <h3>1917</h3>
            <p>
              6 de abril de 1917. Mientras un regimiento se alista para adentrarse en territorio enemigo, dos soldados
              reciben la tarea de correr contra el tiempo para entregar un mensaje que evitará que 1600 hombres caminen
              directo hacia una trampa mortal.
            </p>

            <a href="../Component/MeGusta1.php" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-primary btn-sm">Me Gusta</button></a>
            <a href="https://youtu.be/YjJS6X_MxFQ" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-secondary btn-sm">Trailer</button></a>
          </figcaption>
        </figure>
        <figure class="snip1527">
          <div class="image"><img src="../assets/img/jumanji-next-level-4k.jpg" alt="pr-sample23" /></div>
          <figcaption>
            <div class="date"><span class="day">09</span><span class="month">Ene</span></div>
            <h3>Jumanji: El siguiente nivel</h3>
            <p>
              El grupo ha vuelto pero el juego ha cambiado. Cuando regresan a Jumanji para rescatar a uno de los suyos,
              los jugadores deberán aventurarse por lugares desconocidos e inexplorados.
            </p>
            <a href="../Component/MeGusta1.php" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-primary btn-sm">Me Gusta</button></a>
            <a href="https://youtu.be/cohV0RtTfQw" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-secondary btn-sm">Trailer</button></a>
          </figcaption>
        </figure>
        <figure class="snip1527 ">
          <div class="image"><img src="../assets/img/malibu-rescue-the-next-wave.jpg" alt="pr-sample24" /></div>
          <figcaption>
            <div class="date"><span class="day">17</span><span class="month">Nov</span></div>
            <h3>Los vigilantes de Malibú</h3>
            <p>
              Es verano y los rescatistas favoritos de todos, los Flounders, están de vuelta en la Torre 2. Con el
              campeonato internacional de rescatistas junior que se llevará a cabo en California, los ojos del planeta
              están en la playa de Malibú.
            </p>
            <a href="../Component/MeGusta1.php" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-primary btn-sm">Me Gusta</button></a>
            <a href="https://youtu.be/_dOsJFhJNGc" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-secondary btn-sm">Trailer</button></a>
          </figcaption>
        </figure>
        <figure class="snip1527">
          <div class="image"><img src="../assets/img/proyecto-power.jpg" alt="pr-sample25" /></div>
          <figcaption>
            <div class="date"><span class="day">01</span><span class="month">Dec</span></div>
            <h3>Proyecto Power</h3>
            <p>
              Una píldora que le otorga a sus usuarios superpoderes únicos e impredecibles durante cinco minutos llega a
              las calles de Nueva Orleans.
            </p>
            <a href="../Component/MeGusta1.php" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-primary btn-sm">Me Gusta</button></a>
            <a href="https://youtu.be/T-wJ7EYAIPI" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-secondary btn-sm">Trailer</button></a>
          </figcaption>
        </figure>
      </div>
    </section>    
    <div class="container">
    <div class="col-md-6 col-lg-8 mx-auto">
            <br><br>
            <p class="copyright text-muted text-center">InfoFlims 2020 | Diseñor web por Axel Aranibar</p>
            <a href="contact.html"><strong>Contactarnos</strong></a><br><br><br>
          </div>
    </div>

    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/Card-Carousel.js"></script>

</body>

</html>