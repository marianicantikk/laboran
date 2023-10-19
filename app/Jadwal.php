<?php
include "inc/Connection.php";
class Jadwal
{
        protected $conn;
    
        public function __construct()
        {
            $this->conn = new Connection();
        }
        public function tampil(): array
        {
            $string = "SELECT * FROM jadwal";
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
                $string = "INSERT INTO jadwal (hari, jam, tanggal)
                value(:hari, :jam, :tanggal)";
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
                $string = "SELECT * FROM jadwal WHERE id = '$id'";
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
                $string = "SELECT * FROM jadwal set hari=:hari, jam=:jam, tanggal=:tanggal WHERE id=;id";
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
                $string = "DELETE FROM jadwal WHERE id=;id";
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