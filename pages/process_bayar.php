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
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Validasi Data</title>
        <!-- Tambahkan link ke file CSS Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- Tambahkan link ke file AOS CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
            integrity="sha512-7Ap3UnZ3g1OHW2X7ubI8nNXzP20y0lByxl8pXpzmz9B2oG7cfKbPq73JpNmEFryJEl5R3+yNs9gGmvj9pi/DOQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body>
        <div class="container mt-5">
            <div class="alert alert-danger text-center" role="alert" data-aos="fade-up" data-aos-duration="1000">
                <strong>Peringatan!</strong> Data alamat, no rumah, dan detail alamat harus diisi.
                <br>
                <a href="#" class="btn btn-danger mt-3" onclick="history.go(-1);">Kembali</a>
            </div>
        </div>

        <!-- Tambahkan link ke file JavaScript Bootstrap (Popper.js dan jQuery diperlukan oleh Bootstrap) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!-- Tambahkan link ke file AOS JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"
            integrity="sha512-dA13F1kET7v3Otr5Ca6RJ4fmmp1LvjwzPdSLbTweWQrVh38GZVG0f2xQe3I6s4RF2dnGZGr2cgyuU69PszXOvQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Inisialisasi AOS -->
        <script>
            AOS.init();
        </script>
    </body>

    </html>
    <?php
    die(); // Menghentikan eksekusi kode setelah menampilkan pesan
}

// Hitung total pembayaran
$subtotal = $cartTotal; // Subtotal dari keranjang belanja
$biaya_pengiriman = 10000; // Biaya pengiriman (contoh: Rp 10.000)
$total_pembayaran = $subtotal + $biaya_pengiriman;

// if ($selected_pembayaran == 'Transfer Bank') {

// } elseif ($selected_pembayaran == 'Cash on Delivery (COD)') {

// } else {

// }

header("Location: payment_result.php");
?>