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
      <p class="navbar-brand">Hello,<b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>.</p><button
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
              <a class="dropdown-item" role="presentation" href="../Page/perfil.php">Change Password</a>
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
              <a class="dropdown-item" href="../Page/estrenos.php">Spanish</a>
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
              A group of students are trapped inside a mysterious cave where they discover that time passes differently
              underground than on the surface.
            </p>
            <a href=".././Component/ItLikeIt2.php" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-primary btn-sm">I like it</button></a>
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
              After losing her job, crashing her car, and discovering her husband's infidelity, a woman goes on a trip
              with her struggling grandmother.
            </p>
            <a href=".././Component/ItLikeIt2.php" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-primary btn-sm">I like it</button></a>
            <a href="https://youtu.be/N8d6Bpl2eAo" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-secondary btn-sm">Trailer</button></a>
          </figcaption>
        </figure>
        <figure class="snip1527">
          <div class="image"><img src="../assets/img/estrenos/balle_perdue-785684707-large.jpg" alt="pr-sample25" />
          </div>
          <figcaption>
            <div class="date"><span class="day">19</span><span class="month">Jul</span></div>
            <h3>Lost bullet</h3>
            <p>
              Mechanic Lino is passionate about combat cars, but when he faces corrupt cops, they offer him a deal he
              cannot refuse.
            </p>
            <a href="./Component/MeGusta2.php" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-primary btn-sm">I like it</button></a>
            <a href="https://www.youtube.com/watch?v=rRvokiv8gZM" class="position-relative" role="button"
              aria-pressed="true">
              <button type="button" class="btn btn-secondary btn-sm">Trailer</button></a>
          </figcaption>
        </figure>
        <figure class="snip1527">
          <div class="image"><img src="../assets/img/estrenos/f768x1-950002_950129_155.png" alt="pr-sample23" /></div>
          <figcaption>
            <div class="date"><span class="day">7</span><span class="month">Mayo</span></div>
            <h3>Family crimes</h3>
            <p>
              An adult married couple, living in one of the most luxurious neighborhoods in Buenos Aires, must face the
              accusation of attempted murder that weighs on their son Daniel.
            </p>
            <a href=".././Component/ItLikeIt2.php" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-primary btn-sm">I like it</button></a>
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
              A young law student gets a job at a public relations company, and what seemed like a simple task turns
              into a troll farm. There he excels in the business of spreading fake news and hate online, targeted by
              personalities, celebrities and politicians.
            </p>
            <a href=".././Component/ItLikeIt2.php" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-primary btn-sm">I like it</button></a>
            <a href="https://www.youtube.com/watch?v=gRrBVSG99Kk" class="position-relative" role="button"
              aria-pressed="true">
              <button type="button" class="btn btn-secondary btn-sm">Trailer</button></a>
          </figcaption>
        </figure>
        <figure class="snip1527">
          <div class="image"><img src="../assets/img/estrenos/the-kissing-booth-2.jpg" alt="pr-sample25" /></div>
          <figcaption>
            <div class="date"><span class="day">24</span><span class="month">Jul</span></div>
            <h3>The kissing booth 2</h3>
            <p>
              After a romantic summer together, Noah goes to Harvard, and Elle returns to high school for her senior
              year.
            </p>
            <a href=".././Component/ItLikeIt2.php" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-primary btn-sm">I like it</button></a>
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
              A young couple visits a real estate agency to buy a house. A strange agent accompanies them to a new,
              mysterious and peculiar urbanization to show them a single-family home. There they will be trapped in a
              labyrinthine nightmare.
            </p>
            <a href=".././Component/ItLikeIt2.php" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-primary btn-sm">I like it</button></a>
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
              When his best friend dies under unclear circumstances, a cybersecurity expert FBI agent teams up with his
              father, the legendary John Shaft, to navigate the streets of New York's Harlem, uncover the truth and
              solve the crime.
            </p>
            <a href=".././Component/ItLikeIt2.php" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-primary btn-sm">I like it</button></a>
            <a href="https://www.youtube.com/watch?v=TuFtQFYxDv4" class="position-relative" role="button"
              aria-pressed="true">
              <button type="button" class="btn btn-secondary btn-sm">Trailer</button></a>
          </figcaption>
        </figure><br>
        <figure class="snip1527">
          <div class="image"><img src="../assets/img/estrenos/fatal-affair.jpg" alt="pr-sample25" /></div>
          <figcaption>
            <div class="date"><span class="day">16</span><span class="month">Jul</span></div>
            <h3>Fatal encounter</h3>
            <p>
              Ellie tries to fix her marriage to her husband Marcus after a brief run-in with an old friend, David, only
              to discover that Davids is far more dangerous and unstable than he appears.
            </p>
            <a href=".././Component/ItLikeIt2.php" class="position-relative" role="button" aria-pressed="true">
              <button type="button" class="btn btn-primary btn-sm">I like it</button></a>
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
            <p class="copyright text-muted text-center">InfoFlims 2020 | Web designer by Axel Aranibar</p>
          </div>
    </div>


      <script src=".././assets/js/jquery.min.js"></script>
      <script src=".././assets/bootstrap/js/bootstrap.min.js"></script>
      <script src=".././assets/js/Card-Carousel.js"></script>

</body>

</html>