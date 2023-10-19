<?php
include "inc/Connection.php";
include "app/Jurusan.php";
$jrs = new Jurusan();
$data = $jrs->tampil();
?>
<div class="col-md-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4>JURUSAN</h4>
            <a href="/laboran/index.php/jurusan/add" class="btn btn-primary btn-sm">Tambah</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <td>NO</td>
                    <td>NAMA JURUSAN</td>
                </tr>
                <?php foreach ($data as $key => $item) : ?>
                    <tr>
                        <td><?= $key + 1; ?></td>
                        <td><?= $item['nama_jurusan']; ?></td>
                        <td>
                            <a href="/laboran/index.php/jurusan/ubah?id=<?=$item['id']?>"
                            class="btn btn-warning btn-sm">EDIT</a>
                            <a href="/laboran/app/proses.php/hapus?id=jurusan&id<?=$item['id']?>" 
                            class="btn btn-danger btn-sm">HAPUS</a>

                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>