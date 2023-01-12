<?php
    session_start();
    include 'koneksi.php';  
    if($_SESSION['stat_login'] != true){
      echo '<script>window.location="admin.php"</script>';
    }

    $nrp = "";
    $nama = "";
    $tgllhr = "";
    $angkatan = "";
    $kelamin = "";
    $jabatan = "";
    $status = "";
    if(isset($_GET["edit-id"])){
      $anggota_id = mysqli_query($conn, "SELECT * FROM tb_altif WHERE id = " . $_GET["edit-id"]);
      $a = mysqli_fetch_object($anggota_id);
      $nrp = $a->nrp;
      $nama = $a->nama;
      $tgllhr = $a->tgl_lahir;
      $angkatan = $a->angkatan;
      $kelamin = $a->jekel;
      $jabatan = $a->jabatan;
      $status = $a->status;
    }
 
    if(isset($_POST['submit'])){
      $insert = mysqli_query($conn, "INSERT INTO tb_altif VALUES (
        '".$_POST['id']."',
        '".$_POST['nrp']."',
        '".$_POST['nama']."',
        '".$_POST['tgl_lahir']."',
        '".$_POST['angkatan']."',
        '".$_POST['jekel']."',
        '".$_POST['jabatan']."',
        '".$_POST['status']."'
     )");
  
     if($insert){
        echo '<script>window.location="data-anggota.php"</script>';
      }else{
      echo 'Error ' .mysqli_error($conn);
      }

    }else if(isset($_POST['edit'])){
      $id = $_POST['id'];
      $nrp = $_POST['nrp'];
      $nama = $_POST['nama'];
      $tgl_lahir = $_POST['tgl_lahir'];
      $angkatan = $_POST['angkatan'];
      $jekel = $_POST['jekel'];
      $jabatan = $_POST['jabatan'];
      $status = $_POST['status'];

      $edit = mysqli_query($conn, "UPDATE tb_altif SET nrp = '$nrp', nama = '$nama',
       tgl_lahir = '$tgl_lahir', angkatan = '$angkatan', jekel = '$jekel', jabatan = '$jabatan', 
       status = '$status' WHERE id = $id");

      if($edit){
        echo '<script>window.location="data-anggota.php"</script>';
      }else{
      echo 'Error ' .mysqli_error($conn);
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

        <h2 align="center">Form Data Anggota UKM KSI-SINA</h2>
        <hr color="gol">
        <!--    Ini bagian Form nya START    -->
        <form action="" method="post">

          <h6>Isikan sesuai fakta dengan jujur ya mimin....</h6> 

          <div class="box">           
            <table border="0" class="table-form">
                <tr>
                  <td>NRP</td>
                  <td>:</td>
                <td>
                  <input type="text" name="nrp" class="input-control" value="<?=$nrp?>">
                </td>
              </tr>
              <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td>
                  <input type="text" name="nama" class="input-control" value="<?=$nama?>">
                </td>
              </tr>
              <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td>
                  <input type="date" name="tgl_lahir" class="input-control" value="<?=$tgllhr?>">
                </td>
              </tr>
              <tr>
                <td>Angkatan</td>
                <td>:</td>
                <td>
                  <input type="text" name="angkatan" class="input-control" value="<?=$angkatan?>">
                </td>
              </tr>
              <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                  <select name="jekel">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
              </tr>
              <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td>
                  <input type="text" name="jabatan" class="input-control" value="<?=$jabatan?>">
                </td>
              </tr>
              <tr>
                <td>Status Keanggotan</td>
                <td>:</td>
                <td>
                  <select name="status">
                    <option value="Aktif">Aktif</option>
                    <option value="Alumni">Alumni</option>
                  </select>
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
                            <a href="data-anggota.php?edit-id=<?php echo $row->id ?>" class="btn btn-success">EDIT</a> || 
                            <a href="hapus-anggota.php?id=<?php echo $row->id ?>" class="btn btn-danger" onclick="return confirm('YAKIN ?')">Hapus</a>
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