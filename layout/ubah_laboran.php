<?php
include "inc/Connection.php";
include "app/Laboran.php";
$lbrn = new Laboran();
$item = $lbrn->get_id($_GET['id']);
?>
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            Ubah Laboran
        </div>
                <div class="card-body">
                    <form action="/laboran/app/proses.php" method="post">
                    <label for="">nama pegawas</label>
                    <input type="hidden" class="form-control" name="nama_pegawas" 
                    value="<?=$item['nama_pegawas']?>">
                    <input type="text" class="form-control" name="nama_pegawas"
                    value="<?=$item['nama_pegawas']?>">
                </div>
                <div class="form-group">
                    <button type="submit" name="ubah_laboran"
                    class="btn btn-primary btn-sm">Ubah</button>
                </div>
            </form>
        </div>
    </div>
</div>