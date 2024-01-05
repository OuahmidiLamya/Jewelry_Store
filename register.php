<?php
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$base_de_donnees = "jewelrystore_db";

$connexion = new mysqli($serveur, $utilisateur, $motdepasse, $base_de_donnees);

if ($connexion->connect_error) {
    die("La connexion à la base de données a échoué : " . $connexion->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); 
    $user_type = $_POST["user_type"];

    $requete = $connexion->prepare("INSERT INTO users (name, email, password, user_type) VALUES (?, ?, ?, ?)");

    if ($requete) {
        $requete->bind_param("ssss", $name, $email, $password, $user_type);
        $requete->execute();

        $requete->close();

        header("Location: index.php");
        exit();
    } else {
        die("Erreur lors de la préparation de la requête : " . $connexion->error);
    }
}
$connexion->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Jewelry Store</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="inscription.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include('header.php') ?>

     <div class="form-container">
        <form action="register.php" method="Post">
            <h3>register now</h3>
            
            <input type="text" name="name" placeholder="enter your name" required class="box">
            <input type="email" name="email" placeholder="enter your email" required class="box">
            <input type="password" name="password" placeholder="enter your password" required class="box">
            <input type="password" name="confirm password" placeholder="confirm your password" required class="box">
            <select name="user_type" class="box">
                <option value="user">user</option>
                <option value="admin">admin</option>
            </select>
            <input type="submit" value="register now" class="button">
            <p>already have an account? <a href="login.php">login now</a></p>
        </form>
     </div>

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