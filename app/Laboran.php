<?php
include "inc/Connection.php";
class Laboran
{
    protected $conn;

    public function __construct()
    {
        $this->conn = new Connection();
    }
    public function tampil(): array
    {
        $string = "SELECT * FROM laboran";
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
            $string = "INSERT INTO laboran (nama_pengawas)
            value(:nama_pengawas)";
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
            $string = "SELECT * FROM laboran WHERE id = '$id'";
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
            $string = "SELECT * FROM laboran set nama_pengawas=:nama_pengawas WHERE id=;id";
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
            $string = "DELETE FROM laboran WHERE id=;id";
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