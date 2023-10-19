<?php
include "inc/Connection.php";
class Mahasiswa
{
    protected $conn;

    public function __construct()
    {
        $this->conn = new Connection();
    }
    public function tampil(): array
    {
        $string = "SELECT * FROM mahasiswa";
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
            $string = "INSERT INTO mahasiswa  (nim, nama, alamat, no_telp, jk, tempat_lahir, tanggal_lahir, id_jurusan)
            value (:nim, :nama, :alamat, :no_telp, :jk, :tempat_lahir, :tanggal_lahir, :id_jurusan)";
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
            $string = "SELECT * FROM mahasiswa WHERE id = '$id'";
            $sql = $this->conn->conn->prepare($string);
            $sql->execute();
            $data = [];
            while ($row = $sql->fetch ()) {
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
            $string = "SELECT * FROM mahasiswa set nim=:nim, nama=:nama, alamat=:alamat, no_tel=:no_telp,
            jk=:jk, tempat_lahir=:tempat_lahir, tanggal_lahir=:tanggal_lahir, id_jurusan=:id_jurusan WHERE id=;id";
            $sql = $this->conn->conn->prepare($string);
            $sql->execute();
            $data = [];
            while ($row = $sql->fetch ()) {
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
            $string = "DELETE FROM mahasiswa WHERE id=;id";
            $sql = $this->conn->conn->prepare($string);
            $sql->execute();
            $data = [];
            while ($row = $sql->fetch ()) {
                $data[] = $row;
            }
            return true;
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}