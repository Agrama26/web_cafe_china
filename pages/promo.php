<!DOCTYPE html>
<html>

<head>
    <title>Promo Kafe Kita</title>
</head>

<body>
    <header>
        <h1>Promo Kafe Kita</h1>
    </header>

    <section>
        <h2>Promo Hari Ini</h2>
        <ul>
            <?php

            // Hubungkan ke database MySQL
            $conn = new mysqli("localhost", "root", "", "kafe_cina");

            if ($conn->connect_error) {
                die("Koneksi gagal: " . $conn->connect_error);
            }

            // Query SQL untuk mengambil data promo
            $sql = "SELECT * FROM promotions";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<li>" . $row["promo_name"] . " - " . $row["description"] . "</li>";
                }
            } else {
                echo "Tidak ada promo yang tersedia.";
            }

            $conn->close();
            ?>
        </ul>
    </section>

    <footer>
        <p>&copy; 2023 Kafe Kita. Hak Cipta Dilindungi.</p>
    </footer>
</body>

</html>