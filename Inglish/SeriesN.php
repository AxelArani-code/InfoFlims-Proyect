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
              <a class="dropdown-item" href="../Page/series.php">Spanish</a>
            </div>
          </div>
        </ul>
      </div>
    </div>
  </nav>
  <br><br><br><br><br><br>

  <div class="masthead-content">
    <div class="container">
      <h1 class="masthead-heading mb-0">The best series of 2020</h1><br><br>
    </div>
  </div>

  <section>
    <div class="container">
      <figure class="snip1527">
        <div class="image">
          <img src="../assets/img/series/13b278af21ea982f6e410be6ccee79af.jpg" alt="pr-sample23" /></div>
        <figcaption>
          <div class="date  "><span class="day">05</span><span class="month">Oct</span></div>

          <h3>Élite</h3>
          <p>
            Las Encinas is the most exclusive school in Spain, the place where the children of the elite study and where
            three lower-class young people have just been admitted, coming from a public school in ruins.
          </p><br>

          <a href=".././Component/ItLikeIt3.php" class="position-relative" role="button" aria-pressed="true">
            <button type="button" class="btn btn-primary btn-sm">I like it</button></a>
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
            Otis always has an answer regarding sex. Otis teams up with his friend Maeve to open a sex therapy clinic at
            school.
          </p><br>
          <a href=".././Component/ItLikeIt3.php" class="position-relative" role="button" aria-pressed="true">
            <button type="button" class="btn btn-primary btn-sm">I like it</button></a>
          <a href="estrenos.php" class="position-relative" role="button" aria-pressed="true">
            <button type="button" class="btn btn-secondary btn-sm">Trailer</button></a>
        </figcaption>
      </figure>
      <figure class="snip1527">
        <div class="image"><img src="../assets/img/series/06109eb585bd131f4a9319f90a6d4266.jpg" alt="pr-sample25" />
        </div>
        <figcaption>
          <div class="date"><span class="day">02</span><span class="month">May</span></div>
          <h3>The paper house</h3>
          <p>
            An organized gang of thieves has the objective of committing the heist of the century at the National Mint
            and Stamp Factory. Five months of preparation will be reduced to eleven days to be able to carry out the big
            coup successfully.
          </p><br>

          <a href=".././Component/ItLikeIt3.php" class="position-relative" role="button" aria-pressed="true">
            <button type="button" class="btn btn-primary btn-sm">I like it</button></a>
          <a href="https://youtu.be/HxbngF7jz3w" class="position-relative" role="button" aria-pressed="true">
            <button type="button" class="btn btn-secondary btn-sm">Trailer</button></a>
        </figcaption>
      </figure>
      <figure class="snip1527">
        <div class="image"><img src="../assets/img/series/descarga (2).jpg" alt="pr-sample23" /></div>
        <figcaption>
          <div class="date"><span class="day">10</span><span class="month">Juli</span></div>
          <h3>Unorthodox</h3>
          <p>
            A Jewish woman runs away from an arranged marriage in Brooklyn to start a new life abroad.
          </p><br>

          <a href=".././Component/ItLikeIt3.php" class="position-relative" role="button" aria-pressed="true">
            <button type="button" class="btn btn-primary btn-sm">I like it</button></a>
          <a href="https://youtu.be/OCDhMOrCEoc" class="position-relative" role="button" aria-pressed="true">
            <button type="button" class="btn btn-secondary btn-sm">Trailer</button></a>
        </figcaption>
      </figure>
      <figure class="snip1527 ">
        <div class="image"><img src="../assets/img/series/descarga (3).jpg" alt="pr-sample24" /></div>
        <figcaption>
          <div class="date"><span class="day">29</span><span class="month">May</span></div>
          <h3>Space force</h3>
          <p>
            A decorated general reluctantly collaborates with an eccentric scientist in the deployment of the new US
            Army agency on a mission to return to the Moon.
          </p><br>

          <a href=".././Component/ItLikeIt3.php" class="position-relative" role="button" aria-pressed="true">
            <button type="button" class="btn btn-primary btn-sm">I like it</button></a>
          <a href="https://youtu.be/Yghnm_17a8w" class="position-relative" role="button" aria-pressed="true">
            <button type="button" class="btn btn-secondary btn-sm">Trailer</button></a>
        </figcaption>
      </figure>
      <figure class="snip1527">
        <div class="image"><img src="../assets/img/series/descarga (4).jpg" alt="pr-sample25" /></div>
        <figcaption>
          <div class="date"><span class="day">15</span><span class="month">Abr</span></div>
          <h3>Dead to me</h3>
          <p>
            A widow still grieving for her husband's death and an optimistic woman with a terrible secret form a
            powerful friendship.
          </p><br>

          <a href=".././Component/ItLikeIt3.php" class="position-relative" role="button" aria-pressed="true">
            <button type="button" class="btn btn-primary btn-sm">I like it</button></a>
          <a href="https://youtu.be/YjJS6X_MxFQ" class="position-relative" role="button" aria-pressed="true">
            <button type="button" class="btn btn-secondary btn-sm">Trailer</button></a>
        </figcaption>
      </figure>
      <figure class="snip1527">
        <div class="image"><img src="https://pics.filmaffinity.com/El_ltimo_baile_Miniserie_de_TV-389158062-large.jpg"
            alt="pr-sample23" /></div>
        <figcaption>
          <div class="date"><span class="day">19</span><span class="month">Abr</span></div>
          <h3>The last Dance</h3>
          <p>
            In the fall of 1997, Michael Jordan and the Chicago Bulls allowed a film crew to follow them as they sought
            their sixth NBA title in eight seasons. The portrait of one of the greatest athletes in sport and a famous
            team.
          </p><br>

          <a href=".././Component/ItLikeIt3.php" class="position-relative" role="button" aria-pressed="true">
            <button type="button" class="btn btn-primary btn-sm">I like it</button></a>
          <a href="https://youtu.be/cohV0RtTfQw" class="position-relative" role="button" aria-pressed="true">
            <button type="button" class="btn btn-secondary btn-sm">Trailer</button></a>
        </figcaption>
      </figure>
      <figure class="snip1527 ">
        <div class="image"><img src="../assets/img/series/I-Am-Not-Okay-with-This.jpg" alt="pr-sample24" /></div>
        <figcaption>
          <div class="date"><span class="day">26</span><span class="month">Febr</span></div>
          <h3>This shit gets over me</h3>
          <p>
            A teenage girl goes through the complexities of high school, family, and her sexuality.
          </p><br>

          <a href=".././Component/ItLikeIt3.php" class="position-relative" role="button" aria-pressed="true">
            <button type="button" class="btn btn-primary btn-sm">I like it</button></a>
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
            A financier moves his family to the Ozarks. After a money laundering scheme goes awry, he is forced to pay a
            debt to a Mexican drug lord to support his family.
          </p><br>

          <a href=".././Component/ItLikeIt3.php" class="position-relative" role="button" aria-pressed="true">
            <button type="button" class="btn btn-primary btn-sm">I like it</button></a>
          <a href="https://youtu.be/T-wJ7EYAIPI" class="position-relative" role="button" aria-pressed="true">
            <button type="button" class="btn btn-secondary btn-sm">Trailer</button></a>
        </figcaption>
      </figure>
    </div>

    <div class="container">
    <div class="col-md-6 col-lg-8 mx-auto">
            <br><br>
            <p class="copyright text-muted text-center">InfoFlims 2020 | Web designer by Axel Aranibar</p>
          </div>
    </div>

    
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/Card-Carousel.js"></script>

</body>

</html>