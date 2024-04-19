<?php

require 'C:/xampp/htdocs/nounou/config/commandes.php'; 


try {
    $db = new PDO("mysql:host=localhost;dbname=nounou", "root", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
    exit();
}


if(isset($_POST['btn_nounou'])){
    $type = "nounou";
    $utilisateur = new Utilisateur($db);
    $utilisateur->inscription($type);
}
if(isset($_POST['btn_parent'])){
    $type = "parent";
    $utilisateur = new Utilisateur($db);
    $utilisateur->inscription($type);
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
    <link rel="stylesheet" href="//localhost/nounou/css/styles_inscription.css">
    <title>Page de connexion</title>
    <script src="//localhost/nounou/js/script_in.js" defer></script>
</head>
<body>
    <h1><a href="//localhost/nounou/index.php">Nanny Corp<br><span>Agence de placement de Nounou</span></a></h1>

    <div class="container">

        <div class="nounou-container">
            <div class="box">
                <h3>Si vous souhaitez creer un compte en tant que Nounou</h3>
                <p>Cliquez sur le bouton ci-dessous.</p>
                <button id="btn-creer">Creez un compte nounou</button>
            </div>
            <form action="" method="post">
                <h2>Creer un compte en tant que nounou</h2>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a><br>
                <p style="color: white;">OU</p>

                <input type="text" name="nom" placeholder="Nom" required><br>
                <input type="text" name="prenom" placeholder="Prenom" required><br>
                <input type="email" name="mail" placeholder="Email" required><br>
                <input id="mdp" type="password" name="password" placeholder="Creer un mot de passe" required><br>
                <input id="mdp2" type="password" name="confirm_password" placeholder="Confirmer le mot de passe" required><br>
                <span id="mdpMatchMessage" style="color: red;"></span><br>
                
                <button type="submit" name="btn_nounou">Creer un compte nounou</button>
                <i><?php 
                    
                ?></i>
            </form>
        </div>
        <div class="parent-container">
            <div class="box">
                <h3>Si vous souhaitez creer un compte en tant que Parent</h3>
                <p>Cliquez sur le bouton ci-dessous.</p>
                <button id="btn-connexion">creer un compte parent</button>
            </div>
            <form action="" method="post">
                <h2>Creer un compte en tant que parent</h2>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a><br>
                <p style="color: white;">OU</p>
                <input type="text" name="nom" placeholder="Nom" required><br>
                <input type="text" name="prenom" placeholder="Prenom" required><br>
                <input type="email" name="mail" placeholder="Email" required><br>
                <input id="mdp" type="password" name="password" placeholder="Creer un mot de passe" required><br>
                <input id="mdp2" type="password" name="confirm_password" placeholder="Confirmer le mot de passe" required><br>

                <span id="mdpMatchMessage" style="color: red;"></span><br>
                
                <button type="submit" name="btn_parent">Creer un compte parent</button>
                
            </form>
        </div>

    </div>

    <footer>
        <p>ok</p>
    </footer>
    
</body>
</html>