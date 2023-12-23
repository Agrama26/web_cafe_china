<?php
session_start();
include "includes/koneksi.php";

// Fungsi untuk menyaring inpu
// Menemukan sanitizeInput function
function sanitizeInput($input)
{
  $input = trim($input);
  $input = stripslashes($input);
  $input = htmlspecialchars($input);
  return $input;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST["login"])) {
    // Proses login
    $loginemail = sanitizeInput($_POST["loginemail"]);
    $loginPassword = sanitizeInput($_POST["loginPassword"]);

    $query = "SELECT * FROM users WHERE email = '$loginemail'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
      $user = mysqli_fetch_assoc($result);
      if (password_verify($loginPassword, $user['passwordd'])) {
        // Login berhasil
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['username'] = $user['username'];

        // Set cookie untuk menyimpan data login (opsional)
        $cookie_name = "user_login";
        $cookie_value = $user['user_id'];
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // Cookie berlaku selama 30 hari

        // Tandai bahwa halaman loading harus ditampilkan
        $_SESSION['show_loading'] = true;

        // Arahkan ke halaman loading
        header("Location: loading.php");
        exit();
      } else {
        // Password tidak cocok
        header("Location: index.php?error=invalid");
        exit();
      }
    } else {
      // Email tidak ditemukan
      header("Location: index.php?error=invalid");
      exit();
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Cafe China | Login</title>
  <!-- icon -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
    rel="stylesheet" />
  <!-- Style -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/login.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-black ">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <a class="navbar-brand" href="#">Cafe<span> China</span>.</a>
        <ul class="navbar-nav ms-auto d-flex gap-3">
          <li class="nav-item me-3">
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item dropdown me-3">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Product
            </a>
            <ul class="dropdown-menu bg-black" aria-labelledby="navbarDropdown">
              <li>
                <a class="dropdown-item nav-link btn-nav" href="index.php">Food</a>
              </li>
              <li>
                <a class="dropdown-item nav-link btn-nav" href="index.php">Drink</a>
              </li>
            </ul>
          </li>
          <li class="nav-item me-3">
            <a class="nav-link" href="index.php">Promo</a>
          </li>
          <li class="nav-item me-3">
            <a class="nav-link" href="index.php" tabindex="-1" aria-disabled="true"><i class="bi bi-cart2"></i>Cart</a>
          </li>
          <li class="nav-item me-3">
            <a class="nav-link active" href="#" tabindex="-1" aria-disabled="true"><i
                class="bi bi-person-fill"></i>Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Login dan registrasi -->
  <div class="container-fluid py-5" data-aos="fade-in" data-aos-anchor-placement="center-center">
    <div class="container containerr">
      <section id="formHolder">
        <div class="row">
          <!-- Brand Box -->
          <div class="col-sm-12 col-md-6 col-lg-6 brand">
            <a href="#" class="logo">Cafe <span>.</span></a>

            <div class="heading">
              <h2>Cafe <span>China</span></h2>
              <p>Silahkan Berlangganan</p>
            </div>

            <div class="success-msg">
              <p>Slamat ! Kamu adalah salah satu member skarang.</p>
              <a href="index.php" class="profile">Login Now</a>
            </div>
          </div>

          <!-- Form Box -->
          <div class="col-sm-12 col-md-6 col-lg-6 form" data-aos="fade-in">
            <!-- Login Form -->
            <div class="login form-peice <?php echo $formClass; ?>">
              <form class="login-form" action="#" method="post">
                <div class="form-group">
                  <label for="loginemail">Email Lu</label>
                  <input type="email" name="loginemail" id="loginemail" required />
                </div>

                <div class="form-group">
                  <label for="loginPassword">Password</label>
                  <input type="password" name="loginPassword" id="loginPassword" required />
                </div>

                <div class="CTA">
                  <input type="submit" value="Login" name="login"></input>
                  <a href="#" class="switch">Belum Punya</a>
                </div>
              </form>
            </div>
            <!-- End Login Form -->

            <!-- Signup Form -->
            <div class="signup form-peice switched">
              <form method="post" action="proses_register.php">
                <div class="form-group">
                  <label for="username">Username:</label>
                  <input type="text" name="username" class="name" required>
                  <span class="error"></span>
                </div>
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" name="email" class="email" required>
                  <span class="error"></span>
                </div>
                <div class="form-group">
                  <label for="no_hp">No. HP:</label>
                  <input type="tel" name="no_hp" required>
                  <span class="error"></span>
                </div>
                <div class="form-group">
                  <label for="password">Password:</label>
                  <input type="password" name="password" class="pass" required>
                  <span class="error"></span>
                </div>
                <div class="CTA">
                  <input type="submit" value="Register">
                  <a href="#" class="switch">Sudah ada yg Punya</a>
                </div>
              </form>
            </div>
            <!-- End Signup Form -->
          </div>
        </div>
      </section>
    </div>
  </div>

  <!-- partial -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="assets/js/login.js"></script>
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
        duration: 1000,
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