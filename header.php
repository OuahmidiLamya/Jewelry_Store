<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Jewelry Store</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <a href="home.php" class="logo">
            <img src="images/JewelryLogo.png" alt="">
        </a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="product.php">Products</a>
            <a href="review.php">Review</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
        </nav>
         <p> <a href="login.php">login</a> | <a href="register.php">register</a> </p> 
        <div class="icons">
            <div class="fas fa-user" id="user-button"></div>
            <div class="fas fa-search" id="search"></div>
            <div class="fas fa-shopping-cart" id="cart"></div>
            <div class="fas fa-bars" id="bars"></div>
        </div>
        <div class="search-form">
            <input type="search" class="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </div>
        <div class="user-box">
            <a href="logout.html" class="delete-button">logout</a>
        </div>
        <div class="container">
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="images/bracelet.png" alt="">
                <div class="content">
                    <h3>cart item 01</h3>
                    <div class="price">490.90MAD</div>
                </div>
            </div>
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="images/ring.png" alt="">
                <div class="content">
                    <h3>cart item 02</h3>
                    <div class="price">460.90MAD</div>
                </div>
            </div>
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="images/sonia hoop earrings.png" alt="">
                <div class="content">
                    <h3>cart item 03</h3>
                    <div class="price">167.90MAD</div>
                </div>
            </div>
            <a href="#" class="button">checkout now</a>
        </div>
    </div> 
    </header>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>