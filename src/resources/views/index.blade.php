<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio - Alya Nurul Qolbi</title>
  <meta name="description" content="Portfolio Alya Nurul Qolbi">
  <meta name="keywords" content="portfolio, web developer, ui ux">

  <!-- Favicons -->
  <link rel="icon" type="image/jpg" href="{{ asset('assets/img/logo-a.jpg') }}">
  <link rel="apple-touch-icon" href="{{ asset('assets/img/logo-a.jpg') }}">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&family=Poppins:wght@100;300;400;500;700&family=Raleway:wght@100;300;400;500;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>

<body class="index-page">

  <!-- HEADER -->
  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="#" class="logo d-flex align-items-center">
        <h1 class="sitename">I'm Alya</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#portfolio">Showcase / Project</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>

        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- HERO SECTION -->
    <section id="hero"
      class="hero section dark-background"
      style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
      url('https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=1920')
      no-repeat center center/cover;
      height: 100vh;">

      <div class="container h-100">
        <div class="row justify-content-center align-items-center h-100 text-center">

          <div class="col-lg-8" data-aos="fade-up">

            <img
              src="{{ asset('assets/img/alya 2.jpeg') }}"
              alt="Alya"
              class="img-fluid rounded-circle mb-4"
              style="width: 200px; height: 200px; object-fit: cover; border: 5px solid white;">

            <h2 class="text-white">Haii, Saya Alya</h2>

            <p class="text-white">
              <span class="typed"
                data-typed-items="UI/UX Designer, Web Developer, Freelancer, Content Creator"></span>
            </p>

          </div>

        </div>
      </div>

    </section>

    <!-- ABOUT SECTION -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up">

        <div class="row gy-5 align-items-center">

          <!-- FOTO -->
          <div class="col-lg-5">

            <img
              src="{{ asset('assets/img/alya 1.jpeg') }}"
              class="img-fluid rounded shadow portfolio-image"
              alt="Alya">

          </div>

          <!-- ABOUT -->
          <div class="col-lg-7">

            <div class="about-info mb-4">
              <p><strong>Name:</strong> Alya Nurul Qolbi</p>
              <p><strong>Profile:</strong> Full Stack Developer</p>
              <p><strong>Email:</strong> nurulqolbialya@gmail.com</p>
              <p><strong>Phone:</strong> 083894951894</p>
            </div>

            <div class="about-me">
              <h3 class="mb-3">About Me</h3>

              <p>
                Haii! Saya adalah seorang mahasiswa program studi
                <strong>Sistem Informasi, Fakultas Ilmu Komputer</strong>.
              </p>

              <p>
                Saya memiliki ketertarikan pada bidang
                <strong>Analisis dan Perancangan Sistem</strong>,
                <strong>Manajemen Basis Data</strong>,
                serta <strong>UI/UX Design</strong>.
              </p>

              <p>
                Saya senang mengeksplorasi kreativitas digital menggunakan
                <strong>Figma</strong> dan <strong>Canva</strong>,
                serta terus belajar di bidang
                <strong>Web Development</strong>
                untuk membangun website yang interaktif, responsif,
                dan user-friendly.
              </p>

            </div>

          </div>

        </div>

      </div>

    </section>

    <!-- PORTFOLIO SECTION -->
    <section id="portfolio" class="portfolio section">

      <div class="container section-title" data-aos="fade-up">

        <h2>Showcase / Project</h2>

        <p>
          Daftar project yang telah saya buat selama perkuliahan
        </p>

      </div>

      <div class="container">

        <div class="row gy-4">

          <!-- PROJECT 1 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">

            <div class="portfolio-wrap shadow rounded p-3 h-100">

              <img
                src="{{ asset('assets/img/portfolio/toko pastry and bakery.webp') }}"
                class="img-fluid rounded portfolio-image"
                alt="Project 1">

              <div class="portfolio-info mt-3">

                <h5>
                  Pemesanan Toko Pastry and Bakery (Alnisfay)
                </h5>

                <p>
                  Project Pemrograman Berorientasi Objek
                </p>

              </div>

            </div>

          </div>

          <!-- PROJECT 2 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">

            <div class="portfolio-wrap shadow rounded p-3 h-100">

            <img
              src="{{ asset('assets/img/portfolio/kereta.jpeg') }}"
              class="portfolio-image"
              alt="Project 2"
              style="width: 100%; height: 300px; object-fit: cover;">

              <div class="portfolio-info mt-3">

                <h5>
                  Sistem Pemesanan Tiket Kereta Api (TixGO)
                </h5>

                <p>
                  Project 3 Matkul (RPL, Basis Data, dan PBO)
                </p>

              </div>

            </div>

          </div>

          <!-- PROJECT 3 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">

            <div class="portfolio-wrap shadow rounded p-3 h-100">

              <img
                src="{{ asset('assets/img/portfolio/dessert.avif') }}"
                class="img-fluid rounded portfolio-image"
                alt="Project 3">

              <div class="portfolio-info mt-3">

                <h5>
                  SWEETRECIPE
                </h5>

                <p>
                  Sistem Informasi Katalog Resep Dessert dan Rekomendasi Dessert Berbasis Website
                </p>

              </div>

            </div>

          </div>

        </div>

      </div>

    </section>

    <!-- CONTACT SECTION -->
    <section id="contact" class="contact section">

      <div class="container section-title" data-aos="fade-up">

        <h2>Contact</h2>

        <p>
          Hubungi saya melalui informasi berikut
        </p>

      </div>

      <div class="container">

        <div class="row justify-content-center">

          <div class="col-lg-8">

            <div class="shadow rounded p-4">

              <div class="mb-3">
                <i class="bi bi-envelope-fill"></i>
                nurulqolbialya@gmail.com
              </div>

              <div class="mb-3">
                <i class="bi bi-telephone-fill"></i>
                083894951894
              </div>

              <div>
                <i class="bi bi-instagram"></i>
                @alyanrlql
              </div>

            </div>

          </div>

        </div>

      </div>

    </section>

  </main>

  <!-- SCROLL TOP -->
  <a href="#"
    id="scroll-top"
    class="scroll-top d-flex align-items-center justify-content-center">

    <i class="bi bi-arrow-up-short"></i>

  </a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/typed.js/typed.umd.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>
