<?php
// Database configuration
require "../session.php";
include "../includes/koneksi.php";

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $rating = $_POST['rating'];
    $product_id = $_POST['product'];

    // Insert comment into the database
    $sql = "INSERT INTO comments (name, email, comment, rating, product_id) VALUES ('$name', '$email', '$comment', $rating, $product_id)";

    if ($conn->query($sql) === TRUE) {
        // Comment successfully inserted
        header("Location: ../index.php?status=success");
        exit();
    } else {
        // Comment insertion failed
        header("Location: ../index.php?status=error");
        exit();
    }

}
?>