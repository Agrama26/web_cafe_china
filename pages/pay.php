<?php
require '../admin/session.php';
include "../includes/koneksi.php";

$cartTotal = 0;

$sqlCart = "SELECT products.product_name, products.price, carts.quantity
            FROM carts
            JOIN products ON carts.product_id = products.product_id
            WHERE carts.user_id = 1"; // Replace with your user authentication logic

$resultCart = mysqli_query($conn, $sqlCart);
if ($resultCart) {
  while ($cartItem = mysqli_fetch_assoc($resultCart)) {
    $cartTotal += $cartItem['price'] * $cartItem['quantity'];
  }
} else {
  echo "Error: " . $sqlCart . "<br>" . mysqli_error($conn);
}
?>

<!DOCTYPE html>
<html>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Cafe China | Bayar</title>
  <!-- icon -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
    rel="stylesheet" />

  <!-- style -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="../assets/css/style.css" />
</head>

<body>
  <!-- Nav -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-black">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <a class="navbar-brand" href="#">Cafe<span> China</span>.</a>
        <ul class="navbar-nav ms-auto d-flex gap-3">
          <li class="nav-item me-3">
            <a class="nav-link" aria-current="page" href="../admin/index.php">Home</a>
          </li>
          <li class="nav-item dropdown me-3">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Product
            </a>
            <ul class="dropdown-menu bg-black" aria-labelledby="navbarDropdown">
              <li>
                <a class="dropdown-item nav-link btn-nav" href="produk.php">Food</a>
              </li>
              <li>
                <a class="dropdown-item nav-link btn-nav" href="produk1.php">Drink</a>
              </li>
            </ul>
          </li>
          <li class="nav-item me-3">
            <a class="nav-link" href="promo.php">Promo</a>
          </li>
          <li class="nav-item me-3">
            <a class="nav-link active" href="keranjang.php" tabindex="-1" aria-disabled="true"><i
                class="bi bi-cart2"></i>Cart</a>
          </li>
          <li class="nav-item me-3">
            <a class="nav-link" href="../admin/logout.php" tabindex="-1" aria-disabled="true"><i
                class="bi bi-box-arrow-left"></i>Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- halaman -->
  <div class="container-fluid py-3">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="text-judul-halaman">Pembayaran</h1>
        </div>
      </div>

      <div class="row">
        <!-- KOLOM 1 -->
        <div class="col-md-7">
          <form action="process_bayar.php" method="post">
            <label class="w-100 mb-3">
              Alamat <br />
              <input type="text" name="alamat" class="form-control" />
            </label>
            <label class="w-100 mb-3">
              No Rumah <br />
              <input type="number" name="no_rumah" class="form-control" />
            </label>
            <label class="w-100" for="exampleFormControlTextarea1">Detail Alamat</label>
            <textarea name="detail_alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>

            <h3 class="text-judul mt-5">Kurir Pengiriman</h3>
            <label class="w-100 mb-3 border rounded p-2">
              <input type="radio" name="kurir" />
              <img src="../assets/images/logo/kurir-1.png" />
              <span class="float-end">+ Rp 10.000</span>
            </label>
            <label class="w-100 mb-3 border rounded p-2">
              <input type="radio" name="kurir" />
              <img src="../assets/images/logo/kurir-2.png" />
              <span class="float-end">+ Rp 12.000</span>
            </label>

            <h3 class="text-judul mt-5">Metode Pembayaran</h3>
            <label class="w-100 mb-3 border rounded p-2">
              <input type="radio" name="pembayaran" />
              Transfer Bank
            </label>
            <label class="w-100 mb-3 border rounded p-2">
              <input type="radio" name="pembayaran" />
              Cash on Delivery (COD)
            </label>
            <label class="w-100 mb-3 border rounded p-2">
              <input type="radio" name="pembayaran" />
              <img src="../assets/images/logo/bayar-1.png" />
            </label>
            <label class="w-100 mb-3 border rounded p-2">
              <input type="radio" name="pembayaran" />
              <img src="../assets/images/logo/bayar-2.png" />
            </label>
            <label class="w-100 mb-3 border rounded p-2">
              <input type="radio" name="pembayaran" />
              <img src="../assets/images/logo/bayar-3.png" />
            </label>
          </form>
        </div>

        <!-- KOLOM 2 -->
        <div class="col-md-4 offset-md-1 py-3">
          <div class="card sticky-top">
            <form action="process_bayar.php" method="post">
              <div class="card-header bg-white">
                <h3 class="text-judul">Detail Pembayaran</h3>
              </div>
              <div class="card-body">
                <div class="row mt-2 mb-2">
                  <div class="col-md"><small>Sub Total</small></div>
                  <div class="col-md">Rp.
                    <?= number_format($cartTotal, 0, ',', '.') ?>
                  </div>
                </div>
                <div class="row mt-2 mb-2">
                  <div class="col-md"><small>Biaya pengiriman</small></div>
                  <div class="col-md">Rp. 10.000</div>
                </div>
                <div class="row mt-2 mb-2">
                  <div class="col-md"><small>Total</small></div>
                  <div class="col-md">Rp 156.000</div>
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-lg btn-danger w-100">
                  Bayar
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- halaman -->

  <!-- Footer Start -->
  <div class="container-fluid bg-black footer text-light fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
      <div class="row g-5">
        <div class="col-lg-3 col-md-6">
          <h4 class="text-start section-judul mb-4">Company</h4>
          <a class="btn btn-link" href="">About Us</a>
          <a class="btn btn-link" href="">Contact Us</a>
          <a class="btn btn-link" href="">Reservation</a>
          <a class="btn btn-link" href="">Privacy Policy</a>
          <a class="btn btn-link" href="">Terms & Condition</a>
        </div>
        <div class="col-lg-3 col-md-6">
          <h4 class="text-start section-judul mb-4">Contact</h4>
          <p class="mb-2">
            <i class="fa fa-map-marker-alt me-3"></i>Buket Rata, Lhokseumawe
          </p>
          <p class="mb-2">
            <i class="fa fa-phone-alt me-3"></i>+62 845 6789 1290
          </p>
          <p class="mb-2">
            <i class="fa fa-envelope me-3"></i>kelompok2@gmail.com
          </p>
          <div class="d-flex pt-2">
            <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-twitter"></i></a>
            <a class="btn btn-outline-light btn-social"
              href="https://www.facebook.com/profile.php?id=100009281760851"><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-outline-light btn-social"
              href="https://www.youtube.com/channel/UC8NhEuvVu0tQHqpRHKP6rnw"><i class="fab fa-youtube"></i></a>
            <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/ramadhan_agung_/?hl=en"><i
                class="bi bi-instagram"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <h4 class="section-judul text-start mb-4">Opening</h4>
          <h5 class="text-light">Monday - Saturday</h5>
          <p>09AM - 08PM</p>
          <h5 class="text-light">Sunday</h5>
          <p>10AM - 11PM</p>
        </div>
        <div class="col-lg-3 col-md-6">
          <h4 class="section-judul text-start mb-4">Newsletter</h4>
          <p>Besok Tutup ges</p>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="copyright">
        <div class="row">
          <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
            &copy;
            <a class="text-light" style="text-decoration: none" href="#">Cina Punya</a>
            | Kelompok2
          </div>
          <div class="col-md-6 text-center text-md-end">
            <div class="footer-menu">
              <a class="" href="#">Home</a>
              <a class="" href="">Cookies</a>
              <a class="" href="">Help</a>
              <a class="" href="">FQAs</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer End -->

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
    crossorigin="anonymous"></script>
  <script src="../assets/js/lightbox-plus-jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"
    integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous"
    async></script>

  <link rel="stylesheet" type="text/css" href="../assets/css/custom.css" />
</body>

</html>