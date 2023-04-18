<?php
include "koneksi.php";
session_start();

// Memeriksa apakah pengguna sudah login
if(isset($_SESSION['user_id'])){
  // Redirect ke halaman utama jika sudah login
  header("Location: skrining.php");
  exit;
}

// Mengecek apakah form login disubmit
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  // Mengambil email dan password dari form login
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Memeriksa apakah koneksi berhasil
  if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
  }

  // Mengecek apakah email dan password sesuai
  $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);

  if(mysqli_num_rows($result) !=0) {
    // Login berhasil, simpan user_id pada session
    $_SESSION['user_id'] = $row['user_id'];

    // Redirect ke halaman utama
    header("Location: complete.php");
    exit;
  } else {
    // Login gagal, tampilkan pesan error
    $error_msg = "Email atau password salah";
  }

  mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    .card {
      margin-top: 50px;
    }
    .valid-feedback, .invalid-feedback {
      display: none;
      font-size: 14px;
      margin-top: 5px;
    }
    .is-valid .valid-feedback {
      display: block;
    }
    .is-invalid .invalid-feedback {
      display: block;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-4">
        <div class="card">
          <div class="card-header bg-warning text-white">
            <h4 class="text-center">LOGIN</h4>
          </div>
          <div class="card-body">
            <?php if(isset($error_msg)) { ?>
              <div class="alert alert-danger"><?php echo $error_msg; ?></div>
            <?php } ?>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
              <div class="form-group">
                <label for="email">email:</label>
                <input type="text" class="form-control <?php echo isset($email_error) ? 'is-invalid' : ''; ?>" id="email" name="email" required value="<?php echo isset($email) ? $email : ''; ?>">
                <?php if(isset($email_error)) { ?>
                  <div class="invalid-feedback"><?php echo $email_error; ?></div>
                <?php } ?>
              </div>
              <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control <?php echo isset($password_error) ? 'is-invalid' : ''; ?>" id="password" name="password" required>
                <?php if(isset($password_error)) { ?>
                  <div class="invalid-feedback"><?php echo $password_error; ?></div>
                <?php } ?>
              </div>
              <?php if(isset($is_valid) && $is_valid) { ?>
                <div class="form-check mb-3">
                  <input type="checkbox" class="form-check-input" id="remember_me" name="remember_me">
                  <label class="form-check-label" for="remember_me">Ingat saya</label>
                </div>
              <?php } ?>
              <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
            <div class="text-center mt-2">
              <span>Don't have an account? </span>
              <a href="register.php">Register</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>