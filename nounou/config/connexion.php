<?php
// Informations de connexion à la base de données
try {
    // Connexion à la base de données avec PDO
    $db = new PDO("mysql:host=localhost;dbname=nounou;charset=utf8", "root", "");
    
    // Définition de l'attribut PDO pour afficher les erreurs SQL
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    // En cas d'erreur de connexion PDO
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}
?>