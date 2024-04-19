<?php

require 'C:/xampp/htdocs/nounou/config/commandes.php'; 


try {
    $db = new PDO("mysql:host=localhost;dbname=nounou", "root", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
    exit();
}


if(isset($_POST['btn_connexion'])){
    
    $utilisateur = new Utilisateur($db);
    $utilisateur->connexion();
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Symbols+Outlined"
    rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&family=Poppins:ital,wght@0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="//localhost/nounou/css/styles_connexion.css">
    <title>Page de connexion</title>
    <script src="//localhost/nounou/js/script_connexion.js" defer></script>
</head>
<body>
    <h1><a href="//localhost/nounou/index.php">Nanny Corp<br><span>Agence de placement de Nounou</span></a></h1>

    <div class="container">
        <div class="connexion-container">
            <div class="box">
                <h3>Avez vous déjà un compte ?</h3>
                <p>Cliquez sur le bouton ci-dessous.</p>
                <button id="btn-connexion">Se connecter</button>
            </div>
            <form action="" method="post">
                <h2>CONNEXION</h2>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a><br>
                <p style="color: white;">OU</p>
                <input type="email" name="mail" placeholder="Email" required><br>
                <input type="password" name="password" placeholder="Mot de passe" required><br>
                <a href="#" id="mtp">Mot de passe oublié ?</a><br>
                <button type="submit" name="btn_connexion">Se connecter</button>
                
            </form>
        </div>

    </div>
    
</body>
</html>