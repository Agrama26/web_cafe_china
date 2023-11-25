<?php
$host = "localhost"; // Nama host database
$username = "root"; // Nama pengguna (username) database
$password = ""; // Kata sandi (password) database
$database = "kafe_cina"; // Nama basis data

// Membuat koneksi ke database
$conn = mysqli_connect($host, $username, $password, $database);

// Periksa koneksi
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
// else {
// echo ("Koneksi Berhasil");
// }
?>