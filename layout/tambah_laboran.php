<?php
include "inc/Connection.php";
include "app/Mahasiswa.php";
$mhs = new Mahasiswa();
$data = $mhs->tampil();
?>
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            Tambah Laboran
        </div>
        <div class="card-body">
            <form action="/laboran/app/proses.php" method="post">
                <div class="form-group">
                    <label for="">NAMA MAHASISWA</label>
                    <select name="id_mahasiswa" id="" class="form-control">
                        <option>Pilih Mahasiswa</option>
                        <?php foreach ($data as $key => $item) : ?>
                        <option value="<?= $item['id_mahasiswa'] ?>"><?= $item['nama'] ?></option>
                        <?php endforeach; ?>
                    </select>

                </div>
                <div class="card-body">
                    <button type="submit" name="tambah_laboran" class="btn btn-primary" title="Simpan Data">
                        <i class="glyphicon-floppy-disk"></i>Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>