<!doctype html>
<html lang="en">

<head>
    <title>PROJECT KELOMPOK 1</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <header>
        <?php

        session_start();
        if (!isset($_SESSION["isLogin"])) {
            // echo "<script>alert('gagal')</script>";
            header("Location: index.php");
        }
        ?>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="/laboran" class="nav-link">HOME</a>
                </li>
                <li class="nav-item">
                    <a href="/laboran/index.php/mahasiswa" class="nav-link">MAHASISWA</a>
                </li>
                <li class="nav-item">
                    <a href="/laboran/index.php/jurusan" class="nav-link">JURUSAN</a>
                </li>
                <li class="nav-item">
                    <a href="/laboran/index.php/jadwal" class="nav-link">JADWAL</a>
                </li>
                <li class="nav-item">
                    <a href="/laboran/index.php/laboran" class="nav-link">LABORAN</a>
                </li>
                <li class="nav-item">
                    <a href="/laboran/app/logout.php" class="nav-link">LOGOUT</a>
                </li>
            </ul>
        </nav>
    </header>
    <main class="mt-6" role=main>
        <div class="container">
            <div class="col-md-12">
                <div class="row" style="margin-top: 75px !important;">
                    <?php
                    $project_location = "/laboran";
                    $me = $project_location;
                    $request = strtok($_SERVER['REQUEST_URI'], '?');
                    switch ($request) {
                        case $me . '/index.php':
                            require "layout/home.php";
                            break;
                        case $me . '/index.php/mahasiswa':
                            require "layout/mahasiswa.php";
                            break;
                        case $me . '/index.php/mahasiswa/add':
                            require "layout/tambah_mahasiswa.php";
                            break;
                        case $me . '/index.php/mahasiswa/ubah':
                            require "layout/ubah_mahasiswa.php";
                            break;
                        case $me . '/index.php/jurusan':
                            require "layout/jurusan.php";
                            break;
                        case $me . '/index.php/jurusan/add':
                            require "layout/tambah_jurusan.php";
                            break;
                        case $me . '/index.php/jurusan/ubah':
                            require "layout/ubah_jurusan.php";
                            break;
                        case $me . '/index.php/jadwal':
                            require "layout/jadwal.php";
                            break;
                        case $me . '/index.php/jadwal/add':
                            require "layout/tambah_jadwal.php";
                            break;
                        case $me . '/index.php/jadwal/ubah':
                            require "layout/ubah_jadwal.php";
                            break;
                        case $me . '/index.php/laboran':
                            require "layout/laboran.php";
                            break;
                        case $me . '/index.php/laboran/add':
                            require "layout/tambah_laboran.php";
                            break;
                        case $me . '/index.php/laboran/ubah':
                            require "layout/ubah_laboran.php";
                            break;
                        default:
                            http_response_code(404);
                            echo "Not Found";
                            break;
                    }
                    ?>
                </div>
            </div>
        </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>