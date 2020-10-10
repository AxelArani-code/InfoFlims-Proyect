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
  <link rel="stylesheet" href=".././assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i">
  <link rel="stylesheet" href=".././assets/css/Card-Carousel-1.css">
  <link rel="stylesheet" href=".././assets/css/Card-Carousel.css">
  <link rel="stylesheet" href=".././assets/css/News-Cards.css">

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
      <p class="navbar-brand">Hellox,<b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>.</p><button
        data-toggle="collapse" class="navbar-toggler" data-target="#navbarResponsive"><span
          class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="nav navbar-nav ml-auto">
          <li class="nav-item" role="presentation"><a class="nav-link" href="Home.php">Flims</a></li>
          <li class="nav-item" role="presentation"><a class="nav-link" href="SeriesN.php">Series</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
              aria-expanded="false">users</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" role="presentation" href="reset-password2.php">Change Password</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" role="presentation" href="../logout.php">Sign off</a>
            </div>
          </li>
          <div class="btn-group" role="group">
            <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              English
            </button>
            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
              <a class="dropdown-item" href="../Page/registered.php">Spanish</a>
            </div>
          </div>
        </ul>
      </div>
    </div>
  </nav>
  <header class="masthead text-center text-white">
    <div class="masthead-content">
      <div class="container">
        <h1 class="masthead-heading mb-0">The best premieres you will see</h1><a
          class="btn btn-primary btn-xl rounded-pill mt-5" role="button" href="premieres.php">Premieres</a>
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
      <h1 class="masthead-heading mb-0">Featured</h1><br><br>
    </div>


    <section>
      <div class="container">
        <figure class="snip1527">
          <div class="image">
            <img src="../assets/img/sonic-the-hedgehog-4k.jpg" alt="pr-sample23" /></div>
          <figcaption>
            <div class="date"><span class="day">14</span><span class="month">Febr</span></div>
            <h3>Sonic: The Movie</h3>
            <p>
              After discovering an incredibly fast blue hedgehog, a small town police officer must help him defeat an
              evil genius.
            </p>
            <a href=".././Component/ItLikeIt1.php" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-primary btn-sm">I like it</button></a>
            <a href="https://youtu.be/v1ljrA7P0to" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-secondary btn-sm">Trailer</button></a>
          </figcaption>
        </figure>
        <figure class="snip1527">
          <div class="image"><img src="https://www.cinecalidad.is/wp-content/uploads/2020/03/aves-de-presa-y-la-fantabulosa-emancipacion-de-harley-quinn-4k.jpg"
              alt="pr-sample24" /></div>
          <figcaption>
            <div class="date"><span class="day">29</span><span class="month">Ene</span></div>
            <h3>Birds of prey</h3>
            <p>
              When Gotham's nefarious villain Roman Sionis and his right-hand man, Zsasz, demand a bounty for a young
              woman named Cass, the entire city begins searching for her.
            </p>
            <a href=".././Component/ItLikeIt1.php" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-primary btn-sm">I like it</button></a>
            <a href="https://youtu.be/xthGgPbyhD4" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-secondary btn-sm">Trailer</button></a>
          </figcaption>
        </figure>
        <figure class="snip1527">
          <div class="image"><img src="https://www.cinecalidad.is/wp-content/uploads/2020/04/bad-boys-for-life-4k.jpg" alt="pr-sample25" /></div>
          <figcaption>
            <div class="date"><span class="day">16</span><span class="month">Ene</span></div>
            <h3>Bad boys forever</h3>
            <p>
              Marcus and Mike must confront career changes and a mid-life crisis when they join an elite team.
            </p>
            <a href=".././Component/ItLikeIt1.php" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-primary btn-sm">I like it</button></a>
            <a href="https://youtu.be/HxbngF7jz3w" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-secondary btn-sm">Trailer</button></a>
          </figcaption>
        </figure>
        <figure class="snip1527">
          <div class="image"><img src="../assets/img/la-vieja-guardia.jpg" alt="pr-sample23" /></div>
          <figcaption>
            <div class="date"><span class="day">10</span><span class="month">Juli</span></div>
            <h3>The old guard</h3>
            <p>
              A secret group of mercenaries with the mysterious inability to die have fought for centuries. But when his
              extraordinary team abilities are suddenly exposed during a mission.
            </p>
            <a href=".././Component/ItLikeIt1.php" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-primary btn-sm">I like it</button></a>
            <a href="https://youtu.be/OCDhMOrCEoc" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-secondary btn-sm">Trailer</button></a>
          </figcaption>
        </figure>
        <figure class="snip1527 ">
          <div class="image"><img src="../assets/img/the-invisible-man-4k.jpg" alt="pr-sample24" /></div>
          <figcaption>
            <div class="date"><span class="day">27</span><span class="month">Febr</span></div>
            <h3>The invisible man</h3>
            <p>
              When Cecilia's ex takes his own life and leaves her his fortune, she suspects that his death was a hoax.
              As a series of coincidences turn lethal.
            </p>
            <a href=".././Component/ItLikeIt1.php" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-primary btn-sm">I like it</button></a>
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
              April 6, 1917. As a regiment prepares to enter enemy territory, two soldiers are tasked with racing
              against time to deliver a message that will prevent 1600 men from walking straight into a death trap.
            </p>
            <a href=".././Component/ItLikeIt1.php" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-primary btn-sm">I like it</button></a>
            <a href="https://youtu.be/YjJS6X_MxFQ" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-secondary btn-sm">Trailer</button></a>
          </figcaption>
        </figure>
        <figure class="snip1527">
          <div class="image"><img src="../assets/img/jumanji-next-level-4k.jpg" alt="pr-sample23" /></div>
          <figcaption>
            <div class="date"><span class="day">09</span><span class="month">Ene</span></div>
            <h3>Jumanji: The Next Level</h3>
            <p>
              The group is back but the game has changed. When they return to Jumanji to rescue one of their own,
              players must venture into unknown and unexplored places.
            </p>
            <a href=".././Component/ItLikeIt1.php" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-primary btn-sm">I like it</button></a>
            <a href="https://youtu.be/cohV0RtTfQw" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-secondary btn-sm">Trailer</button></a>
          </figcaption>
        </figure>
        <figure class="snip1527 ">
          <div class="image"><img src="../assets/img/malibu-rescue-the-next-wave.jpg" alt="pr-sample24" /></div>
          <figcaption>
            <div class="date"><span class="day">17</span><span class="month">Nov</span></div>
            <h3>Malibu vigilantes</h3>
            <p>
              It's summer and everyone's favorite rescuers, the Flounders, are back in Tower 2. With the international
              junior rescuers championship taking place in California, the eyes of the planet are on the beach in
              Malibu.
            </p>
            <a href=".././Component/ItLikeIt1.php" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-primary btn-sm">I like it</button></a>
            <a href="https://youtu.be/_dOsJFhJNGc" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-secondary btn-sm">Trailer</button></a>
          </figcaption>
        </figure>
        <figure class="snip1527">
          <div class="image"><img src="../assets/img/proyecto-power.jpg" alt="pr-sample25" /></div>
          <figcaption>
            <div class="date"><span class="day">01</span><span class="month">Dec</span></div>
            <h3>Power Project</h3>
            <p>
              A pill that gives its users unique and unpredictable superpowers for five minutes hits the streets of New
              Orleans.
            </p>
            <a href=".././Component/ItLikeIt1.php" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-primary btn-sm">I like it</button></a>
            <a href="https://youtu.be/T-wJ7EYAIPI" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-secondary btn-sm">Trailer</button></a>
          </figcaption>
        </figure>
      </div>
    </section>

    
    <div class="container">
    <div class="col-md-6 col-lg-8 mx-auto">
            <br><br>
            <p class="copyright text-muted text-center">InfoFlims 2020 | Web designer by Axel Aranibar</p>
          </div>
    </div>

    
    <script src=".././assets/js/jquery.min.js"></script>
    <script src=".././assets/bootstrap/js/bootstrap.min.js"></script>
    <script src=".././assets/js/Card-Carousel.js"></script>

</body>

</html>