<!DOCTYPE html>
<html>

<head>
    <title>Menu Produk - Kafe Kita</title>
</head>

<body>
    <header>
        <h1>Menu Produk</h1>
    </header>

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

    <footer>
        <p>&copy; 2023 Kafe Kita. Hak Cipta Dilindungi.</p>
    </footer>
</body>

</html>