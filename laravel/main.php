<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Main</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/blog.css">
  <link rel="stylesheet" href="css/div.css">
  <?php // link cdn per far funzionare le icone di font awesome ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <!-- sezione della navbar -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
    <a class=" navbar-brand" href="#">Space Z</a>
    <button class="navbar-toggler collapsed d-flex d-lg-none flex-column justify-content-around" type="button"
      data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
      aria-expanded="false" aria-label="Toggle navigation">
      <?php // customizzando il menu hamburger ?>
      <span class="toggler-icon top-bar"></span>
      <span class="toggler-icon middle-bar"></span>
      <span class="toggler-icon bottom-bar"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php"><i class="fa-solid fa-house"></i> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/chisiamo"><i class="fa-solid fa-users"></i> Chi siamo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/servizi"><i class="fa-solid fa-bell-concierge"></i> Servizi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/blog"><i class="fa-solid fa-earth-europe"></i> Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contatti"><i class="fa-solid fa-address-book"></i> Contatti</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- sezione dell'introduzione alla home page -->

  <section class="introduzione">
    <div class="container">
      <div class="row">

        <div class="col-md-6">
          <div class="text">
            Beyond limits <span class="space"> SPACE Z </span>, oggi rivoluzionario, domani iconico
          </div>
          <br>
          <div class="buttons">
            <div class="d-flex justify-content-center">
              <a href="#" class="btn btn-primary"> Esplora </a>
              <a href="#" class="btn btn-outline-secondary ms-3"> Partiamo </a>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <img src="img/hero-img.svg" alt="hero-img" class="w-100">

        </div>
      </div>
    </div>
  </section>
  <!-- sezione per contenuti -->
  <section class="contenuti">
    <div class="container">
      <div class="half text-header text-center">
        <h3> Comincia subito </h3>
        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, odio architecto. </p>
      </div>

      <div class="elementi text-center">
        <div class="row">
          <div class="col-md-4">
            <div class="icone">
              <img src="img/icons-1.svg" alt="icone">
            </div>
            <div class="desc">
              <h5> Crea un account </h5>
              <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem, dignissimos!</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="icone">
              <img src="img/icons-2.svg" alt="icone">
            </div>
            <div class="desc">
              <h5> Scegli la meta </h5>
              <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem, dignissimos!</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="icone">
              <img src="img/icons-3.svg" alt="icone">
            </div>
            <div class="desc">
              <h5> Raccontaci </h5>
              <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem, dignissimos!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--sezione per form -->
  <section class="formc">
      <div class="row">
        <div class="container w-50">
          <div class="text">
            <h1 class="text-center">Contattaci</h1>
          </div>

          <form action="database.php" method="POST" autocomplete="off">
            <div class="nome my-4">
              <label for="nome">Nome</label>
              <input type="text" name="nome" id="nome" class="form-control" placeholder="Inserisci qui il tuo nome"
                required>
            </div>
            <div class="cognome">
              <label for="cognome">Cognome</label>
              <input type="text" name="cognome" id="cognome" class="form-control"
                placeholder="Inserisci qui il tuo cognome" required>
            </div>
            <div class="email my-4">
              <label for="email">Email</label>
              <input type="email" name="email" id="email" class="form-control"
                placeholder="Inserisci qui la tua posta elettronica" required>
            </div>
            <div class="telefono my-4">
              <label for="telefono">Telefono</label>
              <input type="number" name="telefono" id="telefono" class="form-control"
                placeholder="Inserisci qui il tuo numero di telefono" required>
            </div>
            <div>
              <label for="messaggio">Messaggio:</label>
              <textarea name="messaggio" id="messaggio" class="form-control" cols="30" rows="5"
                placeholder="Scrivi un messaggio..."></textarea>
            </div>
            <button class="btn btn-success mt-4">Invia Messaggio</button>
          </form>
        </div>

        <div class="col-md-4">
          <div class="contatti">
            <h1> Space Z  </h1>
          </div>

          <div class="contatti">
            <h3> <i class="fa-solid fa-envelope"></i> </i> Email: </h3>
            <p> spaceZ@planet.universe
          </div>

          <div class="contatti">
            <h3> <i class="fa-solid fa-location-dot"></i> Dove ci troviamo: </h3>
            <p> Via Saturno,404
  </div>  
        </div>
      </div>
    </div>
    <!--sezione per le notizie -->
    <section class="information">
      <div class="container">  
        <!--testo -->
        <div class="row info-1">
          <div class="col-md-6">
            <div class="text-information">
              <h1> Notizie recenti </h1>
            <h5> Siamo l'avanguardia, un passo sempre in avanti </5> <br> <br>
            <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur 
              mollitia consequatur <p>

              </div>
        </div>

        <!--immagine -->
        <div class="col-md-6">
          <img src="img/image-1.svg" alt="img-1" class="w-100">
  </div>
      </div>
      <div class="row info-2">
          <div class="col-md-6">
            <div class="text-information">
              <h1> I pionieri dell'innovazione </h1>
            <h5> Siamo l'avanguardia, un passo sempre in avanti </5> <br> <br>
            <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur 
              mollitia consequatur <p>
              </div>
        </div>
        <!--immagine -->
        <div class="col-md-6">
          <img src="img/image-2.svg" alt="img-1" class="w-100">
  </div>
      </div>
      </div>
  </section>


       
          

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"></script>
</body>

</html>
