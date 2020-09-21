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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Netflix</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i">

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
              <a class="dropdown-item" href="../Inglish/Home.php">English</a>
            </div>
          </div>
        </ul>
      </div>
    </div>
  </nav><br><br><br><br>

  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../assets/img/Netflix/Mejores-Peliculas-en-Netflix-en-2020.jpg" class="d-block w-100 " alt="...">
      </div>
      <div class="carousel-item">
        <img src="../assets/img/Netflix/Netflix-Estrenos-Septiembre-2020-Semana-3-1.jpg" class="d-block w-100"
          alt="...">
      </div>
      <div class="carousel-item">
        <img src="../assets/img/Netflix/Peliculas-de-Accion-Netflix.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="../assets/img/Netflix/Peliculas-en-Netflix-Terror-Recomendadas-Imagen-Destacada.jpg"
          class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <br><br>
  <p class="display-4">Lo mejor de Netflix</p>
  <div class="container">
    <div class="row row-cols-1 row-cols-md-3">
      <div class="card-deck">
        <div class="card mb-3">
          <img src="../assets/img/Netflix/Cards/el-diablo-a-todas-horas-min.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">El diablo a todas horas</h5>
            <p class="card-text">Robert Pattinson se negó a desvelar su acento sureño para la película de Netflix hasta
              que comenzó el rodaje.</p>

            <div class="card" style="width: 2.5rem;">
              <a href="https://www.netflix.com/search?q=El%20diablo%20a%20todas%20horas&jbv=81028870"><img
                  src="../assets/img/Icons/netflix_94400.ico" class="card-img-top" alt=""></a>
            </div>
            <br><br>

            <div class="accordion" id="accordionExample">
              <div class="card">
                <div class="card-header" id="headingTwo">
                  <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                      data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Breve descripción
                    </button>
                  </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div class="card-body">
                    Netflix estrenó la muy esperada adaptación de 'El diablo a todas horas', una película con un reparto
                    de primer nivel en el que sobresalen nombres como Tom Holland o Robert Pattinson, ambos nacidos en
                    Reino Unido. Las particularidades de sus personajes aquí obligaban a que ambos alterasen su acento
                    natural por uno propio del sur de Estados Unidos y Antonio Campos, director y coguionista de la
                    cinta, ha comentado que Pattinson se negó a desvelar el suyo hasta que comenzó el rodaje.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>


      <div class="card mb-3">
        <img src="../assets/img/Netflix/Cards/Chris Hemsworth - “Misión de rescate”.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Misión de rescate</h5>
          <p class="card-text">Netflix viene subiendo a su plataforma películas de acción, de producción propia, que se
            parecen cada vez más unas a otras. Sus protagonistas son aguerridos, casi casi indestructibles, y son
            encarnados por figuras de atracción taquillera, al menos en el cine.</p>

          <div class="card" style="width: 2.5rem;">
            <a href="https://www.netflix.com/search?q=accion&jbv=80230399"><img
                src="../assets/img/Icons/netflix_94400.ico" class="card-img-top" alt=""></a>
          </div>
          <br><br>

          <div class="accordion" id="accordionExample">
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Breve descripción
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                  Netflix estrenó la muy esperada adaptación de 'El diablo a todas horas', una película con un reparto
                  de
                  primer nivel en el que sobresalen nombres como Tom Holland o Robert Pattinson, ambos nacidos en Reino
                  Unido. Las particularidades de sus personajes aquí obligaban a que ambos alterasen su acento natural
                  por
                  uno propio del sur de Estados Unidos y Antonio Campos, director y coguionista de la cinta, ha
                  comentado
                  que Pattinson se negó a desvelar el suyo hasta que comenzó el rodaje.
                </div>
              </div>
            </div>
          </div>
        </div>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
      <div class="card mb-3">
        <img src="../assets/img/Netflix/Cards/jurassic-world-camp-cretaceous.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Jurassic World: Campamento Cretácico</h5>
          <p class="card-text">El triunfal estreno de ‘Parque jurásico’ en 1993 provocó la aparición de la dinomanía, un
            fenómeno de corta vida que llevó a que millones de niños de todo el mundo sintiesen un gran interés hacia
            ese tipo de criaturas.</p>

          <div class="card" style="width: 2.5rem;">
            <a href="https://www.netflix.com/browse?jbv=81009646"><img
                src="../assets/img/Icons/netflix_94400.ico" class="card-img-top" alt=""></a>
          </div>
          <br><br>

          <div class="accordion" id="accordionExample">
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Breve descripción
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                  ‘Jurassic World: Campamento Cretácico’ no es la gran serie que merecía una franquicia como la que nos
                  ocupa, pero al menos tampoco es una pérdida de tiempo. Simplemente es una aventura en paralelo a la
                  película de 2013 que no tiene la garra suficiente para conseguir una verdadera identidad propia. En el
                  mejor de los pasos es un pasatiempo que sigue los rasgos distintivos de la saga, pero hace falta algo
                  más que eso para enganchar al espectador.
                </div>
              </div>
            </div>
          </div>
        </div>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
  </div>
  <div class="container">
    <div class="row row-cols-1 row-cols-md-3">
      <div class="card-deck">
        <div class="card mb-3">
          <img src="../assets/img/Netflix/Cards/El-Practicante-Netflix-1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">El practicante</h5>
            <p class="card-text">'El Practicante' es una historia de amor. Loca y enfermiza, pero no deja de ser la historia de dos almas en pena, desencantadas con su situación, que son incapaces de sacar adelante sus sueños en común. Lo que pasará a continuación, te sorprenderá.</p>

            <div class="card" style="width: 2.5rem;">
              <a href="https://www.netflix.com/browse?jbv=81136406"><img
                  src="../assets/img/Icons/netflix_94400.ico" class="card-img-top" alt=""></a>
            </div>
            <br><br>

            <div class="accordion" id="accordionExample">
              <div class="card">
                <div class="card-header" id="headingTwo">
                  <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                      data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Breve descripción
                    </button>
                  </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div class="card-body">
                    Mario Casas sigue viviendo su romance particular con Netflix, donde le vimos no hace mucho en la notable 'Hogar', donde componía un personaje muy alejado de sus roles habituales. Ahora, la estrella española une fuerzas con el particular estilo arisco de Carles Torras, que tras su laureada y polémica 'Callback' vuelve a fijar su mirada en personajes oscuros en 'El Practicante', estrenada hoy en la plataforma.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>

      </div>


      <div class="card mb-3 ">
        <img src="../assets/img/Netflix/Cards/Corazon-Loco-Pelicula-Imagen-Destacada.jpg" class="card-img-top" alt="...">
        <div class="card-body ">
          <h5 class="card-title">Corazón Loco</h5>
          <p class="card-text">El reparto cuenta con Adrián Suar, Soledad Villamil y Gabriela Toscano. Suar es uno de los actores de comedia romántica más populares de Argentina.</p>

          <div class="card" style="width: 2.5rem;">
            <a href="https://www.netflix.com/browse?jbv=81108677"><img
                src="../assets/img/Icons/netflix_94400.ico" class="card-img-top" alt=""></a>
          </div>
          <br><br>

          <div class="accordion" id="accordionExample">
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Breve descripción
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                  Corazón Loco Netflix: Película de comedia sigue a Fernando Ferro (Adrián Suar) un prestigioso traumatólogo que se puede considerar un hombre afortunado: todos los días se despierta, es abrazado por la mujer que lo ama, desayuna con su familia y se va a un trabajo donde es querido y respetado. Suena como una vida perfecta. Bueno, casi perfecto … en realidad está viviendo una doble vida. Vive en Buenos Aires, pero también en Mar del Plata.
                </div>
              </div>
            </div>
          </div>
        </div>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
      <div class="card mb-3">
        <img src="../assets/img/Netflix/Cards/El-Joven-Wallander-Netflix-Imagen-Destacada.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">El Joven Wallandere</h5>
          <p class="card-text">Reparto, Tráiler de serie basada en las novelas más vendidas de Kurt Wallander de Henning Mankell, se estrena en Netflix en el mes de septiembre.</p>

          <div class="card" style="width: 2.5rem;">
            <a href="https://www.netflix.com/search?q=el%20joven%20&jbv=81011098"><img
                src="../assets/img/Icons/netflix_94400.ico" class="card-img-top" alt=""></a>
          </div>
          <br><br>

          <div class="accordion" id="accordionExample">
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Breve descripción
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                  La serie es una reinvención moderna del legendario detective Kurt Wallander, que debe navegar en el entorno cada vez más violento de la Suecia actual. Cuando no puede salvar a un adolescente de un ataque espantoso, Wallander debe aprender a lidiar con su culpa para resolver el crimen.
                </div>
              </div>
            </div>
          </div>
        </div>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
  </div>
  </div>
  <div class="container">
    <div class="col-md-6 col-lg-8 mx-auto">
            <br><br>
            <p class="copyright text-muted text-center">InfoFlims 2020 | Diseñor web por<a href="https://energia-p.000webhostapp.com/">Axel Aranibar</a></p>
            <a href="contact.html"><strong>Contactarnos</strong></a><br><br><br>
          </div>
    </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>

</body>

</html>