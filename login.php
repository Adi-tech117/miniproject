
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
         body {
        background-image:url(gambar/moroccan-flower.png);
    }
        .login{
            text-align:center;
        }

        .container{display:flex;
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

        input[type="text"],
	    input[type="password"]{
		border: 1px solid #d4f7f8;
		padding: 15px;
		font-size: 17px;
	    }
	    input[type="button"]{
		margin-top: 10px;
		border: none;
		padding: 5px;
		font-size: 13px;
	    }

        
        

    </style>
   
</head>
<body>
    <main>
        <h1 class="login">Login</h1>
        <div class="container">

        <form action="login.php" class="jw-form" method="POST">

            <div class="kolom">
                <label for="nama" class="form-label">Username</label>
                <input type="text" value="" id="myuser" placeholder="Masukan Nama" required=""><br>
            </div>

            <div class="kolom">
                <label for="kata sandi" class="form-label">Kata Sandi</label>
            </div>
            <div class="input-group">
                <input type="password" value="" id="mypass" placeholder="**************"  required=""><br>
            </div>
        
            <input type=button id="show" value="Show Password" onclick="ShowPassword()">
	        <input type=button style="display:none" id="hide" value="Hide Password" onclick="HidePassword()">
            <br>
            <br>
            
            <div class="d-grid">
                <button type="submit" class="btn btn-info">Masuk</button>
            </div>

            <div class="my-4 text-center">
                Belum punya akun? <a href="register.php">Register</a>
            </div>

            <hr class="my-4">
            <div class="mt-4 text-center">
                <a href="http://localhost/miniproject/halaman_utama.php" class="text-purple" style="text-decoration: none;">Kembali ke halaman utama</a>
            </div>
            
        </form>
        

        </div>
    </main>
    <script>
        function ShowPassword(){
		if(document.getElementById("mypass").value!="")
		{
			document.getElementById("mypass").type="text";
			document.getElementById("show").style.display="none";
			document.getElementById("hide").style.display="block";
		}
	}

	    function HidePassword(){
		if(document.getElementById("mypass").type == "text")
		{
			document.getElementById("mypass").type="password"
			document.getElementById("show").style.display="block";
			document.getElementById("hide").style.display="none";
		}
	}
       

    </script>    
</body>
</html>