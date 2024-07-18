<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Logis Bootstrap Template - Services</title>
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
                <li>
                  <a href="hitung-status-gizi.php">Hitung Status Gizi</a>
                </li>
                <li>
                  <a href="rekomendasi-makanan.php"
                    >Rekomendasi Makanan Bergizi</a
                  >
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
        <div class="page-header d-flex align-items-center">
          <div class="container position-relative">
            <div class="row d-flex justify-content-center">
              <div class="col-lg-6 text-center">
                <h2>Rekomendasi Makanan Bergizi</h2>
                <p>
                  Makanan yang bergizi dapat membantu tumbuh kembang si Kecil
                  agar sehat dan kuat.
                </p>
              </div>
            </div>
          </div>
        </div>
        <nav>
          <div class="container">
            <ol>
              <li><a href="dashboard.php">Home</a></li>
              <li><a href="services.php">Rekomendasi Makanan</a></li>
            </ol>
          </div>
        </nav>
      </div>
      <!-- End Breadcrumbs -->

      <!-- ======= Services Section ======= -->
      <section id="service" class="services pt-0">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <span>Rekomendasi Makanan</span>
            <h2>Rekomendasi Makanan</h2>
          </div>

          <div class="row gy-4">
            <div
              class="col-lg-4 col-md-6"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <div class="card">
                <div class="card-img">
                  <img
                    src="assets/img/makanan/bubur-gulai.jpg"
                    alt=""
                    class="img-fluid"
                  />
                </div>
                <h3>
                  <a href="bubur.php" class="stretched-link"
                    >Bubur Gulai Daging</a
                  >
                </h3>
                <p>
                  Makanan di waktu pagi yang mengandung bahan utama yaitu daging
                  giling, tahu, wortel, serta beras.
                </p>
              </div>
            </div>
            <!-- End Card Item -->

            <div
              class="col-lg-4 col-md-6"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="card">
                <div class="card-img">
                  <img
                    src="assets/img/makanan/udang.jpg"
                    alt=""
                    class="img-fluid"
                  />
                </div>
                <h3>
                  <a href="udang.php" class="stretched-link"
                    >Udang Labu Kuning Jagung Manis</a
                  >
                </h3>
                <p>
                  Makanan ini termasuk kategori untuk makan siang yang bahan
                  utamanya adalah labu kuning, jagung manis pipil, tahu, udang,
                  dan keju belcube.
                </p>
              </div>
            </div>
            <!-- End Card Item -->

            <div
              class="col-lg-4 col-md-6"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <div class="card">
                <div class="card-img">
                  <img
                    src="assets/img/makanan/steaktempe.jpg"
                    alt=""
                    class="img-fluid"
                  />
                </div>
                <h3>
                  <a href="steak.php" class="stretched-link">Steak Tempe</a>
                </h3>
                <p>
                  Steak tempe merupakan hidangan untuk makan malam yang dinilai
                  baik untuk membantu pertumbuhan tulang si Kecil.
                </p>
              </div>
            </div>
            <!-- End Card Item -->

            <div
              class="col-lg-4 col-md-6"
              data-aos="fade-up"
              data-aos-delay="400"
            >
              <div class="card">
                <div class="card-img">
                  <img
                    src="assets/img/makanan/kroket.jpg"
                    alt=""
                    class="img-fluid"
                  />
                </div>
                <h3>
                  <a href="kroket.php" class="stretched-link"
                    >Kroket Sayur Daging</a
                  >
                </h3>
                <p>
                  Hidangan makan malam ini mengandung banyak nutrisi yang baik
                  untuk anak-anak.
                </p>
              </div>
            </div>
            <!-- End Card Item -->

            <div
              class="col-lg-4 col-md-6"
              data-aos="fade-up"
              data-aos-delay="500"
            >
              <div class="card">
                <div class="card-img">
                  <img
                    src="assets/img/makanan/chicken.jpg"
                    alt=""
                    class="img-fluid"
                  />
                </div>
                <h3>
                  <a href="chicken.php" class="stretched-link"
                    >Chicken with Sweet Potato & Carrots</a
                  >
                </h3>
                <p>
                  Hidangan ini termasuk jenis makanan berat dengan nutrisi yang
                  baik bagi si Kecil.
                </p>
              </div>
            </div>
            <!-- End Card Item -->

            <div
              class="col-lg-4 col-md-6"
              data-aos="fade-up"
              data-aos-delay="600"
            >
              <div class="card">
                <div class="card-img">
                  <img
                    src="assets/img/makanan/kue.jpg"
                    alt=""
                    class="img-fluid"
                  />
                </div>
                <h3>
                  <a href="kue.php" class="stretched-link"
                    >Kue Talam Jagung
                  </a>
                </h3>
                <p>
                  Cemilan yang cocok dimakan oleh kalangan manapun karena
                  teksturnya yang lembut dan kaya akan nutrisi.
                </p>
              </div>
            </div>
            <!-- End Card Item -->
          </div>
        </div>
      </section>
      <!-- End Services Section -->
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
                <a href="rekomendasi-makanan.php"
                  >Rekomendasi Makananan Bergizi</a
                >
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
