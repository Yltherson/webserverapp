<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\modifier.css">
    <title>Document</title>
</head>
<body>
    <div>
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
        <form action="controllers\modifierInscription.php" method='POST'>
            <div class="form">
                <div class="img">
                </div>

                <div class="info"> 
                    <div class="lign">
                        <div class="col-lign">
                            <label for="nom">Nom</label><br/>
                            <input  style="width:100%; height:25px" name="nom" value="" id="nom" required/>
                        </div>
                        <div class="col-lign">
                            <label for="nom">Prenom</label><br/>
                            <input  style="width:100%; height:25px" name="prenom" value="" id="prenom" required/>
                        </div>
                    </div>
                    
                    <div class="lign">
                        <div class="col-lign">
                            <label for="birth">Date de naissance</label><br/>
                            <input style="width:100%; height:25px" type="date" id="birth" name="dateNaissance" placeholder="Your birthday.." required><br>
                        </div>
                        <div class="col-lign">
                            <label for="birth">Date d'inscription</label><br/>
                            <input style="width:100%; height:25px" type="date" id="birth" name="dateInscription" placeholder="signup date.." required><br>
                        </div>
                    </div>

                    <div class="lign">
                        <div class="col-lign">
                            <label for="sub">Frais inscription</label><br/>
                            <input style="width:100%; height:25px" type="number" id="sub" name="fraisInscription" placeholder="Your fee.." required><br>
                        </div>
                        <div class="col-lign">
                            <label for="class">Classe </label><br>
                            <select name="classe" id="class" style="width:100%; height:25px">
                                <option value="L1">L1</option>
                                <option value="L2">L2</option>
                                <option value="L3">L3</option>
                                <option value="L4">L4</option>
                            </select><br>
                        </div>
                    </div>

                    <div class="lign">
                        <div class="col-lign">
                            <label for="sex">Sexe</label><br>
                            <select name="sexe" id="sex" style="width:100%; height:25px">
                                <option value="masculin">Masculin</option>
                                <option value="feminin">Feminin</option>
                            </select><br>
                        </div>
                        <div class="col-lign">
                            <label for="code">Code</label><br/>
                            <input  style="width:100%; height:25px" name="code" value="" id="code" required/>
                        
                        </div>
                    </div>
                </div>
            </div>
            <div style="text-align:right; padding:25px;">
                <input type="submit" name="submit" value="Update" style="font-size:20px; padding:7px; background-color:blue; border:none; color:white;">
                <button type="submit" name="submit" style="font-size:20px; padding:7px; background-color:red; border:none; color:white;">Cancel</button>
            </div>
        </form>
    </div>
</body>
</html>