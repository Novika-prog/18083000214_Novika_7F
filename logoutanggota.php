<?php

session_start();
unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['nama_lengkap']);
unset($_SESSION['jabatan']);

session_destroy();
echo "<script>alert('Anda telah keluar dari halaman Anggota');document.location='index.php'</script>";
?>