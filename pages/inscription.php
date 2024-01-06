<?php include "navbar.php" ?>
<section class="afficherInsc">
    <div class="tableI">
        <h3>Liste inscription</h3>
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

            $sql = "SELECT * FROM inscription";
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
                echo "</table>";
            } else {
            echo "0 results";
            }
            $conn->close();
        ?>
    </div>
</section><br>