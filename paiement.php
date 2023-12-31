<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css\style1.css">
    <link rel="stylesheet" href="css\table.css">
</head>
<body>
    <div class="menu">
        <div id="logo"><h3>LOGO</h3></div>
        <div class="navigation">
            <nav>
                <ul>
                    <li><a href="admin.php">admin</a></li>
                    <li><a href="modifier.php">modifier</a></li>
                    <li><a href="paiement.php">paiement</a></li>
                    <li>ABOUT</li>
                    <li>CONTACT</li>
                </ul>
            </nav>
        </div>
    </div>
    <header>
        <div class="banner">

        </div>
    </header><br>

    <!-- block inscription -->
    <section class="ajoutP active">
        <!-- ajouter -->
        <div class="block">
            <h3>Ajouter une paiement</h3>
            <form action="controllers\ajoutPaiement.php" method='POST'>
                <label for="cinsc">Code inscription</label>
                <input type="text" id="cinsc" name="codeInscription" placeholder="code inscription.." required>

                <label for="mnt">montant</label>
                <input type="text" id="mnt" name="montant" placeholder="montant.." required>

                <label for="dP">Date de paiement</label>
                <input type="date" id="dP" name="dateP" placeholder="date paiement.." required><br>
            
                <input type="submit" name="submit" value="Ajouter">
            </form>
        </div>
    </section><br>

    <section class="afficherP">
        
        <div class="tableI">
            <h3>Liste paiement</h3>
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "urh";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM paiement";
                $result = $conn->query($sql);
                $data;

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
                    $data = $row;
                }
                echo "</table>";
                } else {
                echo "0 results";
                }
                $conn->close();
            ?>
        </div>
    </section><br>

    <!-- block recherche paiement -->
    <section class="recherchePaiement inactive">
        <?php include "controllers\\recherchePaiement.php" ?>
    </section>

    <!-- block modifier paiement -->
    <section class="modifierPaiement active">
        <!-- ajouter -->
        <div class="block">
            <h3>Modifier paiement</h3>
            <form action="controllers\updatePaiement.php" method='POST'>
                <label for="cinsc">id paiement</label>
                <input type="text" id="idP" name="idPaiement" placeholder="Id paiemment.." readonly>

                <label for="cinsc">Code inscription</label>
                <input type="text" id="codeI" name="codeInscription" placeholder="code inscription.." required>

                <label for="mnt">montant</label>
                <input type="text" id="mont" name="montant" placeholder="montant.." required>

                <label for="dP">Date paiement</label>
                <input type="date" id="dateP" name="dateP" placeholder="date paiement.." required><br>
            
                <input type="submit" name="submit" value="Modifier"><input type="reset" value="reset">
            </form>
        </div>
    </section><br>
    <script src="JavaScripts\padmin.js"></script>
</body>
</html>