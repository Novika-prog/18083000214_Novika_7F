<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;700&display=swap" rel="stylesheet">
</head>
<body>
   <div class="overlay"></div>
   <form action="cek_login.php" method="post" class="box">
       <div class="header">
        <center>
           <h4>Selamat Datang ROCKER</h4>
           <p>Lakukan login sesuai username dan password yang kamu dapat</p>
        </center>
       </div>
       <div class="login-area">
           <input type="text" class="username" name="username" placeholder="Username"required autofocus>
           <input type="password" class="password" name="password" placeholder="Password" required>
           <!--combo box-->
           <div class="combobox-area">
               <select class="form-control" class="jabatan" name="jabatan" placeholder="Jabatan">
                   <option value="Admin">Admin</option>
                   <option value="Anggota">Anggota</option>
               </select>
           </div>
           <!--akhir combo box-->
           <input type="submit" value="Login" class="submit">
           <a href="#">Forgot Password?</a>
       </div>
   </form> 
</body>
</html>