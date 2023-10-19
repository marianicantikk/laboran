<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            Tambah Jadwal
        </div>
        <div class="card-body">
            <form action="/laboran/app/proses.php" method="post">
                <div class="form-group">
                    <label for="">HARI</label>
                    <input type="text" class="form-control" name="hari">
                </div>
                <div class="form-group">
                    <label for="">JAM</label>
                    <input type="text" class="form-control" name="jam">
                </div>
                <div class="form-group">
                    <label for="">TANGGAL</label>
                    <input type="text" class="form-control" name="tanggal">
                </div>
                <div class="card-body">
                    <button type="submit" name="tambah_jadwal" class="btn btn-primary" title="Simpan Data">
                        <i class="glyphicon-floppy-disk"></i>Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>