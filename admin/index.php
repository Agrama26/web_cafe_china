<?php
require './session.php';
include "../includes/koneksi.php";

$productID = isset($_GET['id']) ? $_GET['id'] : 1;

$sql = "SELECT * FROM users WHERE user_id = $productID";
$result = mysqli_query($conn, $sql);

if ($result) {
    $userData = mysqli_fetch_assoc($result);
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
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
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown me-3">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Product
                        </a>
                        <ul class="dropdown-menu bg-black" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item nav-link btn-nav" href="../pages/produk.php">Food</a>
                            </li>
                            <li>
                                <a class="dropdown-item nav-link btn-nav" href="../pages/produk1.php">Drink</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="../pages/promo.php">Promo</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="../pages/keranjang.php" tabindex="-1" aria-disabled="true"><i
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
                <img src="../assets/images/logo/ghost1.png" class="d-block w-100" alt="Slide 2">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Nikmati Nuansa <span>China</span> di Cafe Kami</h3>
                    <p>Ayo kunjungi cafe dengan nuansa china, kapan lagi nongki serasa di China.</p>
                </div>
            </div>
            <div class="carousel-item active">
                <video class="d-block w-100" autoplay loop muted>
                    <source src="../assets/images/logo/hu-tao.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="carousel-caption d-none d-md-block">
                    <h3>Selamat Datang</h3>
                    <p>
                        <?php echo $userData['username']; ?> Di Cafe China.
                    </p>
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
        <div class="container" data-aos="fade-up">
            <h3 class="text-center">Promo Of The<span> Week</span></h3>
            <div class="row mt-5 justify-content-center">
                <div class="col-6 col-sm-6 col-lg-3 mb-3" data-aos="fade-up">
                    <div class="card animasi">
                        <img src="../assets/images/Western/coffee_1.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h6 class="card-title">Potongan Harga 20%</h6>
                            <p class="card-text">
                                harga dipotong ukuran gelasnya juga dipotong ya
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-lg-3 mb-3" data-aos="fade-up">
                    <div class="card animasi">
                        <img src="../assets/images/Lokal/Klepon_1.jpeg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Bonus Kelapa</h5>
                            <p class="card-text">
                                Anda Ingin Maju? Anda Ingin Sukses? Ya Seperti Saya Ini
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-lg-3 mb-3" data-aos="fade-up">
                    <div class="card animasi">
                        <img src="../assets/images/Japanese/Sakura Tea Latte.jpeg.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Gratis Garpu</h5>
                            <p class="card-text">
                                Anda Ingin Maju? Anda Ingin Sukses? Ya Seperti Saya Ini
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-lg-3 mb-3" data-aos="fade-up">
                    <div class="card animasi">
                        <img src="../assets/images/Chinese/Bubble Thai Tea.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Beli 1 Gratis ???</h5>
                            <p class="card-text">
                                Anda Ingin Maju? Anda Ingin Sukses? Ya Seperti Saya Ini
                            </p>
                        </div>
                    </div>
                </div>

                <div class="mt-5 d-flex justify-content-center mb-2">
                    <a href="../pages/promo.php" class="btn bg-btn px-4 shadow">See All Promo
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Melayani -->
    <div class="container-fluid py-5 main-color">
        <div class="container" data-aos="fade-down">
            <h3 class="text-center text-light mb-5">Our <span>Services</span></h3>
            <div class="row justify-content-center">
                <div class="col-sm-6 col-md-2 animasi mb-3" data-aos="fade-right">
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
                <div class="col-sm-6 col-md-2 animasi mb-3" data-aos="zoom-in">
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
                <div class="col-sm-6 col-md-2 animasi mb-3" data-aos="fade-left">
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
    <div class="container-fluid" data-aos="fade-up">
        <div class="container">
            <h3 class="text-center mb-5 mt-5">Best <span>Seller</span></h3>
            <div class="row">
                <div class="col-6 col-sm-6 col-lg-3 mb-3" data-aos="fade-up">
                    <div class="card animasi">
                        <a href="../assets/images/Western/coffee_1.jpg" data-lightbox="Produk" data-title="Coffee">
                            <img src="../assets/images/Western/coffee_1.jpg" class="card-img-top" alt="404" />
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

                <div class="col-6 col-sm-6 col-lg-3 mb-3" data-aos="fade-up">
                    <div class="card animasi">
                        <a href="../assets/images/Lokal/Klepon.jpeg" data-lightbox="Produk" data-title="Klepon">
                            <img src="../assets/images/Lokal/Klepon_1.jpeg" class="card-img-top" alt="404" />
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

                <div class="col-6 col-sm-6 col-lg-3 mb-3" data-aos="fade-up">
                    <div class="card animasi">
                        <a href="../assets/images/Chinese/Bubble Thai Tea.jpg" data-lightbox="Produk"
                            data-title="Bubble Thai Tea">
                            <img src="../assets/images/Chinese/Bubble Thai Tea.jpg" class="card-img-top" alt="404" />
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

                <div class="col-6 col-sm-6 col-lg-3 mb-3" data-aos="fade-up">
                    <div class="card animasi">
                        <a href="../assets/images/Western/Mochacindo.jpg" data-lightbox="Produk"
                            data-title="Mochacindo">
                            <img src="../assets/images/Western/Mochacindo (Square).jpg" class="card-img-top"
                                alt="404" />
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

            <div class="mt-5 d-flex justify-content-center">
                <div class="dropdown">
                    <a class="btn bg-btn dropdown-toggle w-100" href="#" role="button" id="dropdownMenuLink"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        See All
                    </a>
                    <ul class="dropdown-menu" data-aos="fade-up" aria-labelledby="dropdownMenuLink">
                        <li>
                            <a class="dropdown-item" href="produk.php">Food</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="produk1.php">Drink</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Masonry -->
    <div class="container-fluid py-5 main-color mt-5">
        <div class="container">
            <h3 class="text-light text-center mb-5" data-aos="fade-down">
                Customer <span>Coment</span>
            </h3>

            <div class="row" data-masonry='{"percentPosition": true }'>
                <div class="col-lg-4 mb-3" data-aos="fade-down-right">
                    <div class="card p-3 masonri">
                        <figure>
                            <blockquote class="blockquote">
                                <p>Saya terpesona dengan pelayan wanitanya. Btw 08 berapa?</p>
                            </blockquote>
                            <figcaption class="blockquote-footer">
                                Dimas Anjay Mabar Sleebw
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <div class="col-lg-4 mb-3" data-aos="fade-down">
                    <div class="card p-3 masonri">
                        <figure>
                            <blockquote class="blockquote">
                                <p>
                                    Kopi Cina Sangat Enak. Kopi tersebut membuat saya merasa
                                    dekat dengan kampung halaman saya
                                </p>
                            </blockquote>
                            <figcaption class="blockquote-footer">
                                Jabal Keren Ost Jr
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <div class="col-lg-4 mb-3" data-aos="fade-down-left">
                    <div class="card p-3 masonri">
                        <figure>
                            <blockquote class="blockquote">
                                <p>
                                    Saya sangat suka dengan fasilitas karaoke yang ada pada cafe
                                    cina ini dan pelayanannya juga baik, minumanya juga sangat
                                    menyegarkan
                                </p>
                            </blockquote>
                            <figcaption class="blockquote-footer">
                                Abil Repper Ganas
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <div class="col-lg-4 mb-3" data-aos="fade-up-right">
                    <div class="card p-3 masonri">
                        <figure>
                            <blockquote class="blockquote">
                                <p>
                                    Dicafe ini ada makanan dan minuman yang sangat baik untuk
                                    kulit. Btw soal kulit kalian bisa mencoba skincare dari
                                    Fitrah Cosmetic ya ges lagi ada promo
                                </p>
                            </blockquote>
                            <figcaption class="blockquote-footer">
                                Fitrah Cosmetic
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <div class="col-lg-4 mb-3" data-aos="fade-up">
                    <div class="card p-3 masonri">
                        <figure>
                            <blockquote class="blockquote">
                                <p>
                                    Yang paling penting adalah wifi nya ya ges ya sangat bagus
                                    sehingga peforma gwe bermain epep menjadi meningkat
                                </p>
                            </blockquote>
                            <figcaption class="blockquote-footer">
                                ~-_Abay Haayyyuuqq_-~
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <div class="col-lg-4 mb-3" data-aos="fade-up-left">
                    <div class="card p-3 masonri">
                        <figure>
                            <blockquote class="blockquote">
                                <p>Nasi goreng nya sangat recomended ya sahabat</p>
                            </blockquote>
                            <figcaption class="blockquote-footer">Reyhan Baik</figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Alamat -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <!-- Map -->
                <div class="col-lg-6" data-aos="fade-right">
                    <h3 class="mb-3">Address</h3>
                    <div class="embed-responsive mb-3">
                        <iframe class="col-12 col-sm-12"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.8949271488314!2d97.15578600977521!3d5.120630337854275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304777a35c813bbf%3A0xfac9e2831347f07f!2sPoliteknik%20Negeri%20Lhokseumawe!5e0!3m2!1sid!2sid!4v1686736607675!5m2!1sid!2sid"
                            width="500" height="350" style="border: 0" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <!-- Keterangan -->
                <div class="col-lg-6" data-aos="fade-left">
                    <h3>Coment</h3>
                    <form>
                        <div class="form-group mb-2">
                            <label for="exampleFormControlInput1" class="mb-2 mt-3">Email</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="Email" />
                        </div>
                        <div class="form-group mb-2">
                            <label class="mb-2" for="exampleFormControlInput1">Name</label>
                            <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Name" />
                        </div>
                        <div class="form-group">
                            <label class="mb-2" for="exampleFormControlTextarea1">Coment</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                placeholder="Your Coment"></textarea>
                        </div>
                    </form>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger px-4 mt-3" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        Submit
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                                        Send your comentar
                                    </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                                        Cancel
                                    </button>
                                    <button type="button" class="btn btn-success">
                                        Submit
                                    </button>
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
    <script src="../assets/js/lightbox-plus-jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"
        integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous"
        async></script>
    <script>
        AOS.init({
            duration: 500, // Durasi animasi dalam milidetik
            offset: 50, // Offset untuk memicu animasi lebih awal atau lebih lambat
            once: true // Animasi hanya akan dimainkan satu kali
        });
    </script>
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
                duration: 500,
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