<?php
require '../session.php';
include "../includes/koneksi.php";

// Function to fetch promotions from the database
function getPromotions($type = '')
{
    global $conn;
    $promotions = [];

    if ($type === '') {
        $sql = "SELECT * FROM promotions";
    } else {
        $sql = "SELECT * FROM promotions WHERE type = '$type'";
    }

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $promotions[] = $row;
        }
    }

    return $promotions;
}

// Handle Add to Cart logic
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_to_cart'])) {
    $productId = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    // Assuming you have user authentication in place, get the user ID
    $userId = 1; // Replace with your user authentication logic

    // Add the product to the cart
    $sql = "INSERT INTO carts (user_id, product_id, quantity) VALUES ($userId, $productId, $quantity)";
    $conn->query($sql);

    // Display an alert with the added quantity
    echo '<script>';
    echo 'alert("Added ' . $quantity . ' item(s) to your cart!");';
    echo '</script>';
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Promo</title>
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
                        <a class="nav-link" aria-current="page" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown me-3">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
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
                        <a class="nav-link active" href="#">Promo</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="keranjang.php" tabindex="-1" aria-disabled="true"><i
                                class="bi bi-cart2"></i>Cart</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="../logout.php" tabindex="-1" aria-disabled="true"><i
                                class="bi bi-box-arrow-left"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Banner -->
    <div class="container-fluid banner-produk">
        <div class="container">
            <div class="row">
                <h3 class="text-light display-6 mx-5 ml-5">
                    Selamat Datang <br />di Cafe<span> China</span>
                </h3>
                <h5 class="text-light opacity-75 mx-5 ml-5 mt-2">
                    Ayo kunjungi cafe dengan nuansa china,
                    <br class="d-none d-md-block" />
                    kapan lagi nongki serasa di china
                </h5>
            </div>
        </div>
    </div>

    <!-- Promo -->
    <div class="container-fluid py-5">
        <div class="container">
            <!-- kategori promo -->
            <div id="divku" class="row justify-content-center mb-4">
                <div id="btnall" onclick="filterPromo('all')" class="col-sm-4 col-md-3 col-lg-2">
                    <button
                        class="btn btn-promo w-100 fs-6 mb-3 <?php echo isset($_GET['type']) && $_GET['type'] === 'all' ? 'activate' : ''; ?>">
                        All Promo
                    </button>
                </div>
                <div id="btndiskon" onclick="filterPromo('diskon')" class="col-sm-4 col-md-3 col-lg-2">
                    <button
                        class="btn btn-promo w-100 fs-6 mb-3 <?php echo isset($_GET['type']) && $_GET['type'] === 'diskon' ? 'activate' : ''; ?>">
                        Promo Diskon
                    </button>
                </div>
                <div id="btnpromo" onclick="filterPromo('bonus')" class="col-sm-4 col-md-3 col-lg-2">
                    <button
                        class="btn btn-promo w-100 fs-6 mb-3 <?php echo isset($_GET['type']) && $_GET['type'] === 'bonus' ? 'activate' : ''; ?>">
                        Promo Bonus
                    </button>
                </div>
            </div>

            <!-- Isi Promo -->
            <!-- All Promo -->
            <div id="semuapromo">
                <div class="row justify-content-center">

                    <?php
                    $typeFilter = isset($_GET['type']) ? $_GET['type'] : 'all';

                    $sql = "SELECT products.product_id, products.product_name, products.imagePath, products.price, promotions.type, promotions.description
                            FROM promotions
                            JOIN products ON promotions.product_id = products.product_id";

                    if ($typeFilter !== 'all') {
                        $sql .= " WHERE promotions.type = '$typeFilter'";
                    }

                    $sql .= " ORDER BY promotions.type, promotions.created_at DESC";

                    $result = mysqli_query($conn, $sql);

                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<div class="col-6 col-sm-6 col-lg-3 mb-3">';
                            echo '<div class="card" data-aos="zoom-in-down">';
                            echo '<a href="' . $row['imagePath'] . '" data-lightbox="Produk" data-title="' . $row['product_name'] . '">';
                            echo '<img src="' . $row['imagePath'] . '" class="card-img-top" alt="..." />';
                            echo '</a>';
                            echo '<div class="card-body">';
                            echo '<h6 class="card-title text-center fs-5">' . $row['product_name'] . '</h6>';
                            echo '<p class="text-center">' . $row['description'] . '</p>';
                            echo '<form action="" method="post">';
                            echo '<h5 class="text-center text-danger mb-3">Rp.' . number_format($row['price'], 0, ',', '.') . '</h5>';
                            echo '<input type="hidden" name="product_id" value="' . $row['product_id'] . '">';
                            echo '<div class="form-group">';
                            echo '<label for="quantity"></label>';
                            echo '<input type="number" name="quantity" id="quantity" class="mb-2 btn-produk form-control" value="1" min="1">';
                            echo '</div>';
                            echo '<button type="submit" class="btn btn-promo w-100" name="add_to_cart">Add To Cart</button>';
                            echo '</form>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }

                    ?>

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
                        <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social"
                            href="https://www.facebook.com/profile.php?id=100009281760851"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social"
                            href="https://www.youtube.com/channel/UC8NhEuvVu0tQHqpRHKP6rnw"><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social"
                            href="https://www.instagram.com/ramadhan_agung_/?hl=en"><i class="bi bi-instagram"></i></a>
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

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
    <script src="../assets/js/lightbox-plus-jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"
        integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous"
        async></script>
    <script src="../assets/js/script.js"></script>
    <script>
        function filterPromo(type) {
            window.location.href = 'promo.php?type=' + type;
        }
    </script>
    <script>
        AOS.init({
            duration: 500,
            offset: 50,
            once: true
        });

    </script>
</body>

</html>
<?php
$conn->close();
?>