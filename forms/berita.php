  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>IT - Information and Technology</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <style>  
    .footer {
    color:rgb(255, 255, 255);
    background: url("assets/img/slide4a.jpg") top center no-repeat;
    background-size: cover;
    font-size: 14px;
    padding: 80px 0 60px 0;
    position: relative;
  }
    </style>

    <!-- =======================================================
    * Template Name: UpConstruction - v1.3.0
    * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
  </head>

  <body>

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center">
              <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

              <a href="index.html" class="logo d-flex align-items-center">
                  <!-- Uncomment the line below if you also wish to use an image logo -->
                  <!-- <img src="assets/img/logo.png" alt=""> -->
                  <h1>TRPL2A<span>.</span></h1>
              </a>

                  <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
              <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
              <nav id="navbar" class="navbar">
                  <ul>
                  <li><a href="index.php" >Home</a></li>
                  <li><a href="mahasiswa.php" >Mahasiswa</a></li>
                  <li><a href="prodi.php">Prodi</a></li>
                  <li><a href="dosen.php">Dosen</a></li>
                  <li><a href="berita.php"  class="active">Berita</a></li>
                  <li></li>
                  <li></li>
                  
                  <button type="button" class="btn btn-secondary"><li class="btn-get-started"><a href="login.php">Login</a></li></button>
              </ul>
              </nav><!-- .navbar -->

              </div>
          </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">

      <div class="info d-flex align-items-center">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
              <h2 data-aos="fade-down">Welcome to <span>IT.</span></h2>
              <p data-aos="fade-up">The Stepping Stone To Journey International</p>
              
            </div>
          </div>
        </div>
      </div>

      <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item active" style="background-image: url(assets/img/slide1.png)">
        </div>
        <div class="carousel-item" style="background-image: url(assets/img/slide2.jpg)"></div>
        <div class="carousel-item" style="background-image: url(assets/img/slide3.png)"></div>
        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>

    </section><!-- End Hero Section -->

    <main id="main">

      <!-- ======= Get Started Section ======= -->
    
      <!-- ======= Constructions Section ======= -->
      <section id="constructions" class="constructions">
        <div class="container" data-aos="fade-up">

          <div class="section-header">
            <h2>Berita</h2>
            <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem
              dolore earum</p>
          </div>

          <div class="row gy-4">
          <?php
            include 'koneksi.php';

            $d = isset($_GET['d']) ? $_GET['d'] : 'berita';

            switch ($d){
              case 'berita':
                $ambil_berita = mysqli_query($db, "SELECT * FROM berita ORDER BY id DESC LIMIT 6");
                while ($data_berita = mysqli_fetch_array($ambil_berita)) {
                  ?>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
              <div class="card-item">
                <div class="row">
                  <div class="col-xl-5">
                    <div class="card-bg">
                    <img src="admin/images/<?= htmlspecialchars($data_berita['file_upload']) ?>" class="card-img" height="300" width="300"
                    alt="<?= htmlspecialchars($data_berita['judul_berita']) ?>">
                    </div>
                  </div>
                  <div class="col-xl-7 d-flex align-items-center">
                    <div class="card-body">
                      <h4 class="card-title"><?= htmlspecialchars($data_berita['judul_berita']) ?></h5>
                      <p class="card-text"><?= htmlspecialchars(substr($data_berita['isi_berita'], 0, 250)) ?>...</p>
                      <a href="index.php?d=detail&id=<?= $data_berita['id'] ?>" class="btn btn-primary">Selengkapnya..</a>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Card Item -->
            <?php
          }
          break;

        case 'detail':
          if (isset($_GET['id'])) {
            $id = intval($_GET['id']);
            $ambil_berita = mysqli_query($db, "SELECT * FROM berita WHERE id='$id'");
            if ($data_berita = mysqli_fetch_array($ambil_berita)) {
              ?>
              <div class="col-8 mb-3">
                <div class="card">
                  <img src="admin/images/<?= htmlspecialchars($data_berita['file_upload']) ?>" class="card-img-top" height="400"
                    alt="<?= htmlspecialchars($data_berita['judul_berita']) ?>">
                  <div class="card-body">
                    <h5 class="card-title"><?= htmlspecialchars($data_berita['judul_berita']) ?></h5>
                    <p class="card-text"><?= nl2br(htmlspecialchars($data_berita['isi_berita'])) ?></p>
                    <a href="berita.php" class="btn btn-secondary">Back to Home</a>
                  </div>
                </div>
              </div>
              <?php
            }
          }
          break;
      }
      ?>

        

        

          </div>

        </div>
      </section><!-- End Constructions Section -->

      <!-- ======= Services Section ======= -->
      

        

      <!-- ======= Recent Blog Posts Section ======= -->
    </main>
        
    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

  <div class="footer-content position-relative">
    <div class="container">
      <div class="row">

        <div class="col-lg-4 col-md-3">
          <div class="footer-info">
            <h2>IT | Information&Technology</h2>
            <p>
            Khairii<br>
              PDG 25111, IDN<br><br>
              <strong>Telp:</strong> +62 854 7411 5445<br>
              <strong>Email:</strong> Khairii@gmail.com<br>
            </p>
            <div class="social-links d-flex mt-3">
              <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
              <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
              <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
              <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div><!-- End footer info column-->

        <div class="col-lg-2 col-md-3 footer-links">
        
          
        </div><!-- End footer links column-->

        <div class="col-lg-2 col-md-3 footer-links">
        
        </div><!-- End footer links column-->

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Program Studi</h4>
          <ul>
            <li><a href="#">Teknologi Rekayasa perangkat Lunak</a></li>
            <li><a href="#">Teknik Komputer</a></li>
            <li><a href="#">Manajemen Informatika</a></li>
            <li><a href="#">Animasi</a></li>
          
          </ul>
        </div><!-- End footer links column-->

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Usefull Link</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Mahasiswa</a></li>
            <li><a href="#">Prodi</a></li>
            <li><a href="#">Dosen</a></li>
          
          </ul>
        </div><!-- End footer links column-->

      </div>
    </div>
  </div>

  <div class="footer-legal text-center position-relative">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Khairii</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/ -->
        Designed by <a href="https://www.instagram.com/khairi.0r/" target="_blank">Khairii</a> From Class <a
          href="https://www.instagram.com/a.djust/" target="_blank">TRPL2A</a>
      </div>
    </div>
  </div>

  </footer>
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

  </body>

  </html>