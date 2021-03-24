<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>My Profile - Laravel 8</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  {{-- {{secure_asset(' ')}}  agar tampil pada website online--}}
  <link href="{{ secure_asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ secure_asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ secure_asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ secure_asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ secure_asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ secure_asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ secure_asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ secure_asset('assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: MyResume - v4.0.1
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
        <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
        <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Hadi Kusumanto</h1>
      <p>I'm <span class="typed" data-typed-items="Designer, Freelancer, Photographer"></span></p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="{{ 'instagram.com/hadi.id62' }}" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="{{ 'github.com/hadi-web' }}" class="github"><i class="bx bxl-github"></i></a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <p>"Bermimpilah..., Agar hidup anda mempunyai tujuan"</p>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <img src="{{ asset('assets/img/profile.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <h3>Informatic Enginer.</h3>
            <p class="font-italic">
              Hi.. Saya hadi kusumanto, mahasiswa semester 6 Politeknik Harapan Bersama Tegal. Berikut adalah biodata mengenai saya
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>NIM:</strong> <span>18090112</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Name:</strong> <span>Hadi Kusumanto</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Class:</strong> <span>6B</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>Brebes,30 Jun 2000</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+62 856 4184 1005</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Gandasuli, Brebes, Jawa Tengah, Indonesia</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>20</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>hadikusumanto2000@gmail.com</span></li>
                </ul>
              </div>
            </div>
            <p>
              Suatu kebanggan bagi saya, apabila anda mendukung saya dengan cara mengikuti salah satu akun media sosial saya.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    {{-- Skills --}}
    <section id="skills" class="skills section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Skills</h2>
          <p>Berikut adalah kemampuan yang saya miliki untuk saat ini</p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">HTML <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript <i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">PHP <i class="val">85%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">WordPress/CMS <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Photoshop <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Resume</h2>
          <p>Rangkuman riwayat hidup saya seperti, riwayat pendidikan, pengalaman, ataupun sertifikat</p>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <h3 class="resume-title">Riwayat Pendidikan</h3>
            <div class="resume-item">
              <h4>SD Negri 01 Gandasuli Brebes</h4>
              <h5>2006 - 2012</h5>
            </div>
            <div class="resume-item">
              <h4>SMP Negri 03 Brebes</h4>
              <h5>2012 - 2015</h5>
            </div>
            <div class="resume-item">
              <h4>MA Negri 01 Brebes</h4>
              <h5>2015 - 2018</h5>
              <p><em>Mengambil Jurusan MIPA (IPA) </em></p>
            </div>
            <div class="resume-item">
              <h4>Politeknik Harapan Bersama Tegal</h4>
              <h5>2018 - Sekarang</h5>
              <p><em>Mengambil Jurusan D IV Teknik Informatika </em></p>
            </div>
          </div>
          <div class="col-lg-6">
            <h3 class="resume-title">Pengalaman Kerja</h3>
            <div class="resume-item">
              <h4>Kerja Praktik Industri di PT.Global Intermedia Nusantara</h4>
              <h5>2020</h5>
              <p><em>Bekerja selama 1 Bulan, berfokus pada UI/UX Designer & Web Development</em></p>
            </div>
            <h3 class="resume-title">Pengalaman Organisasi</h3>
            <div class="resume-item">
              <h4>ROHIS MA Negri 01 Brebes</h4>
              <h5>2016-2018</h5>
              <p><em>Menjabat sebagai sekertaris 2 selama 2 tahun, dan pernah menjadi ketua panitia dalam rangka requetment anggota baru</em></p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Berikut adalah beberapa portofolio yang pernah saya buat selama ini</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".design">Design</li>
              <li data-filter=".web">Web</li>
              <li data-filter=".logo">Logo</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item design">
            <div class="portfolio-wrap">
              <img src="{{ asset('assets/img/portfolio/t-shirt.png') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>T-shirt</h4>
                <p>Design</p>
                <div class="portfolio-links">
                  <a href="{{ asset('assets/img/portfolio/t-shirt.png') }}" data-gallery="portfolioGallery" 
                  class="portfolio-lightbox" title="T-Shirt"><i class="bx bx-plus"></i></a>
                  <a href="#" class="portfolio-details-lightbox" data-glightbox="type: external" 
                  title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item web">
            <div class="portfolio-wrap">
              <img src="{{ asset('assets/img/portfolio/sisfo_sd.png') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sisfo SDN 01 Gandasuli</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="{{ asset('assets/img/portfolio/sisfo_sd.png') }}" data-gallery="portfolioGallery" 
                  class="portfolio-lightbox" title="Sisfo SDN 01 Gandasuli"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" 
                  title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item web">
            <div class="portfolio-wrap">
              <img src="{{ asset('assets/img/portfolio/free_desain.png') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Website Free Desain</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="{{ asset('assets/img/portfolio/free_desain.png') }}" data-gallery="portfolioGallery"
                   class="portfolio-lightbox" title="Website Free Desain"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" 
                  title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item web">
            <div class="portfolio-wrap">
              <img src="{{ asset('assets/img/portfolio/cms_jagad_print.png') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>E-Comerce Jagad Print</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="{{ asset('assets/img/portfolio/cms_jagad_print.png') }}" data-gallery="portfolioGallery"
                   class="portfolio-lightbox" title="E-Comerce Jagad Print"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                   title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item logo">
            <div class="portfolio-wrap">
              <img src="{{ asset('assets/img/portfolio/logo1.png') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Logo Botcah OS</h4>
                <p>Logo</p>
                <div class="portfolio-links">
                  <a href="{{ asset('assets/img/portfolio/logo1.png') }}" data-gallery="portfolioGallery" 
                  class="portfolio-lightbox" title="Logo Botcah OS"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                   title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item design">
            <div class="portfolio-wrap">
              <img src="{{ asset('assets/img/portfolio/sertifikat.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Desain Sertifikat</h4>
                <p>Design</p>
                <div class="portfolio-links">
                  <a href="{{ asset('assets/img/portfolio/sertifikat.jpg') }}" data-gallery="portfolioGallery" 
                  class="portfolio-lightbox" title="Desain Sertifikat"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" 
                  title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item logo">
            <div class="portfolio-wrap">
              <img src="{{ asset('assets/img/portfolio/logo2.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Logo Jagad Print</h4>
                <p>Logo</p>
                <div class="portfolio-links">
                  <a href="{{ asset('assets/img/portfolio/logo2.jpg') }}" data-gallery="portfolioGallery" 
                  class="portfolio-lightbox" title="Logo Jagad Print"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" 
                  title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item design">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/pamflet.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Desain Pamflet Makrab</h4>
                <p>Design</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/pamflet.jpg" data-gallery="portfolioGallery" 
                  class="portfolio-lightbox" title="Desain Pamflet Makrab"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" 
                  title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Hadi Kusumanto</h3>
      <p>Bekerja keras saja tidak cukup, jika tidak dibarengi dengan ikhtiar</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="{{ 'instagram.com/hadi.id62' }}" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="{{ 'github.com/hadi-web' }}" class="github"><i class="bx bxl-github"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>MyProfile</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: [license-url] -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/typed.js/typed.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>

