<?php
    // require_once 'C:\xampp\htdocs\webserverapp\models\Inscription.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "urh";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

            // Configurer le mode d'erreur PDO pour générer des exceptions
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Préparer la requête SQL et lier les paramètres
            $stmt = $conn->prepare("DELETE FROM paiement where idPaiement=:idPaiement");

            // reccuperer la valeur de input
            $idPaiement = $_POST['idPaiement'];

            $stmt->bindParam(':idPaiement', $idPaiement);

            // executer la requete
            $stmt->execute();
            header("Location: ../admin.php");
            exit();
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
        $conn = null;
    } else {
        echo "Formulaire non soumis";
        exit;
    }

?>
