<?php
session_start();
if (empty($_SESSION['username']) or empty($_SESSION['jabatan'])){
    echo "<script>alert('Maaf, untuk mengakses halaman ini, anda harus login terlebih dahulu, terima kasih');document.location='index.php'</script>";
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Halo Admin</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">

  
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"><font color="red"><b>Legend of Rock</b></font></a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="logoutadmin.php"><font color="red">Logout</font></a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home_admin.php">
              <span data-feather="home"></span>
              Beranda
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="seluruhanggota_admin.php">
              <span data-feather="shopping-cart"></span>
              Seluruh Anggota
            </a>
          </li>
        </ul>
<!-- Yang Bedain Sama Beranda Anggota -->
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Menu Admin</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
          <a class="nav-link" href="daftarbaru_admin.php">
              <span data-feather="file"></span>
              Daftar Baru
            </a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="editanggota.php">
              <span data-feather="file-text"></span>
              Edit Anggota
            </a>
          </li>
        </ul>
<!-- Yang Bedain Sama Beranda Anggota -->           
      </div>
    </nav>


    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <section class="py-5 text-center container">
    <div class="row py-lg-">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light"><b>INFO BAND</b></h1>
        <p class="lead text-muted">Berikut adalah daftar band-band yang sudah bergabung dan terbentuk kedalam komunitas Legend of Rock</p>
        <p>
          <a href="seluruhanggota_admin.php" class="btn btn-primary my-2">Cek Daftar Anggota</a>
       </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <img src="img/gnr.jpg" alt="Gun N Roses" width="100%" height="225">
            <div class="card-body">
            <h6><center> Gun N'Roses </center></h6>
              <p class="card-text">Gun N' Roses adalah band dengan genre Metal Rock asal Amerika</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>
                <small class="text-muted">bergabung 2 bulan lalu</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="img/rolling2.jpg" alt="Rolling Stone" width="100%" height="225">
            <div class="card-body">
            <h6><center> The Rolling Stone </center></h6>
              <p class="card-text">The Rolling Stone adalah band dengan genre Metal Rock asal Amerika</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>
                <small class="text-muted">bergabung 5 bulan lalu</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="img/bonjovi2.jpg" alt="Bon Jovi" width="100%" height="225">
            <div class="card-body">
            <h6><center> Bon Jovi </center></h6>
              <p class="card-text">Bon Jovi adalah band dengan genre Metal Rock asal Amerika</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>
                <small class="text-muted">bergabung 2 tahun lalu</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
</div>
</div>


    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>