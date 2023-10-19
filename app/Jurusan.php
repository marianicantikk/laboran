<?php
include "inc/Connection.php";
class Jurusan
{
    protected $conn;

    public function __construct()
    {
        $this->conn = new Connection();
    }
    public function tampil(): array
    {
        $string = "SELECT * FROM jurusan";
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
            $string = "INSERT INTO jurusan (nama_jurusan)
            value(:nama_jurusan)";
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
            $string = "SELECT * FROM jurusan WHERE id = '$id'";
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
            $string = "SELECT * FROM jurusan set nama_jurusan=:nama_jurusan WHERE id=;id";
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