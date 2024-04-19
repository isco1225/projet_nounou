<?php 
require 'C:/xampp/htdocs/nounou/config/commandes.php'; 


try {
    $db = new PDO("mysql:host=localhost;dbname=nounou", "root", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
    exit();
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations<?php echo "id = $id" ?></title>
    <link rel="stylesheet" href="//localhost/nounou/css/styles_info.css">
</head>
<body>
    <?php 
    $id = $_GET['id'];
    $nom = $_GET['nom'];
    $prenom = $_GET['prenom'];

    echo 
    "
    <div class='entete'>
       

    </div>
    <div class='case-person'>
        <section>
            <span class='material-symbols-outlined'>person</span>
        </section>
    </div> 
    <div class='info'>
        <h2>Réserver</h2>
        <button>Contactez</button>
    </div>
    ";
    
    /*
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $adresse = $_POST['adresse'];
        $numero = $_POST['numero'];
         $info = $_POST['nom'];*/
    ?>
</body>
</html>