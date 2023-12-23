<?php
// Pengaturan Cookie
$expire = time() + 10; // Waktu kadaluwarsa cookie (10 detik dari waktu sekarang)
setcookie('netter', 1, $expire);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>

<body>

    <?php
    // Pengecekan Cookie
    if (isset($_COOKIE['netter'])) {
        echo "Selamat Datang Kembali";
    } else {
        echo "Selamat Datang, Ini Kunjungan Anda Pertama Kalinya";
    }
    ?>

</body>

</html>