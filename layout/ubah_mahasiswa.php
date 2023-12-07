<?php
include "inc/Connection.php";
include "app/Mahasiswa.php";
$mhs = new Mahasiswa();
$item = $mhs->get_id($_GET['id_mahasiswa']);
?>
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            Ubah Mahasiswa
        </div>
        <div class="card-body">
            <form action="/laboran/app/proses.php" method="post">
                <label for="">NIM</label>
                <input type="hidden" class="form-control" name="nim" value="<?=$item['nim']?>">
        </div>
        <div class="form-group">
            <label for="">NAMA</label>
            <input type="text" class="form-control" name="nama" value="<?=$item['nama']?>">
        </div>
        <div class="form-group">
            <label for="">ALAMAT</label>
            <textarea class="form-control" name="alamat" rows="3" value="<?=$item['alamat']?>"></textarea>
        </div>
        <div class="form-group">
            <label for="">NO HP</label>
            <input type="text" class="form-control" name="no_hp" value="<?=$item['no_telp']?>">
        </div>
        <div class="form-group">
            <label for="">JK</label>
            <input type="text" class="form-control" name="jk" value="<?=$item['jk']?>">
        </div>
        <div class="form-group">
            <label for="">TEMPAT LAHIR</label>
            <input type="text" class="form-control" name="tempat_lahir" value="<?=$item['tempat_lahir']?>">
        </div>
        <div class="form-group">
            <label for="">TANGGAL LAHIR</label>
            <input type="text" class="form-control" name="tanggal_lahir" value="<?=$item['tanggal_lahir']?>">
        </div>
        <div class="form-group">
            <div class="form-group">
                <label for="">JURUSAN</label>
                <input type="text" class="form-control" name="id_jurusan" value="<?=$item['nama_jurusan']?>">
            </div>
        </div>
        <div class="form-group">
            <button type="submit" name="ubah_mahasiswa" class="btn btn-primary btn-sm">Ubah</button>
        </div>
        </form>
    </div>
</div>
</div>