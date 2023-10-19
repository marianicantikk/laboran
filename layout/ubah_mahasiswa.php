<?php
include "inc/Connection.php";
include "app/Mahasiswa.php";
$mhs = new Mahasiswa();
$item = $mhs->get_id($_GET['id']);
?>
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            Ubah Mahasiswa
        </div>
                <div class="card-body">
                    <form action="/laboran/app/proses.php" method="post">
                    <label for="">nim</label>
                    <input type="hidden" class="form-control" name="nim" 
                    value="<?=$item['nim']?>">
                </div>
                <div class="form-group">
                    <label for="">nama</label>
                    <input type="text" class="form-control" name="nama"
                    value ="<?=$item['nama']?>">
                </div>
                <div class="form-group">
                    <label for="">alamat</label>
                    <textarea class="form-control" name="alamat" rows="3"
                    value ="<?=$item['alamat']?>"></textarea>
                </div>
                <div class="form-group">
                    <label for="">no_telp</label>
                    <input type="text" class="form-control" name="no_telp"
                    value ="<?=$item['no_telp']?>">
                </div>
                <div class="form-group">
                    <label for="">jk</label>
                    <input type="text" class="form-control" name="jk"
                    value ="<?=$item['jk']?>">
                </div>
                <div class="form-group">
                    <label for="">tempat_lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir"
                    value ="<?=$item['tempat_lahir']?>">
                </div>
                <div class="form-group">
                    <label for="">tanggal_lahir</label>
                    <input type="text" class="form-control" name="tanggal_lahir"
                    value ="<?=$item['tanggal_lahir']?>">
                </div>
                <div class="form-group">
                    <label for="">id_jurusan</label>
                    <input type="text" class="form-control" name="id_jurusan"
                    value ="<?=$item['id_jurusan']?>">
                </div>
                <div class="form-group">
                    <button type="submit" name="ubah_mahasiswa"
                    class="btn btn-primary btn-sm">Ubah</button>
                </div>
            </form>
        </div>
    </div>
</div>