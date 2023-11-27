<?php
session_start();
include "../includes/koneksi.php";

$productID = isset($_GET['id']) ? $_GET['id'] : 1;

$sql = "SELECT * FROM products WHERE product_id = $productID";
$result = mysqli_query($conn, $sql);

if ($result) {
    $productData = mysqli_fetch_assoc($result);
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details -
        <?php echo $productData['name']; ?>
    </title>
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
</head>

<body>
    <!-- Navbar -->
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

    <!-- Produk -->
    <div class="container">
        <div class="container pt-3 pd-1">
            <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="produk.php">Product</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">All</a></li>
                    <li class="breadcrumb-item active">
                        <?php echo $productData['product_name']; ?>
                    </li>
                </ol>
            </nav>
        </div>
        <div class="row mb-5 ">
            <div class="col-lg-6">
                <div class="card">
                    <a href="<?php echo $productData['imagePath']; ?>" data-lightbox="products"
                        data-title="<?php echo $productData['product_name']; ?>">
                        <img src="<?php echo $productData['imagePath']; ?>" class="card-img-top img-thumbnail"
                            alt="404" />
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center text-danger">
                            <strong>
                                <?php echo $productData['product_name']; ?>
                            </strong>
                        </h2>
                        <h3 class="text-center text-danger mb-3">Rp.
                            <?php echo number_format($productData['price'], 0, ',', '.'); ?>
                        </h3>
                        <p>
                            <?php echo $productData['description']; ?>
                        </p>
                        <p><strong>Category : </strong>
                            <?php echo $productData['country_origin']; ?>
                        </p>
                        <button type="button" class="w-100 btn btn-danger px-5 mt-2 mb-2" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Add To Cart
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">
                                            Would You Like Add To Cart
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="number" value="2" class="form-control input-kuantitas" />
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                                            Cancel
                                        </button>
                                        <button type="button" class="btn btn-primary">Add</button>
                                    </div>
                                </div>
                            </div>
                        </div>
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

    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
    <script src="../assets/js/lightbox-plus-jquery.min.js"></script>
</body>

</html>