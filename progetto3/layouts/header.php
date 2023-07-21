<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Space Z</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!--sezione della navbar -->

    <nav class="navbar fixed top navbar-expand-lg bg-body-tertiary">
        <div class="container-lg">

            <?php //con questo possiamo allineare sulla stessa assa orizzontale l'immagine e il titolo ?>
            <a class="navbar-brand mb-0 h1" href="index.php"> <img src="assets/icone/bootstrap-logo.svg" alt="Logo" width="30"
                    height="24" class="d-inline-block align-text-top"> Space Z</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php"> <i class="fa-solid fa-house"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="c-siamo.php"> <i class="fa-solid fa-users"></i> Chi siamo </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="services.php"> <i class="fa-solid fa-bell-concierge"></i> Servizi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="blog.php"> <i class="fa-solid fa-globe"></i> Blog </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="contatti.php"> <i class="fa-solid fa-address-book"></i>Contatti
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>