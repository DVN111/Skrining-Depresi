<?php
// Memulai session
session_start();

// Menghapus session dan cookie pada server
session_unset();
session_destroy();
setcookie("username", "", time()-3600);
setcookie("password", "", time()-3600);

// Mengirim response kembali ke client
echo "logout success";
?>
