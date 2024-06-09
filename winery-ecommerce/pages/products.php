<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Products - Winery E-Commerce</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .products {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .products-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        .product-card {
            background-color: #e8f5e9;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            text-align: center;
            width: 250px;
            transition: transform 0.3s ease;
        }
        .product-card img {
            width: 100%;
            height: auto;
        }
        .product-card h3 {
            color: #333;
            font-size: 1.2em;
            margin: 10px 0;
        }
        .product-card p {
            color: #777;
            font-size: 1em;
        }
        .product-card .btn {
            display: inline-block;
            padding: 10px 15px;
            margin: 15px 0;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .product-card .btn:hover {
            background-color: #555;
        }
        .product-card:hover {
            transform: translateY(-10px);
        }
    </style>
</head>
<body>
    <?php include '../includes/header.php'; ?>
    <main>
        <section class="section products">
            <h2>Our Products</h2>
            <div class="products-grid">
                <div class="product-card">
                    <img src="../assets/images/product1.jpg" alt="Red Wine">
                    <h3>Red Wine</h3>
                    <p>$29.99</p>
                    <a href="product_detail.php?id=1" class="btn">View Details</a>
                </div>
                <div class="product-card">
                    <img src="../assets/images/product2.jpg" alt="White Wine">
                    <h3>White Wine</h3>
                    <p>$25.99</p>
                    <a href="product_detail.php?id=2" class="btn">View Details</a>
                </div>
                <div class="product-card">
                    <img src="../assets/images/product3.jpg" alt="Rose Wine">
                    <h3>Rose Wine</h3>
                    <p>$27.99</p>
                    <a href="product_detail.php?id=3" class="btn">View Details</a>
                </div>
                <div class="product-card">
                    <img src="../assets/images/product4.jpg" alt="Champagne">
                    <h3>Champagne</h3>
                    <p>$49.99</p>
                    <a href="product_detail.php?id=4" class="btn">View Details</a>
                </div>
                <div class="product-card">
                    <img src="../assets/images/product5.jpg" alt="Sparkling Wine">
                    <h3>Sparkling Wine</h3>
                    <p>$39.99</p>
                    <a href="product_detail.php?id=5" class="btn">View Details</a>
                </div>
            </div>
        </section>
    </main>
    <?php include '../includes/footer.php'; ?>
</body>
</html>
