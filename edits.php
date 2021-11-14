<?php

    include "koneksi.php";
    if(isset($_REQUEST['simpan'])){

        $id = $_REQUEST['id'];
        $pass = md5($_REQUEST['password']);
        $username = $_REQUEST['username'];
        $nama_lengkap = $_REQUEST['nama_lengkap'];
        $jabatan = $_REQUEST['jabatan'];
        $password = $pass;

    $sql = "UPDATE user SET username='$username', password='$password', nama_lengkap='$nama_lengkap', jabatan='$jabatan' WHERE id=$id";
    $query = mysqli_query($koneksi, $sql);

    if( $query ) {
        echo "<script>alert('Edit berhasil');document.location='editanggota.php'</script>";
    } else {
        echo "<script>alert('Edit gagal');document.location='editanggota.php'</script>";
    }
} else {
    die("<script>alert('Akses gagal');document.location='editanggota.php'</script>");
}
?>

?>