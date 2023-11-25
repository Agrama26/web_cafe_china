<?php
session_start();
include "../includes/koneksi.php";

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
        header("Location: index.php");
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
  } elseif (isset($_POST["signup_btn"])) {
    // Proses registrasi
    $username = sanitizeInput($_POST["username"]);
    $email = sanitizeInput($_POST["emailAdress"]);
    $phone = sanitizeInput($_POST["phone"]);
    $password = password_hash(sanitizeInput($_POST["password"]), PASSWORD_DEFAULT);

    $insertQuery = "INSERT INTO users (username, email, no_hp, passwordd) VALUES ('$username', '$email', '$phone', '$password')";
    $result = mysqli_query($conn, $insertQuery);

    if ($result) {
      // Registrasi berhasil
      header("Location: index.php?success=true");
      exit();
    } else {
      // Registrasi gagal
      header("Location: index.php?error=registration_failed");
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
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/login.css" />
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
                <a class="dropdown-item nav-link btn-nav" href="../pages/produk.php">Food</a>
              </li>
              <li>
                <a class="dropdown-item nav-link btn-nav" href="../pages/produk.php">Drink</a>
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
            <a class="nav-link active" href="#" tabindex="-1" aria-disabled="true"><i
                class="bi bi-person-fill"></i>Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Login dan registrasi -->
  <div class="container-fluid py-5">
    <div class="container">
      <section id="formHolder">
        <div class="row">
          <!-- Brand Box -->
          <div class="col-sm-6 brand">
            <a href="#" class="logo">Cafe <span>.</span></a>

            <div class="heading">
              <h2>Cafe <span>China</span></h2>
              <p>Silahkan Berlangganan</p>
            </div>

            <div class="success-msg">
              <p>Slamat ! Kamu adalah salah satu member skarang.</p>
              <a href="index.php" class="profile">Masuk</a>
            </div>
          </div>

          <!-- Form Box -->
          <div class="col-sm-6 form">
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
              <form class="signup-form" action="#" method="post">
                <div class="form-group">
                  <label for="uname">Nama Lu</label>
                  <input type="text" name="username" id="uname" class="username" />
                  <span class="error"></span>
                </div>

                <div class="form-group">
                  <label for="email">Email Lu</label>
                  <input type="email" name="emailAdress" id="email" class="email" />
                  <span class="error"></span>
                </div>

                <div class="form-group">
                  <label for="no_hp">08 berapa? - <small>null</small></label>
                  <input type="text" name="phone" id="no_hp" />
                </div>

                <div class="form-group">
                  <label for="passlu">Password</label>
                  <input type="password" name="password" id="passlu" class="pass" />
                  <span class="error"></span>
                </div>

                <div class="form-group">
                  <label for="passwordCon">Confirm Password</label>
                  <input type="password" name="passwordCon" id="passwordCon" class="passConfirm" />
                  <span class="error"></span>
                </div>

                <div class="CTA">
                  <input type="submit" value="Signup Now" id="submit" />
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
  <script src="../assets/js/login.js"></script>
</body>

</html>