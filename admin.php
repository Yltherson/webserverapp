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
                    <li>HOME</li>
                    <li>INSCRIPTION</li>
                    <li>PAIEMENT</li>
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
    <section class="ajoutInscri active">
        <!-- ajouter -->
        <div class="block">
            <h3>Ajouter une Inscription</h3>
            <form action="controllers\ajoutInscription.php" method='POST'>
                <label for="pnom">prenom</label>
                <input type="text" id="pnom" name="prenom" placeholder="Your first name.." required>

                <label for="nom">nom</label>
                <input type="text" id="nom" name="nom" placeholder="Your last name.." required>

                <label for="sex">Sexe</label>
                <select name="sexe" id="sex">
                    <option value="masculin">Masculin</option>
                    <option value="feminin">Feminin</option>
                </select><br><br>

                <label for="birth">Date de naissance</label>
                <input type="date" id="birth" name="dateNaissance" placeholder="Your birthday.." required><br>
                
                <label for="class">Classe </label>
                <select name="classe" id="class">
                    <option value="L1">L1</option>
                    <option value="L2">L2</option>
                    <option value="L3">L3</option>
                    <option value="L4">L4</option>
                </select><br><br>

                <label for="sub">Frais inscription</label>
                <input type="number" id="sub" name="fraisInscription" placeholder="Your fee.." required><br><br>

                <label for="date">Date d'inscription</label>
                <input type="date" id="date" name="dateInscription" placeholder="signup date.." required><br>
            
                <input type="submit" name="submit" value="Ajouter">
            </form>
        </div>
    </section><br>

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

                if ($result->num_rows > 0) {
                echo "<table>
                <tr>
                    <th>CODE</th><th>PRENOM</th><th>NOM</th><th>SEXE</th><th>DATE DE NAISSANCE</th><th>CLASSE</th><th>FRAIS INSCRIPTION</th><th>DATE INSCRIPTION</th>
                    <th>
                        <from method='post' action='#'>
                            <input type ='search' name='search'>
                            <input type='submit' name='btnSearch' value='search'>
                        </form>
                    </th>
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
                        <td>"
                            ."<form method='POST' action='controllers\supprimerInscription.php'>"
                            ."<input type='text' name='codeInscription' value='"
                            .$row["codeInscription"]
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
        </div>
    </section>

    <!-- block paiement -->
    <section class="paiement inactive">
        
    </section>

    "style=\"display: none;\""
</body>
</html>