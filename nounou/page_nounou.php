<?php
// Démarrer la session
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['utilisateur'])) {
    // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
    header("Location: http://localhost/nounou/index.php");
    exit();
}

// Récupérer les informations de l'utilisateur depuis la session
$utilisateur = $_SESSION['utilisateur'];



if (isset($_GET['logout'])) {
    // Détruit toutes les données de session
    session_destroy();
    // Redirige vers la page de connexion
    header('Location: index.php');
    exit;
}

// Fermer la connexion à la base de données
$db = null;

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
    <link rel="stylesheet" href="css/styles_acceuil.css">
    <script src="js/script_acceuil.js" defer></script>
    <title>Acceuil</title>
    
    
</head>
<body>
    <header>
        <div class="nav-top">
            <button class="rs" id="facebook"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="19" viewBox="0 -5 24 30"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg></button>
            <button class="rs" id="twitter"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="19" viewBox="0 -5 24 30"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg></button>
            <button class="rs" id="insta"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="19" viewBox="0 -5 24 30"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg></button>
            <h1><a href="page_nounou.php">Nanny Corp<br><span>Agence de placement de Nounou</span></a></h1>
            <button id="btn-compte">
                <span class="material-symbols-outlined">person</span> 
                <?php
                    $type = $utilisateur['type_utilisateur'] ;
                    echo "<section>$type</section>";
                ?>
            </button>
            <p>
            <?php 
                echo $utilisateur['nom'].' '.$utilisateur['prenom'];
            ?>
            </p>
        </div>
        <div class="nav-down">
            <li id="acceuil"><a href="index.php">Acceuil</a></li>
            <li><a href="propos.php">À Propos</a></li>
            <li><a href="blog.php">Blog</a></li>
            <button>Contactez-nous</button>
            <a href="?logout=true">Deconnexion</a>
        </div>
    </header>
    <main> 
        <img id="img1" src="img/img2.2.jpeg" alt="image de nounou">
        <div class="text-space">
            <h4>Bienvenue sur Nanny Corp !</h4>
            <h1>votre partenaire de confiance pour le placement de nounous dans les familles.</h1>

            <div class="search">
                <button id="btn-location"><span class="material-symbols-outlined">location_on</span></button>
                <input type="text" placeholder="Localisation">
                
                <select name="" id="choice">
                    <option value="" disabled selected hidden>Choisissez une option</option>
                    <option value="1">je cherche une nounou</option>
                    <option value="2">Je cherche des enfants à garder</option>
                </select>
                <button id="btn-search"><span class="material-symbols-outlined">search</span></button>
            </div>
            
        </div>
        <div class="info">
            <div class="box" id="box1">
                <h2>Nous sommes disponibles 24h/24</h2>
            </div>
            <div class="box" id="box2">
                <h2>Gestion des emplois du temps des nounous</h2>
            </div>
            <div class="box" id="box3">
                <h2>Communication simplifiée entre parents et nounous</h2>
            </div>
            <div class="box" id="box4">
                <h2>Processus de paiement automatisé</h2>
            </div>
        </div>
       



    </main>




    <footer>
        <p>&copy; 2024 Nanny Corporation</p>
    </footer>
    
</body>
</html>
