<?php
    session_start();
    include 'koneksi.php';  
    if($_SESSION['stat_login'] != true){
      echo '<script>window.location="admin.php"</script>';
    }

    $nama_kegiatan = "";
    $tgl = "";
    $ket = "";

    if(isset($_GET["edit-id"])){
      $jadwal_id = mysqli_query($conn, "SELECT * FROM tb_kegiatan WHERE id = " . $_GET["edit-id"]);
      $a = mysqli_fetch_object($jadwal_id);
      $nama_kegiatan = $a->nama_kegiatan;
      $tgl = $a->tgl;
      $ket = $a->ket;
    }
 
    if(isset($_POST['submit'])){
      $insert = mysqli_query($conn, "INSERT INTO tb_kegiatan VALUES (
        '".$_POST['id']."',
        '".$_POST['nama_kegiatan']."',
        '".$_POST['tgl']."',
        '".$_POST['ket']."'
     )");
  
     if($insert){
        echo '<script>window.location="jadwal.php"</script>';
      }else{
      echo 'Error ' .mysqli_error($conn);
      }

    }else if(isset($_POST['edit'])){
      $id = $_POST['id'];
      $nama_kegiatan = $_POST['nama_kegiatan'];
      $tgl = $_POST['tgl'];
      $ket = $_POST['ket'];

      $edit = mysqli_query($conn, "UPDATE tb_kegiatan SET nama_kegiatan = '$nama_kegiatan',
       tgl = '$tgl', ket = '$ket' WHERE id = $id");

      if($edit){
        echo '<script>window.location="jadwal.php"</script>';
      }else{
      echo 'Error ' .mysqli_error($conn);
      }
    }

    $jadwal = mysqli_query($conn, "SELECT * FROM tb_kegiatan");
    
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" initial-scale="1">

  <title>Mode : Admin - Jadwal Kegiatan UKM</title>
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
        <h2>Form Jadwal Kegiatan UKM</h2>
      </div>
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="admin.php">Beranda</a></li>          
          <li class="dropdown"><a href="#" class="nav-link scrollto active"><span>Data</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="data-peserta.php">Peserta</a></li>
                <li><a href="data-anggota.php">Anggota</a></li>
                <li><a href="jadwal.php">Jadwal Kegiatan</a></li>
            </ul>
          </li>
          <li><a href="keluar.php" class="nav-link scrollto">Keluar</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


<!-- Start #main -->
  <main id="main" data-aos="fade-up">

    <section class="inner-page">
      <div class="container">
      <section class="box-formulir">

        <h2 align="center">Form Input Jadwal Kegiatan UKM KSI-SINA</h2>
        <hr color="gol">
        <!--    Ini bagian Form nya START    -->
        <form action="" method="post">
        <div class="box">           
            <table border="0" class="table-form">
              <tr>
                <td>Nama Kegiatan</td>
                <td>:</td>
                <td>
                  <input type="text" name="nama_kegiatan" class="input-control" value="<?=$nama_kegiatan?>">
                </td>
              </tr>
              <tr>
                <td>Akan Dilaksanakan pada</td>
                <td>:</td>
                <td>
                  <input type="date" name="tgl" class="input-control" value="<?=$tgl?>">
                </td>
              </tr>
              <tr>
                <td>Keterangan / Detail Kegiatan</td>
                <td>:</td>
                <td>
                  <input type="text" name="ket" class="input-control" value="<?=$ket?>">
                </td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td>
                  <input type="hidden" name="id" value="<?=$_GET["edit-id"] ?? ""?>">
                  <button type="submit" class="btn btn-dark btn-block" name="<?=isset($_GET["edit-id"]) ? "edit" : "submit"?>">Tambahkan / Simpan</button>
                </td>
              </tr>
            </table>
          </div>
        </form>
      </section>
        <!--    Ini bagian Form nya END    -->
      
      
  </hr>
  </br>
      
      <!--    Ini bagian Box nya START    -->
        <h2>JADWAL KEGIATAN UKM KSI-SINA</h2>
        <div class="box">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nama Kegiatan</th>
                        <th>Tanggal Kegiatan</th>
                        <th>Keterangan / Detail Kegiatan</th>
                        <th>ACTION</th>

                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_object($jadwal)): ?>
                    <tr>
                        <td><?= $row->nama_kegiatan ?></td>
                        <td><?= $row->tgl ?></td>
                        <td><?= $row->ket ?></td>
                        <td>
                            <a href="jadwal.php?edit-id=<?php echo $row->id ?>" class="btn btn-success">EDIT</a> || 
                            <a href="hapus-jadwal.php?id=<?php echo $row->id ?>" class="btn btn-danger" onclick="return confirm('YAKIN ?')">Hapus</a>
                        </td>
                    </tr>
                    <?php endwhile ?>
                </tbody>
            </table>
        </div>     
      <!--    Ini bagian Form nya END    -->
    </section>

  </div>
</section>

</main><!-- End #main -->

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

  <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>KSI-SINA<span>.</span></h3>
            <p>
              Jl. Pangeran Hidayatullah, Sungai Jingah,<br>
              Kec. Banjarmasin Utara, Kota Banjarmasin, <br>
              Kalimantan Selatan 70122 <br><br>
              <strong>Phone:</strong> +62 821 5041 0971<br>
              <strong>Email:</strong> ksisinabjm.site@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Jangan lupa</h4>
            <p>Cek Social Media Kami Di :</p>
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