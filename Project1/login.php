<?php
require_once "config.php"; // Include your database configuration file

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $query = $db->prepare("SELECT * FROM users WHERE email = ?");
    $query->bind_param('s', $email);
    $query->execute();

    $result = $query->get_result();
    $user = $result->fetch_assoc();

    $query->close();

    if ($user && password_verify($password, $user['password'])) {
        // Login successful, redirect to a welcome page
        session_start();
        $_SESSION["userid"] = $user['id'];
        header("location: welcome.php");
        exit;
    } else {
        // Login failed, display an error message
        echo '<div class="container"><p class="error">valid email.</p></div>';
    }

    mysqli_close($db);
}
?>