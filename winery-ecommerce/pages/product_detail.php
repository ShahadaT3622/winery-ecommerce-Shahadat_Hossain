<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail - Winery E-Commerce</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        main {
            flex: 1;
        }
        .product-detail {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .product-detail-container {
            display: flex;
            flex-direction: row;
            align-items: center;
            gap: 20px;
        }
        .product-image {
            flex: 0 0 40%;
        }
        .product-image img {
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .product-info {
            flex: 1;
            padding: 20px;
        }
        .product-info h2 {
            color: #333;
            font-size: 2em;
            margin-bottom: 15px;
        }
        .product-info .price {
            color: #e53935;
            font-size: 1.8em;
            margin-bottom: 15px;
        }
        .product-info .description {
            color: #777;
            font-size: 1em;
            line-height: 1.5;
            margin-bottom: 20px;
        }
        .product-info .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .product-info .btn:hover {
            background-color: #555;
            transform: translateY(-2px);
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: relative;
            width: 100%;
        }
    </style>
</head>
<body>
    <?php include '../includes/header.php'; ?>
    <main>
        <section class="section product-detail">
            <div class="product-detail-container">
                <div class="product-image">
                    <img src="../assets/images/product1.jpg" alt="Product Image">
                </div>
                <div class="product-info">
                    <h2>Red Wine</h2>
                    <p class="price">$29.99</p>
                    <p class="description">This is a fine red wine with rich flavors and a smooth finish. Perfect for any occasion.</p>
                    <a href="checkout.php" class="btn">Buy Now</a>
                </div>
            </div>
        </section>
    </main>
    <footer>
        © 2024 Winery E-Commerce. All rights reserved.
    </footer>
</body>
</html>
