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
        background-image: url("<?php echo base_url(); ?>assets//images/museum_build.jpg");
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