<?php
include "includes/koneksi.php";

session_start();

// Periksa apakah pengguna sudah login
if (isset($_SESSION['user_id'])) {
    $username = $_SESSION['username'];
    $userId = $_SESSION['user_id'];
    // echo "Selamat datang, $username! (ID: $userId)";
} else {
    header("Location: login.php");
    exit();
}

$productID = isset($_GET['id']) ? $_GET['id'] : 1;

$sqll = "SELECT * FROM users WHERE user_id = $productID";
$resultt = mysqli_query($conn, $sqll);

if ($resultt) {
    $userData = mysqli_fetch_assoc($resultt);
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Cafe China | Home</title>
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
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/lightbox.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body>
    <!-- Elemen loading -->
    <div id="loading-overlay">
        <div id="loading-spinner"></div>
    </div>

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
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown me-3">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Product
                        </a>
                        <ul class="dropdown-menu bg-black" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item nav-link btn-nav" href="pages/produk.php">Food</a>
                            </li>
                            <li>
                                <a class="dropdown-item nav-link btn-nav" href="pages/produk1.php">Drink</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="pages/promo.php">Promo</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="pages/keranjang.php" tabindex="-1" aria-disabled="true"><i
                                class="bi bi-cart2"></i>Cart</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="logout.php" tabindex="-1" aria-disabled="true"><i
                                class="bi bi-box-arrow-left"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Banner -->
    <div id="carouselExample" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item">
                <img src="assets/images/logo/bo tao2.jpg" class="d-block w-100" alt="Slide 2">
                <div class="carousel-caption d-none d-md-block mb-5">
                    <h1>Nikmati Nuansa <span>China</span> di Cafe Kami</h1>
                    <h5>Ayo kunjungi cafe dengan nuansa china, kapan lagi nongki serasa di China.</h5>
                </div>
            </div>
            <div class="carousel-item active">
                <video class="d-block w-100" autoplay loop muted>
                    <source src="assets/images/logo/hu-tao.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="carousel-caption d-none d-md-block mb-5">
                    <h1>Selamat Datang</h1>
                    <h5 class="text-lg">
                        <?php echo "$username"; ?> Di Cafe <Span>China.</Span>
                    </h5>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Menu Promo -->
    <div class="container-fluid py-5">
        <div class="container" data-aos="fade-up" data-aos-anchor-placement="center-center">
            <h3 class="text-center">Promo Of The<span> Week</span></h3>
            <div class="row mt-5 justify-content-center">
                <div class="col-6 col-sm-6 col-lg-3 mb-3" data-aos="fade-up" data-aos-anchor-placement="center-center">
                    <div class="card animasi">
                        <img src="assets/images/Western/coffee_1.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h6 class="card-title">Bonus</h6>
                            <p class="card-text">
                                Beli 1 gratis ??? Gratis bertanya dan memberi saran
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-lg-3 mb-3" data-aos="fade-up" data-aos-anchor-placement="center-center">
                    <div class="card animasi">
                        <img src="assets/images/Lokal/Klepon_1.jpeg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Diskon 5%</h5>
                            <p class="card-text">
                                Diskon 5% untuk pembelian 2 porsi klepon dengan isi 10 buah
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-lg-3 mb-3" data-aos="fade-up" data-aos-anchor-placement="center-center">
                    <div class="card animasi">
                        <img src="assets/images/Western/Pancake1.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Gratis Garpu</h5>
                            <p class="card-text">
                                Anda Ingin Maju? Anda Ingin Sukses? Ya Seperti Saya Ini
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-lg-3 mb-3" data-aos="fade-up" data-aos-anchor-placement="center-center">
                    <div class="card animasi">
                        <img src="assets/images/Chinese/boba1.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Beli 1 Gratis ???</h5>
                            <p class="card-text">
                                Diskon 50% untuk pembelian 2 buah xi boba dengan boba ekstra
                            </p>
                        </div>
                    </div>
                </div>

                <div class="mt-5 d-flex justify-content-center mb-2" data-aos="fade-up"
                    data-aos-anchor-placement="center-center">
                    <a href="pages/promo.php" class="btn bg-btn px-4 shadow">See All Promo
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Melayani -->
    <div class="container-fluid py-5 main-color">
        <div class="container" data-aos-anchor-placement="center-center" data-aos="fade-up">
            <h3 class="text-center text-light mb-5">Our <span>Services</span></h3>
            <div class="row justify-content-center">
                <div class="col-sm-6 col-md-2 animasi mb-3" data-aos-anchor-placement="center-center"
                    data-aos="fade-right">
                    <div class="d-flex justify-content-center">
                        <div class="melayani d-flex align-items-center justify-content-center">
                            <a href="#"><i class="text-light bi bi-truck display-6"></i></a>
                        </div>
                    </div>
                    <div class="mt-3 text-light text-center">
                        <h6>Delivery</h6>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa
                            tempore, nesciunt impedit deserunt eum rerum?
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-2 animasi mb-3" data-aos-anchor-placement="center-center"
                    data-aos="zoom-in">
                    <div class="d-flex justify-content-center">
                        <div class="melayani d-flex align-items-center justify-content-center">
                            <a href="#"><i class="text-light bi bi-shop-window display-6"></i></a>
                        </div>
                    </div>
                    <div class="mt-3 text-light text-center">
                        <h6>Cafe</h6>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa
                            tempore, nesciunt impedit deserunt eum rerum?
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-2 animasi mb-3" data-aos-anchor-placement="center-center"
                    data-aos="fade-left">
                    <div class="d-flex justify-content-center">
                        <div class="melayani d-flex align-items-center justify-content-center">
                            <a href="#"><i class="text-light bi bi-mic display-6"></i></a>
                        </div>
                    </div>
                    <div class="mt-3 text-light text-center">
                        <h6>Karaoke</h6>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa
                            tempore, nesciunt impedit deserunt eum rerum?
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Produk -->
    <div class="container-fluid" data-aos="fade-up" data-aos-anchor-placement="center-center">
        <div class="container">
            <h3 class="text-center mb-5 mt-5">Best <span>Seller</span></h3>
            <div class="row">
                <div class="col-6 col-sm-6 col-lg-3 mb-3" data-aos="fade-up" data-aos-anchor-placement="center-center">
                    <div class="card animasi">
                        <a href="assets/images/Western/coffee_1.jpg" data-lightbox="Produk" data-title="Coffee">
                            <img src="assets/images/Western/coffee_1.jpg" class="card-img-top" alt="404" />
                        </a>
                        <div class="card-body text-center">
                            <h6 class="card-title text-danger fs-5">Coffee</h6>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                            <h5 class="text-danger">Rp. 40.000</h5>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-lg-3 mb-3" data-aos="fade-up" data-aos-anchor-placement="center-center">
                    <div class="card animasi">
                        <a href="assets/images/Lokal/Klepon.jpeg" data-lightbox="Produk" data-title="Klepon">
                            <img src="assets/images/Lokal/Klepon_1.jpeg" class="card-img-top" alt="404" />
                        </a>
                        <div class="card-body text-center">
                            <h6 class="card-title text-danger fs-5">Klepon Cake</h6>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                            <h5 class="text-danger">Rp. 18.000</h5>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-lg-3 mb-3" data-aos="fade-up" data-aos-anchor-placement="center-center">
                    <div class="card animasi">
                        <a href="assets/images/Chinese/Bubble Thai Tea.jpg" data-lightbox="Produk"
                            data-title="Bubble Thai Tea">
                            <img src="assets/images/Chinese/Bubble Thai Tea.jpg" class="card-img-top" alt="404" />
                        </a>
                        <div class="card-body text-center">
                            <h6 class="card-title text-danger fs-5">Thai Tea</h6>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                            <h5 class="text-danger">Rp. 15.000</h5>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-lg-3 mb-3" data-aos="fade-up" data-aos-anchor-placement="center-center">
                    <div class="card animasi">
                        <a href="assets/images/Western/Mochacindo.jpg" data-lightbox="Produk" data-title="Mochacindo">
                            <img src="assets/images/Western/Mochacindo (Square).jpg" class="card-img-top" alt="404" />
                        </a>
                        <div class="card-body text-center">
                            <h6 class="card-title text-danger fs-5">Mocha Chindo</h6>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                            <h5 class="text-danger">Rp. 20.000</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5 d-flex justify-content-center" data-aos="fade-up"
                data-aos-anchor-placement="center-center">
                <div class="dropdown">
                    <a class="btn bg-btn dropdown-toggle w-100" href="#" role="button" id="dropdownMenuLink"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        See All
                    </a>
                    <ul class="dropdown-menu" data-aos="fade-in" data-aos-anchor-placement="center-center"
                        aria-labelledby="dropdownMenuLink">
                        <li>
                            <a class="dropdown-item" href="pages/produk.php">Food</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="pages/produk1.php">Drink</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Masonry -->
    <div class="container-fluid py-5 main-color mt-5">
        <div class="container">
            <h3 class="text-light text-center mb-5" data-aos="fade-up" data-aos-anchor-placement="center-center">
                Customer <span>Comments</span>
            </h3>

            <div class="row" id="commentsContainer" data-masonry='{"percentPosition": true }'>
                <?php
                $sql = "SELECT * FROM products WHERE product_id = $productID";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    $productData = mysqli_fetch_assoc($result);
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                // Fetch the first 6 comments from the database
                $sql = "SELECT comments.id, comments.name, comments.comment, products.product_id, products.product_name FROM comments JOIN products ON comments.product_id = products.product_id ORDER BY created_at DESC LIMIT 6";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        // Display the initial 6 comments
                        echo '<div class="col-lg-4 mb-3" data-aos="fade-up" data-aos-anchor-placement="center-center">';
                        echo '<div class="card p-3 masonri">';
                        echo '<figure>';
                        echo '<blockquote class="blockquote">';
                        echo '<p>' . $row['product_name'] . '<br>' . $row['comment'] . '</p>';
                        echo '</blockquote>';
                        echo '<figcaption class="blockquote-footer">';
                        echo $row['name'];
                        echo '</figcaption>';
                        echo '</figure>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo '<p>No comments yet.</p>';
                }
                ?>
            </div>

            <!-- Button to load more comments -->
            <div class="d-flex justify-content-center" data-aos="fade-up" data-aos-anchor-placement="center-center">
                <a href="pages/koment_lain.php" class="btn btn-danger mt-3">
                    View More Comments
                </a>
            </div>
        </div>
    </div>

    <!-- Alamat -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <!-- Map -->
                <div class="col-lg-6" data-aos="fade-right" data-aos-anchor-placement="center-center">
                    <h3 class="mb-3">Address</h3>
                    <div class="embed-responsive mb-3">
                        <iframe class="col-12 col-sm-12"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.8949271488314!2d97.15578600977521!3d5.120630337854275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304777a35c813bbf%3A0xfac9e2831347f07f!2sPoliteknik%20Negeri%20Lhokseumawe!5e0!3m2!1sid!2sid!4v1686736607675!5m2!1sid!2sid"
                            width="500" height="500" style="border: 0" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <!-- Keterangan -->
                <?php
                $status = isset($_GET['status']) ? $_GET['status'] : '';

                if ($status === 'success') {
                    echo '<script>alert("Comment submitted successfully!");</script>';
                } elseif ($status === 'error') {
                    echo '<script>alert("Failed to submit comment. Please try again.");</script>';
                }
                ?>

                <div class="col-lg-6" data-aos="fade-left" data-aos-anchor-placement="center-center">
                    <h3>Comment</h3>
                    <form action="pages/process_comment.php" method="post">
                        <div class="form-group mb-2">
                            <label for="exampleFormControlInput1" class="mb-2 mt-3">Email</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" name="email"
                                placeholder="Email" required />
                        </div>
                        <div class="form-group mb-2">
                            <label class="mb-2" for="exampleFormControlInput1">Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="name"
                                placeholder="Name" required />
                        </div>
                        <div class="form-group mb-2">
                            <label class="mb-2" for="product">Product</label>
                            <select class="form-control" id="product" name="product">
                                <?php
                                // Fetch product options from the database
                                $sql = "SELECT product_id, product_name FROM products";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<option value="' . $row['product_id'] . '">' . $row['product_name'] . '</option>';
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group mb-2">
                            <label class="mb-2" for="rating">Rating</label>
                            <select class="form-control" id="rating" name="rating">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="mb-2" for="exampleFormControlTextarea1">Comment</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="comment" rows="3"
                                placeholder="Your Comment" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-danger px-4 mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Footer Start -->
    <div class="container-fluid bg-black footer text-light" data-aos="fade-in"
        data-aos-anchor-placement="center-center">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-start section-judul mb-4">Company</h4>
                    <a class="btn btn-link" href="pages/about_us.php">About Us</a>
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
    <script src="assets/js/lightbox-plus-jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"
        integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous"
        async></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const cards = document.querySelectorAll('[data-aos]');
            const observerConfig = {
                rootMargin: '0px',
                threshold: 0.5
            };

            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('aos-animate');
                    } else {
                        entry.target.classList.remove('aos-animate');
                    }
                });
            }, observerConfig);

            cards.forEach(card => {
                observer.observe(card);
            });

            let lastScrollTop = 0;

            function handleScroll() {
                const st = window.pageYOffset || document.documentElement.scrollTop;

                if (st > lastScrollTop) {
                    // Scroll ke bawah
                } else {
                    // Scroll ke atas, tambahkan kelas 'aos-animate' untuk animasi keluar
                    cards.forEach(card => {
                        if (card.getBoundingClientRect().top > window.innerHeight) {
                            card.classList.remove('aos-animate');
                        }
                    });
                }

                lastScrollTop = st <= 0 ? 0 : st;
            }

            window.addEventListener('scroll', handleScroll);

            AOS.init({
                duration: 800,
                offset: 50,
                once: true
            });
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Simulasikan proses login (gunakan metode sesuai dengan aplikasi Anda)
            // Contoh: setelah 2 detik, sembunyikan loading overlay
            setTimeout(function () {
                hideLoadingOverlay();
            }, 1000);
        });

        function hideLoadingOverlay() {
            // Sembunyikan elemen loading
            var loadingOverlay = document.getElementById("loading-overlay");
            if (loadingOverlay) {
                loadingOverlay.style.display = "none";
            }
        }
    </script>

</body>

</html>