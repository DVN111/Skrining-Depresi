<?php
include "koneksi.php";
// memulai session
session_start();

// memeriksa apakah user telah login dan memeriksa apakah session user_id tersedia
if (isset($_SESSION['user_id'])) {
  $user_id = $_SESSION['user_id'];
  // query untuk mengambil data dari tabel skrining menggunakan user_id
  $query = "SELECT * FROM skrining WHERE user_id = $user_id";
  // menjalankan query dan mengambil hasilnya
  $result = mysqli_query($conn, $query);
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
    <style>
      .table {
        text-align: center;
      }

      .table thead th {
        vertical-align: middle;
      }

      .table tbody td {
        vertical-align: middle;
      }

      /* CSS untuk menempatkan modal agak ke bawah */
      .modal-dialog {
        position: relative;
        top: 20%;
        transform: translateY(-50%);
      }

      button {
        margin-bottom: 50px;
        text-align: center;
      }

      .green {
        background-color: #ccffcc;
      }

      .yellow {
        background-color: #ffffcc;
      }

      .orange {
        background-color: #ffe6cc;
      }

      .red {
        background-color: #ffcccc;
      }
    </style>

    <!--

Tooplate 2115 Marvel

https://www.tooplate.com/view/2115-marvel

-->

  </head>

  <body>

    <!-- NAVIGASI -->
    <nav class="navbar navbar-expand-sm navbar-light">
      <div class="container">
        <a class="navbar-brand" href="index.php"><i class='uil uil-user'></i>Calmind</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a href="skrining.php" class="nav-link"><span data-hover="Skrining">Skrining</span></a>
            </li>
            <li class="active nav-item">
              <a href="riwayat.php" class="nav-link"><span data-hover="Riwayat">Riwayat</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="logoutBtn"><span data-hover="Logout">Logout</span></a>
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

    <!-- SECTION TABEL RIWAYAT SKRINING -->
    <section class="about full-screen d-lg-flex justify-content-center align-items-center" id="about">
      <div class="container">
        <!-- BUTTON BUAT NGELUARIN MODAL GRAFIK RIWAYAT SKRINING -->
        <button type="button" data-toggle="modal" data-target="#chartModal" class="btn custom-btn custom-btn-bg custom-btn-link">
          <i class="fa-solid fa-chart-linemr-2 "></i>Tampilkan Grafik
        </button>
        <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
        <div class="elfsight-app-2568c508-ca74-4b66-b7da-08d09f76f2d7"></div>


        <!-- TABEL RIWAYAT SKRINING -->
      <?php


      //memeriksa apakah koneksi berhasil
      if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
      }

      //mengambil data dari tabel skrining berdasarkan user id
      $sql = "SELECT * FROM skrining WHERE user_id = '$user_id' ORDER BY tanggal DESC";
      $result = mysqli_query($conn, $sql);

      //menampilkan data dalam bentuk tabel dengan Bootstrap
      echo '<div class="container mt-3">';
      echo '<table class="table table-bordered text-center">';
      echo '<thead>';
      echo '<tr>';
      echo '<th scope="col">#</th>';
      echo '<th scope="col">Tanggal</th>';
      echo '<th scope="col">Hasil</th>';
      echo '<th scope="col">Saran</th>';
      // echo '<th colspan="2" scope="col">Aksi</th>';
      echo '</tr>';
      echo '</thead>';
      echo '<tbody>';
      $i = 1;
      while ($row = mysqli_fetch_array($result)) {
        // menentukan warna baris berdasarkan nilai 'hasil'
        $color = '';
        switch ($row['hasil']) {
          case 'Normal':
            $color = 'green';
            break;
          case 'Depresi Ringan':
            $color = 'yellow';
            break;
          case 'Depresi Sedang':
            $color = 'orange';
            break;
          case 'Depresi Berat':
            $color = 'red';
            break;
        }

        echo '<tr class="' . $color . '">';
        echo '<th scope="row">' . $i . '</th>';
        echo '<td>' . $row['tanggal'] . '</td>';
        echo '<td>' . $row['hasil'] . '</td>';
        echo '<td>' . $row['saran'] . '</td>';
        echo '</tr>';
        $i++;
      }
      echo '</tbody>';
      echo '</table>';
      echo '</div>';
    } else {
      // jika user belum login, alihkan ke halaman login
      header("Location: login.php");
      exit();
    }
      ?>
      </div>
    </section>

    <!-- FOOTER -->
    <footer class=" footer py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-12">
            <p class="copyright-text text-center">Copyright &copy; 2019 Company Name . All rights reserved</p>
            <p class="copyright-text text-center">Designed by <a rel="nofollow" href="https://www.facebook.com/tooplate">Tooplate</a></p>
          </div>
        </div>
      </div>
    </footer>


    <!-- MODAL UNTUK GRAFIK RIWAYAT SKRINING -->
    <div class="modal fade" id="chartModal" tabindex="-1" role="dialog" aria-labelledby="chartModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="chartModalLabel">Grafik Tingkat Depresi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- Canvas untuk grafik -->
            <canvas id="myChart"></canvas>
            <!-- Script untuk membuat grafik -->
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
              // mengambil data dari database
              <?php
              $data = array();
              $query = "SELECT tanggal, nilai FROM skrining WHERE user_id = $user_id ORDER BY tanggal ASC";
              $result = mysqli_query($conn, $query);
              while ($row = mysqli_fetch_array($result)) {
                $data[] = array($row['tanggal'], $row['nilai']);
              }
              ?>

              // membuat grafik dengan Chart.js
              var ctx = document.getElementById('myChart').getContext('2d');
              var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                  labels: [
                    <?php
                    foreach ($data as $d) {
                      echo "'" . $d[0] . "', ";
                    }
                    ?>
                  ],
                  datasets: [{
                    label: 'Tingkat Depresi',
                    data: [
                      <?php
                      foreach ($data as $d) {
                        echo "'" . $d[1] . "', ";
                      }
                      ?>
                    ],
                    backgroundColor: 'rgba(255, 194, 0, 0.2)',
                    borderColor: 'rgba(255, 194, 0, 1)',
                    borderWidth: 1
                  }]
                },
                options: {
                  scales: {
                    yAxes: [{
                      ticks: {
                        beginAtZero: true
                      }
                    }]
                  }
                }
              });
            </script>
          </div>
        </div>
      </div>
    </div>

    <!-- MODAL UNTUK LOGOUT -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog" style="margin-top: -1%;">
        <!-- Modal content-->
        <div class="modal-content text-center">
          <div class="modal-header">
            <h4 class="modal-title">Apakah kamu ingin pergi?</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>

          </div>
          <div class="modal-body">
            <img src="images/undraw/undraw_login_re_4vu2.svg" style="width: 300px;" class="img-responsive mx-auto d-block">
            <p class="text-center">Kuharap kita bertemu lagi ya, aku akan selalu menerimamu disini.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            <button type="button" id="confirmBtn" class="btn btn-danger">Logout</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Animasi ketika tombol di klik -->
    <script>
      $(document).ready(function() {
        $('button[data-toggle="modal"]').click(function() {
          var target = $(this).data('target');
          $(target).addClass('show');
          setTimeout(function() {
            $(target).addClass('in');
          }, 150);
          $('body').addClass('modal-open');
        });
        $('.modal').click(function(e) {
          if (e.target == this) {
            $(this).removeClass('show in');
            $('body').removeClass('modal-open');
          }
        });
      });
    </script>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/Headroom.js"></script>
    <script src="js/jQuery.headroom.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>

    <script>
      var logoutBtn = document.getElementById("logoutBtn");
      var modal = document.getElementById("myModal");
      var confirmBtn = document.getElementById("confirmBtn");

      logoutBtn.onclick = function() {
        $('#myModal').modal('show');
      }

      function logout() {
        // panggil file logout.php untuk melakukan proses logout
        window.location.href = "logout.php";
      }
      document.getElementById("confirmBtn").onclick = function() {
        logout();
      }
    </script>

  </body>

  </html>