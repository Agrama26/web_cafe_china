<?php
// Database configuration
include "../includes/koneksi.php";

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    // Insert comment into the database
    $sql = "INSERT INTO comments (name, email, comment) VALUES ('$name', '$email', '$comment')";

    if ($conn->query($sql) === TRUE) {
        // Comment successfully inserted
        header("Location: ../admin/index.php?status=success");
        exit();
    } else {
        // Comment insertion failed
        header("Location: ../admin/index.php?status=error");
        exit();
    }
}
?>