<!doctype html>
<html lang="en">

<head>
    <title>PROJECT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="/laboran" class="class-link">HOME &#160;&#160;&#160;</a>
                </li>
                <li class="nav-item">
                    <a href="/laboran/index.php/mahasiswa" class="class-link">MAHASISWA &#160;&#160;&#160;</a>
                </li>
                <li class="nav-item">
                    <a href="/laboran/index.php/jurusan" class="class-link">JURUSAN &#160;&#160;&#160;</a>
                </li>
                <li class="nav-item">
                    <a href="/laboran/index.php/jadwal" class="class-link">JADWAL &#160;&#160;&#160;</a>
                </li>
                <li class="nav-item">
                    <a href="/laboran/index.php/laboran" class="class-link">LABORAN &#160;&#160;&#160;</a>
                </li>
            </ul>
        </nav>
    </header>
    <main class="mt-6" role=main>
        <div class="container">
            <div class="col-md-12">
                <div class="row" style="margin-top: 75px !important;">
                    <?php
                    $location = "/laboran";
                    $me = $location;
                    $request = strtok($_SERVER['REQUEST_URI'], '?');
                    switch ($request) {
                        case $me . '/':
                            break;
                        case $me . '/index.php/mahasiswa':
                            require "layout/mahasiswa.php";
                            break;
                        case $me . '/index.php/mahasiswa/add':
                            require "layout/tambah_mahasiswa.php";
                            break;
                        case $me . '/index.php/mahasiswa/add':
                            require "layout/ubah_mahasiswa.php";
                            break;
                        case $me . '/index.php/jurusan':
                            require "layout/jurusan.php";
                            break;
                        case $me . '/index.php/jurusan/add':
                            require "layout/tambah_jurusan.php";
                            break;
                        case $me . '/index.php/jurusan/add':
                            require "layout/ubah_jurusan.php";
                            break;
                        case $me . '/index.php/jadwal':
                            require "layout/jadwal.php";
                            break;
                        case $me . '/index.php/jadwal/add':
                            require "layout/tambah_jadwal.php";
                            break;
                        case $me . '/index.php/jadwal/add':
                            require "layout/ubah_jadwal.php";
                            break;
                        case $me . '/index.php/laboran':
                            require "layout/laboran.php";
                            break;
                        case $me . '/index.php/laboran/add':
                            require "layout/tambah_laboran.php";
                            break;
                        case $me . '/index.php/laboran/add':
                            require "layout/ubah_laboran.php";
                            break;
                        default:
                            http_response_code(404);
                            echo "404";
                            break;
                    }
                    ?>
                </div>
            </div>
        </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>