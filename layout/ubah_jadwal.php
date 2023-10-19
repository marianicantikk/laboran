<?php
include "inc/Connection.php";
include "app/Jadwal.php";
$jdl = new Jadwal();
$item = $jdl->get_id($_GET['id']);
?>
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            Ubah Jadwal
        </div>
                <div class="card-body">
                    <form action="/laboran/app/proses.php" method="post">
                    <label for="">hari</label>
                    <input type="hidden" class="form-control" name="hari" 
                    value="<?=$item['hari']?>">
                    <input type="text" class="form-control" name="hari"
                    value="<?=$item['hari']?>">
                </div>
                <div class="form-group">
                    <label for="">jam</label>
                    <input type="text" class="form-control" name="jam"
                    value ="<?=$item['jam']?>">
                </div>
                <div class="form-group">
                    <label for="">tanggal</label>
                    <input type="text" class="form-control" name="tanggal"
                    value ="<?=$item['tanggal']?>">
                </div>
                <div class="form-group">
                    <button type="submit" name="ubah_jadwal"
                    class="btn btn-primary btn-sm">Ubah</button>
                </div>
            </form>
        </div>
    </div>
</div>