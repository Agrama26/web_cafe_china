<?php
require "../session.php";
include "../includes/koneksi.php";
// Ambil data dari formulir
$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
$no_rumah = isset($_POST['no_rumah']) ? $_POST['no_rumah'] : '';
$detail_alamat = isset($_POST['detail_alamat']) ? $_POST['detail_alamat'] : '';
$selected_kurir = isset($_POST['kurir']) ? $_POST['kurir'] : '';
$selected_pembayaran = isset($_POST['pembayaran']) ? $_POST['pembayaran'] : '';

// Validasi data
if (empty($alamat) || empty($no_rumah) || empty($detail_alamat)) {
    die("Data alamat, no rumah, dan detail alamat harus diisi.");
}

// Hitung total pembayaran
$subtotal = $cartTotal; // Subtotal dari keranjang belanja
$biaya_pengiriman = 10000; // Biaya pengiriman (contoh: Rp 10.000)
$total_pembayaran = $subtotal + $biaya_pengiriman;

// Proses pembayaran (simulasi sederhana)
if ($selected_pembayaran == 'Transfer Bank') {

} elseif ($selected_pembayaran == 'Cash on Delivery (COD)') {

} else {

}

header("Location: payment_result.php");
?>