<?php
include("koneksi.php");

if( isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "DELETE FROM user WHERE id='$id'";
    $query = mysqli_query($koneksi, $sql);

    if( $query ) {
        echo "<script>alert('Hapus berhasil');document.location='editanggota.php'</script>";
    } else {
        echo "<script>alert('Hapus gagal');document.location='editanggota.php'</script>";
    }
} else {
    die("<script>alert('Akses gagal');document.location='editanggota.php'</script>");
}
?>
