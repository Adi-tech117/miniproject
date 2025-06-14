<?php
require_once('config/db.php');
require_once('controller/siswaController.php');

$db = new DATABASE();
$conn = $db->getConnection();
$datasiswa = new datasiswa($conn);
$data = $datasiswa->getDatabyId($_GET['id']);

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $image = $data['image'];
    if($_FILES['image']['name']){
        if($image && file_exists('./uploads/'.$image)){
            unlink('./uploads/'.$image);

        }
        $uniqueImage = uniqid()."__".$_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], './uploads/'. $uniqueImage);
    }
    $datasiswa->update($_GET['id'], $_POST['nama'], $_POST['umur'], $_POST['jenis_kelamin'], $_POST['alamat'], $uniqueImage);
    header("Location:index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color:lightblue;
        background-image:url(gambar/moroccan-flower.png);
        }
        


    </style>
</head>
<body>
    
    <div class="container my-5">
        <h2>Update Siswa</h2>
        <form method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Nama Siswa</label>
                <input type="text" name="nama" class="form-control" placeholder= "Masukkan Nama Siswa" required id="?">
            </div>
            <div class="mb-3">
                <label class="form-label">Umur Siswa</label>
                <input type="number" name="umur" class="form-control" placeholder= "Masukkan Usia" required id = "?">
            </div>
            <div class="mb-3">
                <label class="form-label" >Jenis Kelamin</label><br>
                <input type="radio" name="jenis_kelamin" value="1" required> Laki-laki <br>
                <input type="radio" name="jenis_kelamin" value="2" required> Perempuan <br>
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea name="alamat" Class="form-control" required id="?"></textarea>
            </div>
            <?php if($data['image']){?>
                <p>Current Image</p>
                <img src="uploads/<?=$data['image']?>" width="200px" height="200px" alt="" srcset="">

            <?php }?>
            
            <div class="mb-3">
            <label class="form-label">Replace Image</label>
            <input type="file" name="image" class="form-control"required id="?">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    
</body>
</html>