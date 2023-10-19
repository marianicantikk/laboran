<?php
include "inc/Connection.php";
include "app/Jurusan.php";
$jrs = new Jurusan();
$item = $jrs->get_id($_GET['id']);
?>
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            Ubah Jurusan
        </div>
                <div class="card-body">
                    <form action="/laboran/app/proses.php" method="post">
                    <label for="">nama jurusan</label>
                    <input type="hidden" class="form-control" name="nama_jurusan" 
                    value="<?=$item['nama_jurusan']?>">
                    <input type="text" class="form-control" name="nama_jurusan"
                    value="<?=$item['nama_jurusan']?>">
</div>
                <div class="form-group">
                    <button type="submit" name="ubah_jurusan"
                    class="btn btn-primary btn-sm">Ubah</button>
                </div>
            </form>
        </div>
    </div>
</div>