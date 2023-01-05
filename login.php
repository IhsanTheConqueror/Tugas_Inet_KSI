<?php
  session_start();
  include 'koneksi.php';    

  if(isset($_POST['login'])){
    // cek dlu akunnya ada atw kdd di phpmyadmin
    $cek = mysqli_query($conn, "SELECT * FROM tb_admin WHERE username = '". htmlspecialchars($_POST['user']) ."'  
    AND password = '". MD5(htmlspecialchars ($_POST['pass'])) ."' ");

    if(mysqli_num_rows($cek) > 0 ){
      $a = mysqli_fetch_object($cek);

      $_SESSION['stat_login'] = true;
      $_SESSION['id'] = $a->id_admin;
      $_SESSION['nama'] = $a->nm_admin;
        echo '<script>window.location="admin.php"</script>';
    }else{
        echo '<script>alert("Gagal (password atw usernamenya salah)")</script>';
    }

  }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" initial-scale="1">

    <title>Login Mode : Admin</title>
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
    
  <!--    BAGIAN AWAL/ MAIN LOGIN    -->
      <section class="vh-100 gradient-custom" method="">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">

                  <div class="mb-md-5 mt-md-4 pb-5">

                    <h2 class="fw-bold mb-2 text-uppercase">MODE : ADMIN </h2>

                   <form action="" method="post">
                        <div class="form-outline form-white mb-4">
                            <label class="form-label">ID ADMIN</label>
                            <input type="text" name="user"class="form-control form-control-lg" />
                            
                          </div>

                          <div class="form-outline form-white mb-4">
                            <label class="form-label">PASSWORD</label>
                            <input type="password" name="pass" class="form-control form-control-lg" />
                            
                          </div>

                          <button name="login" class="btn btn-outline-light btn-lg px-5" type="submit">LOGIN PAK</button>
                        </div>
                   </form>

                  <div>
                    <p class="mb-0">Bukan Admin? Pasti anda Anggota Baru.....</p>
                    <p> <a href="daftar.php" class="text-white-50 fw-bold" >Klik Disini untuk Daftar</a> </p>
                    <p class="mb-0">Atau </p>
                    <p> <a href="index.html" class="text-white-50 fw-bold" >Kembali ke Home</a> </p>
                  </div>
                  

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
  </body>
</html>