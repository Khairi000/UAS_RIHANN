<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>IT | Information&Technology</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo1.jpeg" rel="icon">
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
  <link href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css" rel="stylesheet">

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
         <li><a href="index.html" class="active">Home</a></li>
          <li><a href="mahasiswa.php">Mahasiswa</a></li>
          <li><a href="prodi.php">Prodi</a></li>
          <li><a href="dosen.php">Dosen</a></li>
          <li><a href="Mata_Kuliah.php">Matkul</a></li>
          <li><a href="about.php">About</a></li>
          <li></li>
          <li></li>
        
          <button type="button" class="btn btn-secondary"><li class="btn-get-started"><a href="admin/login.php">Login</a></li></button>
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

      <div class="carousel-item active" style="background-image: url(assets/img/slide4.jpg)">
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
          <p>Berita Terbaru Di Jurusan Teknologi Informasi  </p>
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
                  <a href="index.php" class="btn btn-secondary">Back to Home</a>
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
    <div class="section-header">
          <h2>About</h2>
        <p>Sejarah Jurusan Teknologi Informasi</p>
        </div>
    <!-- ======= Alt Services Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-around gy-4">
          <div class="col-lg-4 img-bg" style="background-image: url(assets/img/kajur.jpg);" data-aos="100"
            data-aos-delay="100"></div>

          <div class="col-lg-5 d-flex flex-column justify-content-center">
            <h3>Ronal Hadi, ST., M.Kom</h3>
            <p>Ketua Jurusan Teknologi Informasi</p>

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
             
              <div>
             
                <p>Gagasan pendirian jurusan Teknologi informasi sudah ada sejak awal tahun 2000, namun terkendala karena beberapa pertimbangan antara lain ketersediaan Sumber Daya Manusia dan Infrastruktur.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
            
              <div>
             
                <p>Pada Awal bulan Febuari 2005, beberapa orang dosen yang antara lain terdiri dari, Erwadi Bakar , Surfayondri , Andrizal , H A Mooduto , Yulindon, Ahmad Dahlan, Ronal Hadi dan Rahmat Hidayat, 
                  atas dukungan yang kuat dari pimpinan Politeknik Suhendrik Hanwar dan pimpinan lainnya membuat proposal pendirian program studi yang berkaitan dengan Teknologi Informasi.
                </p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
            
              <div>
               
                <p>Dasar utama pendirian ini adalah keinginan Politeknik Unand Padang untuk ikut berkontribusi secara maksimal dalam pengembangan dan penerapan teknologi informasi melalui dunia pendidikan serta sebagai langkah antisipasi perkembangan teknologi informasi dan komunikasi yang demikian cepat yang tentunya membutuhkan SDM untuk mengelolanya.
                </p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
            </div><!-- End Icon Box -->

          </div>
        </div>

      </div>
    </section><!-- End Alt Services Section -->


    <div class="section-header">
          <h2>Program Studi</h2>
          <p>Program Studi Di Kampus Utama</p>
        </div>
    <!-- ======= Features Section ======= -->
    <section id="features" class="features section-bg">
      <div class="container" data-aos="fade-up">

        <ul class="nav nav-tabs row  g-2 d-flex">

          <li class="nav-item col-3">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
              <h4>Teknologi Rekayasa Perangkat Lunak</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item col-3"id="tekom">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
              <h4>Teknik Komputer</h4>
            </a><!-- End tab nav item -->

          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
              <h4>Manajemen Informatika</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
              <h4>Animasi</h4>
            </a>
          </li><!-- End tab nav item -->

        </ul>

        <div class="tab-content">

          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center"
                data-aos="fade-up" data-aos-delay="100">
                <h3>D4 Teknologi Rekayasa Perangkat Lunak</h3>
                <p class="fst-italic">
                Program studi D4 Teknologi Rekayasa Perangkat Lunak pada jurusan Teknologi Informasi memiliki latar belakang yang kuat dalam menghasilkan tenaga ahli di bidang pengembangan perangkat lunak. 
                </p>
                <p class="fst-italic">
                Di era informasi digital dan teknologi yang terus berkembang pesat, kebutuhan akan perangkat lunak berkualitas tinggi semakin meningkat. Oleh karena itu, program studi ini dirancang untuk memberikan pemahaman mendalam tentang konsep-konsep dasar teknologi rekayasa perangkat lunak,
                metodologi pengembangan, kebutuhan, analisis sistem desain, pengujian perangkat lunak, dan manajemen proyek perangkat lunak. Aspek-aspek latar belakang dari program studi D4 Teknologi Rekayasa Perangkat Lunak mencakup beberapa hal yang mendasari pendirian program ini.
                </p>
                <ul>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                <img src="assets/img/rpl.png" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End tab content item -->

          <div class="tab-pane" id="tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>D3 Teknik Komputer</h3>
                <p class="fst-italic">
                PS D3 TKOM  dipimpin oleh seorang koordinator yang dipilih dalam rapat pemilihan koordinator prodi. Pemilihan Koordinator PS D3 TKOM  mengacu pada Peraturan Menteri Pendidikan dan Kebudayaan Republik Indonesia Nomor 89 Tahun 2014 tentang Statuta Politeknik Negeri Padang. Dalam Statuta dijelaskan bahwa Ketua Jurusan mengusulkan tiga calon Koordinator PS D3 TKOM 
                untuk selanjutnya dipilih oleh para dosen dalam rapat pemilihan koordinator prodi. 
                </p>
                <p class="fst-italic">
                Selain diatur di dalam Statuta PNP, tata cara pemilihan Koordinator program studi juga mengacu pada Peraturan Direktur PNP No. 0285/PL9/KP/2015 tentang Tata Cara Pengangkatan dan Pemberhentian Koordinator Prodi PNP. Koordinator terpilih akan dilantik oleh Direktur PNP untuk masa jabatan dua tahun.
                Koordinator PS D3 TKOM  memiliki tanggung jawab dalam pengelolaan pelaksanaan kegiatan Proses Belajar  Mengajar  (PBM)  program studi. Dalam melaksanakan tugas, koordinator Prodi dibantu oleh seorang yang bertugas di bidang administrasi dan berkoordinasi dengan Labor Komputer. 
                </p>
                
                
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/tekom.png" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End tab content item -->

          <div class="tab-pane" id="tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>D3 Manajemen Informatika</h3>
                <p class="fst-italic">
                Jurusan Teknologi Informasi Politeknik Negeri Padang mempunyai 3 program studi yaitu D3 Manajemen Informatika, D3 Teknik Komputer dan D4 Teknik Rekayasa Perangkat Lunak. Program Studi D3 Manajemen Informatika didirikan pada tahun 2005, dan terakreditasi dengan peringkat B berdasarkan Surat Keputusan Badan Akreditasi nasional Perguruan Tinggi (BANPT) 
                Departemen Pendidikan dan kebudayaan republik Indonesia Surat Keputusan Nomor :1196/SK/BAN- PT/Akred/Dpl-III/XII/2015 dengan nilai akreditasi 338.
                </p>
                <p class="fst-italic">
                <p class="fst-italic">
                Jurusan Teknologi Informasi Politeknik Negeri Padang mempunyai 3 program studi yaitu D3 Manajemen Informatika, D3 Teknik Komputer dan D4 Teknik Rekayasa Perangkat Lunak. Program Studi D3 Manajemen Informatika didirikan pada tahun 2005, dan terakreditasi dengan peringkat B berdasarkan Surat Keputusan Badan Akreditasi nasional Perguruan Tinggi (BANPT) 
                Departemen Pendidikan dan kebudayaan republik Indonesia Surat Keputusan Nomor :1196/SK/BAN- PT/Akred/Dpl-III/XII/2015 dengan nilai akreditasi 338.
                </p>
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/mi.png" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End tab content item -->

          <div class="tab-pane" id="tab-4">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>D4 Animasi</h3>
                <p class="fst-italic">
                Program Studi D4 Animasi dirancang untuk mencetak profesional animasi yang kompeten dalam menciptakan karya visual berkualitas tinggi menggunakan teknologi mutakhir. Program ini berfokus pada pengembangan keterampilan teknis, artistik, dan manajerial, 
                sehingga lulusan mampu berkontribusi dalam berbagai bidang industri kreatif, seperti film animasi, game, periklanan, dan media digital.
                </p>
                <p class="fst-italic">
                Mahasiswa akan dibekali dengan kemampuan memproduksi animasi 2D dan 3D, mendesain karakter dan elemen visual, serta menguasai perangkat lunak animasi profesional seperti Blender, Maya, dan Adobe After Effects. Selain itu, program ini juga mengembangkan kemampuan 
                dalam menghasilkan narasi kreatif, manajemen proyek, dan kewirausahaan untuk memimpin proyek animasi atau memulai usaha kreatif.
                </p>
                
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/animasi.png" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End tab content item -->

        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Our Projects Section ======= -->
   


  </main><!-- End #main -->

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
              <li><a href="#features">Teknologi Rekayasa perangkat Lunak</a></li>
              <li><a href="#features">Teknik Komputer</a></li>
              <li><a href="#features">Manajemen Informatika</a></li>
              <li><a href="#features">Animasi</a></li>
            
            </ul>
          </div><!-- End footer links column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Usefull Link</h4>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="mahasiswa.php">Mahasiswa</a></li>
              <li><a href="prodi.php">Prodi</a></li>
              <li><a href="dosen.php">Dosen</a></li>
            
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
  <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
  <script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>
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
