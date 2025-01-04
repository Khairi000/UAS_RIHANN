        <!DOCTYPE html>
        <html lang="en">

        <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>IT - Information&Technology</title>
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
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css" rel="stylesheet">

        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    
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
                <li><a href="mahasiswa.php" class="active">Mahasiswa</a></li>
                <li><a href="prodi.php">Prodi</a></li>
                <li><a href="dosen.php">Dosen</a></li>
                <li><a href="Mata_Kuliah.php">Matkul</a></li>
                <li><a href="about.php">About</a></li>
                <li></li>
                <li></li>
                
                <button type="button" class="btn btn-secondary"><li class="btn-get-started"><a href="login.php">Login</a></li></button>
            </ul>
            </nav><!-- .navbar -->

            </div>
        </header><!-- End Header -->

        <main id="main">

            <!-- ======= Breadcrumbs ======= -->
            <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/bg3a.png');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>Mahasiswa</h2>
                <ol>
                <li><a href="index.php">Home</a></li>
                <li>Mahasiswa</li>
                </ol>
                
                
            </div>
            </div><!-- End Breadcrumbs -->

                <section id="mahasiswa" class="mahasiwa">
                <div class="container" data-aos="fade-up">

                <div class="row position-relative">

                <h3>Data Mahasiswa</h3>
                <table id="example" class="table table-bordered border border-black">
                
                        <thead>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Prodi</th>
                            <th>Hobi</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            
                        </thead>
                <tbody>
                        <?php
                        include 'koneksi.php';
                        $result = mysqli_query($db, "SELECT * FROM mahasiswa 
                        INNER JOIN prodi ON prodi.id = mahasiswa.prodi_id");

                        $no = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $no . "</td>";
                            echo "<td>" . $row['nim'] . "</td>";
                            echo "<td>" . $row['nama'] . "</td>";
                            echo "<td>" . $row['tgl_lahir'] . "</td>";
                            echo "<td>" . $row['jekel'] . "</td>";
                            echo "<td>" . $row['nama_prodi'] . "</td>";
                            echo "<td>" . $row['hobi'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>" . $row['alamat'] . "</td>";
                        
                            echo "</tr>";


                            ?>
                            <?php
                            $no++;
                        }
                        ?>

                    </tbody>
                </table>
                </div>
                </div>
                </section>
            

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
        <script>
        new DataTable('#example');
        </script>
        <script src="assets/js/main.js"></script>

        </body>

        </html>