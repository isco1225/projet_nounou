<?php 
class Utilisateur{
    // Méthodes pour gérer les utilisateurs (inscription, connexion, etc.)
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    // gerer les inscriptions
    public function inscription($type){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['mail'];
        $mot_de_passe = $_POST['password'];
        $confirm_pass = $_POST['confirm_password'];
        
    
        // Vérifier si les mots de passe correspondent
        if ($confirm_pass != $mot_de_passe){
            echo '<scrip;>alert("Les mots de passe ne correspondent pas !");</script>';
        } else {
            // Hasher le mot de passe
           // $mot_de_passe_hash = password_hash($mot_de_passe, PASSWORD_DEFAULT);
    
            $sql = "INSERT INTO utilisateurs (nom, prenom, email, mot_de_passe, type_utilisateur) VALUES (:nom, :prenom, :email, MD5(:mot_de_passe), :type_utilisateur)";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':prenom', $prenom);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':mot_de_passe', $mot_de_passe);
            $stmt->bindParam(':type_utilisateur', $type);
    
            // Exécuter la requête
            $stmt->execute();

            $sql = "SELECT id FROM utilisateurs";
            $stmt2 = $this->db->prepare($sql);
            $stmt2->execute();

            $id = $stmt2->fetch(PDO::FETCH_ASSOC);


            if ($type === 'nounou') {
                header("Location: http://localhost/nounou/finalisation_inscription.php?id=$id");
            } else {
                header("Location: http://localhost/nounou/page_parent.php");
            }


        }
    }
    
    public function connexion(){
        $email = $_POST['mail'];
        $mot_de_passe = $_POST['password'];
    
        $sql = "SELECT * FROM utilisateurs WHERE email = :email";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();


        $utilisateur = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if($utilisateur){
            // Vérifier si le mot de passe est correct
            if (md5($mot_de_passe) === $utilisateur['mot_de_passe']) {
                // Authentification réussie
                // Démarrez la session et stockez les informations de l'utilisateur si nécessaire
                session_start();
                $_SESSION['utilisateur'] = $utilisateur;
    
                // Rediriger l'utilisateur en fonction du type d'utilisateur
                if ($utilisateur['type_utilisateur'] === 'nounou') {
                    header("Location: http://localhost/nounou/page_nounou.php");
                } else {
                    header("Location: http://localhost/nounou/page_parent.php");
                }
            } else {
                echo "Mot de passe incorrect !";
            }
        } else {
            echo "Utilisateur non trouvé !";
        }
    }
    
}

class Fonctions{
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function afficher_nounou(){
        $query = "SELECT*FROM utilisateurs WHERE type_utilisateur = :type_utilisateur ";
        
        $stmt = $this->db->prepare($query);

        
        $type_utilisateur = "nounou";
        $stmt->bindParam(':type_utilisateur', $type_utilisateur);
        $stmt->execute();

        $nounou = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $nounou;

        $stmt->closeCursor();
    }

    public function ajouter_infos($id){
        $telephone = $_POST['telephone'];
    }
}
?>

