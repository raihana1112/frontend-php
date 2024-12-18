<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Facility Care</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="#" class="logo d-flex align-items-center me-auto">
        <img src="assets/img/logo_dishub_aceh.png" alt="">
        <h1 class="sitename">Facility Care</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php#hero" class="active">Home</a></li>
          <li><a href="index.php#featured-services">Service</a></li>
          <li><a href="pencarian.php">Cek Status Pengaduan</a></li>
          
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="hero-bg">
        <img src="assets/img/hero-bg-light.webp" alt="">
      </div>
      <div class="container text-center">
        <div class="d-flex flex-column justify-content-center align-items-center">
          <h1 data-aos="fade-up"> Website Pengaduan Kerusakan Fasilitas
          <br> <span>Dinas Perhubungan</span>
          </h1>
          <p data-aos="fade-up" data-aos-delay="100">Ayo Bantu Laporkan kerusakan fasilitas yang kamu lihat!<br></p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#laporan" class="btn-get-started">Form Pengaduan</a>
          
          </div>
          <img src="assets/img/hero-services-img.webp" class="img-fluid hero-img" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section light-background">

      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Aksesibiltas Lebih Mudah</a></h4>
                <p class="description">Masyarakat dapat mengakses layanan kapan saja dan dari mana saja selama memiliki akses internet</p>
              </div>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Pelacakan Pengaduan</a></h4>
                <p class="description">Laporan kerusakan yang diunggah melalui website bisa dilacak statusnya dengan lebih mudah</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Analisis Data untuk Perbaikan</a></h4>
                <p class="description">Data dari pengaduan yang terkumpul bisa dianalisis untuk memahami pola kerusakan yang sering terjadi</p>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Featured Services Section -->

    <!-- Contact Section -->
    <section id="laporan" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Form Pengaduan</h2>
        <p>" Bersama Menjaga Fasilitas, Demi Kenyamanan Bersama "</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">

          <div class="col-lg-6 offset-lg-3" style="margin-top: 0px;">
            <form action="add-laporan.php" method="post" enctype="multipart/form-data" class="php-email-form" data-aos="fade-up" data-aos-delay="400">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="nama" class="form-control" id="warna" placeholder="Nama Anda" required="">
                </div>

                <div class="col-md-6">
                  <select name="fasilitas" id="warna-pilihan" class="form-select" required="">
                    <option selected>Pilihan Jenis Fasilitas</option>
                    <option value="Pelabuhan">Pelabuhan</option>
                    <option value="Terminal">Terminal Tipe B</option>
                    <option value="Trans Koetaradja">Trans Koetaradja</option>

                  </select>

                </div>

                <div class="col-md-12">
                  <select name="pilihan_tempat" id="warna-pilihan" class="form-select">
                    <optgroup label="Pelabuhan">
                      <option selected>Pilihan Tempat</option>
                      <option value="Ulee Lheue">Ulee Lheue</option>
                      <option value="Balohan">Balohan</option>
                      <option value="Lamteng">Lamteng</option>
                      <option value="Sinabang">Sinabang</option>
                      <option value="Meulaboh">Meulaboh</option>
                      <option value="Pulau Banyak">Pulau Banyak</option>
                    </optgroup>
                    <optgroup label="Terminal Tipe B">
                      <option value="Sigli">Sigli</option>
                      <option value="Pidie Jaya">Pidie Jaya</option>
                      <option value="Bener Meriah">Bener Meriah</option>
                      <option value="Calang">Calang</option>
                      <option value="Aceh Tamiang">Aceh Tamiang</option>
                      <option value="Singkil">Singkil</option>
                      <option value="Aceh Barat Daya">Aceh Barat Daya</option>
                      <option value="Aceh Selatan">Aceh Selatan</option>
                    </optgroup>
                    <optgroup label="Trans Koetaradja">
                      <option value="Darussalam">Darussalam</option>
                      <option value="Blang Bintang">Blang Bintang</option>
                      <option value="Ulee Lheue">Ulee Lheue</option>
                      <option value="Setui - Mata Ie">Setui - Mata ie</option>
                      <option value="Lhong Raya - Mata Ie">Lhong Raya - Mata Ie</option>
                      <option value="Ulee Kareng - Blang Bintang">Ulee Kareng - Blang Bintang</option>
  
                    </optgroup>
                    

                  </select>
                </div>
              
                <div class="col-md-12">
                  <input type="text" name="fasilitas_rusak" class="form-control" id="warna" placeholder="Tuliskan Fasilitas Yang Rusak" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" name="alamat" class="form-control" id="warna" placeholder="Detail Alamat" required="">
                </div>

                <div class="col-md-12">
                  <label class="form-label" id="label-upload">Upload Foto</label>
                  <input class="form-control" type="file" id="formFileMultiple" name="file" required>
                </div>
                <div class="col-md-12">
                  <textarea class="form-control" id="warna" name="keterangan" rows="6" placeholder="Keterangan Kerusakan" required></textarea>
                </div>
                <div class="col-md-12">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="flexCheckChecked" required>
                  <label class="form-check-label" for="flexCheckChecked" id="label-check">
                    Centang jika data yang anda berikan sudah lengkap
                  </label>
                </div>
              </div>

                <div class="col-md-12 text-center">

                  <button type="submit">Laporkan</button>
                </div>
                <div class="error-message"></div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer position-relative" class="footer-bg">

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Dishub</strong><span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        <a href="https://dishub.acehprov.go.id/">https://dishub.acehprov.go.id/</a> 
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>