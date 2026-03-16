<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Message envoyé</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nom = $_POST['nom'];
            $email = $_POST['email'];
            $sujet = $_POST['sujet'];
            $message = $_POST['message'];
            
            echo "<div class='confirmation'>";
            echo "<i class='fas fa-check-circle'></i>";
            echo "<h2>Message envoyé !</h2>";
            echo "<p><strong>Nom :</strong> " . $nom . "</p>";
            echo "<p><strong>Email :</strong> " . $email . "</p>";
            echo "<p><strong>Sujet :</strong> " . $sujet . "</p>";
            echo "<p><strong>Message :</strong> " . $message . "</p>";
            echo "<a href='index.html' class='btn'>Retour à l'accueil</a>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>