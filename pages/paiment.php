<?php include "navbar.php" ?>
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