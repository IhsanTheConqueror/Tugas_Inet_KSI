<?php

  include 'koneksi.php';  

  if(isset($_POST['submit'])){

    $getMaxId =  mysqli_query($conn, "SELECT MAX(RIGHT(id_pendaftaran, 5)) AS id FROM tb_pendaftaran");
    $d = mysqli_fetch_object($getMaxId);
    $generateId = 'P'.date('Y').sprintf("%05s", $d->id + 1);
    echo $generateId;

    $insert = mysqli_query($conn, "INSERT INTO tb_pendaftaran VALUES (
      '".$generateId."',
      '".date('Y-m-d')."',
      '".$_POST['th_ajaran']."',
      '".$_POST['nm_peserta']."',
      '".$_POST['nrp']."',
      '".$_POST['tmp_lahir']."',
      '".$_POST['tgl_lahir']."',
      '".$_POST['kelamin']."',
      '".$_POST['no_hp']."',
      '".$_POST['alamat_peserta']."',
      '".$_POST['alasan_ikut']."'

   )");

      if($insert){
        echo '<script>window.location="berhasil.php?id='.$generateId.'"</script>';
      }else{
       echo 'huft ' .mysqli_error($conn);
      }

  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" initial-scale="1">

  <title>Form Daftar UKM Online</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:ksisinabjm.site@gmail.com">ksisinabjm.site@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+62 821 5041 0971</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
      </div>
    </div>
  </section>

  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="d-flex justify-content-between align-items-center">
        <h2>Form Daftar KSI-SINA</h2>
      </div>
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.html">Home</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li class="dropdown"><a href="#"><span>More</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#about">About</a></li>
              <li><a href="#Pengertian">Pengertian</a></li>
              <li><a href="#portfolio">Porfolio</a></li>
              <li><a href="#team">Team</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


<!-- Start #main -->
  <main id="main" data-aos="fade-up">

    <section class="inner-page">
      <div class="container">
        <!--    Ini bagian Box nya START    -->
        <section class="box-formulir">
  
          <h2 align="center">Form Pendaftaran Online UKM KSI-SINA</h2>
          <hr color="gol">
          <!--    Ini bagian Form nya START    -->
          <form action="" method="post">

            <div class="box">
              <table border="0" class="table-form">
                <tr>
                  <td>Periode Tahun</td>
                  <td>:</td>
                  <td>
                    <input type="text" name="th_ajaran" class="input-control"
                    value="2023/2024" readonly>
                  </td>
                </tr>
              </table>
            </div>

            <h3>Data Diri Calon Anggota</h3> 

            <div class="box">           
              <table border="0" class="table-form">
                <tr>
                  <td>Nama Lengkap</td>
                  <td>:</td>
                  <td>
                    <input type="text" name="nm_peserta" class="input-control">
                  </td>
                </tr>
                <tr>
                  <td>NRP</td>
                  <td>:</td>
                  <td>
                    <input type="text" name="nrp" class="input-control">
                  </td>
                </tr>
                <tr>
                  <td>Tempat Lahir</td>
                  <td>:</td>
                  <td>
                    <input type="text" name="tmp_lahir" class="input-control">
                  </td>
                </tr>
                <tr>
                  <td>Tanggal Lahir</td>
                  <td>:</td>
                  <td>
                    <input type="date" name="tgl_lahir" class="input-control">
                  </td>
                </tr>
                <tr>
                  <td>Jenis Kelamin</td>
                  <td>:</td>
                  <td>
                    <select name="kelamin">
                      <option value="Laki-laki">Laki-laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                </tr>
                <tr>
                  <td>No. Hp</td>
                  <td>:</td>
                  <td>
                    <input type="text" name="no_hp" class="input-control">
                  </td>
                </tr>
                <tr>
                  <td>Alamat Peserta</td>
                  <td>:</td>
                  <td>
                    <textarea class="input-control" name="alamat_peserta" id="" cols="30" rows="3"></textarea>
                  </td>
                </tr>
                <tr>
                  <td>Alasan Ikut UKM Ini</td>
                  <td>:</td>
                  <td>
                    <textarea class="input-control" name="alasan_ikut" id="" cols="30" rows="3"></textarea>
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td>
                    <button type="submit" class="btn btn-primary btn-block" name="submit">Daftar</button>
                    <div class="form-footer mt-2">
                      <p> Sudah punya account? <a href="#">Login</a></p>
                    </div>
                  </td>
                </tr>
              </table>

            </div>

          </form>
          <!--    Ini bagian Form nya END    -->
        </section>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>BizLand<span>.</span></h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span><a href="#https://bootstrapmade.com/">BootstrapMade</a></span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        Edited by Nahdatul Ihsan Hidayatullah
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


</body>

</html>