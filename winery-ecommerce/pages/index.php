<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winery E-Commerce</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .hero {
            text-align: center;
            background-color: #333;
            padding: 50px 0;
            color: #fff;
        }
        .hero-content {
            max-width: 1200px;
            margin: 0 auto;
        }
        .btn {
            display: inline-block;
            padding: 12px 24px;
            background-color: #f39c12;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            margin-top: 20px;
        }
        .btn:hover {
            background-color: #e67e22;
        }
        .slideshow-container {
            position: relative;
            width: 100%;
            max-width: 100%;
            margin: 0 auto;
            overflow: hidden;
        }
        .slides {
            display: none;
            width: 100%;
        }
        .slideshow-container img {
            width: 100%;
            height: 500px; /* Fixed height for all banners */
            object-fit: cover; /* Ensures the image covers the container without distortion */
            vertical-align: middle;
        }
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -22px;
            padding: 16px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            user-select: none;
            background-color: rgba(0, 0, 0, 0.5);
        }
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }
        .prev {
            left: 0;
            border-radius: 0 3px 3px 0;
        }
        .prev:hover, .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }
        @-webkit-keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
        }
        @keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
        }
        .featured-products {
            text-align: center;
            padding: 20px;
        }
        .products {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            max-width: 1200px;
            margin: 40px auto;
        }
        .product {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            text-align: center;
            width: 200px;
            transition: transform 0.3s ease;
        }
        .product img {
            width: 100%;
            border-bottom: 1px solid #f4f4f4;
        }
        .product h3 {
            color: #333;
            margin: 10px 0;
        }
        .product p {
            color: #e53935;
            margin: 10px 0;
            font-size: 1.2em;
        }
        .product:hover {
            transform: translateY(-5px);
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>
<body>
    <?php include '../includes/header.php'; ?>
    <div class="hero">
        <div class="hero-content">
            <div class="slideshow-container">
                <div class="slides fade">
                    <img src="../assets/images/banner.jpg" alt="Banner 1">
                </div>
                <div class="slides fade">
                    <img src="../assets/images/banner2.jpg" alt="Banner 2">
                </div>
                <div class="slides fade">
                    <img src="../assets/images/banner.jpg" alt="Banner 3">
                </div>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <a href="products.php" class="btn">Shop Now</a>
        </div>
    </div>
    <main>
        <section class="section featured-products">
            <h2>Featured Products</h2>
            <div class="products">
                <div class="product">
                    <img src="../assets/images/product1.jpg" alt="Product 1">
                    <h3>Red Wine</h3>
                    <p>$29.99</p>
                </div>
                <div class="product">
                    <img src="../assets/images/product2.jpg" alt="Product 2">
                    <h3>White Wine</h3>
                    <p>$25.99</p>
                </div>
                <div class="product">
                    <img src="../assets/images/product3.jpg" alt="Product 3">
                    <h3>Rose Wine</h3>
                    <p>$27.99</p>
                </div>
                <div class="product">
                    <img src="../assets/images/product4.jpg" alt="Product 4">
                    <h3>Champagne</h3>
                    <p>$49.99</p>
                </div>
                <div class="product">
                    <img src="../assets/images/product5.jpg" alt="Product 5">
                    <h3>Sparkling Wine</h3>
                    <p>$39.99</p>
                </div>
            </div>
        </section>
    </main>
    <footer>
        © 2024 Winery E-Commerce. All rights reserved.
    </footer>
    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("slides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}    
            slides[slideIndex-1].style.display = "block";  
            setTimeout(showSlides, 3000); // Change image every 3 seconds
        }

        function plusSlides(n) {
            slideIndex += n;
            let slides = document.getElementsByClassName("slides");
            if (slideIndex > slides.length) {slideIndex = 1} 
            if (slideIndex < 1) {slideIndex = slides.length} 
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            slides[slideIndex-1].style.display = "block";  
        }
    </script>
</body>
</html>
