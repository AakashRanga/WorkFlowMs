<?php
include 'config.php'; // Database connection

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = "Dhatchu";
    $password = password_hash("123", PASSWORD_BCRYPT);

    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    if (mysqli_query($conn, $query)) {
        header("Location: chat.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
// }
?>
