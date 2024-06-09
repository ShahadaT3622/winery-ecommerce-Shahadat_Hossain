<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Dummy credentials for demonstration
    $username = "admin";
    $password = "password";

    // Fetching form data
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];

    // Check credentials
    if ($input_username === $username && $input_password === $password) {
        // Set session variables
        $_SESSION['username'] = $username;
        // Redirect to profile page
        header("Location: profile.php");
        exit();
    } else {
        // Redirect back to login with an error
        header("Location: login.php?error=1");
        exit();
    }
}
?>
