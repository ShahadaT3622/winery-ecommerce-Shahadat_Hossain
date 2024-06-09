<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Map</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
        }
        .logo img {
            height: 30px;
        }
        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
        }
        nav ul li {
            margin: 0 15px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
            padding: 5px 10px;
        }
        nav ul li a:hover {
            background-color: #555;
            border-radius: 5px;
        }
        .sitemap-container {
            max-width: 900px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .sitemap-container h1 {
            text-align: center;
            color: #333;
        }
        .sitemap-container ul {
            list-style: none;
            padding: 0;
        }
        .sitemap-container ul li {
            margin: 10px 0;
        }
        .sitemap-container ul li a {
            color: #007BFF;
            text-decoration: none;
        }
        .sitemap-container ul li a:hover {
            text-decoration: underline;
        }
        .sitemap-container ul ul {
            margin-left: 20px;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="../assets/images/logo.png" alt="Winery Logo">
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="sitemap.php">Site Map</a></li>
            </ul>
        </nav>
    </header>
    <div class="sitemap-container">
        <h1>Site Map</h1>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="products.php">Products</a>
                <ul>
                    <li><a href="category1.php">Category 1</a></li>
                    <li><a href="category2.php">Category 2</a></li>
                </ul>
            </li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="terms.php">Terms and Conditions</a></li>
            <li><a href="privacy.php">Privacy Policy</a></li>
        </ul>
    </div>
    <footer>
        &copy; 2024 Your Winery. All rights reserved.
    </footer>
</body>
</html>
