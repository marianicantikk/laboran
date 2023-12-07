<?php
include "inc/Connection.php";
include "app/Mahasiswa.php";
$mhs = new Mahasiswa();
$data = $mhs->tampil();
?>
<div class="col-md-50">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4>MAHASISWA</h4>
            <a href="/laboran/index.php/mahasiswa/add" class="btn btn-primary btn-sm">Tambah</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <td>NO</td>
                    <td>NIM</td>
                    <td>NAMA</td>
                    <td>ALAMAT</td>
                    <td>No Telepon</td>
                    <td>JK</td>
                    <td>TEMPAT LAHIR</td>
                    <td>TANGGAL LAHIR</td>
                    <td>JURUSAN</td>
                    <td>ACTION</td>
                </tr>
                <?php foreach ($data as $key => $item) : ?>
                <tr>
                    <td><?= $key + 1; ?></td>
                    <td><?= $item['nim']; ?></td>
                    <td><?= $item['nama']; ?></td>
                    <td><?= $item['alamat']; ?></td>
                    <td><?= $item['no_hp']; ?></td>
                    <td><?= $item['jk']; ?></td>
                    <td><?= $item['tempat_lahir']; ?></td>
                    <td><?= $item['tanggal_lahir']; ?></td>
                    <td><?= $item['nama_jurusan']; ?></td>
                    <td>
                        <a href="/laboran/index.php/mahasiswa/ubah?id_mahasiswa=<?= $item['id_mahasiswa'] ?>"
                            class="btn btn-warning btn-sm">EDIT</a>
                        <a href="/laboran/app/proses.php?hapus=mahasiswa&id_mahasiswa=<?= $item['id_mahasiswa'] ?>"
                            class="btn btn-danger btn-sm">HAPUS</a>

                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>