<!DOCTYPE html>
<html lang="en">
  <?php
session_start();
?>
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>STUNTION | Profile</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/fontawesome-free/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: Logis
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
      <div
        class="container-fluid container-xl d-flex align-items-center justify-content-between"
      >
        <a href="dashboard.php" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <h1>STUNTION</h1>
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
          <ul>
            <li><a href="dashboard.php" class="active">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li class="dropdown">
              <a href="#"
                ><span>Features</span>
                <i class="bi bi-chevron-down dropdown-indicator"></i
              ></a>
              <ul>
                <li><a href="hitung-status-gizi.php">Hitung Status Gizi</a></li>
                <li>
                  <a href="rekomendasi-makanan.php">Rekomendasi Makanan Bergizi</a>
                </li>
              </ul>
            </li>
            <li><a href="#footer">Contact</a></li>
            <li>
              <a class="profile" href="profile2.php">Profile</a>
            </li>
            <li>
              <a class="profile" href="forms/logout.php">Logout</a>
            </li>
          </ul>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->

    <main id="main">
      <!-- ======= Breadcrumbs ======= -->
      <div class="breadcrumbs">
        <div
          class="page-header d-flex align-items-center"
          style="background-image: url('assets/img/page-header.jpg')"
        >
          <div class="container position-relative">
            <div class="row d-flex justify-content-center">
              <div class="col-lg-6 text-center">
                <h2>Profile</h2>
                
              </div>
            </div>
          </div>
        </div>
        <nav>
          <div class="container">
            <ol>
              <li><a href="dashboard.php">Home</a></li>
              <li>Profile</li>
            </ol>
          </div>
        </nav>
      </div>
      <!-- End Breadcrumbs -->

      <!-- ======= Get a Quote Section ======= -->
      <section id="get-a-quote" class="get-a-quote">
        <div class="container" data-aos="fade-up">
          <div class="row g-0">
          <div
              class="col-lg-3 quote-bg"
            ></div>

          
            <div class="col-lg-6">
              <?php
                include('forms/koneksi.php');
                error_reporting(E_ALL^(E_NOTICE|E_WARNING));
                if(!isset($_SESSION['username'])){
                die("Anda belum login");
                }

                $user = $_SESSION['id_user'];

                // Query to check username and password
                $query = "SELECT * FROM user WHERE id_user='$user'";
                $result = mysqli_query($conn, $query);
                $data = $result->fetch_array();

            ?>
            <table class="table-light table table-borderless table-hover table-profile ps-2">
                <tbody>
                  <tr>
                    <th><strong>Username</strong></th>
                    <td><?php echo $data['username']; ?></td>
                  </tr>
                  <tr>
                    <th><strong>Email</strong></th>
                    <td><?php echo $data['email']; ?></td>
                  </tr>
                  <tr>
                    <th><strong>Password</strong></th>
                    <td><?php echo $data['pass']; ?></td>
                  </tr>
                  <tr>
                    <th><strong>Nama Lengkap</strong></th>
                    <td><?php echo $data['nama_lengkap']; ?></td>
                  </tr>
                  <tr>
                    <th><strong>No Handphone</strong></th>
                    <td><?php echo $data['nohp']; ?></td>
                  </tr>
                  <tr>
                    <th><strong>Nama Anak</strong></th>
                    <td><?php echo $data['nama_anak']; ?></td>
                  </tr>
                  <tr>
                    <th><strong>Umur Anak</strong></th>
                    <td><?php echo $data['umur_anak']; ?></td>
                  </tr>
                  <tr>
                    <th><strong>Alamat</strong></th>
                    <td><?php echo $data['alamat']; ?></td>
                  </tr>
                </tbody>
              </table>
              <div class="php-email-form col-md-12 text-center" style="text-decoration: none; background-color: white;">
                <button type="submit" class="btn-edit" name="edit_data"><a href="form_edit_profile.php" 
                style="text-decoration: none; color: white;">
                  Edit Data</a></button>
              </div>

      </div>
      </div>
      </div>
      </section>
      <!-- End Get a Quote Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="dashboard.php" class="logo d-flex align-items-center">
              <span>STUNTION</span>
            </a>
            <p>
              Stunting Education adalah sebuah website yang menyediakan
              informasi tentang stunting. Dilengkapi dengan fitur pemeriksaan
              status gizi serta rekomendasi makanan bergizi.
            </p>
            <div class="social-links d-flex mt-4">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="dashboard.php">Home</a></li>
              <li><a href="about.php">About us</a></li>
              <li><a href="dashboard.php">Features</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Our Features</h4>
            <ul>
              <li><a href="dashboard.php">Stunting</a></li>
              <li><a href="hitung-status-gizi.php">Cek Status Gizi</a></li>
              <li>
                <a href="rekomendasi-makanan.php">Rekomendasi Makananan Bergizi</a>
              </li>
            </ul>
          </div>

          <div
            class="col-lg-3 col-md-12 footer-contact text-center text-md-start"
          >
            <h4>Contact Us</h4>
            <p>
              <strong>Phone:</strong> 0852 1705 3289<br />
              <strong>Email:</strong> info@stuntion.com<br />
            </p>
          </div>
        </div>
      </div>

      <div class="container mt-4">
        <div class="copyright">
          &copy; Copyright <strong><span>STUNTION</span></strong
          >. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/ -->
          <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
        </div>
      </div>
    </footer>
    <!-- End Footer -->


    <a
      href="#"
      class="scroll-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
