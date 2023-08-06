<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">


    <style>
    .jumbotron {
        text-shadow: #000 1px 1px;
    }

    .background-header {
        background-image: url("images/museum_build.jpg");
        background-color: #fafbfc;
        height: 400px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
    }

    .btn-primer {
        background-color: #00bd8e;
        border-color: #0b9b6b;
        color: #fff;
        text-shadow: 0px 0px;
    }

    .btn-primer:hover {
        background-color: #038c6a;
        color: #fff;
        text-shadow: 0px 0px;
    }

    .service-style {
        margin-top: 15px;
        background-color: #fafbfc;
    }

    .text-green {
        color: #0b9b6b;
    }

    h2:before,
    h2:after {
        background-color: #0b9b6b;
        content: "";
        display: inline-block;
        height: 1px;
        position: relative;
        vertical-align: middle;
        width: 50%;
    }

    h2::before {
        right: 0.5em;
        margin-left: -50%;
    }

    h2::after {
        left: 0.5em;
        margin-right: -50%;
    }

    .button-sekunder {
        background-color: transparent;
        border-color: #dbdbdb;
        color: #0b9b6b;
    }

    .button-sekunder:hover {
        background-color: #0b9b6b;
        border-color: #dbdbdb;
        color: #fff;
    }

    .cover {
        background: no-repeat center/cover;
    }

    .navbar-logo {
        max-height: 40px;
        max-width: 100%;
    }
    </style>
</head>

<body>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/logo.jpg" class="navbar-logo" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <!-- Tambahkan menu navigasi lainnya di sini -->
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
            </div>
        </div>
    </nav>
    <!--Header-->
    <section id="jumbotron">
        <div class="jumbotron jumbotron-fluid background-header">

            <div class="container-fluid text-center">

                <h1 class="display-3" style="color: aliceblue;">Belajar with Dom</h1>

                <p class="lead" style="font-weight: bold; color: #fff;">This is a modified jumbotron that occupies the
                    entire horizontal space of its parent.</p>
                <p>
                    <a href="#" class="btn btn-primer btn-lg" role="button">Gabung Sekarang</a>
                    <a href="#" class="btn btn-info btn-lg" style="text-shadow: 0px 0px;" role="button">Selengkapnya</a>
                </p>

            </div>
        </div>
    </section>
    <!--End Header-->

    <!--Service-->
    <section id="services" class="container-fluid service-style">
        <div class="row text-center">
            <div class="col-12 pb-4">
                <h2 class="display-4">Mengapa memilih kami?</h2>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <span class="fa-stack fa-2x">
                    <i class="fas fa-circle fa-stack-2x text-green"></i>
                    <i class="fas fa-list fa-stack-1x text-white"></i>
                </span>

                <h3 class="mt-4 text-green">Fasilitas Oke</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque facilis perspiciatis quos, numquam
                    enim distinctio inventore tempore vero, quibusdam alias ratione quae explicabo? Maiores quasi natus
                    nisi, odit rerum accusamus!</p>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <span class="fa-stack fa-2x">
                    <i class="fas fa-circle fa-stack-2x text-green"></i>
                    <i class="fas fa-laptop-code fa-stack-1x text-white"></i>
                </span>
                <h3 class="mt-4 text-green">Modul Lengkap</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque facilis perspiciatis quos, numquam
                    enim distinctio inventore tempore vero, quibusdam alias ratione quae explicabo? Maiores quasi natus
                    nisi, odit rerum accusamus!</p>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <span class="fa-stack fa-2x">
                    <i class="fas fa-circle fa-stack-2x text-green"></i>
                    <i class="fas fa-money-bill fa-stack-1x text-white"></i>
                </span>
                <h3 class="mt-4 text-green">Biaya Terjangkau</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque facilis perspiciatis quos, numquam
                    enim distinctio inventore tempore vero, quibusdam alias ratione quae explicabo? Maiores quasi natus
                    nisi, odit rerum accusamus!</p>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <span class="fa-stack fa-2x">
                    <i class="fas fa-circle fa-stack-2x text-green"></i>
                    <i class="fas fa-chart-line fa-stack-1x text-white"></i>
                </span>
                <h3 class="mt-4 text-green">Spring</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque facilis perspiciatis quos, numquam
                    enim distinctio inventore tempore vero, quibusdam alias ratione quae explicabo? Maiores quasi natus
                    nisi, odit rerum accusamus!</p>
            </div>
            <div class="col-12 pt-3 mb-5">
                <button type="button" class="btn btn-danger btn-lg">Service Lainya</button>
            </div>
        </div>

    </section>
    <!--Product-->
    <section id="prodct" class="container">
        <div class="row text-center">
            <div class="col-12 pb-4">
                <h2 class="display-4 text-center mb-4">Produk Kami</h2>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img class="card-img-top" style="max-height: 400px;" src="images/dino1.jpg" alt="Product 1">

                    <div class="card-body">
                        <card class="title">
                            <h4>Membuat Aplikasi</h4>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus ad minus odit
                                provident amet nobis voluptas officia, rerum vitae eos! Sint voluptatibus assumenda
                                totam recusandae quas atque, earum veniam eligendi?</p>
                        </card>
                    </div>
                    <div class="card-footer"><a href="#" class="btn button-sekunder">Detail & Harga</a></div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img class="card-img-top" style="max-height: 400px;" src="images/dino1.jpg" alt="Product 2">

                    <div class="card-body">
                        <card class="title">
                            <h4>Membuat Android</h4>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus ad minus odit
                                provident amet nobis voluptas officia, rerum vitae eos! Sint voluptatibus assumenda
                                totam recusandae quas atque, earum veniam eligendi?</p>
                        </card>
                    </div>
                    <div class="card-footer"><a href="#" class="btn button-sekunder">Detail & Harga</a></div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img class="card-img-top" style="max-height: 400px;" src="images/dino1.jpg" alt="Product 3">

                    <div class="card-body">
                        <card class="title">
                            <h4>Membuat Website</h4>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus ad minus odit
                                provident amet nobis voluptas officia, rerum vitae eos! Sint voluptatibus assumenda
                                totam recusandae quas atque, earum veniam eligendi?</p>
                        </card>
                    </div>
                    <div class="card-footer"><a href="#" class="btn button-sekunder">Detail & Harga</a></div>
                </div>
            </div>

        </div>

    </section>
    <!--About A-->
    <section id="about" class="bg-light">
        <div class="container">
            <h2 class="display-4 text-center mb-5">Tentang Kami</h2>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div>
                        <h3 class="display-5 text-center text-green mt-3 mb-3">Perjalanan Bisnis Kami</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio accusantium eos quia
                            quisquam aliquam in adipisci, aliquid labore maxime quibusdam natus inventore fuga voluptate
                            nisi. Laboriosam, voluptatem. Animi, eveniet
                            tempora.
                        </p>
                        <div class="col-12 pt-3 text-center">
                            <button type="button" class="btn btn-danger btn-lg">Lihat Selengkapnya</button>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-md-6">
                    <div class="vh-100 cover" style="background-image: url('images/dino_head.jpg');"></div>
                </div>

            </div>
        </div>
    </section>
    <!--contact-->
    <section id="contact">

    </section>

    <!--End -->
    <!--Footer-->
    <footer>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/537736e09f.js" crossorigin="anonymous"></script>
</body>

</html>
</div>
</section>
<!--contact-->
<section id="contact">

</section>

<!--End -->
<!--Footer-->
<footer>

</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous">
</script>
<script src="https://kit.fontawesome.com/537736e09f.js" crossorigin="anonymous"></script>
</body>

</html>