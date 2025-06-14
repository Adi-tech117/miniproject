<?php 
require_once('config/db.php');
require_once('controller/siswaController.php');

$db = new DATABASE();
$conn = $db->getConnection();

$datasiswa = new datasiswa($conn);
$datasiswas = $datasiswa->getAll();

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
        background-image:url(gambar/moroccan-flower.png);
        }

        .judul{
            justify-content:center;
            font-family:Helvetica;
            display:flex;
        }
        a:link {
            text-decoration: none;
        }
        ul{
            display: flex;
            align-items: stretch;
            background-color:aquamarine;
            justify-content:space-between;
            margin:30px auto;
            flex-direction:row;
            width: 82%;
            height:60px;
            font-size:20px;
            align-items:center;


        }
       .nav-satu{
        flex:1;
       }
            
    </style>
</head>
<body>
    <h2 class="judul">Identitas Siswa</h2>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-utama" role="presentation">
                <button class="nav-link" ><a href="halaman_utama.php">Home</a></button>
            </li>
        </ul>    
    <div class="container my-5">
        <a href="create.php" class="btn btn-primary btn-sm ">Tambah Siswa</a>
        
        <div class="row">
            <?php foreach($datasiswas as $item) {?>
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <?php if($item['image']){?>
                            <img src="uploads/<?=$item['image']?>" class="card-img-top" alt="...">

                        <?php }else {?> <img src="gambar/No Image.png" class="card-img-top" alt="...">


                            <?php } ?>

                        <h5 class="card-nama"><?=$item['nama']?></h5>
                        <p class="card-text"><?="Usia : ".$item['umur']?> tahun</p>
                        <p class="card-text"><?="Jenis Kelamin :"?><?= $item['jenis_kelamin']?></p>
                        <p class="card-text">Alamat : <br><?=$item['alamat']?></p>
                        <a href="update.php?id=<?=$item['id']?>" class="card-link btn btn-primary btn-sm ">Edit</a>
                        <a href="delete.php?id=<?=$item['id']?>" class="card-link btn btn-danger btn-sm" onclick="return confirm('Yakin ingin hapus?')">Hapus</a>
                    </div>
                </div>

            </div>
            <?php }?>

        </div>
    </div>
</body>
</html>