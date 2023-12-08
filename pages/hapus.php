<?php
include('../includes/koneksi.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $deleteQuery = "DELETE FROM carts WHERE id = $id";
    $conn->query($deleteQuery);
}

header("Location: keranjang.php"); // Redirect kembali ke halaman keranjang
exit();
?>