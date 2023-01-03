<?php

  include 'koneksi.php';  

  $peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran 
          WHERE id_pendaftaran = '".$_GET['id']."' ");

  $p = mysqli_fetch_object($peserta);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" initial-scale="1">

  <title>Cetak Bukti Pendaftaran</title>
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
  <script>
    window.print();
  </script>
</head>
<body>
  <section class = "box-formulir">
    <h2 align="center">Bukti Pendaftaran</h2>    
    <hr>
      <table class ="table-data">
        <tr>
          <td>Periode</td>
          <td>:</td>
          <td><?php echo $p->th_ajaran ?></td>
        </tr>
        <tr>
          <td>ID Pendaftaran</td>
          <td>:</td>
          <td><?php echo $p->id_pendaftaran ?></td>
        </tr>
        <tr>
          <td>Tanggal Mendaftar</td>
          <td>:</td>
          <td><?php echo $p->tgl_daftar ?></td>
        </tr>
        <tr>
          <td>Nama Peserta</td>
          <td>:</td>
          <td><?php echo $p->nm_peserta ?></td>
        </tr>
        <tr>
          <td>NRP</td>
          <td>:</td>
          <td><?php echo $p->nrp ?></td>
        </tr>
        <tr>
          <td>Tempat, Tanggal Lahir</td>
          <td>:</td>
          <td><?php echo $p->tmp_lahir. ', ' .$p->tgl_lahir ?></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>:</td>
          <td><?php echo $p->kelamin ?></td>
        </tr>
        <tr>
          <td>No. HP</td>
          <td>:</td>
          <td><?php echo $p->no_hp ?></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>:</td>
          <td><?php echo $p->alamat_peserta ?></td>
        </tr>
        <tr>
          <td>Alasan Mendaftar UKM Ini</td>
          <td>:</td>
          <td><?php echo $p->alasan_daftar ?></td>
        </tr>
      </table>
  </section>


</body>
</html>