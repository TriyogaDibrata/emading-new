<?php
//Mengirimkan Token Keamanan Ajax Request (Csrf Token)
session_start();
if (empty($_SESSION['csrf_token'])) {
  $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="csrf-token" content="<?= $_SESSION['csrf_token'] ?>">

  <title>e-Mading - Media pembelajaran interaktif</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bootslander - v4.7.1
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="#"><span>e-Mading</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#materi">Materi</a></li>
          <li><a class="nav-link scrollto" href="#kuis">Kuis</a></li>
          <li><a class="nav-link scrollto" href="#comment">Kolom Diskusi</a></li>
          <li><a class="nav-link scrollto" href="#profile">Profil Pengajar</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1>Selamat datang, <br /> Ayo belajar lebih seru dan menyenangkan dengan <span>e-Mading</span></h1>
            <h2>Demi menunjang suksesnya proses pembelaran di kelas, pengajar harus senantiasa berpikir kreatif seperti
              melakukan inovasi terhadap media pembelajaran yang akan diberikan kepada siswa yakni dengan menggunakan
              media pembelajaran yang interaktif atau berbasis digital multimedia.</h2>
            <div class="text-center text-lg-start">
              <a href="#materi" class="btn-get-started scrollto">Mulai Belajar</a>
            </div>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ====== Materi Section ======-->
    <section id="materi" class="materi">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Materi Pembelajaran</h2>
          <p>Ayo, pelajari materi dibawah ini ! <br /> Pilih salah satu materi untuk dipelajari dengan menekan tombol
            "Ayo Pelajari"</p>
        </div>
        <div class="row" data-aos="fade-left">
          <div class="col-lg-4 col-md-6">
            <div class="card" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/img/materi/materi-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Iklan Media Cetak</h4>
                <span>Apa yang dimaksud dengan iklan media cetak dan fungsinya ?</span>
              </div>
            </div>
            <a href="./materi1.html" class="btn btn-learn" role="button" aria-pressed="true">Ayo Pelajari</a>
          </div>

          <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
            <div class="card" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/img/materi/materi-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Organ Pencernaan Manusia</h4>
                <span>Apa saja bagian-bagian dari sistem pencernaan pada manusia ?</span>
              </div>
            </div>
            <a href="./materi2.html" class="btn btn-learn" role="button" aria-pressed="true">Ayo Pelajari</a>
          </div>

          <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
            <div class="card" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/img/materi/materi-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Tangga Nada</h4>
                <span>Apa saja ciri-ciri lagu tangga nada mayor dan tangga nada minor ?</span>
              </div>
            </div>
            <a href="./materi3.html" class="btn btn-learn" role="button" aria-pressed="true">Ayo Pelajari</a>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== End of Materi Section ======-->

    <!-- ======= About Section ======= -->
    <section id="kuis" class="kuis">
      <div class="container-fluid">
        <div class="section-title" data-aos="fade-up">
          <h2>Evaluasi Pemahamanmu</h2>
          <p>Ayo, kerjakan kuis ! <br /> Evaluasi pemahamanmu mengenai materi yang sudah dipelajari dengan mengerjakan
            kuis ini</p>
        </div>

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
            <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a> -->
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center px-lg-5" data-aos="fade-left">

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon"><i class="bx bx-book"></i></div>
              <h4 class="title"><a>Pelajari Materi</a></h4>
              <p class="description">Pilih dan pelajari materi yang telah disediakan</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon"><i class="bx bx-check-circle"></i></div>
              <h4 class="title"><a>Kuasai Materi</a></h4>
              <p class="description">Pahami setiap pembahasan materi dengan baik</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon"><i class="bx bx-notepad"></i></div>
              <h4 class="title"><a>Kerjakan Kuis</a></h4>
              <p class="description">Ukur pemahamanmu mengenai materi yang sudah kamu pelajari</p>
            </div>

            <a role="button" class="btn btn-kuis" href="./kuis.html">Mulai Kerjakan Kuis</a>

          </div>

        </div>


      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Contact Section ======= -->
    <section id="comment" class="comment">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Kolom Diskusi</h2>
          <p>Bagikan pendapatmu dan berdiskusi dengan peserta lainnya, tentang materi yang sudah kamu pelajari</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <div class="comment-box">
              <div class="chat-wrapper" id="display_comment">
                <!-- <div class="chat-box">
                  <div class="name">Justin Bieber</div>
                  <div class="desc">Wow, materinya sangat menarik</div>
                </div>

                <div class="chat-box">
                  <div class="name">Selena Gomez</div>
                  <div class="desc">Sangat baik, dari segi tampilan dan penggunaan cukup mudah. Materi yang dibagikan juga sangat bermanfaat</div>
                </div>

                <div class="chat-box">
                  <div class="name">Ghozali Everyday</div>
                  <div class="desc">Wah, sangat interaktif. Setelah belajar kita bisa mengerjakan kuis untuk mengukur pemahaman kita.</div>
                </div>

                <div class="chat-box">
                  <div class="name">Elon Musk</div>
                  <div class="desc">Kalo bisa lebih ditambah lagi materi-materinya. Sejauh ini sudah cukup baik</div>
                </div> -->
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-right" data-aos-delay="100">
            <div class="comment-box">
              <form method="POST" id="comment_form" role="form" class="comment-form">
                <div class="row">
                  <div class="col-md-12 form-group">
                    <input type="text" name="sender" class="form-control" id="sender" placeholder="Masukan Nama" required>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="comment" id="comment" rows="7" placeholder="Tuliskan komentar disini" required></textarea>
                </div>
                <button class="btn btn-success" type="submit">Kirim Komentar</button>
              </form>
            </div>
          </div>
        </div>
    </section>
    <!-- End Contact Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="profile" class="testimonials">
      <div class="container">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/undiksha-logo.png" class="testimonial-img" alt="">
                <h3>Gusti Ayu Nyoman Tisia Purnianingrum</h3>
                <h4>1811031102</h4>
                <h4>Jurusan : Pendidikan Dasar</h4>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i> </br>
                <strong>TUJUAN PEMBELAJARAN </strong> </br>
                1. Dengan membaca materi pada e-mading, siswa mampu merinci unsur-unsur iklan dengan benar. <br />
                2. Dengan mengamati contoh iklan pada e-mading, siswa mampu menemukan informasi yang terkandung dalam iklan dengan benar.<br />
                3. Dengan membaca materi pada e-mading, siswa mampu merinci organ-organ pencernaan pada manusia dengan benar.<br />
                4. Dengan mengamati video dan diskusi pada e-mading, siswa mampu membuat diagram alur proses pencernaan manusia dengan benar.<br />
                5. Dengan membaca materi pada e-mading dan bimbingan guru, siswa mampu menguraikan ciri-ciri lagu bertangga nada mayor dan minor dengan benar.<br />
                6. Dengan membaca materi dan mengamati contoh lagu, siswa mampu menyanyikan lagu sesuai dengan tangga nada dengan benar.<br />


                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <!-- <strong>
                Tema 3 (Makanan Sehat) </br>
                Subtema 1 ( Bagaimana Tubuh Mengolah Makanan) </br>
                Pembelajaran 2 </br></br>
                </strong> -->

                  <strong>Kompotensi Dasar (KD) & Indikator</strong> </br></br>

                  <strong> Bahasa Indonesia </strong></br>
                  <strong>Kompetensi Dasar (KD) </strong></br>
                  3.4 Menganalisis informasi yang disampaikan paparan iklan dari media cetak atau elektronik </br>
                  4.4 Memeragakan kembali informasi yang disampaikan paparan iklan dari media cetak atau elektronik dengan bantuan lisan, tulis, dan visual </br></br>

                  <strong>IPA</strong> </br>
                  <strong>Kompetensi Dasar (KD)</strong> </br>
                  3.3. Menjelaskan organ pencernaan dan fungsinya pada hewan dan manusia serta cara memelihara kesehatan organ pencernaan manusia </br>
                  4.3. Menyajikan karya tentang konsep organ dan fungsi pencernaan pada hewan atau manusia </br></br>

                  <strong>SBdP</strong> </br>
                  <strong>Kompetensi Dasar (KD)</strong> </br>
                  3.2 Memahami tangga nada. </br>
                  4.2 Menyanyikan lagu-lagu dalam berbagai tangga nada dengan iringan musik </br>
                </p>
              </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>
    <!-- End Testimonials Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Tridi Tech</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="assets/js/jquery.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    $(document).ready(function() {
      //Mengirimkan Token Keamanan
      $.ajaxSetup({
        headers: {
          'Csrf-Token': $('meta[name="csrf-token"]').attr('content')
        }
      });

      $('#comment_form').on('submit', function(event) {
        event.preventDefault();
        var form_data = $(this).serialize();
        $.ajax({
          url: "_addComments.php",
          method: "POST",
          data: form_data,
          success: function(data) {
            $('#comment_form')[0].reset();
            load_comment();
          },
          error: function(data) {
            console.log(data.responseText)
          }
        })
      });

      load_comment();

      function load_comment(){
      	$.ajax({
      		url:"_getComments.php",
      		method:"POST",
      		success:function(data){
      			$('#display_comment').html(data);
      		}, error: function(data) {
            console.log(data.responseText)
          }
      	})
      }
    });
  </script>
  </script>

</body>

<div class="modal fade" id="kuisModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

</html>