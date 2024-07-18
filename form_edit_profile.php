<!DOCTYPE html>
<html lang="en">

<?php
  session_start();
  ?>
  
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>STUNTION | Edit Profile</title>
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
          <h1>Logis</h1>
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
          <ul>
            <li><a href="dashboard.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="pricing.php">Pricing</a></li>
            <li class="dropdown">
              <a href="#"
                ><span>Drop Down</span>
                <i class="bi bi-chevron-down dropdown-indicator"></i
              ></a>
              <ul>
                <li><a href="#">Drop Down 1</a></li>
                <li class="dropdown">
                  <a href="#"
                    ><span>Deep Drop Down</span>
                    <i class="bi bi-chevron-down dropdown-indicator"></i
                  ></a>
                  <ul>
                    <li><a href="#">Deep Drop Down 1</a></li>
                    <li><a href="#">Deep Drop Down 2</a></li>
                    <li><a href="#">Deep Drop Down 3</a></li>
                    <li><a href="#">Deep Drop Down 4</a></li>
                    <li><a href="#">Deep Drop Down 5</a></li>
                  </ul>
                </li>
                <li><a href="#">Drop Down 2</a></li>
                <li><a href="#">Drop Down 3</a></li>
                <li><a href="#">Drop Down 4</a></li>
              </ul>
            </li>
            <li><a href="contact.php">Contact</a></li>
            <li>
              <a class="get-a-quote" href="get-a-quote.php">Get a Quote</a>
            </li>
          </ul>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->
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
                <h2>Edit Data Profile</h2>
              </div>
            </div>
          </div>
        </div>
        <nav>
          <div class="container">
            <ol>
              <li><a href="dashboard.php">Home</a></li>
              <li>Edit Data Profile</li>
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
              class="col-lg-5 quote-bg"
              style="background-image: url(assets/img/bg_edit.jpg)"
            ></div>

            <div class="col-lg-7">
              <form
                action="forms/edit-profile.php"
                method="post"
                class="php-email-form"
              >
                <h3>Lengkapi Data Anak</h3>
                <div class="row gy-4">
                  <div class="col-md-12">
                    <input
                      type="text"
                      name="nama_anak"
                      class="form-control"
                      placeholder="Nama Anak"
                      required
                    />
                  </div>

                  <div class="col-md-12">
                    <input
                      type="number"
                      name="umur_anak"
                      class="form-control"
                      placeholder="Umur Anak (dalam bulan)"
                      required
                    />
                  </div>

                  

                  <div class="col-lg-12">
                    <h4>Detail data Diri Anda</h4>
                  </div>

                  <div class="col-md-12">
                    <input type="hidden" name="id-user" id="id-user" value="<?php echo $_SESSION['id_user']; ?>" />
                  </div>

                  <div class="col-md-12">
                    <input
                      type="text"
                      name="nama_lengkap"
                      class="form-control"
                      placeholder="Nama Lengkap"
                      required
                    />
                  </div>

                  <div class="col-md-12">
                    <input
                      type="text"
                      name="username"
                      class="form-control"
                      placeholder="Username"
                      required
                    />
                  </div>

                  <div class="col-md-12">
                    <input
                      type="email"
                      class="form-control"
                      name="email"
                      placeholder="Email"
                      required
                    />
                  </div>

                  <div class="col-md-12">
                    <input
                      type="text"
                      class="form-control"
                      name="password"
                      placeholder="Password"
                      required
                    />
                  </div>

                  <div class="col-md-12">
                    <input
                      type="text"
                      class="form-control"
                      name="nohp"
                      placeholder="No Handphone"
                      required
                    />
                  </div>

                  <div class="col-md-12">
                    <textarea
                      class="form-control"
                      name="alamat"
                      rows="6"
                      placeholder="Alamat"
                      required
                    ></textarea>
                  </div>
                    <button name="edit_btn" type="submit">Edit Data Profile</button>
                  </div>
                </div>
              </form>
            </div>
            <!-- End Quote Form -->
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
              <li><a href="#features">Features</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Our Features</h4>
            <ul>
              <li><a href="#">Stunting</a></li>
              <li><a href="#hitung">Cek Status Gizi</a></li>
              <li>
                <a href="#service">Rekomendasi Makananan Bergizi</a>
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
    <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
