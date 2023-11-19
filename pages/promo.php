<!DOCTYPE html>
<html>

<head>
    <title>Promo Kafe Kita</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
    <link rel="stylesheet" href="dist/css/lightbox.min.css" />
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-black fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <a class="navbar-brand" href="#">Cafe<span> China</span>.</a>
                <ul class="navbar-nav ms-auto d-flex gap-3">
                    <li class="nav-item me-3">
                        <a class="nav-link" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item dropdown me-3">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Product
                        </a>
                        <ul class="dropdown-menu bg-black" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item nav-link btn-nav" href="makan.html">Food</a>
                            </li>
                            <li>
                                <a class="dropdown-item nav-link btn-nav" href="minum.html">Drink</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link active" href="promo.html">Promo</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="keranjang.html" tabindex="-1" aria-disabled="true"><i
                                class="bi bi-cart2"></i>Cart</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="login.html" tabindex="-1" aria-disabled="true"><i
                                class="bi bi-person-fill"></i>Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Banner -->
    <div class="container-fluid banner-produk">
        <div class="container">
            <div class="row">
                <h3 class="text-light display-6 mx-3 mt-2">
                    Selamat Datang <br />di Cafe<span> China</span>
                </h3>
                <h5 class="text-light opacity-75 mx-3 mt-2">
                    Ayo kunjungi cafe dengan nuansa china,
                    <br class="d-none d-md-block" />
                    kapan lagi nongki serasa di china
                </h5>
            </div>
        </div>
    </div>

    <!-- promo -->
    <div class="container-fluid py-5">
        <div class="container">
            <!-- kategori promo -->
            <div id="divku" class="row justify-content-center mb-4">
                <div id="btnall" onclick="showall()" class="col-sm-4 col-md-3 col-lg-2">
                    <button class="btn btn-promo w-100 fs-6 mb-3 activate">
                        All Promo
                    </button>
                </div>
                <div id="btndiskon" onclick="showdiskon()" class="col-sm-4 col-md-3 col-lg-2">
                    <button class="btn btn-promo w-100 fs-6 mb-3">Promo Diskon</button>
                </div>
                <div id="btnpromo" onclick="showbonus()" class="col-sm-4 col-md-3 col-lg-2">
                    <button class="btn btn-promo w-100 fs-6 mb-3">Promo Bonus</button>
                </div>
            </div>

            <!-- Isi Promo -->
            <!-- Semua Promo -->
            <div id="semuapromo">
                <div class="row justify-content-center">
                    <div class="col-6 col-sm-6 col-lg-3 mb-3">
                        <div class="card">
                            <a href="image/produk/coffee.jpg" data-lightbox="Produk" data-title="Coffee">
                                <img src="image/coffee.jpg" class="card-img-top" alt="..." />
                            </a>
                            <div class="card-body">
                                <h6 class="card-title text-center fs-5">Coffee</h6>
                                <p class="text-center">
                                    Diskon 20% untuk pembelian 1 gelas Coffee
                                </p>
                                <button class="btn btn-promo w-100">Add To Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-sm-6 col-lg-3 mb-3">
                        <div class="card">
                            <a href="produk1/img/Indonesian/Klepon.jpeg" data-lightbox="Produk" data-title="Klepon">
                                <img src="produk1/img/Indonesian/Klepon 1.jpeg" class="card-img-top" alt="..." />
                            </a>
                            <div class="card-body">
                                <h5 class="card-title text-center fs-5">Klepon</h5>
                                <p class="text-center">
                                    Jika beli 1 porsi klepon akan dapat gula merah
                                </p>
                                <button class="btn btn-promo w-100">Add To Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-sm-6 col-lg-3 mb-3">
                        <div class="card">
                            <a href="produk1/img/Japanese/Chicken Katsudon.jpg" data-lightbox="Produk"
                                data-title="Chicken Katsudon">
                                <img src="produk1/img/Japanese/Chicken Katsudon1.jpg" class="card-img-top" alt="..." />
                            </a>
                            <div class="card-body">
                                <h5 class="card-title text-center fs-5">Chicken Katsudon</h5>
                                <p class="text-center">
                                    Gratis garpu yang bisa dibawa pulang untuk kenangan
                                </p>
                                <button class="btn btn-promo w-100">Add To Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-sm-6 col-lg-3 mb-3">
                        <div class="card">
                            <a href="produk1/img/Western/Mochacindo.jpg" data-lightbox="Produk" data-title="Mochacindo">
                                <img src="produk1/img/Western/Mochacindo (Square).jpg" class="card-img-top" alt="..." />
                            </a>
                            <div class="card-body">
                                <h5 class="card-title text-center fs-5">Mochacindo</h5>
                                <p class="text-center">
                                    Beli 1 gratis ??? Gratis bertanya dan memberi saran
                                </p>
                                <button class="btn btn-promo w-100">Add To Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-sm-6 col-lg-3 mb-3">
                        <div class="card">
                            <a href="produk1/img/Japanese/Dorayaki.jpeg" data-lightbox="Produk" data-title="Dorayaki">
                                <img src="produk1/img/Japanese/Dorayaki.jpeg" class="card-img-top" alt="..." />
                            </a>
                            <div class="card-body">
                                <h6 class="card-title text-center fs-5">Dorayaki</h6>
                                <p class="text-center">
                                    Diskon 5% untuk pembelian 3 buah Dorayaki
                                </p>
                                <button class="btn btn-promo w-100">Add To Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-sm-6 col-lg-3 mb-3">
                        <div class="card">
                            <a href="produk1/img/Chinese/Dim Sum.jpg" data-lightbox="Produk" data-title="Dim Sum">
                                <img src="produk1/img/Chinese/Dim Sum1.jpg" class="card-img-top" alt="..." />
                            </a>
                            <div class="card-body">
                                <h4 class="card-title text-center fs-5">Dim Sum</h4>
                                <p class="text-center">
                                    Diskon 10% untuk pembelian 1 porsi dimsum
                                </p>
                                <button class="btn btn-promo w-100">Add To Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Promo Diskon -->
            <div id="promodiskon">
                <div class="row justify-content-center">
                    <div class="col-6 col-sm-6 col-lg-3 mb-3">
                        <div class="card">
                            <a href="image/produk/coffee.jpg" data-lightbox="Produk" data-title="Coffee">
                                <img src="image/coffee.jpg" class="card-img-top" alt="..." />
                            </a>
                            <div class="card-body">
                                <h6 class="card-title text-center fs-5">Coffee</h6>
                                <p class="text-center">
                                    Diskon 20% untuk pembelian 1 gelas kopi
                                </p>
                                <button class="btn btn-promo w-100">Add To Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-sm-6 col-lg-3 mb-3">
                        <div class="card">
                            <a href="produk1/img/Chinese/Dim Sum.jpg" data-lightbox="Produk" data-title="Dim Sum">
                                <img src="produk1/img/Chinese/Dim Sum1.jpg" class="card-img-top" alt="..." />
                            </a>
                            <div class="card-body">
                                <h6 class="card-title text-center fs-5">Dim Sum</h6>
                                <p class="text-center">
                                    Diskon 10% untuk pembelian 1 porsi dimsum
                                </p>
                                <button class="btn btn-promo w-100">Add To Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-sm-6 col-lg-3 mb-3">
                        <div class="card">
                            <a href="produk1/img/Japanese/Dorayaki.jpeg" data-lightbox="Produk" data-title="Dorayaki">
                                <img src="produk1/img/Japanese/Dorayaki.jpeg" class="card-img-top" alt="..." />
                            </a>
                            <div class="card-body">
                                <h6 class="card-title text-center fs-5">Dorayaki</h6>
                                <p class="text-center">
                                    Diskon 5% untuk pembelian 3 buah Dorayaki
                                </p>
                                <button class="btn btn-promo w-100">Add To Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Promo Bonus -->
            <div id="promobonus">
                <div class="row justify-content-center">
                    <div class="col-6 col-sm-6 col-lg-3 mb-3">
                        <div class="card">
                            <a href="produk1/img/Indonesian/Klepon.jpeg" data-lightbox="Produk" data-title="Klepon">
                                <img src="produk1/img/Indonesian/Klepon 1.jpeg" class="card-img-top" alt="..." />
                            </a>
                            <div class="card-body">
                                <h5 class="card-title text-center fs-5">Klepon</h5>
                                <p class="text-center">
                                    Jika beli 1 porsi klepon akan dapat gula merah
                                </p>
                                <button class="btn btn-promo w-100">Add To Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-sm-6 col-lg-3 mb-3">
                        <div class="card">
                            <a href="produk1/img/Japanese/Chicken Katsudon.jpg" data-lightbox="Produk"
                                data-title="Chicken Katsudon">
                                <img src="produk1/img/Japanese/Chicken Katsudon1.jpg" class="card-img-top" alt="..." />
                            </a>
                            <div class="card-body">
                                <h5 class="card-title text-center fs-5">Chicken Katsudon</h5>
                                <p class="text-center">
                                    Gratis garpu yang bisa dibawa pulang untuk kenangan
                                </p>
                                <button class="btn btn-promo w-100">Add To Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-sm-6 col-lg-3 mb-3">
                        <div class="card">
                            <a href="produk1/img/Western/Mochacindo.jpg" data-lightbox="Produk" data-title="Mochacindo">
                                <img src="produk1/img/Western/Mochacindo (Square).jpg" class="card-img-top" alt="..." />
                            </a>
                            <div class="card-body">
                                <h5 class="card-title text-center fs-5">Mochacindo</h5>
                                <p class="text-center">
                                    Beli 1 gratis ??? Gratis bertanya dan memberi saran
                                </p>
                                <button class="btn btn-promo w-100">Add To Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PHP -->
    <section>
        <h2>Promo Hari Ini</h2>
        <ul>
            <?php

            // Hubungkan ke database MySQL
            $conn = new mysqli("localhost", "root", "", "kafe_cina");

            if ($conn->connect_error) {
                die("Koneksi gagal: " . $conn->connect_error);
            }

            // Query SQL untuk mengambil data promo
            $sql = "SELECT * FROM promotions";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<li>" . $row["promo_name"] . " - " . $row["description"] . "</li>";
                }
            } else {
                echo "Tidak ada promo yang tersedia.";
            }

            $conn->close();
            ?>
        </ul>
    </section>

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
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="bi bi-instagram"></i></a>
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
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
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
                            <a class="" href="index.html">Home</a>
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

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
    <script src="dist/js/lightbox-plus-jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"
        integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous"
        async></script>
    <script src="../assets/js/script.js"></script>
</body>

</html>