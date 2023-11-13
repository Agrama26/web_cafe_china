<!DOCTYPE html>
<html>

<head>
    <title>Keranjang Belanja - Kafe Cina</title>
</head>

<body>
    <header>
        <h1>Keranjang Belanja Anda</h1>
    </header>

    <section>
        <h2>Daftar Pesanan</h2>
        <table>
            <tr>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total</th>
            </tr>
            <?php

            // Hubungkan ke database MySQL
            $conn = new mysqli("localhost", "root", "", "kafe_cina");

            if ($conn->connect_error) {
                die("Koneksi gagal: " . $conn->connect_error);
            }

            // Query SQL untuk mengambil data pesanan
            $sql = "SELECT * FROM orders";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["product_name"] . "</td>";
                    echo "<td>$" . $row["product_price"] . "</td>";
                    echo "<td>" . $row["quantity"] . "</td>";
                    echo "<td>$" . ($row["product_price"] * $row["quantity"]) . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "Keranjang belanja Anda kosong.";
            }

            $conn->close();
            ?>
        </table>
        <p>Total Belanja: $XX.XX</p>
        <p><a href="produk.php">Kembali ke Menu Produk</a></p>
    </section>

    <footer>
        <p>&copy; 2023 Kafe Kita. Hak Cipta Dilindungi.</p>
    </footer>
</body>

</html>