<?php 

try {
    $db = new PDO("mysql:host=localhost;dbname=nounou", "root", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
    exit();
}
if(isset($_POST['btn-ajouter'])){
    $id = $_GET['id'];

    $telephone = $_POST['telephone'];
    $adresse = $_POST['adresse'];
    $age = $_POST['age'];

    //$sql = "UPDATE utilisateurs SET telephone = '$telephone' WHERE id = $id";
    $sql2 = "UPDATE utilisateurs SET adresse = '$adresse' WHERE id = $id";
    $sql3 = "UPDATE utilisateurs SET age = '$age' WHERE id = $id";

    //$stmt = $db->prepare($sql);
    $stmt2 = $db->prepare($sql2);
    $stmt3 = $db->prepare($sql3);

    //$stmt->execute();
    $stmt2->execute();
    $stmt3->execute();

    header("location: page_nounou.php");
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="telephone" placeholder="Contact" required><br>
        <input type="text" name="age" placeholder="Age" required><br>
        <input type="text" name="adresse" placeholder="Ville/commune/quartier" required><br>

        <button id="btn-ajouter" name="btn-ajouter">Valider</button>
    </form>
    
    
</body>
</html>