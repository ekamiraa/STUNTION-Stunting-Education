<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>STUNTION| Halaman Awal</title>
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
            <li><a href="form_login.php" class="active">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li class="dropdown">
              <a href="#"
                ><span>Features</span>
                <i class="bi bi-chevron-down dropdown-indicator"></i
              ></a>
              <ul>
                <li><a href="#cek-status-gizi">Hitung Status Gizi</a></li>
                <li>
                  <a href="#rekomendasi-makanan">Rekomendasi Makanan Bergizi</a>
                </li>
              </ul>
            </li>
            <li><a href="#footer">Contact</a></li>
            <li>
              <a class="profile" href="form_login.php">Profile</a>
            </li>
            <li>
              <a class="profile" href="form_login.php">Login</a>
            </li>
          </ul>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
      <div class="container">
        <div class="row gy-4 d-flex justify-content-between">
          <div
            class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center"
          >
            <h2 data-aos="fade-up">Yuk Cegah Stunting dengan STUNTION!</h2>
            <p data-aos="fade-up" data-aos-delay="100">
              Stunting adalah kondisi gagal tumbuh pada anak balita akibat
              kekurangan gizi kronis sehingga tinggi atau panjang badan anak
              terlalu pendek untuk usianya. Jika dibiarkan terlalu lama maka
              akan berakibat lebih buruk.
            </p>
            <p data-aos="fade-up" data-aos-delay="100">
              Yuk pelajari stunting dengan
              <span>STUNTION (Stunting Education)!</span>
            </p>

            <form
              action="#"
              class="d-flex align-items-stretch mb-3"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <button type="submit" class="btn btn-button">
                <span>Pelajari Lebih Lanjut</span
                ><i class="bi bi-arrow-right"></i>
              </button>
            </form>

            <div class="row gy-4" data-aos="fade-up" data-aos-delay="400">
              <div class="col-lg-3 col-6">
                <div class="stats-item text-center w-100 h-100">
                  <img
                    src="assets/img/stunting.png"
                    class="img-fluid"
                    alt="stunting.png"
                  />
                  <span>21,6%</span>
                  <p>Stunting</p>
                </div>
              </div>
              <!-- End Stats Item -->

              <div class="col-lg-3 col-6">
                <div class="stats-item text-center w-100 h-100">
                  <img
                    src="assets/img/wasting.png"
                    class="img-fluid"
                    alt="wasting.png"
                  />
                  <span>7,7%</span>
                  <p>Wasting</p>
                </div>
              </div>
              <!-- End Stats Item -->

              <div class="col-lg-3 col-6">
                <div class="stats-item text-center w-100 h-100">
                  <img
                    src="assets/img/underweight.png"
                    class="img-fluid"
                    alt="underweight.png"
                  />
                  <span>17,1%</span>
                  <p>Underweight</p>
                </div>
              </div>
              <!-- End Stats Item -->

              <div class="col-lg-3 col-6">
                <div class="stats-item text-center w-100 h-100">
                  <img
                    src="assets/img/anemia.png"
                    class="img-fluid"
                    alt="anemia.png"
                  />
                  <span>48,9%</span>
                  <p>Anemia</p>
                </div>
              </div>
              <!-- End Stats Item -->
            </div>
          </div>

          <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <img
              src="assets/img/height.svg"
              class="img-fluid mb-3 mb-lg-0"
              alt=""
            />
          </div>
        </div>
      </div>
    </section>
    <!-- End Hero Section -->

    <main id="main">
      <!-- ======= Features Section ======= -->
      <section id="features" class="features">
        <div class="container">
          <div class="section-features">
            <span>Our Features</span>
            <h2>Our Features</h2>
          </div>
          <div
            class="row gy-4 align-items-center features-item"
            data-aos="fade-up"
            id="cek-status-gizi"
          >
            <div class="col-md-5 order-1 order-md-2">
              <img
                src="assets/img/hitung-status-gizi.jpg"
                class="img-fluid"
                alt=""
              />
            </div>
            <div class="col-md-7 order-2 order-md-1">
              <h3>Hitung Status Gizi</h3>
              <p>
                Pastikan kesehatan dan pertumbuhan optimal sang buah hati!
                Gunakan fitur penghitungan status gizi kami untuk mendapatkan
                informasi penting tentang status gizi sang buah hati dan
                memastikan apakah terkena stunting atau tidak.
              </p>
              <form
                action="#"
                class="d-flex align-items-stretch mb-3"
                data-aos="fade-up"
                data-aos-delay="300"
              >
                <button type="submit" class="btn btn-button">
                  <span>Cek Status Gizi </span><i class="bi bi-arrow-right"></i>
                </button>
              </form>
            </div>
          </div>
          <!-- Features Item -->

          <div
            class="row gy-4 align-items-center features-item"
            data-aos="fade-up"
            id="rekomendasi-makanan"
          >
            <div class="col-md-5">
              <img
                src="assets/img/makanan-bergizi.jpg"
                class="img-fluid"
                alt=""
              />
            </div>
            <div class="col-md-7">
              <h3>Rekomendasi Makanan Bergizi</h3>
              <p>
                Jaga kesehatan dan kebugaran buah hati Anda dengan Fitur
                Rekomendasi Makanan Bergizi kami! Dapatkan saran makanan
                seimbang dan bernutrisi yang disesuaikan dengan kebutuhan buah
                hati Anda.
              </p>
              <ul>
                <li>
                  <i class="bi bi-check"></i> Saran makanan bergizi seimbang.
                </li>
                <li><i class="bi bi-check"></i> Tersedia informasi nutrisi.</li>
                <li>
                  <i class="bi bi-check"></i> Bahan yang mudah ditemukan dan
                  terjangkau.
                </li>
              </ul>
              <form
                action="#"
                class="d-flex align-items-stretch mb-3"
                data-aos="fade-up"
                data-aos-delay="300"
              >
                <button type="submit" class="btn btn-button">
                  <span>Lihat Rekomendasi </span
                  ><i class="bi bi-arrow-right"></i>
                </button>
              </form>
            </div>
          </div>
          <!-- Features Item -->
        </div>
      </section>
      <!-- End Features Section -->
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
              <li><a href="form_login.php">Home</a></li>
              <li><a href="about.php">About us</a></li>
              <li><a href="form_login.php">Features</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Our Features</h4>
            <ul>
              <li><a href="halaman-awal.php">Stunting</a></li>
              <li><a href="#cek-status-gizi">Cek Status Gizi</a></li>
              <li>
                <a href="#rekomendasi-makanan">Rekomendasi Makananan Bergizi</a>
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
