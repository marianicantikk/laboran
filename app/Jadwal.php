<?php

class Jadwal
{
    protected $conn;

    public function __construct()
    {
        $this->conn = new Connection();
    }
    function tampil(): array
    {
        $string = "SELECT `jadwal`.*,  `mahasiswa`.`nama`
        FROM `jadwal` 
            LEFT JOIN `laboran` ON `jadwal`.`id_laboran` = `laboran`.`id_laboran` 
            LEFT JOIN `mahasiswa` ON `laboran`.`id_mahasiswa` = `mahasiswa`.`id_mahasiswa`;";
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
            $string = "INSERT INTO jadwal (hari, jam, tanggal, id_laboran)
                value(:hari, :jam, :tanggal, :id_laboran)";
            $sql = $this->conn->conn->prepare($string);
            $sql->execute($data);
            return true;
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
    function get_id($id_jadwal)
    {
        try {
            $string = "SELECT * FROM jadwal WHERE id_jadwal= $id_jadwal";
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
            $string = "UPDATE jadwal set hari=:hari, jam=:jam, tanggal=:tanggal WHERE id_jadwal= :id_jadwal";
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
            $string = "DELETE FROM jadwal WHERE id_jadwal='$id'";
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
}
