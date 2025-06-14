<?php
require_once('config/db.php');
require_once('controller/registerController.php');

$db = new DATABASE();
$conn = $db->getConnection();
$register= new Register($conn);

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $register->create($_POST['nama'], $_POST['usia'], $_POST['password'], $_POST['jenis_kelamin'], $_POST['bahasa'], $_POST['alamat']);
    header("Location:halaman_utama.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
        background-image:url(gambar/moroccan-flower.png);
    }
     .container{
        display:flex;
        width: 320px;
        height: 530px;
        margin:25px auto;
        justify-content: center;
        background-color: lightgrey;
        padding-top: 30px;
        border-radius: 20px;
        border-style: groove;
        outline:#b4c4b8 solid 10px;

     }
     .judul{

        text-align: center;
        margin-bottom: auto;
     }
     hr{
        margin-top :1.5em;
     }
     .note{
        text-align:center;
     }
    </style>
</head>
<body>

    <h2 class="judul">Register</h2>

    <div class="container">
    <form class="halaman_utama.php" method="post">
        <label>Nama Lengkap</label>
        <input type="text" name="nama" placeholder="Masukkan nama lengkap" id="?" required>
        <br><br>
        <label>Usia</label>
        <input type="number" name="usia" placeholder="Masukkan usia anda" id="?" required>
        <br><br>
        <label>Password</label>
        <input type="password" name="password" placeholder="Masukkan password anda" id="?" required>
        <br><br>
        <label>Jenis Kelamin</label> <br>
        <input type="radio" name="jenis_kelamin" value="1"> Laki-laki <br>
        <input type="radio" name="jenis_kelamin" value="2"> Perempuan <br>
        <br>
        <label>Bahasa</label><br>
        <select name="bahasa" id ="?" required>
            <option value="Bahasa Indonesia">Bahasa Indonesia</option>
            <option value="Bahasa Arab">Bahasa Arab</option>
            <option value="English USA">English USA</option>
            <option value="Bahasa UK">Bahasa UK</option>
            <option value="Bahasa Mandarin">Bahasa Mandarin</option>
            <option value="Bahasa Turkiye">Bahasa Turkiye</option>
            <option value="Bahasa Urdu">Bahasa Urdu</option>
        </select>
        <br><br>
        <label>Alamat</label> <br>
        <textarea name="alamat" cols="20" rows="5" id="?" required></textarea>
        <br><br>
        <input type="submit" value="register" id="?">
        <input type="reset" value="Reset" id="?">
        <div class="note">
            <hr>
            <p><a href="http://localhost/miniproject/halaman_utama.php" style="text-decoration: none;">Kembali ke halaman utama</a></p>


        </div>
    </form>
    </div>
</body>
</html>