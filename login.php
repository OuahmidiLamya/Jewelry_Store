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
    $email = $_POST["email"];
    $password = $_POST["password"];

    $requete = $connexion->prepare("SELECT * FROM users WHERE email = ?");
    
    if ($requete) {
        $requete->bind_param("s", $email);
        $requete->execute();

        $resultat = $requete->get_result();

        if ($resultat->num_rows > 0) {
            $utilisateur = $resultat->fetch_assoc();

            if (password_verify($password, $utilisateur["password"])) {
                session_start();
                $_SESSION["user_id"] = $utilisateur["user_id"];
                $_SESSION["user_type"] = $utilisateur["user_type"];
                
                header("Location: index.php");
                exit();
            } else {
                $erreur_message = "Mot de passe incorrect";
            }
        } else {
            $erreur_message = "Aucun utilisateur trouvé avec cet email";
        }

        $requete->close();
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
    <<link rel="stylesheet" href="style.css">
</head>
<body>
<?php include('header.php') ?>

     <div class="form-container">
        <form action="login.php" method="post">
            <h3>login now</h3>
            <input type="email" name="email" placeholder="enter your email" required class="box">
            <input type="password" name="password" placeholder="enter your password" required class="box">
            <input type="submit" name="submit" value="login now" class="button">
            <p>don't have an account? <a href="register.php">register now</a></p>
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