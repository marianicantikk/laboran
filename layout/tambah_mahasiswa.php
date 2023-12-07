<?php
include "inc/Connection.php";
include "app/Jurusan.php";
$mhs = new Jurusan();
$data = $mhs->tampil();
?>
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            Tambah Mahasiswa
        </div>
        <div class="card-body">
            <form action="/laboran/app/proses.php" method="post">
                <div class="form-group">
                    <label for="">NIM</label>
                    <input type="text" class="form-control" name="nim">
                </div>
                <div class="form-group">
                    <label for="">NAMA</label>
                    <input type="text" class="form-control" name="nama">
                </div>
                <div class="form-group">
                    <label for="">ALAMAT</label>
                    <input type="text" class="form-control" name="alamat" rows="3">
                </div>
                <div class="form-group">
                    <label for="">NO HP</label>
                    <input type="text" class="form-control" name="no_hp">
                </div>
                <div class="form-group">
                    <label for="">JK</label>
                    <select name="jk" class="form-control" id="">
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                <div class=" form-group">
                    <label for="">TEMPAT LAHIR</label>
                    <input type="text" class="form-control" name="tempat_lahir">
                </div>
                <div class="form-group">
                    <label for="">TANGGAL LAHIR</label>
                    <input type="date" class="form-control" name="tanggal_lahir">
                </div>

                <div class="form-group">
                    <label for="">JURUSAN</label>
                    <select name="id_jurusan" id="" class="form-control">
                        <option>Pilih Jurusan</option>
                        <?php foreach ($data as $key => $item) : ?>
                        <option value="<?= $item['id_jurusan'] ?>"><?= $item['nama_jurusan'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <!-- <input type="text" class="form-control" name="jurusan"> -->
                </div>

                <div class="form-group">
                    <div class=" card-body">
                        <button type="submit" name="tambah_mahasiswa" class="btn btn-primary" title="Simpan Data">
                            <i class="glyphicon-floppy-disk"></i>Simpan</button>
                    </div>
            </form>
        </div>
    </div>
</div>