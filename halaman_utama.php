<?php 
require_once('config/db.php');
require_once('controller/registerController.php');

$db = new DATABASE();
$conn = $db->getConnection();

$register = new Register($conn);
$registers = $register->getAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    body {
        background-image:url(gambar/moroccan-flower.png);
    }
     
    h1{
            justify-content:center;
            font-family:Helvetica;
            display:flex;
        }
    
    .nav.nav-pills.mb-3{
        background-color:aquamarine;
        margin:30px auto;
        flex-direction:row;
        width: 82%;
        height:60px;
        font-size:20px;
        align-items:center;
        display:flex;
            
            
    }
    ul li a{
        text-decoration: none;
        color:black;
    }

    .nav-utama{
        flex:1;
        text-decoration: none; 
    }

    .container-satu{
        background-color:#fff;
        display:flex;
        width: 100%;
        margin: 50px auto;
        padding: 20px;
        box-sizing: border-box;
        border-radius:20px;
    }
    .kolom-utama{
        flex:3;
        order:2;
        border-left: 2px solid grey; padding: 10px;
        border-right:2px solid grey; padding: 10px;
    }
    .sidebar-satu{
        flex:1;
        order:1;

    }

    .sidebar-dua{
        flex:1.5;
        order:3;
        padding-left:10px;

     }
    .container-dua{
        width:800px;
        margin:50px auto;
        display:flex;
        justify-content: space-between;
    }

    .layanan{
        width: 30%;
        padding: 20px;
        box-sizing: border-box;

    }
    .layanan.satu{
        background-color:rgb(110, 110, 223)
    }
    .layanan.dua{
        background-color: rgb(148, 108, 55)
    }
    .layanan.tiga{background-color: rgb(222, 224, 79)}

    p{
        text-indent: 50px;
        text-align: justify;
    }
   

</style>
</head>
<body>
   <h1>Halaman Utama</h1>
     <div class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-utama">
                <button class="nav-link" ><a href="halaman_utama.php" style="text-decoration: none;">Home</a></button>
            </li>
            <li class="nav-satu">
                <button class="nav-link" ><a href="register.php" style="text-decoration: none;">Register</a></button>
            </li>
            <li class="nav-dua">
                <button class="nav-link"><a href="login.php" style="text-decoration: none;">Login</a></button>
            </li>
    </ul>

    <div class="container-satu">
        <div class="kolom-utama">
            <h3 class="judul">judul artikel</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis nihil doloribus est enim voluptate quibusdam omnis repudiandae. Iure, iusto ad.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis reiciendis corrupti perspiciatis deleniti, tempore cum suscipit ullam necessitatibus, exercitationem laboriosam culpa quam distinctio error blanditiis quod quo ab. Nobis, ex.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, quaerat rem accusamus aperiam, officiis deserunt eius, beatae enim velit iure dolorem consequatur asperiores facere provident.</p>
        </div>
        <div class="sidebar-satu">
            <ul>
                <li><a href="index.php">Identitas Siswa</a></li>
            </ul>
        </div>
        
        <div class="sidebar-dua">
            <h3>sidebar dua</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo, illo nulla voluptatem adipisci quidem eaque.</p>
        </div>
    </div>

    <div class="container-dua">
        <div class="layanan satu">
            <h3>layanan satu</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, quas at. Repellat nihil explicabo totam!</p>
        </div>
        <div class="layanan dua">
            <h3>layanan dua</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, quaerat.</p>
        </div>

        <div class="layanan tiga">
            <h3>layanan tiga</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis, pariatur.</p>
        </div>
    </div>
</body>
</html>