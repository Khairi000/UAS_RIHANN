<?php

session_start();
if (!isset($_SESSION['user'])) {
    echo "<script> alert('Silahkan Login untuk Mengakses file ini!')</script>";
    echo "<script>window.location='login.php'</script>";
}
//echo"<h1>selamat datang " .$_SESSION['user'];
?>


<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>IT | Information and Technology</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/logo1.jpeg' />
  <!-- Custom styles for this template -->
  <link href="assets/css/main.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>


<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
            <li>
              <form class="form-inline mr-auto">
                <div class="search-element">
                  <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">
                  <button class="btn" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </form>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="assets/img/kucing.jpeg"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Hii <?= $_SESSION['user']?></div>
              <div class="dropdown-divider"></div>
              <a href="../index.php" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>

      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html"> <img alt="image" src="assets/img/logo1.jpeg" class="header-logo" /> <span
                class="logo-name">TRPL2A</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown active">
              <a href="index.php" class="nav-link"><i data-feather="home"></i><span>Home</span></a>
            </li>
        
            <li class="menu-header">Menu</li>
            <li><a class="nav-link" href="index.php?p=mhs"><i data-feather="users"></i><span>Mahasiswa</span></a></li>
            <li><a class="nav-link" href="index.php?p=prodi"><i data-feather="file"></i><span>Prodi</span></a></li>
            <li><a class="nav-link" href="index.php?p=dosen"><i data-feather="user"></i><span>Dosen</span></a></li>
            <li><a class="nav-link" href="index.php?p=kategori"><i data-feather="bookmark"></i><span>Kategori</span></a></li>
            <li><a class="nav-link" href="index.php?p=berita"><i data-feather="book"></i><span>Berita</span></a></li>
            
            <li class="menu-header">Auth</li>
            <li><a class="nav-link" href="../index.php"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a></li>
          </ul>
        </aside>
      </div>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">

        </section>

        
        <?php
                $page = isset($_GET['p']) ? $_GET['p'] : 'home';
                if ($page == 'home')
                    include 'home.php';
                if ($page == 'mhs')
                    include 'mahasiswa.php';
                if ($page == 'prodi')
                    include 'prodi.php';
                if ($page == 'dosen')
                    include 'dosen.php';
                if ($page == 'kategori')
                    include 'kategori.php';
                if ($page == 'berita')
                    include 'berita.php';
                if ($page == 'matkul')
                    include 'matkul.php';
                if ($page == 'tambah_user')
                    include 'tambah_user.php';
                   
                // if ($page=='lihat -prodi') include 'view_prodi.php';
                // if ($page=='tambah_mhs') include 'mahasiswa.php';
                // if ($page=='edit_mhs') include 'edit_mahasiswa.php';
                // if ($page=='delete_mhs') include 'delete_mahasiswa.php';
                
                // if ($page=='delete_prodi') include 'delete_prodi.php';
                // if ($page=='edit_prodi') include 'edit_prodi.php';
                ?>

        
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          <a href="templateshub.net">By Khairii</a></a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>

  
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>

  <!--  JS Datatables  -->

  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="assets/bundles/apexcharts/apexcharts.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/index.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script>
  new DataTable('#example');
</script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>