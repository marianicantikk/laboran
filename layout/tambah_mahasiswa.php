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
                    <input type="text" class="form-control" name="alamat">
                </div>
                <div class="form-group">
                    <label for="">NO TELP</label>
                    <input type="text" class="form-control" name="no_telp">
                </div>
                <div class="form-group">
                    <label for="">JK</label>
                    <input type="text" class="form-control" name="jk">
                </div>
                <div class="form-group">
                    <label for="">TEMPAT LAHIR</label>
                    <input type="text" class="form-control" name="tempat_lahir">
                </div>
                <div class="form-group">
                    <label for="">TANGGAL LAHIR</label>
                    <input type="text" class="form-control" name="tanggal_lahir">
                </div>
                <div class="form-group">
                    <label for="">ID JURUSAN</label>
                    <input type="text" class="form-control" name="id_jurusan">
                </div>
                <div class="card-body">
                    <button type="submit" name="tambah_mahasiswa" class="btn btn-primary" title="Simpan Data">
                        <i class="glyphicon-floppy-disk"></i>Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>