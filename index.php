<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style1.css">
    <link rel="stylesheet" href="css\table.css">
    <link rel="stylesheet" href="css\modifier.css">
    <title>Gestion Etablissement</title>
</head>
<body>
</div>
    <div id="app">
        <!-- Le contenu sera inséré dynamiquement ici -->
       
    </div>

    <!-- traitement recherche inscription -->
    <div id="search-inscrit">
        <div class="tableI">
            <?php
                // Rekipere URL
                $url = $_SERVER['REQUEST_URI'];
                
                if($url ==="/webserverapp/index.php?page=search-inscription"){

                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "urh";

                    $valR1 = "";
                    if($_SERVER["REQUEST_METHOD"] == "POST"){
                        $valR1 = $_POST["cr"];
                    }
                    
                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT * FROM inscription where codeInscription = "."'".$valR1."'";
                    
                    $result = $conn->query($sql);
                    $mac;

                    if ($result->num_rows > 0) {
                        echo "<table>
                                <tr>
                                    <th>CODE</th><th>PRENOM</th><th>NOM</th><th>SEXE</th><th>DATE DE NAISSANCE</th><th>CLASSE</th><th>FRAIS INSCRIPTION</th><th>DATE INSCRIPTION</th><th></th><th></th>
                                </tr>";
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    echo "<tr>
                                        <td>".$row["codeInscription"]."</td>
                                        <td>".$row["prenom"]."</td>
                                        <td>".$row["nom"]."</td>
                                        <td>".$row["sexe"]."</td>
                                        <td>".$row["dateNaissance"]."</td>
                                        <td>".$row["classe"]."</td>
                                        <td>".$row["fraisInscription"]."</td>
                                        <td>".$row["dateInscription"]."</td>
                                        <td><button type='button' onclick='updateIns(" . json_encode($row) . ")'>Update</button></td>
                                    <td>"
                                            ."<form method='POST' action='controllers\supprimerInscription.php'>"
                                            ."<input type='text'".'style="display: none"'." name='codeInscription' value='"
                                            .$row["codeInscription"]
                                            ."' ><input type='submit' value='supprimer'></form>
                                        </td>
                                    </tr>";
                                    $mac = $row;
                        }
                        // header("Location: ../admin.php");
                        // exit();
                        echo "</table>";
                    } else {
                        echo "0 results";
                        
                    }
                    $conn->close();  
                }
            ?>
        </div>
    </div>

    <!-- traitement recherche paiment -->
    <div id="search-paiment">
        <div class="tableI">
            <?php
                $url = $_SERVER['REQUEST_URI'];
                if($url ==="/webserverapp/index.php?page=search-paiment"){
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "urh";

                    $valR = "";
                    if($_SERVER["REQUEST_METHOD"] == "POST"){
                        $valR = $_POST["idPaiement"];
                    }

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT * FROM PAIEMENT where idPaiement = "."'".$valR."'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                    echo "<table>
                    <tr>
                        <th>ID PAIEMENT</th><th>CODE INSCRIPTION</th><th>MONTANT</th><th>DATE PAIEMENT</th><th></th><th></th>
                    </tr>";
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>".$row["idPaiement"]."</td>
                            <td>".$row["codeInscription"]."</td>
                            <td>".$row["montant"]."</td>
                            <td>".$row["dateP"]."</td>
                            <td><button type='button' onclick='updatePaiement(" . json_encode($row) . ")'>Update</button></td>
                            <td>"
                                ."<form method='POST' action='controllers\supprimerPaiement.php'>"
                                ."<input type='text'".'style="display: none"'." name='idPaiement' value='"
                                .$row["idPaiement"]
                                ."' ><input type='submit' value='supprimer'></form>
                            </td>
                        </tr>";
                    }
                    echo "</table>";
                    } else {
                    echo "0 results";
                    }
                    $conn->close();

                }
            ?>
        </div>
    </div>
    <script src="app.js"></script>
    <!-- <script src="JavaScripts\dmin.js"></script> -->
    <!-- <script src="JavaScripts\padmin.js"></script> -->
</body>
</html>