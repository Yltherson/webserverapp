<?php
    // require_once 'C:\xampp\htdocs\webserverapp\models\Inscription.php';

    if ($_POST['submit']) {

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "urh";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

            // Configurer le mode d'erreur PDO pour générer des exceptions
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Préparer la requête SQL et lier les paramètres
            $stmt = $conn->prepare("INSERT INTO inscription (codeInscription, nom, prenom, sexe, dateNaissance, classe, fraisInscription, dateInscription) VALUES (:codeInscription, :nom, :prenom, :sexe, :dateNaissance, :classe, :fraisInscription, :dateInscription)");

            $alea = rand(10, 100000);
            $code = 'C' . $alea;

            // reccuperer la valeur des inputs
            $codeInscription = $code;
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $sexe = $_POST['sexe'];
            $dateNaissance = $_POST['dateNaissance'];
            $classe = $_POST['classe'];
            $fraisInscription = $_POST['fraisInscription'];
            $dateInscription = $_POST['dateInscription'];

            $stmt->bindParam(':codeInscription', $codeInscription);
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':prenom', $prenom);
            $stmt->bindParam(':sexe', $sexe);
            $stmt->bindParam(':dateNaissance', $dateNaissance);
            $stmt->bindParam(':classe', $classe);
            $stmt->bindParam(':fraisInscription', $fraisInscription);
            $stmt->bindParam(':dateInscription', $dateInscription);

            // executer la requete
            $stmt->execute();

        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
        $conn = null;
    } else {
        echo "Formulaire non soumis";
    }
?>
