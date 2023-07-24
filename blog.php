<?php
define("TITLE", "blog");
include 'layouts/header.php';
?>
<!-- sidebar notizie recenti con search bar -->


<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="bg-dark col-auto col-md-2 min-vh-100">
            <div class="bg-dark p-2">
                <a class="d-flex text-decoration-none align-items-center">
                    <span class="d-none d-sm-inline">Notizie recenti</span>
                </a>
                <ul class="nav nav-pills flex-column mt-2">
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white">
                            <i class="fs-5 fa fa-gauge"> </i> <span class=" d-none d-sm-inline"> Novità </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white">
                            <i class="fs-5 fa fa-gauge"> </i> <span class=" d-none d-sm-inline"> Home </span>
                        </a>
                    </li>
                    <li class="nav-item disabled">
                        <a href="#" class="nav-link text-white">
                            <i class="fs-5 fa fa-gauge"> </i> <span class=" d-none d-sm-inline"> Elon Musk </span>
                        </a>
                    <li class="nav-item disabled">
                        <a href="#" class="nav-link text-white">
                            <i class="fs-5 fa fa-gauge"> </i> <span class=" d-none d-sm-inline"> Innovation </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div> <?php include 'elementi/blog.php' ?> </div>
    </div>
</div>



<?php
include 'layouts/footer.php';
?>