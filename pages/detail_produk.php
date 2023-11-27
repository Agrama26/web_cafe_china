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

    <!-- Produk -->
    <div class="container py-5 pt-5">
        <div class="row mt-3">
            <div class="col-lg-6">
                <div class="card">
                    <a href="<?php echo $productData['imagePath']; ?>" data-lightbox="products"
                        data-title="<?php echo $productData['product_name']; ?>">
                        <img src="<?php echo $productData['imagePath']; ?>" class="card-img-top" alt="404" />
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
                        <div class="dropdown">
                            <button class="btn btn-produk dropdown-toggle w-100" type="button" id="dropdownMenuLink"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                More
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li>
                                    <a class="dropdown-item" href="#">Add To Cart</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
    <script src="../assets/js/lightbox-plus-jquery.min.js"></script>
</body>

</html>