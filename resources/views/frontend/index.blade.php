
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Beranda - APeK Online</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="frontend/assets/img/favicon.png" rel="icon">
  <link href="frontend/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="frontend/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="frontend/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="frontend/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="frontend/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="frontend/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="frontend/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: eNno - v2.2.1
  * Template URL: https://bootstrapmade.com/enno-free-simple-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="{{ url('/') }}">APeK Online</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      {{-- <!-- <a href="{{ url('/') }}" class="logo mr-auto"><img src="frontend/assets/img/logo.png" alt="" class="img-fluid"></a>--> --}}

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#hero">Beranda</a></li>
          <li><a href="#about">Tutorial</a></li>
          <li><a href="#contact">Kontak</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <a href="#about" class="get-started-btn scrollto">Login</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>APeK Online</h1>
          <h2>Aplikasi Pengumuman Kelulusan Online</h2>
          <div class="d-flex">
            <a href="#about" class="btn-get-started scrollto">Tutorial</a>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Video Tutorial <i class="icofont-play-alt-2"></i></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <div class="text-center">
            <img src="frontend/assets/img/hero.svg" class="img-fluid animated" width="380px" alt="">
          </div>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="icofont-computer"></i></div>
              <h4 class="title"><a href="">Akses Mudah</a></h4>
              <p class="description">APeK Online dapat diakses kapan pun dan dimana pun selama memiliki koneksi internet</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="icofont-heart"></i></div>
              <h4 class="title"><a href="">Mudah Digunakan</a></h4>
              <p class="description">Untuk memeriksa kelulusan, Anda cukup memasukkan NIS dan tanggal lahir.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="icofont-download"></i></div>
              <h4 class="title"><a href="">Download Ijazah Cepat</a></h4>
              <p class="description">Untuk mendownload Ijazah atau Surat Keterangan Lulus cukup sekali klik.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="frontend/assets/img/tutorial.svg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3>Bagiamana Cara Menggunakan APeK Online?</h3>
            <p>
              Sebelum memeriksa kelulusan, Anda harus menyiapkan NIS dan Tanggal Lahir anda. Silakan baca tutorial di bawah:
            </p>
            <ul>
              <li><strong>1.</strong> Siapkan NIS dan Tanggal Lahir. </li>
              <li><strong>2.</strong> Lalu buka link ini: <a href="#cta" class="scrollto">Cek Kelulusan</a></li>
              <li><strong>3.</strong> Apabila website sudah terbuka silakan masukkan NIS dan Tanggal Lahir kemudian klik tombol " Periksa "</li>
              <li><strong>4.</strong> Setelah berhasil memasukkan NIS dan Tanggal Lahir maka akan otomatis redirect ke pengumuman kelulusan. </li>
              <li><strong>5.</strong> Untuk mendownload Ijazah / Surat Keterangan Lulus cukup klik tombol " Download Ijazah " </li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <!-- <section id="counts" class="counts">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">232</span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">521</span>
            <p>Projects</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1,463</span>
            <p>Hours Of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">15</span>
            <p>Hard Workers</p>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Counts Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta mt-3">
      <div class="container">

        <div class="text-center">
          <h3>Ayo Cek Kelulusan</h3>
          <p>Silakan klik tombol dibawah untuk memeriksa kelulusan anda. Semoga beruntung!</p>
          <a class="cta-btn" href="inner-page.html">Periksa</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <span>Kontak</span>
          <h2>Kontak</h2>
          <p>Apabila ada kendala silakan sampaikan melalui formulir di bawah:</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Alamat</h4>
                <p>127.0.0.1:8000</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email</h4>
                <p><a href="mailto:muhammadgus.2020@student.uny.ac.id">muhammadgus.2020@student.uny.ac.id</a></p>
              </div>

              <div class="phone">
                <i class="icofont-whatsapp"></i>
                <h4>WhatsApp</h4>
                <p><a href="wa.me/6285713583425">+6285713583425</a></p>
              </div>

              {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe> --}}
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="#" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Nama</label>
                  <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Email</label>
                  <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Nomor WhatsApp</label>
                <input type="number" class="form-control" name="subject" id="subject" value="62" data-rule="minlen:11" data-msg="Please enter at least 11 number of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="name">Pesan</label>
                <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Kirim Pesan</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">

      <div class="container">

        <div class="row  justify-content-center">
          <div class="col-lg-6">
            <h3>APeK Online</h3>
            <p>Aplikasi Pengumuman Kelulusan Online adalah sebuah aplikasi yang digunakan untuk memeriksa kelulusan anak SMK dengan NISN dan tanggal lahir.</p>
          </div>
        </div>

        {{-- <div class="row footer-newsletter justify-content-center">
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email" placeholder="Enter your Email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div> --}}

        <div class="social-links">
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-google"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>

      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>APeK Online</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/enno-free-simple-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/" target="_BLANK">BootstrapMade</a> 
        & 
        Web Development by <a href="https://github.com/amimhayden22" target="_BLANK">Gus Khamim</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="frontend/assets/vendor/jquery/jquery.min.js"></script>
  <script src="frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="frontend/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="frontend/assets/vendor/php-email-form/validate.js"></script>
  <script src="frontend/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="frontend/assets/vendor/counterup/counterup.min.js"></script>
  <script src="frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="frontend/assets/vendor/venobox/venobox.min.js"></script>
  <script src="frontend/assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="frontend/assets/js/main.js"></script>

</body>

</html>