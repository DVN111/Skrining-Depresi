<?php
// Mengecek apakah form register telah di-submit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  // Memastikan semua field telah diisi
  if (empty($_POST['email']) || empty($_POST['name']) || empty($_POST['password'])) {
    $error_message = 'Mohon lengkapi semua field yang diperlukan!';
  } else {
    // Mengambil data dari form register
    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = $_POST['password'];

    // Melakukan koneksi ke database
    $host = 'localhost';
    $username = 'root';
    $password_db = '';
    $database_name = 'users';
    $mysqli = new mysqli($host, $username, $password_db, $database_name);

    // Mengecek apakah koneksi berhasil dilakukan
    if ($mysqli->connect_error) {
      die('Koneksi ke database gagal: ' . $mysqli->connect_error);
    }

    // Melakukan query untuk memasukkan data ke dalam tabel users
    $query = "INSERT INTO users (email, name, password) VALUES ('$email', '$name', '$password')";
    if ($mysqli->query($query) === TRUE) {
      $success_message = 'Registrasi berhasil! Silahkan login untuk melanjutkan.';
	  header("Location: login.php");
    } else {
      $error_message = 'Registrasi gagal: ' . $mysqli->error;
    }

    // Menutup koneksi ke database
    $mysqli->close();
  }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Register - My Website</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row mt-5">
			<div class="col-md-6 offset-md-3">
				<div class="card">
					<div class="card-header bg-warning">
						<h3 class="text-center">REGISTER</h3>
					</div>
					<div class="card-body">
						<form method="post" action="register.php">
							<div class="form-group">
								<label>Email:</label>
								<input type="email" class="form-control" name="email" required>
							</div>
							<div class="form-group">
								<label>Name:</label>
								<input type="text" class="form-control" name="name" required>
							</div>
							<div class="form-group">
								<label>Password:</label>
								<input type="password" class="form-control" id="password" name="password" required>
								<div class="progress mt-2" style="height: 10px;">
									<div id="password-strength" class="progress-bar" role="progressbar" style="width: 0%;"></div>
								</div>
							</div>
							<button type="submit" class="btn btn-primary btn-block" >REGISTER</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		$(document).ready(function() {
			$('#password').on('keyup', function() {
				var strength = 0;
				var password = $(this).val();
				if (password.length >= 8) {
					strength += 25;
				}
				if (password.match(/[a-z]/)) {
					strength += 25;
				}
				if (password.match(/[A-Z]/)) {
					strength += 25;
				}
				if (password.match(/[0-9]/)) {
					strength += 25;
				}
				$('#password-strength').css('width', strength + '%').removeClass().addClass(getPasswordStrengthClass(strength));
			});

			function getPasswordStrengthClass(strength) {
				if (strength < 50) {
					return 'bg-danger';
				} else if (strength < 75) {
					return 'bg-warning';
				} else {
					return 'bg-success';
				}
			}
		});
	</script>
</body>
</html>
