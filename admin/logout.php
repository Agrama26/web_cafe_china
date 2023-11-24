<?php
session_start();

// Hapus semua data sesi
session_destroy();
// Hapus cookie
setcookie('netter', '', time() - 3600);

// Redirect ke halaman login setelah logout
header("Location: index.php");
exit();
?>