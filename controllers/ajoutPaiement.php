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
            $stmt = $conn->prepare("INSERT INTO paiement (idPaiement, codeInscription, montant, dateP) VALUES (:idPaiement, :codeInscription, :montant, :dateP)");

            $alea = rand(10, 100000);
            $id = 'P' . $alea;

            // reccuperer la valeur des inputs
            $idPaiement = $id;
            $codeInscription = $_POST['codeInscription'];
            $montant = $_POST['montant'];
            $dateP = $_POST['dateP'];

            $stmt->bindParam(':idPaiement', $idPaiement);
            $stmt->bindParam(':codeInscription', $codeInscription);
            $stmt->bindParam(':montant', $montant);
            $stmt->bindParam(':dateP', $dateP);

            // executer la requete
            $stmt->execute();
            header("Location: ../index.php");
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
