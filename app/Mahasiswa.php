<?php

class Mahasiswa
{
    protected $conn;

    public function __construct()
    {
        $this->conn = new Connection();
    }

    function tampil(): array
    {
        $string = "SELECT `mahasiswa`.*, `jurusan`.nama_jurusan
        FROM `mahasiswa` 
            LEFT JOIN `jurusan` ON `mahasiswa`.`id_jurusan` = `jurusan`.`id_jurusan`";
        $sql = $this->conn->conn->prepare($string);
        $sql->execute();
        $data = [];
        while ($row = $sql->fetch()) {
            $data[] = $row;
        }
        return $data;
    }

    function tambah($data)
    {
        try {
            $string = "INSERT INTO mahasiswa  (nim, nama, alamat, no_hp, jk, tempat_lahir, tanggal_lahir, id_jurusan, id_user)
            value (:nim, :nama, :alamat, :no_hp, :jk, :tempat_lahir, :tanggal_lahir, :id_jurusan, :id_user)";
            $sql = $this->conn->conn->prepare($string);
            $sql->execute($data);
            return true;
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    function get_id($id)
    {
        try {
            $string = "SELECT * FROM mahasiswa WHERE id_mahasiswa = '$id'";
            $sql = $this->conn->conn->prepare($string);
            $sql->execute();
            $data = [];
            while ($row = $sql->fetch()) {
                $data[] = $row;
            }
            return $data[0];
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
    function ubah($data)
    {
        try {
            $string = "UPDATE mahasiswa set nim= :nim, nama= :nama, alamat= :alamat, no_hp= :no_hp,
            jk= :jk, tempat_lahir= :tempat_lahir, tanggal_lahir= :tanggal_lahir, jurusan= :jurusan, jadwal= :jadwal WHERE id_mahasiswa";
            $sql = $this->conn->conn->prepare($string);
            $sql->execute();
            $data = [];
            while ($row = $sql->fetch()) {
                $data[] = $row;
            }
            return true;
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
    function hapus($id)
    {
        try {
            $string = "DELETE FROM mahasiswa WHERE id_mahasiswa='$id'";
            $sql = $this->conn->conn->prepare($string);
            $sql->execute();
            return true;
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}
