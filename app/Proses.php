<?php

include "inc/Connection.php";

if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $user = $_POST['password'];
    $queryUser = "SELECT * FROM user where username:= $user";
    $trxUser = mysqli_query($conn, $queryUser);
    $dataUser = [];
    while ($row = mysqli_fetch_assoc($trxUser)) {
        $dataUser[] = $row;
    }
    if (count($dataUser)>0) {
        if (password_verify($pass, $dataUser[0]['password'])) {
            session_start();
            $itemSession = [
                'uid' => $dataUser[0]['id'],
                'nama' => $dataUser[0]['akses'],
                'isLogin' => true,
            ];
            header('Location: http://localhost/laboran/index.php/user');
            // echo "Login bnerhasil";
        } else {
            echo "password yang anda masukkan tidak sesuai";
        }
    } else {
        echo "User tidak ditemukan";
    }
}else if (isset($_POST['tambah_mahasiswa'])) {
    include "Mahasiswa.php";
    $mhs = new Mahasiswa();
    // Mapping data
    $data = [
        "nim" => $_POST['nim'],
        "nama" => $_POST['nama'],
        "alamat" => $_POST['alamat'],
        "no_hp" => $_POST['no_hp'],
        "jk" => $_POST['jk'],
        "tempat_lahir" => $_POST['tempat_lahir'],
        "tanggal_lahir" => $_POST['tanggal_lahir'],
        "id_jurusan" => $_POST['id_jurusan'],
        "kelas" => $_POST['kelas'],
        "jadwal" => $_POST['jadwal'],
        "matakuliah" => $_POST['matakuliah'],
        "id_user" => $id_user
    ];
    // print_r($data);
    // Proses Tambah
    $cek = $mhs->tambah($data_mhs);
    if ($cek != true) {
        echo $cek;
    } else
        header("Location: http://localhost/laboran/index.php/mahasiswa");
}else if (isset($_POST['ubah_mahasiswa']) == "mahasiswa") {
    include "Mahasiswa.php";
    $mhs = new Mahasiswa();
    // Mapping data
    $data = [
        "id" => $_POST['id'],
        "nim" => $_POST['nim'],
        "nama" => $_POST['nama'],
        "alamat" => $_POST['alamat'],
        "no_hp" => $_POST['no_hp'],
        "jk" => $_POST['jk'],
        "tempat_lahir" => $_POST['tempat_lahir'],
        "tanggal_lahir" => $_POST['tanggal_lahir'],
        "id_jurusan" => $_POST['id_jurusan'],
        "kelas" => $_POST['kelas'],
        "jadwal" => $_POST['jadwal'],
        "matakuliah" => $_POST['matakuliah'],
        
    ];
    // Proses Tambah
    $cek = $mhs->ubah($data);
    if ($cek != true) {
        echo  $cek;
    } else {
        header("Location: http://localhost/laboran/index.php/mahasiswa");
    }
} else if (isset($_GET['hapus']) && $_GET['hapus'] == "mahasiswa") {
    include "../app/Mahasiswa.php";
    $mhs = new Mahasiswa();
    $cek = $mhs->hapus($_GET['id_mahasiswa']);
    if ($cek !== true) {
        echo $cek;
    } else
        header("Location: http://localhost/laboran/index.php/mahasiswa");
} else if (isset($_POST['tambah_jurusan']) == "jurusan") {
    include "Jurusan.php";
    $jrs = new Jurusan();
    // Mapping data
    $data = [
        "nama_jurusan" => $_POST['nama_jurusan']
    ];
    // Proses Tambah
    $jrs->tambah($data);
    header("Location: http://localhost/laboran/index.php/jurusan");
} else if (isset($_POST['ubah_jurusan']) == "jurusan") {
    include "Jurusan.php";
    $jrs = new Mahasiswa();
    // Mapping data
    $data = [
        "nama_jurusan" => $_POST['nama_jurusan']
    ];
    // Proses Tambah
    $jrs->ubah($data);
    header("Location: http://localhost/laboran/index.php/jurusan");
} else if (isset($_GET['hapus']) && $_GET['hapus'] == "jurusan") {

    include "../app/Jurusan.php";
    $jrs = new Jurusan();
    $jrs->hapus($_GET['id_jurusan']);
    header("Location: http://localhost/laboran/index.php/jurusan");
} else if (isset($_POST['tambah_jadwal']) == "jadwal") {
    include "Jadwal.php";
    $jdl = new Jadwal();
    // Mapping data
    $data = [
        "hari" => $_POST['hari'],
        "jam" => $_POST['jam'],
        "tanggal" => $_POST['tanggal'],
        "id_laboran" => $_POST['id_laboran']
    ];
    // // Proses Tambah
    $jdl->tambah($data);
    header("Location: http://localhost/laboran/index.php/jadwal");
} else if (isset($_POST['ubah_jadwal']) == "jadwal") {
    include "Jadwal.php";
    $jdl = new Jadwal();
    // Mapping data
    $data = [
        "hari" => $_POST['hari'],
        "jam" => $_POST['jam'],
        "tanggal" => $_POST['tanggal']
    ];
    // Proses Tambah
    $jdl->ubah($data);
    header("Location: http://localhost/laboran/index.php/jadwal");
} else if (isset($_GET['hapus']) && $_GET['hapus'] == "jadwal") {

    include "../app/Jadwal.php";
    $jdl = new Jadwal();
    $jdl->hapus($_GET['id']);
    header("Location: http://localhost/laboran/index.php/jadwal");
} else if (isset($_POST['tambah_laboran']) == "laboran") {
    include "Laboran.php";
    $lbrn = new Laboran();
    // Mapping data
    $data = [
        "id_mahasiswa" => $_POST['id_mahasiswa'],

    ];
    // Proses Tambah
    // print_r($data);
    $lbrn->tambah($data);
    header("Location: http://localhost/laboran/index.php/laboran");
} else if (isset($_POST['ubah_laboran']) == "laboran") {
    include "Laboran.php";
    $lbrn = new Mahasiswa();
    // Mapping data
    $data = [
        "nama_pengawas" => $_POST['nama_pengawas'],

    ];
    // Proses Tambah
    $lbrn->ubah($data);
    header("Location: http://localhost/laboran/index.php/laboran");
} else if (isset($_GET['hapus']) && $_GET['hapus'] == "laboran") {

    include "../app/Laboran.php";
    $lbrn = new Laboran();
    $cek = $lbrn->hapus($_GET['id_laboran']);
    if ($cek !== true) echo $cek;
    else header("Location: http://localhost/laboran/index.php/laboran");
}