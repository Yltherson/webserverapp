<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\form1.css">
    <link rel="stylesheet" href="css\table.css">
    <link rel="stylesheet" href="css\menu2.css">
    <link rel="stylesheet" href="css\footer.css">
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
                
                if($url ==="/webserverapp/?page=search-inscription"){

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
                if($url ==="/webserverapp/?page=search-paiment"){
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


            <!-- Footer -->
	<section id="footer">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Lien page</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="#"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i>About</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Lien page</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="index.html"><i class="fa fa-angle-double-right"></i>Login</a></li>
						<li><a href="index.html"><i class="fa fa-angle-double-right"></i>Disconnect</a></li>
						<li><a href="#" title="Design and developed by"><i class="fa fa-angle-double-right"></i>D@rkCode</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
					<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-envelope"></i></a></li>
					</ul>
				</div>
				<hr>
			</div>	
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					<p><a href="#">ITX-SOLUTION </a>Une societé de technologie qui est la pour vous servir</p>
					<p class="h6">© All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">Yltherson</a></p>
				</div>
				<hr>
			</div>	
		</div>
	</section>
	<!-- ./Footer -->
    
    
    <script src="app.js"></script>
    
    <!-- <script  src="JavaScripts\script.js"></script> -->
    <!-- <script src="JavaScripts\dmin.js"></script> -->
    <!-- <script src="JavaScripts\padmin.js"></script> -->
</body>
</html>