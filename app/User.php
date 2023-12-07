<?php

class User
{
    protected $conn;

    public function __construct()
    {
        $this->conn = new Connection();
    }
    public function tampil(): array
    {
        $string = "SELECT * FROM user";
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
            $string = "INSERT INTO user (username, password, akses)
            value(:username, :password, :akses)";
            $sql = $this->conn->conn->prepare($string);
            $sql->execute($data);
            return $this->conn->conn->lastInsertId();
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
    function get_id($id)
    {
        try {
            $string = "SELECT * FROM User WHERE id = '$id'";
            $sql = $this->conn->conn->prepare($string);
            $sql->execute();
            $data = [];
            while ($row = $sql->fetch()) {
                $data[] = $row;
            }
            return $data[1];
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}