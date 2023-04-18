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
                        <form method="post" action="">
                            <div class="form-group">
                                <label>Email:</label>
                                <input type="email" class="form-control" name="email" required>
                                <div class="invalid-feedback">
                                    Tolong sertakan @ dan ".com"
                                </div>
                                <div class="invalid-feedback">
                                    Tidak boleh hanya 1 huruf / angka / simbol
                                </div>
                            </div>

                            <script>
                                $(document).ready(function() {
                                    $('input[name="email"]').on('input', function() {
                                        var email = $(this).val();
                                        var isValid = true;

                                        // Validasi jika email tidak mengandung @ atau ".com"
                                        if (!/@.*\./.test(email)) {
                                            isValid = false;
                                            $(this).removeClass('is-valid').addClass('is-invalid');
                                            $(this).siblings('.invalid-feedback').eq(0).show();
                                        } else {
                                            $(this).siblings('.invalid-feedback').eq(0).hide();
                                        }

                                        // Validasi jika email hanya terdiri dari 1 karakter
                                        if (/^\S$/.test(email)) {
                                            isValid = false;
                                            $(this).removeClass('is-valid').addClass('is-invalid');
                                            $(this).siblings('.invalid-feedback').eq(1).show();
                                        } else {
                                            $(this).siblings('.invalid-feedback').eq(1).hide();
                                        }

                                        // Jika email valid, tambahkan class is-valid
                                        if (isValid) {
                                            $(this).removeClass('is-invalid').addClass('is-valid');
                                        }
                                    });
                                });
                            </script>

                            <div class="form-group">
                                <label>Name:</label>
                                <input type="text" class="form-control" name="name" required onblur="checkName()">
                                <div class="invalid-feedback">Tidak boleh kosong</div>
                            </div>

                            <script>
                                function checkName() {
                                    var nameInput = document.getElementsByName("name")[0];
                                    if (nameInput.value.trim() == '') {
                                        nameInput.classList.add("is-invalid");
                                        nameInput.classList.remove("is-valid");
                                    } else {
                                        nameInput.classList.add("is-valid");
                                        nameInput.classList.remove("is-invalid");
                                    }
                                }
                            </script>

                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" id="password" name="password" class="form-control">
                                <div class="invalid-feedback" id="password-error"></div>
                                <div class="progress mt-2" style="height: 10px;">
                                    <div id="password-strength" class="progress-bar" role="progressbar" style="width: 0%;"></div>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary btn-block">REGISTER</button>
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
    <script>
        const passwordInput = document.getElementById('password');
        const passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{5,}$/;

        function invalidFill(e) {
    e.preventDefault();
}
        function validFill(e) {
    e.allowDefault();
}

        passwordInput.addEventListener('input', function() {
            const passwordValue = passwordInput.value;

            if (passwordValue.length < 5) {
                passwordInput.classList.remove('is-valid');
                passwordInput.classList.add('is-invalid');
                passwordInput.nextElementSibling.textContent = 'Passwordmu terlalu pendek, pastikan lebih dari 5 karakter';
                passwordInput.form.addEventListener('submit', invalidFill);
            } else if (!passwordPattern.test(passwordValue)) {
                if (!/(?=.*[a-z])/.test(passwordValue)) {
                    passwordInput.nextElementSibling.textContent = 'Passwordmu belum mengandung huruf kecil (a-z)';
                } else if (!/(?=.*[A-Z])/.test(passwordValue)) {
                    passwordInput.nextElementSibling.textContent = 'Passwordmu belum mengandung huruf kapital (A-Z)';
                } else if (!/(?=.*\d)/.test(passwordValue)) {
                    passwordInput.nextElementSibling.textContent = 'Passwordmu belum mengandung angka (0-9)';
                }
                passwordInput.classList.remove('is-valid');
                passwordInput.classList.add('is-invalid');
                passwordInput.form.addEventListener('submit', invalidFill);
            } else {
                passwordInput.classList.remove('is-invalid');
                passwordInput.classList.add('is-valid');
                passwordInput.nextElementSibling.textContent = '';
                passwordInput.form.removeEventListener('submit', invalidFill);
                passwordInput.form.addEventListener('submit', validFill);
        };
        });
    </script>
</body>


</html>