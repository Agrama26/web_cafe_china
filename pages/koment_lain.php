<?php
session_start();
include "../includes/koneksi.php";

$productID = isset($_GET['id']) ? $_GET['id'] : 1;

$sqll = "SELECT * FROM users WHERE user_id = $productID";
$resultt = mysqli_query($conn, $sqll);

if ($resultt) {
    $userData = mysqli_fetch_assoc($resultt);
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Cafe China</title>
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
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="../assets/css/lightbox.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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
                        <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
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
                        <a class="nav-link" href="promo.php">Promo</a>
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

    <!-- Sisa Komentar -->
    <div class="container-fluid py-5 main-color my-5">
        <div class="container">
            <h3 class="text-light text-center mb-5" data-aos="fade-up" data-aos-anchor-placement="center-center">
                Additional <span>Comments</span>
            </h3>

            <div class="row" id="additionalCommentsContainer" data-masonry='{"percentPosition": true }'>
                <?php
                // Fetch additional comments from the database
                $sql = "SELECT comments.id, comments.name, comments.comment, products.product_id, products.product_name FROM comments JOIN products ON comments.product_id = products.product_id ORDER BY comments.id DESC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        // Display additional comments
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
                    echo '<p>No more comments.</p>';
                }
                ?>
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
                    <a class="btn btn-link" href="about_us.php">About Us</a>
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
    <script src="../assets/js/lightbox-plus-jquery.min.js"></script>
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

</body>

</html>