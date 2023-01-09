<?php
    session_start();
    include 'koneksi.php';  
    
     // ini yang dipecah dulu
     $host   = "localhost";      // ini url database
     $user   = "root";           // ini user database
     $pass   = "";               // ini pass database
     $db     = "ukm";   // ini nama databasenya
 
     $koneksi = new mysqli($host, $user, $pass, $db); // ini perintah bikin koneksinya
     // $conn = mysqli_connect($host, $user, $pass, $dbname); // ini perintah bikin koneksinya
    
     if(!$koneksi){
         die("Tidak bisa terkoneksi ke database");
     }

    if($_SESSION['stat_login'] != true){
      echo '<script>window.location="data-anggota.php"</script>';
    }
    
    $nrp          = "";
    $nama         = "";
    $tgl_lahir    = "";
    $angkatan     = "";
    $jekel        = "";
    $jabatan      = "";
    $status       = ""; 
    $sukses       = "";
    $error        = "";

    if(isset($_POST['simpan'])){
        $nrp          = $_POST['nrp'];
        $nama         = $_POST['nama'];
        $tgl_lahir    = $_POST['tgl_lahir'];
        $angkatan     = $_POST['angkatan'];
        $jekel        = $_POST['jekel'];
        $jabatan      = $_POST['jabatan'];
        $status       = $_POST['status'];
        
        if($nrp && $nama && $tgl_lahir && $angkatan && $jekel & $jabatan && $status){
          $sql1 = "INSERT into tb_altif (nrp, nama, tgl_lahir, angkatan, jekel, jabatan, status) 
                VALUES ('$nrp', '$nama', '$tgl_lahir', '$angkatan', '$jekel', '$jabatan', '$status')";
          $q1   = mysqli_query($koneksi, $sql1);
          if($q1){
            $sukses     = "Berhasil Memasukkan Data";
          }else{
            $error      = "Gagal Memasukkan Data";
          }

        }else{
          $error = "Silakan Isi Semua Data";
        }

    }

  $anggota = mysqli_query($conn, "SELECT * FROM tb_altif");
    
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" initial-scale="1">

  <title>Mode : Admin - Data Anggota</title>
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
        <h2>Form Data Anggota</h2>
      </div>
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="admin.php">Beranda</a></li>          
          <li class="dropdown"><a href="#" class="nav-link scrollto active"><span>Data</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="data-peserta.php">Peserta</a></li>
                <li><a href="data-anggota.php">Anggota</a></li>
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
  <h2>INPUT / EDIT DATA ANGGOTA</h2>
  <?php 
      if($error){
    ?>
      <div class="alert alert-danger" role="alert">
        <?php echo $error ?>
      </div>
    <?php
      }
    ?>
    <?php 
      if($sukses){
    ?>
        <div class="alert alert-success" role="alert">
          <?php echo $sukses ?>
        </div>
    <?php
      }
    ?>
    <div class="box">
    <form action="" method="POST">
      <div class="form-group row">
        <label for="nrp" class="col-sm-2 col-form-label">NRP</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="nrp" id="nrp" value="<?php echo $nrp ?>">
        </div>
      </div>
      <div class="form-group row">
          <label for="nama" class="col-sm-2 col-form-label">NAMA</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $nama ?>">
        </div>
      </div>
      <div class="form-group row">
          <label for="tgl_lahir" class="col-sm-2 col-form-label">tgl_lahir</label>
        <div class="col-sm-10">
          <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" value="<?php echo $tgl_lahir ?>">
        </div>
      </div>
      <div class="form-group row">
          <label for="angkatan" class="col-sm-2 col-form-label">angkatan</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="angkatan" id="angkatan" value="<?php echo $angkatan ?>">
        </div>
      </div>
      <div class="form-group row">
          <label for="jekel" class="col-sm-2 col-form-label">jekel</label>
        <div class="col-sm-10">
          <select class="form-control" id="jekel">
            <option value="">--- Pilih Jenis Kelamin ---</option>
            <option value="Laki-laki" <?php if($jekel == "Laki-laki") echo "selected" ?>>--- Laki-laki ---</option>
            <option value="Perempuan" <?php if($jekel == "Perempuan") echo "selected" ?>>--- Perempuan ---</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
          <label for="jabatan" class="col-sm-2 col-form-label">jabatan</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="jabatan" id="jabatan" value="<?php echo $nrp ?>">
        </div>
      </div>
      <div class="form-group row">
          <label for="status" class="col-sm-2 col-form-label">status</label>
        <div class="col-sm-10">
          <select class="form-control" name="status" id="status">
            <option value="">--- Status Keanggotaan ---</option>
            <option value="Aktif" <?php if($status == "Aktif") echo "selected" ?>>--- Aktif ---</option>
            <option value="Alumni" <?php if($status == "Alumni") echo "selected" ?>>--- Alumni ---</option>
          </select>
        </div>
      </div>
    </form>
  
      <div class="col-12">
         <input type="submit" name="simpan" value="Tambahkan ke List" class="btn btn-dark">
      </div>
    </div>
  


  </br>
  </br>
    

      <h2>DATA ANGGOTA AKTIF/ALUMNI</h2>
        <div class="box">
            <table class="table">
                <thead>
                    <tr>
                        <th>NRP</th>
                        <th>Nama Anggota</th>
                        <th>Tanggal Lahir</th>
                        <th>Angkatan</th>
                        <th>Kelamin</th>
                        <th>Jabatan</th>
                        <th>Status Keanggotaan</th>
                        <th>ACTION</th>

                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_object($anggota)): ?>
                    <tr>
                        <td><?= $row->nrp ?></td>
                        <td><?= $row->nama ?></td>
                        <td><?= $row->tgl_lahir ?></td>
                        <td><?= $row->angkatan ?></td>
                        <td><?= $row->jekel ?></td>
                        <td><?= $row->jabatan ?></td>
                        <td><?= $row->status ?></td>
                        <td>
                            <a href="detail-peserta.php?id=<?php echo $row->id_pendaftaran ?>">Edit</a> || 
                            <a href="hapus-peserta.php?id=<?php echo $row->id_pendaftaran ?>" onclick="return confirm('YAKIN ?')">Hapus</a>
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