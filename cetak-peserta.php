<?php

  include 'koneksi.php';  

  $peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" initial-scale="1">

  <title>Cetak Data Peserta</title>
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
    <h2 align="center">LAPORAN DATA PESERTA</h2>    
    <hr>
    <table class="table">
                    <thead>
                        <tr>
                            <th>Tanggal Masuk</th>
                            <th>ID Pendaftaran</th>
                            <th>Nama Peserta</th>
                            <th>NRP</th>
                            <th>Kelamin</th>
                            <th>Alamat</th>
                            <th>Alasan Daftar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = mysqli_fetch_object($peserta)): ?>
                        <tr>
                            <td><?= $row->tgl_daftar ?></td>
                            <td><?= $row->id_pendaftaran ?></td>
                            <td><?= $row->nm_peserta ?></td>
                            <td><?= $row->nrp ?></td>
                            <td><?= $row->kelamin ?></td>
                            <td><?= $row->alamat_peserta ?></td>
                            <td><?= $row->alasan_daftar ?></td>
                        </tr>
                        <?php endwhile ?>
                    </tbody>
                </table>  
</body>
</html>