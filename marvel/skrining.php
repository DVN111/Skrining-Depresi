<?php
include "koneksi.php";
// memulai session
session_start();

// memeriksa apakah user telah login dan memeriksa apakah session user_id tersedia
if(isset($_SESSION['user_id'])) {
  $user_id = $_SESSION['user_id'];
  // query untuk mengambil data dari database menggunakan user_id
  $query = "SELECT * FROM users WHERE user_id = $user_id";
  // menjalankan query dan mengambil hasilnya
  $result = mysqli_query($conn, $query);
  // menampilkan data dari hasil query
  while($row = mysqli_fetch_array($result)) {
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
          <li class="active nav-item">
            <a href="skrining.php" class="nav-link"><span data-hover="Skrining">Skrining</span></a>
          </li>
          <li class="nav-item">
            <a href="riwayat.php" class="nav-link"><span data-hover="Riwayat">Riwayat</span></a>
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

  <section class="project full-screen d-lg-flex justify-content-center align-items-center" id="project">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-12 d-flex align-items-center">
                <div class="about-image svg">
                        <img src="images/undraw/undraw_pending_approval_xuu9.svg" class="img-fluid" alt="svg image" style="width: 75%;">
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-12">
                  <div class="about-text">
                        <small class="small-text">Welcome to <span class="mobile-block">CALM</span></small>
                        <h1 class="animated animated-text">
                            <span class="mr-2">Hai <?php echo $row['name']?>, sepertinya kamu sedang merasa</span>
                            <?php  }
                                } else {
                                  // jika user belum login, alihkan ke halaman login
                                  header("Location: login.php");
                                  exit();
                                }
                                ?>
                                <div class="animated-info">
                                    <span class="animated-item">Sedih</span>
                                    <span class="animated-item">Cemas</span>
                                    <span class="animated-item">Depresi</span>
                                </div>
                        </h1>

                        <p>Bolehkan aku membantumu melakukan skrining dini untuk mengecek apakah
                          kamu dalam kondisi depresi tingkat tertentu. Namun, aku butuh bantuanmu untuk mengisi beberapa pertanyaan.
                          bisakah kamu membantuku?
                        </p>
                        
                        <div class="custom-btn-group mt-4">
                          <a href="#about" class="btn custom-btn custom-btn-bg custom-btn-link">Iya, Aku akan mengisi Kuisioner</a>
                          
                          
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

  <!-- ABOUT -->
  <section class="about full-screen d-lg-flex justify-content-center align-items-center" id="about">
    <div class="container">
      <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
      <div class="elfsight-app-2568c508-ca74-4b66-b7da-08d09f76f2d7"></div>

      


        <section class="w3-section w3-responsive">
          <form action="" method="post">
            <h3>Ini Kuisioner Untukmu, Isi sesuai keadaanmu ya :)</h3>


            <table class="table table-borderless">
            <tr>
              <td colspan="3">
              <label for="tanggal">Tanggal:</label>
              <input type="date" class="form-control" id="tanggal" name="tanggal" required>
              </td>
            </tr>
              <tr>
                <td colspan="3">
                  1. Bagaimana tingkat kesedihan Anda?
                </td>
              </tr>
              <tr>
                <td></td>
                <td class="w3-center" size><input type="radio" name="pertanyaan1" value="0" required> 1</td>
                <td>Saya tidak merasa sedih.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan1" value="1" required> 2</td>
                <td>Saya merasa sedih.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan1" value="2" required> 3</td>
                <td>Sepanjang waktu saya sedih dan tidak bisa menghilangkan perasaan itu.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan1" value="3" required> 4</td>
                <td>Saya sedemikian sedih atau tidak bahagia sehingga saya tidak tahan lagi rasanya.</td>
              </tr>

              <tr>
                <td colspan="3">
                  2. Seberapa besar kekhawatiran Anda tentang masa depan?
                </td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan2" value="0"> 1</td>
                <td>Saya tidak terlalu berkecil hati mengenai masa depan.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan2" value="1" required> 2</td>
                <td>Saya merasa kecil mengenai masa depan.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan2" value="2" required> 3</td>
                <td>Saya merasa tidak ada suatu pun yang dapat saya harapkan.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan2" value="3" required> 4</td>
                <td>Saya merasa bahwa masa depan saya tanpa harapan dan bahwa semuanya tidak akan dapat membaik.</td>
              </tr>

              <tr>
                <td colspan="3">
                  3. Seberapa sering Anda merasa bahwa Anda adalah seorang yang gagal?
                </td>
              </tr>

              <tr>
                <td>3</td>
                <td class="w3-center"><input type="radio" name="pertanyaan3" value="0" required> 1</td>
                <td>Saya tidak menganggap diri saya sebagai orang yang gagal.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan3" value="1" required> 2</td>
                <td>Saya merasa bahwa saya telah gagal lebih dari kebanyakan orang.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan3" value="2" required> 3</td>
                <td>Saat saya menengok masa lalu maka yang terlihat oleh saya hanyalah kegagalan.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan3" value="3" required> 4</td>
                <td>Saya merasa bahwa saya adalah saya adalah seorang yang gagal total.</td>
              </tr>

              <tr>
                <td colspan="3">
                  4. Seberapa besar kepuasan Anda dari hal-hal yang Anda lakukan?
                </td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan4" value="0" required> 1</td>
                <td>Saya memperoleh banyak kepuasan dari hal-hal yang saya lakukan sama seperti sebelumnya.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan4" value="1" required> 2</td>
                <td>Saya tidak lagi menikmati berbagai hal seperti yang pernah saya rasakan dulu.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan4" value="2" required> 3</td>
                <td>Saya tidak memperoleh kepuasan sejati dari apapun lagi.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan4" value="3" required> 4</td>
                <td>Saya tidak puas atau bosan dengan segalanya.</td>
              </tr>

              <tr>
                <td colspan="3">
                  5. Seberapa sering Anda merasa bersalah?
                </td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan5" value="0" required> 1</td>
                <td>Saya tidak terlalu merasa bersalah.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan5" value="1" required> 2</td>
                <td>Saya merasa bersalah dihampir seluruh waktu.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan5" value="2" required> 3</td>
                <td>Saya agak merasa bersalah di sebagian besar waktu.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan5" value="3" required> 4</td>
                <td>Saya merasa bersalah sepanjang waktu.</td>
              </tr>

              <tr>
                <td colspan="3">
                  6. Apakah Anda merasa sedang dihukum?
                </td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan6" value="0" required> 1</td>
                <td>Saya tidak merasa seolah saya sedang dihukum.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan6" value="1" required> 2</td>
                <td>Saya merasa mungkin saya sedang dihukum.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan6" value="2" required> 3</td>
                <td>Saya pikir saya akan dihukum.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan6" value="3" required> 4</td>
                <td>Saya merasa bahwa saya sedang dihukum.</td>
              </tr>

              <tr>
                <td colspan="3">
                  7. Seberapa besar kekecewaan Anda dengan diri sendiri?
                </td>
              </tr>

              <tr>
                <td>7</td>
                <td class="w3-center"><input type="radio" name="pertanyaan7" value="0" required> 1</td>
                <td>Saya tidak merasa kecewa terhadap diri saya sendiri.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan7" value="1" required> 2</td>
                <td>Saya kecewa dengan diri saya sendiri.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan7" value="2" required> 3</td>
                <td>Saya muak terhadap diri saya sendiri.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan7" value="3" required> 4</td>
                <td>Saya membenci diri saya sendiri.</td>
              </tr>

              <tr>
                <td>8</td>
                <td class="w3-center"><input type="radio" name="pertanyaan8" value="0" required> 1</td>
                <td>Saya tidak merasa lebih buruk daripada orang lain.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan8" value="1" required> 2</td>
                <td>Saya cela diri saya sendiri karena kelemahan atau kesalahan saya.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan8" value="2" required> 3</td>
                <td>Saya menyalahkan diri saya sepanjang waktu karena kesalahan-kesalahan saya.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan8" value="3" required> 4</td>
                <td>Saya menyalahkan diri saya atas semua hal buruk yang terjadi.</td>
              </tr>

              <tr>
                <td>9</td>
                <td class="w3-center"><input type="radio" name="pertanyaan9" value="0" required> 1</td>
                <td>Saya tidak punya sedikitpun pikiran untuk bunuh diri.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan9" value="1" required> 2</td>
                <td>Saya mempunyai pikiran-pikiran untuk bunuh diri, namun saya tidak akan melakukannya.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan9" value="2" required> 3</td>
                <td>Saya ingin bunuh diri.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan9" value="3" required> 4</td>
                <td>Saya akan bunuh diri jika saja ada kesempatan.</td>
              </tr>

              <tr>
                <td>10</td>
                <td class="w3-center"><input type="radio" name="pertanyaan10" value="0" required> 1</td>
                <td>Saya tidak lebih banyak menangis dibandingkan biasanya.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan10" value="1" required> 2</td>
                <td>Sekarang saya lebih banyak menangis daripada sebelumnya.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan10" value="2" required> 3</td>
                <td>Sekarang saya menangis sepanjang waktu.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan10" value="3" required> 4</td>
                <td>Biasanya saya mampu menangis namun kini saya tidak lagi dapat menangis walaupun saya
                  menginginkannya.</td>
              </tr>

              <tr>
                <td>11</td>
                <td class="w3-center"><input type="radio" name="pertanyaan11" value="0" required> 1</td>
                <td>Saya tidak lebih terganggu oleh berbagai hal dibandingkan biasanya.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan11" value="1" required> 2</td>
                <td>Kini saya sedikit lebih pemarah daripada biasanya.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan11" value="2" required> 3</td>
                <td>Saya agak jengkel atau terganggu di sebagian besar waktu saya.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan11" value="3" required> 4</td>
                <td>Kini saya merasa jengkel sepanjang waktu.</td>
              </tr>

              <tr>
                <td>12</td>
                <td class="w3-center"><input type="radio" name="pertanyaan12" value="0" required> 1</td>
                <td>Saya tidak kehilangan minat saya terhadap orang lain.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan12" value="1" required> 2</td>
                <td>Saya agak kurang berminat terhadap orang lain dibandingkan biasanya.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan12" value="2" required> 3</td>
                <td>Saya kehilangan hampir seluruh minat saya pada orang lain.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan12" value="3" required> 4</td>
                <td>Saya telah kehilangan seluruh minat saya pada orang lain.</td>
              </tr>

              <tr>
                <td>13</td>
                <td class="w3-center"><input type="radio" name="pertanyaan13" value="0" required> 1</td>
                <td>Saya dapat mengambil keputusan.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan13" value="1" required> 2</td>
                <td>Saya menunda mengambil keputusan.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan13" value="2" required> 3</td>
                <td>Saya mengalami kesulitan lebih besar dalam mengambil keputusan.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan13" value="3" required> 4</td>
                <td>Saya sama sekali tidak dapat mengambil keputusan.</td>
              </tr>

              <tr>
                <td>14</td>
                <td class="w3-center"><input type="radio" name="pertanyaan14" value="0" required> 1</td>
                <td>Saya tidak merasa bahwa keadaan saya tampak lebih buruk dari yang biasanya.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan14" value="1" required> 2</td>
                <td>Saya khawatir saya tampak tua atau tidak menarik.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan14" value="2" required> 3</td>
                <td>Saya merasa bahwa ada perubahan-perubahan yang permanen dalam penampilan saya sehingga membuat saya
                  tampak tidak menarik.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan14" value="3" required> 4</td>
                <td>Saya yakin bahwa saya tampak jelek.</td>
              </tr>

              <tr>
                <td>15</td>
                <td class="w3-center"><input type="radio" name="pertanyaan15" value="0" required> 1</td>
                <td>Saya dapat bekerja sama baiknya dengan sebelumnya.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan15" value="1" required> 2</td>
                <td>Saya membutuhkan suatu usaha ekstra untuk mulai melakukans sesuatu.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan15" value="2" required> 3</td>
                <td>Saya harus memaksa diri sekuat tenaga untuk melakukan sesuatu.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan15" value="3" required> 4</td>
                <td>Saya tidak mampu mengerjakan apapun lagi.</td>
              </tr>

              <tr>
                <td>16</td>
                <td class="w3-center"><input type="radio" name="pertanyaan16" value="0" required> 1</td>
                <td>Saya dapat tidur seperti biasa.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan16" value="1" required> 2</td>
                <td>Tidur saya tidak senyenyak biasanya.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan16" value="2" required> 3</td>
                <td>Saya bangun 1-2 jam lebih awal dari biasanya dan merasa sukar sekali untuk bisa tidur kembali.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan16" value="3" required> 4</td>
                <td>Saya bangun beberapa jam lebih awal dari pada biasanya serta tidak dapat tidur kembali.</td>
              </tr>

              <tr>
                <td>17</td>
                <td class="w3-center"><input type="radio" name="pertanyaan17" value="0" required> 1</td>
                <td>Saya tidak merasa lebih lelah dari biasanya.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan17" value="1" required> 2</td>
                <td>Saya merasa lebih mudah lelah dari biasanya.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan17" value="2" required> 3</td>
                <td>Saya merasa lelah setelah melakukan apa saja.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan17" value="3" required> 4</td>
                <td>Saya terlalu lelah untuk melakukan apapun.</td>
              </tr>

              <tr>
                <td>18</td>
                <td class="w3-center"><input type="radio" name="pertanyaan18" value="0" required> 1</td>
                <td>Nafsu makan saya tidak lebih buruk dari biasanya.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan18" value="1" required> 2</td>
                <td>Nafsu makan saya tidak sebaik biasanya.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan18" value="2" required> 3</td>
                <td>Nafsu makan saya kini jauh lebih buruk.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan18" value="3" required> 4</td>
                <td>Saya tak memiliki nafsu makan lagi.</td>
              </tr>

              <tr>
                <td>19</td>
                <td class="w3-center"><input type="radio" name="pertanyaan19" value="0" required> 1</td>
                <td>Berat badan saya tidak turun banyak atau bahkan tetap akhir-akhir ini.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan19" value="1" required> 2</td>
                <td>Berat badan saya turun lebih dari 5 pon.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan19" value="2" required> 3</td>
                <td>Berat badan saya turun lebih dari 10 pon.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan19" value="3" required> 4</td>
                <td>Berat badan saya turun lebih dari 15 pon.</td>
              </tr>

              <tr>
                <td>20</td>
                <td class="w3-center"><input type="radio" name="pertanyaan20" value="0" required> 1</td>
                <td>Saya tidak lebih cemas mengenai kesehatan saya daripada biasanya.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan20" value="1" required> 2</td>
                <td>Saya cemas mengenai masalah-masalah fisik seperti rasa sakit dan tidak enak badan, atau perut mual
                  atau sembelit.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan20" value="2" required> 3</td>
                <td>Saya sangat cemas mengenai masalah-masalah fisik dan sukar untuk memikirkan banyak hal lainnya.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan20" value="3" required> 4</td>
                <td>Saya begitu cemas mengenai masalah masalah fisik saya sehingga tidak dapat berpikir tentang hal
                  lainnya.</td>
              </tr>

              <tr>
                <td>21</td>
                <td class="w3-center"><input type="radio" name="pertanyaan21" value="0" required> 1</td>
                <td>Saya tidak melihat adanya perubahan dalam minat saya terhadap seks.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan21" value="1" required> 2</td>
                <td>Saya kurang berminat di bidang seks dibandingkan biasanya.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan21" value="2" required> 3</td>
                <td>Kini saya sangat kurang berminat terhadap seks.</td>
              </tr>

              <tr>
                <td></td>
                <td class="w3-center"><input type="radio" name="pertanyaan21" value="3" required> 4</td>
                <td>Saya telah kehilangan minat terhadap seks sama sekali.</td>
              </tr>
            </table>
            <div class="w3-center">
              <p id="jawaban_test">Jawaban Anda Sudah Lengkap?</p>
              <button type="submit" name="submit" class="btn custom-btn custom-btn-bg custom-btn-link">CEK HASIL TEST</button>
            </div>
          </form>
        </section>
      </div>
    </section>

    <?php
      // Mengecek apakah form telah disubmit atau belum
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Array untuk menyimpan nilai dari setiap pertanyaan
        $tanggal=$_POST['tanggal'];
        $jawaban = array(
          $_POST['pertanyaan1'],
          $_POST['pertanyaan2'],
          $_POST['pertanyaan3'],
          $_POST['pertanyaan4'],
          $_POST['pertanyaan5'],
          $_POST['pertanyaan6'],
          $_POST['pertanyaan7'],
          $_POST['pertanyaan8'],
          $_POST['pertanyaan9'],
          $_POST['pertanyaan10'],
          $_POST['pertanyaan11'],
          $_POST['pertanyaan12'],
          $_POST['pertanyaan13'],
          $_POST['pertanyaan14'],
          $_POST['pertanyaan15'],
          $_POST['pertanyaan16'],
          $_POST['pertanyaan17'],
          $_POST['pertanyaan18'],
          $_POST['pertanyaan19'],
          $_POST['pertanyaan20'],
          $_POST['pertanyaan21']
        );

        // Menghitung total nilai jawaban
        $total_nilai = array_sum($jawaban);

        // Menentukan tingkat depresi berdasarkan total nilai jawaban
        if ($total_nilai >= 0 && $total_nilai <= 9) {
          $tingkat_dep = "Normal";
          $saran = "Tidak perlu intervensi";
        } elseif ($total_nilai >= 10 && $total_nilai <= 16) {
          $tingkat_dep = "Depresi Ringan";
          $saran = "Perlu dipelajari beberapa teknik relaksasi, pernafasan, olahraga terukur, dan diet";
        } elseif ($total_nilai >= 17 && $total_nilai <= 29) {
          $tingkat_dep = "Depresi Sedang";
          $saran = "Perlu bantuan profesional berupa konseling dan terapi obat";
        } else {
          $tingkat_dep = "Depresi Berat";
          $saran = "Perlu bantuan profesional berupa konseling dan terapi obat, kemungkinan untuk rawat inap";
        }

        $query = "INSERT INTO skrining (user_id,tanggal, hasil, saran) VALUES ('$user_id','$tanggal','$tingkat_dep', '$saran')";

        mysqli_query($conn, $query);

        mysqli_close($conn);

        ?>

    <section class="resume py-5 d-lg-flex justify-content-center align-items-center" id="resume">
      <div class="container">
        <div class="row">
          <div class="card">
            <h5 class="card-header">Kamu Mengalami .. </h5>
            <div class="card-body">
              <?php
              echo '<h5 class="card-title">' . $tingkat_dep . '</h5>';
              echo '<p class="card-text">' . $saran . '</p>';
              if ($tingkat_dep == "Depresi Berat") {
                echo '<a href="https://www.google.com/maps/search/?api=1&query=psikolog+dan+psikiater&query_place_id=current+location" class="btn btn-primary">Cari Psikolog Terdekat</a>';
              } elseif ($tingkat_dep == "Depresi Sedang") {
                // Menampilkan pesan khusus jika tingkat depresi adalah "Depresi Sedang"
                echo '<p>Tidak semua hal yang kamu cemaskan itu benar, terkadang kita terlalu cepat berpikir 
                sampai lupa bahwa ada dzat yang mengatur semua. Dia tidak akan membiarkan hambanya larut dalam kesedihan.</p>'; 
                echo'<p>Jika kamu merasa pikiran itu mengganggumu, sebaiknya kamu data ke psikiater atau psikolog terdekat</p>';
                echo '<a href="https://www.google.com/maps/search/?api=1&query=psikolog+dan+psikiater&query_place_id=current+location" class="btn btn-primary">Cari Psikolog Terdekat</a>';
              } elseif ($tingkat_dep == "Depresi Ringan") {
                echo 'Tenangkan dirimu dengan mendengarkan musik penenang dengan music player dibawah.';
               
              }
              }
              ?>
          </div>
        </div>
      </div>
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