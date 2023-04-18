<?php
// Memulai session
session_start();

// Menghapus session dan cookie pada server
session_unset();
session_destroy();
setcookie("email", "", time()-3600);
setcookie("password", "", time()-3600);

// Mengirim response kembali ke client
header("Location: completequit.php");
?>
