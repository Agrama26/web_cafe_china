<?php
session_start();
include "../includes/koneksi.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Menu Produk - Kafe Kita</title>
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
    <link rel="stylesheet" href="../assets/css/lightbox.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
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
                        <a class="nav-link" aria-current="page" href="../admin/index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown me-3">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Product
                        </a>
                        <ul class="dropdown-menu bg-black" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item nav-link btn-nav active" href="#">Food</a>
                            </li>
                            <li>
                                <a class="dropdown-item nav-link btn-nav" href="#">Drink</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="promo.php">Promo</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="keranjang.php" tabindex="-1" aria-disabled="true"><i
                                class="bi bi-cart2"></i>Cart</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="../admin/logout.php" tabindex="-1" aria-disabled="true"><i
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

    <!-- Produknya Makan -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <!-- Kategori -->
                <div class="text-center mb-5">
                    <h5 class="mb-3">Category</h5>
                    <!-- <ul class="list-group mt-4">
                        <li class="list-group-item active-danger btn-produk">All</li>
                        <li class="list-group-item btn-produk">
                            <a class="text-dark" style="text-decoration: none" href="produk1/Chinese.html">Chinese</a>
                        </li>
                        <li class="list-group-item btn-produk">
                            <a class="text-dark" style="text-decoration: none" href="produk1/Local.html">Local</a>
                        </li>
                        <li class="list-group-item btn-produk">
                            <a class="text-dark" style="text-decoration: none" href="produk1/Japanese.html">Japanese</a>
                        </li>
                        <li class="list-group-item btn-produk">
                            <a class="text-dark" style="text-decoration: none" href="produk1/Western.html">Western</a>
                        </li>
                    </ul> -->
                    <div class="text-center pt-3">
                        <button class="btn btn-produk" onclick="showProducts('All')">All</button>
                        <button class="btn btn-produk" onclick="showProducts('Chinese')">Cina</button>
                        <button class="btn btn-produk" onclick="showProducts('Japanese')">Jepang</button>
                        <button class="btn btn-produk" onclick="showProducts('Western')">Western</button>
                        <button class="btn btn-produk" onclick="showProducts('Lokal')">Indonesia</button>
                    </div>
                </div>
                <!-- Produk -->
                <div class="container-fluid ">
                    <h5 class="text-center"></h5>
                    <div class="row justify-content-center">
                        <?php
                        $sql = "SELECT * FROM products ORDER BY category, country_origin";
                        $result = mysqli_query($conn, $sql);

                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<div data-aos="zoom-in-down" class="col-6 col-sm-6 col-lg-3 mb-4 product-item ' . $row['country_origin'] . '"> ';
                                echo '<div class="card">';
                                echo '<a href="detail_produk.php?id=' . $row['product_id'] . '" data-lightbox="products" data-title="' . $row['product_name'] . '">';
                                echo '<img src="' . $row['imagePath'] . '" class="card-img-top" alt="404" />';
                                echo '</a>';
                                echo '<div class="card-body">';
                                echo '<h5 class="card-title text-center text-danger">';
                                echo '<strong>' . $row['product_name'] . '</strong>';
                                echo '</h5>';
                                echo '<h5 class="text-center text-danger mb-3">Rp.' . number_format($row['price'], 0, ',', '.') . '</h5>';
                                echo '<div class="dropdown">';
                                echo '<a class="btn btn-produk dropdown-toggle w-100" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">';
                                echo 'More';
                                echo '</a>';
                                echo '<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">';
                                echo '<li>';
                                echo '<a class="dropdown-item" href="detail_produk.php?id=' . $row['product_id'] . '">Details</a>';
                                echo '</li>';
                                echo '<li>';
                                echo '<a class="dropdown-item" href="keranjang.php?action=add&id=' . $row['product_id'] . '">Add To Cart</a>';
                                echo '</li>';
                                echo '</ul>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                            }
                        } else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        }

                        mysqli_close($conn);
                        ?>

                        <!-- Pagination -->
                        <nav class="mt-4 d-flex justify-content-center" aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link btn-produk" href="#">Previous</a>
                                </li>
                                <li class="page-item agination-active-bg">
                                    <a class="page-link btn-produk" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link btn-produk" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link btn-produk" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link btn-produk" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

    <!-- Script -->
    <script>
        function showProducts(category) {
            // Semua item produk
            var products = document.querySelectorAll('.product-item');

            // Menyembunyikan semua item produk
            products.forEach(function (product) {
                product.style.display = 'none';
            });

            // Menampilkan item produk berdasarkan kategori yang dipilih
            if (category === 'All') {
                // Menampilkan semua produk
                products.forEach(function (product) {
                    product.style.display = 'block';
                });
            } else {
                // Menampilkan produk sesuai kategori
                var selectedProducts = document.querySelectorAll('.' + category);
                selectedProducts.forEach(function (product) {
                    product.style.display = 'block';
                });
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
    <script src="../assets/js/lightbox-plus-jquery.min.js"></script>
    <script>
        AOS.init({
            duration: 500, // Durasi animasi dalam milidetik
            offset: 50, // Offset untuk memicu animasi lebih awal atau lebih lambat
            once: true // Animasi hanya akan dimainkan satu kali
        });
    </script>
</body>

</html>