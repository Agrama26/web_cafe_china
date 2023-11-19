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
                                <a class="dropdown-item nav-link btn-nav" href="minum.html">Drink</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="promo.php">Promo</a>
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

    <!-- Produknya Makan -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <!-- Kategori -->
                <div class="col-md-4 col-lg-3 mb-5">
                    <h5>Category</h5>
                    <ul class="list-group mt-4">
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
                    </ul>
                </div>
                <!-- Produk -->
                <div class="col-md-8 col-lg-9">
                    <h5 class="text-center">All</h5>
                    <div class="row">
                        <div class="col-6 col-sm-6 col-lg-4 mt-3 mb-2">
                            <div class="card">
                                <a href="produk1/img/Indonesian/Klepon.jpeg" data-lightbox="kopi" data-title="Klepon">
                                    <img src="produk1/img/Indonesian/Klepon 1.jpeg" class="card-img-top" alt="404" />
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title text-center text-danger">
                                        <strong>Klepon</strong>
                                    </h5>
                                    <h5 class="text-center text-danger mb-3">Rp.18.000</h5>
                                    <div class="dropdown">
                                        <a class="btn btn-produk dropdown-toggle w-100" href="#" role="button"
                                            id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                            More
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li>
                                                <a class="dropdown-item" href="detail_1.html">Details</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Add To Cart</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-6 col-lg-4 mt-3 mb-2">
                            <div class="card">
                                <a href="produk1/img/Chinese/Chow-Mein.jpg" data-lightbox="kopi" data-title="Chou Mein">
                                    <img src="produk1/img/Chinese/Chow-Mein1.jpg" class="card-img-top" alt="404" />
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title text-center text-danger">
                                        <strong>Chou Mein</strong>
                                    </h5>
                                    <h5 class="text-center text-danger mb-3">Rp.18.000</h5>
                                    <div class="dropdown">
                                        <a class="btn btn-produk dropdown-toggle w-100" href="#" role="button"
                                            id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                            More
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li>
                                                <a class="dropdown-item" href="detail_1.html">Details</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Add To Cart</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-6 col-lg-4 mt-3 mb-2">
                            <div class="card">
                                <a href="produk1/img/Chinese/Jiaozi.jpg" data-lightbox="kopi" data-title="Jiaozi">
                                    <img src="produk1/img/Chinese/Jiaozi1.jpg" class="card-img-top" alt="404" />
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title text-center text-danger">
                                        <strong>Jiaozi</strong>
                                    </h5>
                                    <h5 class="text-center text-danger mb-3">Rp.18.000</h5>
                                    <div class="dropdown">
                                        <a class="btn btn-produk dropdown-toggle w-100" href="#" role="button"
                                            id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                            More
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li>
                                                <a class="dropdown-item" href="detail_1.html">Details</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Add To Cart</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-6 col-lg-4 mt-3 mb-2">
                            <div class="card">
                                <a href="produk1/img/Chinese/Zhajiangmian.jpg" data-lightbox="kopi"
                                    data-title="Zhajiangmian">
                                    <img src="produk1/img/Chinese/Zhajiangmian2.jpg" class="card-img-top" alt="404" />
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title text-center text-danger">
                                        <strong>Zhajiangmian</strong>
                                    </h5>
                                    <h5 class="text-center text-danger mb-3">Rp.18.000</h5>
                                    <div class="dropdown">
                                        <a class="btn btn-produk dropdown-toggle w-100" href="#" role="button"
                                            id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                            More
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li>
                                                <a class="dropdown-item" href="detail_1.html">Details</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Add To Cart</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-6 col-lg-4 mt-3 mb-2">
                            <div class="card">
                                <a href="produk1/img/Japanese/Dorayaki.jpeg" data-lightbox="kopi" data-title="Dorayaki">
                                    <img src="produk1/img/Japanese/Dorayaki.jpeg" class="card-img-top" alt="404" />
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title text-center text-danger">
                                        <strong>Dorayaki</strong>
                                    </h5>
                                    <h5 class="text-center text-danger mb-3">Rp.18.000</h5>
                                    <div class="dropdown">
                                        <a class="btn btn-produk dropdown-toggle w-100" href="#" role="button"
                                            id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                            More
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li>
                                                <a class="dropdown-item" href="detail_1.html">Details</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Add To Cart</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-6 col-lg-4 mt-3 mb-2">
                            <div class="card">
                                <a href="produk1/img/Indonesian/Kue Lupis.jpeg" data-lightbox="kopi" data-title="Lupis">
                                    <img src="produk1/img/Indonesian/Kue Lupis1.jpeg" class="card-img-top" alt="404" />
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title text-center text-danger">
                                        <strong>Lupis</strong>
                                    </h5>
                                    <h5 class="text-center text-danger mb-3">Rp.18.000</h5>
                                    <div class="dropdown">
                                        <a class="btn btn-produk dropdown-toggle w-100" href="#" role="button"
                                            id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                            More
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li>
                                                <a class="dropdown-item" href="detail_1.html">Details</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Add To Cart</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-6 col-lg-4 mt-3 mb-2">
                            <div class="card">
                                <a href="produk1/img/Japanese/Kibi Dango.jpeg" data-lightbox="kopi" data-title="Dango">
                                    <img src="produk1/img/Japanese/Kibi Dango.jpeg" class="card-img-top" alt="404" />
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title text-center text-danger">
                                        <strong>Kibi Dango</strong>
                                    </h5>
                                    <h5 class="text-center text-danger mb-3">Rp.18.000</h5>
                                    <div class="dropdown">
                                        <a class="btn btn-produk dropdown-toggle w-100" href="#" role="button"
                                            id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                            More
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li>
                                                <a class="dropdown-item" href="detail_1.html">Details</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Add To Cart</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-6 col-lg-4 mt-3 mb-2">
                            <div class="card">
                                <a href="produk1/img/Western/burger.jpg" data-lightbox="kopi" data-title="Burger">
                                    <img src="produk1/img/Western/burger1.jpg" class="card-img-top" alt="404" />
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title text-center text-danger">
                                        <strong>Burger</strong>
                                    </h5>
                                    <h5 class="text-center text-danger mb-3">Rp.18.000</h5>
                                    <div class="dropdown">
                                        <a class="btn btn-produk dropdown-toggle w-100" href="#" role="button"
                                            id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                            More
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li>
                                                <a class="dropdown-item" href="detail_1.html">Details</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Add To Cart</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-6 col-lg-4 mt-3 mb-2">
                            <div class="card">
                                <a href="produk1/img/Indonesian/tahuwalek.png" data-lightbox="kopi"
                                    data-title="Tahu walek">
                                    <img src="produk1/img/Indonesian/tahuwalek1.png" class="card-img-top" alt="404" />
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title text-center text-danger">
                                        <strong>Tahu Walek</strong>
                                    </h5>
                                    <h5 class="text-center text-danger mb-3">Rp.18.000</h5>
                                    <div class="dropdown">
                                        <a class="btn btn-produk dropdown-toggle w-100" href="#" role="button"
                                            id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                            More
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li>
                                                <a class="dropdown-item" href="detail_1.html">Details</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Add To Cart</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

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

    <!-- PHP -->
    <section>
        <h2>Makanan</h2>
        <ul>
            <?php

            // Hubungkan ke database MySQL
            $conn = new mysqli("localhost", "root", "", "kafe_cina");

            if ($conn->connect_error) {
                die("Koneksi gagal: " . $conn->connect_error);
            }

            // Query SQL untuk mengambil data makanan
            $sql = "SELECT * FROM products WHERE product_type = 'Makanan'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<li>" . $row["product_name"] . " - $" . $row["price"] . "</li>";
                }
            } else {
                echo "Tidak ada makanan yang tersedia.";
            }

            $conn->close();
            ?>
        </ul>
    </section>

    <!-- Produknya Minum -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <!-- Kategori -->
                <div class="col-md-4 col-lg-3 mb-5">
                    <h5>Category</h5>
                    <ul class="list-group mt-4">
                        <li class="list-group-item active-danger btn-produk">All</li>
                        <li class="list-group-item btn-produk">
                            <a class="text-dark" style="text-decoration: none" href="produk1/minum_c.html">Chinese</a>
                        </li>
                        <li class="list-group-item btn-produk">
                            <a class="text-dark" style="text-decoration: none" href="produk1/minum_l.html">Local</a>
                        </li>
                        <li class="list-group-item btn-produk">
                            <a class="text-dark" style="text-decoration: none" href="produk1/minum_j.html">Japanese</a>
                        </li>
                        <li class="list-group-item btn-produk">
                            <a class="text-dark" style="text-decoration: none" href="produk1/minum_w.html">Western</a>
                        </li>
                    </ul>
                </div>
                <!-- Produk -->
                <div class="col-md-8 col-lg-9">
                    <h5 class="text-center">All</h5>
                    <div class="row">
                        <div class="col-6 col-sm-6 col-lg-4 mt-3 mb-2">
                            <div class="card">
                                <a href="image/produk/coffee.jpg" data-lightbox="kopi" data-title="Kopi ajah">
                                    <img src="image/coffee.jpg" class="card-img-top" alt="404" />
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title text-center text-danger">
                                        <strong>Coffee</strong>
                                    </h5>
                                    <h5 class="text-center text-danger mb-3">Rp.18.000</h5>
                                    <div class="dropdown">
                                        <a class="btn btn-produk dropdown-toggle w-100" href="#" role="button"
                                            id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                            More
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li>
                                                <a class="dropdown-item" href="detail_1.html">Details</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Add To Cart</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-6 col-lg-4 mt-3 mb-2">
                            <div class="card">
                                <a href="produk1/img/Chinese/Soy Milk.jpg" data-lightbox="kopi" data-title="Soy Milk">
                                    <img src="produk1/img/Chinese/Soy Milk (Square).jpg" class="card-img-top"
                                        alt="404" />
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title text-center text-danger">
                                        <strong>Soy Milk</strong>
                                    </h5>
                                    <h5 class="text-center text-danger mb-3">Rp.18.000</h5>
                                    <div class="dropdown">
                                        <a class="btn btn-produk dropdown-toggle w-100" href="#" role="button"
                                            id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                            More
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li>
                                                <a class="dropdown-item" href="detail.html">Details</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Add To Cart</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-6 col-lg-4 mt-3 mb-2">
                            <div class="card">
                                <a href="produk1/img/Chinese/Yunnan Coffee.jpeg.jpg" data-lightbox="kopi"
                                    data-title="Yunan Coffee">
                                    <img src="produk1/img/Chinese/Yunnan Coffee (Square).jpeg.jpg" class="card-img-top"
                                        alt="404" />
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title text-center text-danger">
                                        <strong>Yunan Coffee</strong>
                                    </h5>
                                    <h5 class="text-center text-danger mb-3">Rp.18.000</h5>
                                    <div class="dropdown">
                                        <a class="btn btn-produk dropdown-toggle w-100" href="#" role="button"
                                            id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                            More
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li>
                                                <a class="dropdown-item" href="detail.html">Details</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Add To Details</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-6 col-lg-4 mt-3 mb-2">
                            <div class="card">
                                <a href="produk1/img/Chinese/Krisan Tea.jpg" data-lightbox="kopi"
                                    data-title="Krisan Tea">
                                    <img src="produk1/img/Chinese/Krisan Tea (Square).jpg" class="card-img-top"
                                        alt="404" />
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title text-center text-danger">
                                        <strong>Krisan Tea</strong>
                                    </h5>
                                    <h5 class="text-center text-danger mb-3">Rp.18.000</h5>
                                    <div class="dropdown">
                                        <a class="btn btn-produk dropdown-toggle w-100" href="#" role="button"
                                            id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                            More
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li>
                                                <a class="dropdown-item" href="detail.html">Details</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Add To Cart</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-6 col-lg-4 mt-3 mb-2">
                            <div class="card">
                                <a href="produk1/img/Chinese/Plum Juice.jpg" data-lightbox="kopi"
                                    data-title="Plum Juice">
                                    <img src="produk1/img/Chinese/Plum Juice (Square).jpg" class="card-img-top"
                                        alt="404" />
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title text-center text-danger">
                                        <strong>Plum Juice</strong>
                                    </h5>
                                    <h5 class="text-center text-danger mb-3">Rp.18.000</h5>
                                    <div class="dropdown">
                                        <a class="btn btn-produk dropdown-toggle w-100" href="#" role="button"
                                            id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                            More
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li>
                                                <a class="dropdown-item" href="detail.html">Details</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Add To Cart</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-6 col-lg-4 mt-3 mb-2">
                            <div class="card">
                                <a href="produk1/img/Indonesian/Bandrek Susu.jpg" data-lightbox="kopi"
                                    data-title="Bandrek Susu">
                                    <img src="produk1/img/Indonesian/Bandrek Susu (Square).jpg" class="card-img-top"
                                        alt="404" />
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title text-center text-danger">
                                        <strong>Bandrek Susu</strong>
                                    </h5>
                                    <h5 class="text-center text-danger mb-3">Rp.18.000</h5>
                                    <div class="dropdown">
                                        <a class="btn btn-produk dropdown-toggle w-100" href="#" role="button"
                                            id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                            More
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li>
                                                <a class="dropdown-item" href="detail.html">Details</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Add To Cart</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-6 col-lg-4 mt-3 mb-2">
                            <div class="card">
                                <a href="produk1/img/Japanese/Sakura Tea.jpg" data-lightbox="kopi"
                                    data-title="Sakura Tea">
                                    <img src="produk1/img/Japanese/Sakura Tea.jpg" class="card-img-top" alt="404" />
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title text-center text-danger">
                                        <strong>Sakura Tea</strong>
                                    </h5>
                                    <h5 class="text-center text-danger mb-3">Rp.18.000</h5>
                                    <div class="dropdown">
                                        <a class="btn btn-produk dropdown-toggle w-100" href="#" role="button"
                                            id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                            More
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li>
                                                <a class="dropdown-item" href="detail.html">Details</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Add To Cart</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-6 col-lg-4 mt-3 mb-2">
                            <div class="card">
                                <a href="produk1/img/Western/Tripple Berry Frozen.jpg" data-lightbox="kopi"
                                    data-title="Tripple Berry Frozen">
                                    <img src="produk1/img/Western/Tripple Berry Frozen (Square).jpg"
                                        class="card-img-top" alt="404" />
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title text-center text-danger">
                                        <strong>Triple Berry Frozen</strong>
                                    </h5>
                                    <h5 class="text-center text-danger mb-3">Rp.18.000</h5>
                                    <div class="dropdown">
                                        <a class="btn btn-produk dropdown-toggle w-100" href="#" role="button"
                                            id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                            More
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li>
                                                <a class="dropdown-item" href="detail.html">Details</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Add To Cart</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-6 col-lg-4 mt-3 mb-2">
                            <div class="card">
                                <a href="produk1/img/Indonesian/Kopi Sanger.jpg" data-lightbox="kopi"
                                    data-title="Kopi Sanger">
                                    <img src="produk1/img/Indonesian/Kopi Sanger (Square).jpg" class="card-img-top"
                                        alt="404" />
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title text-center text-danger">
                                        <strong>Kopi Sanger</strong>
                                    </h5>
                                    <h5 class="text-center text-danger mb-3">Rp.18.000</h5>
                                    <div class="dropdown">
                                        <a class="btn btn-produk dropdown-toggle w-100" href="#" role="button"
                                            id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                            More
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li>
                                                <a class="dropdown-item" href="detail.html">Details</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Add To Cart</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pagination -->
                        <nav class="mt-4 d-flex justify-content-center" aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link btn-produk" href="#">Previous</a>
                                </li>
                                <li class="page-item pagination-active-danger">
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

    <!-- PHP -->
    <section>
        <h2>Minuman</h2>
        <ul>
            <?php
            // Sama seperti sebelumnya, tetapi untuk minuman
            $conn = new mysqli("localhost", "root", "", "kafe_cina");

            if ($conn->connect_error) {
                die("Koneksi gagal: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM products WHERE product_type = 'Minuman'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<li>" . $row["product_name"] . " - $" . $row["price"] . "</li>";
                }
            } else {
                echo "Tidak ada minuman yang tersedia.";
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

    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
    <script src="../assets/js/lightbox-plus-jquery.min.js"></script>
</body>

</html>