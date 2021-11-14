<?php

//memanggil database (koneksi.php)
include "koneksi.php";

$pass = md5($_REQUEST['password']);
$username = mysqli_escape_string($koneksi, $_REQUEST['username']);
$password = mysqli_escape_string($koneksi, $pass);
$jabatan = mysqli_escape_string($koneksi, $_REQUEST['jabatan']);

//cek username
$cek_user = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' AND jabatan='$jabatan'");
$user_valid = mysqli_fetch_array($cek_user);
//uji jika username terdaftar
if ($user_valid){
    //jika username terdaftar = cek kesesuaian password

    if ($password == $user_valid['password']){
        //jika password sesuai = buat session
        session_start();
        $_SESSION['username'] = $user_valid['username'];
        $_SESSION['nama_lengkap'] = $user_valid['nama_lengkap'];
        $_SESSION['jabatan'] = $user_valid['jabatan'];

        //uji jabatan user
        if($jabatan == "Admin"){
            header('location:home_admin.php');
        }elseif($jabatan == "Anggota"){
            header('location:home_anggota.php');
        }

    }else {
        echo "<script> alert('Maaf, Login Gagal, Password anda tidak terdaftar!'); document.location='index.php'</script>";
    }
}else{
    echo "<script> alert('Maaf, Login Gagal, Username anda tidak terdaftar!'); document.location='index.php'</script>";
}
?>