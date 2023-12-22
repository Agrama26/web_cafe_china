<?php
// Pengaturan Cookie
$expire = time() + 10; // Waktu kadaluwarsa cookie (10 detik dari waktu sekarang)
setcookie('netter', 1, $expire);

// Pengecekan Cookie
if (isset($_COOKIE['netter'])) {
    echo "Selamat Datang Kembali";
} else {
    echo "Selamat Datang, Ini Kunjungan Anda Pertama Kalinya";
}
?>