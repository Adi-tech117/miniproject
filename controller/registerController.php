<?php

class register{
    private $conn;

    Public function __construct($db){
        $this->conn = $db;
    }
    public function create($nama, $usia, $password, $jenis_kelamin, $bahasa, $alamat){
        $newRegister = $this->conn->prepare("INSERT INTO register(nama, usia, password, jenis_kelamin, bahasa, alamat) values (?, ?, ?, ?, ?, ?)");
        return $newRegister->execute([$nama, $usia, $password, $jenis_kelamin, $bahasa, $alamat]);
    }
    Public function getAll(){
        $registers = $this->conn->prepare("SELECT * FROM register");
        $registers->execute();
        return $registers;
    }
    public function getDatabyId($id){
        $register = $this->conn->prepare("SELECT * FROM register WHERE id=?");
        $register->execute([$id]);
        return $register->fetch(PDO::FETCH_ASSOC);
    
}
}
?>