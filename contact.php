<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jewelrystore_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $messageText = $_POST["message"];

    $stmt = $conn->prepare("INSERT INTO contacts (name, email, number, message) VALUES (?, ?, ?, ?)");

    $stmt->bind_param("ssss", $name, $email, $number, $messageText);

    if ($stmt->execute()) {
        $successMessage = "Merci pour votre message. Nous vous répondrons bientôt.";
        header("Location: ?message=" . urlencode($successMessage));
        exit();
    } else {
        $errorMessage = "Une erreur est survenue lors de l'enregistrement du message. Veuillez réessayer plus tard.";
        $errorMessage .= " Erreur SQL : " . $stmt->error;
        echo $errorMessage;
    }

    $stmt->close();
}
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=C, initial-scale=1.0">
    <title>The Jewelry Store</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <?php include('header.php') ?>

    <section class="Contact" id="Contact">
        <h1 class="heading"> <span>contact</span> us </h1>
        <div class="row">
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6651.98799438825!2d-7.621871700000001!3d33.5275417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda62d7a9dfa660f%3A0xf3e97c7e53573817!2sQuartier%20Californie%2C%20Casablanca!5e0!3m2!1sfr!2sma!4v1701591465654!5m2!1sfr!2sma" 
             allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            <form action="contact.php" method="post">
                <h3>get in touch</h3>
                <div class="inputBox">
                    <span class="fas fa-user"></span>
                    <input type="text" name="name" placeholder="name">
                </div>
                <div class="inputBox">
                    <span class="fas fa-envelope"></span>
                    <input type="email" name="email" placeholder="email">
                </div>
                <div class="inputBox">
                    <span class="fas fa-phone"></span>
                    <input type="number" name="number" placeholder="number">
                </div>
                <div class="inputBox">
                    <span class="fas fa-comment"></span>
                    <input type="text" name="message" placeholder="messege">
                </div>
                <input type="submit" value="send" class="button">
            </form>
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
   
    <script src="script.js"></script>
</body>
</html>