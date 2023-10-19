<?php
include "inc/Connection.php";
include "app/Jadwal.php";
$jdl = new Jadwal();
$data = $jdl->tampil();
?>
<div class="col-md-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4>JADWAL</h4>
            <a href="/laboran/index.php/jadwal/add" class="btn btn-primary btn-sm">Tambah</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <td>NO</td>
                    <td>HARI</td>
                    <td>JAM</td>
                    <td>TANGGAL</td>
                </tr>
                <?php foreach ($data as $key => $item) : ?>
                    <tr>
                        <td><?= $key + 1; ?></td>
                        <td><?= $item['hari']; ?></td>
                        <td><?= $item['jam']; ?></td>
                        <td><?= $item['tanggal']; ?></td>
                        <td>
                            <a href="/laboran/index.php/jadwal/ubah?id=<?=$item['id']?>"
                            class="btn btn-warning btn-sm">EDIT</a>
                            <a href="/laboran/app/proses.php/hapus?id=jadwal&id<?=$item['id']?>" 
                            class="btn btn-danger btn-sm">HAPUS</a>

                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>