<?php
include "../includes/koneksi.php";
require '../session.php';

// Pastikan Anda memiliki informasi pengguna saat ini atau sesuaikan sesuai kebutuhan
$user_id = 1; // Gantilah ini dengan metode untuk mendapatkan ID pengguna saat ini

// Query untuk mengambil produk dari tabel kafe_cina berdasarkan user_id
$query = "SELECT * FROM carts WHERE user_id = $user_id";
$result = $conn->query($query);

function calculateTotalPrice($cartItems, $conn)
{
    $totalPrice = 0;
    foreach ($cartItems as $item) {
        $productId = $item['product_id'];
        $sql = "SELECT * FROM products WHERE product_id = $productId";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $productData = $result->fetch_assoc();
            $totalPrice += $item['quantity'] * $productData['price'];
        }
    }
    return $totalPrice;
}

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
    <title>Cart</title>
    <meta charset="UTF-8" />
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
</head>

<body>

    <!-- Nav -->
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
                        <a class="nav-link" href="promo.php">Promo</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link active" href="#" tabindex="-1" aria-disabled="true"><i
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

    <!-- Belanja -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-down">
                    <h2 class="text-judul-halaman text-center">Shopping Cart</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Foto</th>
                                <th>Nama Produk</th>
                                <th>Harga Satuan</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Hapus</th>
                            </tr>
                            <?php
                            while ($row = $result->fetch_assoc()) {
                                $produk_id = $row['product_id'];
                                $produkQuery = "SELECT * FROM products WHERE product_id = ?";

                                // Use prepared statement
                                $stmt = $conn->prepare($produkQuery);
                                $stmt->bind_param("i", $produk_id); // Assuming product_id is an integer
                            
                                $stmt->execute();

                                $produkResult = $stmt->get_result();
                                $produk = $produkResult->fetch_assoc();
                                ?>
                                <tr data-aos="fade-right">
                                    <td>
                                        <img src="<?php echo $produk['imagePath']; ?>" class="img-cart"
                                            style="height: 80px; width: 80px" />
                                    </td>
                                    <td>
                                        <?php echo $produk['product_name']; ?><br />
                                        <!-- <small>
                                            <?php //echo $produk['description']; ?>
                                        </small> -->
                                    </td>
                                    <td>Rp.
                                        <?php echo number_format($produk['price'], 0, ',', '.'); ?>
                                    </td>
                                    <td>
                                        <input type="number" value="<?php echo $row['quantity']; ?>"
                                            class="form-control input-kuantitas" />
                                    </td>
                                    <td>Rp.
                                        <?php echo number_format($row['quantity'] * $produk['price'], 0, ',', '.'); ?>
                                    </td>
                                    <td>
                                        <a href="hapus.php?id=<?php echo $row['id']; ?>"
                                            class="btn btn-danger rounded-circle btn-tambah"
                                            onclick="return confirmDelete();">
                                            <svg width="16" height="18" viewBox="0 0 16 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_54_458)">
                                                    <path
                                                        d="M1.125 16.3123C1.125 16.7599 1.30279 17.1891 1.61926 17.5056C1.93572 17.822 2.36495 17.9998 2.8125 17.9998H12.9375C13.3851 17.9998 13.8143 17.822 14.1307 17.5056C14.4472 17.1891 14.625 16.7599 14.625 16.3123V4.49982H1.125V16.3123ZM10.6875 7.31232C10.6875 7.16314 10.7468 7.02006 10.8523 6.91458C10.9577 6.80909 11.1008 6.74982 11.25 6.74982C11.3992 6.74982 11.5423 6.80909 11.6477 6.91458C11.7532 7.02006 11.8125 7.16314 11.8125 7.31232V15.1873C11.8125 15.3365 11.7532 15.4796 11.6477 15.5851C11.5423 15.6906 11.3992 15.7498 11.25 15.7498C11.1008 15.7498 10.9577 15.6906 10.8523 15.5851C10.7468 15.4796 10.6875 15.3365 10.6875 15.1873V7.31232ZM7.3125 7.31232C7.3125 7.16314 7.37176 7.02006 7.47725 6.91458C7.58274 6.80909 7.72582 6.74982 7.875 6.74982C8.02418 6.74982 8.16726 6.80909 8.27275 6.91458C8.37824 7.02006 8.4375 7.16314 8.4375 7.31232V15.1873C8.4375 15.3365 8.37824 15.4796 8.27275 15.5851C8.16726 15.6906 8.02418 15.7498 7.875 15.7498C7.72582 15.7498 7.58274 15.6906 7.47725 15.5851C7.37176 15.4796 7.3125 15.3365 7.3125 15.1873V7.31232ZM3.9375 7.31232C3.9375 7.16314 3.99676 7.02006 4.10225 6.91458C4.20774 6.80909 4.35082 6.74982 4.5 6.74982C4.64918 6.74982 4.79226 6.80909 4.89775 6.91458C5.00324 7.02006 5.0625 7.16314 5.0625 7.31232V15.1873C5.0625 15.3365 5.00324 15.4796 4.89775 15.5851C4.79226 15.6906 4.64918 15.7498 4.5 15.7498C4.35082 15.7498 4.20774 15.6906 4.10225 15.5851C3.99676 15.4796 3.9375 15.3365 3.9375 15.1873V7.31232ZM15.1875 1.12482H10.9688L10.6383 0.467401C10.5683 0.326851 10.4604 0.208624 10.3269 0.126019C10.1934 0.0434148 10.0394 -0.000289557 9.88242 -0.000176942H5.86406C5.7074 -0.000779187 5.55373 0.0427622 5.42067 0.125459C5.28761 0.208155 5.18054 0.326662 5.11172 0.467401L4.78125 1.12482H0.5625C0.413316 1.12482 0.270242 1.18409 0.164752 1.28958C0.0592632 1.39506 0 1.53814 0 1.68732L0 2.81232C0 2.96151 0.0592632 3.10458 0.164752 3.21007C0.270242 3.31556 0.413316 3.37482 0.5625 3.37482H15.1875C15.3367 3.37482 15.4798 3.31556 15.5852 3.21007C15.6907 3.10458 15.75 2.96151 15.75 2.81232V1.68732C15.75 1.53814 15.6907 1.39506 15.5852 1.28958C15.4798 1.18409 15.3367 1.12482 15.1875 1.12482Z"
                                                        fill="white" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_54_458">
                                                        <rect width="15.75" height="18" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>

            <script>
                function confirmDelete() {
                    return confirm("Are you sure you want to delete this product?");
                }
            </script>

            <div class="row">
                <div class="col-md-5 ms-auto">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Shipping Costs</th>
                                <td>Rp. 10.000</td>
                            </tr>
                            <tr>
                                <th>Total</th>
                                <td>
                                    Rp.
                                    <?= number_format($cartTotal, 0, ',', '.') ?>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <a href="pay.php" class="btn btn-lg btn-outline-danger w-100">Pay Now</a>
                                </td>
                            </tr>
                        </table>
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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
    <script src="../assets/js/lightbox-plus-jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"
        integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous"
        async></script>
    <link rel="stylesheet" type="text/css" href="../assets/css/custom.css" />
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
</body>

</html>