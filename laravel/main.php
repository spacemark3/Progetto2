<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Main </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/blog.css">
  <?php // link cdn per far funzionare le icone di font awesome ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
  <header class="header">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">

        <a class="navbar-brand" href="#">AGM Solutions</a>

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
              <a class="nav-link active" aria-current="page" href="/"> <i class="fa-solid fa-house"></i> Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/chisiamo"> <i class="fa-solid fa-users"></i> </i> Chi siamo </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/servizi"> <i class="fa-solid fa-bell-concierge"></i></i> Servizi </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contatti"> <i class="fa-solid fa-address-book"></i> Contatti </a>
            </li>
          </ul>

          

          <!-- Elemento che farà aprire la sidebar in un contesto in cui abbiamo una grandezza minore di lg large, 
               in questo caso sarà solo disponibile per mobile e table -->
          <div class="mobile-toggler d-lg-none">
            <a href="#" data-bs-toggle="modal" data-bs-target="#navbModal">
            <i class="fa-solid fa-mobile"> blog </i>
              
            </a>
          </div>
          <div class="modal fade" id="navbModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">

              <div class="modal-header">
                <img src="#" alt="Logo">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> 
                <i class="fa-solid fa-xmark"></i></button>
              </div>
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"> Blog - AGM Solutions</h5>

                </div>
                <div class="modal-body">

                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"></script>
</body>

</html>