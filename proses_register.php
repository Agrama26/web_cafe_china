<?php
// Koneksi ke database (gantilah sesuai dengan detail database Anda)
$host = "localhost";
$username = "root";
$password = "";
$database = "kafe_cina";

$conn = new mysqli($host, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil data yang dikirimkan melalui formulir
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $no_hp = $_POST["no_hp"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $created_at = date("Y-m-d H:i:s"); // Waktu saat ini

    // Query untuk menyimpan data ke dalam tabel users
    $sql = "INSERT INTO users (username, email, no_hp, passwordd, created_at) VALUES ('$username', '$email', '$no_hp', '$password', '$created_at')";

    if ($conn->query($sql) === TRUE) {
        header("Location: selamat.php");
        // echo "Registrasi berhasil. Selamat datang, $username!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Tutup koneksi ke database
$conn->close();
?>