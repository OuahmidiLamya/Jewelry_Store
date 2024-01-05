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

    <section class="Home" id="Home">
        <div class="content">
            <h3>Radiant Elegance: Discover Timeless Beauty at The Jewelry Store</h3>
            <p>Welcome to The Jewelry Store! Explore a world of timeless beauty with our exquisite collection. 
                Find the perfect piece to elevate your style and cherish special moments.
            </p>
            <a href="product.php" class="button">Explore Collection</a>
        </div>
    </section>

    
    <section class="Products" id="Products">
        <h1 class="heading"> our <span>products</span> </h1>
        <div class="swiper slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <img src="images/bracelet.png" alt="">
                    <h3>Ora Moonstone Bracelet</h3>
                    <div class="price">490.90MAD</div>
                    <a href="" class="button">add to cart</a>
                </div>
                <div class="swiper-slide box">
                    <img src="images/ring.png" alt="">
                    <h3>Double Moonstone Ring</h3>
                    <div class="price">460.90MAD</div>
                    <a href="" class="button">add to cart</a>
                </div>
                <div class="swiper-slide box">
                    <img src="images/necklace.png" alt="">
                    <h3>Moonstone Necklace</h3>
                    <div class="price">590.90MAD</div>
                    <a href="" class="button">add to cart</a>
                </div>
                <div class="swiper-slide box">
                    <img src="images/erearrings.png" alt="">
                    <h3>Sun Earrings</h3>
                    <div class="price">350.90MAD</div>
                    <a href="" class="button">add to cart</a>
                </div>
            </div>
        </div>
        
    </section>
    <section class="About" id="About">
        <h1 class="heading"> <span> About </span> Us </h1>
        <div class="row">
            <div class="image">
                <img src="images/about.png" alt="">
            </div>
            <div class="content">
                <h3>what makes our store special?</h3>
                <p>The Jewelry Store stands out for its seamless blend of timeless elegance and contemporary design. 
                    What makes us special is our unwavering commitment to quality craftsmanship, 
                    ensuring each piece is a work of art. With a focus on authenticity and a personalized shopping 
                    experience, we strive to provide jewelry that resonates with your unique style and celebrates 
                    life's special moments. Discover the exceptional at The Jewelry Store.
                </p>
                <a href="about.php" class="button">Learn More</a>
            </div>
        </div>
    </section>
    
    <section class="Review" id="Review">
        <h1 class="heading">custumors <span>reviews</span></h1>
        <div class="container">
            <div class="container__left">
              <h1>Read what our customers love about us</h1>
              <p>
                Our customers consistently express their appreciation for the exceptional level of service we provide. 
                They often highlight the dedication of our knowledgeable and friendly staff, who go above and beyond 
                to ensure a positive experience. Additionally, customers value the quality of our products,
                noting their reliability and effectiveness. The seamless and user-friendly processes 
                we have in place also contribute to customer satisfaction. Ultimately, the genuine care we show 
                for our customers, coupled with the excellence in our offerings, forms the foundation of the positive 
                feedback we receive.
              </p>
              <a href="review.php" class="button">Read Reviews</a>
            </div>
            
    </section>

    <section class="footer">
        <div class="share">
            <a href="" class="fab fa-facebook-f"></a>
            <a href="" class="fab fa-x-twitter"></a>
            <a href="" class="fab fa-instagram"></a>
            <a href="" class="fab fa-pinterest"></a>
        </div>
        <div class="links">
            <a href="home.php">Home</a>
            <a href="product.php">Products</a>
            <a href="review.php">Review</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
        </div>
        <div class="credit">&copy; 2023 <span>The Jewelry Store</span> all rights reserved</div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>