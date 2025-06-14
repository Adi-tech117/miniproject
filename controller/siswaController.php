<?php

Class dataSiswa {
    private $conn;

    Public function __construct($db){
        $this->conn = $db;
    }

    public function create($nama, $umur, $jenis_kelamin, $alamat, $image){
        $newDatasiswa = $this->conn->prepare("INSERT INTO datasiswa(nama, umur, jenis_kelamin, alamat, image) values (?, ?, ?, ?, ?)");
        return $newDatasiswa->execute([$nama, $umur, $jenis_kelamin, $alamat, $image]);
    }

    Public function getAll(){
        $datasiswas = $this->conn->prepare("SELECT * FROM datasiswa");
        $datasiswas->execute();
        return $datasiswas;
    }

    public function getDatabyId($id){
        $datasiswa = $this->conn->prepare("SELECT * FROM datasiswa WHERE id=?");
        $datasiswa->execute([$id]);
        return $datasiswa->fetch(PDO::FETCH_ASSOC);

    }
    public function update($id, $nama, $umur, $jenis_kelamin, $alamat, $image=null){
        if($image){
            $newdatasiswa = $this->conn->prepare("UPDATE datasiswa SET nama = ?, umur = ?, jenis_kelamin = ?, alamat = ?, image = ? WHERE id = ?");
            return $newdatasiswa->execute([$nama, $umur, $jenis_kelamin, $alamat, $image, $id]);
        } else {
            $newdatasiswa = $this->conn->prepare("UPDATE datasiswa SET nama = ?, umur = ?, jenis_kelamin = ?, alamat = ?, WHERE id = ?");
            return $newdatasiswa->execute([$nama, $umur, $jenis_kelamin, $alamat, $id]);
        }

    }
     public function delete($id){
        $data = $this->getDatabyId($id);
        $image = $data['image'];
        if($data && $image && file_exists('./uploads/'.$image)){
            unlink('./uploads/'.$image);
        }
        $datasiswa = $this->conn->prepare("DELETE FROM datasiswa WHERE id = ?");
        return $datasiswa->execute([$id]);
    }

}


?>