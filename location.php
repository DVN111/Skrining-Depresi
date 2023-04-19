<?php
include "koneksi.php";
      // memulai session
session_start();

// memeriksa apakah user telah login dan memeriksa apakah session user_id tersedia
if(isset($_SESSION['user_id'])) {
  $user_id = $_SESSION['user_id'];
}
  ?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Marvel HTML Bootstrap 4 Template</title>

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/unicons.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/mp.css">

  <!-- MAIN STYLE -->
  <link rel="stylesheet" href="css/tooplate-style.css">

  <!--

Tooplate 2115 Marvel

https://www.tooplate.com/view/2115-marvel

-->

</head>

<body>

  <!-- MENU -->
  <nav class="navbar navbar-expand-sm navbar-light">
    <div class="container">
      <a class="navbar-brand" href="index.php"><i class='uil uil-user'></i>Calmind</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        <span class="navbar-toggler-icon"></span>
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a href="skrining.php" class="nav-link"><span data-hover="About">Skrining</span></a>
          </li>
          <li class="nav-item">
            <a href="#project" class="nav-link"><span data-hover="Projects">Projects</span></a>
          </li>
          <li class="nav-item">
            <a href="#resume" class="nav-link"><span data-hover="Resume">Resume</span></a>
          </li>
          <li class="nav-item">
            <a href="#contact" class="nav-link"><span data-hover="Contact">Contact</span></a>
          </li>
        </ul>

        <ul class="navbar-nav ml-lg-auto">
          <div class="ml-lg-4">
            <div class="color-mode d-lg-flex justify-content-center align-items-center">
              <i class="color-mode-icon"></i>
              Color mode
            </div>
          </div>
        </ul>
      </div>
    </div>
  </nav>


  <!-- ABOUT -->
  <section class="about full-screen d-lg-flex justify-content-center align-items-center" id="about">
    <div class="container">
      <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
      <div class="elfsight-app-2568c508-ca74-4b66-b7da-08d09f76f2d7"></div>

      <!-- Replace YOUR_API_KEY with your actual API key -->
      <style>
      /* Set ukuran peta */
      #map {
        height: 500px;
        width: 100%;
      }
    </style>
     <div id="map"></div>
     <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHL02udxXB-CHgxLpidcSaMNWhBTkH3-g&callback=getLocation"></script>
    <script>
      
      // Fungsi untuk mengambil lokasi pengguna
      function getLocation() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(showPosition, showError);
        } else {
          alert("Geolocation tidak didukung oleh browser Anda");
        }
      }

      // Fungsi untuk menampilkan lokasi pada peta
      function showPosition(position) {
        // Ambil koordinat pengguna
        var lat = position.coords.latitude;
        var lng = position.coords.longitude;

        // Tampilkan peta
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: lat, lng: lng},
          zoom: 15
        });

        // Tambahkan marker pada lokasi pengguna
        var marker = new google.maps.Marker({
          position: {lat: lat, lng: lng},
          map: map
        });
      }

      // Fungsi untuk menampilkan pesan error
      function showError(error) {
        switch(error.code) {
          case error.PERMISSION_DENIED:
            alert("User tidak mengizinkan mengakses lokasi");
            break;
          case error.POSITION_UNAVAILABLE:
            alert("Lokasi tidak tersedia");
            break;
          case error.TIMEOUT:
            alert("Waktu permintaan habis");
            break;
          case error.UNKNOWN_ERROR:
            alert("Terjadi kesalahan tidak diketahui");
            break;
        }
      }
    </script>
    <!-- Load Google Maps API dengan callback getLocation() -->
    

      </div>
    </section>

    

  <!-- FOOTER -->
  <footer class=" footer py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-12">
          <p class="copyright-text text-center">Copyright &copy; 2019 Company Name . All rights reserved</p>
          <p class="copyright-text text-center">Designed by <a rel="nofollow"
              href="https://www.facebook.com/tooplate">Tooplate</a></p>
        </div>
      </div>
    </div>
  </footer>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/Headroom.js"></script>
  <script src="js/jQuery.headroom.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/smoothscroll.js"></script>
  <script src="js/custom.js"></script>

</body>

</html>