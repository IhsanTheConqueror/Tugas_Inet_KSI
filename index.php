<?php
    include 'koneksi.php';
    $anggota = mysqli_query($conn, "SELECT * FROM tb_altif");
    $jadwal = mysqli_query($conn, "SELECT * FROM tb_kegiatan");
?>
<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Blog Pendaftaran UKM KSI-SINA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">

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

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo"><img src="assets/img/logo.png" alt=""></a>
      <h1 class="logo"><p>KSI-SINA<span class="warnatitik">.</span></p></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a href="login.php">Mode : Admin</a></li>
          <li class="dropdown"><a href="#"><span>Go To</span> <i class="bi bi-chevron-down"></i></a>
            <ul class="nav-link scrollto" >
              <li><a href="#Pengertian">What is this ?</a></li>
              <li><a href="#portfolio">Porfolio</a></li>
              <li><a href="#team">Team</a></li>
              <li><a href="#contact">Contact</a></li>
              <li><a href="#footer">Sign Up</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Welcome to </h1>
      <h1><span>Website</span> KSI-SINA</h1>
      <h2>Kelompok Studi Islam STMIK Indonesia Banjarmasin</h2>
      <div class="d-flex">
        <a href="#Pengertian" class="btn-get-started scrollto">Get Started</a>
      </div>
    </div>
  </section>
  <!--====== End Hero ========-->

  <main id="main">

    <!-- ======= Pengertian Section ======= -->
    <section id="Pengertian" class="Pengertian">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Apa itu KSI-SINA ?</h2>
          <p>KSI-SINA adalah UKM yang bergerak di sektor islamiyah seperti dakwah dan seni keterampilan serta sosial masyarakat sejak diresmikan dari KSI AMIK (22 September 2002) menjadi KSI-SINA pada 7 November 2002.</p>
        </div>
        <hr>
        <br>

        <!--====== Sagan Meandak Nama Kegiatannya+icon box =====-->

        <div class="section-title">
          <h2>What Do We Get ?</h2>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-heart-pulse-fill"></i></div>
              <h4><a href="">Iman</a></h4>
              <p>UKM ini bergerak dibidang agama yang mana sebagai pondasi UKM kita sebagai KSI-SINA</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
            <div class="icon"><i class="bi bi-book-half"></i></div>
              <h4><a href="">Ilmu yang Insya Allah bermanfaat</a></h4>
              <p>Karena UKM ini juga bergerak dibidang ilmu pengetahuan, sudah pasti akan menambah ilmu pengetahuan</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-person-circle"></i></div>
              <h4><a href="">Koneksi yang Bermanfaat</a></h4>
              <p>secara garis besar, KSI-SINA hanyalah 1 dari sekian banyak UKM Kampus yang berbasis agama islam yang ada dibanjar. 
                Sehingga semua UKM tersebut dikumpulkan dalam 1 forum bernama "FSLDK"</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-people-fill"></i></div>
              <h4><a href="">Teman Baru</a></h4>
              <p>Semakin banyak teman baru, maka semakin banyak silaturrahmi yang terjalin</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-clipboard-heart-fill"></i></div>
              <h4><a href="">Kegiatan yang Bermanfaat</a></h4>
              <p>Dan utamanya, kami melakukan kegiatan rutin tahunan seperti Sahur on the Road, Buka bersama, Study Tour, dll. untuk kegiatan kemahasiswaan, saat ini kami hanya bergerak dibidang maulid habsyi dan tahsin al-qur'an saja.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-cup-hot"></i></div>
              <h4><a href="">Kumpul-kumpul Bareng</a></h4>
              <p>untuk sharing dan saling berbagi cerita dan pengalaman disaat waktu luang yang bersifat santai</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pengertian Section -->

    <section id="Pengertian" class="Pengertian">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Our's Activities ?</h2>
          <hr>
          <div class="box">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nama Kegiatan</th>
                        <th>Tanggal Kegiatan</th>
                        <th>Keterangan / Detail Kegiatan</th>

                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_object($jadwal)): ?>
                    <tr>
                        <td><?= $row->nama_kegiatan ?></td>
                        <td><?= $row->tgl ?></td>
                        <td><?= $row->ket ?></td>
                    </tr>
                    <?php endwhile ?>
                </tbody>
            </table>
        </div>  
        </div>

    <!-- ======= Portfolio Section ======= -->
    <!--== Foto kegiatannya ==-->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>FOTO KEGIATAN</h2>
          <p>Berikut beberapa kegiatan dan Kenang-kenangan yang telah kami abadikan dalam bentuk foto.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Ikhwan</li>
              <li data-filter=".filter-card">Akhwat</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/IMG20191006141710.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Studi Tour</h4>
              <p>KSI-SINA 2019</p>
              <a href="assets/img/portfolio/IMG20191006141710.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="#l" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/IMG20220924154037.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>PKKMB</h4>
              <p>KSI-SINA 2022</p>
              <a href="assets/img/portfolio/IMG20220924154037.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="#l" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/20221105_113639.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Study Tour Akhwat</h4>
              <p>KSI-SINA 2022</p>
              <a href="assets/img/portfolio/20221105_113639.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="#l" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/IMG20200315104636.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Foto Bersama Para Ikhwan</h4>
              <p>KSI-SINA 2020</p>
              <a href="assets/img/portfolio/IMG20200315104636.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="#l" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/IMG20191004163744.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Ahlan Wasahlan Akhwat</h4>
              <p>KSI-SINA 2019</p>
              <a href="assets/img/portfolio/IMG20191004163744.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="#l" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/WhatsApp Image 2022-10-06 at 13.11.54.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Rapat Pra-Ahlan Wasahlan 2022</h4>
              <p>KSI-SINA 2022</p>
              <a href="assets/img/WhatsApp Image 2022-10-06 at 13.11.54.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="#l" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <!-- ======= Pejabatnya ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <h3>Para Petinggi <span>KSI-SINA</span> 2022/2023</h3>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Nahdatul Ihsan Hidayatullah</h4>
                <span>President of KSI-SINA</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Muhammad Najmi</h4>
                <span>Vice President of KSI-SINA</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" height="100px" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Nadia Azizah S.</h4>
                <span>Financial Accountant</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Saufi</h4>
                <span>Secretary</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ALUMNI and AKTIF STRART -->
    <section id="daftar" class="daftar section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h3>Para <span>Anggota dan Alumni</span> yang Kami Banggakan</h3>
          <p>tidak lupa pula pada para anggota kami yang masih aktif ,,, atau bahkan yang sudah jadi alumni,,, </p>
        </div>
        <div class="row">
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
                      </tr>
                      <?php endwhile ?>
                  </tbody>
              </table>
          </div>     
        <!--    Ini bagian Form nya END    -->
        </div>

      </div>
    </section>
    <!-- ALUMNI and AKTIF END -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <h3><span>Hubungi</span> Kami</h3>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>A108 Adam Street, New York, NY 535022</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>contact@example.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+1 5589 55488 55</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15932.777554802047!2d114.6089388!3d-3.3020154!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc87afe8dc44cafa3!2sSTMIK%20Indonesia%20banjarmasin!5e0!3m2!1sid!2sid!4v1673358422082!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <!-- ===== Link Pendaftaran ====== -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>TUNGGU APA LAGI ?</h4>
            <p>Segera Daftarkan Diri Anda!</p>
            <a href="daftar.php" class="btn btn-primary">DAFTAR</a>
          </div>
        </div>
      </div>
    </div>

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