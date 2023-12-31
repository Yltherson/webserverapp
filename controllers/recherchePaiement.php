<div class="tableI">
    <h3>chercher paiement</h3>
    <form method="POST" action="#">
        <input type="text" name="idPaiement" placeholder="Id paiem..." required>
        <input type="submit" name="submit" value="rechercher">
    </form>
    <?php
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
    ?>
</div><br>
