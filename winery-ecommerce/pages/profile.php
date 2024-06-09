<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="../path/to/your/styles.css"> <!-- Make sure the path is correct -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        .profile-container {
            margin-top: 50px;
        }
        header, footer {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
        }
        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to your Profile</h1>
    </header>
    <div class="profile-container">
        <h2>Hello, <?php echo $_SESSION['username']; ?>!</h2>
        <p>Welcome to your profile page.</p>
        <a href="logout.php">Logout</a>
    </div>
    <footer>
        <p>&copy; 2024 Winery E-Commerce. All rights reserved.</p>
    </footer>
</body>
</html>
