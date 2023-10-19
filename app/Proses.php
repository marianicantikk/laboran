<?php
include "../inc/Connection.php";
if (isset($_POST['tambah_mahasiswa'])=="mahasiswa") {
    include "Mahasiswa.php";
    $mhs = new Mahasiswa();
    // Mapping data
    $data = [
        "nim" => $_POST['nim'],
        "nama" => $_POST['nama'],
        "alamat" => $_POST['alamat'],
        "no_telp" => $_POST['no_telp'],
        "jk" => $_POST['jk'],
        "tempat_lahir" => $_POST['tempat_lahir'],
        "tanggal_lahir" => $_POST['tanggal_lahir'],
        "id_jurusan" => $_POST['id_jurusan'],
    ];
    // Proses Tambah
    $mhs->tambah($data);
    header("Location: http://localhost/laboran/index.php/mahasiswa");
}else if (isset($_POST['ubah_mahasiswa'])) {
    include "Mahasiswa.php";
    $mhs = new Mahasiswa();
    // Mapping data
    $data = [
        "id" => $_GET['id'],
        "nim" => $_GET['nim'],
        "nama" => $_GET['nama'],
        "alamat" => $_GET['alamat'],
        "no_telp" => $_POST['no_telp'],
        "jk" => $_POST['jk'],
        "tempat_lahir" => $_POST['tempat_lahir'],
        "tanggal_lahir" => $_POST['tanggal_lahir'],
        "id_jurusan" => $_POST['id_jurusan'],
    ];
    // Proses Tambah
    $mhs->ubah($_data);
    header("Location: http://localhost/laboran/index.php/mahasiswa");

}else if(isset($_GET['hapus']) && $_GET['hapus']=='mahasiswa'){
    echo "ubah";
    // include "../app/Mahasiswa.php";
    // $mhs = new Mahasiswa();
    // $mhs->hapus($_GET['id']);
    // header("Location: http://localhost/laboran/index.php/mahasiswa");
}else if (isset($_POST['tambah_jurusan'])=="jurusan") {
    include "Jurusan";
    $jrs = new Jurusan();
    // Mapping data
    $data = [
        "nama_jurusan"=>$_POST['nama_jurusan'],
    ];
    // Proses Tambah
    $jrs->tambah($data);
    header("Location: http://localhost/laboran/index.php/jurusan");
}else if (isset($_POST['ubah_jurusan'])) {
    include "Jurusan.php";
    $jrs = new Mahasiswa();
    // Mapping data
    $data = [
        "nama_jurusan"=>$_POST['nama_jurusan'], 
    ];
    // Proses Tambah
    $jrs->ubah($_data);
    header("Location: http://localhost/laboran/index.php/jurusan");

}else if(isset($_GET['hapus']) && $_GET['hapus']=='mahasiswa'){
    echo "ubah";
    // include "../app/Jurusan.php";
    // $jrs = new Jurusan();
    // $jrs->hapus($_GET['id']);
    // header("Location: http://localhost/laboran/index.php/jurusan");
}else if (isset($_POST['tambah_jadwal'])=="jadwal") {
    include "Jadwal.php";
    $jdl = new Jadwal();
    // Mapping data
    $data = [
        "hari"=>$_POST['hari'],
        "jam"=>$_POST['jam'],-
        "tanggal"=>$_POST['tanggal'],
    ];
    // Proses Tambah
    $jdl->tambah($data);
    header("Location: http://localhost/laboran/index.php/jadwal");
}else if (isset($_POST['ubah_jadwal'])) {
    include "Jadwal.php";
    $jdl = new Jadwal();
    // Mapping data
    $data = [
        "hari"=>$_POST['hari'],
        "jam"=>$_POST['jam'],-
        "tanggal"=>$_POST['tanggal'],
    ];
    // Proses Tambah
    $jdl->ubah($_data);
    header("Location: http://localhost/laboran/index.php/jadwal");

}else if(isset($_GET['hapus']) && $_GET['hapus']=='jadwal'){
    echo "ubah";
    // include "../app/Jadwal.php";
    // $jdl = new Jadwal();
    // $jdl->hapus($_GET['id']);
    // header("Location: http://localhost/laboran/index.php/jadwal");
}else if (isset($_POST['tambah_laboran'])=="laboran") {
    include "Laboran.php";
    $lbrn = new Laboran();
    // Mapping data
    $data = [
        "nama_pengawas"=>$_POST['nama_pengawas'],
    ];
     // Proses Tambah
    $lbrn->tambah($data);
    header("Location: http://localhost/laboran/index.php/laboran");
}else if (isset($_POST['ubah_laboran'])) {
        include "Laboran.php";
        $lbrn = new Mahasiswa();
        // Mapping data
        $data = [
            "nama_pengawas"=>$_POST['nama_pengawas'],
        ];
        // Proses Tambah
        $lbrn->ubah($_data);
        header("Location: http://localhost/laboran/index.php/laboran");
}else if(isset($_GET['hapus']) && $_GET['hapus']=='laboran'){
    echo "ubah";
    // include "../app/Laboran.php";
    // $lbrn = new Laboran();
    // $lbrn->hapus($_GET['id']);
    // header("Location: http://localhost/laboran/index.php/laboran");
}