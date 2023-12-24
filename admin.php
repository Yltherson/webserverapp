<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css\style1.css">
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
                <input type="text" id="sex" name="sexe" placeholder="Your gender.." required>

                <label for="birth">Date de naissance</label>
                <input type="date" id="birth" name="dateNaissance" placeholder="Your birthday.." required><br>
                
                <label for="class">Classe </label>
                <input type="text" id="class" name="classe" placeholder="Your class.." required>

                <label for="sub">Frais inscription</label>
                <input type="number" id="sub" name="fraisInscription" placeholder="Your fee.." required>

                <label for="birth">Date d'inscription</label>
                <input type="date" id="birth" name="dateInscription" placeholder="signup date.." required><br>
            
                <input type="submit" name="submit" value="Ajouter">
            </form>
        </div>
    </section><br>

    <section class="afficherInsc">
        <div class="block">
            <h3>Liste inscription</h3>
        </div>
    </div></section>

    <!-- block paiement -->
    <section class="paiement inactive">

    </section>
</body>
</html>