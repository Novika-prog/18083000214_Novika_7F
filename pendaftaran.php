<?php

include "koneksi.php";

if(isset($_REQUEST['daftar'])){

    $pass = md5($_REQUEST['password']);
    $username = $_REQUEST['username'];
    $nama = $_REQUEST['nama_lengkap'];
    $jabatan = $_REQUEST['jabatan'];
    $password = $pass;

    $sql = "INSERT INTO user (username, nama_lengkap, password, jabatan) VALUE ('$username', '$nama', '$password', '$jabatan')";
    $query = mysqli_query($koneksi, $sql);

    if( $query ) {
        echo "<script>alert('Pendaftaran berhasil');document.location='seluruhanggota_admin.php'</script>";
    } else {
        echo "<script>alert('Pendaftaran gagal');document.location='daftarbaru_admin.php'</script>";
    }
} else {
    die("<script>alert('Pendaftaran gagal');document.location='daftarbaru_admin.php'</script>");
}
?>