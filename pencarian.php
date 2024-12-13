


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

<body class="starter-page-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.php" class="logo d-flex align-items-center me-auto">
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

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Status Pengaduan</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">Status Pengaduan</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Cek Status Pengaduan Anda</h2>
        <p>Anda sudah pernah melapor? Gunakan Nama Anda untuk melakukan pengecekan melalui kolom pencarian!</p>
      </div><!-- End Section Title -->


        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row gy-4">
  
            <div class="col-lg-6 offset-lg-3">
              <form action="pencarian.php" method="get" class="php-email-form-1" data-aos="fade-up" data-aos-delay="400">
                <div class="row gy-4">
  
                  <div class="col-md-12">
                    <input type="text" name="cari" class="form-control" id="warna" placeholder="Ketik Nama Anda...." required="" value="<?= $_GET['cari'] ?? '' ?>">
                  </div>
  
                  <div class="col-md-12 text-center">
                    <button type="submit" id="btn-cari">Cek Status Laporan</button>
                  </div>  
                </div>
              </form>
            </div><!-- End Contact Form --> 

          </div>

          <div class="row-gy-4">

          
        <?php 
        include 'koneksi.php';

if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
  // echo "<script>console.log('". $_GET['cari']."')</script>";
}
?>

<table class="table-primary table-striped table-hover">
	<tr>
		<th>No</th>
		<th>Nama</th>
    <th>Tanggal Lapor</th>
    <th>Fasilitas</th>
    <th>Pilihan Tempat</th>
    <th>Fasilitas yang Rusak</th>
    <th>Alamat Tempat</th>
    <th>Foto</th>
    <th>Keterangan</th>
    <th>Status Laporan</th>
	</tr>
	<?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysqli_query($conn, "select * from laporan where nama like '%".$cari."%'");				
	}else{
		$data = mysqli_query($conn,"select * from laporan");		
	}
	$no = 1;
	while($d = mysqli_fetch_array($data)){
	?>
	<tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $d['nama']; ?></td>
      <td><?php echo $d['tgl_lapor']; ?></td>
      <td><?php echo $d['fasilitas']; ?></td>
      <td><?php echo $d['pilihan_tempat']; ?></td>
      <td><?php echo $d['fasilitas_rusak']; ?></td>
      <td><?php echo $d['alamat']; ?></td>
      <td><img src="file/<?= $d['foto'] ?>" alt="" class="" style="width: 300px;"></td>
      <td><?php echo $d['keterangan']; ?></td>
      <td><?php echo $d['status_laporan']; ?></td>
	</tr>
	<?php } ?>

          </div>
    
        </div>



    </section><!-- /Starter Section Section -->

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