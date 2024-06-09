<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <?php include '../includes/header.php'; ?>

    <main>
        <section class="blog-section">
            <h2>Our Blog</h2>
            <div class="blog-posts">
                <div class="blog-post">
                    <img src="../assets/images/blog1.jpg" alt="Blog Post 1">
                    <h3>How to Choose the Perfect Wine</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel purus lacus...</p>
                    <a href="blog_post.php?id=1" class="btn">Read More</a>
                </div>
                <div class="blog-post">
                    <img src="../assets/images/blog2.jpg" alt="Blog Post 2">
                    <h3>Top 10 Wines for Summer</h3>
                    <p>Quisque vel laoreet mi. Fusce sit amet magna in libero dapibus bibendum...</p>
                    <a href="blog_post.php?id=2" class="btn">Read More</a>
                </div>
                <div class="blog-post">
                    <img src="../assets/images/blog3.jpg" alt="Blog Post 3">
                    <h3>Wine and Food Pairing Tips</h3>
                    <p>Aenean fermentum magna vel mi bibendum, in vehicula eros posuere...</p>
                    <a href="blog_post.php?id=3" class="btn">Read More</a>
                </div>
            </div>
        </section>
    </main>

    <?php include '../includes/footer.php'; ?>
</body>
</html>
