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
        background-image: url("<?php echo base_url(); ?>assets/images/museum_build.jpg");
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
<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="<?php echo site_url(); ?>">
            <img src="<?php echo base_url(); ?>assets/images/logo.jpg" class="navbar-logo" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <?php if (isset($_SESSION['username'])) {
                ?>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('blog/logout'); ?>">
                        Logout
                    </a>
                    <!-- Tambahkan menu navigasi lainnya di sini -->
            </ul>
            <?php
                } else {
        ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('blog/login'); ?>">
                    Login
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <?php
                }
        ?>
            <form class="d-flex" role="find">



                <input class="form-control me-2" type="search" name="find" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Cari</button>


        </div>
    </div>
</nav>