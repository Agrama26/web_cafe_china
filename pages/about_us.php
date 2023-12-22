<?php
require '../session.php';
?>

<!-- aboutus.html -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Cafe China</title>
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
    <style>
        body {
            background-color: white;
            background-size: cover;
        }

        .rounded-square-with-shadow {
            border-radius: 8px;
            /* Sesuaikan border-radius untuk sudut yang lebih atau kurang bulat */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Sesuaikan bayangan sesuai kebutuhan */
            width: 210px;
            /* Setel lebar foto */
            height: 210px;
            /* Setel tinggi foto */
            object-fit: cover;
            /* Pastikan foto terisi di kotak */
        }

        .underline {
            border-bottom: 10px solid rgb(214, 23, 23);
            /* Menambahkan garis bawah dengan ketebalan 10px */
            padding-bottom: 7px;
            /* Menambahkan jarak di bawah garis bawah */
            display: inline-block;
            /* Membuat elemen menjadi inline block untuk memastikan padding-bottom berfungsi */
            font-weight: bold;
            /* Membuat teks menjadi tebal */
            width: 10%;
            height: 70px;
            margin: 10px auto;
        }

        .underline2 {
            border-bottom: 5px solid rgb(214, 23, 23);
            /* Menambahkan garis bawah dengan ketebalan 10px */
            padding-bottom: 2px;
            /* Menambahkan jarak di bawah garis bawah */
            display: inline-block;
            /* Membuat elemen menjadi inline block untuk memastikan padding-bottom berfungsi */
            font-weight: bold;
            /* Membuat teks menjadi tebal */
        }

        header {
            text-align: center;
            margin-bottom: 2px;
        }

        li {
            color: black;
        }

        ul {
            color: black;
        }
    </style>
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
                    <li class="nav-item me-3 active">
                        <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown me-3">
                        <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Product
                        </a>
                        <ul class="dropdown-menu bg-black" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item nav-link btn-nav active" href="produk.php">Food</a>
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
                    About<span> Us</span>
                </h3>
                <h5 class="text-light opacity-75 mx-5 ml-5 mt-2">
                    Ini adalah cerita dibalik jerih payah kami, apa yang kami lakukan
                    <br class="d-none d-md-block" />
                    dan orang yang terlibat dalam kafe <span>China</span> ini
                </h5>
            </div>
        </div>
    </div>

    <!-- About Us -->
    <div class="container-fluid py-5">
        <section class="container">
            <div class="mx-3 text-right">
                <h5 class="underline2 mb-3" data-aos="fade-right">Our Story</h5>
            </div>
            <div class="row justify-content-center">
                <div class="card" data-aos="fade-right">
                    <div class="card-body">
                        <p>Kisah Cafe China adalah perjalanan gurih melalui jantung Tiongkok. Didirikan pada tahun
                            1997, kami
                            membuka
                            pintu dengan misi untuk berbagi kekayaan tradisi kuliner Asia dan kuliner tren yang
                            berganti-ganti
                            seiring
                            berkembangnya zaman.
                            Tenggelam dalam sejarah dan budaya, setiap hidangan merupakan kisah tradisi dan inovasi.
                            Mengambil
                            inspirasi
                            dari jalan-jalan di Asia, koki kami dengan cermat menciptakan cita rasa yang selaras
                            dengan esensi
                            Asia
                            .
                            Cafe China lebih dari sekedar restoran, ini adalah perayaan cita rasa, komunitas, dan
                            kegembiraan
                            makan
                            bersama.Pelanggan kami lebih dari sekedar tamu. Mereka adalah bagian dari sejarah kami
                            dan setiap
                            kunjungan
                            memberikan kesempatan untuk menciptakan kenangan.
                            Bergabunglah bersama kami dalam petualangan kuliner ini di mana setiap hidangan memiliki
                            cerita dan
                            setiap
                            momen merupakan eksplorasi budaya Asia.
                            Cafe China merupakan Sebuah perjalanan melalui rasa, dengan cerita di setiap gigitan.
                        </p>

                    </div>
                </div>
            </div>

            <div class="mx-3 mt-3">
                <h5 class="underline2 mb-3" data-aos="fade-right">Our Mission</h5>
            </div>
            <div class="row justify-content-center">
                <div class="card" data-aos="fade-right">
                    <div class="card-body">
                        <p>di Cafe China, misi kami adalah menciptakan ruang ramah di mana pengunjung dapat menikmati
                            seni masakan
                            Asia.
                            Kami berdedikasi untuk menggunakan bahan-bahan berkualitas tinggi, menyajikan hidangan
                            dengan presisi,
                            dan
                            memberikan layanan yang luar biasa kepada para tamu.</p>
                    </div>
                </div>
            </div>

            <div class="mx-3 mt-3">
                <h5 class="underline2 mb-3" data-aos="fade-right">Values We Cherish</h5>
            </div>
            <div class="row justify-content-center">
                <div class="card" data-aos="fade-right">
                    <div class="card-body">
                        <ul>
                            <li>Authenticity</li>
                            <dd>Merujuk pada sejauh mana kafe atau restoran China mempertahankan keaslian dalam
                                penyajian makanan,
                                cita
                                rasa, dan pengalaman keseluruhan. Cafe China kami menonjolkan keaslian masakan Asia
                                dalam menu dan
                                dekorasi.</dd>
                            <li>Quality</li>
                            <dd>Mengacu pada standar kualitas bahan baku, penyajian, dan pelayanan.cafe China kami
                                menekankan
                                kualitas
                                akan memberikan makanan dan minuman yang segar, lezat, dan diolah dengan baik.</dd>
                            <li>Hospitality</li>
                            <dd>Melibatkan cara staf dan manajemen berinteraksi dengan pelanggan. Kafe China kami yang
                                ramah akan
                                memberikan suasana menyambut, pelayanan yang baik, dan berusaha membuat pelanggan merasa
                                nyaman.
                            </dd>
                            <li>Innovation</li>
                            <dd>Kami menunjukkan kemampuan kafe China untuk berinovasi dalam menu, konsep, atau cara
                                penyajian.
                                Inovasi
                                dapat membuat kafe tetap menarik dan relevan di pasar yang terus berubah.</dd>
                            <li>Community</li>
                            <dd>Berkaitan dengan hubungan kafe China dengan komunitas sekitarnya. Kafe yang peduli
                                terhadap
                                masyarakatnya dapat terlibat dalam kegiatan lokal, mendukung usaha kecil lokal, dan
                                menciptakan
                                ikatan
                                dengan pelanggan setempat.</dd>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Anggota -->
    <div class="container-fluid mt-5">
        <div class="container">
            <div class=" mb-5" data-aos="fade-down" data-aos-anchor-placement="center-center">
                <h3>The Team</h3>
                <h6 class="underline2">Orang Di balik Layar</h6>
            </div>

            <div class="row">
                <div class="text-center mb-5 col-md-4 col-lg-3 mb-5" data-aos="fade-right"
                    data-aos-anchor-placement="center-center">
                    <div class="">
                        <!-- Person's Photo -->
                        <img src="../assets/images/about_us/AGUNG.jpg"
                            class="card-img-top img-thumbnail rounded-square-with-shadow" alt="Agung Ramadhan Setiawan">
                    </div>
                </div>
                <div class="container-fluid col-md-8 col-lg-9" data-aos="fade-left"
                    data-aos-anchor-placement="center-center">
                    <div class="row justify-content-center">
                        <!-- Person's Information -->
                        <div class="card">
                            <div class="card-title">
                                <h5 class="mx-3 mt-3">AGUNG RAMADHAN SETIAWAN</h5>
                                <h6 class="mx-3">FOUNDER - CEO</h6>
                            </div>
                            <div class="card-body">
                                <p>"Coffe di Cafe China bukan hanya sekedar kopi, tapi
                                    apa
                                    yang
                                    kami lakukan disini adalah mengenai memberikan kebanggan terhadap kopi Asia"</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="container-fluid col-md-8 col-lg-9" data-aos="fade-right"
                    data-aos-anchor-placement="center-center">
                    <div class="row justify-content-center">
                        <!-- Person's Information -->
                        <div class="card">
                            <div class="card-title text-right">
                                <h5 class="mx-3 mt-3">NURUL AFIQAH SIMBOLON</h5>
                                <h6 class="mx-3">CFO (Chief Financial Officer)</h6>
                            </div>
                            <div class="card-body text-right">
                                <p>"Love, Live, Coffee.. Lorem ipsum dolor sit amet
                                    consectetur, adipisicing elit. Veniam, accusantium!"</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mb-5 col-md-4 col-lg-3 mb-5" data-aos="fade-left"
                    data-aos-anchor-placement="center-center">
                    <div class="">
                        <!-- Person's Photo -->
                        <img src="../assets/images/about_us/FIKA.jpg"
                            class="img-fluid img-thumbnail rounded-square-with-shadow" alt="Nurul Afiqah Simbolon">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="text-center mb-5 col-md-4 col-lg-3 mb-5" data-aos="fade-right"
                    data-aos-anchor-placement="center-center">
                    <div class="">
                        <!-- Person's Photo -->
                        <img src="../assets/images/about_us/MUMUL.jpg"
                            class="card-img-top img-thumbnail rounded-square-with-shadow" alt="Mulyani">
                    </div>
                </div>
                <div class="container-fluid col-md-8 col-lg-9" data-aos="fade-left"
                    data-aos-anchor-placement="center-center">
                    <div class="row justify-content-center">
                        <!-- Person's Information -->
                        <div class="card">
                            <div class="card-title">
                                <h5 class="mx-3 mt-3">MULYANI</h5>
                                <h6 class="mx-3">CXO (Chief Expansion Officer)</h6>
                            </div>
                            <div class="card-body">
                                <p>"Roast and make the best of your possible cup of
                                    coffee with
                                    all your heart, that's what we called as a perfect cup of coffee. Coffee
                                    Asia
                                    bukan
                                    hanya sekedar kopi, tapi apa yang kami lakukan disini adalah mengenai
                                    memberikan
                                    kebanggan terhadap kopi Indonesia."</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="container-fluid col-md-8 col-lg-9" data-aos="fade-right"
                    data-aos-anchor-placement="center-center">
                    <div class="row ">
                        <!-- Person's Information -->
                        <div class="card">
                            <div class="card-title text-right">
                                <h5 class="mx-3 mt-3">SUNIL HUKMI</h5>
                                <h6 class="mx-3">COFFEE EXPERT & RND</h6>
                            </div>
                            <div class="card-body text-right">
                                <p style="text-align: justify">"Apapun situasinya yang saya tahu saya harus
                                    tetap
                                    melakukan
                                    yang terbaik. Berkaryalah dengan hati agar bisa memberikan sesuatu yang
                                    bermanfaat."</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mb-5 col-md-4 col-lg-3 mb-5" data-aos="fade-left"
                    data-aos-anchor-placement="center-center">
                    <div class="">
                        <!-- Person's Photo -->
                        <img src="../assets/images/about_us/SUNIL.jpg"
                            class="card-img-top img-thumbnail rounded-square-with-shadow" alt="Sunil Hukmi">
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